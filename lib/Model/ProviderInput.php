<?php
/**
 * ProviderInput
 *
 * PHP version 7.4
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
 * Generator version: 7.8.0
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
 * ProviderInput Class Doc Comment
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProviderInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProviderInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'indonesia_nik' => '\Trinsic\Api\Model\IndonesiaNikInput',
        'mexico_curp' => '\Trinsic\Api\Model\MexicoCurpInput',
        'south_africa_nid' => '\Trinsic\Api\Model\SouthAfricaNidInput',
        'kenya_nid' => '\Trinsic\Api\Model\KenyaNidInput',
        'nigeria_nin' => '\Trinsic\Api\Model\NigeriaNinInput',
        'aadhaar' => '\Trinsic\Api\Model\AadhaarInput',
        'bangladesh_national_id' => '\Trinsic\Api\Model\BangladeshNationalIdInput',
        'brazil_cpf_check' => '\Trinsic\Api\Model\BrazilCpfCheckInput',
        'brazil_digital_cnh' => '\Trinsic\Api\Model\BrazilDigitalCnhInput',
        'philippine_match' => '\Trinsic\Api\Model\PhilippineMatchInput',
        'philippine_qr' => '\Trinsic\Api\Model\PhilippineQRInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'indonesia_nik' => null,
        'mexico_curp' => null,
        'south_africa_nid' => null,
        'kenya_nid' => null,
        'nigeria_nin' => null,
        'aadhaar' => null,
        'bangladesh_national_id' => null,
        'brazil_cpf_check' => null,
        'brazil_digital_cnh' => null,
        'philippine_match' => null,
        'philippine_qr' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'indonesia_nik' => true,
        'mexico_curp' => true,
        'south_africa_nid' => true,
        'kenya_nid' => true,
        'nigeria_nin' => true,
        'aadhaar' => true,
        'bangladesh_national_id' => true,
        'brazil_cpf_check' => true,
        'brazil_digital_cnh' => true,
        'philippine_match' => true,
        'philippine_qr' => true
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
        'indonesia_nik' => 'indonesiaNik',
        'mexico_curp' => 'mexicoCurp',
        'south_africa_nid' => 'southAfricaNid',
        'kenya_nid' => 'kenyaNid',
        'nigeria_nin' => 'nigeriaNin',
        'aadhaar' => 'aadhaar',
        'bangladesh_national_id' => 'bangladeshNationalId',
        'brazil_cpf_check' => 'brazilCpfCheck',
        'brazil_digital_cnh' => 'brazilDigitalCnh',
        'philippine_match' => 'philippineMatch',
        'philippine_qr' => 'philippineQR'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'indonesia_nik' => 'setIndonesiaNik',
        'mexico_curp' => 'setMexicoCurp',
        'south_africa_nid' => 'setSouthAfricaNid',
        'kenya_nid' => 'setKenyaNid',
        'nigeria_nin' => 'setNigeriaNin',
        'aadhaar' => 'setAadhaar',
        'bangladesh_national_id' => 'setBangladeshNationalId',
        'brazil_cpf_check' => 'setBrazilCpfCheck',
        'brazil_digital_cnh' => 'setBrazilDigitalCnh',
        'philippine_match' => 'setPhilippineMatch',
        'philippine_qr' => 'setPhilippineQr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'indonesia_nik' => 'getIndonesiaNik',
        'mexico_curp' => 'getMexicoCurp',
        'south_africa_nid' => 'getSouthAfricaNid',
        'kenya_nid' => 'getKenyaNid',
        'nigeria_nin' => 'getNigeriaNin',
        'aadhaar' => 'getAadhaar',
        'bangladesh_national_id' => 'getBangladeshNationalId',
        'brazil_cpf_check' => 'getBrazilCpfCheck',
        'brazil_digital_cnh' => 'getBrazilDigitalCnh',
        'philippine_match' => 'getPhilippineMatch',
        'philippine_qr' => 'getPhilippineQr'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('indonesia_nik', $data ?? [], null);
        $this->setIfExists('mexico_curp', $data ?? [], null);
        $this->setIfExists('south_africa_nid', $data ?? [], null);
        $this->setIfExists('kenya_nid', $data ?? [], null);
        $this->setIfExists('nigeria_nin', $data ?? [], null);
        $this->setIfExists('aadhaar', $data ?? [], null);
        $this->setIfExists('bangladesh_national_id', $data ?? [], null);
        $this->setIfExists('brazil_cpf_check', $data ?? [], null);
        $this->setIfExists('brazil_digital_cnh', $data ?? [], null);
        $this->setIfExists('philippine_match', $data ?? [], null);
        $this->setIfExists('philippine_qr', $data ?? [], null);
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
     * Gets indonesia_nik
     *
     * @return \Trinsic\Api\Model\IndonesiaNikInput|null
     */
    public function getIndonesiaNik()
    {
        return $this->container['indonesia_nik'];
    }

    /**
     * Sets indonesia_nik
     *
     * @param \Trinsic\Api\Model\IndonesiaNikInput|null $indonesia_nik Input for the `f-indonesia-nik` integration
     *
     * @return self
     */
    public function setIndonesiaNik($indonesia_nik)
    {
        if (is_null($indonesia_nik)) {
            array_push($this->openAPINullablesSetToNull, 'indonesia_nik');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('indonesia_nik', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['indonesia_nik'] = $indonesia_nik;

        return $this;
    }

    /**
     * Gets mexico_curp
     *
     * @return \Trinsic\Api\Model\MexicoCurpInput|null
     */
    public function getMexicoCurp()
    {
        return $this->container['mexico_curp'];
    }

    /**
     * Sets mexico_curp
     *
     * @param \Trinsic\Api\Model\MexicoCurpInput|null $mexico_curp Input for the `f-mexico-curp` integration
     *
     * @return self
     */
    public function setMexicoCurp($mexico_curp)
    {
        if (is_null($mexico_curp)) {
            array_push($this->openAPINullablesSetToNull, 'mexico_curp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mexico_curp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mexico_curp'] = $mexico_curp;

        return $this;
    }

    /**
     * Gets south_africa_nid
     *
     * @return \Trinsic\Api\Model\SouthAfricaNidInput|null
     */
    public function getSouthAfricaNid()
    {
        return $this->container['south_africa_nid'];
    }

    /**
     * Sets south_africa_nid
     *
     * @param \Trinsic\Api\Model\SouthAfricaNidInput|null $south_africa_nid Input for the `f-south-africa-nid` integration
     *
     * @return self
     */
    public function setSouthAfricaNid($south_africa_nid)
    {
        if (is_null($south_africa_nid)) {
            array_push($this->openAPINullablesSetToNull, 'south_africa_nid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('south_africa_nid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['south_africa_nid'] = $south_africa_nid;

        return $this;
    }

    /**
     * Gets kenya_nid
     *
     * @return \Trinsic\Api\Model\KenyaNidInput|null
     */
    public function getKenyaNid()
    {
        return $this->container['kenya_nid'];
    }

    /**
     * Sets kenya_nid
     *
     * @param \Trinsic\Api\Model\KenyaNidInput|null $kenya_nid Input for the `f-kenya-nid` integration
     *
     * @return self
     */
    public function setKenyaNid($kenya_nid)
    {
        if (is_null($kenya_nid)) {
            array_push($this->openAPINullablesSetToNull, 'kenya_nid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('kenya_nid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['kenya_nid'] = $kenya_nid;

        return $this;
    }

    /**
     * Gets nigeria_nin
     *
     * @return \Trinsic\Api\Model\NigeriaNinInput|null
     */
    public function getNigeriaNin()
    {
        return $this->container['nigeria_nin'];
    }

    /**
     * Sets nigeria_nin
     *
     * @param \Trinsic\Api\Model\NigeriaNinInput|null $nigeria_nin Input for the `f-nigeria-nin` integration
     *
     * @return self
     */
    public function setNigeriaNin($nigeria_nin)
    {
        if (is_null($nigeria_nin)) {
            array_push($this->openAPINullablesSetToNull, 'nigeria_nin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nigeria_nin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nigeria_nin'] = $nigeria_nin;

        return $this;
    }

    /**
     * Gets aadhaar
     *
     * @return \Trinsic\Api\Model\AadhaarInput|null
     */
    public function getAadhaar()
    {
        return $this->container['aadhaar'];
    }

    /**
     * Sets aadhaar
     *
     * @param \Trinsic\Api\Model\AadhaarInput|null $aadhaar Input for the `f-india-aadhaar-match` integration
     *
     * @return self
     */
    public function setAadhaar($aadhaar)
    {
        if (is_null($aadhaar)) {
            array_push($this->openAPINullablesSetToNull, 'aadhaar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aadhaar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aadhaar'] = $aadhaar;

        return $this;
    }

    /**
     * Gets bangladesh_national_id
     *
     * @return \Trinsic\Api\Model\BangladeshNationalIdInput|null
     */
    public function getBangladeshNationalId()
    {
        return $this->container['bangladesh_national_id'];
    }

    /**
     * Sets bangladesh_national_id
     *
     * @param \Trinsic\Api\Model\BangladeshNationalIdInput|null $bangladesh_national_id Input for the `bangladesh-nid` integration
     *
     * @return self
     */
    public function setBangladeshNationalId($bangladesh_national_id)
    {
        if (is_null($bangladesh_national_id)) {
            array_push($this->openAPINullablesSetToNull, 'bangladesh_national_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bangladesh_national_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bangladesh_national_id'] = $bangladesh_national_id;

        return $this;
    }

    /**
     * Gets brazil_cpf_check
     *
     * @return \Trinsic\Api\Model\BrazilCpfCheckInput|null
     */
    public function getBrazilCpfCheck()
    {
        return $this->container['brazil_cpf_check'];
    }

    /**
     * Sets brazil_cpf_check
     *
     * @param \Trinsic\Api\Model\BrazilCpfCheckInput|null $brazil_cpf_check Input for the `g-brazil-cpf` integration
     *
     * @return self
     */
    public function setBrazilCpfCheck($brazil_cpf_check)
    {
        if (is_null($brazil_cpf_check)) {
            array_push($this->openAPINullablesSetToNull, 'brazil_cpf_check');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brazil_cpf_check', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brazil_cpf_check'] = $brazil_cpf_check;

        return $this;
    }

    /**
     * Gets brazil_digital_cnh
     *
     * @return \Trinsic\Api\Model\BrazilDigitalCnhInput|null
     */
    public function getBrazilDigitalCnh()
    {
        return $this->container['brazil_digital_cnh'];
    }

    /**
     * Sets brazil_digital_cnh
     *
     * @param \Trinsic\Api\Model\BrazilDigitalCnhInput|null $brazil_digital_cnh Input for the `g-brazil-digital-cnh` integration
     *
     * @return self
     */
    public function setBrazilDigitalCnh($brazil_digital_cnh)
    {
        if (is_null($brazil_digital_cnh)) {
            array_push($this->openAPINullablesSetToNull, 'brazil_digital_cnh');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brazil_digital_cnh', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brazil_digital_cnh'] = $brazil_digital_cnh;

        return $this;
    }

    /**
     * Gets philippine_match
     *
     * @return \Trinsic\Api\Model\PhilippineMatchInput|null
     */
    public function getPhilippineMatch()
    {
        return $this->container['philippine_match'];
    }

    /**
     * Sets philippine_match
     *
     * @param \Trinsic\Api\Model\PhilippineMatchInput|null $philippine_match Input for the `b-philsys-biometric` integration
     *
     * @return self
     */
    public function setPhilippineMatch($philippine_match)
    {
        if (is_null($philippine_match)) {
            array_push($this->openAPINullablesSetToNull, 'philippine_match');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('philippine_match', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['philippine_match'] = $philippine_match;

        return $this;
    }

    /**
     * Gets philippine_qr
     *
     * @return \Trinsic\Api\Model\PhilippineQRInput|null
     */
    public function getPhilippineQr()
    {
        return $this->container['philippine_qr'];
    }

    /**
     * Sets philippine_qr
     *
     * @param \Trinsic\Api\Model\PhilippineQRInput|null $philippine_qr Input for the `b-philippine-qr-digital-national-id` and `b-philippine-qr-ephill-id` integrations
     *
     * @return self
     */
    public function setPhilippineQr($philippine_qr)
    {
        if (is_null($philippine_qr)) {
            array_push($this->openAPINullablesSetToNull, 'philippine_qr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('philippine_qr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['philippine_qr'] = $philippine_qr;

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


