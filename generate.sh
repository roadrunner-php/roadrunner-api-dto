set -euo pipefail

mkdir -p ./generated

GRPC_PLUGIN=`command -v grpc_php_plugin || true`

# If $GRPC_PLUGIN is empty then write error message and exit
if [ -z "$GRPC_PLUGIN" ]; then
  echo "Error: grpc_php_plugin not found."
  exit 1
fi

echo "Generating RoadRunner API"

for i in `find ./api/roadrunner/api -name "*.proto" -type f`; do
  protoc \
  --proto_path=api/roadrunner/api \
  --proto_path=api/third_party/api \
  --php_out=generated $i \
  --experimental_allow_proto3_optional
done

echo "Generating Temporal API"

# google/* is shipped by google/protobuf and google/common-protos
for i in `find ./api/third_party/api -name "*.proto" -type f -not -path "./api/third_party/api/google/*"`; do
  protoc \
  --proto_path=api/third_party/api \
  --php_out=generated $i \
  --plugin=protoc-gen-grpc=$GRPC_PLUGIN \
  --grpc_out=generated \
  --experimental_allow_proto3_optional
done

echo "Generating Temporal Cloud API"

for i in `find ./api-cloud/temporal -name "*.proto" -type f`; do
  protoc \
  --proto_path=api-cloud \
  --proto_path=api/third_party/api \
  --proto_path=third_party \
  --php_out=generated $i \
  --plugin=protoc-gen-grpc=$GRPC_PLUGIN \
  --grpc_out=generated \
  --experimental_allow_proto3_optional
done

echo "Generating Gogo proto"

for i in `find ./proto -name "*.proto" -type f`; do
  protoc \
  --proto_path=proto \
  --php_out=generated $i \
  --experimental_allow_proto3_optional
done

echo "Removing Google Protobuf files"

rm -rf ./generated/Google
rm -rf ./generated/GPBMetadata/Google
