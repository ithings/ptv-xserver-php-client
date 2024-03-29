<?php
/**
 * FeatureLayerInformation
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
 * FeatureLayerInformation Class Doc Comment
 *
 * @category Class
 * @description The result that lists a description of a single Feature Layer or the exception that was returned querying the Feature Layer ID. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xdata.FeatureLayerInformation
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureLayerInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeatureLayerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feature_layer_description' => '\ithings\ptvxserver\model\FeatureLayerDescription',
'list_exception' => '\ithings\ptvxserver\model\SuppressedXServerException'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feature_layer_description' => null,
'list_exception' => null    ];

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
        'feature_layer_description' => 'featureLayerDescription',
'list_exception' => 'listException'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature_layer_description' => 'setFeatureLayerDescription',
'list_exception' => 'setListException'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature_layer_description' => 'getFeatureLayerDescription',
'list_exception' => 'getListException'    ];

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
        $this->container['feature_layer_description'] = isset($data['feature_layer_description']) ? $data['feature_layer_description'] : null;
        $this->container['list_exception'] = isset($data['list_exception']) ? $data['list_exception'] : null;
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
     * Gets feature_layer_description
     *
     * @return \ithings\ptvxserver\model\FeatureLayerDescription
     */
    public function getFeatureLayerDescription()
    {
        return $this->container['feature_layer_description'];
    }

    /**
     * Sets feature_layer_description
     *
     * @param \ithings\ptvxserver\model\FeatureLayerDescription $feature_layer_description feature_layer_description
     *
     * @return $this
     */
    public function setFeatureLayerDescription($feature_layer_description)
    {
        $this->container['feature_layer_description'] = $feature_layer_description;

        return $this;
    }

    /**
     * Gets list_exception
     *
     * @return \ithings\ptvxserver\model\SuppressedXServerException
     */
    public function getListException()
    {
        return $this->container['list_exception'];
    }

    /**
     * Sets list_exception
     *
     * @param \ithings\ptvxserver\model\SuppressedXServerException $list_exception list_exception
     *
     * @return $this
     */
    public function setListException($list_exception)
    {
        $this->container['list_exception'] = $list_exception;

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
