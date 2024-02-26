<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/nexus/v1/message.proto

namespace Temporal\Api\Nexus\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response indicating that the handler has successfully processed a request.
 *
 * Generated from protobuf message <code>temporal.api.nexus.v1.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    protected $variant;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Nexus\V1\StartOperationResponse $start_operation
     *     @type \Temporal\Api\Nexus\V1\CancelOperationResponse $cancel_operation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Nexus\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.nexus.v1.StartOperationResponse start_operation = 1;</code>
     * @return \Temporal\Api\Nexus\V1\StartOperationResponse|null
     */
    public function getStartOperation()
    {
        return $this->readOneof(1);
    }

    public function hasStartOperation()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.nexus.v1.StartOperationResponse start_operation = 1;</code>
     * @param \Temporal\Api\Nexus\V1\StartOperationResponse $var
     * @return $this
     */
    public function setStartOperation($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Nexus\V1\StartOperationResponse::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.nexus.v1.CancelOperationResponse cancel_operation = 2;</code>
     * @return \Temporal\Api\Nexus\V1\CancelOperationResponse|null
     */
    public function getCancelOperation()
    {
        return $this->readOneof(2);
    }

    public function hasCancelOperation()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.nexus.v1.CancelOperationResponse cancel_operation = 2;</code>
     * @param \Temporal\Api\Nexus\V1\CancelOperationResponse $var
     * @return $this
     */
    public function setCancelOperation($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Nexus\V1\CancelOperationResponse::class);
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

