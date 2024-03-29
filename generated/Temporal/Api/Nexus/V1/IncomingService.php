<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/nexus/v1/message.proto

namespace Temporal\Api\Nexus\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A binding from a service name to namespace, task queue, and metadata for dispatching incoming Nexus requests.
 *
 * Generated from protobuf message <code>temporal.api.nexus.v1.IncomingService</code>
 */
class IncomingService extends \Google\Protobuf\Internal\Message
{
    /**
     * Data version for this service. Must match current version on update or set to 0 to create a new service.
     *
     * Generated from protobuf field <code>int64 version = 1;</code>
     */
    protected $version = 0;
    /**
     * Service name, unique for this cluster.
     * The service name is used to address this service.
     * By default, when using Nexus over HTTP, the service name is matched against the base URL path.
     * E.g. the URL /my-service would match a service named "my-service".
     * The name can contain any characters and is escaped when matched against a URL.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Namespace to route requests to.
     *
     * Generated from protobuf field <code>string namespace = 3;</code>
     */
    protected $namespace = '';
    /**
     * Task queue to route requests to.
     *
     * Generated from protobuf field <code>string task_queue = 4;</code>
     */
    protected $task_queue = '';
    /**
     * Generic service metadata that is available to the server's authorizer.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Any> metadata = 5;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $version
     *           Data version for this service. Must match current version on update or set to 0 to create a new service.
     *     @type string $name
     *           Service name, unique for this cluster.
     *           The service name is used to address this service.
     *           By default, when using Nexus over HTTP, the service name is matched against the base URL path.
     *           E.g. the URL /my-service would match a service named "my-service".
     *           The name can contain any characters and is escaped when matched against a URL.
     *     @type string $namespace
     *           Namespace to route requests to.
     *     @type string $task_queue
     *           Task queue to route requests to.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Generic service metadata that is available to the server's authorizer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Nexus\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Data version for this service. Must match current version on update or set to 0 to create a new service.
     *
     * Generated from protobuf field <code>int64 version = 1;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Data version for this service. Must match current version on update or set to 0 to create a new service.
     *
     * Generated from protobuf field <code>int64 version = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Service name, unique for this cluster.
     * The service name is used to address this service.
     * By default, when using Nexus over HTTP, the service name is matched against the base URL path.
     * E.g. the URL /my-service would match a service named "my-service".
     * The name can contain any characters and is escaped when matched against a URL.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Service name, unique for this cluster.
     * The service name is used to address this service.
     * By default, when using Nexus over HTTP, the service name is matched against the base URL path.
     * E.g. the URL /my-service would match a service named "my-service".
     * The name can contain any characters and is escaped when matched against a URL.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Namespace to route requests to.
     *
     * Generated from protobuf field <code>string namespace = 3;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace to route requests to.
     *
     * Generated from protobuf field <code>string namespace = 3;</code>
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
     * Task queue to route requests to.
     *
     * Generated from protobuf field <code>string task_queue = 4;</code>
     * @return string
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * Task queue to route requests to.
     *
     * Generated from protobuf field <code>string task_queue = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * Generic service metadata that is available to the server's authorizer.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Any> metadata = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generic service metadata that is available to the server's authorizer.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Any> metadata = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->metadata = $arr;

        return $this;
    }

}

