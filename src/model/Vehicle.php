<?php
/**
 * Vehicle
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
 * Vehicle Class Doc Comment
 *
 * @category Class
 * @description A vehicle that is used to transport goods or perform visits. In transport use cases, vehicles are mostly trucks, for customer visits, also cars may be used. Several IDs can be specified to simplify the use of multiple vehicles that are of the same type. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.Vehicle
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Vehicle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Vehicle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ids' => 'string[]',
'maximum_quantity_scenarios' => '\ithings\ptvxserver\model\MaximumQuantityScenario[]',
'quantity_scenario_change_position' => '\ithings\ptvxserver\model\QuantityScenarioChangePosition',
'distance_matrix_id' => 'string',
'start_location_id' => 'string',
'end_location_id' => 'string',
'service_time_factor_for_orders' => '\ithings\ptvxserver\model\ServiceTimeFactor',
'service_time_per_stop' => '\ithings\ptvxserver\model\Duration',
'equipment' => 'string[]',
'order_group_ids' => 'string[]',
'tour_start_interval' => '\ithings\ptvxserver\model\StartEndInterval',
'maximum_number_of_customer_stops' => '\ithings\ptvxserver\model\NonNegativeInteger',
'maximum_distance' => 'float',
'maximum_travel_time' => '\ithings\ptvxserver\model\Duration',
'maximum_driving_time' => '\ithings\ptvxserver\model\Duration',
'ignore_mixed_loading_prohibitions' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ids' => null,
'maximum_quantity_scenarios' => null,
'quantity_scenario_change_position' => null,
'distance_matrix_id' => null,
'start_location_id' => null,
'end_location_id' => null,
'service_time_factor_for_orders' => null,
'service_time_per_stop' => null,
'equipment' => null,
'order_group_ids' => null,
'tour_start_interval' => null,
'maximum_number_of_customer_stops' => null,
'maximum_distance' => null,
'maximum_travel_time' => null,
'maximum_driving_time' => null,
'ignore_mixed_loading_prohibitions' => null    ];

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
        'ids' => 'ids',
'maximum_quantity_scenarios' => 'maximumQuantityScenarios',
'quantity_scenario_change_position' => 'quantityScenarioChangePosition',
'distance_matrix_id' => 'distanceMatrixId',
'start_location_id' => 'startLocationId',
'end_location_id' => 'endLocationId',
'service_time_factor_for_orders' => 'serviceTimeFactorForOrders',
'service_time_per_stop' => 'serviceTimePerStop',
'equipment' => 'equipment',
'order_group_ids' => 'orderGroupIds',
'tour_start_interval' => 'tourStartInterval',
'maximum_number_of_customer_stops' => 'maximumNumberOfCustomerStops',
'maximum_distance' => 'maximumDistance',
'maximum_travel_time' => 'maximumTravelTime',
'maximum_driving_time' => 'maximumDrivingTime',
'ignore_mixed_loading_prohibitions' => 'ignoreMixedLoadingProhibitions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ids' => 'setIds',
'maximum_quantity_scenarios' => 'setMaximumQuantityScenarios',
'quantity_scenario_change_position' => 'setQuantityScenarioChangePosition',
'distance_matrix_id' => 'setDistanceMatrixId',
'start_location_id' => 'setStartLocationId',
'end_location_id' => 'setEndLocationId',
'service_time_factor_for_orders' => 'setServiceTimeFactorForOrders',
'service_time_per_stop' => 'setServiceTimePerStop',
'equipment' => 'setEquipment',
'order_group_ids' => 'setOrderGroupIds',
'tour_start_interval' => 'setTourStartInterval',
'maximum_number_of_customer_stops' => 'setMaximumNumberOfCustomerStops',
'maximum_distance' => 'setMaximumDistance',
'maximum_travel_time' => 'setMaximumTravelTime',
'maximum_driving_time' => 'setMaximumDrivingTime',
'ignore_mixed_loading_prohibitions' => 'setIgnoreMixedLoadingProhibitions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ids' => 'getIds',
'maximum_quantity_scenarios' => 'getMaximumQuantityScenarios',
'quantity_scenario_change_position' => 'getQuantityScenarioChangePosition',
'distance_matrix_id' => 'getDistanceMatrixId',
'start_location_id' => 'getStartLocationId',
'end_location_id' => 'getEndLocationId',
'service_time_factor_for_orders' => 'getServiceTimeFactorForOrders',
'service_time_per_stop' => 'getServiceTimePerStop',
'equipment' => 'getEquipment',
'order_group_ids' => 'getOrderGroupIds',
'tour_start_interval' => 'getTourStartInterval',
'maximum_number_of_customer_stops' => 'getMaximumNumberOfCustomerStops',
'maximum_distance' => 'getMaximumDistance',
'maximum_travel_time' => 'getMaximumTravelTime',
'maximum_driving_time' => 'getMaximumDrivingTime',
'ignore_mixed_loading_prohibitions' => 'getIgnoreMixedLoadingProhibitions'    ];

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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['maximum_quantity_scenarios'] = isset($data['maximum_quantity_scenarios']) ? $data['maximum_quantity_scenarios'] : null;
        $this->container['quantity_scenario_change_position'] = isset($data['quantity_scenario_change_position']) ? $data['quantity_scenario_change_position'] : null;
        $this->container['distance_matrix_id'] = isset($data['distance_matrix_id']) ? $data['distance_matrix_id'] : null;
        $this->container['start_location_id'] = isset($data['start_location_id']) ? $data['start_location_id'] : null;
        $this->container['end_location_id'] = isset($data['end_location_id']) ? $data['end_location_id'] : null;
        $this->container['service_time_factor_for_orders'] = isset($data['service_time_factor_for_orders']) ? $data['service_time_factor_for_orders'] : null;
        $this->container['service_time_per_stop'] = isset($data['service_time_per_stop']) ? $data['service_time_per_stop'] : null;
        $this->container['equipment'] = isset($data['equipment']) ? $data['equipment'] : null;
        $this->container['order_group_ids'] = isset($data['order_group_ids']) ? $data['order_group_ids'] : null;
        $this->container['tour_start_interval'] = isset($data['tour_start_interval']) ? $data['tour_start_interval'] : null;
        $this->container['maximum_number_of_customer_stops'] = isset($data['maximum_number_of_customer_stops']) ? $data['maximum_number_of_customer_stops'] : null;
        $this->container['maximum_distance'] = isset($data['maximum_distance']) ? $data['maximum_distance'] : null;
        $this->container['maximum_travel_time'] = isset($data['maximum_travel_time']) ? $data['maximum_travel_time'] : null;
        $this->container['maximum_driving_time'] = isset($data['maximum_driving_time']) ? $data['maximum_driving_time'] : null;
        $this->container['ignore_mixed_loading_prohibitions'] = isset($data['ignore_mixed_loading_prohibitions']) ? $data['ignore_mixed_loading_prohibitions'] : null;
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
     * Gets ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[] $ids ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets maximum_quantity_scenarios
     *
     * @return \ithings\ptvxserver\model\MaximumQuantityScenario[]
     */
    public function getMaximumQuantityScenarios()
    {
        return $this->container['maximum_quantity_scenarios'];
    }

    /**
     * Sets maximum_quantity_scenarios
     *
     * @param \ithings\ptvxserver\model\MaximumQuantityScenario[] $maximum_quantity_scenarios maximum_quantity_scenarios
     *
     * @return $this
     */
    public function setMaximumQuantityScenarios($maximum_quantity_scenarios)
    {
        $this->container['maximum_quantity_scenarios'] = $maximum_quantity_scenarios;

        return $this;
    }

    /**
     * Gets quantity_scenario_change_position
     *
     * @return \ithings\ptvxserver\model\QuantityScenarioChangePosition
     */
    public function getQuantityScenarioChangePosition()
    {
        return $this->container['quantity_scenario_change_position'];
    }

    /**
     * Sets quantity_scenario_change_position
     *
     * @param \ithings\ptvxserver\model\QuantityScenarioChangePosition $quantity_scenario_change_position quantity_scenario_change_position
     *
     * @return $this
     */
    public function setQuantityScenarioChangePosition($quantity_scenario_change_position)
    {
        $this->container['quantity_scenario_change_position'] = $quantity_scenario_change_position;

        return $this;
    }

    /**
     * Gets distance_matrix_id
     *
     * @return string
     */
    public function getDistanceMatrixId()
    {
        return $this->container['distance_matrix_id'];
    }

    /**
     * Sets distance_matrix_id
     *
     * @param string $distance_matrix_id Distance matrix of this vehicle if distance mode ExistingDistanceMatrixPerVehicle is specified. Empty otherwise. If not, an exception is thrown. The distance matrix is specified by its ID, which can be retrieved in the distance matrix summary of the corresponding DistanceMatrixResponse. The ID is considered case sensitively. The distance matrix has to contain every location that is necessary for the tour planning, otherwise an exception is thrown.
     *
     * @return $this
     */
    public function setDistanceMatrixId($distance_matrix_id)
    {
        $this->container['distance_matrix_id'] = $distance_matrix_id;

        return $this;
    }

    /**
     * Gets start_location_id
     *
     * @return string
     */
    public function getStartLocationId()
    {
        return $this->container['start_location_id'];
    }

    /**
     * Sets start_location_id
     *
     * @param string $start_location_id ID of the vehicle's start location. May be a vehicle location or a site. Opening intervals and service times are not considered for a vehicle's start location. If no start location is specified, it is assumed that the vehicle is available at the first stop.
     *
     * @return $this
     */
    public function setStartLocationId($start_location_id)
    {
        $this->container['start_location_id'] = $start_location_id;

        return $this;
    }

    /**
     * Gets end_location_id
     *
     * @return string
     */
    public function getEndLocationId()
    {
        return $this->container['end_location_id'];
    }

    /**
     * Sets end_location_id
     *
     * @param string $end_location_id ID of the vehicle's end location. May be a vehicle location or a site. Opening intervals and service times are not considered for a vehicle's end location. If no end location is specified, it is assumed that the vehicle remains at the last stop.
     *
     * @return $this
     */
    public function setEndLocationId($end_location_id)
    {
        $this->container['end_location_id'] = $end_location_id;

        return $this;
    }

    /**
     * Gets service_time_factor_for_orders
     *
     * @return \ithings\ptvxserver\model\ServiceTimeFactor
     */
    public function getServiceTimeFactorForOrders()
    {
        return $this->container['service_time_factor_for_orders'];
    }

    /**
     * Sets service_time_factor_for_orders
     *
     * @param \ithings\ptvxserver\model\ServiceTimeFactor $service_time_factor_for_orders service_time_factor_for_orders
     *
     * @return $this
     */
    public function setServiceTimeFactorForOrders($service_time_factor_for_orders)
    {
        $this->container['service_time_factor_for_orders'] = $service_time_factor_for_orders;

        return $this;
    }

    /**
     * Gets service_time_per_stop
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getServiceTimePerStop()
    {
        return $this->container['service_time_per_stop'];
    }

    /**
     * Sets service_time_per_stop
     *
     * @param \ithings\ptvxserver\model\Duration $service_time_per_stop service_time_per_stop
     *
     * @return $this
     */
    public function setServiceTimePerStop($service_time_per_stop)
    {
        $this->container['service_time_per_stop'] = $service_time_per_stop;

        return $this;
    }

    /**
     * Gets equipment
     *
     * @return string[]
     */
    public function getEquipment()
    {
        return $this->container['equipment'];
    }

    /**
     * Sets equipment
     *
     * @param string[] $equipment equipment
     *
     * @return $this
     */
    public function setEquipment($equipment)
    {
        $this->container['equipment'] = $equipment;

        return $this;
    }

    /**
     * Gets order_group_ids
     *
     * @return string[]
     */
    public function getOrderGroupIds()
    {
        return $this->container['order_group_ids'];
    }

    /**
     * Sets order_group_ids
     *
     * @param string[] $order_group_ids order_group_ids
     *
     * @return $this
     */
    public function setOrderGroupIds($order_group_ids)
    {
        $this->container['order_group_ids'] = $order_group_ids;

        return $this;
    }

    /**
     * Gets tour_start_interval
     *
     * @return \ithings\ptvxserver\model\StartEndInterval
     */
    public function getTourStartInterval()
    {
        return $this->container['tour_start_interval'];
    }

    /**
     * Sets tour_start_interval
     *
     * @param \ithings\ptvxserver\model\StartEndInterval $tour_start_interval tour_start_interval
     *
     * @return $this
     */
    public function setTourStartInterval($tour_start_interval)
    {
        $this->container['tour_start_interval'] = $tour_start_interval;

        return $this;
    }

    /**
     * Gets maximum_number_of_customer_stops
     *
     * @return \ithings\ptvxserver\model\NonNegativeInteger
     */
    public function getMaximumNumberOfCustomerStops()
    {
        return $this->container['maximum_number_of_customer_stops'];
    }

    /**
     * Sets maximum_number_of_customer_stops
     *
     * @param \ithings\ptvxserver\model\NonNegativeInteger $maximum_number_of_customer_stops maximum_number_of_customer_stops
     *
     * @return $this
     */
    public function setMaximumNumberOfCustomerStops($maximum_number_of_customer_stops)
    {
        $this->container['maximum_number_of_customer_stops'] = $maximum_number_of_customer_stops;

        return $this;
    }

    /**
     * Gets maximum_distance
     *
     * @return float
     */
    public function getMaximumDistance()
    {
        return $this->container['maximum_distance'];
    }

    /**
     * Sets maximum_distance
     *
     * @param float $maximum_distance Restricts the maximum allowed total distance within the tour of this vehicle. If this parameter is set, maximum distance per tour at tour restrictions must not be set, otherwise an exception is thrown. If not given the maximum distance is unlimited. This restriction is ignored for ToursInExecutionRequests.
     *
     * @return $this
     */
    public function setMaximumDistance($maximum_distance)
    {
        $this->container['maximum_distance'] = $maximum_distance;

        return $this;
    }

    /**
     * Gets maximum_travel_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getMaximumTravelTime()
    {
        return $this->container['maximum_travel_time'];
    }

    /**
     * Sets maximum_travel_time
     *
     * @param \ithings\ptvxserver\model\Duration $maximum_travel_time maximum_travel_time
     *
     * @return $this
     */
    public function setMaximumTravelTime($maximum_travel_time)
    {
        $this->container['maximum_travel_time'] = $maximum_travel_time;

        return $this;
    }

    /**
     * Gets maximum_driving_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getMaximumDrivingTime()
    {
        return $this->container['maximum_driving_time'];
    }

    /**
     * Sets maximum_driving_time
     *
     * @param \ithings\ptvxserver\model\Duration $maximum_driving_time maximum_driving_time
     *
     * @return $this
     */
    public function setMaximumDrivingTime($maximum_driving_time)
    {
        $this->container['maximum_driving_time'] = $maximum_driving_time;

        return $this;
    }

    /**
     * Gets ignore_mixed_loading_prohibitions
     *
     * @return bool
     */
    public function getIgnoreMixedLoadingProhibitions()
    {
        return $this->container['ignore_mixed_loading_prohibitions'];
    }

    /**
     * Sets ignore_mixed_loading_prohibitions
     *
     * @param bool $ignore_mixed_loading_prohibitions Indicates whether the mixed loading prohibitions are relevant for this vehicle. If set to false, the mixed loading prohibitions -- if there are any -- must be respected on every trip of the vehicle. If set to true, the mixed loading prohibitions are ignored by the vehicle.
     *
     * @return $this
     */
    public function setIgnoreMixedLoadingProhibitions($ignore_mixed_loading_prohibitions)
    {
        $this->container['ignore_mixed_loading_prohibitions'] = $ignore_mixed_loading_prohibitions;

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
