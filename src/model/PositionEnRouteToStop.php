<?php
/**
 * PositionEnRouteToStop
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
use \ithings\ptvxserver\ObjectSerializer;

/**
 * PositionEnRouteToStop Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionEnRouteToStop extends VehiclePosition 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionEnRouteToStop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_location' => '\ithings\ptvxserver\model\Coordinate',
'trip_id' => 'string',
'index_of_next_stop' => '\ithings\ptvxserver\model\Index'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_location' => null,
'trip_id' => null,
'index_of_next_stop' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'current_location' => 'currentLocation',
'trip_id' => 'tripId',
'index_of_next_stop' => 'indexOfNextStop'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_location' => 'setCurrentLocation',
'trip_id' => 'setTripId',
'index_of_next_stop' => 'setIndexOfNextStop'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_location' => 'getCurrentLocation',
'trip_id' => 'getTripId',
'index_of_next_stop' => 'getIndexOfNextStop'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['current_location'] = isset($data['current_location']) ? $data['current_location'] : null;
        $this->container['trip_id'] = isset($data['trip_id']) ? $data['trip_id'] : null;
        $this->container['index_of_next_stop'] = isset($data['index_of_next_stop']) ? $data['index_of_next_stop'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['current_location'] === null) {
            $invalidProperties[] = "'current_location' can't be null";
        }
        if ($this->container['trip_id'] === null) {
            $invalidProperties[] = "'trip_id' can't be null";
        }
        if ($this->container['index_of_next_stop'] === null) {
            $invalidProperties[] = "'index_of_next_stop' can't be null";
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
     * Gets current_location
     *
     * @return \ithings\ptvxserver\model\Coordinate
     */
    public function getCurrentLocation()
    {
        return $this->container['current_location'];
    }

    /**
     * Sets current_location
     *
     * @param \ithings\ptvxserver\model\Coordinate $current_location current_location
     *
     * @return $this
     */
    public function setCurrentLocation($current_location)
    {
        $this->container['current_location'] = $current_location;

        return $this;
    }

    /**
     * Gets trip_id
     *
     * @return string
     */
    public function getTripId()
    {
        return $this->container['trip_id'];
    }

    /**
     * Sets trip_id
     *
     * @param string $trip_id Trip ID of the the next stop.
     *
     * @return $this
     */
    public function setTripId($trip_id)
    {
        $this->container['trip_id'] = $trip_id;

        return $this;
    }

    /**
     * Gets index_of_next_stop
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getIndexOfNextStop()
    {
        return $this->container['index_of_next_stop'];
    }

    /**
     * Sets index_of_next_stop
     *
     * @param \ithings\ptvxserver\model\Index $index_of_next_stop index_of_next_stop
     *
     * @return $this
     */
    public function setIndexOfNextStop($index_of_next_stop)
    {
        $this->container['index_of_next_stop'] = $index_of_next_stop;

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
