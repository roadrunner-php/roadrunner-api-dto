<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/filter/v1/message.proto

namespace GPBMetadata\Temporal\Api\Filter\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Dependencies\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$temporal/api/filter/v1/message.prototemporal.api.filter.v1!dependencies/gogoproto/gogo.proto$temporal/api/enums/v1/workflow.proto">
WorkflowExecutionFilter
workflow_id (	
run_id (	""
WorkflowTypeFilter
name (	"�
StartTimeFilter7
earliest_time (2.google.protobuf.TimestampB��5
latest_time (2.google.protobuf.TimestampB��"N
StatusFilter>
status (2..temporal.api.enums.v1.WorkflowExecutionStatusB�
io.temporal.api.filter.v1BMessageProtoPZ#go.temporal.io/api/filter/v1;filter�Temporalio.Api.Filter.V1�Temporalio::Api::Filter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

