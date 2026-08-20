<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Temporal\Api\Cloud\Cloudservice\V1;

/**
 * WARNING: This service is currently experimental and may change in
 * incompatible ways.
 */
class CloudServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get information about the current authenticated user or service account principal
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetCurrentIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCurrentIdentity(\Temporal\Api\Cloud\Cloudservice\V1\GetCurrentIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetCurrentIdentity',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetCurrentIdentityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets all known users
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUsers(\Temporal\Api\Cloud\Cloudservice\V1\GetUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUsers',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a user
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUser(\Temporal\Api\Cloud\Cloudservice\V1\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUser',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a user
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUser(\Temporal\Api\Cloud\Cloudservice\V1\CreateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateUser',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a user
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUser(\Temporal\Api\Cloud\Cloudservice\V1\UpdateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateUser',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a user
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUser(\Temporal\Api\Cloud\Cloudservice\V1\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteUser',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a user's access to a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\SetUserNamespaceAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserNamespaceAccess(\Temporal\Api\Cloud\Cloudservice\V1\SetUserNamespaceAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/SetUserNamespaceAccess',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\SetUserNamespaceAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the latest information on an async operation
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetAsyncOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAsyncOperation(\Temporal\Api\Cloud\Cloudservice\V1\GetAsyncOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetAsyncOperation',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetAsyncOperationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateNamespaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateNamespace(\Temporal\Api\Cloud\Cloudservice\V1\CreateNamespaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateNamespace',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateNamespaceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get all namespaces
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNamespacesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNamespaces(\Temporal\Api\Cloud\Cloudservice\V1\GetNamespacesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNamespaces',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNamespacesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNamespace(\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNamespace',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateNamespace(\Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateNamespace',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Rename an existing customer search attribute
     * @param \Temporal\Api\Cloud\Cloudservice\V1\RenameCustomSearchAttributeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RenameCustomSearchAttribute(\Temporal\Api\Cloud\Cloudservice\V1\RenameCustomSearchAttributeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/RenameCustomSearchAttribute',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\RenameCustomSearchAttributeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteNamespace(\Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteNamespace',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Failover a multi-region namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\FailoverNamespaceRegionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FailoverNamespaceRegion(\Temporal\Api\Cloud\Cloudservice\V1\FailoverNamespaceRegionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/FailoverNamespaceRegion',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\FailoverNamespaceRegionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     * Add a new region to a namespace
     * Deprecated: Use the UpdateNamespace() to add new replica in the namespace spec instead.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\AddNamespaceRegionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddNamespaceRegion(\Temporal\Api\Cloud\Cloudservice\V1\AddNamespaceRegionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/AddNamespaceRegion',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\AddNamespaceRegionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     * Delete a region from a namespace
     * Deprecated: Use the UpdateNamespace() to delete a replica in the namespace spec instead.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceRegionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteNamespaceRegion(\Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceRegionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteNamespaceRegion',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceRegionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get all regions
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetRegionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRegions(\Temporal\Api\Cloud\Cloudservice\V1\GetRegionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetRegions',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetRegionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a region
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetRegionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRegion(\Temporal\Api\Cloud\Cloudservice\V1\GetRegionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetRegion',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetRegionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get all known API keys
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetApiKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetApiKeys(\Temporal\Api\Cloud\Cloudservice\V1\GetApiKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetApiKeys',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetApiKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an API key
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetApiKey(\Temporal\Api\Cloud\Cloudservice\V1\GetApiKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetApiKey',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetApiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an API key
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateApiKey(\Temporal\Api\Cloud\Cloudservice\V1\CreateApiKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateApiKey',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateApiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an API key
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateApiKey(\Temporal\Api\Cloud\Cloudservice\V1\UpdateApiKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateApiKey',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateApiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an API key
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteApiKey(\Temporal\Api\Cloud\Cloudservice\V1\DeleteApiKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteApiKey',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteApiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets nexus endpoints
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNexusEndpointsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNexusEndpoints(\Temporal\Api\Cloud\Cloudservice\V1\GetNexusEndpointsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNexusEndpoints',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNexusEndpointsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a nexus endpoint
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNexusEndpointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNexusEndpoint(\Temporal\Api\Cloud\Cloudservice\V1\GetNexusEndpointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNexusEndpoint',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNexusEndpointResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a nexus endpoint
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateNexusEndpointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateNexusEndpoint(\Temporal\Api\Cloud\Cloudservice\V1\CreateNexusEndpointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateNexusEndpoint',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateNexusEndpointResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a nexus endpoint
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateNexusEndpointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateNexusEndpoint(\Temporal\Api\Cloud\Cloudservice\V1\UpdateNexusEndpointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateNexusEndpoint',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateNexusEndpointResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a nexus endpoint
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteNexusEndpointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteNexusEndpoint(\Temporal\Api\Cloud\Cloudservice\V1\DeleteNexusEndpointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteNexusEndpoint',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteNexusEndpointResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get all user groups
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserGroups(\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserGroups',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a user group
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserGroup(\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserGroup',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create new a user group
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateUserGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUserGroup(\Temporal\Api\Cloud\Cloudservice\V1\CreateUserGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateUserGroup',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateUserGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a user group
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateUserGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUserGroup(\Temporal\Api\Cloud\Cloudservice\V1\UpdateUserGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateUserGroup',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateUserGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a user group
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteUserGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUserGroup(\Temporal\Api\Cloud\Cloudservice\V1\DeleteUserGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteUserGroup',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteUserGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a user group's access to a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\SetUserGroupNamespaceAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserGroupNamespaceAccess(\Temporal\Api\Cloud\Cloudservice\V1\SetUserGroupNamespaceAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/SetUserGroupNamespaceAccess',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\SetUserGroupNamespaceAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a member to the group, can only be used with Cloud group types.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\AddUserGroupMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddUserGroupMember(\Temporal\Api\Cloud\Cloudservice\V1\AddUserGroupMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/AddUserGroupMember',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\AddUserGroupMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a member from the group, can only be used with Cloud group types.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\RemoveUserGroupMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveUserGroupMember(\Temporal\Api\Cloud\Cloudservice\V1\RemoveUserGroupMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/RemoveUserGroupMember',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\RemoveUserGroupMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserGroupMembers(\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserGroupMembers',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a service account.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateServiceAccount(\Temporal\Api\Cloud\Cloudservice\V1\CreateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateServiceAccount',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateServiceAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a service account.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetServiceAccount(\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetServiceAccount',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get service accounts.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetServiceAccounts(\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetServiceAccounts',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a service account.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateServiceAccount(\Temporal\Api\Cloud\Cloudservice\V1\UpdateServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateServiceAccount',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateServiceAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a service account's access to a namespace.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\SetServiceAccountNamespaceAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetServiceAccountNamespaceAccess(\Temporal\Api\Cloud\Cloudservice\V1\SetServiceAccountNamespaceAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/SetServiceAccountNamespaceAccess',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\SetServiceAccountNamespaceAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a service account.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteServiceAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteServiceAccount(\Temporal\Api\Cloud\Cloudservice\V1\DeleteServiceAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteServiceAccount',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteServiceAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * WARNING: Pre-Release Feature
     * Get usage data across namespaces
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUsage(\Temporal\Api\Cloud\Cloudservice\V1\GetUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUsage',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUsageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get account information.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccount(\Temporal\Api\Cloud\Cloudservice\V1\GetAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetAccount',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update account information.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccount(\Temporal\Api\Cloud\Cloudservice\V1\UpdateAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateAccount',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an export sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateNamespaceExportSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateNamespaceExportSink(\Temporal\Api\Cloud\Cloudservice\V1\CreateNamespaceExportSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateNamespaceExportSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateNamespaceExportSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an export sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceExportSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNamespaceExportSink(\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceExportSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNamespaceExportSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceExportSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get export sinks
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceExportSinksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNamespaceExportSinks(\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceExportSinksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNamespaceExportSinks',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceExportSinksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an export sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceExportSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateNamespaceExportSink(\Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceExportSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateNamespaceExportSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceExportSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an export sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceExportSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteNamespaceExportSink(\Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceExportSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteNamespaceExportSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteNamespaceExportSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Validates an export sink configuration by delivering an empty test file to the specified sink.
     * This operation verifies that the sink is correctly configured, accessible, and ready for data export.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\ValidateNamespaceExportSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateNamespaceExportSink(\Temporal\Api\Cloud\Cloudservice\V1\ValidateNamespaceExportSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/ValidateNamespaceExportSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\ValidateNamespaceExportSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update the tags for a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceTagsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateNamespaceTags(\Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceTagsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateNamespaceTags',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateNamespaceTagsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a connectivity rule
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateConnectivityRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateConnectivityRule(\Temporal\Api\Cloud\Cloudservice\V1\CreateConnectivityRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateConnectivityRule',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateConnectivityRuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a connectivity rule by id
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetConnectivityRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConnectivityRule(\Temporal\Api\Cloud\Cloudservice\V1\GetConnectivityRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetConnectivityRule',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetConnectivityRuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists connectivity rules by account
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetConnectivityRulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConnectivityRules(\Temporal\Api\Cloud\Cloudservice\V1\GetConnectivityRulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetConnectivityRules',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetConnectivityRulesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a connectivity rule by id
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteConnectivityRuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteConnectivityRule(\Temporal\Api\Cloud\Cloudservice\V1\DeleteConnectivityRuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteConnectivityRule',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteConnectivityRuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get audit logs
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetAuditLogsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAuditLogs(\Temporal\Api\Cloud\Cloudservice\V1\GetAuditLogsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetAuditLogs',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetAuditLogsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Validate customer audit log sink is accessible from Temporal's workflow by delivering an empty file to the specified sink.
     * The operation verifies that the sink is correctly configured, accessible and ready to receive audit logs.
     * @param \Temporal\Api\Cloud\Cloudservice\V1\ValidateAccountAuditLogSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateAccountAuditLogSink(\Temporal\Api\Cloud\Cloudservice\V1\ValidateAccountAuditLogSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/ValidateAccountAuditLogSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\ValidateAccountAuditLogSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an audit log sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateAccountAuditLogSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccountAuditLogSink(\Temporal\Api\Cloud\Cloudservice\V1\CreateAccountAuditLogSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateAccountAuditLogSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateAccountAuditLogSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get an audit log sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetAccountAuditLogSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccountAuditLogSink(\Temporal\Api\Cloud\Cloudservice\V1\GetAccountAuditLogSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetAccountAuditLogSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetAccountAuditLogSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get audit log sinks
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetAccountAuditLogSinksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccountAuditLogSinks(\Temporal\Api\Cloud\Cloudservice\V1\GetAccountAuditLogSinksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetAccountAuditLogSinks',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetAccountAuditLogSinksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update an audit log sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateAccountAuditLogSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccountAuditLogSink(\Temporal\Api\Cloud\Cloudservice\V1\UpdateAccountAuditLogSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateAccountAuditLogSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateAccountAuditLogSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an audit log sink
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteAccountAuditLogSinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccountAuditLogSink(\Temporal\Api\Cloud\Cloudservice\V1\DeleteAccountAuditLogSinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteAccountAuditLogSink',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteAccountAuditLogSinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get namespace capacity information
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceCapacityInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNamespaceCapacityInfo(\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceCapacityInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetNamespaceCapacityInfo',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetNamespaceCapacityInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a billing report
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateBillingReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateBillingReport(\Temporal\Api\Cloud\Cloudservice\V1\CreateBillingReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateBillingReport',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateBillingReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a billing report
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetBillingReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBillingReport(\Temporal\Api\Cloud\Cloudservice\V1\GetBillingReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetBillingReport',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetBillingReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get custom roles
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetCustomRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomRoles(\Temporal\Api\Cloud\Cloudservice\V1\GetCustomRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetCustomRoles',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetCustomRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a custom role
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetCustomRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomRole(\Temporal\Api\Cloud\Cloudservice\V1\GetCustomRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetCustomRole',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetCustomRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a custom role
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateCustomRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCustomRole(\Temporal\Api\Cloud\Cloudservice\V1\CreateCustomRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateCustomRole',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateCustomRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a custom role
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateCustomRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomRole(\Temporal\Api\Cloud\Cloudservice\V1\UpdateCustomRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateCustomRole',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateCustomRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a custom role
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteCustomRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCustomRole(\Temporal\Api\Cloud\Cloudservice\V1\DeleteCustomRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteCustomRole',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteCustomRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get users with access to a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserNamespaceAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserNamespaceAssignments(\Temporal\Api\Cloud\Cloudservice\V1\GetUserNamespaceAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserNamespaceAssignments',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserNamespaceAssignmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get service accounts with access to a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountNamespaceAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetServiceAccountNamespaceAssignments(\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountNamespaceAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetServiceAccountNamespaceAssignments',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountNamespaceAssignmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get user groups with access to a namespace
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupNamespaceAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserGroupNamespaceAssignments(\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupNamespaceAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserGroupNamespaceAssignments',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupNamespaceAssignmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get all projects
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProjects(\Temporal\Api\Cloud\Cloudservice\V1\GetProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetProjects',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProject(\Temporal\Api\Cloud\Cloudservice\V1\GetProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetProject',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\CreateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateProject(\Temporal\Api\Cloud\Cloudservice\V1\CreateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/CreateProject',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\CreateProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\UpdateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProject(\Temporal\Api\Cloud\Cloudservice\V1\UpdateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/UpdateProject',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\UpdateProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\DeleteProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProject(\Temporal\Api\Cloud\Cloudservice\V1\DeleteProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/DeleteProject',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\DeleteProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a user's access to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\SetUserProjectAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserProjectAccess(\Temporal\Api\Cloud\Cloudservice\V1\SetUserProjectAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/SetUserProjectAccess',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\SetUserProjectAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a user group's access to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\SetUserGroupProjectAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserGroupProjectAccess(\Temporal\Api\Cloud\Cloudservice\V1\SetUserGroupProjectAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/SetUserGroupProjectAccess',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\SetUserGroupProjectAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a service account's access to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\SetServiceAccountProjectAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetServiceAccountProjectAccess(\Temporal\Api\Cloud\Cloudservice\V1\SetServiceAccountProjectAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/SetServiceAccountProjectAccess',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\SetServiceAccountProjectAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get users with access to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserProjectAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserProjectAssignments(\Temporal\Api\Cloud\Cloudservice\V1\GetUserProjectAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserProjectAssignments',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserProjectAssignmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get service accounts with access to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountProjectAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetServiceAccountProjectAssignments(\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountProjectAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetServiceAccountProjectAssignments',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetServiceAccountProjectAssignmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get user groups with access to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupProjectAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserGroupProjectAssignments(\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupProjectAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetUserGroupProjectAssignments',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetUserGroupProjectAssignmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get service accounts scoped to a project
     * @param \Temporal\Api\Cloud\Cloudservice\V1\GetProjectScopedServiceAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProjectScopedServiceAccounts(\Temporal\Api\Cloud\Cloudservice\V1\GetProjectScopedServiceAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/temporal.api.cloud.cloudservice.v1.CloudService/GetProjectScopedServiceAccounts',
        $argument,
        ['\Temporal\Api\Cloud\Cloudservice\V1\GetProjectScopedServiceAccountsResponse', 'decode'],
        $metadata, $options);
    }

}
