<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.StartWorkflowExecutionRequest</code>
 */
class StartWorkflowExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     */
    protected $workflow_type = null;
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     */
    protected $task_queue = null;
    /**
     * Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     */
    protected $input = null;
    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6;</code>
     */
    protected $workflow_execution_timeout = null;
    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7;</code>
     */
    protected $workflow_run_timeout = null;
    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8;</code>
     */
    protected $workflow_task_timeout = null;
    /**
     * The identity of the client who initiated this request
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     */
    protected $identity = '';
    /**
     * A unique identifier for this start request. Typically UUIDv4.
     *
     * Generated from protobuf field <code>string request_id = 10;</code>
     */
    protected $request_id = '';
    /**
     * Defines whether to allow re-using the workflow id from a previously *closed* workflow.
     * The default policy is WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     * See `workflow_id_conflict_policy` for handling a workflow id duplication with a *running* workflow.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 11;</code>
     */
    protected $workflow_id_reuse_policy = 0;
    /**
     * Defines how to resolve a workflow id conflict with a *running* workflow.
     * The default policy is WORKFLOW_ID_CONFLICT_POLICY_FAIL.
     * See `workflow_id_reuse_policy` for handling a workflow id duplication with a *closed* workflow.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdConflictPolicy workflow_id_conflict_policy = 22;</code>
     */
    protected $workflow_id_conflict_policy = 0;
    /**
     * The retry policy for the workflow. Will never exceed `workflow_execution_timeout`.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 12;</code>
     */
    protected $retry_policy = null;
    /**
     * See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *
     * Generated from protobuf field <code>string cron_schedule = 13;</code>
     */
    protected $cron_schedule = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 14;</code>
     */
    protected $memo = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 15;</code>
     */
    protected $search_attributes = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 16;</code>
     */
    protected $header = null;
    /**
     * Request to get the first workflow task inline in the response bypassing matching service and worker polling.
     * If set to `true` the caller is expected to have a worker available and capable of processing the task.
     * The returned task will be marked as started and is expected to be completed by the specified
     * `workflow_task_timeout`.
     *
     * Generated from protobuf field <code>bool request_eager_execution = 17;</code>
     */
    protected $request_eager_execution = false;
    /**
     * These values will be available as ContinuedFailure and LastCompletionResult in the
     * WorkflowExecutionStarted event and through SDKs. The are currently only used by the
     * server itself (for the schedules feature) and are not intended to be exposed in
     * StartWorkflowExecution.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure continued_failure = 18;</code>
     */
    protected $continued_failure = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_completion_result = 19;</code>
     */
    protected $last_completion_result = null;
    /**
     * Time to wait before dispatching the first workflow task. Cannot be used with `cron_schedule`.
     * If the workflow gets a signal before the delay, a workflow task will be dispatched and the rest
     * of the delay will be ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_start_delay = 20;</code>
     */
    protected $workflow_start_delay = null;
    /**
     * Callbacks to be called by the server when this workflow reaches a terminal state.
     * If the workflow continues-as-new, these callbacks will be carried over to the new execution.
     * Callback addresses must be whitelisted in the server's dynamic configuration.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Callback completion_callbacks = 21;</code>
     */
    private $completion_callbacks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type string $workflow_id
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *           Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *     @type \Google\Protobuf\Duration $workflow_execution_timeout
     *           Total workflow execution timeout including retries and continue as new.
     *     @type \Google\Protobuf\Duration $workflow_run_timeout
     *           Timeout of a single workflow run.
     *     @type \Google\Protobuf\Duration $workflow_task_timeout
     *           Timeout of a single workflow task.
     *     @type string $identity
     *           The identity of the client who initiated this request
     *     @type string $request_id
     *           A unique identifier for this start request. Typically UUIDv4.
     *     @type int $workflow_id_reuse_policy
     *           Defines whether to allow re-using the workflow id from a previously *closed* workflow.
     *           The default policy is WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *           See `workflow_id_conflict_policy` for handling a workflow id duplication with a *running* workflow.
     *     @type int $workflow_id_conflict_policy
     *           Defines how to resolve a workflow id conflict with a *running* workflow.
     *           The default policy is WORKFLOW_ID_CONFLICT_POLICY_FAIL.
     *           See `workflow_id_reuse_policy` for handling a workflow id duplication with a *closed* workflow.
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *           The retry policy for the workflow. Will never exceed `workflow_execution_timeout`.
     *     @type string $cron_schedule
     *           See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *     @type \Temporal\Api\Common\V1\Memo $memo
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
     *     @type \Temporal\Api\Common\V1\Header $header
     *     @type bool $request_eager_execution
     *           Request to get the first workflow task inline in the response bypassing matching service and worker polling.
     *           If set to `true` the caller is expected to have a worker available and capable of processing the task.
     *           The returned task will be marked as started and is expected to be completed by the specified
     *           `workflow_task_timeout`.
     *     @type \Temporal\Api\Failure\V1\Failure $continued_failure
     *           These values will be available as ContinuedFailure and LastCompletionResult in the
     *           WorkflowExecutionStarted event and through SDKs. The are currently only used by the
     *           server itself (for the schedules feature) and are not intended to be exposed in
     *           StartWorkflowExecution.
     *     @type \Temporal\Api\Common\V1\Payloads $last_completion_result
     *     @type \Google\Protobuf\Duration $workflow_start_delay
     *           Time to wait before dispatching the first workflow task. Cannot be used with `cron_schedule`.
     *           If the workflow gets a signal before the delay, a workflow task will be dispatched and the rest
     *           of the delay will be ignored.
     *     @type array<\Temporal\Api\Common\V1\Callback>|\Google\Protobuf\Internal\RepeatedField $completion_callbacks
     *           Callbacks to be called by the server when this workflow reaches a terminal state.
     *           If the workflow continues-as-new, these callbacks will be carried over to the new execution.
     *           Callback addresses must be whitelisted in the server's dynamic configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
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
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType|null
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    public function hasWorkflowType()
    {
        return isset($this->workflow_type);
    }

    public function clearWorkflowType()
    {
        unset($this->workflow_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue|null
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    public function hasTaskQueue()
    {
        return isset($this->task_queue);
    }

    public function clearTaskQueue()
    {
        unset($this->task_queue);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowExecutionTimeout()
    {
        return $this->workflow_execution_timeout;
    }

    public function hasWorkflowExecutionTimeout()
    {
        return isset($this->workflow_execution_timeout);
    }

    public function clearWorkflowExecutionTimeout()
    {
        unset($this->workflow_execution_timeout);
    }

    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_execution_timeout = $var;

        return $this;
    }

    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowRunTimeout()
    {
        return $this->workflow_run_timeout;
    }

    public function hasWorkflowRunTimeout()
    {
        return isset($this->workflow_run_timeout);
    }

    public function clearWorkflowRunTimeout()
    {
        unset($this->workflow_run_timeout);
    }

    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowRunTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_run_timeout = $var;

        return $this;
    }

    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowTaskTimeout()
    {
        return $this->workflow_task_timeout;
    }

    public function hasWorkflowTaskTimeout()
    {
        return isset($this->workflow_task_timeout);
    }

    public function clearWorkflowTaskTimeout()
    {
        unset($this->workflow_task_timeout);
    }

    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowTaskTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_task_timeout = $var;

        return $this;
    }

    /**
     * The identity of the client who initiated this request
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the client who initiated this request
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * A unique identifier for this start request. Typically UUIDv4.
     *
     * Generated from protobuf field <code>string request_id = 10;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique identifier for this start request. Typically UUIDv4.
     *
     * Generated from protobuf field <code>string request_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Defines whether to allow re-using the workflow id from a previously *closed* workflow.
     * The default policy is WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     * See `workflow_id_conflict_policy` for handling a workflow id duplication with a *running* workflow.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 11;</code>
     * @return int
     */
    public function getWorkflowIdReusePolicy()
    {
        return $this->workflow_id_reuse_policy;
    }

    /**
     * Defines whether to allow re-using the workflow id from a previously *closed* workflow.
     * The default policy is WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     * See `workflow_id_conflict_policy` for handling a workflow id duplication with a *running* workflow.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowIdReusePolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\WorkflowIdReusePolicy::class);
        $this->workflow_id_reuse_policy = $var;

        return $this;
    }

    /**
     * Defines how to resolve a workflow id conflict with a *running* workflow.
     * The default policy is WORKFLOW_ID_CONFLICT_POLICY_FAIL.
     * See `workflow_id_reuse_policy` for handling a workflow id duplication with a *closed* workflow.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdConflictPolicy workflow_id_conflict_policy = 22;</code>
     * @return int
     */
    public function getWorkflowIdConflictPolicy()
    {
        return $this->workflow_id_conflict_policy;
    }

    /**
     * Defines how to resolve a workflow id conflict with a *running* workflow.
     * The default policy is WORKFLOW_ID_CONFLICT_POLICY_FAIL.
     * See `workflow_id_reuse_policy` for handling a workflow id duplication with a *closed* workflow.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdConflictPolicy workflow_id_conflict_policy = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowIdConflictPolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\WorkflowIdConflictPolicy::class);
        $this->workflow_id_conflict_policy = $var;

        return $this;
    }

    /**
     * The retry policy for the workflow. Will never exceed `workflow_execution_timeout`.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 12;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy|null
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    public function hasRetryPolicy()
    {
        return isset($this->retry_policy);
    }

    public function clearRetryPolicy()
    {
        unset($this->retry_policy);
    }

    /**
     * The retry policy for the workflow. Will never exceed `workflow_execution_timeout`.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 12;</code>
     * @param \Temporal\Api\Common\V1\RetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\RetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

    /**
     * See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *
     * Generated from protobuf field <code>string cron_schedule = 13;</code>
     * @return string
     */
    public function getCronSchedule()
    {
        return $this->cron_schedule;
    }

    /**
     * See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *
     * Generated from protobuf field <code>string cron_schedule = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCronSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->cron_schedule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 14;</code>
     * @return \Temporal\Api\Common\V1\Memo|null
     */
    public function getMemo()
    {
        return $this->memo;
    }

    public function hasMemo()
    {
        return isset($this->memo);
    }

    public function clearMemo()
    {
        unset($this->memo);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 14;</code>
     * @param \Temporal\Api\Common\V1\Memo $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Memo::class);
        $this->memo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 15;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes|null
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    public function hasSearchAttributes()
    {
        return isset($this->search_attributes);
    }

    public function clearSearchAttributes()
    {
        unset($this->search_attributes);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 15;</code>
     * @param \Temporal\Api\Common\V1\SearchAttributes $var
     * @return $this
     */
    public function setSearchAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\SearchAttributes::class);
        $this->search_attributes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 16;</code>
     * @return \Temporal\Api\Common\V1\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 16;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Request to get the first workflow task inline in the response bypassing matching service and worker polling.
     * If set to `true` the caller is expected to have a worker available and capable of processing the task.
     * The returned task will be marked as started and is expected to be completed by the specified
     * `workflow_task_timeout`.
     *
     * Generated from protobuf field <code>bool request_eager_execution = 17;</code>
     * @return bool
     */
    public function getRequestEagerExecution()
    {
        return $this->request_eager_execution;
    }

    /**
     * Request to get the first workflow task inline in the response bypassing matching service and worker polling.
     * If set to `true` the caller is expected to have a worker available and capable of processing the task.
     * The returned task will be marked as started and is expected to be completed by the specified
     * `workflow_task_timeout`.
     *
     * Generated from protobuf field <code>bool request_eager_execution = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestEagerExecution($var)
    {
        GPBUtil::checkBool($var);
        $this->request_eager_execution = $var;

        return $this;
    }

    /**
     * These values will be available as ContinuedFailure and LastCompletionResult in the
     * WorkflowExecutionStarted event and through SDKs. The are currently only used by the
     * server itself (for the schedules feature) and are not intended to be exposed in
     * StartWorkflowExecution.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure continued_failure = 18;</code>
     * @return \Temporal\Api\Failure\V1\Failure|null
     */
    public function getContinuedFailure()
    {
        return $this->continued_failure;
    }

    public function hasContinuedFailure()
    {
        return isset($this->continued_failure);
    }

    public function clearContinuedFailure()
    {
        unset($this->continued_failure);
    }

    /**
     * These values will be available as ContinuedFailure and LastCompletionResult in the
     * WorkflowExecutionStarted event and through SDKs. The are currently only used by the
     * server itself (for the schedules feature) and are not intended to be exposed in
     * StartWorkflowExecution.
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure continued_failure = 18;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setContinuedFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->continued_failure = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_completion_result = 19;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getLastCompletionResult()
    {
        return $this->last_completion_result;
    }

    public function hasLastCompletionResult()
    {
        return isset($this->last_completion_result);
    }

    public function clearLastCompletionResult()
    {
        unset($this->last_completion_result);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_completion_result = 19;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setLastCompletionResult($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->last_completion_result = $var;

        return $this;
    }

    /**
     * Time to wait before dispatching the first workflow task. Cannot be used with `cron_schedule`.
     * If the workflow gets a signal before the delay, a workflow task will be dispatched and the rest
     * of the delay will be ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_start_delay = 20;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowStartDelay()
    {
        return $this->workflow_start_delay;
    }

    public function hasWorkflowStartDelay()
    {
        return isset($this->workflow_start_delay);
    }

    public function clearWorkflowStartDelay()
    {
        unset($this->workflow_start_delay);
    }

    /**
     * Time to wait before dispatching the first workflow task. Cannot be used with `cron_schedule`.
     * If the workflow gets a signal before the delay, a workflow task will be dispatched and the rest
     * of the delay will be ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_start_delay = 20;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowStartDelay($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_start_delay = $var;

        return $this;
    }

    /**
     * Callbacks to be called by the server when this workflow reaches a terminal state.
     * If the workflow continues-as-new, these callbacks will be carried over to the new execution.
     * Callback addresses must be whitelisted in the server's dynamic configuration.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Callback completion_callbacks = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompletionCallbacks()
    {
        return $this->completion_callbacks;
    }

    /**
     * Callbacks to be called by the server when this workflow reaches a terminal state.
     * If the workflow continues-as-new, these callbacks will be carried over to the new execution.
     * Callback addresses must be whitelisted in the server's dynamic configuration.
     *
     * Generated from protobuf field <code>repeated .temporal.api.common.v1.Callback completion_callbacks = 21;</code>
     * @param array<\Temporal\Api\Common\V1\Callback>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompletionCallbacks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Common\V1\Callback::class);
        $this->completion_callbacks = $arr;

        return $this;
    }

}

