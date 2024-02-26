<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/common/v1/message.proto

namespace Temporal\Api\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Callback to attach to various events in the system, e.g. workflow run completion.
 *
 * Generated from protobuf message <code>temporal.api.common.v1.Callback</code>
 */
class Callback extends \Google\Protobuf\Internal\Message
{
    protected $variant;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Common\V1\Callback\Nexus $nexus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Callback.Nexus nexus = 2;</code>
     * @return \Temporal\Api\Common\V1\Callback\Nexus|null
     */
    public function getNexus()
    {
        return $this->readOneof(2);
    }

    public function hasNexus()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Callback.Nexus nexus = 2;</code>
     * @param \Temporal\Api\Common\V1\Callback\Nexus $var
     * @return $this
     */
    public function setNexus($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Callback\Nexus::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->whichOneof("variant");
    }

}

