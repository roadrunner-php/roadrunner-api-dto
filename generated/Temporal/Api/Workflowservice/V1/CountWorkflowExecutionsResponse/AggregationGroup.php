<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1\CountWorkflowExecutionsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.CountWorkflowExecutionsResponse.AggregationGroup</code>
 */
class AggregationGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Payload group_values = 1;</code>
     */
    private $group_values;
    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    protected $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Common\V1\Payload>|\Google\Protobuf\Internal\RepeatedField $group_values
     *     @type int|string $count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Payload group_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupValues()
    {
        return $this->group_values;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Payload group_values = 1;</code>
     * @param array<\Temporal\Api\Common\V1\Payload>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Common\V1\Payload::class);
        $this->group_values = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregationGroup::class, \Temporal\Api\Workflowservice\V1\CountWorkflowExecutionsResponse_AggregationGroup::class);

