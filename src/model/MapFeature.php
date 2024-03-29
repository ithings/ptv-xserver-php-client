<?php
/**
 * MapFeature
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
 * MapFeature Class Doc Comment
 *
 * @category Class
 * @description Contains all Feature Layer attributes of a road segment rendered in the map. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xmap.Feature
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MapFeature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MapFeature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'reference_coordinate' => '\ithings\ptvxserver\model\Coordinate',
'reference_pixel_point' => '\ithings\ptvxserver\model\PixelPoint',
'pixel_bounding_box' => '\ithings\ptvxserver\model\PixelBoundingBox',
'icon_reference' => 'string',
'theme_id' => '\ithings\ptvxserver\model\ThemeId',
'attributes' => '\ithings\ptvxserver\model\KeyValuePair[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'reference_coordinate' => null,
'reference_pixel_point' => null,
'pixel_bounding_box' => null,
'icon_reference' => null,
'theme_id' => null,
'attributes' => null    ];

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
'reference_coordinate' => 'referenceCoordinate',
'reference_pixel_point' => 'referencePixelPoint',
'pixel_bounding_box' => 'pixelBoundingBox',
'icon_reference' => 'iconReference',
'theme_id' => 'themeId',
'attributes' => 'attributes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'reference_coordinate' => 'setReferenceCoordinate',
'reference_pixel_point' => 'setReferencePixelPoint',
'pixel_bounding_box' => 'setPixelBoundingBox',
'icon_reference' => 'setIconReference',
'theme_id' => 'setThemeId',
'attributes' => 'setAttributes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'reference_coordinate' => 'getReferenceCoordinate',
'reference_pixel_point' => 'getReferencePixelPoint',
'pixel_bounding_box' => 'getPixelBoundingBox',
'icon_reference' => 'getIconReference',
'theme_id' => 'getThemeId',
'attributes' => 'getAttributes'    ];

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
        $this->container['reference_coordinate'] = isset($data['reference_coordinate']) ? $data['reference_coordinate'] : null;
        $this->container['reference_pixel_point'] = isset($data['reference_pixel_point']) ? $data['reference_pixel_point'] : null;
        $this->container['pixel_bounding_box'] = isset($data['pixel_bounding_box']) ? $data['pixel_bounding_box'] : null;
        $this->container['icon_reference'] = isset($data['icon_reference']) ? $data['icon_reference'] : null;
        $this->container['theme_id'] = isset($data['theme_id']) ? $data['theme_id'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['theme_id'] === null) {
            $invalidProperties[] = "'theme_id' can't be null";
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
     * @param string $id The ID of the feature, if present.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reference_coordinate
     *
     * @return \ithings\ptvxserver\model\Coordinate
     */
    public function getReferenceCoordinate()
    {
        return $this->container['reference_coordinate'];
    }

    /**
     * Sets reference_coordinate
     *
     * @param \ithings\ptvxserver\model\Coordinate $reference_coordinate reference_coordinate
     *
     * @return $this
     */
    public function setReferenceCoordinate($reference_coordinate)
    {
        $this->container['reference_coordinate'] = $reference_coordinate;

        return $this;
    }

    /**
     * Gets reference_pixel_point
     *
     * @return \ithings\ptvxserver\model\PixelPoint
     */
    public function getReferencePixelPoint()
    {
        return $this->container['reference_pixel_point'];
    }

    /**
     * Sets reference_pixel_point
     *
     * @param \ithings\ptvxserver\model\PixelPoint $reference_pixel_point reference_pixel_point
     *
     * @return $this
     */
    public function setReferencePixelPoint($reference_pixel_point)
    {
        $this->container['reference_pixel_point'] = $reference_pixel_point;

        return $this;
    }

    /**
     * Gets pixel_bounding_box
     *
     * @return \ithings\ptvxserver\model\PixelBoundingBox
     */
    public function getPixelBoundingBox()
    {
        return $this->container['pixel_bounding_box'];
    }

    /**
     * Sets pixel_bounding_box
     *
     * @param \ithings\ptvxserver\model\PixelBoundingBox $pixel_bounding_box pixel_bounding_box
     *
     * @return $this
     */
    public function setPixelBoundingBox($pixel_bounding_box)
    {
        $this->container['pixel_bounding_box'] = $pixel_bounding_box;

        return $this;
    }

    /**
     * Gets icon_reference
     *
     * @return string
     */
    public function getIconReference()
    {
        return $this->container['icon_reference'];
    }

    /**
     * Sets icon_reference
     *
     * @param string $icon_reference The icon reference useful to request the icon through the xRuntime service.
     *
     * @return $this
     */
    public function setIconReference($icon_reference)
    {
        $this->container['icon_reference'] = $icon_reference;

        return $this;
    }

    /**
     * Gets theme_id
     *
     * @return \ithings\ptvxserver\model\ThemeId
     */
    public function getThemeId()
    {
        return $this->container['theme_id'];
    }

    /**
     * Sets theme_id
     *
     * @param \ithings\ptvxserver\model\ThemeId $theme_id theme_id
     *
     * @return $this
     */
    public function setThemeId($theme_id)
    {
        $this->container['theme_id'] = $theme_id;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \ithings\ptvxserver\model\KeyValuePair[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \ithings\ptvxserver\model\KeyValuePair[] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
