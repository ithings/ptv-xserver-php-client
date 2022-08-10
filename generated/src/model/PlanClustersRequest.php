<?php
/**
 * PlanClustersRequest
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
 * PlanClustersRequest Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlanClustersRequest extends RequestBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlanClustersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'planning_locations' => '\ithings\ptvxserver\model\PlanningLocation[]',
'clusters' => '\ithings\ptvxserver\model\Cluster[]',
'plan_clusters_options' => '\ithings\ptvxserver\model\PlanClustersOptions',
'distance_mode' => '\ithings\ptvxserver\model\DistanceMode'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'planning_locations' => null,
'clusters' => null,
'plan_clusters_options' => null,
'distance_mode' => null    ];

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
        'planning_locations' => 'planningLocations',
'clusters' => 'clusters',
'plan_clusters_options' => 'planClustersOptions',
'distance_mode' => 'distanceMode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planning_locations' => 'setPlanningLocations',
'clusters' => 'setClusters',
'plan_clusters_options' => 'setPlanClustersOptions',
'distance_mode' => 'setDistanceMode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planning_locations' => 'getPlanningLocations',
'clusters' => 'getClusters',
'plan_clusters_options' => 'getPlanClustersOptions',
'distance_mode' => 'getDistanceMode'    ];

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

        $this->container['planning_locations'] = isset($data['planning_locations']) ? $data['planning_locations'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
        $this->container['plan_clusters_options'] = isset($data['plan_clusters_options']) ? $data['plan_clusters_options'] : null;
        $this->container['distance_mode'] = isset($data['distance_mode']) ? $data['distance_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['plan_clusters_options'] === null) {
            $invalidProperties[] = "'plan_clusters_options' can't be null";
        }
        if ($this->container['distance_mode'] === null) {
            $invalidProperties[] = "'distance_mode' can't be null";
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
     * Gets planning_locations
     *
     * @return \ithings\ptvxserver\model\PlanningLocation[]
     */
    public function getPlanningLocations()
    {
        return $this->container['planning_locations'];
    }

    /**
     * Sets planning_locations
     *
     * @param \ithings\ptvxserver\model\PlanningLocation[] $planning_locations planning_locations
     *
     * @return $this
     */
    public function setPlanningLocations($planning_locations)
    {
        $this->container['planning_locations'] = $planning_locations;

        return $this;
    }

    /**
     * Gets clusters
     *
     * @return \ithings\ptvxserver\model\Cluster[]
     */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
     * Sets clusters
     *
     * @param \ithings\ptvxserver\model\Cluster[] $clusters clusters
     *
     * @return $this
     */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;

        return $this;
    }

    /**
     * Gets plan_clusters_options
     *
     * @return \ithings\ptvxserver\model\PlanClustersOptions
     */
    public function getPlanClustersOptions()
    {
        return $this->container['plan_clusters_options'];
    }

    /**
     * Sets plan_clusters_options
     *
     * @param \ithings\ptvxserver\model\PlanClustersOptions $plan_clusters_options plan_clusters_options
     *
     * @return $this
     */
    public function setPlanClustersOptions($plan_clusters_options)
    {
        $this->container['plan_clusters_options'] = $plan_clusters_options;

        return $this;
    }

    /**
     * Gets distance_mode
     *
     * @return \ithings\ptvxserver\model\DistanceMode
     */
    public function getDistanceMode()
    {
        return $this->container['distance_mode'];
    }

    /**
     * Sets distance_mode
     *
     * @param \ithings\ptvxserver\model\DistanceMode $distance_mode distance_mode
     *
     * @return $this
     */
    public function setDistanceMode($distance_mode)
    {
        $this->container['distance_mode'] = $distance_mode;

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
