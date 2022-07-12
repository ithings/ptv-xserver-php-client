<?php
/**
 * Speeds
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
 * Speeds Class Doc Comment
 *
 * @category Class
 * @description Defines the speed values used by the routing algorithm to calculate the travel time of a road segment. All speed values given here are internally rounded to km/h. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.vehicleprofile.Speeds
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Speeds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Speeds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'speed_ranges_by_network_class' => '\Swagger\Client\Model\SpeedRangesByNetworkClass',
'speed_for_link_distance' => '\Swagger\Client\Model\Speed',
'maximum_speed' => '\Swagger\Client\Model\Speed'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'speed_ranges_by_network_class' => null,
'speed_for_link_distance' => null,
'maximum_speed' => null    ];

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
        'speed_ranges_by_network_class' => 'speedRangesByNetworkClass',
'speed_for_link_distance' => 'speedForLinkDistance',
'maximum_speed' => 'maximumSpeed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'speed_ranges_by_network_class' => 'setSpeedRangesByNetworkClass',
'speed_for_link_distance' => 'setSpeedForLinkDistance',
'maximum_speed' => 'setMaximumSpeed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'speed_ranges_by_network_class' => 'getSpeedRangesByNetworkClass',
'speed_for_link_distance' => 'getSpeedForLinkDistance',
'maximum_speed' => 'getMaximumSpeed'    ];

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
        $this->container['speed_ranges_by_network_class'] = isset($data['speed_ranges_by_network_class']) ? $data['speed_ranges_by_network_class'] : null;
        $this->container['speed_for_link_distance'] = isset($data['speed_for_link_distance']) ? $data['speed_for_link_distance'] : null;
        $this->container['maximum_speed'] = isset($data['maximum_speed']) ? $data['maximum_speed'] : null;
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
     * Gets speed_ranges_by_network_class
     *
     * @return \Swagger\Client\Model\SpeedRangesByNetworkClass
     */
    public function getSpeedRangesByNetworkClass()
    {
        return $this->container['speed_ranges_by_network_class'];
    }

    /**
     * Sets speed_ranges_by_network_class
     *
     * @param \Swagger\Client\Model\SpeedRangesByNetworkClass $speed_ranges_by_network_class speed_ranges_by_network_class
     *
     * @return $this
     */
    public function setSpeedRangesByNetworkClass($speed_ranges_by_network_class)
    {
        $this->container['speed_ranges_by_network_class'] = $speed_ranges_by_network_class;

        return $this;
    }

    /**
     * Gets speed_for_link_distance
     *
     * @return \Swagger\Client\Model\Speed
     */
    public function getSpeedForLinkDistance()
    {
        return $this->container['speed_for_link_distance'];
    }

    /**
     * Sets speed_for_link_distance
     *
     * @param \Swagger\Client\Model\Speed $speed_for_link_distance speed_for_link_distance
     *
     * @return $this
     */
    public function setSpeedForLinkDistance($speed_for_link_distance)
    {
        $this->container['speed_for_link_distance'] = $speed_for_link_distance;

        return $this;
    }

    /**
     * Gets maximum_speed
     *
     * @return \Swagger\Client\Model\Speed
     */
    public function getMaximumSpeed()
    {
        return $this->container['maximum_speed'];
    }

    /**
     * Sets maximum_speed
     *
     * @param \Swagger\Client\Model\Speed $maximum_speed maximum_speed
     *
     * @return $this
     */
    public function setMaximumSpeed($maximum_speed)
    {
        $this->container['maximum_speed'] = $maximum_speed;

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