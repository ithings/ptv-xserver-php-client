<?php
/**
 * WorkLogbookSummary
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
 * WorkLogbookSummary Class Doc Comment
 *
 * @category Class
 * @description The summary of a logbook of a driver (or a mobile worker) with respect to a lastTimeTheDriverWorked. If provided as input, it is taken into account when the mandatory breaks and rests are calculated. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.tourplanning.WorkLogbookSummary
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkLogbookSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkLogbookSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_time_the_driver_worked' => '\DateTime',
'driving_time_regulation_logbook_summary' => '\Swagger\Client\Model\DrivingTimeRegulationLogbookSummary',
'working_time_directive_logbook_summary' => '\Swagger\Client\Model\WorkingTimeDirectiveLogbookSummary'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_time_the_driver_worked' => 'date-time',
'driving_time_regulation_logbook_summary' => null,
'working_time_directive_logbook_summary' => null    ];

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
        'last_time_the_driver_worked' => 'lastTimeTheDriverWorked',
'driving_time_regulation_logbook_summary' => 'drivingTimeRegulationLogbookSummary',
'working_time_directive_logbook_summary' => 'workingTimeDirectiveLogbookSummary'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_time_the_driver_worked' => 'setLastTimeTheDriverWorked',
'driving_time_regulation_logbook_summary' => 'setDrivingTimeRegulationLogbookSummary',
'working_time_directive_logbook_summary' => 'setWorkingTimeDirectiveLogbookSummary'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_time_the_driver_worked' => 'getLastTimeTheDriverWorked',
'driving_time_regulation_logbook_summary' => 'getDrivingTimeRegulationLogbookSummary',
'working_time_directive_logbook_summary' => 'getWorkingTimeDirectiveLogbookSummary'    ];

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
        $this->container['last_time_the_driver_worked'] = isset($data['last_time_the_driver_worked']) ? $data['last_time_the_driver_worked'] : null;
        $this->container['driving_time_regulation_logbook_summary'] = isset($data['driving_time_regulation_logbook_summary']) ? $data['driving_time_regulation_logbook_summary'] : null;
        $this->container['working_time_directive_logbook_summary'] = isset($data['working_time_directive_logbook_summary']) ? $data['working_time_directive_logbook_summary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['last_time_the_driver_worked'] === null) {
            $invalidProperties[] = "'last_time_the_driver_worked' can't be null";
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
     * Gets last_time_the_driver_worked
     *
     * @return \DateTime
     */
    public function getLastTimeTheDriverWorked()
    {
        return $this->container['last_time_the_driver_worked'];
    }

    /**
     * Sets last_time_the_driver_worked
     *
     * @param \DateTime $last_time_the_driver_worked The last time the driver worked (driving or performing service). It is assumed that the time since then may count as break/rest, provided it has the required minimum duration. It is sometimes referred to as \"reference time\".
     *
     * @return $this
     */
    public function setLastTimeTheDriverWorked($last_time_the_driver_worked)
    {
        $this->container['last_time_the_driver_worked'] = $last_time_the_driver_worked;

        return $this;
    }

    /**
     * Gets driving_time_regulation_logbook_summary
     *
     * @return \Swagger\Client\Model\DrivingTimeRegulationLogbookSummary
     */
    public function getDrivingTimeRegulationLogbookSummary()
    {
        return $this->container['driving_time_regulation_logbook_summary'];
    }

    /**
     * Sets driving_time_regulation_logbook_summary
     *
     * @param \Swagger\Client\Model\DrivingTimeRegulationLogbookSummary $driving_time_regulation_logbook_summary driving_time_regulation_logbook_summary
     *
     * @return $this
     */
    public function setDrivingTimeRegulationLogbookSummary($driving_time_regulation_logbook_summary)
    {
        $this->container['driving_time_regulation_logbook_summary'] = $driving_time_regulation_logbook_summary;

        return $this;
    }

    /**
     * Gets working_time_directive_logbook_summary
     *
     * @return \Swagger\Client\Model\WorkingTimeDirectiveLogbookSummary
     */
    public function getWorkingTimeDirectiveLogbookSummary()
    {
        return $this->container['working_time_directive_logbook_summary'];
    }

    /**
     * Sets working_time_directive_logbook_summary
     *
     * @param \Swagger\Client\Model\WorkingTimeDirectiveLogbookSummary $working_time_directive_logbook_summary working_time_directive_logbook_summary
     *
     * @return $this
     */
    public function setWorkingTimeDirectiveLogbookSummary($working_time_directive_logbook_summary)
    {
        $this->container['working_time_directive_logbook_summary'] = $working_time_directive_logbook_summary;

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