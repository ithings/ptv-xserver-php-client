<?php
/**
 * OnRoadRouteLocation
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
 * OnRoadRouteLocation Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OnRoadRouteLocation extends RouteLocation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OnRoadRouteLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'coordinate' => '\ithings\ptvxserver\model\Coordinate',
'consider_alternative_near_by_roads' => 'bool',
'side_of_street_restriction' => '\ithings\ptvxserver\model\SideOfStreetRestriction'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'coordinate' => null,
'consider_alternative_near_by_roads' => null,
'side_of_street_restriction' => null    ];

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
        'coordinate' => 'coordinate',
'consider_alternative_near_by_roads' => 'considerAlternativeNearByRoads',
'side_of_street_restriction' => 'sideOfStreetRestriction'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coordinate' => 'setCoordinate',
'consider_alternative_near_by_roads' => 'setConsiderAlternativeNearByRoads',
'side_of_street_restriction' => 'setSideOfStreetRestriction'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coordinate' => 'getCoordinate',
'consider_alternative_near_by_roads' => 'getConsiderAlternativeNearByRoads',
'side_of_street_restriction' => 'getSideOfStreetRestriction'    ];

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

        $this->container['coordinate'] = isset($data['coordinate']) ? $data['coordinate'] : null;
        $this->container['consider_alternative_near_by_roads'] = isset($data['consider_alternative_near_by_roads']) ? $data['consider_alternative_near_by_roads'] : null;
        $this->container['side_of_street_restriction'] = isset($data['side_of_street_restriction']) ? $data['side_of_street_restriction'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['coordinate'] === null) {
            $invalidProperties[] = "'coordinate' can't be null";
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
     * Gets coordinate
     *
     * @return \ithings\ptvxserver\model\Coordinate
     */
    public function getCoordinate()
    {
        return $this->container['coordinate'];
    }

    /**
     * Sets coordinate
     *
     * @param \ithings\ptvxserver\model\Coordinate $coordinate coordinate
     *
     * @return $this
     */
    public function setCoordinate($coordinate)
    {
        $this->container['coordinate'] = $coordinate;

        return $this;
    }

    /**
     * Gets consider_alternative_near_by_roads
     *
     * @return bool
     */
    public function getConsiderAlternativeNearByRoads()
    {
        return $this->container['consider_alternative_near_by_roads'];
    }

    /**
     * Sets consider_alternative_near_by_roads
     *
     * @param bool $consider_alternative_near_by_roads If true, roads within a radius of 500 meters around the location are considered as alternative start/end points of the route. Otherwise, the route always starts/ends at the nearest road. Note that this feature is currently available only for the xRoute calculateRoute service for the first and last waypoint. If it is set to true for an intermediate xRoute via waypoint this parameter is ignored and always the nearest road is used. All other services return an exception if this parameter is set to true.
     *
     * @return $this
     */
    public function setConsiderAlternativeNearByRoads($consider_alternative_near_by_roads)
    {
        $this->container['consider_alternative_near_by_roads'] = $consider_alternative_near_by_roads;

        return $this;
    }

    /**
     * Gets side_of_street_restriction
     *
     * @return \ithings\ptvxserver\model\SideOfStreetRestriction
     */
    public function getSideOfStreetRestriction()
    {
        return $this->container['side_of_street_restriction'];
    }

    /**
     * Sets side_of_street_restriction
     *
     * @param \ithings\ptvxserver\model\SideOfStreetRestriction $side_of_street_restriction side_of_street_restriction
     *
     * @return $this
     */
    public function setSideOfStreetRestriction($side_of_street_restriction)
    {
        $this->container['side_of_street_restriction'] = $side_of_street_restriction;

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
