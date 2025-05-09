<?php
/**
 * IdentityData
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

use \ArrayAccess;
use \Trinsic\Api\ObjectSerializer;

/**
 * IdentityData Class Doc Comment
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IdentityData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IdentityData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'originating_provider_id' => 'string',
        'originating_sub_provider_id' => 'string',
        'person' => '\Trinsic\Api\Model\PersonData',
        'document' => '\Trinsic\Api\Model\DocumentData',
        'attachment_access_keys' => '\Trinsic\Api\Model\AttachmentAccessKeys'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'originating_provider_id' => null,
        'originating_sub_provider_id' => null,
        'person' => null,
        'document' => null,
        'attachment_access_keys' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'originating_provider_id' => true,
        'originating_sub_provider_id' => true,
        'person' => true,
        'document' => true,
        'attachment_access_keys' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'originating_provider_id' => 'originatingProviderId',
        'originating_sub_provider_id' => 'originatingSubProviderId',
        'person' => 'person',
        'document' => 'document',
        'attachment_access_keys' => 'attachmentAccessKeys'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'originating_provider_id' => 'setOriginatingProviderId',
        'originating_sub_provider_id' => 'setOriginatingSubProviderId',
        'person' => 'setPerson',
        'document' => 'setDocument',
        'attachment_access_keys' => 'setAttachmentAccessKeys'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'originating_provider_id' => 'getOriginatingProviderId',
        'originating_sub_provider_id' => 'getOriginatingSubProviderId',
        'person' => 'getPerson',
        'document' => 'getDocument',
        'attachment_access_keys' => 'getAttachmentAccessKeys'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('originating_provider_id', $data ?? [], null);
        $this->setIfExists('originating_sub_provider_id', $data ?? [], null);
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('document', $data ?? [], null);
        $this->setIfExists('attachment_access_keys', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets originating_provider_id
     *
     * @return string|null
     */
    public function getOriginatingProviderId()
    {
        return $this->container['originating_provider_id'];
    }

    /**
     * Sets originating_provider_id
     *
     * @param string|null $originating_provider_id originating_provider_id
     *
     * @return self
     */
    public function setOriginatingProviderId($originating_provider_id)
    {
        if (is_null($originating_provider_id)) {
            array_push($this->openAPINullablesSetToNull, 'originating_provider_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('originating_provider_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['originating_provider_id'] = $originating_provider_id;

        return $this;
    }

    /**
     * Gets originating_sub_provider_id
     *
     * @return string|null
     */
    public function getOriginatingSubProviderId()
    {
        return $this->container['originating_sub_provider_id'];
    }

    /**
     * Sets originating_sub_provider_id
     *
     * @param string|null $originating_sub_provider_id originating_sub_provider_id
     *
     * @return self
     */
    public function setOriginatingSubProviderId($originating_sub_provider_id)
    {
        if (is_null($originating_sub_provider_id)) {
            array_push($this->openAPINullablesSetToNull, 'originating_sub_provider_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('originating_sub_provider_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['originating_sub_provider_id'] = $originating_sub_provider_id;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \Trinsic\Api\Model\PersonData|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \Trinsic\Api\Model\PersonData|null $person person
     *
     * @return self
     */
    public function setPerson($person)
    {
        if (is_null($person)) {
            array_push($this->openAPINullablesSetToNull, 'person');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('person', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \Trinsic\Api\Model\DocumentData|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \Trinsic\Api\Model\DocumentData|null $document document
     *
     * @return self
     */
    public function setDocument($document)
    {
        if (is_null($document)) {
            array_push($this->openAPINullablesSetToNull, 'document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets attachment_access_keys
     *
     * @return \Trinsic\Api\Model\AttachmentAccessKeys|null
     */
    public function getAttachmentAccessKeys()
    {
        return $this->container['attachment_access_keys'];
    }

    /**
     * Sets attachment_access_keys
     *
     * @param \Trinsic\Api\Model\AttachmentAccessKeys|null $attachment_access_keys attachment_access_keys
     *
     * @return self
     */
    public function setAttachmentAccessKeys($attachment_access_keys)
    {
        if (is_null($attachment_access_keys)) {
            array_push($this->openAPINullablesSetToNull, 'attachment_access_keys');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachment_access_keys', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attachment_access_keys'] = $attachment_access_keys;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


