<?php
/**
 * RenderingStyle
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
 * RenderingStyle Class Doc Comment
 *
 * @category Class
 * @description Defines the style for a class of objects of a Feature Layer theme. The class of objects is defined by specifying displayClass, ranges, timeRestriction, and roadTypes. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.renderingprofile.RenderingStyle
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RenderingStyle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RenderingStyle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ranges' => '\Swagger\Client\Model\Range[]',
'road_types' => '\Swagger\Client\Model\RoadType[]',
'geometries' => '\Swagger\Client\Model\GeometryStyle[]',
'icons' => '\Swagger\Client\Model\IconStyle[]',
'display_class' => 'string',
'time_restriction' => '\Swagger\Client\Model\TimeRestriction'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ranges' => null,
'road_types' => null,
'geometries' => null,
'icons' => null,
'display_class' => null,
'time_restriction' => null    ];

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
        'ranges' => 'ranges',
'road_types' => 'roadTypes',
'geometries' => 'geometries',
'icons' => 'icons',
'display_class' => 'displayClass',
'time_restriction' => 'timeRestriction'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ranges' => 'setRanges',
'road_types' => 'setRoadTypes',
'geometries' => 'setGeometries',
'icons' => 'setIcons',
'display_class' => 'setDisplayClass',
'time_restriction' => 'setTimeRestriction'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ranges' => 'getRanges',
'road_types' => 'getRoadTypes',
'geometries' => 'getGeometries',
'icons' => 'getIcons',
'display_class' => 'getDisplayClass',
'time_restriction' => 'getTimeRestriction'    ];

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
        $this->container['ranges'] = isset($data['ranges']) ? $data['ranges'] : null;
        $this->container['road_types'] = isset($data['road_types']) ? $data['road_types'] : null;
        $this->container['geometries'] = isset($data['geometries']) ? $data['geometries'] : null;
        $this->container['icons'] = isset($data['icons']) ? $data['icons'] : null;
        $this->container['display_class'] = isset($data['display_class']) ? $data['display_class'] : null;
        $this->container['time_restriction'] = isset($data['time_restriction']) ? $data['time_restriction'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['display_class'] === null) {
            $invalidProperties[] = "'display_class' can't be null";
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
     * Gets ranges
     *
     * @return \Swagger\Client\Model\Range[]
     */
    public function getRanges()
    {
        return $this->container['ranges'];
    }

    /**
     * Sets ranges
     *
     * @param \Swagger\Client\Model\Range[] $ranges ranges
     *
     * @return $this
     */
    public function setRanges($ranges)
    {
        $this->container['ranges'] = $ranges;

        return $this;
    }

    /**
     * Gets road_types
     *
     * @return \Swagger\Client\Model\RoadType[]
     */
    public function getRoadTypes()
    {
        return $this->container['road_types'];
    }

    /**
     * Sets road_types
     *
     * @param \Swagger\Client\Model\RoadType[] $road_types road_types
     *
     * @return $this
     */
    public function setRoadTypes($road_types)
    {
        $this->container['road_types'] = $road_types;

        return $this;
    }

    /**
     * Gets geometries
     *
     * @return \Swagger\Client\Model\GeometryStyle[]
     */
    public function getGeometries()
    {
        return $this->container['geometries'];
    }

    /**
     * Sets geometries
     *
     * @param \Swagger\Client\Model\GeometryStyle[] $geometries geometries
     *
     * @return $this
     */
    public function setGeometries($geometries)
    {
        $this->container['geometries'] = $geometries;

        return $this;
    }

    /**
     * Gets icons
     *
     * @return \Swagger\Client\Model\IconStyle[]
     */
    public function getIcons()
    {
        return $this->container['icons'];
    }

    /**
     * Sets icons
     *
     * @param \Swagger\Client\Model\IconStyle[] $icons icons
     *
     * @return $this
     */
    public function setIcons($icons)
    {
        $this->container['icons'] = $icons;

        return $this;
    }

    /**
     * Gets display_class
     *
     * @return string
     */
    public function getDisplayClass()
    {
        return $this->container['display_class'];
    }

    /**
     * Sets display_class
     *
     * @param string $display_class The display class of the corresponding Feature Layer theme for which this style shall apply. The list of available display classes can be found in the documentation of the Feature Layer theme. Use '\\*' to specify the fallback style which is used if there is no style defined for a display class.
     *
     * @return $this
     */
    public function setDisplayClass($display_class)
    {
        $this->container['display_class'] = $display_class;

        return $this;
    }

    /**
     * Gets time_restriction
     *
     * @return \Swagger\Client\Model\TimeRestriction
     */
    public function getTimeRestriction()
    {
        return $this->container['time_restriction'];
    }

    /**
     * Sets time_restriction
     *
     * @param \Swagger\Client\Model\TimeRestriction $time_restriction time_restriction
     *
     * @return $this
     */
    public function setTimeRestriction($time_restriction)
    {
        $this->container['time_restriction'] = $time_restriction;

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
