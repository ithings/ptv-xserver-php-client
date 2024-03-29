<?php
/**
 * RouteResponse
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
 * RouteResponse Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteResponse extends ResponseBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RouteResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distance' => 'float',
'travel_time' => '\ithings\ptvxserver\model\Duration',
'traffic_delay' => '\ithings\ptvxserver\model\Duration',
'waypoints' => '\ithings\ptvxserver\model\Waypoint[]',
'legs' => '\ithings\ptvxserver\model\Leg[]',
'segments' => '\ithings\ptvxserver\model\Segment[]',
'nodes' => '\ithings\ptvxserver\model\Node[]',
'events' => '\ithings\ptvxserver\model\RouteEvent[]',
'polyline' => '\ithings\ptvxserver\model\EncodedGeometry',
'toll' => '\ithings\ptvxserver\model\TollResult',
'emissions' => '\ithings\ptvxserver\model\Emissions',
'encoded_path' => '\ithings\ptvxserver\model\EncodedContent',
'guided_navigation_route' => 'string',
'tour_report' => '\ithings\ptvxserver\model\RoutingTourReport',
'violated' => 'bool',
'report' => '\ithings\ptvxserver\model\RouteReport',
'monetary_costs_report' => '\ithings\ptvxserver\model\MonetaryCostsReport',
'eta_calculation_report' => '\ithings\ptvxserver\model\ETACalculationReport',
'alternative_routes' => '\ithings\ptvxserver\model\AlternativeRoute[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'distance' => null,
'travel_time' => null,
'traffic_delay' => null,
'waypoints' => null,
'legs' => null,
'segments' => null,
'nodes' => null,
'events' => null,
'polyline' => null,
'toll' => null,
'emissions' => null,
'encoded_path' => null,
'guided_navigation_route' => 'byte',
'tour_report' => null,
'violated' => null,
'report' => null,
'monetary_costs_report' => null,
'eta_calculation_report' => null,
'alternative_routes' => null    ];

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
        'distance' => 'distance',
'travel_time' => 'travelTime',
'traffic_delay' => 'trafficDelay',
'waypoints' => 'waypoints',
'legs' => 'legs',
'segments' => 'segments',
'nodes' => 'nodes',
'events' => 'events',
'polyline' => 'polyline',
'toll' => 'toll',
'emissions' => 'emissions',
'encoded_path' => 'encodedPath',
'guided_navigation_route' => 'guidedNavigationRoute',
'tour_report' => 'tourReport',
'violated' => 'violated',
'report' => 'report',
'monetary_costs_report' => 'monetaryCostsReport',
'eta_calculation_report' => 'etaCalculationReport',
'alternative_routes' => 'alternativeRoutes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distance' => 'setDistance',
'travel_time' => 'setTravelTime',
'traffic_delay' => 'setTrafficDelay',
'waypoints' => 'setWaypoints',
'legs' => 'setLegs',
'segments' => 'setSegments',
'nodes' => 'setNodes',
'events' => 'setEvents',
'polyline' => 'setPolyline',
'toll' => 'setToll',
'emissions' => 'setEmissions',
'encoded_path' => 'setEncodedPath',
'guided_navigation_route' => 'setGuidedNavigationRoute',
'tour_report' => 'setTourReport',
'violated' => 'setViolated',
'report' => 'setReport',
'monetary_costs_report' => 'setMonetaryCostsReport',
'eta_calculation_report' => 'setEtaCalculationReport',
'alternative_routes' => 'setAlternativeRoutes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distance' => 'getDistance',
'travel_time' => 'getTravelTime',
'traffic_delay' => 'getTrafficDelay',
'waypoints' => 'getWaypoints',
'legs' => 'getLegs',
'segments' => 'getSegments',
'nodes' => 'getNodes',
'events' => 'getEvents',
'polyline' => 'getPolyline',
'toll' => 'getToll',
'emissions' => 'getEmissions',
'encoded_path' => 'getEncodedPath',
'guided_navigation_route' => 'getGuidedNavigationRoute',
'tour_report' => 'getTourReport',
'violated' => 'getViolated',
'report' => 'getReport',
'monetary_costs_report' => 'getMonetaryCostsReport',
'eta_calculation_report' => 'getEtaCalculationReport',
'alternative_routes' => 'getAlternativeRoutes'    ];

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

        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['travel_time'] = isset($data['travel_time']) ? $data['travel_time'] : null;
        $this->container['traffic_delay'] = isset($data['traffic_delay']) ? $data['traffic_delay'] : null;
        $this->container['waypoints'] = isset($data['waypoints']) ? $data['waypoints'] : null;
        $this->container['legs'] = isset($data['legs']) ? $data['legs'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['polyline'] = isset($data['polyline']) ? $data['polyline'] : null;
        $this->container['toll'] = isset($data['toll']) ? $data['toll'] : null;
        $this->container['emissions'] = isset($data['emissions']) ? $data['emissions'] : null;
        $this->container['encoded_path'] = isset($data['encoded_path']) ? $data['encoded_path'] : null;
        $this->container['guided_navigation_route'] = isset($data['guided_navigation_route']) ? $data['guided_navigation_route'] : null;
        $this->container['tour_report'] = isset($data['tour_report']) ? $data['tour_report'] : null;
        $this->container['violated'] = isset($data['violated']) ? $data['violated'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
        $this->container['monetary_costs_report'] = isset($data['monetary_costs_report']) ? $data['monetary_costs_report'] : null;
        $this->container['eta_calculation_report'] = isset($data['eta_calculation_report']) ? $data['eta_calculation_report'] : null;
        $this->container['alternative_routes'] = isset($data['alternative_routes']) ? $data['alternative_routes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['travel_time'] === null) {
            $invalidProperties[] = "'travel_time' can't be null";
        }
        if ($this->container['violated'] === null) {
            $invalidProperties[] = "'violated' can't be null";
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
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance The distance of the complete route. It is the sum of distances of all segments and hence is a whole number without decimal places (see Segment.distance). It equals the sum of distances of all legs.
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets travel_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getTravelTime()
    {
        return $this->container['travel_time'];
    }

    /**
     * Sets travel_time
     *
     * @param \ithings\ptvxserver\model\Duration $travel_time travel_time
     *
     * @return $this
     */
    public function setTravelTime($travel_time)
    {
        $this->container['travel_time'] = $travel_time;

        return $this;
    }

    /**
     * Gets traffic_delay
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getTrafficDelay()
    {
        return $this->container['traffic_delay'];
    }

    /**
     * Sets traffic_delay
     *
     * @param \ithings\ptvxserver\model\Duration $traffic_delay traffic_delay
     *
     * @return $this
     */
    public function setTrafficDelay($traffic_delay)
    {
        $this->container['traffic_delay'] = $traffic_delay;

        return $this;
    }

    /**
     * Gets waypoints
     *
     * @return \ithings\ptvxserver\model\Waypoint[]
     */
    public function getWaypoints()
    {
        return $this->container['waypoints'];
    }

    /**
     * Sets waypoints
     *
     * @param \ithings\ptvxserver\model\Waypoint[] $waypoints waypoints
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
     * @return \ithings\ptvxserver\model\Leg[]
     */
    public function getLegs()
    {
        return $this->container['legs'];
    }

    /**
     * Sets legs
     *
     * @param \ithings\ptvxserver\model\Leg[] $legs legs
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
     * @return \ithings\ptvxserver\model\Segment[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \ithings\ptvxserver\model\Segment[] $segments segments
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
     * @return \ithings\ptvxserver\model\Node[]
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \ithings\ptvxserver\model\Node[] $nodes nodes
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \ithings\ptvxserver\model\RouteEvent[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \ithings\ptvxserver\model\RouteEvent[] $events events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets polyline
     *
     * @return \ithings\ptvxserver\model\EncodedGeometry
     */
    public function getPolyline()
    {
        return $this->container['polyline'];
    }

    /**
     * Sets polyline
     *
     * @param \ithings\ptvxserver\model\EncodedGeometry $polyline polyline
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
     * @return \ithings\ptvxserver\model\TollResult
     */
    public function getToll()
    {
        return $this->container['toll'];
    }

    /**
     * Sets toll
     *
     * @param \ithings\ptvxserver\model\TollResult $toll toll
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
     * @return \ithings\ptvxserver\model\Emissions
     */
    public function getEmissions()
    {
        return $this->container['emissions'];
    }

    /**
     * Sets emissions
     *
     * @param \ithings\ptvxserver\model\Emissions $emissions emissions
     *
     * @return $this
     */
    public function setEmissions($emissions)
    {
        $this->container['emissions'] = $emissions;

        return $this;
    }

    /**
     * Gets encoded_path
     *
     * @return \ithings\ptvxserver\model\EncodedContent
     */
    public function getEncodedPath()
    {
        return $this->container['encoded_path'];
    }

    /**
     * Sets encoded_path
     *
     * @param \ithings\ptvxserver\model\EncodedContent $encoded_path encoded_path
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
     * @return string
     */
    public function getGuidedNavigationRoute()
    {
        return $this->container['guided_navigation_route'];
    }

    /**
     * Sets guided_navigation_route
     *
     * @param string $guided_navigation_route A base64 encoded representation of the route that can be used for guided navigation. Calculating a guided navigation route requires maneuver events which have to be requested separately. The base64 binary has to be decoded and saved as text file and can then be imported in PTV Navigator and used for navigation.
     *
     * @return $this
     */
    public function setGuidedNavigationRoute($guided_navigation_route)
    {
        $this->container['guided_navigation_route'] = $guided_navigation_route;

        return $this;
    }

    /**
     * Gets tour_report
     *
     * @return \ithings\ptvxserver\model\RoutingTourReport
     */
    public function getTourReport()
    {
        return $this->container['tour_report'];
    }

    /**
     * Sets tour_report
     *
     * @param \ithings\ptvxserver\model\RoutingTourReport $tour_report tour_report
     *
     * @return $this
     */
    public function setTourReport($tour_report)
    {
        $this->container['tour_report'] = $tour_report;

        return $this;
    }

    /**
     * Gets violated
     *
     * @return bool
     */
    public function getViolated()
    {
        return $this->container['violated'];
    }

    /**
     * Sets violated
     *
     * @param bool $violated If set to true, indicates that this route contains a violation for the chosen vehicle.
     *
     * @return $this
     */
    public function setViolated($violated)
    {
        $this->container['violated'] = $violated;

        return $this;
    }

    /**
     * Gets report
     *
     * @return \ithings\ptvxserver\model\RouteReport
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param \ithings\ptvxserver\model\RouteReport $report report
     *
     * @return $this
     */
    public function setReport($report)
    {
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets monetary_costs_report
     *
     * @return \ithings\ptvxserver\model\MonetaryCostsReport
     */
    public function getMonetaryCostsReport()
    {
        return $this->container['monetary_costs_report'];
    }

    /**
     * Sets monetary_costs_report
     *
     * @param \ithings\ptvxserver\model\MonetaryCostsReport $monetary_costs_report monetary_costs_report
     *
     * @return $this
     */
    public function setMonetaryCostsReport($monetary_costs_report)
    {
        $this->container['monetary_costs_report'] = $monetary_costs_report;

        return $this;
    }

    /**
     * Gets eta_calculation_report
     *
     * @return \ithings\ptvxserver\model\ETACalculationReport
     */
    public function getEtaCalculationReport()
    {
        return $this->container['eta_calculation_report'];
    }

    /**
     * Sets eta_calculation_report
     *
     * @param \ithings\ptvxserver\model\ETACalculationReport $eta_calculation_report eta_calculation_report
     *
     * @return $this
     */
    public function setEtaCalculationReport($eta_calculation_report)
    {
        $this->container['eta_calculation_report'] = $eta_calculation_report;

        return $this;
    }

    /**
     * Gets alternative_routes
     *
     * @return \ithings\ptvxserver\model\AlternativeRoute[]
     */
    public function getAlternativeRoutes()
    {
        return $this->container['alternative_routes'];
    }

    /**
     * Sets alternative_routes
     *
     * @param \ithings\ptvxserver\model\AlternativeRoute[] $alternative_routes alternative_routes
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
