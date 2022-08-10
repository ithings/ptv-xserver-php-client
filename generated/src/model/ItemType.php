<?php
/**
 * ItemType
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
 * ItemType Class Doc Comment
 *
 * @category Class
 * @description Describes a cuboid item which is to be packed into a bin. If there are many identical items that do not have to be differentiated by individual ItemType.id you should use the ItemType.numberOfItems field. This provides better performance and packing than specifying each item on its own when this is not needed. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xload.ItemType
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'dimensions' => '\ithings\ptvxserver\model\BoxDimensions',
'weight' => '\ithings\ptvxserver\model\Kilograms',
'maximum_surface_loads' => '\ithings\ptvxserver\model\ItemSurfaceLoads',
'allowed_orientations' => '\ithings\ptvxserver\model\AllowedItemOrientations',
'number_of_items' => '\ithings\ptvxserver\model\PositiveInteger'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'dimensions' => null,
'weight' => null,
'maximum_surface_loads' => null,
'allowed_orientations' => null,
'number_of_items' => null    ];

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
        'id' => 'id',
'dimensions' => 'dimensions',
'weight' => 'weight',
'maximum_surface_loads' => 'maximumSurfaceLoads',
'allowed_orientations' => 'allowedOrientations',
'number_of_items' => 'numberOfItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'dimensions' => 'setDimensions',
'weight' => 'setWeight',
'maximum_surface_loads' => 'setMaximumSurfaceLoads',
'allowed_orientations' => 'setAllowedOrientations',
'number_of_items' => 'setNumberOfItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'dimensions' => 'getDimensions',
'weight' => 'getWeight',
'maximum_surface_loads' => 'getMaximumSurfaceLoads',
'allowed_orientations' => 'getAllowedOrientations',
'number_of_items' => 'getNumberOfItems'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['maximum_surface_loads'] = isset($data['maximum_surface_loads']) ? $data['maximum_surface_loads'] : null;
        $this->container['allowed_orientations'] = isset($data['allowed_orientations']) ? $data['allowed_orientations'] : null;
        $this->container['number_of_items'] = isset($data['number_of_items']) ? $data['number_of_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id User provided ID for this item type. Must be unique.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \ithings\ptvxserver\model\BoxDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \ithings\ptvxserver\model\BoxDimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \ithings\ptvxserver\model\Kilograms
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \ithings\ptvxserver\model\Kilograms $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets maximum_surface_loads
     *
     * @return \ithings\ptvxserver\model\ItemSurfaceLoads
     */
    public function getMaximumSurfaceLoads()
    {
        return $this->container['maximum_surface_loads'];
    }

    /**
     * Sets maximum_surface_loads
     *
     * @param \ithings\ptvxserver\model\ItemSurfaceLoads $maximum_surface_loads maximum_surface_loads
     *
     * @return $this
     */
    public function setMaximumSurfaceLoads($maximum_surface_loads)
    {
        $this->container['maximum_surface_loads'] = $maximum_surface_loads;

        return $this;
    }

    /**
     * Gets allowed_orientations
     *
     * @return \ithings\ptvxserver\model\AllowedItemOrientations
     */
    public function getAllowedOrientations()
    {
        return $this->container['allowed_orientations'];
    }

    /**
     * Sets allowed_orientations
     *
     * @param \ithings\ptvxserver\model\AllowedItemOrientations $allowed_orientations allowed_orientations
     *
     * @return $this
     */
    public function setAllowedOrientations($allowed_orientations)
    {
        $this->container['allowed_orientations'] = $allowed_orientations;

        return $this;
    }

    /**
     * Gets number_of_items
     *
     * @return \ithings\ptvxserver\model\PositiveInteger
     */
    public function getNumberOfItems()
    {
        return $this->container['number_of_items'];
    }

    /**
     * Sets number_of_items
     *
     * @param \ithings\ptvxserver\model\PositiveInteger $number_of_items number_of_items
     *
     * @return $this
     */
    public function setNumberOfItems($number_of_items)
    {
        $this->container['number_of_items'] = $number_of_items;

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
