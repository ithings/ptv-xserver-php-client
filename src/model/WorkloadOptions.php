<?php
/**
 * WorkloadOptions
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
 * WorkloadOptions Class Doc Comment
 *
 * @category Class
 * @description Options influencing the field worker&#x27;s workload in visit planning. When using this feature, some visits may remain unplanned due to working time limits. If skipping visits is not allowed (see allowSkippingVisits), either all visits of a visit order are planned or none. When using WorkloadOptions, workload is balanced implicitly and balancing parameters such as daily and weekly imbalance tolerance will be ignored. See Plan Visits with Workload Options for details. This feature is only available for the Gurobi solver type. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xcluster.WorkloadOptions
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkloadOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkloadOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'maximum_weekly_workload' => '\ithings\ptvxserver\model\Duration',
'workloads_by_day' => '\ithings\ptvxserver\model\WorkloadByDay[]',
'allow_skipping_visits' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'maximum_weekly_workload' => null,
'workloads_by_day' => null,
'allow_skipping_visits' => null    ];

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
        'maximum_weekly_workload' => 'maximumWeeklyWorkload',
'workloads_by_day' => 'workloadsByDay',
'allow_skipping_visits' => 'allowSkippingVisits'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maximum_weekly_workload' => 'setMaximumWeeklyWorkload',
'workloads_by_day' => 'setWorkloadsByDay',
'allow_skipping_visits' => 'setAllowSkippingVisits'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maximum_weekly_workload' => 'getMaximumWeeklyWorkload',
'workloads_by_day' => 'getWorkloadsByDay',
'allow_skipping_visits' => 'getAllowSkippingVisits'    ];

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
        $this->container['maximum_weekly_workload'] = isset($data['maximum_weekly_workload']) ? $data['maximum_weekly_workload'] : null;
        $this->container['workloads_by_day'] = isset($data['workloads_by_day']) ? $data['workloads_by_day'] : null;
        $this->container['allow_skipping_visits'] = isset($data['allow_skipping_visits']) ? $data['allow_skipping_visits'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['maximum_weekly_workload'] === null) {
            $invalidProperties[] = "'maximum_weekly_workload' can't be null";
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
     * Gets maximum_weekly_workload
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getMaximumWeeklyWorkload()
    {
        return $this->container['maximum_weekly_workload'];
    }

    /**
     * Sets maximum_weekly_workload
     *
     * @param \ithings\ptvxserver\model\Duration $maximum_weekly_workload maximum_weekly_workload
     *
     * @return $this
     */
    public function setMaximumWeeklyWorkload($maximum_weekly_workload)
    {
        $this->container['maximum_weekly_workload'] = $maximum_weekly_workload;

        return $this;
    }

    /**
     * Gets workloads_by_day
     *
     * @return \ithings\ptvxserver\model\WorkloadByDay[]
     */
    public function getWorkloadsByDay()
    {
        return $this->container['workloads_by_day'];
    }

    /**
     * Sets workloads_by_day
     *
     * @param \ithings\ptvxserver\model\WorkloadByDay[] $workloads_by_day workloads_by_day
     *
     * @return $this
     */
    public function setWorkloadsByDay($workloads_by_day)
    {
        $this->container['workloads_by_day'] = $workloads_by_day;

        return $this;
    }

    /**
     * Gets allow_skipping_visits
     *
     * @return bool
     */
    public function getAllowSkippingVisits()
    {
        return $this->container['allow_skipping_visits'];
    }

    /**
     * Sets allow_skipping_visits
     *
     * @param bool $allow_skipping_visits If set to true, orders may be partially planned, i.e. visits of a visit order can be skipped for one or multiple weeks.    If a week is skipped for a visit order, all visits of this week (according to numberOfVisitsPerWeek will be skipped for this visit order.    If a visit order is partially planned, it will be referenced in visitOrderIdsSkipped for all skipped weeks.    If set to false, either all visits of a visit order are planned or none.    If an order is not planned at all, it will be referenced in visitOrderIdsNotPlanned.
     *
     * @return $this
     */
    public function setAllowSkippingVisits($allow_skipping_visits)
    {
        $this->container['allow_skipping_visits'] = $allow_skipping_visits;

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
