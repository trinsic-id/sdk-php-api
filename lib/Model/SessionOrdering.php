<?php
/**
 * SessionOrdering
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
 * SessionOrdering Class Doc Comment
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SessionOrdering
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'Created';

    public const UPDATED = 'Updated';

    public const STATE = 'State';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::UPDATED,
            self::STATE
        ];
    }
}

