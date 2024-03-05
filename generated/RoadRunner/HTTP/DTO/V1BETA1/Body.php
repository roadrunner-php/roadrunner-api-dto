<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: http/v1beta/http.proto

namespace RoadRunner\HTTP\DTO\V1BETA1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * backward compatibility
 *
 * Generated from protobuf message <code>http.v1beta.Body</code>
 */
class Body extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes body = 1;</code>
     */
    protected $body = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $body
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\HTTP\DTO\V1BETA1\GPBMetadata\Http::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes body = 1;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>bytes body = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, False);
        $this->body = $var;

        return $this;
    }

}
