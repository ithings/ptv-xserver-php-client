<?php
/**
 * ClusterFacility
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
 * ClusterFacility Class Doc Comment
 *
 * @category Class
 * @description Represents a cluster that is considered to be a facility that may rise certain cost when using it. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xcluster.ClusterFacility
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClusterFacility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClusterFacility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cluster' => '\Swagger\Client\Model\Cluster',
'cost' => '\Swagger\Client\Model\MathematicalCost',
'capacity' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cluster' => null,
'cost' => null,
'capacity' => 'double'    ];

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
        'cluster' => 'cluster',
'cost' => 'cost',
'capacity' => 'capacity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cluster' => 'setCluster',
'cost' => 'setCost',
'capacity' => 'setCapacity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cluster' => 'getCluster',
'cost' => 'getCost',
'capacity' => 'getCapacity'    ];

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
        $this->container['cluster'] = isset($data['cluster']) ? $data['cluster'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cluster'] === null) {
            $invalidProperties[] = "'cluster' can't be null";
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
     * Gets cluster
     *
     * @return \Swagger\Client\Model\Cluster
     */
    public function getCluster()
    {
        return $this->container['cluster'];
    }

    /**
     * Sets cluster
     *
     * @param \Swagger\Client\Model\Cluster $cluster cluster
     *
     * @return $this
     */
    public function setCluster($cluster)
    {
        $this->container['cluster'] = $cluster;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return \Swagger\Client\Model\MathematicalCost
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \Swagger\Client\Model\MathematicalCost $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return double
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param double $capacity The sum of activities of all planning locations assigned to this cluster facility cannot exceed the given capacity value. If not set, it is assumed that all planning locations can be assigned to this cluster facility in the worst case. If set, its value should be positive. If set for each cluster facility, it could happen, that a planning location remains unplanned in the end. Furthermore, it could happen, that a cluster facility is not allocated to any planning location, i.e. the respective ClusterReport.numberOfLocations is zero and the respective ClusteredLocations.locationIds is empty.
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

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
