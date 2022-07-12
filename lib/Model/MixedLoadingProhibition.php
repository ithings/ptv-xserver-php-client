<?php
/**
 * MixedLoadingProhibition
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
 * MixedLoadingProhibition Class Doc Comment
 *
 * @category Class
 * @description There may be some orders that shall not be mixed with some other orders on one trip. For instance, it may be prohibited to load certain dangerous goods together on the same trip, such as flammable solids on the one hand and explosive substances on the other hand. A mixed loading prohibition is a pair of two conflicting categories that prohibits orders of these categories to be mixed on the same trip. The category can be specified for every order. For a vehicle, there is a flag that lets the vehicle ignore this restriction. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.MixedLoadingProhibition
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MixedLoadingProhibition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MixedLoadingProhibition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conflicting_category1' => 'string',
'conflicting_category2' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conflicting_category1' => null,
'conflicting_category2' => null    ];

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
        'conflicting_category1' => 'conflictingCategory1',
'conflicting_category2' => 'conflictingCategory2'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conflicting_category1' => 'setConflictingCategory1',
'conflicting_category2' => 'setConflictingCategory2'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conflicting_category1' => 'getConflictingCategory1',
'conflicting_category2' => 'getConflictingCategory2'    ];

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
        $this->container['conflicting_category1'] = isset($data['conflicting_category1']) ? $data['conflicting_category1'] : null;
        $this->container['conflicting_category2'] = isset($data['conflicting_category2']) ? $data['conflicting_category2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['conflicting_category1'] === null) {
            $invalidProperties[] = "'conflicting_category1' can't be null";
        }
        if ($this->container['conflicting_category2'] === null) {
            $invalidProperties[] = "'conflicting_category2' can't be null";
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
     * Gets conflicting_category1
     *
     * @return string
     */
    public function getConflictingCategory1()
    {
        return $this->container['conflicting_category1'];
    }

    /**
     * Sets conflicting_category1
     *
     * @param string $conflicting_category1 An order of this category is not allowed to be on the same trip as an order of the other category. The category can be any string but it must not be empty and not the same as the other conflicting category.
     *
     * @return $this
     */
    public function setConflictingCategory1($conflicting_category1)
    {
        $this->container['conflicting_category1'] = $conflicting_category1;

        return $this;
    }

    /**
     * Gets conflicting_category2
     *
     * @return string
     */
    public function getConflictingCategory2()
    {
        return $this->container['conflicting_category2'];
    }

    /**
     * Sets conflicting_category2
     *
     * @param string $conflicting_category2 An order of this category is not allowed to be on the same trip as an order of the other category. The category can be any string but it must not be empty and not the same as the other conflicting category.
     *
     * @return $this
     */
    public function setConflictingCategory2($conflicting_category2)
    {
        $this->container['conflicting_category2'] = $conflicting_category2;

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
