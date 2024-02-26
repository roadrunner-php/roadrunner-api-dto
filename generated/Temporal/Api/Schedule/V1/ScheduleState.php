<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.schedule.v1.ScheduleState</code>
 */
class ScheduleState extends \Google\Protobuf\Internal\Message
{
    /**
     * Informative human-readable message with contextual notes, e.g. the reason
     * a schedule is paused. The system may overwrite this message on certain
     * conditions, e.g. when pause-on-failure happens.
     *
     * Generated from protobuf field <code>string notes = 1;</code>
     */
    protected $notes = '';
    /**
     * If true, do not take any actions based on the schedule spec.
     *
     * Generated from protobuf field <code>bool paused = 2;</code>
     */
    protected $paused = false;
    /**
     * If limited_actions is true, decrement remaining_actions after each
     * action, and do not take any more scheduled actions if remaining_actions
     * is zero. Actions may still be taken by explicit request (i.e. trigger
     * immediately or backfill). Skipped actions (due to overlap policy) do not
     * count against remaining actions.
     * If a schedule has no more remaining actions, then the schedule will be
     * subject to automatic deletion (after several days).
     *
     * Generated from protobuf field <code>bool limited_actions = 3;</code>
     */
    protected $limited_actions = false;
    /**
     * Generated from protobuf field <code>int64 remaining_actions = 4;</code>
     */
    protected $remaining_actions = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $notes
     *           Informative human-readable message with contextual notes, e.g. the reason
     *           a schedule is paused. The system may overwrite this message on certain
     *           conditions, e.g. when pause-on-failure happens.
     *     @type bool $paused
     *           If true, do not take any actions based on the schedule spec.
     *     @type bool $limited_actions
     *           If limited_actions is true, decrement remaining_actions after each
     *           action, and do not take any more scheduled actions if remaining_actions
     *           is zero. Actions may still be taken by explicit request (i.e. trigger
     *           immediately or backfill). Skipped actions (due to overlap policy) do not
     *           count against remaining actions.
     *           If a schedule has no more remaining actions, then the schedule will be
     *           subject to automatic deletion (after several days).
     *     @type int|string $remaining_actions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Informative human-readable message with contextual notes, e.g. the reason
     * a schedule is paused. The system may overwrite this message on certain
     * conditions, e.g. when pause-on-failure happens.
     *
     * Generated from protobuf field <code>string notes = 1;</code>
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Informative human-readable message with contextual notes, e.g. the reason
     * a schedule is paused. The system may overwrite this message on certain
     * conditions, e.g. when pause-on-failure happens.
     *
     * Generated from protobuf field <code>string notes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->notes = $var;

        return $this;
    }

    /**
     * If true, do not take any actions based on the schedule spec.
     *
     * Generated from protobuf field <code>bool paused = 2;</code>
     * @return bool
     */
    public function getPaused()
    {
        return $this->paused;
    }

    /**
     * If true, do not take any actions based on the schedule spec.
     *
     * Generated from protobuf field <code>bool paused = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setPaused($var)
    {
        GPBUtil::checkBool($var);
        $this->paused = $var;

        return $this;
    }

    /**
     * If limited_actions is true, decrement remaining_actions after each
     * action, and do not take any more scheduled actions if remaining_actions
     * is zero. Actions may still be taken by explicit request (i.e. trigger
     * immediately or backfill). Skipped actions (due to overlap policy) do not
     * count against remaining actions.
     * If a schedule has no more remaining actions, then the schedule will be
     * subject to automatic deletion (after several days).
     *
     * Generated from protobuf field <code>bool limited_actions = 3;</code>
     * @return bool
     */
    public function getLimitedActions()
    {
        return $this->limited_actions;
    }

    /**
     * If limited_actions is true, decrement remaining_actions after each
     * action, and do not take any more scheduled actions if remaining_actions
     * is zero. Actions may still be taken by explicit request (i.e. trigger
     * immediately or backfill). Skipped actions (due to overlap policy) do not
     * count against remaining actions.
     * If a schedule has no more remaining actions, then the schedule will be
     * subject to automatic deletion (after several days).
     *
     * Generated from protobuf field <code>bool limited_actions = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLimitedActions($var)
    {
        GPBUtil::checkBool($var);
        $this->limited_actions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 remaining_actions = 4;</code>
     * @return int|string
     */
    public function getRemainingActions()
    {
        return $this->remaining_actions;
    }

    /**
     * Generated from protobuf field <code>int64 remaining_actions = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemainingActions($var)
    {
        GPBUtil::checkInt64($var);
        $this->remaining_actions = $var;

        return $this;
    }

}

