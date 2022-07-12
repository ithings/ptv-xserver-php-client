<?php
/**
 * GeographicRestrictions
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
 * GeographicRestrictions Class Doc Comment
 *
 * @category Class
 * @description Defines the geographic restrictions to be applied for route calculation. The effective routable area is determined by the intersection of the effective country list and the search space bounds. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.routing.GeographicRestrictions
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeographicRestrictions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeographicRestrictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'search_space_bounds' => '\Swagger\Client\Model\SearchSpaceBounds',
'allowed_countries' => '\Swagger\Client\Model\CountryCode[]',
'prohibited_countries' => '\Swagger\Client\Model\CountryCode[]',
'prohibited_segments_by_intersecting_polylines' => '\Swagger\Client\Model\EncodedGeometry[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'search_space_bounds' => null,
'allowed_countries' => null,
'prohibited_countries' => null,
'prohibited_segments_by_intersecting_polylines' => null    ];

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
        'search_space_bounds' => 'searchSpaceBounds',
'allowed_countries' => 'allowedCountries',
'prohibited_countries' => 'prohibitedCountries',
'prohibited_segments_by_intersecting_polylines' => 'prohibitedSegmentsByIntersectingPolylines'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_space_bounds' => 'setSearchSpaceBounds',
'allowed_countries' => 'setAllowedCountries',
'prohibited_countries' => 'setProhibitedCountries',
'prohibited_segments_by_intersecting_polylines' => 'setProhibitedSegmentsByIntersectingPolylines'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_space_bounds' => 'getSearchSpaceBounds',
'allowed_countries' => 'getAllowedCountries',
'prohibited_countries' => 'getProhibitedCountries',
'prohibited_segments_by_intersecting_polylines' => 'getProhibitedSegmentsByIntersectingPolylines'    ];

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
        $this->container['search_space_bounds'] = isset($data['search_space_bounds']) ? $data['search_space_bounds'] : null;
        $this->container['allowed_countries'] = isset($data['allowed_countries']) ? $data['allowed_countries'] : null;
        $this->container['prohibited_countries'] = isset($data['prohibited_countries']) ? $data['prohibited_countries'] : null;
        $this->container['prohibited_segments_by_intersecting_polylines'] = isset($data['prohibited_segments_by_intersecting_polylines']) ? $data['prohibited_segments_by_intersecting_polylines'] : null;
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
     * Gets search_space_bounds
     *
     * @return \Swagger\Client\Model\SearchSpaceBounds
     */
    public function getSearchSpaceBounds()
    {
        return $this->container['search_space_bounds'];
    }

    /**
     * Sets search_space_bounds
     *
     * @param \Swagger\Client\Model\SearchSpaceBounds $search_space_bounds search_space_bounds
     *
     * @return $this
     */
    public function setSearchSpaceBounds($search_space_bounds)
    {
        $this->container['search_space_bounds'] = $search_space_bounds;

        return $this;
    }

    /**
     * Gets allowed_countries
     *
     * @return \Swagger\Client\Model\CountryCode[]
     */
    public function getAllowedCountries()
    {
        return $this->container['allowed_countries'];
    }

    /**
     * Sets allowed_countries
     *
     * @param \Swagger\Client\Model\CountryCode[] $allowed_countries allowed_countries
     *
     * @return $this
     */
    public function setAllowedCountries($allowed_countries)
    {
        $this->container['allowed_countries'] = $allowed_countries;

        return $this;
    }

    /**
     * Gets prohibited_countries
     *
     * @return \Swagger\Client\Model\CountryCode[]
     */
    public function getProhibitedCountries()
    {
        return $this->container['prohibited_countries'];
    }

    /**
     * Sets prohibited_countries
     *
     * @param \Swagger\Client\Model\CountryCode[] $prohibited_countries prohibited_countries
     *
     * @return $this
     */
    public function setProhibitedCountries($prohibited_countries)
    {
        $this->container['prohibited_countries'] = $prohibited_countries;

        return $this;
    }

    /**
     * Gets prohibited_segments_by_intersecting_polylines
     *
     * @return \Swagger\Client\Model\EncodedGeometry[]
     */
    public function getProhibitedSegmentsByIntersectingPolylines()
    {
        return $this->container['prohibited_segments_by_intersecting_polylines'];
    }

    /**
     * Sets prohibited_segments_by_intersecting_polylines
     *
     * @param \Swagger\Client\Model\EncodedGeometry[] $prohibited_segments_by_intersecting_polylines prohibited_segments_by_intersecting_polylines
     *
     * @return $this
     */
    public function setProhibitedSegmentsByIntersectingPolylines($prohibited_segments_by_intersecting_polylines)
    {
        $this->container['prohibited_segments_by_intersecting_polylines'] = $prohibited_segments_by_intersecting_polylines;

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
