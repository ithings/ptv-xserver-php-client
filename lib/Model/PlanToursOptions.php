<?php
/**
 * PlanToursOptions
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
 * PlanToursOptions Class Doc Comment
 *
 * @category Class
 * @description Contains global planning settings. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.PlanToursOptions
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlanToursOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlanToursOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'planning_horizon' => '\Swagger\Client\Model\StartEndInterval',
'restrictions' => '\Swagger\Client\Model\TourRestrictions',
'calculation_mode' => '\Swagger\Client\Model\TourPlanningCalculationMode',
'custom_calculation_mode_configuration' => '\Swagger\Client\Model\EncodedContent',
'tweaks_to_objective' => '\Swagger\Client\Model\TweaksToObjective',
'order_group_consideration' => '\Swagger\Client\Model\OrderGroupConsideration',
'single_stop_per_customer_site' => 'bool',
'consider_order_priorities' => 'bool',
'ignore_route_violations' => 'bool',
'ignore_reachability_violations' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'planning_horizon' => null,
'restrictions' => null,
'calculation_mode' => null,
'custom_calculation_mode_configuration' => null,
'tweaks_to_objective' => null,
'order_group_consideration' => null,
'single_stop_per_customer_site' => null,
'consider_order_priorities' => null,
'ignore_route_violations' => null,
'ignore_reachability_violations' => null    ];

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
        'planning_horizon' => 'planningHorizon',
'restrictions' => 'restrictions',
'calculation_mode' => 'calculationMode',
'custom_calculation_mode_configuration' => 'customCalculationModeConfiguration',
'tweaks_to_objective' => 'tweaksToObjective',
'order_group_consideration' => 'orderGroupConsideration',
'single_stop_per_customer_site' => 'singleStopPerCustomerSite',
'consider_order_priorities' => 'considerOrderPriorities',
'ignore_route_violations' => 'ignoreRouteViolations',
'ignore_reachability_violations' => 'ignoreReachabilityViolations'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planning_horizon' => 'setPlanningHorizon',
'restrictions' => 'setRestrictions',
'calculation_mode' => 'setCalculationMode',
'custom_calculation_mode_configuration' => 'setCustomCalculationModeConfiguration',
'tweaks_to_objective' => 'setTweaksToObjective',
'order_group_consideration' => 'setOrderGroupConsideration',
'single_stop_per_customer_site' => 'setSingleStopPerCustomerSite',
'consider_order_priorities' => 'setConsiderOrderPriorities',
'ignore_route_violations' => 'setIgnoreRouteViolations',
'ignore_reachability_violations' => 'setIgnoreReachabilityViolations'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planning_horizon' => 'getPlanningHorizon',
'restrictions' => 'getRestrictions',
'calculation_mode' => 'getCalculationMode',
'custom_calculation_mode_configuration' => 'getCustomCalculationModeConfiguration',
'tweaks_to_objective' => 'getTweaksToObjective',
'order_group_consideration' => 'getOrderGroupConsideration',
'single_stop_per_customer_site' => 'getSingleStopPerCustomerSite',
'consider_order_priorities' => 'getConsiderOrderPriorities',
'ignore_route_violations' => 'getIgnoreRouteViolations',
'ignore_reachability_violations' => 'getIgnoreReachabilityViolations'    ];

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
        $this->container['planning_horizon'] = isset($data['planning_horizon']) ? $data['planning_horizon'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['calculation_mode'] = isset($data['calculation_mode']) ? $data['calculation_mode'] : null;
        $this->container['custom_calculation_mode_configuration'] = isset($data['custom_calculation_mode_configuration']) ? $data['custom_calculation_mode_configuration'] : null;
        $this->container['tweaks_to_objective'] = isset($data['tweaks_to_objective']) ? $data['tweaks_to_objective'] : null;
        $this->container['order_group_consideration'] = isset($data['order_group_consideration']) ? $data['order_group_consideration'] : null;
        $this->container['single_stop_per_customer_site'] = isset($data['single_stop_per_customer_site']) ? $data['single_stop_per_customer_site'] : null;
        $this->container['consider_order_priorities'] = isset($data['consider_order_priorities']) ? $data['consider_order_priorities'] : null;
        $this->container['ignore_route_violations'] = isset($data['ignore_route_violations']) ? $data['ignore_route_violations'] : null;
        $this->container['ignore_reachability_violations'] = isset($data['ignore_reachability_violations']) ? $data['ignore_reachability_violations'] : null;
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
     * Gets planning_horizon
     *
     * @return \Swagger\Client\Model\StartEndInterval
     */
    public function getPlanningHorizon()
    {
        return $this->container['planning_horizon'];
    }

    /**
     * Sets planning_horizon
     *
     * @param \Swagger\Client\Model\StartEndInterval $planning_horizon planning_horizon
     *
     * @return $this
     */
    public function setPlanningHorizon($planning_horizon)
    {
        $this->container['planning_horizon'] = $planning_horizon;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \Swagger\Client\Model\TourRestrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \Swagger\Client\Model\TourRestrictions $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets calculation_mode
     *
     * @return \Swagger\Client\Model\TourPlanningCalculationMode
     */
    public function getCalculationMode()
    {
        return $this->container['calculation_mode'];
    }

    /**
     * Sets calculation_mode
     *
     * @param \Swagger\Client\Model\TourPlanningCalculationMode $calculation_mode calculation_mode
     *
     * @return $this
     */
    public function setCalculationMode($calculation_mode)
    {
        $this->container['calculation_mode'] = $calculation_mode;

        return $this;
    }

    /**
     * Gets custom_calculation_mode_configuration
     *
     * @return \Swagger\Client\Model\EncodedContent
     */
    public function getCustomCalculationModeConfiguration()
    {
        return $this->container['custom_calculation_mode_configuration'];
    }

    /**
     * Sets custom_calculation_mode_configuration
     *
     * @param \Swagger\Client\Model\EncodedContent $custom_calculation_mode_configuration custom_calculation_mode_configuration
     *
     * @return $this
     */
    public function setCustomCalculationModeConfiguration($custom_calculation_mode_configuration)
    {
        $this->container['custom_calculation_mode_configuration'] = $custom_calculation_mode_configuration;

        return $this;
    }

    /**
     * Gets tweaks_to_objective
     *
     * @return \Swagger\Client\Model\TweaksToObjective
     */
    public function getTweaksToObjective()
    {
        return $this->container['tweaks_to_objective'];
    }

    /**
     * Sets tweaks_to_objective
     *
     * @param \Swagger\Client\Model\TweaksToObjective $tweaks_to_objective tweaks_to_objective
     *
     * @return $this
     */
    public function setTweaksToObjective($tweaks_to_objective)
    {
        $this->container['tweaks_to_objective'] = $tweaks_to_objective;

        return $this;
    }

    /**
     * Gets order_group_consideration
     *
     * @return \Swagger\Client\Model\OrderGroupConsideration
     */
    public function getOrderGroupConsideration()
    {
        return $this->container['order_group_consideration'];
    }

    /**
     * Sets order_group_consideration
     *
     * @param \Swagger\Client\Model\OrderGroupConsideration $order_group_consideration order_group_consideration
     *
     * @return $this
     */
    public function setOrderGroupConsideration($order_group_consideration)
    {
        $this->container['order_group_consideration'] = $order_group_consideration;

        return $this;
    }

    /**
     * Gets single_stop_per_customer_site
     *
     * @return bool
     */
    public function getSingleStopPerCustomerSite()
    {
        return $this->container['single_stop_per_customer_site'];
    }

    /**
     * Sets single_stop_per_customer_site
     *
     * @param bool $single_stop_per_customer_site Defines a strong preference that all tasks of orders for the same customer site are carried out at the same stop if possible. If this is not possible, all unplanned orders for that customer site remain unplanned. Transport orders between two customer sites are ignored here. This preference is only considered in automatic planning. If this preference is not met for an input plan or for a change tours action, it is not reported as a violation.
     *
     * @return $this
     */
    public function setSingleStopPerCustomerSite($single_stop_per_customer_site)
    {
        $this->container['single_stop_per_customer_site'] = $single_stop_per_customer_site;

        return $this;
    }

    /**
     * Gets consider_order_priorities
     *
     * @return bool
     */
    public function getConsiderOrderPriorities()
    {
        return $this->container['consider_order_priorities'];
    }

    /**
     * Sets consider_order_priorities
     *
     * @param bool $consider_order_priorities If set to true order priorities are considered during automatic planning. Please keep in mind that using multiple priorities will increase the computation time of the algorithm. See technical concept Order Priorities for further details.
     *
     * @return $this
     */
    public function setConsiderOrderPriorities($consider_order_priorities)
    {
        $this->container['consider_order_priorities'] = $consider_order_priorities;

        return $this;
    }

    /**
     * Gets ignore_route_violations
     *
     * @return bool
     */
    public function getIgnoreRouteViolations()
    {
        return $this->container['ignore_route_violations'];
    }

    /**
     * Sets ignore_route_violations
     *
     * @param bool $ignore_route_violations If this field is set to true, route violations are ignored. No route violation is reported at the tour events. If this field is set to false, automatic planning will not create a tour with a route violation. Input tours with a route violation will be treated as violated tours and therefore will not be changed by the automatic planning. At the leg report and at the tours response route violated is set regardless of this field.
     *
     * @return $this
     */
    public function setIgnoreRouteViolations($ignore_route_violations)
    {
        $this->container['ignore_route_violations'] = $ignore_route_violations;

        return $this;
    }

    /**
     * Gets ignore_reachability_violations
     *
     * @return bool
     */
    public function getIgnoreReachabilityViolations()
    {
        return $this->container['ignore_reachability_violations'];
    }

    /**
     * Sets ignore_reachability_violations
     *
     * @param bool $ignore_reachability_violations If this field is set to true, reachability violations are ignored. No reachability violation is reported at the tour events. If this field is set to false, automatic planning will not create a tour with a reachability violation. Input tours with a reachability violation will be treated as violated tours and therefore will not be changed by the automatic planning. At the leg report estimated by direct distance is set regardless of this field.
     *
     * @return $this
     */
    public function setIgnoreReachabilityViolations($ignore_reachability_violations)
    {
        $this->container['ignore_reachability_violations'] = $ignore_reachability_violations;

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
