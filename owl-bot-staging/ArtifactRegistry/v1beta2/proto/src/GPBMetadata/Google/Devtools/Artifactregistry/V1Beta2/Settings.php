<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/settings.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2;

class Settings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/devtools/artifactregistry/v1beta2/settings.proto(google.devtools.artifactregistry.v1beta2google/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
ProjectSettings
name (	l
legacy_redirection_state (2J.google.devtools.artifactregistry.v1beta2.ProjectSettings.RedirectionState"�
RedirectionState!
REDIRECTION_STATE_UNSPECIFIED $
 REDIRECTION_FROM_GCR_IO_DISABLED#
REDIRECTION_FROM_GCR_IO_ENABLED%
!REDIRECTION_FROM_GCR_IO_FINALIZED:X�AU
/artifactregistry.googleapis.com/ProjectSettings"projects/{project}/projectSettings"b
GetProjectSettingsRequestE
name (	B7�A�A1
/artifactregistry.googleapis.com/ProjectSettings"�
UpdateProjectSettingsRequestS
project_settings (29.google.devtools.artifactregistry.v1beta2.ProjectSettings/
update_mask (2.google.protobuf.FieldMaskB�
,com.google.devtools.artifactregistry.v1beta2BSettingsProtoPZXgoogle.golang.org/genproto/googleapis/devtools/artifactregistry/v1beta2;artifactregistry�%Google.Cloud.ArtifactRegistry.V1Beta2�%Google\\Cloud\\ArtifactRegistry\\V1beta2�(Google::Cloud::ArtifactRegistry::V1beta2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

