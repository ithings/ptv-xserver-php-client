<?php
/**
 * MatchedTrackPosition
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
 * MatchedTrackPosition Class Doc Comment
 *
 * @category Class
 * @description Detailed information about a position on a track matched on a map Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xmatch.MatchedTrackPosition
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchedTrackPosition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MatchedTrackPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'detail' => '\ithings\ptvxserver\model\MatchDetail',
'distance_from_previous_match' => 'float',
'matched_segment' => '\ithings\ptvxserver\model\MatchedSegment',
'matched_coordinate' => '\ithings\ptvxserver\model\Coordinate',
'quality' => '\ithings\ptvxserver\model\PositionQuality'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'detail' => null,
'distance_from_previous_match' => null,
'matched_segment' => null,
'matched_coordinate' => null,
'quality' => null    ];

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
        'detail' => 'detail',
'distance_from_previous_match' => 'distanceFromPreviousMatch',
'matched_segment' => 'matchedSegment',
'matched_coordinate' => 'matchedCoordinate',
'quality' => 'quality'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detail' => 'setDetail',
'distance_from_previous_match' => 'setDistanceFromPreviousMatch',
'matched_segment' => 'setMatchedSegment',
'matched_coordinate' => 'setMatchedCoordinate',
'quality' => 'setQuality'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detail' => 'getDetail',
'distance_from_previous_match' => 'getDistanceFromPreviousMatch',
'matched_segment' => 'getMatchedSegment',
'matched_coordinate' => 'getMatchedCoordinate',
'quality' => 'getQuality'    ];

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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['distance_from_previous_match'] = isset($data['distance_from_previous_match']) ? $data['distance_from_previous_match'] : null;
        $this->container['matched_segment'] = isset($data['matched_segment']) ? $data['matched_segment'] : null;
        $this->container['matched_coordinate'] = isset($data['matched_coordinate']) ? $data['matched_coordinate'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
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
     * Gets detail
     *
     * @return \ithings\ptvxserver\model\MatchDetail
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param \ithings\ptvxserver\model\MatchDetail $detail detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets distance_from_previous_match
     *
     * @return float
     */
    public function getDistanceFromPreviousMatch()
    {
        return $this->container['distance_from_previous_match'];
    }

    /**
     * Sets distance_from_previous_match
     *
     * @param float $distance_from_previous_match The travel distance from the MatchedPosition.matchedCoordinate of the previous matched position to the MatchedPosition.matchedCoordinate of this matched position. It is available only if MatchedTrackPosition.detail is MATCH\\_SUCCESSFUL.
     *
     * @return $this
     */
    public function setDistanceFromPreviousMatch($distance_from_previous_match)
    {
        $this->container['distance_from_previous_match'] = $distance_from_previous_match;

        return $this;
    }

    /**
     * Gets matched_segment
     *
     * @return \ithings\ptvxserver\model\MatchedSegment
     */
    public function getMatchedSegment()
    {
        return $this->container['matched_segment'];
    }

    /**
     * Sets matched_segment
     *
     * @param \ithings\ptvxserver\model\MatchedSegment $matched_segment matched_segment
     *
     * @return $this
     */
    public function setMatchedSegment($matched_segment)
    {
        $this->container['matched_segment'] = $matched_segment;

        return $this;
    }

    /**
     * Gets matched_coordinate
     *
     * @return \ithings\ptvxserver\model\Coordinate
     */
    public function getMatchedCoordinate()
    {
        return $this->container['matched_coordinate'];
    }

    /**
     * Sets matched_coordinate
     *
     * @param \ithings\ptvxserver\model\Coordinate $matched_coordinate matched_coordinate
     *
     * @return $this
     */
    public function setMatchedCoordinate($matched_coordinate)
    {
        $this->container['matched_coordinate'] = $matched_coordinate;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return \ithings\ptvxserver\model\PositionQuality
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param \ithings\ptvxserver\model\PositionQuality $quality quality
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

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
