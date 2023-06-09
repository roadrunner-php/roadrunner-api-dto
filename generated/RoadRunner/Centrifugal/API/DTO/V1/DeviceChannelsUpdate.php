<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceChannelsUpdate</code>
 */
class DeviceChannelsUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * add | remove | set
     *
     * Generated from protobuf field <code>string op = 1;</code>
     */
    protected $op = '';
    /**
     * Generated from protobuf field <code>repeated string channels = 2;</code>
     */
    private $channels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $op
     *           add | remove | set
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $channels
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * add | remove | set
     *
     * Generated from protobuf field <code>string op = 1;</code>
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * add | remove | set
     *
     * Generated from protobuf field <code>string op = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, True);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channels = $arr;

        return $this;
    }

}

