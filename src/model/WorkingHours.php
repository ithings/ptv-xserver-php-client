<?php
/**
 * WorkingHours
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
 * WorkingHours Class Doc Comment
 *
 * @category Class
 * @description Defines which rules regarding drivers&#x27; working hours need to be complied with. See Working Hours. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.tourplanning.WorkingHours
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkingHours implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = '$type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkingHours';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'driving_time_regulation' => '\ithings\ptvxserver\model\DrivingTimeRegulation',
'working_time_directive' => '\ithings\ptvxserver\model\WorkingTimeDirective',
'driving_time_regulation_options' => '\ithings\ptvxserver\model\DrivingTimeRegulationOptions',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'driving_time_regulation' => null,
'working_time_directive' => null,
'driving_time_regulation_options' => null,
'type' => null    ];

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
        'driving_time_regulation' => 'drivingTimeRegulation',
'working_time_directive' => 'workingTimeDirective',
'driving_time_regulation_options' => 'drivingTimeRegulationOptions',
'type' => '$type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'driving_time_regulation' => 'setDrivingTimeRegulation',
'working_time_directive' => 'setWorkingTimeDirective',
'driving_time_regulation_options' => 'setDrivingTimeRegulationOptions',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'driving_time_regulation' => 'getDrivingTimeRegulation',
'working_time_directive' => 'getWorkingTimeDirective',
'driving_time_regulation_options' => 'getDrivingTimeRegulationOptions',
'type' => 'getType'    ];

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
        $this->container['driving_time_regulation'] = isset($data['driving_time_regulation']) ? $data['driving_time_regulation'] : null;
        $this->container['working_time_directive'] = isset($data['working_time_directive']) ? $data['working_time_directive'] : null;
        $this->container['driving_time_regulation_options'] = isset($data['driving_time_regulation_options']) ? $data['driving_time_regulation_options'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('$type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets driving_time_regulation
     *
     * @return \ithings\ptvxserver\model\DrivingTimeRegulation
     */
    public function getDrivingTimeRegulation()
    {
        return $this->container['driving_time_regulation'];
    }

    /**
     * Sets driving_time_regulation
     *
     * @param \ithings\ptvxserver\model\DrivingTimeRegulation $driving_time_regulation driving_time_regulation
     *
     * @return $this
     */
    public function setDrivingTimeRegulation($driving_time_regulation)
    {
        $this->container['driving_time_regulation'] = $driving_time_regulation;

        return $this;
    }

    /**
     * Gets working_time_directive
     *
     * @return \ithings\ptvxserver\model\WorkingTimeDirective
     */
    public function getWorkingTimeDirective()
    {
        return $this->container['working_time_directive'];
    }

    /**
     * Sets working_time_directive
     *
     * @param \ithings\ptvxserver\model\WorkingTimeDirective $working_time_directive working_time_directive
     *
     * @return $this
     */
    public function setWorkingTimeDirective($working_time_directive)
    {
        $this->container['working_time_directive'] = $working_time_directive;

        return $this;
    }

    /**
     * Gets driving_time_regulation_options
     *
     * @return \ithings\ptvxserver\model\DrivingTimeRegulationOptions
     */
    public function getDrivingTimeRegulationOptions()
    {
        return $this->container['driving_time_regulation_options'];
    }

    /**
     * Sets driving_time_regulation_options
     *
     * @param \ithings\ptvxserver\model\DrivingTimeRegulationOptions $driving_time_regulation_options driving_time_regulation_options
     *
     * @return $this
     */
    public function setDrivingTimeRegulationOptions($driving_time_regulation_options)
    {
        $this->container['driving_time_regulation_options'] = $driving_time_regulation_options;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
