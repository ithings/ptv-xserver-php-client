<?php
/**
 * AllowedItemOrientations
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
 * AllowedItemOrientations Class Doc Comment
 *
 * @category Class
 * @description Describes the allowed orientations for items. Depending on how an item is oriented, load will be applied on a different axis of the item if something is stacked on top of it. See ItemOrientation. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xload.AllowedItemOrientations
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllowedItemOrientations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AllowedItemOrientations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original' => 'bool',
'x' => 'bool',
'y' => 'bool',
'z' => 'bool',
'xz' => 'bool',
'yz' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original' => null,
'x' => null,
'y' => null,
'z' => null,
'xz' => null,
'yz' => null    ];

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
        'original' => 'original',
'x' => 'x',
'y' => 'y',
'z' => 'z',
'xz' => 'xz',
'yz' => 'yz'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original' => 'setOriginal',
'x' => 'setX',
'y' => 'setY',
'z' => 'setZ',
'xz' => 'setXz',
'yz' => 'setYz'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original' => 'getOriginal',
'x' => 'getX',
'y' => 'getY',
'z' => 'getZ',
'xz' => 'getXz',
'yz' => 'getYz'    ];

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
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['z'] = isset($data['z']) ? $data['z'] : null;
        $this->container['xz'] = isset($data['xz']) ? $data['xz'] : null;
        $this->container['yz'] = isset($data['yz']) ? $data['yz'] : null;
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
     * Gets original
     *
     * @return bool
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param bool $original Item are is allowed to be packed unrotated. Dimensions stay (x,y,z).
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets x
     *
     * @return bool
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param bool $x Items are allowed to be packed rotated widthwise (around x-axis) by 90 degrees. Dimensions would be (x,z,y).
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return bool
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param bool $y Items are allowed to be packed rotated heightwise (around y-axis) by 90 degrees. Dimensions would be (z,y,x).
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets z
     *
     * @return bool
     */
    public function getZ()
    {
        return $this->container['z'];
    }

    /**
     * Sets z
     *
     * @param bool $z Items are allowed to be packed rotated lengthwise (around z-axis) by 90 degrees. Dimensions would be (y,x,z).
     *
     * @return $this
     */
    public function setZ($z)
    {
        $this->container['z'] = $z;

        return $this;
    }

    /**
     * Gets xz
     *
     * @return bool
     */
    public function getXz()
    {
        return $this->container['xz'];
    }

    /**
     * Sets xz
     *
     * @param bool $xz Items are allowed to be packed rotated width- then heightwise (around x- then z-axis) by 90 degrees. Dimensions would be (z,x,y).
     *
     * @return $this
     */
    public function setXz($xz)
    {
        $this->container['xz'] = $xz;

        return $this;
    }

    /**
     * Gets yz
     *
     * @return bool
     */
    public function getYz()
    {
        return $this->container['yz'];
    }

    /**
     * Sets yz
     *
     * @param bool $yz Items are allowed to be packed rotated length- then heightwise (around its y- then z-axis) by 90 degrees. Dimensions would be (y,z,x).
     *
     * @return $this
     */
    public function setYz($yz)
    {
        $this->container['yz'] = $yz;

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
