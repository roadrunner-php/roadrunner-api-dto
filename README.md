<p align="center">
    <a href="https://roadrunner.dev"><picture>
        <source media="(prefers-color-scheme: dark)" srcset="https://github.com/roadrunner-server/.github/assets/8040338/e6bde856-4ec6-4a52-bd5b-bfe78736c1ff">
        <img alt="RoadRunner" src="https://github.com/roadrunner-server/.github/assets/8040338/040fb694-1dd3-4865-9d29-8e0748c2c8b8" style="width: 6in; display: block">
    </picture></a>
</p>

<p align="center">Pre-generated PHP DTOs for the RoadRunner API protocol buffers</p>

<div align="center">

[![Documentation](https://img.shields.io/badge/Documentation-blue?style=for-the-badge&logo=gitbook&logoColor=white)](https://docs.roadrunner.dev)
[![Sponsor](https://img.shields.io/static/v1?style=for-the-badge&label=&message=Sponsor&logo=githubsponsors&logoColor=white&color=%23EA4AAA)](https://github.com/sponsors/roadrunner-server)

</div>

<br />

This package provides PHP Data Transfer Object (DTO) messages generated from the [RoadRunner API](https://github.com/roadrunner-server/api) protocol buffer files. Include it in your PHP project to make RPC calls to the RoadRunner server without compiling the `.proto` files yourself.

## Get Started

### Installation

```bash
composer require roadrunner/api-dto
```

[![PHP](https://img.shields.io/packagist/php-v/roadrunner/api-dto.svg?style=flat-square&logo=php)](https://packagist.org/packages/roadrunner/api-dto)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/roadrunner/api-dto.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/roadrunner/api-dto)
[![License](https://img.shields.io/packagist/l/roadrunner/api-dto.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/roadrunner/api-dto.svg?style=flat-square)](https://packagist.org/packages/roadrunner/api-dto/stats)

### What's inside

DTO messages for the following RoadRunner plugins, under the `RoadRunner\` namespace:

- App Logger
- Centrifugo
- HTTP
- Jobs
- KV
- Lock
- Service
- Status
- Temporal
- WebSockets

The package also ships the [Temporal API](https://github.com/temporalio/api) and [Temporal Cloud API](https://github.com/temporalio/api-cloud) messages and gRPC clients under the `Temporal\Api\` namespace. They depend on the `google/common-protos` package, which you need to install yourself.

## Generating DTOs

If you would like to generate the DTOs yourself, use the `generate.sh` script. It generates the DTOs for all the plugins and places them in the `generated/` directory.

You will need:

- the `protoc` binary — the committed DTOs are generated with `protoc` v34, matching the `google/protobuf` runtime constraint;
- the `grpc_php_plugin` — follow [this instruction](https://github.com/grpc/grpc/blob/master/src/php/README.md#grpc_php_plugin-protoc-plugin) to build it;
- the API submodules: `git submodule update --init --recursive`.

Then run:

```bash
./generate.sh
```

## Contribution

Contributions are welcome! If you would like to contribute to this project, please open an issue or pull request.
