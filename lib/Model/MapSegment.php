<?php
/**
 * MapSegment
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
 * MapSegment Class Doc Comment
 *
 * @category Class
 * @description A segment on the map. It represents a geographic location on a map, specified by its segment-id and may contain a polyline representation and additional descriptors like road name and number or combined transport attributes . Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xdata.MapSegment
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MapSegment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MapSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => '\Swagger\Client\Model\SegmentType',
'polyline' => '\Swagger\Client\Model\EncodedGeometry',
'descriptors' => '\Swagger\Client\Model\SegmentDescriptors',
'combined_transport' => '\Swagger\Client\Model\CombinedTransportAttributes',
'id' => '\Swagger\Client\Model\SegmentId'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'polyline' => null,
'descriptors' => null,
'combined_transport' => null,
'id' => null    ];

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
        'type' => 'type',
'polyline' => 'polyline',
'descriptors' => 'descriptors',
'combined_transport' => 'combinedTransport',
'id' => 'id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'polyline' => 'setPolyline',
'descriptors' => 'setDescriptors',
'combined_transport' => 'setCombinedTransport',
'id' => 'setId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'polyline' => 'getPolyline',
'descriptors' => 'getDescriptors',
'combined_transport' => 'getCombinedTransport',
'id' => 'getId'    ];

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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['polyline'] = isset($data['polyline']) ? $data['polyline'] : null;
        $this->container['descriptors'] = isset($data['descriptors']) ? $data['descriptors'] : null;
        $this->container['combined_transport'] = isset($data['combined_transport']) ? $data['combined_transport'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets type
     *
     * @return \Swagger\Client\Model\SegmentType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\SegmentType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets polyline
     *
     * @return \Swagger\Client\Model\EncodedGeometry
     */
    public function getPolyline()
    {
        return $this->container['polyline'];
    }

    /**
     * Sets polyline
     *
     * @param \Swagger\Client\Model\EncodedGeometry $polyline polyline
     *
     * @return $this
     */
    public function setPolyline($polyline)
    {
        $this->container['polyline'] = $polyline;

        return $this;
    }

    /**
     * Gets descriptors
     *
     * @return \Swagger\Client\Model\SegmentDescriptors
     */
    public function getDescriptors()
    {
        return $this->container['descriptors'];
    }

    /**
     * Sets descriptors
     *
     * @param \Swagger\Client\Model\SegmentDescriptors $descriptors descriptors
     *
     * @return $this
     */
    public function setDescriptors($descriptors)
    {
        $this->container['descriptors'] = $descriptors;

        return $this;
    }

    /**
     * Gets combined_transport
     *
     * @return \Swagger\Client\Model\CombinedTransportAttributes
     */
    public function getCombinedTransport()
    {
        return $this->container['combined_transport'];
    }

    /**
     * Sets combined_transport
     *
     * @param \Swagger\Client\Model\CombinedTransportAttributes $combined_transport combined_transport
     *
     * @return $this
     */
    public function setCombinedTransport($combined_transport)
    {
        $this->container['combined_transport'] = $combined_transport;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \Swagger\Client\Model\SegmentId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Swagger\Client\Model\SegmentId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
