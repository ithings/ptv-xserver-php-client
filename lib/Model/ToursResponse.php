<?php
/**
 * ToursResponse
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
use \Swagger\Client\ObjectSerializer;

/**
 * ToursResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ToursResponse extends ResponseBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ToursResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost_report' => '\Swagger\Client\Model\CostReport',
'tours' => '\Swagger\Client\Model\Tour[]',
'tour_reports' => '\Swagger\Client\Model\TourReport[]',
'order_ids_not_planned' => 'string[]',
'order_ids_not_plannable' => 'string[]',
'vehicle_ids_not_planned' => 'string[]',
'vehicle_ids_with_tour_violations' => 'string[]',
'vehicle_ids_with_route_violations' => 'string[]',
'vehicle_ids_with_direct_distance_estimation' => 'string[]',
'violated' => 'bool',
'route_violated' => 'bool',
'stored_request_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cost_report' => null,
'tours' => null,
'tour_reports' => null,
'order_ids_not_planned' => null,
'order_ids_not_plannable' => null,
'vehicle_ids_not_planned' => null,
'vehicle_ids_with_tour_violations' => null,
'vehicle_ids_with_route_violations' => null,
'vehicle_ids_with_direct_distance_estimation' => null,
'violated' => null,
'route_violated' => null,
'stored_request_id' => null    ];

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
        'cost_report' => 'costReport',
'tours' => 'tours',
'tour_reports' => 'tourReports',
'order_ids_not_planned' => 'orderIdsNotPlanned',
'order_ids_not_plannable' => 'orderIdsNotPlannable',
'vehicle_ids_not_planned' => 'vehicleIdsNotPlanned',
'vehicle_ids_with_tour_violations' => 'vehicleIdsWithTourViolations',
'vehicle_ids_with_route_violations' => 'vehicleIdsWithRouteViolations',
'vehicle_ids_with_direct_distance_estimation' => 'vehicleIdsWithDirectDistanceEstimation',
'violated' => 'violated',
'route_violated' => 'routeViolated',
'stored_request_id' => 'storedRequestId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost_report' => 'setCostReport',
'tours' => 'setTours',
'tour_reports' => 'setTourReports',
'order_ids_not_planned' => 'setOrderIdsNotPlanned',
'order_ids_not_plannable' => 'setOrderIdsNotPlannable',
'vehicle_ids_not_planned' => 'setVehicleIdsNotPlanned',
'vehicle_ids_with_tour_violations' => 'setVehicleIdsWithTourViolations',
'vehicle_ids_with_route_violations' => 'setVehicleIdsWithRouteViolations',
'vehicle_ids_with_direct_distance_estimation' => 'setVehicleIdsWithDirectDistanceEstimation',
'violated' => 'setViolated',
'route_violated' => 'setRouteViolated',
'stored_request_id' => 'setStoredRequestId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost_report' => 'getCostReport',
'tours' => 'getTours',
'tour_reports' => 'getTourReports',
'order_ids_not_planned' => 'getOrderIdsNotPlanned',
'order_ids_not_plannable' => 'getOrderIdsNotPlannable',
'vehicle_ids_not_planned' => 'getVehicleIdsNotPlanned',
'vehicle_ids_with_tour_violations' => 'getVehicleIdsWithTourViolations',
'vehicle_ids_with_route_violations' => 'getVehicleIdsWithRouteViolations',
'vehicle_ids_with_direct_distance_estimation' => 'getVehicleIdsWithDirectDistanceEstimation',
'violated' => 'getViolated',
'route_violated' => 'getRouteViolated',
'stored_request_id' => 'getStoredRequestId'    ];

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

        $this->container['cost_report'] = isset($data['cost_report']) ? $data['cost_report'] : null;
        $this->container['tours'] = isset($data['tours']) ? $data['tours'] : null;
        $this->container['tour_reports'] = isset($data['tour_reports']) ? $data['tour_reports'] : null;
        $this->container['order_ids_not_planned'] = isset($data['order_ids_not_planned']) ? $data['order_ids_not_planned'] : null;
        $this->container['order_ids_not_plannable'] = isset($data['order_ids_not_plannable']) ? $data['order_ids_not_plannable'] : null;
        $this->container['vehicle_ids_not_planned'] = isset($data['vehicle_ids_not_planned']) ? $data['vehicle_ids_not_planned'] : null;
        $this->container['vehicle_ids_with_tour_violations'] = isset($data['vehicle_ids_with_tour_violations']) ? $data['vehicle_ids_with_tour_violations'] : null;
        $this->container['vehicle_ids_with_route_violations'] = isset($data['vehicle_ids_with_route_violations']) ? $data['vehicle_ids_with_route_violations'] : null;
        $this->container['vehicle_ids_with_direct_distance_estimation'] = isset($data['vehicle_ids_with_direct_distance_estimation']) ? $data['vehicle_ids_with_direct_distance_estimation'] : null;
        $this->container['violated'] = isset($data['violated']) ? $data['violated'] : null;
        $this->container['route_violated'] = isset($data['route_violated']) ? $data['route_violated'] : null;
        $this->container['stored_request_id'] = isset($data['stored_request_id']) ? $data['stored_request_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['cost_report'] === null) {
            $invalidProperties[] = "'cost_report' can't be null";
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
     * Gets cost_report
     *
     * @return \Swagger\Client\Model\CostReport
     */
    public function getCostReport()
    {
        return $this->container['cost_report'];
    }

    /**
     * Sets cost_report
     *
     * @param \Swagger\Client\Model\CostReport $cost_report cost_report
     *
     * @return $this
     */
    public function setCostReport($cost_report)
    {
        $this->container['cost_report'] = $cost_report;

        return $this;
    }

    /**
     * Gets tours
     *
     * @return \Swagger\Client\Model\Tour[]
     */
    public function getTours()
    {
        return $this->container['tours'];
    }

    /**
     * Sets tours
     *
     * @param \Swagger\Client\Model\Tour[] $tours tours
     *
     * @return $this
     */
    public function setTours($tours)
    {
        $this->container['tours'] = $tours;

        return $this;
    }

    /**
     * Gets tour_reports
     *
     * @return \Swagger\Client\Model\TourReport[]
     */
    public function getTourReports()
    {
        return $this->container['tour_reports'];
    }

    /**
     * Sets tour_reports
     *
     * @param \Swagger\Client\Model\TourReport[] $tour_reports tour_reports
     *
     * @return $this
     */
    public function setTourReports($tour_reports)
    {
        $this->container['tour_reports'] = $tour_reports;

        return $this;
    }

    /**
     * Gets order_ids_not_planned
     *
     * @return string[]
     */
    public function getOrderIdsNotPlanned()
    {
        return $this->container['order_ids_not_planned'];
    }

    /**
     * Sets order_ids_not_planned
     *
     * @param string[] $order_ids_not_planned order_ids_not_planned
     *
     * @return $this
     */
    public function setOrderIdsNotPlanned($order_ids_not_planned)
    {
        $this->container['order_ids_not_planned'] = $order_ids_not_planned;

        return $this;
    }

    /**
     * Gets order_ids_not_plannable
     *
     * @return string[]
     */
    public function getOrderIdsNotPlannable()
    {
        return $this->container['order_ids_not_plannable'];
    }

    /**
     * Sets order_ids_not_plannable
     *
     * @param string[] $order_ids_not_plannable order_ids_not_plannable
     *
     * @return $this
     */
    public function setOrderIdsNotPlannable($order_ids_not_plannable)
    {
        $this->container['order_ids_not_plannable'] = $order_ids_not_plannable;

        return $this;
    }

    /**
     * Gets vehicle_ids_not_planned
     *
     * @return string[]
     */
    public function getVehicleIdsNotPlanned()
    {
        return $this->container['vehicle_ids_not_planned'];
    }

    /**
     * Sets vehicle_ids_not_planned
     *
     * @param string[] $vehicle_ids_not_planned vehicle_ids_not_planned
     *
     * @return $this
     */
    public function setVehicleIdsNotPlanned($vehicle_ids_not_planned)
    {
        $this->container['vehicle_ids_not_planned'] = $vehicle_ids_not_planned;

        return $this;
    }

    /**
     * Gets vehicle_ids_with_tour_violations
     *
     * @return string[]
     */
    public function getVehicleIdsWithTourViolations()
    {
        return $this->container['vehicle_ids_with_tour_violations'];
    }

    /**
     * Sets vehicle_ids_with_tour_violations
     *
     * @param string[] $vehicle_ids_with_tour_violations vehicle_ids_with_tour_violations
     *
     * @return $this
     */
    public function setVehicleIdsWithTourViolations($vehicle_ids_with_tour_violations)
    {
        $this->container['vehicle_ids_with_tour_violations'] = $vehicle_ids_with_tour_violations;

        return $this;
    }

    /**
     * Gets vehicle_ids_with_route_violations
     *
     * @return string[]
     */
    public function getVehicleIdsWithRouteViolations()
    {
        return $this->container['vehicle_ids_with_route_violations'];
    }

    /**
     * Sets vehicle_ids_with_route_violations
     *
     * @param string[] $vehicle_ids_with_route_violations vehicle_ids_with_route_violations
     *
     * @return $this
     */
    public function setVehicleIdsWithRouteViolations($vehicle_ids_with_route_violations)
    {
        $this->container['vehicle_ids_with_route_violations'] = $vehicle_ids_with_route_violations;

        return $this;
    }

    /**
     * Gets vehicle_ids_with_direct_distance_estimation
     *
     * @return string[]
     */
    public function getVehicleIdsWithDirectDistanceEstimation()
    {
        return $this->container['vehicle_ids_with_direct_distance_estimation'];
    }

    /**
     * Sets vehicle_ids_with_direct_distance_estimation
     *
     * @param string[] $vehicle_ids_with_direct_distance_estimation vehicle_ids_with_direct_distance_estimation
     *
     * @return $this
     */
    public function setVehicleIdsWithDirectDistanceEstimation($vehicle_ids_with_direct_distance_estimation)
    {
        $this->container['vehicle_ids_with_direct_distance_estimation'] = $vehicle_ids_with_direct_distance_estimation;

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
     * @param bool $violated True if there is any tour violation.
     *
     * @return $this
     */
    public function setViolated($violated)
    {
        $this->container['violated'] = $violated;

        return $this;
    }

    /**
     * Gets route_violated
     *
     * @return bool
     */
    public function getRouteViolated()
    {
        return $this->container['route_violated'];
    }

    /**
     * Sets route_violated
     *
     * @param bool $route_violated True if there is at least one route violation at the leg.
     *
     * @return $this
     */
    public function setRouteViolated($route_violated)
    {
        $this->container['route_violated'] = $route_violated;

        return $this;
    }

    /**
     * Gets stored_request_id
     *
     * @return string
     */
    public function getStoredRequestId()
    {
        return $this->container['stored_request_id'];
    }

    /**
     * Sets stored_request_id
     *
     * @param string $stored_request_id Reference to the request that is stored in the session storage with this response as input plan. If there occur any problems with the session storage, an ObjectNotStoredLimitation is generated and this parameter is null even if storage was requested. In case of evaluateToursInExecution no storedRequestId is returned because the stored input plan does not change.
     *
     * @return $this
     */
    public function setStoredRequestId($stored_request_id)
    {
        $this->container['stored_request_id'] = $stored_request_id;

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
