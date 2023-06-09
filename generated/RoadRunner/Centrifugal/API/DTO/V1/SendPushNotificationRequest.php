<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.SendPushNotificationRequest</code>
 */
class SendPushNotificationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushRecipient recipient = 1;</code>
     */
    protected $recipient = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushNotification notification = 2;</code>
     */
    protected $notification = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PushRecipient $recipient
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PushNotification $notification
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushRecipient recipient = 1;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PushRecipient|null
     */
    public function getRecipient()
    {
        return isset($this->recipient) ? $this->recipient : null;
    }

    public function hasRecipient()
    {
        return isset($this->recipient);
    }

    public function clearRecipient()
    {
        unset($this->recipient);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushRecipient recipient = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PushRecipient $var
     * @return $this
     */
    public function setRecipient($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PushRecipient::class);
        $this->recipient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushNotification notification = 2;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PushNotification|null
     */
    public function getNotification()
    {
        return isset($this->notification) ? $this->notification : null;
    }

    public function hasNotification()
    {
        return isset($this->notification);
    }

    public function clearNotification()
    {
        unset($this->notification);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushNotification notification = 2;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PushNotification $var
     * @return $this
     */
    public function setNotification($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PushNotification::class);
        $this->notification = $var;

        return $this;
    }

}

