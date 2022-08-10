<?php
/**
 * Site
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
 * Site Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Site extends TourPlanningLocation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Site';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opening_intervals' => '\ithings\ptvxserver\model\Interval[]',
'service_time_per_stop' => '\ithings\ptvxserver\model\Duration',
'ignore_vehicle_dependent_service_time_factor_for_orders' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opening_intervals' => null,
'service_time_per_stop' => null,
'ignore_vehicle_dependent_service_time_factor_for_orders' => null    ];

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
        'opening_intervals' => 'openingIntervals',
'service_time_per_stop' => 'serviceTimePerStop',
'ignore_vehicle_dependent_service_time_factor_for_orders' => 'ignoreVehicleDependentServiceTimeFactorForOrders'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opening_intervals' => 'setOpeningIntervals',
'service_time_per_stop' => 'setServiceTimePerStop',
'ignore_vehicle_dependent_service_time_factor_for_orders' => 'setIgnoreVehicleDependentServiceTimeFactorForOrders'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opening_intervals' => 'getOpeningIntervals',
'service_time_per_stop' => 'getServiceTimePerStop',
'ignore_vehicle_dependent_service_time_factor_for_orders' => 'getIgnoreVehicleDependentServiceTimeFactorForOrders'    ];

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

        $this->container['opening_intervals'] = isset($data['opening_intervals']) ? $data['opening_intervals'] : null;
        $this->container['service_time_per_stop'] = isset($data['service_time_per_stop']) ? $data['service_time_per_stop'] : null;
        $this->container['ignore_vehicle_dependent_service_time_factor_for_orders'] = isset($data['ignore_vehicle_dependent_service_time_factor_for_orders']) ? $data['ignore_vehicle_dependent_service_time_factor_for_orders'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets opening_intervals
     *
     * @return \ithings\ptvxserver\model\Interval[]
     */
    public function getOpeningIntervals()
    {
        return $this->container['opening_intervals'];
    }

    /**
     * Sets opening_intervals
     *
     * @param \ithings\ptvxserver\model\Interval[] $opening_intervals opening_intervals
     *
     * @return $this
     */
    public function setOpeningIntervals($opening_intervals)
    {
        $this->container['opening_intervals'] = $opening_intervals;

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
     * Gets ignore_vehicle_dependent_service_time_factor_for_orders
     *
     * @return bool
     */
    public function getIgnoreVehicleDependentServiceTimeFactorForOrders()
    {
        return $this->container['ignore_vehicle_dependent_service_time_factor_for_orders'];
    }

    /**
     * Sets ignore_vehicle_dependent_service_time_factor_for_orders
     *
     * @param bool $ignore_vehicle_dependent_service_time_factor_for_orders Indicates if vehicle dependent service time factors are relevant for this site, for example if the vehicle is unloaded by ramp staff. If this parameter is set to true, no vehicle dependent service times are taken into account for this site. See Service time calculation.
     *
     * @return $this
     */
    public function setIgnoreVehicleDependentServiceTimeFactorForOrders($ignore_vehicle_dependent_service_time_factor_for_orders)
    {
        $this->container['ignore_vehicle_dependent_service_time_factor_for_orders'] = $ignore_vehicle_dependent_service_time_factor_for_orders;

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
