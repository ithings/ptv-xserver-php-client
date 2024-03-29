<?php
/**
 * EncodedGeometry
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
 * EncodedGeometry Class Doc Comment
 *
 * @category Class
 * @description An EncodedGeometry contains one or more representations of the same Geometry which can be selected for each request by service.GeometryOptions.responseGeometryTypes. If z-coordinates have to be represented WKB and WKT are used in an extended form as described by OpenGIS document 99-402r2. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.geometry.EncodedGeometry
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EncodedGeometry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EncodedGeometry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'plain' => '\ithings\ptvxserver\model\Geometry',
'wkb' => 'string',
'wkt' => 'string',
'kml' => '\ithings\ptvxserver\model\KML',
'geo_json' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'plain' => null,
'wkb' => 'byte',
'wkt' => null,
'kml' => null,
'geo_json' => null    ];

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
        'plain' => 'plain',
'wkb' => 'wkb',
'wkt' => 'wkt',
'kml' => 'kml',
'geo_json' => 'geoJSON'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plain' => 'setPlain',
'wkb' => 'setWkb',
'wkt' => 'setWkt',
'kml' => 'setKml',
'geo_json' => 'setGeoJson'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plain' => 'getPlain',
'wkb' => 'getWkb',
'wkt' => 'getWkt',
'kml' => 'getKml',
'geo_json' => 'getGeoJson'    ];

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
        $this->container['plain'] = isset($data['plain']) ? $data['plain'] : null;
        $this->container['wkb'] = isset($data['wkb']) ? $data['wkb'] : null;
        $this->container['wkt'] = isset($data['wkt']) ? $data['wkt'] : null;
        $this->container['kml'] = isset($data['kml']) ? $data['kml'] : null;
        $this->container['geo_json'] = isset($data['geo_json']) ? $data['geo_json'] : null;
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
     * Gets plain
     *
     * @return \ithings\ptvxserver\model\Geometry
     */
    public function getPlain()
    {
        return $this->container['plain'];
    }

    /**
     * Sets plain
     *
     * @param \ithings\ptvxserver\model\Geometry $plain plain
     *
     * @return $this
     */
    public function setPlain($plain)
    {
        $this->container['plain'] = $plain;

        return $this;
    }

    /**
     * Gets wkb
     *
     * @return string
     */
    public function getWkb()
    {
        return $this->container['wkb'];
    }

    /**
     * Sets wkb
     *
     * @param string $wkb The WKB (well-known binary) representation of the geometry
     *
     * @return $this
     */
    public function setWkb($wkb)
    {
        $this->container['wkb'] = $wkb;

        return $this;
    }

    /**
     * Gets wkt
     *
     * @return string
     */
    public function getWkt()
    {
        return $this->container['wkt'];
    }

    /**
     * Sets wkt
     *
     * @param string $wkt The WKT (well-known text) representation of the geometry.
     *
     * @return $this
     */
    public function setWkt($wkt)
    {
        $this->container['wkt'] = $wkt;

        return $this;
    }

    /**
     * Gets kml
     *
     * @return \ithings\ptvxserver\model\KML
     */
    public function getKml()
    {
        return $this->container['kml'];
    }

    /**
     * Sets kml
     *
     * @param \ithings\ptvxserver\model\KML $kml kml
     *
     * @return $this
     */
    public function setKml($kml)
    {
        $this->container['kml'] = $kml;

        return $this;
    }

    /**
     * Gets geo_json
     *
     * @return string
     */
    public function getGeoJson()
    {
        return $this->container['geo_json'];
    }

    /**
     * Sets geo_json
     *
     * @param string $geo_json The GeoJSON representation of the geometry. Coordinates are always present in WGS84 (EPSG:4326).
     *
     * @return $this
     */
    public function setGeoJson($geo_json)
    {
        $this->container['geo_json'] = $geo_json;

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
