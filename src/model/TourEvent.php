<?php
/**
 * TourEvent
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
 * TourEvent Class Doc Comment
 *
 * @category Class
 * @description Different kinds of events that can happen during execution of a tour. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.TourEvent
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TourEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TourEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_time' => '\DateTime',
'trip_id' => 'string',
'location_id' => 'string',
'order_id' => 'string',
'event_types' => '\ithings\ptvxserver\model\TourEventType[]',
'tour_violations' => '\ithings\ptvxserver\model\TourViolation[]',
'duration' => '\ithings\ptvxserver\model\Duration'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_time' => 'date-time',
'trip_id' => null,
'location_id' => null,
'order_id' => null,
'event_types' => null,
'tour_violations' => null,
'duration' => null    ];

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
        'start_time' => 'startTime',
'trip_id' => 'tripId',
'location_id' => 'locationId',
'order_id' => 'orderId',
'event_types' => 'eventTypes',
'tour_violations' => 'tourViolations',
'duration' => 'duration'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_time' => 'setStartTime',
'trip_id' => 'setTripId',
'location_id' => 'setLocationId',
'order_id' => 'setOrderId',
'event_types' => 'setEventTypes',
'tour_violations' => 'setTourViolations',
'duration' => 'setDuration'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_time' => 'getStartTime',
'trip_id' => 'getTripId',
'location_id' => 'getLocationId',
'order_id' => 'getOrderId',
'event_types' => 'getEventTypes',
'tour_violations' => 'getTourViolations',
'duration' => 'getDuration'    ];

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
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['trip_id'] = isset($data['trip_id']) ? $data['trip_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['event_types'] = isset($data['event_types']) ? $data['event_types'] : null;
        $this->container['tour_violations'] = isset($data['tour_violations']) ? $data['tour_violations'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
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
     * @param \DateTime $start_time Start time of the event. The time zone is that of the planning horizon (if a planning horizon is defined) or that of a given location.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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
     * @param string $trip_id ID of the trip this event is referring to, for example for a TRIP\\_START event. Not set for events that do not belong to a specific trip such as DRIVING events between depot sites of adjacent trips.
     *
     * @return $this
     */
    public function setTripId($trip_id)
    {
        $this->container['trip_id'] = $trip_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id ID of the location where the vehicle is stopped during this event. Not set for events that do not belong to a specific site such as DRIVING events or BREAK events that occur en route between two stops.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id ID of the order that is currently carried if the event is a SERVICE event. Not set for other event types.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets event_types
     *
     * @return \ithings\ptvxserver\model\TourEventType[]
     */
    public function getEventTypes()
    {
        return $this->container['event_types'];
    }

    /**
     * Sets event_types
     *
     * @param \ithings\ptvxserver\model\TourEventType[] $event_types event_types
     *
     * @return $this
     */
    public function setEventTypes($event_types)
    {
        $this->container['event_types'] = $event_types;

        return $this;
    }

    /**
     * Gets tour_violations
     *
     * @return \ithings\ptvxserver\model\TourViolation[]
     */
    public function getTourViolations()
    {
        return $this->container['tour_violations'];
    }

    /**
     * Sets tour_violations
     *
     * @param \ithings\ptvxserver\model\TourViolation[] $tour_violations tour_violations
     *
     * @return $this
     */
    public function setTourViolations($tour_violations)
    {
        $this->container['tour_violations'] = $tour_violations;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param \ithings\ptvxserver\model\Duration $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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