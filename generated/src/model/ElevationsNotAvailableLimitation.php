<?php
/**
 * ElevationsNotAvailableLimitation
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
use \ithings\ptvxserver\ObjectSerializer;

/**
 * ElevationsNotAvailableLimitation Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElevationsNotAvailableLimitation extends ResultLimitation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ElevationsNotAvailableLimitation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'route_polyline_indices' => '\ithings\ptvxserver\model\IndexInterval[]',
'segment_polyline_indices' => '\ithings\ptvxserver\model\IndexPairInterval[]',
'leg_polyline_indices' => '\ithings\ptvxserver\model\IndexPairInterval[]',
'elevations_data_available' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'route_polyline_indices' => null,
'segment_polyline_indices' => null,
'leg_polyline_indices' => null,
'elevations_data_available' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'route_polyline_indices' => 'routePolylineIndices',
'segment_polyline_indices' => 'segmentPolylineIndices',
'leg_polyline_indices' => 'legPolylineIndices',
'elevations_data_available' => 'elevationsDataAvailable'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'route_polyline_indices' => 'setRoutePolylineIndices',
'segment_polyline_indices' => 'setSegmentPolylineIndices',
'leg_polyline_indices' => 'setLegPolylineIndices',
'elevations_data_available' => 'setElevationsDataAvailable'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'route_polyline_indices' => 'getRoutePolylineIndices',
'segment_polyline_indices' => 'getSegmentPolylineIndices',
'leg_polyline_indices' => 'getLegPolylineIndices',
'elevations_data_available' => 'getElevationsDataAvailable'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['route_polyline_indices'] = isset($data['route_polyline_indices']) ? $data['route_polyline_indices'] : null;
        $this->container['segment_polyline_indices'] = isset($data['segment_polyline_indices']) ? $data['segment_polyline_indices'] : null;
        $this->container['leg_polyline_indices'] = isset($data['leg_polyline_indices']) ? $data['leg_polyline_indices'] : null;
        $this->container['elevations_data_available'] = isset($data['elevations_data_available']) ? $data['elevations_data_available'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['elevations_data_available'] === null) {
            $invalidProperties[] = "'elevations_data_available' can't be null";
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
     * Gets route_polyline_indices
     *
     * @return \ithings\ptvxserver\model\IndexInterval[]
     */
    public function getRoutePolylineIndices()
    {
        return $this->container['route_polyline_indices'];
    }

    /**
     * Sets route_polyline_indices
     *
     * @param \ithings\ptvxserver\model\IndexInterval[] $route_polyline_indices route_polyline_indices
     *
     * @return $this
     */
    public function setRoutePolylineIndices($route_polyline_indices)
    {
        $this->container['route_polyline_indices'] = $route_polyline_indices;

        return $this;
    }

    /**
     * Gets segment_polyline_indices
     *
     * @return \ithings\ptvxserver\model\IndexPairInterval[]
     */
    public function getSegmentPolylineIndices()
    {
        return $this->container['segment_polyline_indices'];
    }

    /**
     * Sets segment_polyline_indices
     *
     * @param \ithings\ptvxserver\model\IndexPairInterval[] $segment_polyline_indices segment_polyline_indices
     *
     * @return $this
     */
    public function setSegmentPolylineIndices($segment_polyline_indices)
    {
        $this->container['segment_polyline_indices'] = $segment_polyline_indices;

        return $this;
    }

    /**
     * Gets leg_polyline_indices
     *
     * @return \ithings\ptvxserver\model\IndexPairInterval[]
     */
    public function getLegPolylineIndices()
    {
        return $this->container['leg_polyline_indices'];
    }

    /**
     * Sets leg_polyline_indices
     *
     * @param \ithings\ptvxserver\model\IndexPairInterval[] $leg_polyline_indices leg_polyline_indices
     *
     * @return $this
     */
    public function setLegPolylineIndices($leg_polyline_indices)
    {
        $this->container['leg_polyline_indices'] = $leg_polyline_indices;

        return $this;
    }

    /**
     * Gets elevations_data_available
     *
     * @return bool
     */
    public function getElevationsDataAvailable()
    {
        return $this->container['elevations_data_available'];
    }

    /**
     * Sets elevations_data_available
     *
     * @param bool $elevations_data_available Specifies whether elevation data are available at all. If true, the route is beyond the limits of the data, otherwise elevations could not be calculated, at all.
     *
     * @return $this
     */
    public function setElevationsDataAvailable($elevations_data_available)
    {
        $this->container['elevations_data_available'] = $elevations_data_available;

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