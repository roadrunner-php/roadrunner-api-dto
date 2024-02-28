mkdir -p ./generated

echo "Generating RoadRunner API"

for i in `find ./api -name "*.proto" -type f`; do
  protoc \
  --proto_path=api/third_party/api \
  --proto_path=api/proto \
  --php_out=generated $i \
  --experimental_allow_proto3_optional
done


echo "Generating Temporal API"

GRPC_PLUGIN=`which grpc_php_plugin`

# If $GRPC_PLUGIN is empty then write error message and exit
if [ -z "$GRPC_PLUGIN" ]; then
  echo "Error: grpc_php_plugin not found."
  exit 1
fi

for i in `find ./api/third_party/api -name "*.proto" -type f`; do
  protoc \
  --proto_path=api/third_party/api \
  --php_out=generated $i \
  --plugin=protoc-gen-grpc=$GRPC_PLUGIN \
  --grpc_out=generated \
  --experimental_allow_proto3_optional
done

echo "Removing Google Protobuf files"

rm -rf ./generated/Google
rm -rf ./generated/GPBMetadata/Google
