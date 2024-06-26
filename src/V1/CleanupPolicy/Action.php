<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\CleanupPolicy;

use UnexpectedValueException;

/**
 * Action type for a cleanup policy.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.CleanupPolicy.Action</code>
 */
class Action
{
    /**
     * Action not specified.
     *
     * Generated from protobuf enum <code>ACTION_UNSPECIFIED = 0;</code>
     */
    const ACTION_UNSPECIFIED = 0;
    /**
     * Delete action.
     *
     * Generated from protobuf enum <code>DELETE = 1;</code>
     */
    const DELETE = 1;
    /**
     * Keep action.
     *
     * Generated from protobuf enum <code>KEEP = 2;</code>
     */
    const KEEP = 2;

    private static $valueToName = [
        self::ACTION_UNSPECIFIED => 'ACTION_UNSPECIFIED',
        self::DELETE => 'DELETE',
        self::KEEP => 'KEEP',
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


