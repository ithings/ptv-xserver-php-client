<?php
/**
 * Weight
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
 * Weight Class Doc Comment
 *
 * @category Class
 * @description Defines the weight parameters of the vehicle. The actual weight of the vehicle is the sum of the empty weight and the load weight. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.vehicleprofile.Weight
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Weight implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Weight';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'empty_weight' => '\ithings\ptvxserver\model\Kilograms',
'load_weight' => '\ithings\ptvxserver\model\Kilograms',
'total_permitted_weight' => '\ithings\ptvxserver\model\Kilograms'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'empty_weight' => null,
'load_weight' => null,
'total_permitted_weight' => null    ];

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
        'empty_weight' => 'emptyWeight',
'load_weight' => 'loadWeight',
'total_permitted_weight' => 'totalPermittedWeight'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'empty_weight' => 'setEmptyWeight',
'load_weight' => 'setLoadWeight',
'total_permitted_weight' => 'setTotalPermittedWeight'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'empty_weight' => 'getEmptyWeight',
'load_weight' => 'getLoadWeight',
'total_permitted_weight' => 'getTotalPermittedWeight'    ];

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
        $this->container['empty_weight'] = isset($data['empty_weight']) ? $data['empty_weight'] : null;
        $this->container['load_weight'] = isset($data['load_weight']) ? $data['load_weight'] : null;
        $this->container['total_permitted_weight'] = isset($data['total_permitted_weight']) ? $data['total_permitted_weight'] : null;
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
     * Gets empty_weight
     *
     * @return \ithings\ptvxserver\model\Kilograms
     */
    public function getEmptyWeight()
    {
        return $this->container['empty_weight'];
    }

    /**
     * Sets empty_weight
     *
     * @param \ithings\ptvxserver\model\Kilograms $empty_weight empty_weight
     *
     * @return $this
     */
    public function setEmptyWeight($empty_weight)
    {
        $this->container['empty_weight'] = $empty_weight;

        return $this;
    }

    /**
     * Gets load_weight
     *
     * @return \ithings\ptvxserver\model\Kilograms
     */
    public function getLoadWeight()
    {
        return $this->container['load_weight'];
    }

    /**
     * Sets load_weight
     *
     * @param \ithings\ptvxserver\model\Kilograms $load_weight load_weight
     *
     * @return $this
     */
    public function setLoadWeight($load_weight)
    {
        $this->container['load_weight'] = $load_weight;

        return $this;
    }

    /**
     * Gets total_permitted_weight
     *
     * @return \ithings\ptvxserver\model\Kilograms
     */
    public function getTotalPermittedWeight()
    {
        return $this->container['total_permitted_weight'];
    }

    /**
     * Sets total_permitted_weight
     *
     * @param \ithings\ptvxserver\model\Kilograms $total_permitted_weight total_permitted_weight
     *
     * @return $this
     */
    public function setTotalPermittedWeight($total_permitted_weight)
    {
        $this->container['total_permitted_weight'] = $total_permitted_weight;

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
