<?php
/**
 * PackBinsOptions
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
 * PackBinsOptions Class Doc Comment
 *
 * @category Class
 * @description Allows customization of packBins operations. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xload.PackBinsOptions
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackBinsOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackBinsOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'focus' => '\Swagger\Client\Model\PackBinsFocus',
'unloading_sequence' => '\Swagger\Client\Model\UnloadingStop[]',
'stacking_options' => '\Swagger\Client\Model\StackingOptions'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'focus' => null,
'unloading_sequence' => null,
'stacking_options' => null    ];

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
        'focus' => 'focus',
'unloading_sequence' => 'unloadingSequence',
'stacking_options' => 'stackingOptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'focus' => 'setFocus',
'unloading_sequence' => 'setUnloadingSequence',
'stacking_options' => 'setStackingOptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'focus' => 'getFocus',
'unloading_sequence' => 'getUnloadingSequence',
'stacking_options' => 'getStackingOptions'    ];

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
        $this->container['focus'] = isset($data['focus']) ? $data['focus'] : null;
        $this->container['unloading_sequence'] = isset($data['unloading_sequence']) ? $data['unloading_sequence'] : null;
        $this->container['stacking_options'] = isset($data['stacking_options']) ? $data['stacking_options'] : null;
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
     * Gets focus
     *
     * @return \Swagger\Client\Model\PackBinsFocus
     */
    public function getFocus()
    {
        return $this->container['focus'];
    }

    /**
     * Sets focus
     *
     * @param \Swagger\Client\Model\PackBinsFocus $focus focus
     *
     * @return $this
     */
    public function setFocus($focus)
    {
        $this->container['focus'] = $focus;

        return $this;
    }

    /**
     * Gets unloading_sequence
     *
     * @return \Swagger\Client\Model\UnloadingStop[]
     */
    public function getUnloadingSequence()
    {
        return $this->container['unloading_sequence'];
    }

    /**
     * Sets unloading_sequence
     *
     * @param \Swagger\Client\Model\UnloadingStop[] $unloading_sequence unloading_sequence
     *
     * @return $this
     */
    public function setUnloadingSequence($unloading_sequence)
    {
        $this->container['unloading_sequence'] = $unloading_sequence;

        return $this;
    }

    /**
     * Gets stacking_options
     *
     * @return \Swagger\Client\Model\StackingOptions
     */
    public function getStackingOptions()
    {
        return $this->container['stacking_options'];
    }

    /**
     * Sets stacking_options
     *
     * @param \Swagger\Client\Model\StackingOptions $stacking_options stacking_options
     *
     * @return $this
     */
    public function setStackingOptions($stacking_options)
    {
        $this->container['stacking_options'] = $stacking_options;

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
