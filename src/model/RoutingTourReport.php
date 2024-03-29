<?php
/**
 * RoutingTourReport
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
 * RoutingTourReport Class Doc Comment
 *
 * @category Class
 * @description Represents the summary of the tour which has been calculated.    Please note that the total travel time of the tour is equal to the travel time of the route (see RouteResponse.travelTime). Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xroute.TourReport
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoutingTourReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoutingTourReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'violated' => 'bool',
'start_time' => '\DateTime',
'end_time' => '\DateTime',
'service_time' => '\ithings\ptvxserver\model\Duration',
'driving_time' => '\ithings\ptvxserver\model\Duration',
'waiting_time' => '\ithings\ptvxserver\model\Duration',
'break_time' => '\ithings\ptvxserver\model\Duration',
'rest_time' => '\ithings\ptvxserver\model\Duration'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'violated' => null,
'start_time' => 'date-time',
'end_time' => 'date-time',
'service_time' => null,
'driving_time' => null,
'waiting_time' => null,
'break_time' => null,
'rest_time' => null    ];

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
        'violated' => 'violated',
'start_time' => 'startTime',
'end_time' => 'endTime',
'service_time' => 'serviceTime',
'driving_time' => 'drivingTime',
'waiting_time' => 'waitingTime',
'break_time' => 'breakTime',
'rest_time' => 'restTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'violated' => 'setViolated',
'start_time' => 'setStartTime',
'end_time' => 'setEndTime',
'service_time' => 'setServiceTime',
'driving_time' => 'setDrivingTime',
'waiting_time' => 'setWaitingTime',
'break_time' => 'setBreakTime',
'rest_time' => 'setRestTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'violated' => 'getViolated',
'start_time' => 'getStartTime',
'end_time' => 'getEndTime',
'service_time' => 'getServiceTime',
'driving_time' => 'getDrivingTime',
'waiting_time' => 'getWaitingTime',
'break_time' => 'getBreakTime',
'rest_time' => 'getRestTime'    ];

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
        $this->container['violated'] = isset($data['violated']) ? $data['violated'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['service_time'] = isset($data['service_time']) ? $data['service_time'] : null;
        $this->container['driving_time'] = isset($data['driving_time']) ? $data['driving_time'] : null;
        $this->container['waiting_time'] = isset($data['waiting_time']) ? $data['waiting_time'] : null;
        $this->container['break_time'] = isset($data['break_time']) ? $data['break_time'] : null;
        $this->container['rest_time'] = isset($data['rest_time']) ? $data['rest_time'] : null;
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
     * Gets violated
     *
     * @return bool
     */
    public function getViolated()
    {
        return $this->container['violated'];
    }

    /**
     * Sets violated
     *
     * @param bool $violated If set to true, indicates that this tour contains a tour violation.
     *
     * @return $this
     */
    public function setViolated($violated)
    {
        $this->container['violated'] = $violated;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time The start date/time of the tour.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time The end date/time of the tour.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets service_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getServiceTime()
    {
        return $this->container['service_time'];
    }

    /**
     * Sets service_time
     *
     * @param \ithings\ptvxserver\model\Duration $service_time service_time
     *
     * @return $this
     */
    public function setServiceTime($service_time)
    {
        $this->container['service_time'] = $service_time;

        return $this;
    }

    /**
     * Gets driving_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getDrivingTime()
    {
        return $this->container['driving_time'];
    }

    /**
     * Sets driving_time
     *
     * @param \ithings\ptvxserver\model\Duration $driving_time driving_time
     *
     * @return $this
     */
    public function setDrivingTime($driving_time)
    {
        $this->container['driving_time'] = $driving_time;

        return $this;
    }

    /**
     * Gets waiting_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getWaitingTime()
    {
        return $this->container['waiting_time'];
    }

    /**
     * Sets waiting_time
     *
     * @param \ithings\ptvxserver\model\Duration $waiting_time waiting_time
     *
     * @return $this
     */
    public function setWaitingTime($waiting_time)
    {
        $this->container['waiting_time'] = $waiting_time;

        return $this;
    }

    /**
     * Gets break_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getBreakTime()
    {
        return $this->container['break_time'];
    }

    /**
     * Sets break_time
     *
     * @param \ithings\ptvxserver\model\Duration $break_time break_time
     *
     * @return $this
     */
    public function setBreakTime($break_time)
    {
        $this->container['break_time'] = $break_time;

        return $this;
    }

    /**
     * Gets rest_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getRestTime()
    {
        return $this->container['rest_time'];
    }

    /**
     * Sets rest_time
     *
     * @param \ithings\ptvxserver\model\Duration $rest_time rest_time
     *
     * @return $this
     */
    public function setRestTime($rest_time)
    {
        $this->container['rest_time'] = $rest_time;

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
