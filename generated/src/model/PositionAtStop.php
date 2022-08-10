<?php
/**
 * PositionAtStop
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
 * PositionAtStop Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionAtStop extends VehiclePosition 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionAtStop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_status' => '\ithings\ptvxserver\model\ServiceStatus',
'trip_id' => 'string',
'stop_index' => '\ithings\ptvxserver\model\Index'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_status' => null,
'trip_id' => null,
'stop_index' => null    ];

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
        'service_status' => 'serviceStatus',
'trip_id' => 'tripId',
'stop_index' => 'stopIndex'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_status' => 'setServiceStatus',
'trip_id' => 'setTripId',
'stop_index' => 'setStopIndex'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_status' => 'getServiceStatus',
'trip_id' => 'getTripId',
'stop_index' => 'getStopIndex'    ];

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

        $this->container['service_status'] = isset($data['service_status']) ? $data['service_status'] : null;
        $this->container['trip_id'] = isset($data['trip_id']) ? $data['trip_id'] : null;
        $this->container['stop_index'] = isset($data['stop_index']) ? $data['stop_index'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['service_status'] === null) {
            $invalidProperties[] = "'service_status' can't be null";
        }
        if ($this->container['trip_id'] === null) {
            $invalidProperties[] = "'trip_id' can't be null";
        }
        if ($this->container['stop_index'] === null) {
            $invalidProperties[] = "'stop_index' can't be null";
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
     * Gets service_status
     *
     * @return \ithings\ptvxserver\model\ServiceStatus
     */
    public function getServiceStatus()
    {
        return $this->container['service_status'];
    }

    /**
     * Sets service_status
     *
     * @param \ithings\ptvxserver\model\ServiceStatus $service_status service_status
     *
     * @return $this
     */
    public function setServiceStatus($service_status)
    {
        $this->container['service_status'] = $service_status;

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
     * @param string $trip_id Trip ID of the current stop.
     *
     * @return $this
     */
    public function setTripId($trip_id)
    {
        $this->container['trip_id'] = $trip_id;

        return $this;
    }

    /**
     * Gets stop_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getStopIndex()
    {
        return $this->container['stop_index'];
    }

    /**
     * Sets stop_index
     *
     * @param \ithings\ptvxserver\model\Index $stop_index stop_index
     *
     * @return $this
     */
    public function setStopIndex($stop_index)
    {
        $this->container['stop_index'] = $stop_index;

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
