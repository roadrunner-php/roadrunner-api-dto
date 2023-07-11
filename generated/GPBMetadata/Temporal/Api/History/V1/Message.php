<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace GPBMetadata\Temporal\Api\History\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Dependencies\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\EventType::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\FailedCause::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Update\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Sdk\V1\TaskCompleteMetadata::initOnce();
        $pool->internalAddGeneratedFile(
            '
٢
%temporal/api/history/v1/message.prototemporal.api.history.v1google/protobuf/timestamp.proto!dependencies/gogoproto/gogo.proto&temporal/api/enums/v1/event_type.proto(temporal/api/enums/v1/failed_cause.proto$temporal/api/enums/v1/workflow.proto$temporal/api/common/v1/message.proto%temporal/api/failure/v1/message.proto\'temporal/api/taskqueue/v1/message.proto$temporal/api/update/v1/message.proto&temporal/api/workflow/v1/message.proto0temporal/api/sdk/v1/task_complete_metadata.proto"�
\'WorkflowExecutionStartedEventAttributes;

parent_workflow_namespace (	$
parent_workflow_namespace_id (	L
parent_workflow_execution (2).temporal.api.common.v1.WorkflowExecution!
parent_initiated_event_id (8

task_queue (2$.temporal.api.taskqueue.v1.TaskQueue/
input (2 .temporal.api.common.v1.PayloadsC
workflow_execution_timeout (2.google.protobuf.DurationB��=
workflow_run_timeout (2.google.protobuf.DurationB��>
workflow_task_timeout	 (2.google.protobuf.DurationB��"
continued_execution_run_id
 (	@
	initiator (2-.temporal.api.enums.v1.ContinueAsNewInitiator;
continued_failure (2 .temporal.api.failure.v1.Failure@
last_completion_result
original_execution_run_id (	
identity (	
first_execution_run_id (	9
retry_policy (2#.temporal.api.common.v1.RetryPolicy
attempt (L
"workflow_execution_expiration_time (2.google.protobuf.TimestampB��

first_workflow_task_backoff (2.google.protobuf.DurationB��*
memo (2.temporal.api.common.v1.MemoC
search_attributes (2(.temporal.api.common.v1.SearchAttributesE
prev_auto_reset_points (2%.temporal.api.workflow.v1.ResetPoints.
header (2.temporal.api.common.v1.Header&
parent_initiated_event_version (
workflow_id (	H
source_version_stamp (2*.temporal.api.common.v1.WorkerVersionStamp"�
)WorkflowExecutionCompletedEventAttributes0
result (2 .temporal.api.common.v1.Payloads(
 workflow_task_completed_event_id (
new_execution_run_id (	"�
&WorkflowExecutionFailedEventAttributes1
failure (2 .temporal.api.failure.v1.Failure6
retry_state (2!.temporal.api.enums.v1.RetryState(
 workflow_task_completed_event_id (
new_execution_run_id (	"�
(WorkflowExecutionTimedOutEventAttributes6
retry_state (2!.temporal.api.enums.v1.RetryState
new_execution_run_id (	"�
.WorkflowExecutionContinuedAsNewEventAttributes
new_execution_run_id (	;


task_queue (2$.temporal.api.taskqueue.v1.TaskQueue/
input (2 .temporal.api.common.v1.Payloads=
workflow_run_timeout (2.google.protobuf.DurationB��>
workflow_task_timeout (2.google.protobuf.DurationB��(
 workflow_task_completed_event_id (?
backoff_start_interval (2.google.protobuf.DurationB��@
	initiator	 (2-.temporal.api.enums.v1.ContinueAsNewInitiator1
failure
 (2 .temporal.api.failure.v1.Failure@
last_completion_result (2 .temporal.api.common.v1.Payloads.
header (2.temporal.api.common.v1.Header*
memo
search_attributes (2(.temporal.api.common.v1.SearchAttributes
use_compatible_version ("�
$WorkflowTaskScheduledEventAttributes8

task_queue (2$.temporal.api.taskqueue.v1.TaskQueue?
start_to_close_timeout (2.google.protobuf.DurationB��
attempt ("�
"WorkflowTaskStartedEventAttributes
scheduled_event_id (
identity (	

request_id (	
suggest_continue_as_new (
history_size_bytes ("�
$WorkflowTaskCompletedEventAttributes
scheduled_event_id (
started_event_id (
identity (	
binary_checksum (	B
worker_version (2*.temporal.api.common.v1.WorkerVersionStampH
sdk_metadata (22.temporal.api.sdk.v1.WorkflowTaskCompletedMetadataC
metering_metadata
#WorkflowTaskTimedOutEventAttributes
scheduled_event_id (
started_event_id (8
timeout_type (2".temporal.api.enums.v1.TimeoutType"�
!WorkflowTaskFailedEventAttributes
scheduled_event_id (
started_event_id (=
cause (2..temporal.api.enums.v1.WorkflowTaskFailedCause1
failure (2 .temporal.api.failure.v1.Failure
identity (	
base_run_id (	

new_run_id (	
fork_event_version (
binary_checksum	 (	B
worker_version
 (2*.temporal.api.common.v1.WorkerVersionStamp"�
$ActivityTaskScheduledEventAttributes
activity_id (	;


task_queue (2$.temporal.api.taskqueue.v1.TaskQueue.
header (2.temporal.api.common.v1.Header/
input (2 .temporal.api.common.v1.PayloadsB
schedule_to_close_timeout (2.google.protobuf.DurationB��B
schedule_to_start_timeout (2.google.protobuf.DurationB��?
start_to_close_timeout	 (2.google.protobuf.DurationB��:
heartbeat_timeout
 (2.google.protobuf.DurationB��(
 workflow_task_completed_event_id (9
retry_policy (2#.temporal.api.common.v1.RetryPolicy
use_compatible_version
"ActivityTaskStartedEventAttributes
scheduled_event_id (
identity (	

request_id (	
attempt (6
last_failure (2 .temporal.api.failure.v1.Failure"�
$ActivityTaskCompletedEventAttributes0
result (2 .temporal.api.common.v1.Payloads
scheduled_event_id (
started_event_id (
identity (	B
worker_version (2*.temporal.api.common.v1.WorkerVersionStamp"�
!ActivityTaskFailedEventAttributes1
failure (2 .temporal.api.failure.v1.Failure
scheduled_event_id (
started_event_id (
identity (	6
retry_state (2!.temporal.api.enums.v1.RetryStateB
worker_version (2*.temporal.api.common.v1.WorkerVersionStamp"�
#ActivityTaskTimedOutEventAttributes1
failure (2 .temporal.api.failure.v1.Failure
scheduled_event_id (
started_event_id (6
retry_state (2!.temporal.api.enums.v1.RetryState"r
*ActivityTaskCancelRequestedEventAttributes
scheduled_event_id ((
 workflow_task_completed_event_id ("�
#ActivityTaskCanceledEventAttributes1
details (2 .temporal.api.common.v1.Payloads(
 latest_cancel_requested_event_id (
scheduled_event_id (
started_event_id (
identity (	B
worker_version (2*.temporal.api.common.v1.WorkerVersionStamp"�
TimerStartedEventAttributes
timer_id (	>
start_to_fire_timeout (2.google.protobuf.DurationB��(
 workflow_task_completed_event_id ("G
TimerFiredEventAttributes
timer_id (	
started_event_id ("�
TimerCanceledEventAttributes
timer_id (	
started_event_id ((
 workflow_task_completed_event_id (
identity (	"�
/WorkflowExecutionCancelRequestedEventAttributes
cause (	#
external_initiated_event_id (N
external_workflow_execution (2).temporal.api.common.v1.WorkflowExecution
identity (	"�
(WorkflowExecutionCanceledEventAttributes(
 workflow_task_completed_event_id (1
details (2 .temporal.api.common.v1.Payloads"�
MarkerRecordedEventAttributes
marker_name (	T
details (2C.temporal.api.history.v1.MarkerRecordedEventAttributes.DetailsEntry(
 workflow_task_completed_event_id (.
header (2.temporal.api.common.v1.Header1
failure (2 .temporal.api.failure.v1.FailureP
DetailsEntry
key (	/
value (2 .temporal.api.common.v1.Payloads:8"�
(WorkflowExecutionSignaledEventAttributes
signal_name (	/
input (2 .temporal.api.common.v1.Payloads
identity (	.
header (2.temporal.api.common.v1.Header#
skip_generate_workflow_task ("�
*WorkflowExecutionTerminatedEventAttributes
reason (	1
details (2 .temporal.api.common.v1.Payloads
identity (	"�
>RequestCancelExternalWorkflowExecutionInitiatedEventAttributes(
 workflow_task_completed_event_id (
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
control (	
child_workflow_only (
reason (	"�
;RequestCancelExternalWorkflowExecutionFailedEventAttributesP
cause (2A.temporal.api.enums.v1.CancelExternalWorkflowExecutionFailedCause(
 workflow_task_completed_event_id (
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
initiated_event_id (
control (	"�
7ExternalWorkflowExecutionCancelRequestedEventAttributes
initiated_event_id (
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution"�
7SignalExternalWorkflowExecutionInitiatedEventAttributes(
 workflow_task_completed_event_id (
	namespace (	
namespace_id	 (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
signal_name (	/
input (2 .temporal.api.common.v1.Payloads
control (	
child_workflow_only (.
header (2.temporal.api.common.v1.Header"�
4SignalExternalWorkflowExecutionFailedEventAttributesP
cause (2A.temporal.api.enums.v1.SignalExternalWorkflowExecutionFailedCause(
 workflow_task_completed_event_id (
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
initiated_event_id (
control (	"�
0ExternalWorkflowExecutionSignaledEventAttributes
initiated_event_id (
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution
control (	"�
-UpsertWorkflowSearchAttributesEventAttributes(
 workflow_task_completed_event_id (C
search_attributes (2(.temporal.api.common.v1.SearchAttributes"�
)WorkflowPropertiesModifiedEventAttributes(
 workflow_task_completed_event_id (3

3StartChildWorkflowExecutionInitiatedEventAttributes
	namespace (	
namespace_id (	
workflow_id (	;


task_queue (2$.temporal.api.taskqueue.v1.TaskQueue/
input (2 .temporal.api.common.v1.PayloadsC
workflow_execution_timeout (2.google.protobuf.DurationB��=
workflow_run_timeout (2.google.protobuf.DurationB��>
workflow_task_timeout (2.google.protobuf.DurationB��E
parent_close_policy	 (2(.temporal.api.enums.v1.ParentClosePolicy
control
 (	(
 workflow_task_completed_event_id (N
workflow_id_reuse_policy (2,.temporal.api.enums.v1.WorkflowIdReusePolicy9
retry_policy

header (2.temporal.api.common.v1.Header*
memo (2.temporal.api.common.v1.MemoC
search_attributes (2(.temporal.api.common.v1.SearchAttributes
use_compatible_version ("�
0StartChildWorkflowExecutionFailedEventAttributes
	namespace (	
namespace_id (	
workflow_id (	;

cause (2=.temporal.api.enums.v1.StartChildWorkflowExecutionFailedCause
control (	
initiated_event_id ((
 workflow_task_completed_event_id ("�
,ChildWorkflowExecutionStartedEventAttributes
	namespace (	
namespace_id (	
initiated_event_id (E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

header (2.temporal.api.common.v1.Header"�
.ChildWorkflowExecutionCompletedEventAttributes0
result (2 .temporal.api.common.v1.Payloads
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

initiated_event_id (
started_event_id ("�
+ChildWorkflowExecutionFailedEventAttributes1
failure (2 .temporal.api.failure.v1.Failure
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

initiated_event_id (
started_event_id (6
retry_state (2!.temporal.api.enums.v1.RetryState"�
-ChildWorkflowExecutionCanceledEventAttributes1
details (2 .temporal.api.common.v1.Payloads
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

initiated_event_id (
started_event_id ("�
-ChildWorkflowExecutionTimedOutEventAttributes
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

initiated_event_id (
started_event_id (6
retry_state (2!.temporal.api.enums.v1.RetryState"�
/ChildWorkflowExecutionTerminatedEventAttributes
	namespace (	
namespace_id (	E
workflow_execution (2).temporal.api.common.v1.WorkflowExecution;

initiated_event_id (
started_event_id ("�
3WorkflowPropertiesModifiedExternallyEventAttributes
new_task_queue (	B
new_workflow_task_timeout (2.google.protobuf.DurationB��A
new_workflow_run_timeout (2.google.protobuf.DurationB��G
new_workflow_execution_timeout (2.google.protobuf.DurationB��3

3ActivityPropertiesModifiedExternallyEventAttributes
scheduled_event_id (=
new_retry_policy (2#.temporal.api.common.v1.RetryPolicy"�
.WorkflowExecutionUpdateAcceptedEventAttributes
protocol_instance_id (	#
accepted_request_message_id (	,
$accepted_request_sequencing_event_id (9
accepted_request (2.temporal.api.update.v1.Request"�
/WorkflowExecutionUpdateCompletedEventAttributes*
meta (2.temporal.api.update.v1.Meta
accepted_event_id (0
outcome (2.temporal.api.update.v1.Outcome"�
.WorkflowExecutionUpdateRejectedEventAttributes
protocol_instance_id (	#
rejected_request_message_id (	,
$rejected_request_sequencing_event_id (9
rejected_request (2.temporal.api.update.v1.Request1
failure (2 .temporal.api.failure.v1.Failure"�/
HistoryEvent
event_id (4

event_time (2.google.protobuf.TimestampB��4

event_type (2 .temporal.api.enums.v1.EventType
version (
task_id (
worker_may_ignore� (w
+workflow_execution_started_event_attributes (2@.temporal.api.history.v1.WorkflowExecutionStartedEventAttributesH {
-workflow_execution_completed_event_attributes (2B.temporal.api.history.v1.WorkflowExecutionCompletedEventAttributesH u
*workflow_execution_failed_event_attributes (2?.temporal.api.history.v1.WorkflowExecutionFailedEventAttributesH z
-workflow_execution_timed_out_event_attributes	 (2A.temporal.api.history.v1.WorkflowExecutionTimedOutEventAttributesH q
(workflow_task_scheduled_event_attributes
 (2=.temporal.api.history.v1.WorkflowTaskScheduledEventAttributesH m
&workflow_task_started_event_attributes (2;.temporal.api.history.v1.WorkflowTaskStartedEventAttributesH q
(workflow_task_completed_event_attributes (2=.temporal.api.history.v1.WorkflowTaskCompletedEventAttributesH p
(workflow_task_timed_out_event_attributes
%workflow_task_failed_event_attributes (2:.temporal.api.history.v1.WorkflowTaskFailedEventAttributesH q
(activity_task_scheduled_event_attributes (2=.temporal.api.history.v1.ActivityTaskScheduledEventAttributesH m
&activity_task_started_event_attributes (2;.temporal.api.history.v1.ActivityTaskStartedEventAttributesH q
(activity_task_completed_event_attributes (2=.temporal.api.history.v1.ActivityTaskCompletedEventAttributesH k
%activity_task_failed_event_attributes (2:.temporal.api.history.v1.ActivityTaskFailedEventAttributesH p
(activity_task_timed_out_event_attributes (2<.temporal.api.history.v1.ActivityTaskTimedOutEventAttributesH ^
timer_started_event_attributes (24.temporal.api.history.v1.TimerStartedEventAttributesH Z
timer_fired_event_attributes (22.temporal.api.history.v1.TimerFiredEventAttributesH ~
/activity_task_cancel_requested_event_attributes (2C.temporal.api.history.v1.ActivityTaskCancelRequestedEventAttributesH o
\'activity_task_canceled_event_attributes (2<.temporal.api.history.v1.ActivityTaskCanceledEventAttributesH `
timer_canceled_event_attributes (25.temporal.api.history.v1.TimerCanceledEventAttributesH b
 marker_recorded_event_attributes (26.temporal.api.history.v1.MarkerRecordedEventAttributesH y
,workflow_execution_signaled_event_attributes (2A.temporal.api.history.v1.WorkflowExecutionSignaledEventAttributesH }
.workflow_execution_terminated_event_attributes (2C.temporal.api.history.v1.WorkflowExecutionTerminatedEventAttributesH �
4workflow_execution_cancel_requested_event_attributes (2H.temporal.api.history.v1.WorkflowExecutionCancelRequestedEventAttributesH y
,workflow_execution_canceled_event_attributes (2A.temporal.api.history.v1.WorkflowExecutionCanceledEventAttributesH �
Erequest_cancel_external_workflow_execution_initiated_event_attributes (2W.temporal.api.history.v1.RequestCancelExternalWorkflowExecutionInitiatedEventAttributesH �
Brequest_cancel_external_workflow_execution_failed_event_attributes (2T.temporal.api.history.v1.RequestCancelExternalWorkflowExecutionFailedEventAttributesH �
=external_workflow_execution_cancel_requested_event_attributes  (2P.temporal.api.history.v1.ExternalWorkflowExecutionCancelRequestedEventAttributesH �
4workflow_execution_continued_as_new_event_attributes! (2G.temporal.api.history.v1.WorkflowExecutionContinuedAsNewEventAttributesH �
9start_child_workflow_execution_initiated_event_attributes" (2L.temporal.api.history.v1.StartChildWorkflowExecutionInitiatedEventAttributesH �
6start_child_workflow_execution_failed_event_attributes# (2I.temporal.api.history.v1.StartChildWorkflowExecutionFailedEventAttributesH �
1child_workflow_execution_started_event_attributes$ (2E.temporal.api.history.v1.ChildWorkflowExecutionStartedEventAttributesH �
3child_workflow_execution_completed_event_attributes% (2G.temporal.api.history.v1.ChildWorkflowExecutionCompletedEventAttributesH �
0child_workflow_execution_failed_event_attributes& (2D.temporal.api.history.v1.ChildWorkflowExecutionFailedEventAttributesH �
2child_workflow_execution_canceled_event_attributes\' (2F.temporal.api.history.v1.ChildWorkflowExecutionCanceledEventAttributesH �
3child_workflow_execution_timed_out_event_attributes( (2F.temporal.api.history.v1.ChildWorkflowExecutionTimedOutEventAttributesH �
4child_workflow_execution_terminated_event_attributes) (2H.temporal.api.history.v1.ChildWorkflowExecutionTerminatedEventAttributesH �
=signal_external_workflow_execution_initiated_event_attributes* (2P.temporal.api.history.v1.SignalExternalWorkflowExecutionInitiatedEventAttributesH �
:signal_external_workflow_execution_failed_event_attributes+ (2M.temporal.api.history.v1.SignalExternalWorkflowExecutionFailedEventAttributesH �
5external_workflow_execution_signaled_event_attributes, (2I.temporal.api.history.v1.ExternalWorkflowExecutionSignaledEventAttributesH �
2upsert_workflow_search_attributes_event_attributes- (2F.temporal.api.history.v1.UpsertWorkflowSearchAttributesEventAttributesH �
3workflow_execution_update_accepted_event_attributes. (2G.temporal.api.history.v1.WorkflowExecutionUpdateAcceptedEventAttributesH �
3workflow_execution_update_rejected_event_attributes/ (2G.temporal.api.history.v1.WorkflowExecutionUpdateRejectedEventAttributesH �
4workflow_execution_update_completed_event_attributes0 (2H.temporal.api.history.v1.WorkflowExecutionUpdateCompletedEventAttributesH �
8workflow_properties_modified_externally_event_attributes1 (2L.temporal.api.history.v1.WorkflowPropertiesModifiedExternallyEventAttributesH �
8activity_properties_modified_externally_event_attributes2 (2L.temporal.api.history.v1.ActivityPropertiesModifiedExternallyEventAttributesH {
-workflow_properties_modified_event_attributes3 (2B.temporal.api.history.v1.WorkflowPropertiesModifiedEventAttributesH B

attributes"@
History5
events (2%.temporal.api.history.v1.HistoryEventB�
io.temporal.api.history.v1BMessageProtoPZ%go.temporal.io/api/history/v1;history�Temporalio.Api.History.V1�Temporalio::Api::History::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
