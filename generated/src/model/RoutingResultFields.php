<?php
/**
 * RoutingResultFields
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
 * RoutingResultFields Class Doc Comment
 *
 * @category Class
 * @description Specifies which fields of the RouteResponse shall be returned. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xroute.ResultFields
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoutingResultFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoutingResultFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'waypoints' => 'bool',
'legs' => '\ithings\ptvxserver\model\LegResultFields',
'segments' => '\ithings\ptvxserver\model\SegmentResultFields',
'nodes' => 'bool',
'event_types' => '\ithings\ptvxserver\model\RouteEventType[]',
'polyline' => 'bool',
'toll' => '\ithings\ptvxserver\model\TollResultFields',
'emissions' => 'bool',
'report' => 'bool',
'tour_report' => 'bool',
'encoded_path' => 'bool',
'guided_navigation_route' => 'bool',
'monetary_costs_report' => 'bool',
'alternative_routes' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'waypoints' => null,
'legs' => null,
'segments' => null,
'nodes' => null,
'event_types' => null,
'polyline' => null,
'toll' => null,
'emissions' => null,
'report' => null,
'tour_report' => null,
'encoded_path' => null,
'guided_navigation_route' => null,
'monetary_costs_report' => null,
'alternative_routes' => null    ];

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
        'waypoints' => 'waypoints',
'legs' => 'legs',
'segments' => 'segments',
'nodes' => 'nodes',
'event_types' => 'eventTypes',
'polyline' => 'polyline',
'toll' => 'toll',
'emissions' => 'emissions',
'report' => 'report',
'tour_report' => 'tourReport',
'encoded_path' => 'encodedPath',
'guided_navigation_route' => 'guidedNavigationRoute',
'monetary_costs_report' => 'monetaryCostsReport',
'alternative_routes' => 'alternativeRoutes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'waypoints' => 'setWaypoints',
'legs' => 'setLegs',
'segments' => 'setSegments',
'nodes' => 'setNodes',
'event_types' => 'setEventTypes',
'polyline' => 'setPolyline',
'toll' => 'setToll',
'emissions' => 'setEmissions',
'report' => 'setReport',
'tour_report' => 'setTourReport',
'encoded_path' => 'setEncodedPath',
'guided_navigation_route' => 'setGuidedNavigationRoute',
'monetary_costs_report' => 'setMonetaryCostsReport',
'alternative_routes' => 'setAlternativeRoutes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'waypoints' => 'getWaypoints',
'legs' => 'getLegs',
'segments' => 'getSegments',
'nodes' => 'getNodes',
'event_types' => 'getEventTypes',
'polyline' => 'getPolyline',
'toll' => 'getToll',
'emissions' => 'getEmissions',
'report' => 'getReport',
'tour_report' => 'getTourReport',
'encoded_path' => 'getEncodedPath',
'guided_navigation_route' => 'getGuidedNavigationRoute',
'monetary_costs_report' => 'getMonetaryCostsReport',
'alternative_routes' => 'getAlternativeRoutes'    ];

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
        $this->container['waypoints'] = isset($data['waypoints']) ? $data['waypoints'] : null;
        $this->container['legs'] = isset($data['legs']) ? $data['legs'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['event_types'] = isset($data['event_types']) ? $data['event_types'] : null;
        $this->container['polyline'] = isset($data['polyline']) ? $data['polyline'] : null;
        $this->container['toll'] = isset($data['toll']) ? $data['toll'] : null;
        $this->container['emissions'] = isset($data['emissions']) ? $data['emissions'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
        $this->container['tour_report'] = isset($data['tour_report']) ? $data['tour_report'] : null;
        $this->container['encoded_path'] = isset($data['encoded_path']) ? $data['encoded_path'] : null;
        $this->container['guided_navigation_route'] = isset($data['guided_navigation_route']) ? $data['guided_navigation_route'] : null;
        $this->container['monetary_costs_report'] = isset($data['monetary_costs_report']) ? $data['monetary_costs_report'] : null;
        $this->container['alternative_routes'] = isset($data['alternative_routes']) ? $data['alternative_routes'] : null;
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
     * Gets waypoints
     *
     * @return bool
     */
    public function getWaypoints()
    {
        return $this->container['waypoints'];
    }

    /**
     * Sets waypoints
     *
     * @param bool $waypoints Specifies if the RouteResponse.waypoints shall be returned for the complete route.
     *
     * @return $this
     */
    public function setWaypoints($waypoints)
    {
        $this->container['waypoints'] = $waypoints;

        return $this;
    }

    /**
     * Gets legs
     *
     * @return \ithings\ptvxserver\model\LegResultFields
     */
    public function getLegs()
    {
        return $this->container['legs'];
    }

    /**
     * Sets legs
     *
     * @param \ithings\ptvxserver\model\LegResultFields $legs legs
     *
     * @return $this
     */
    public function setLegs($legs)
    {
        $this->container['legs'] = $legs;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \ithings\ptvxserver\model\SegmentResultFields
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \ithings\ptvxserver\model\SegmentResultFields $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets nodes
     *
     * @return bool
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param bool $nodes Specifies if the RouteResponse.nodes shall be returned for the complete route.
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets event_types
     *
     * @return \ithings\ptvxserver\model\RouteEventType[]
     */
    public function getEventTypes()
    {
        return $this->container['event_types'];
    }

    /**
     * Sets event_types
     *
     * @param \ithings\ptvxserver\model\RouteEventType[] $event_types event_types
     *
     * @return $this
     */
    public function setEventTypes($event_types)
    {
        $this->container['event_types'] = $event_types;

        return $this;
    }

    /**
     * Gets polyline
     *
     * @return bool
     */
    public function getPolyline()
    {
        return $this->container['polyline'];
    }

    /**
     * Sets polyline
     *
     * @param bool $polyline Specifies if the RouteResponse.polyline shall be returned for the complete route. In order to return the RouteResponse.polyline for legs and segments, enable LegResultFields.polyline and SegmentResultFields.polyline. In order to obtain the elevations for the RouteResponse.polyline, enable PolylineOptions.elevations in RouteOptions.
     *
     * @return $this
     */
    public function setPolyline($polyline)
    {
        $this->container['polyline'] = $polyline;

        return $this;
    }

    /**
     * Gets toll
     *
     * @return \ithings\ptvxserver\model\TollResultFields
     */
    public function getToll()
    {
        return $this->container['toll'];
    }

    /**
     * Sets toll
     *
     * @param \ithings\ptvxserver\model\TollResultFields $toll toll
     *
     * @return $this
     */
    public function setToll($toll)
    {
        $this->container['toll'] = $toll;

        return $this;
    }

    /**
     * Gets emissions
     *
     * @return bool
     */
    public function getEmissions()
    {
        return $this->container['emissions'];
    }

    /**
     * Sets emissions
     *
     * @param bool $emissions Specifies if the RouteResponse.emissions shall be returned for the complete route.
     *
     * @return $this
     */
    public function setEmissions($emissions)
    {
        $this->container['emissions'] = $emissions;

        return $this;
    }

    /**
     * Gets report
     *
     * @return bool
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param bool $report Specifies if the RouteResponse.report shall be returned for the complete route.
     *
     * @return $this
     */
    public function setReport($report)
    {
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets tour_report
     *
     * @return bool
     */
    public function getTourReport()
    {
        return $this->container['tour_report'];
    }

    /**
     * Sets tour_report
     *
     * @param bool $tour_report Specifies if the RouteResponse.tourReport shall be returned for the complete route.
     *
     * @return $this
     */
    public function setTourReport($tour_report)
    {
        $this->container['tour_report'] = $tour_report;

        return $this;
    }

    /**
     * Gets encoded_path
     *
     * @return bool
     */
    public function getEncodedPath()
    {
        return $this->container['encoded_path'];
    }

    /**
     * Sets encoded_path
     *
     * @param bool $encoded_path Specifies if the RouteResponse.encodedPath shall be returned for the complete route.
     *
     * @return $this
     */
    public function setEncodedPath($encoded_path)
    {
        $this->container['encoded_path'] = $encoded_path;

        return $this;
    }

    /**
     * Gets guided_navigation_route
     *
     * @return bool
     */
    public function getGuidedNavigationRoute()
    {
        return $this->container['guided_navigation_route'];
    }

    /**
     * Sets guided_navigation_route
     *
     * @param bool $guided_navigation_route Specifies if the RouteResponse.guidedNavigationRoute shall be returned for the complete route.    Setting this parameter to true requires a detailed list of maneuver events, which have to be requested separately by adding the RouteEventType MANEUVER\\_EVENT to the list of eventTypes in the result fields.    This feature therefore may consume some additional computation time and returns a list of maneuver events in the response.
     *
     * @return $this
     */
    public function setGuidedNavigationRoute($guided_navigation_route)
    {
        $this->container['guided_navigation_route'] = $guided_navigation_route;

        return $this;
    }

    /**
     * Gets monetary_costs_report
     *
     * @return bool
     */
    public function getMonetaryCostsReport()
    {
        return $this->container['monetary_costs_report'];
    }

    /**
     * Sets monetary_costs_report
     *
     * @param bool $monetary_costs_report Specifies if the RouteResponse.monetaryCostsReport shall be returned for the complete route.    If requested, it is required to specify a currency in the route options.
     *
     * @return $this
     */
    public function setMonetaryCostsReport($monetary_costs_report)
    {
        $this->container['monetary_costs_report'] = $monetary_costs_report;

        return $this;
    }

    /**
     * Gets alternative_routes
     *
     * @return bool
     */
    public function getAlternativeRoutes()
    {
        return $this->container['alternative_routes'];
    }

    /**
     * Sets alternative_routes
     *
     * @param bool $alternative_routes Specifies if the RouteResponse.alternativeRoutes shall be returned.    In addition to the optimal route up to three alternatives are returned. Note that sometimes no alternative routes are returned because possible alternatives are not considered as practical with regards to detour or sharing with the optimal route.    Note that this is only supported with requests with exactly two input waypoints of types OnRoadWaypoint or OffRoadWaypoint, otherwise, an exception will be thrown.
     *
     * @return $this
     */
    public function setAlternativeRoutes($alternative_routes)
    {
        $this->container['alternative_routes'] = $alternative_routes;

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
