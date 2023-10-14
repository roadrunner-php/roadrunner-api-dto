<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/common/v1/message.proto

namespace Temporal\Api\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * How retries ought to be handled, usable by both workflows and activities
 *
 * Generated from protobuf message <code>temporal.api.common.v1.RetryPolicy</code>
 */
class RetryPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Interval of the first retry. If retryBackoffCoefficient is 1.0 then it is used for all retries.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration initial_interval = 1 [(.gogoproto.stdduration) = true];</code>
     */
    protected $initial_interval = null;
    /**
     * Coefficient used to calculate the next retry interval.
     * The next retry interval is previous interval multiplied by the coefficient.
     * Must be 1 or larger.
     *
     * Generated from protobuf field <code>double backoff_coefficient = 2;</code>
     */
    protected $backoff_coefficient = 0.0;
    /**
     * Maximum interval between retries. Exponential backoff leads to interval increase.
     * This value is the cap of the increase. Default is 100x of the initial interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_interval = 3 [(.gogoproto.stdduration) = true];</code>
     */
    protected $maximum_interval = null;
    /**
     * Maximum number of attempts. When exceeded the retries stop even if not expired yet.
     * 1 disables retries. 0 means unlimited (up to the timeouts)
     *
     * Generated from protobuf field <code>int32 maximum_attempts = 4;</code>
     */
    protected $maximum_attempts = 0;
    /**
     * Non-Retryable errors types. Will stop retrying if the error type matches this list. Note that
     * this is not a substring match, the error *type* (not message) must match exactly.
     *
     * Generated from protobuf field <code>repeated string non_retryable_error_types = 5;</code>
     */
    private $non_retryable_error_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $initial_interval
     *           Interval of the first retry. If retryBackoffCoefficient is 1.0 then it is used for all retries.
     *     @type float $backoff_coefficient
     *           Coefficient used to calculate the next retry interval.
     *           The next retry interval is previous interval multiplied by the coefficient.
     *           Must be 1 or larger.
     *     @type \Google\Protobuf\Duration $maximum_interval
     *           Maximum interval between retries. Exponential backoff leads to interval increase.
     *           This value is the cap of the increase. Default is 100x of the initial interval.
     *     @type int $maximum_attempts
     *           Maximum number of attempts. When exceeded the retries stop even if not expired yet.
     *           1 disables retries. 0 means unlimited (up to the timeouts)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $non_retryable_error_types
     *           Non-Retryable errors types. Will stop retrying if the error type matches this list. Note that
     *           this is not a substring match, the error *type* (not message) must match exactly.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Interval of the first retry. If retryBackoffCoefficient is 1.0 then it is used for all retries.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration initial_interval = 1 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInitialInterval()
    {
        return $this->initial_interval;
    }

    public function hasInitialInterval()
    {
        return isset($this->initial_interval);
    }

    public function clearInitialInterval()
    {
        unset($this->initial_interval);
    }

    /**
     * Interval of the first retry. If retryBackoffCoefficient is 1.0 then it is used for all retries.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration initial_interval = 1 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInitialInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->initial_interval = $var;

        return $this;
    }

    /**
     * Coefficient used to calculate the next retry interval.
     * The next retry interval is previous interval multiplied by the coefficient.
     * Must be 1 or larger.
     *
     * Generated from protobuf field <code>double backoff_coefficient = 2;</code>
     * @return float
     */
    public function getBackoffCoefficient()
    {
        return $this->backoff_coefficient;
    }

    /**
     * Coefficient used to calculate the next retry interval.
     * The next retry interval is previous interval multiplied by the coefficient.
     * Must be 1 or larger.
     *
     * Generated from protobuf field <code>double backoff_coefficient = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBackoffCoefficient($var)
    {
        GPBUtil::checkDouble($var);
        $this->backoff_coefficient = $var;

        return $this;
    }

    /**
     * Maximum interval between retries. Exponential backoff leads to interval increase.
     * This value is the cap of the increase. Default is 100x of the initial interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_interval = 3 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaximumInterval()
    {
        return $this->maximum_interval;
    }

    public function hasMaximumInterval()
    {
        return isset($this->maximum_interval);
    }

    public function clearMaximumInterval()
    {
        unset($this->maximum_interval);
    }

    /**
     * Maximum interval between retries. Exponential backoff leads to interval increase.
     * This value is the cap of the increase. Default is 100x of the initial interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_interval = 3 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaximumInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->maximum_interval = $var;

        return $this;
    }

    /**
     * Maximum number of attempts. When exceeded the retries stop even if not expired yet.
     * 1 disables retries. 0 means unlimited (up to the timeouts)
     *
     * Generated from protobuf field <code>int32 maximum_attempts = 4;</code>
     * @return int
     */
    public function getMaximumAttempts()
    {
        return $this->maximum_attempts;
    }

    /**
     * Maximum number of attempts. When exceeded the retries stop even if not expired yet.
     * 1 disables retries. 0 means unlimited (up to the timeouts)
     *
     * Generated from protobuf field <code>int32 maximum_attempts = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumAttempts($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_attempts = $var;

        return $this;
    }

    /**
     * Non-Retryable errors types. Will stop retrying if the error type matches this list. Note that
     * this is not a substring match, the error *type* (not message) must match exactly.
     *
     * Generated from protobuf field <code>repeated string non_retryable_error_types = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNonRetryableErrorTypes()
    {
        return $this->non_retryable_error_types;
    }

    /**
     * Non-Retryable errors types. Will stop retrying if the error type matches this list. Note that
     * this is not a substring match, the error *type* (not message) must match exactly.
     *
     * Generated from protobuf field <code>repeated string non_retryable_error_types = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNonRetryableErrorTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->non_retryable_error_types = $arr;

        return $this;
    }

}

