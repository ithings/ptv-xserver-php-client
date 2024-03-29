<?php
/**
 * Bounds
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
 * Bounds Class Doc Comment
 *
 * @category Class
 * @description Boundaries are used for defining the minimal boundary rectangle of a geographical object. It contains the minimum and maximum values for x and y dimension. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.geometry.Bounds
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Bounds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bounds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'min_x' => 'double',
'max_x' => 'double',
'min_y' => 'double',
'max_y' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'min_x' => 'double',
'max_x' => 'double',
'min_y' => 'double',
'max_y' => 'double'    ];

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
        'min_x' => 'minX',
'max_x' => 'maxX',
'min_y' => 'minY',
'max_y' => 'maxY'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_x' => 'setMinX',
'max_x' => 'setMaxX',
'min_y' => 'setMinY',
'max_y' => 'setMaxY'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_x' => 'getMinX',
'max_x' => 'getMaxX',
'min_y' => 'getMinY',
'max_y' => 'getMaxY'    ];

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
        $this->container['min_x'] = isset($data['min_x']) ? $data['min_x'] : null;
        $this->container['max_x'] = isset($data['max_x']) ? $data['max_x'] : null;
        $this->container['min_y'] = isset($data['min_y']) ? $data['min_y'] : null;
        $this->container['max_y'] = isset($data['max_y']) ? $data['max_y'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['min_x'] === null) {
            $invalidProperties[] = "'min_x' can't be null";
        }
        if ($this->container['max_x'] === null) {
            $invalidProperties[] = "'max_x' can't be null";
        }
        if ($this->container['min_y'] === null) {
            $invalidProperties[] = "'min_y' can't be null";
        }
        if ($this->container['max_y'] === null) {
            $invalidProperties[] = "'max_y' can't be null";
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
     * Gets min_x
     *
     * @return double
     */
    public function getMinX()
    {
        return $this->container['min_x'];
    }

    /**
     * Sets min_x
     *
     * @param double $min_x Minimum value for x dimension. The numerical value has to be less than or equal to maxX.
     *
     * @return $this
     */
    public function setMinX($min_x)
    {
        $this->container['min_x'] = $min_x;

        return $this;
    }

    /**
     * Gets max_x
     *
     * @return double
     */
    public function getMaxX()
    {
        return $this->container['max_x'];
    }

    /**
     * Sets max_x
     *
     * @param double $max_x Maximum value for x dimension. The numerical value has to be greater than or equal to minX.
     *
     * @return $this
     */
    public function setMaxX($max_x)
    {
        $this->container['max_x'] = $max_x;

        return $this;
    }

    /**
     * Gets min_y
     *
     * @return double
     */
    public function getMinY()
    {
        return $this->container['min_y'];
    }

    /**
     * Sets min_y
     *
     * @param double $min_y Minimum value for y dimension. The numerical value has to be less than or equal to maxY.
     *
     * @return $this
     */
    public function setMinY($min_y)
    {
        $this->container['min_y'] = $min_y;

        return $this;
    }

    /**
     * Gets max_y
     *
     * @return double
     */
    public function getMaxY()
    {
        return $this->container['max_y'];
    }

    /**
     * Sets max_y
     *
     * @param double $max_y Maximum value for y dimension. The numerical value has to be greater than or equal to minY.
     *
     * @return $this
     */
    public function setMaxY($max_y)
    {
        $this->container['max_y'] = $max_y;

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
