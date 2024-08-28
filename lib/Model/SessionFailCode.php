<?php
/**
 * SessionFailCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Trinsic\Api\Model;
use \Trinsic\Api\ObjectSerializer;

/**
 * SessionFailCode Class Doc Comment
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SessionFailCode
{
    /**
     * Possible values of this enum
     */
    public const SESSION_FAIL_NONE = 'SessionFailNone';

    public const SESSION_FAIL_INTERNAL = 'SessionFailInternal';

    public const SESSION_FAIL_VERIFICATION_FAILED = 'SessionFailVerificationFailed';

    public const SESSION_FAIL_AUTHENTICATION = 'SessionFailAuthentication';

    public const SESSION_FAIL_EXPIRED = 'SessionFailExpired';

    public const SESSION_FAIL_USER_CANCELED = 'SessionFailUserCanceled';

    public const SESSION_FAIL_RP_CANCELED = 'SessionFailRpCanceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SESSION_FAIL_NONE,
            self::SESSION_FAIL_INTERNAL,
            self::SESSION_FAIL_VERIFICATION_FAILED,
            self::SESSION_FAIL_AUTHENTICATION,
            self::SESSION_FAIL_EXPIRED,
            self::SESSION_FAIL_USER_CANCELED,
            self::SESSION_FAIL_RP_CANCELED
        ];
    }
}

