<?php
/**
 * VisitDay
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
 * VisitDay Class Doc Comment
 *
 * @category Class
 * @description Represents a visit day of a VisitWeek. If determineShortestVisitSequencePerDay is true, the sequence of visits is optimal. Otherwise, visits are sorted by visit day but the sequence of visits within a visit day has no special meaning. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xcluster.VisitDay
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisitDay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisitDay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visit_date' => '\DateTime',
'start_index' => '\ithings\ptvxserver\model\Index',
'end_index' => '\ithings\ptvxserver\model\Index',
'travel_time' => '\ithings\ptvxserver\model\Duration',
'service_time' => '\ithings\ptvxserver\model\Duration',
'travel_time_after_last_visit' => '\ithings\ptvxserver\model\Duration',
'overnight_stay' => 'bool',
'hotel_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'visit_date' => 'date',
'start_index' => null,
'end_index' => null,
'travel_time' => null,
'service_time' => null,
'travel_time_after_last_visit' => null,
'overnight_stay' => null,
'hotel_id' => null    ];

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
        'visit_date' => 'visitDate',
'start_index' => 'startIndex',
'end_index' => 'endIndex',
'travel_time' => 'travelTime',
'service_time' => 'serviceTime',
'travel_time_after_last_visit' => 'travelTimeAfterLastVisit',
'overnight_stay' => 'overnightStay',
'hotel_id' => 'hotelId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visit_date' => 'setVisitDate',
'start_index' => 'setStartIndex',
'end_index' => 'setEndIndex',
'travel_time' => 'setTravelTime',
'service_time' => 'setServiceTime',
'travel_time_after_last_visit' => 'setTravelTimeAfterLastVisit',
'overnight_stay' => 'setOvernightStay',
'hotel_id' => 'setHotelId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visit_date' => 'getVisitDate',
'start_index' => 'getStartIndex',
'end_index' => 'getEndIndex',
'travel_time' => 'getTravelTime',
'service_time' => 'getServiceTime',
'travel_time_after_last_visit' => 'getTravelTimeAfterLastVisit',
'overnight_stay' => 'getOvernightStay',
'hotel_id' => 'getHotelId'    ];

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
        $this->container['visit_date'] = isset($data['visit_date']) ? $data['visit_date'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
        $this->container['end_index'] = isset($data['end_index']) ? $data['end_index'] : null;
        $this->container['travel_time'] = isset($data['travel_time']) ? $data['travel_time'] : null;
        $this->container['service_time'] = isset($data['service_time']) ? $data['service_time'] : null;
        $this->container['travel_time_after_last_visit'] = isset($data['travel_time_after_last_visit']) ? $data['travel_time_after_last_visit'] : null;
        $this->container['overnight_stay'] = isset($data['overnight_stay']) ? $data['overnight_stay'] : null;
        $this->container['hotel_id'] = isset($data['hotel_id']) ? $data['hotel_id'] : null;
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
     * Gets visit_date
     *
     * @return \DateTime
     */
    public function getVisitDate()
    {
        return $this->container['visit_date'];
    }

    /**
     * Sets visit_date
     *
     * @param \DateTime $visit_date Date of the day
     *
     * @return $this
     */
    public function setVisitDate($visit_date)
    {
        $this->container['visit_date'] = $visit_date;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param \ithings\ptvxserver\model\Index $start_index start_index
     *
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets end_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getEndIndex()
    {
        return $this->container['end_index'];
    }

    /**
     * Sets end_index
     *
     * @param \ithings\ptvxserver\model\Index $end_index end_index
     *
     * @return $this
     */
    public function setEndIndex($end_index)
    {
        $this->container['end_index'] = $end_index;

        return $this;
    }

    /**
     * Gets travel_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getTravelTime()
    {
        return $this->container['travel_time'];
    }

    /**
     * Sets travel_time
     *
     * @param \ithings\ptvxserver\model\Duration $travel_time travel_time
     *
     * @return $this
     */
    public function setTravelTime($travel_time)
    {
        $this->container['travel_time'] = $travel_time;

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
     * Gets travel_time_after_last_visit
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getTravelTimeAfterLastVisit()
    {
        return $this->container['travel_time_after_last_visit'];
    }

    /**
     * Sets travel_time_after_last_visit
     *
     * @param \ithings\ptvxserver\model\Duration $travel_time_after_last_visit travel_time_after_last_visit
     *
     * @return $this
     */
    public function setTravelTimeAfterLastVisit($travel_time_after_last_visit)
    {
        $this->container['travel_time_after_last_visit'] = $travel_time_after_last_visit;

        return $this;
    }

    /**
     * Gets overnight_stay
     *
     * @return bool
     */
    public function getOvernightStay()
    {
        return $this->container['overnight_stay'];
    }

    /**
     * Sets overnight_stay
     *
     * @param bool $overnight_stay True if an overnight stay occured on this day. The overnight location always matches the location of the last visit of the day.
     *
     * @return $this
     */
    public function setOvernightStay($overnight_stay)
    {
        $this->container['overnight_stay'] = $overnight_stay;

        return $this;
    }

    /**
     * Gets hotel_id
     *
     * @return string
     */
    public function getHotelId()
    {
        return $this->container['hotel_id'];
    }

    /**
     * Sets hotel_id
     *
     * @param string $hotel_id Set only when overnightStayOptions and workLoadOptions are active. If hotels are given, it is one of the hotel-ids. If hotels are not given, it is one of the ids of orders.
     *
     * @return $this
     */
    public function setHotelId($hotel_id)
    {
        $this->container['hotel_id'] = $hotel_id;

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
