<?php
/**
 * DrivingTimeRegulationOptionsUSFMCSA3952020
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
 * DrivingTimeRegulationOptionsUSFMCSA3952020 Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DrivingTimeRegulationOptionsUSFMCSA3952020 extends DrivingTimeRegulationOptions 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DrivingTimeRegulationOptions_US_FMCSA_395_2020';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'thirty_four_hour_restart_rule' => 'bool',
'weekly_on_duty_hours_limit' => '\ithings\ptvxserver\model\WeeklyOnDutyHoursLimitUSFMCSA3952020',
'twenty_four_hour_period_starts_at' => '\ithings\ptvxserver\model\TimeOfDay',
'thirty_minute_break_rule' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'thirty_four_hour_restart_rule' => null,
'weekly_on_duty_hours_limit' => null,
'twenty_four_hour_period_starts_at' => null,
'thirty_minute_break_rule' => null    ];

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
        'thirty_four_hour_restart_rule' => 'thirtyFourHourRestartRule',
'weekly_on_duty_hours_limit' => 'weeklyOnDutyHoursLimit',
'twenty_four_hour_period_starts_at' => 'twentyFourHourPeriodStartsAt',
'thirty_minute_break_rule' => 'thirtyMinuteBreakRule'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'thirty_four_hour_restart_rule' => 'setThirtyFourHourRestartRule',
'weekly_on_duty_hours_limit' => 'setWeeklyOnDutyHoursLimit',
'twenty_four_hour_period_starts_at' => 'setTwentyFourHourPeriodStartsAt',
'thirty_minute_break_rule' => 'setThirtyMinuteBreakRule'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'thirty_four_hour_restart_rule' => 'getThirtyFourHourRestartRule',
'weekly_on_duty_hours_limit' => 'getWeeklyOnDutyHoursLimit',
'twenty_four_hour_period_starts_at' => 'getTwentyFourHourPeriodStartsAt',
'thirty_minute_break_rule' => 'getThirtyMinuteBreakRule'    ];

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

        $this->container['thirty_four_hour_restart_rule'] = isset($data['thirty_four_hour_restart_rule']) ? $data['thirty_four_hour_restart_rule'] : null;
        $this->container['weekly_on_duty_hours_limit'] = isset($data['weekly_on_duty_hours_limit']) ? $data['weekly_on_duty_hours_limit'] : null;
        $this->container['twenty_four_hour_period_starts_at'] = isset($data['twenty_four_hour_period_starts_at']) ? $data['twenty_four_hour_period_starts_at'] : null;
        $this->container['thirty_minute_break_rule'] = isset($data['thirty_minute_break_rule']) ? $data['thirty_minute_break_rule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets thirty_four_hour_restart_rule
     *
     * @return bool
     */
    public function getThirtyFourHourRestartRule()
    {
        return $this->container['thirty_four_hour_restart_rule'];
    }

    /**
     * Sets thirty_four_hour_restart_rule
     *
     * @param bool $thirty_four_hour_restart_rule Tells if the 34-hour restart can be applied after the weekly on duty hours limit has been reached. Basically, if 34 or more consecutive hours off duty are taken, it restarts the weekly on duty hours counting to zero.
     *
     * @return $this
     */
    public function setThirtyFourHourRestartRule($thirty_four_hour_restart_rule)
    {
        $this->container['thirty_four_hour_restart_rule'] = $thirty_four_hour_restart_rule;

        return $this;
    }

    /**
     * Gets weekly_on_duty_hours_limit
     *
     * @return \ithings\ptvxserver\model\WeeklyOnDutyHoursLimitUSFMCSA3952020
     */
    public function getWeeklyOnDutyHoursLimit()
    {
        return $this->container['weekly_on_duty_hours_limit'];
    }

    /**
     * Sets weekly_on_duty_hours_limit
     *
     * @param \ithings\ptvxserver\model\WeeklyOnDutyHoursLimitUSFMCSA3952020 $weekly_on_duty_hours_limit weekly_on_duty_hours_limit
     *
     * @return $this
     */
    public function setWeeklyOnDutyHoursLimit($weekly_on_duty_hours_limit)
    {
        $this->container['weekly_on_duty_hours_limit'] = $weekly_on_duty_hours_limit;

        return $this;
    }

    /**
     * Gets twenty_four_hour_period_starts_at
     *
     * @return \ithings\ptvxserver\model\TimeOfDay
     */
    public function getTwentyFourHourPeriodStartsAt()
    {
        return $this->container['twenty_four_hour_period_starts_at'];
    }

    /**
     * Sets twenty_four_hour_period_starts_at
     *
     * @param \ithings\ptvxserver\model\TimeOfDay $twenty_four_hour_period_starts_at twenty_four_hour_period_starts_at
     *
     * @return $this
     */
    public function setTwentyFourHourPeriodStartsAt($twenty_four_hour_period_starts_at)
    {
        $this->container['twenty_four_hour_period_starts_at'] = $twenty_four_hour_period_starts_at;

        return $this;
    }

    /**
     * Gets thirty_minute_break_rule
     *
     * @return bool
     */
    public function getThirtyMinuteBreakRule()
    {
        return $this->container['thirty_minute_break_rule'];
    }

    /**
     * Sets thirty_minute_break_rule
     *
     * @param bool $thirty_minute_break_rule Tells if the 30-minute break provision is enforced after 8 cumulative hours of driving time (e.g. it is not required to be enforced for short haul operations).
     *
     * @return $this
     */
    public function setThirtyMinuteBreakRule($thirty_minute_break_rule)
    {
        $this->container['thirty_minute_break_rule'] = $thirty_minute_break_rule;

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