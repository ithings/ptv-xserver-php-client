<?php
/**
 * MapDescription
 *
 * PHP version 5
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * xServer
 *
 * PTV xServer 2.26.1 - 2.26 API document
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

namespace ithings\ptvxserver\model;

use \ArrayAccess;
use \ithings\ptvxserver\ObjectSerializer;

/**
 * MapDescription Class Doc Comment
 *
 * @category Class
 * @description This type holds meta information on the installed map. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xruntime.MapDescription
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MapDescription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MapDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_name' => 'string',
'provider_information' => 'string',
'detail_level' => '\ithings\ptvxserver\model\MapDetailLevel',
'copyright' => '\ithings\ptvxserver\model\Copyright',
'data_compatibility_version' => '\ithings\ptvxserver\model\PositiveInteger'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'display_name' => null,
'provider_information' => null,
'detail_level' => null,
'copyright' => null,
'data_compatibility_version' => null    ];

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
        'display_name' => 'displayName',
'provider_information' => 'providerInformation',
'detail_level' => 'detailLevel',
'copyright' => 'copyright',
'data_compatibility_version' => 'dataCompatibilityVersion'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
'provider_information' => 'setProviderInformation',
'detail_level' => 'setDetailLevel',
'copyright' => 'setCopyright',
'data_compatibility_version' => 'setDataCompatibilityVersion'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
'provider_information' => 'getProviderInformation',
'detail_level' => 'getDetailLevel',
'copyright' => 'getCopyright',
'data_compatibility_version' => 'getDataCompatibilityVersion'    ];

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
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['provider_information'] = isset($data['provider_information']) ? $data['provider_information'] : null;
        $this->container['detail_level'] = isset($data['detail_level']) ? $data['detail_level'] : null;
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['data_compatibility_version'] = isset($data['data_compatibility_version']) ? $data['data_compatibility_version'] : null;
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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The display name of the map, e.g. PTV Europe City Map Premium 2017.1H.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
     * @param string $provider_information Display information on the data providers of the map. This string consists of a comma-separated list of pairs of data provider name and provider version number, e.g. TomTom 2016.12. The string format can be changed at any time, it is for display purposes only. In order to obtain the provider names and data versions separately, use the entity RegionDescription.
     *
     * @return $this
     */
    public function setProviderInformation($provider_information)
    {
        $this->container['provider_information'] = $provider_information;

        return $this;
    }

    /**
     * Gets detail_level
     *
     * @return \ithings\ptvxserver\model\MapDetailLevel
     */
    public function getDetailLevel()
    {
        return $this->container['detail_level'];
    }

    /**
     * Sets detail_level
     *
     * @param \ithings\ptvxserver\model\MapDetailLevel $detail_level detail_level
     *
     * @return $this
     */
    public function setDetailLevel($detail_level)
    {
        $this->container['detail_level'] = $detail_level;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return \ithings\ptvxserver\model\Copyright
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param \ithings\ptvxserver\model\Copyright $copyright copyright
     *
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

        return $this;
    }

    /**
     * Gets data_compatibility_version
     *
     * @return \ithings\ptvxserver\model\PositiveInteger
     */
    public function getDataCompatibilityVersion()
    {
        return $this->container['data_compatibility_version'];
    }

    /**
     * Sets data_compatibility_version
     *
     * @param \ithings\ptvxserver\model\PositiveInteger $data_compatibility_version data_compatibility_version
     *
     * @return $this
     */
    public function setDataCompatibilityVersion($data_compatibility_version)
    {
        $this->container['data_compatibility_version'] = $data_compatibility_version;

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