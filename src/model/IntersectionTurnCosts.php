<?php
/**
 * IntersectionTurnCosts
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
 * IntersectionTurnCosts Class Doc Comment
 *
 * @category Class
 * @description Defines the cost of every turn for all kinds of intersection with a turn strategy. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.routingprofile.IntersectionTurnCosts
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntersectionTurnCosts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntersectionTurnCosts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'turn_strategy' => '\ithings\ptvxserver\model\TurnStrategy',
'custom_turn_strategy' => '\ithings\ptvxserver\model\EncodedContent'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'turn_strategy' => null,
'custom_turn_strategy' => null    ];

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
        'turn_strategy' => 'turnStrategy',
'custom_turn_strategy' => 'customTurnStrategy'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'turn_strategy' => 'setTurnStrategy',
'custom_turn_strategy' => 'setCustomTurnStrategy'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'turn_strategy' => 'getTurnStrategy',
'custom_turn_strategy' => 'getCustomTurnStrategy'    ];

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
        $this->container['turn_strategy'] = isset($data['turn_strategy']) ? $data['turn_strategy'] : null;
        $this->container['custom_turn_strategy'] = isset($data['custom_turn_strategy']) ? $data['custom_turn_strategy'] : null;
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
     * Gets turn_strategy
     *
     * @return \ithings\ptvxserver\model\TurnStrategy
     */
    public function getTurnStrategy()
    {
        return $this->container['turn_strategy'];
    }

    /**
     * Sets turn_strategy
     *
     * @param \ithings\ptvxserver\model\TurnStrategy $turn_strategy turn_strategy
     *
     * @return $this
     */
    public function setTurnStrategy($turn_strategy)
    {
        $this->container['turn_strategy'] = $turn_strategy;

        return $this;
    }

    /**
     * Gets custom_turn_strategy
     *
     * @return \ithings\ptvxserver\model\EncodedContent
     */
    public function getCustomTurnStrategy()
    {
        return $this->container['custom_turn_strategy'];
    }

    /**
     * Sets custom_turn_strategy
     *
     * @param \ithings\ptvxserver\model\EncodedContent $custom_turn_strategy custom_turn_strategy
     *
     * @return $this
     */
    public function setCustomTurnStrategy($custom_turn_strategy)
    {
        $this->container['custom_turn_strategy'] = $custom_turn_strategy;

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
