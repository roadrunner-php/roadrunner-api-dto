<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.ListNexusOutgoingServicesRequest</code>
 */
class ListNexusOutgoingServicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace to scope the list request to.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Maximum number of services to return in a single page.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Pass in the next_page_token from the previous response here.
     *
     * Generated from protobuf field <code>bytes page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Namespace to scope the list request to.
     *     @type int $page_size
     *           Maximum number of services to return in a single page.
     *     @type string $page_token
     *           Pass in the next_page_token from the previous response here.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Namespace to scope the list request to.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace to scope the list request to.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Maximum number of services to return in a single page.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of services to return in a single page.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Pass in the next_page_token from the previous response here.
     *
     * Generated from protobuf field <code>bytes page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Pass in the next_page_token from the previous response here.
     *
     * Generated from protobuf field <code>bytes page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->page_token = $var;

        return $this;
    }

}
