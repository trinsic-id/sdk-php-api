<?php
/**
 * IntegrationCapability
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Trinsic API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Trinsic\Api\Model;
use \Trinsic\Api\ObjectSerializer;

/**
 * IntegrationCapability Class Doc Comment
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationCapability
{
    /**
     * Possible values of this enum
     */
    public const LAUNCH_BROWSER = 'LaunchBrowser';

    public const DEEPLINK_TO_MOBILE = 'DeeplinkToMobile';

    public const SHOW_CONTENT = 'ShowContent';

    public const REFRESH_STEP_CONTENT = 'RefreshStepContent';

    public const CAPTURE_REDIRECT = 'CaptureRedirect';

    public const POLL_RESULT = 'PollResult';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LAUNCH_BROWSER,
            self::DEEPLINK_TO_MOBILE,
            self::SHOW_CONTENT,
            self::REFRESH_STEP_CONTENT,
            self::CAPTURE_REDIRECT,
            self::POLL_RESULT
        ];
    }
}


