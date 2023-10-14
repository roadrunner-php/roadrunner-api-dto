<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/command/v1/message.proto

namespace Temporal\Api\Command\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.command.v1.RequestCancelActivityTaskCommandAttributes</code>
 */
class RequestCancelActivityTaskCommandAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The `ACTIVITY_TASK_SCHEDULED` event id for the activity being cancelled.
     *
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     */
    protected $scheduled_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $scheduled_event_id
     *           The `ACTIVITY_TASK_SCHEDULED` event id for the activity being cancelled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The `ACTIVITY_TASK_SCHEDULED` event id for the activity being cancelled.
     *
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     * @return int|string
     */
    public function getScheduledEventId()
    {
        return $this->scheduled_event_id;
    }

    /**
     * The `ACTIVITY_TASK_SCHEDULED` event id for the activity being cancelled.
     *
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setScheduledEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->scheduled_event_id = $var;

        return $this;
    }

}

