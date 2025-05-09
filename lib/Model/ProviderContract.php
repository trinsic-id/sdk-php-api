<?php
/**
 * ProviderContract
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
 * ProviderContract Class Doc Comment
 *
 * @category Class
 * @package  Trinsic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProviderContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProviderContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'logo_url' => 'string',
        'available' => 'bool',
        'geography' => 'string[]',
        'regions' => 'string[]',
        'launch_method' => '\Trinsic\Api\Model\IntegrationLaunchMethod',
        'collection_method' => '\Trinsic\Api\Model\ResultCollectionMethod',
        'results_may_be_delayed_after_redirect' => 'bool',
        'has_refreshable_content' => 'bool',
        'requires_input' => 'bool',
        'has_trinsic_interface' => 'bool',
        'supports_advanced_provider_sessions' => 'bool',
        'sub_providers' => '\Trinsic\Api\Model\SubProviderMetadata[]',
        'health' => '\Trinsic\Api\Model\ProviderHealth'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'logo_url' => null,
        'available' => null,
        'geography' => null,
        'regions' => null,
        'launch_method' => null,
        'collection_method' => null,
        'results_may_be_delayed_after_redirect' => null,
        'has_refreshable_content' => null,
        'requires_input' => null,
        'has_trinsic_interface' => null,
        'supports_advanced_provider_sessions' => null,
        'sub_providers' => null,
        'health' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'description' => false,
        'logo_url' => false,
        'available' => false,
        'geography' => false,
        'regions' => false,
        'launch_method' => false,
        'collection_method' => false,
        'results_may_be_delayed_after_redirect' => false,
        'has_refreshable_content' => false,
        'requires_input' => false,
        'has_trinsic_interface' => false,
        'supports_advanced_provider_sessions' => false,
        'sub_providers' => true,
        'health' => false
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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'logo_url' => 'logoUrl',
        'available' => 'available',
        'geography' => 'geography',
        'regions' => 'regions',
        'launch_method' => 'launchMethod',
        'collection_method' => 'collectionMethod',
        'results_may_be_delayed_after_redirect' => 'resultsMayBeDelayedAfterRedirect',
        'has_refreshable_content' => 'hasRefreshableContent',
        'requires_input' => 'requiresInput',
        'has_trinsic_interface' => 'hasTrinsicInterface',
        'supports_advanced_provider_sessions' => 'supportsAdvancedProviderSessions',
        'sub_providers' => 'subProviders',
        'health' => 'health'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'logo_url' => 'setLogoUrl',
        'available' => 'setAvailable',
        'geography' => 'setGeography',
        'regions' => 'setRegions',
        'launch_method' => 'setLaunchMethod',
        'collection_method' => 'setCollectionMethod',
        'results_may_be_delayed_after_redirect' => 'setResultsMayBeDelayedAfterRedirect',
        'has_refreshable_content' => 'setHasRefreshableContent',
        'requires_input' => 'setRequiresInput',
        'has_trinsic_interface' => 'setHasTrinsicInterface',
        'supports_advanced_provider_sessions' => 'setSupportsAdvancedProviderSessions',
        'sub_providers' => 'setSubProviders',
        'health' => 'setHealth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'logo_url' => 'getLogoUrl',
        'available' => 'getAvailable',
        'geography' => 'getGeography',
        'regions' => 'getRegions',
        'launch_method' => 'getLaunchMethod',
        'collection_method' => 'getCollectionMethod',
        'results_may_be_delayed_after_redirect' => 'getResultsMayBeDelayedAfterRedirect',
        'has_refreshable_content' => 'getHasRefreshableContent',
        'requires_input' => 'getRequiresInput',
        'has_trinsic_interface' => 'getHasTrinsicInterface',
        'supports_advanced_provider_sessions' => 'getSupportsAdvancedProviderSessions',
        'sub_providers' => 'getSubProviders',
        'health' => 'getHealth'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('available', $data ?? [], null);
        $this->setIfExists('geography', $data ?? [], null);
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('launch_method', $data ?? [], null);
        $this->setIfExists('collection_method', $data ?? [], null);
        $this->setIfExists('results_may_be_delayed_after_redirect', $data ?? [], null);
        $this->setIfExists('has_refreshable_content', $data ?? [], null);
        $this->setIfExists('requires_input', $data ?? [], null);
        $this->setIfExists('has_trinsic_interface', $data ?? [], null);
        $this->setIfExists('supports_advanced_provider_sessions', $data ?? [], null);
        $this->setIfExists('sub_providers', $data ?? [], null);
        $this->setIfExists('health', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['logo_url'] === null) {
            $invalidProperties[] = "'logo_url' can't be null";
        }
        if ($this->container['available'] === null) {
            $invalidProperties[] = "'available' can't be null";
        }
        if ($this->container['geography'] === null) {
            $invalidProperties[] = "'geography' can't be null";
        }
        if ($this->container['regions'] === null) {
            $invalidProperties[] = "'regions' can't be null";
        }
        if ($this->container['launch_method'] === null) {
            $invalidProperties[] = "'launch_method' can't be null";
        }
        if ($this->container['collection_method'] === null) {
            $invalidProperties[] = "'collection_method' can't be null";
        }
        if ($this->container['results_may_be_delayed_after_redirect'] === null) {
            $invalidProperties[] = "'results_may_be_delayed_after_redirect' can't be null";
        }
        if ($this->container['has_refreshable_content'] === null) {
            $invalidProperties[] = "'has_refreshable_content' can't be null";
        }
        if ($this->container['requires_input'] === null) {
            $invalidProperties[] = "'requires_input' can't be null";
        }
        if ($this->container['has_trinsic_interface'] === null) {
            $invalidProperties[] = "'has_trinsic_interface' can't be null";
        }
        if ($this->container['supports_advanced_provider_sessions'] === null) {
            $invalidProperties[] = "'supports_advanced_provider_sessions' can't be null";
        }
        if ($this->container['health'] === null) {
            $invalidProperties[] = "'health' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the Provider for this contract.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The Provider's Name as it appears in Trinsic's Dashboard and Widget
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The Provider's description as it appears in Trinsic's Widget.              This is flavor text, not a full, human-readable description of the provider.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string $logo_url A URL pointing to the Provider's logo on Trinsic's CDN.              May be a PNG, JPG, or SVG image.
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        if (is_null($logo_url)) {
            throw new \InvalidArgumentException('non-nullable logo_url cannot be null');
        }
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available Whether the Provider is available for use in your App.              If `false`, you will need to contact Trinsic to enable this Provider for your App.
     *
     * @return self
     */
    public function setAvailable($available)
    {
        if (is_null($available)) {
            throw new \InvalidArgumentException('non-nullable available cannot be null');
        }
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets geography
     *
     * @return string[]
     */
    public function getGeography()
    {
        return $this->container['geography'];
    }

    /**
     * Sets geography
     *
     * @param string[] $geography The geographies within the Regions the Provider is available.
     *
     * @return self
     */
    public function setGeography($geography)
    {
        if (is_null($geography)) {
            throw new \InvalidArgumentException('non-nullable geography cannot be null');
        }
        $this->container['geography'] = $geography;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return string[]
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param string[] $regions The regions within which the Provider is available.
     *
     * @return self
     */
    public function setRegions($regions)
    {
        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets launch_method
     *
     * @return \Trinsic\Api\Model\IntegrationLaunchMethod
     */
    public function getLaunchMethod()
    {
        return $this->container['launch_method'];
    }

    /**
     * Sets launch_method
     *
     * @param \Trinsic\Api\Model\IntegrationLaunchMethod $launch_method Relevant only to Advanced Provider Sessions.              The `LaunchMethod` which must be supported to launch the Provider Session in Advanced Provider Sessions.
     *
     * @return self
     */
    public function setLaunchMethod($launch_method)
    {
        if (is_null($launch_method)) {
            throw new \InvalidArgumentException('non-nullable launch_method cannot be null');
        }
        $this->container['launch_method'] = $launch_method;

        return $this;
    }

    /**
     * Gets collection_method
     *
     * @return \Trinsic\Api\Model\ResultCollectionMethod
     */
    public function getCollectionMethod()
    {
        return $this->container['collection_method'];
    }

    /**
     * Sets collection_method
     *
     * @param \Trinsic\Api\Model\ResultCollectionMethod $collection_method Relevant only to Advanced Provider Sessions.              The `CollectionMethod` which must be supported to launch the Provider Session in Advanced Provider Sessions.
     *
     * @return self
     */
    public function setCollectionMethod($collection_method)
    {
        if (is_null($collection_method)) {
            throw new \InvalidArgumentException('non-nullable collection_method cannot be null');
        }
        $this->container['collection_method'] = $collection_method;

        return $this;
    }

    /**
     * Gets results_may_be_delayed_after_redirect
     *
     * @return bool
     */
    public function getResultsMayBeDelayedAfterRedirect()
    {
        return $this->container['results_may_be_delayed_after_redirect'];
    }

    /**
     * Sets results_may_be_delayed_after_redirect
     *
     * @param bool $results_may_be_delayed_after_redirect If `true`, then the results for this Provider may not be available immediately after the user is redirected back to your application. In this case, the `GetSessionResults` API must be called until results are available.              This is an uncommon scenario, and typically only applies to Providers which use a biometric check or traditional document scan.
     *
     * @return self
     */
    public function setResultsMayBeDelayedAfterRedirect($results_may_be_delayed_after_redirect)
    {
        if (is_null($results_may_be_delayed_after_redirect)) {
            throw new \InvalidArgumentException('non-nullable results_may_be_delayed_after_redirect cannot be null');
        }
        $this->container['results_may_be_delayed_after_redirect'] = $results_may_be_delayed_after_redirect;

        return $this;
    }

    /**
     * Gets has_refreshable_content
     *
     * @return bool
     */
    public function getHasRefreshableContent()
    {
        return $this->container['has_refreshable_content'];
    }

    /**
     * Sets has_refreshable_content
     *
     * @param bool $has_refreshable_content Relevant only to Advanced Provider Sessions.              Whether the Provider requires the `RefreshStepContent` capability.              For example, Samsung Wallet's deep links expire every 30 seconds, and must be refreshed periodically for a resilient user flow.
     *
     * @return self
     */
    public function setHasRefreshableContent($has_refreshable_content)
    {
        if (is_null($has_refreshable_content)) {
            throw new \InvalidArgumentException('non-nullable has_refreshable_content cannot be null');
        }
        $this->container['has_refreshable_content'] = $has_refreshable_content;

        return $this;
    }

    /**
     * Gets requires_input
     *
     * @return bool
     */
    public function getRequiresInput()
    {
        return $this->container['requires_input'];
    }

    /**
     * Sets requires_input
     *
     * @param bool $requires_input Relevant to Hosted Provider Sessions and Advanced Provider Sessions.              If `true`, this Provider requires provider-specific input on Session creation. If this input is not provided, Trinsic's Hosted UI will be invoked to collect the input from the user.
     *
     * @return self
     */
    public function setRequiresInput($requires_input)
    {
        if (is_null($requires_input)) {
            throw new \InvalidArgumentException('non-nullable requires_input cannot be null');
        }
        $this->container['requires_input'] = $requires_input;

        return $this;
    }

    /**
     * Gets has_trinsic_interface
     *
     * @return bool
     */
    public function getHasTrinsicInterface()
    {
        return $this->container['has_trinsic_interface'];
    }

    /**
     * Sets has_trinsic_interface
     *
     * @param bool $has_trinsic_interface Whether there exists a Trinsic-hosted UI for this Provider.              This is `true` for any Provider which is not a simple, OIDC-like redirect flow.
     *
     * @return self
     */
    public function setHasTrinsicInterface($has_trinsic_interface)
    {
        if (is_null($has_trinsic_interface)) {
            throw new \InvalidArgumentException('non-nullable has_trinsic_interface cannot be null');
        }
        $this->container['has_trinsic_interface'] = $has_trinsic_interface;

        return $this;
    }

    /**
     * Gets supports_advanced_provider_sessions
     *
     * @return bool
     */
    public function getSupportsAdvancedProviderSessions()
    {
        return $this->container['supports_advanced_provider_sessions'];
    }

    /**
     * Sets supports_advanced_provider_sessions
     *
     * @param bool $supports_advanced_provider_sessions Whether this Provider can be fully whitelabeled/OEMed through the Advanced Provider Sessions API.              If `false`, the Provider may still be launched through Advanced Provider Sessions; however, it will necessarily require a Trinsic-hosted UI to function.
     *
     * @return self
     */
    public function setSupportsAdvancedProviderSessions($supports_advanced_provider_sessions)
    {
        if (is_null($supports_advanced_provider_sessions)) {
            throw new \InvalidArgumentException('non-nullable supports_advanced_provider_sessions cannot be null');
        }
        $this->container['supports_advanced_provider_sessions'] = $supports_advanced_provider_sessions;

        return $this;
    }

    /**
     * Gets sub_providers
     *
     * @return \Trinsic\Api\Model\SubProviderMetadata[]|null
     */
    public function getSubProviders()
    {
        return $this->container['sub_providers'];
    }

    /**
     * Sets sub_providers
     *
     * @param \Trinsic\Api\Model\SubProviderMetadata[]|null $sub_providers Metadata about the sub-providers which are available for this Provider.              For example, Italy's SPID is a Provider which aggregates access to multiple sub-providers.
     *
     * @return self
     */
    public function setSubProviders($sub_providers)
    {
        if (is_null($sub_providers)) {
            array_push($this->openAPINullablesSetToNull, 'sub_providers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sub_providers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sub_providers'] = $sub_providers;

        return $this;
    }

    /**
     * Gets health
     *
     * @return \Trinsic\Api\Model\ProviderHealth
     */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
     * Sets health
     *
     * @param \Trinsic\Api\Model\ProviderHealth $health The health for an integration to be able to successfully perform a verification session.
     *
     * @return self
     */
    public function setHealth($health)
    {
        if (is_null($health)) {
            throw new \InvalidArgumentException('non-nullable health cannot be null');
        }
        $this->container['health'] = $health;

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


