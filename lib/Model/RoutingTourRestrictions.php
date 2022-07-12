<?php
/**
 * RoutingTourRestrictions
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
 * RoutingTourRestrictions Class Doc Comment
 *
 * @category Class
 * @description Specifies the all the information to take into account to calculate the tour.    Please note that if tourplanning.MultiDayWorkingHours is selected, the tourplanning.MultiDayWorkingHours.dailyRestPositions field has to be set explicitly to tourplanning.RestPositions.ANYWHERE. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xroute.TourRestrictions
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoutingTourRestrictions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoutingTourRestrictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'maximum_travel_time_per_tour' => '\Swagger\Client\Model\Duration',
'maximum_driving_time_per_tour' => '\Swagger\Client\Model\Duration',
'working_hours' => '\Swagger\Client\Model\WorkingHours',
'work_logbook_summary' => '\Swagger\Client\Model\WorkLogbookSummary'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'maximum_travel_time_per_tour' => null,
'maximum_driving_time_per_tour' => null,
'working_hours' => null,
'work_logbook_summary' => null    ];

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
        'maximum_travel_time_per_tour' => 'maximumTravelTimePerTour',
'maximum_driving_time_per_tour' => 'maximumDrivingTimePerTour',
'working_hours' => 'workingHours',
'work_logbook_summary' => 'workLogbookSummary'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maximum_travel_time_per_tour' => 'setMaximumTravelTimePerTour',
'maximum_driving_time_per_tour' => 'setMaximumDrivingTimePerTour',
'working_hours' => 'setWorkingHours',
'work_logbook_summary' => 'setWorkLogbookSummary'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maximum_travel_time_per_tour' => 'getMaximumTravelTimePerTour',
'maximum_driving_time_per_tour' => 'getMaximumDrivingTimePerTour',
'working_hours' => 'getWorkingHours',
'work_logbook_summary' => 'getWorkLogbookSummary'    ];

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
        $this->container['maximum_travel_time_per_tour'] = isset($data['maximum_travel_time_per_tour']) ? $data['maximum_travel_time_per_tour'] : null;
        $this->container['maximum_driving_time_per_tour'] = isset($data['maximum_driving_time_per_tour']) ? $data['maximum_driving_time_per_tour'] : null;
        $this->container['working_hours'] = isset($data['working_hours']) ? $data['working_hours'] : null;
        $this->container['work_logbook_summary'] = isset($data['work_logbook_summary']) ? $data['work_logbook_summary'] : null;
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
     * Gets maximum_travel_time_per_tour
     *
     * @return \Swagger\Client\Model\Duration
     */
    public function getMaximumTravelTimePerTour()
    {
        return $this->container['maximum_travel_time_per_tour'];
    }

    /**
     * Sets maximum_travel_time_per_tour
     *
     * @param \Swagger\Client\Model\Duration $maximum_travel_time_per_tour maximum_travel_time_per_tour
     *
     * @return $this
     */
    public function setMaximumTravelTimePerTour($maximum_travel_time_per_tour)
    {
        $this->container['maximum_travel_time_per_tour'] = $maximum_travel_time_per_tour;

        return $this;
    }

    /**
     * Gets maximum_driving_time_per_tour
     *
     * @return \Swagger\Client\Model\Duration
     */
    public function getMaximumDrivingTimePerTour()
    {
        return $this->container['maximum_driving_time_per_tour'];
    }

    /**
     * Sets maximum_driving_time_per_tour
     *
     * @param \Swagger\Client\Model\Duration $maximum_driving_time_per_tour maximum_driving_time_per_tour
     *
     * @return $this
     */
    public function setMaximumDrivingTimePerTour($maximum_driving_time_per_tour)
    {
        $this->container['maximum_driving_time_per_tour'] = $maximum_driving_time_per_tour;

        return $this;
    }

    /**
     * Gets working_hours
     *
     * @return \Swagger\Client\Model\WorkingHours
     */
    public function getWorkingHours()
    {
        return $this->container['working_hours'];
    }

    /**
     * Sets working_hours
     *
     * @param \Swagger\Client\Model\WorkingHours $working_hours working_hours
     *
     * @return $this
     */
    public function setWorkingHours($working_hours)
    {
        $this->container['working_hours'] = $working_hours;

        return $this;
    }

    /**
     * Gets work_logbook_summary
     *
     * @return \Swagger\Client\Model\WorkLogbookSummary
     */
    public function getWorkLogbookSummary()
    {
        return $this->container['work_logbook_summary'];
    }

    /**
     * Sets work_logbook_summary
     *
     * @param \Swagger\Client\Model\WorkLogbookSummary $work_logbook_summary work_logbook_summary
     *
     * @return $this
     */
    public function setWorkLogbookSummary($work_logbook_summary)
    {
        $this->container['work_logbook_summary'] = $work_logbook_summary;

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
