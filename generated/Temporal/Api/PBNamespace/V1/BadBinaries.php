<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/namespace/v1/message.proto

namespace Temporal\Api\PBNamespace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.namespace.v1.BadBinaries</code>
 */
class BadBinaries extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .temporal.api.namespace.v1.BadBinaryInfo> binaries = 1;</code>
     */
    private $binaries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $binaries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\PBNamespace\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .temporal.api.namespace.v1.BadBinaryInfo> binaries = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getBinaries()
    {
        return $this->binaries;
    }

    /**
     * Generated from protobuf field <code>map<string, .temporal.api.namespace.v1.BadBinaryInfo> binaries = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setBinaries($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\PBNamespace\V1\BadBinaryInfo::class);
        $this->binaries = $arr;

        return $this;
    }

}
