<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/version.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to update a version.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.UpdateVersionRequest</code>
 */
class UpdateVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Version that replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Version version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $version = null;
    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ArtifactRegistry\V1\Version $version    Required. The Version that replaces the resource on the server.
     * @param \Google\Protobuf\FieldMask                $updateMask The update mask applies to the resource. For the `FieldMask` definition,
     *                                                              see
     *                                                              https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * @return \Google\Cloud\ArtifactRegistry\V1\UpdateVersionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ArtifactRegistry\V1\Version $version, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setVersion($version)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ArtifactRegistry\V1\Version $version
     *           Required. The Version that replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource. For the `FieldMask` definition,
     *           see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Version that replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Version version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Required. The Version that replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Version version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
