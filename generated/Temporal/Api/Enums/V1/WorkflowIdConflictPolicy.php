<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/workflow.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Defines what to do when trying to start a workflow with the same workflow id as a *running* workflow.
 * Note that it is *never* valid to have two actively running instances of the same workflow id.
 * See `WorkflowIdReusePolicy` for handling workflow id duplication with a *closed* workflow.
 *
 * Protobuf type <code>temporal.api.enums.v1.WorkflowIdConflictPolicy</code>
 */
class WorkflowIdConflictPolicy
{
    /**
     * Generated from protobuf enum <code>WORKFLOW_ID_CONFLICT_POLICY_UNSPECIFIED = 0;</code>
     */
    const WORKFLOW_ID_CONFLICT_POLICY_UNSPECIFIED = 0;
    /**
     * Don't start a new workflow; instead return `WorkflowExecutionAlreadyStartedFailure`.
     *
     * Generated from protobuf enum <code>WORKFLOW_ID_CONFLICT_POLICY_FAIL = 1;</code>
     */
    const WORKFLOW_ID_CONFLICT_POLICY_FAIL = 1;
    /**
     * Don't start a new workflow; instead return a workflow handle for the running workflow.
     *
     * Generated from protobuf enum <code>WORKFLOW_ID_CONFLICT_POLICY_USE_EXISTING = 2;</code>
     */
    const WORKFLOW_ID_CONFLICT_POLICY_USE_EXISTING = 2;
    /**
     * Terminate the running workflow before starting a new one.
     *
     * Generated from protobuf enum <code>WORKFLOW_ID_CONFLICT_POLICY_TERMINATE_EXISTING = 3;</code>
     */
    const WORKFLOW_ID_CONFLICT_POLICY_TERMINATE_EXISTING = 3;

    private static $valueToName = [
        self::WORKFLOW_ID_CONFLICT_POLICY_UNSPECIFIED => 'WORKFLOW_ID_CONFLICT_POLICY_UNSPECIFIED',
        self::WORKFLOW_ID_CONFLICT_POLICY_FAIL => 'WORKFLOW_ID_CONFLICT_POLICY_FAIL',
        self::WORKFLOW_ID_CONFLICT_POLICY_USE_EXISTING => 'WORKFLOW_ID_CONFLICT_POLICY_USE_EXISTING',
        self::WORKFLOW_ID_CONFLICT_POLICY_TERMINATE_EXISTING => 'WORKFLOW_ID_CONFLICT_POLICY_TERMINATE_EXISTING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
