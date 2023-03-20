mkdir -p ./generated

for i in `find ./api -name "*.proto" -type f`; do
  /root/.local/bin/protoc --proto_path=api --php_out=generated $i --experimental_allow_proto3_optional
done