FROM --platform=${TARGETPLATFORM:-linux/amd64} alpine:3

COPY . .

# Install dependencies
RUN apk update && apk add git php82-dev grpc protobuf-dev grpc-plugins protoc composer
RUN git submodule update --init
RUN composer install
RUN rm -rf /generated


RUN mkdir -p /generated
RUN echo "Generating RoadRunner API"

RUN for i in `find ./api -name "*.proto" -type f`; do \
	protoc \
	--proto_path=api/third_party/api \
	--proto_path=api/proto \
	--php_out=generated $i \
	--experimental_allow_proto3_optional \
	; done


RUN echo "Generating Temporal API"

RUN for i in `find ./api/third_party/api -name "*.proto" -type f`; do \
	protoc \
	--proto_path=api/third_party/api \
	--php_out=generated $i \
	--plugin=protoc-gen-grpc=/usr/bin/grpc_php_plugin \
	--grpc_out=generated \
	--experimental_allow_proto3_optional \ 
	; done

RUN chmod -R 777 /generated