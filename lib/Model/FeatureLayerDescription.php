<?php
/**
 * FeatureLayerDescription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * xServer
 *
 * PTV xServer 2.26.0 - 2.26 API document
 *
 * OpenAPI spec version: 2.26
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * FeatureLayerDescription Class Doc Comment
 *
 * @category Class
 * @description This type represents meta data about a Feature Layer. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xdata.FeatureLayerDescription
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureLayerDescription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeatureLayerDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'theme_id' => '\Swagger\Client\Model\ThemeId',
'feature_scenario' => '\Swagger\Client\Model\FeatureScenario',
'tenant' => 'string',
'scope' => '\Swagger\Client\Model\ScopeName',
'created_at' => '\DateTime',
'last_used_at' => '\DateTime',
'size' => 'int',
'provider_information' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'theme_id' => null,
'feature_scenario' => null,
'tenant' => null,
'scope' => null,
'created_at' => 'date-time',
'last_used_at' => 'date-time',
'size' => 'int64',
'provider_information' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'theme_id' => 'themeId',
'feature_scenario' => 'featureScenario',
'tenant' => 'tenant',
'scope' => 'scope',
'created_at' => 'createdAt',
'last_used_at' => 'lastUsedAt',
'size' => 'size',
'provider_information' => 'providerInformation'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'theme_id' => 'setThemeId',
'feature_scenario' => 'setFeatureScenario',
'tenant' => 'setTenant',
'scope' => 'setScope',
'created_at' => 'setCreatedAt',
'last_used_at' => 'setLastUsedAt',
'size' => 'setSize',
'provider_information' => 'setProviderInformation'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'theme_id' => 'getThemeId',
'feature_scenario' => 'getFeatureScenario',
'tenant' => 'getTenant',
'scope' => 'getScope',
'created_at' => 'getCreatedAt',
'last_used_at' => 'getLastUsedAt',
'size' => 'getSize',
'provider_information' => 'getProviderInformation'    ];

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
        return self::$swaggerModelName;
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
        $this->container['theme_id'] = isset($data['theme_id']) ? $data['theme_id'] : null;
        $this->container['feature_scenario'] = isset($data['feature_scenario']) ? $data['feature_scenario'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['last_used_at'] = isset($data['last_used_at']) ? $data['last_used_at'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['provider_information'] = isset($data['provider_information']) ? $data['provider_information'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['theme_id'] === null) {
            $invalidProperties[] = "'theme_id' can't be null";
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
     * Gets theme_id
     *
     * @return \Swagger\Client\Model\ThemeId
     */
    public function getThemeId()
    {
        return $this->container['theme_id'];
    }

    /**
     * Sets theme_id
     *
     * @param \Swagger\Client\Model\ThemeId $theme_id theme_id
     *
     * @return $this
     */
    public function setThemeId($theme_id)
    {
        $this->container['theme_id'] = $theme_id;

        return $this;
    }

    /**
     * Gets feature_scenario
     *
     * @return \Swagger\Client\Model\FeatureScenario
     */
    public function getFeatureScenario()
    {
        return $this->container['feature_scenario'];
    }

    /**
     * Sets feature_scenario
     *
     * @param \Swagger\Client\Model\FeatureScenario $feature_scenario feature_scenario
     *
     * @return $this
     */
    public function setFeatureScenario($feature_scenario)
    {
        $this->container['feature_scenario'] = $feature_scenario;

        return $this;
    }

    /**
     * Gets tenant
     *
     * @return string
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param string $tenant The tenant is returned only for administrators.
     *
     * @return $this
     */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \Swagger\Client\Model\ScopeName
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \Swagger\Client\Model\ScopeName $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Indicates the date the Feature Layer was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets last_used_at
     *
     * @return \DateTime
     */
    public function getLastUsedAt()
    {
        return $this->container['last_used_at'];
    }

    /**
     * Sets last_used_at
     *
     * @param \DateTime $last_used_at Indicates the date the Feature Layer was used the last time.
     *
     * @return $this
     */
    public function setLastUsedAt($last_used_at)
    {
        $this->container['last_used_at'] = $last_used_at;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Indicates the size of the Feature Layer on the hard drive in bytes.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets provider_information
     *
     * @return string
     */
    public function getProviderInformation()
    {
        return $this->container['provider_information'];
    }

    /**
     * Sets provider_information
     *
     * @param string $provider_information Display information on the data providers of the map. This string consists of a comma-separated list of pairs of data provider name and provider version number, e.g. TomTom 2016.12. The string format can be changed at any time, it is for display purposes only.
     *
     * @return $this
     */
    public function setProviderInformation($provider_information)
    {
        $this->container['provider_information'] = $provider_information;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
