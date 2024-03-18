<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: http/v1/http.proto

namespace RoadRunner\HTTP\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>http.v1.FileUploadArray</code>
 */
class FileUploadArray extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .http.v1.FileUpload tree = 1;</code>
     */
    private $tree;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RoadRunner\HTTP\DTO\V1\FileUpload>|\Google\Protobuf\Internal\RepeatedField $tree
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\HTTP\DTO\V1\GPBMetadata\Http::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .http.v1.FileUpload tree = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * Generated from protobuf field <code>repeated .http.v1.FileUpload tree = 1;</code>
     * @param array<\RoadRunner\HTTP\DTO\V1\FileUpload>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTree($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\HTTP\DTO\V1\FileUpload::class);
        $this->tree = $arr;

        return $this;
    }

}
