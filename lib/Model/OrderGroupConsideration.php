<?php
/**
 * OrderGroupConsideration
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
 * OrderGroupConsideration Class Doc Comment
 *
 * @category Class
 * @description Defines strong preferences concerning order groups. They are considered in automatic planning. If these preferences are not met for an input plan or for a change tours action, they are not reported as a violation. For further information please have a look at the technical concept Order Groups. Currently, oneTripPerGroup can only be activated if oneGroupPerTrip is also activated, otherwise an exception is thrown. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.OrderGroupConsideration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderGroupConsideration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderGroupConsideration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'one_group_per_trip' => 'bool',
'one_trip_per_group' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'one_group_per_trip' => null,
'one_trip_per_group' => null    ];

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
        'one_group_per_trip' => 'oneGroupPerTrip',
'one_trip_per_group' => 'oneTripPerGroup'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'one_group_per_trip' => 'setOneGroupPerTrip',
'one_trip_per_group' => 'setOneTripPerGroup'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'one_group_per_trip' => 'getOneGroupPerTrip',
'one_trip_per_group' => 'getOneTripPerGroup'    ];

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
        $this->container['one_group_per_trip'] = isset($data['one_group_per_trip']) ? $data['one_group_per_trip'] : null;
        $this->container['one_trip_per_group'] = isset($data['one_trip_per_group']) ? $data['one_trip_per_group'] : null;
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
     * Gets one_group_per_trip
     *
     * @return bool
     */
    public function getOneGroupPerTrip()
    {
        return $this->container['one_group_per_trip'];
    }

    /**
     * Sets one_group_per_trip
     *
     * @param bool $one_group_per_trip If set to true, orders of a specific group cannot be planned together with orders of another group into a trip and orders without groupIds remain unplanned.
     *
     * @return $this
     */
    public function setOneGroupPerTrip($one_group_per_trip)
    {
        $this->container['one_group_per_trip'] = $one_group_per_trip;

        return $this;
    }

    /**
     * Gets one_trip_per_group
     *
     * @return bool
     */
    public function getOneTripPerGroup()
    {
        return $this->container['one_trip_per_group'];
    }

    /**
     * Sets one_trip_per_group
     *
     * @param bool $one_trip_per_group If set to true, orders of a specific group must be planned together in one trip.
     *
     * @return $this
     */
    public function setOneTripPerGroup($one_trip_per_group)
    {
        $this->container['one_trip_per_group'] = $one_trip_per_group;

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
