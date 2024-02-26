<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DescribeBatchOperationResponse</code>
 */
class DescribeBatchOperationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Batch operation type
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BatchOperationType operation_type = 1;</code>
     */
    protected $operation_type = 0;
    /**
     * Batch job ID
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    protected $job_id = '';
    /**
     * Batch operation state
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BatchOperationState state = 3;</code>
     */
    protected $state = 0;
    /**
     * Batch operation start time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    protected $start_time = null;
    /**
     * Batch operation close time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_time = 5;</code>
     */
    protected $close_time = null;
    /**
     * Total operation count
     *
     * Generated from protobuf field <code>int64 total_operation_count = 6;</code>
     */
    protected $total_operation_count = 0;
    /**
     * Complete operation count
     *
     * Generated from protobuf field <code>int64 complete_operation_count = 7;</code>
     */
    protected $complete_operation_count = 0;
    /**
     * Failure operation count
     *
     * Generated from protobuf field <code>int64 failure_operation_count = 8;</code>
     */
    protected $failure_operation_count = 0;
    /**
     * Identity indicates the operator identity
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     */
    protected $identity = '';
    /**
     * Reason indicates the reason to stop a operation
     *
     * Generated from protobuf field <code>string reason = 10;</code>
     */
    protected $reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operation_type
     *           Batch operation type
     *     @type string $job_id
     *           Batch job ID
     *     @type int $state
     *           Batch operation state
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Batch operation start time
     *     @type \Google\Protobuf\Timestamp $close_time
     *           Batch operation close time
     *     @type int|string $total_operation_count
     *           Total operation count
     *     @type int|string $complete_operation_count
     *           Complete operation count
     *     @type int|string $failure_operation_count
     *           Failure operation count
     *     @type string $identity
     *           Identity indicates the operator identity
     *     @type string $reason
     *           Reason indicates the reason to stop a operation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Batch operation type
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BatchOperationType operation_type = 1;</code>
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Batch operation type
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BatchOperationType operation_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\BatchOperationType::class);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * Batch job ID
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Batch job ID
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Batch operation state
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BatchOperationState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Batch operation state
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BatchOperationState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\BatchOperationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Batch operation start time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Batch operation start time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Batch operation close time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

    public function hasCloseTime()
    {
        return isset($this->close_time);
    }

    public function clearCloseTime()
    {
        unset($this->close_time);
    }

    /**
     * Batch operation close time
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCloseTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->close_time = $var;

        return $this;
    }

    /**
     * Total operation count
     *
     * Generated from protobuf field <code>int64 total_operation_count = 6;</code>
     * @return int|string
     */
    public function getTotalOperationCount()
    {
        return $this->total_operation_count;
    }

    /**
     * Total operation count
     *
     * Generated from protobuf field <code>int64 total_operation_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalOperationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_operation_count = $var;

        return $this;
    }

    /**
     * Complete operation count
     *
     * Generated from protobuf field <code>int64 complete_operation_count = 7;</code>
     * @return int|string
     */
    public function getCompleteOperationCount()
    {
        return $this->complete_operation_count;
    }

    /**
     * Complete operation count
     *
     * Generated from protobuf field <code>int64 complete_operation_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompleteOperationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->complete_operation_count = $var;

        return $this;
    }

    /**
     * Failure operation count
     *
     * Generated from protobuf field <code>int64 failure_operation_count = 8;</code>
     * @return int|string
     */
    public function getFailureOperationCount()
    {
        return $this->failure_operation_count;
    }

    /**
     * Failure operation count
     *
     * Generated from protobuf field <code>int64 failure_operation_count = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailureOperationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->failure_operation_count = $var;

        return $this;
    }

    /**
     * Identity indicates the operator identity
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Identity indicates the operator identity
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Reason indicates the reason to stop a operation
     *
     * Generated from protobuf field <code>string reason = 10;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason indicates the reason to stop a operation
     *
     * Generated from protobuf field <code>string reason = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}

