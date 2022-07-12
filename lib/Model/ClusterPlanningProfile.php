<?php
/**
 * ClusterPlanningProfile
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
 * ClusterPlanningProfile Class Doc Comment
 *
 * @category Class
 * @description Defines parameters for cluster planning and optimization. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.clusterplanningprofile.ClusterPlanningProfile
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClusterPlanningProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClusterPlanningProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clustering' => '\Swagger\Client\Model\Clustering',
'covering' => '\Swagger\Client\Model\Covering',
'visit_planning' => '\Swagger\Client\Model\VisitPlanning',
'visit_sequencing' => '\Swagger\Client\Model\VisitSequencing',
'solver_time_limit' => '\Swagger\Client\Model\Duration'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clustering' => null,
'covering' => null,
'visit_planning' => null,
'visit_sequencing' => null,
'solver_time_limit' => null    ];

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
        'clustering' => 'clustering',
'covering' => 'covering',
'visit_planning' => 'visitPlanning',
'visit_sequencing' => 'visitSequencing',
'solver_time_limit' => 'solverTimeLimit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clustering' => 'setClustering',
'covering' => 'setCovering',
'visit_planning' => 'setVisitPlanning',
'visit_sequencing' => 'setVisitSequencing',
'solver_time_limit' => 'setSolverTimeLimit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clustering' => 'getClustering',
'covering' => 'getCovering',
'visit_planning' => 'getVisitPlanning',
'visit_sequencing' => 'getVisitSequencing',
'solver_time_limit' => 'getSolverTimeLimit'    ];

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
        $this->container['clustering'] = isset($data['clustering']) ? $data['clustering'] : null;
        $this->container['covering'] = isset($data['covering']) ? $data['covering'] : null;
        $this->container['visit_planning'] = isset($data['visit_planning']) ? $data['visit_planning'] : null;
        $this->container['visit_sequencing'] = isset($data['visit_sequencing']) ? $data['visit_sequencing'] : null;
        $this->container['solver_time_limit'] = isset($data['solver_time_limit']) ? $data['solver_time_limit'] : null;
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
     * Gets clustering
     *
     * @return \Swagger\Client\Model\Clustering
     */
    public function getClustering()
    {
        return $this->container['clustering'];
    }

    /**
     * Sets clustering
     *
     * @param \Swagger\Client\Model\Clustering $clustering clustering
     *
     * @return $this
     */
    public function setClustering($clustering)
    {
        $this->container['clustering'] = $clustering;

        return $this;
    }

    /**
     * Gets covering
     *
     * @return \Swagger\Client\Model\Covering
     */
    public function getCovering()
    {
        return $this->container['covering'];
    }

    /**
     * Sets covering
     *
     * @param \Swagger\Client\Model\Covering $covering covering
     *
     * @return $this
     */
    public function setCovering($covering)
    {
        $this->container['covering'] = $covering;

        return $this;
    }

    /**
     * Gets visit_planning
     *
     * @return \Swagger\Client\Model\VisitPlanning
     */
    public function getVisitPlanning()
    {
        return $this->container['visit_planning'];
    }

    /**
     * Sets visit_planning
     *
     * @param \Swagger\Client\Model\VisitPlanning $visit_planning visit_planning
     *
     * @return $this
     */
    public function setVisitPlanning($visit_planning)
    {
        $this->container['visit_planning'] = $visit_planning;

        return $this;
    }

    /**
     * Gets visit_sequencing
     *
     * @return \Swagger\Client\Model\VisitSequencing
     */
    public function getVisitSequencing()
    {
        return $this->container['visit_sequencing'];
    }

    /**
     * Sets visit_sequencing
     *
     * @param \Swagger\Client\Model\VisitSequencing $visit_sequencing visit_sequencing
     *
     * @return $this
     */
    public function setVisitSequencing($visit_sequencing)
    {
        $this->container['visit_sequencing'] = $visit_sequencing;

        return $this;
    }

    /**
     * Gets solver_time_limit
     *
     * @return \Swagger\Client\Model\Duration
     */
    public function getSolverTimeLimit()
    {
        return $this->container['solver_time_limit'];
    }

    /**
     * Sets solver_time_limit
     *
     * @param \Swagger\Client\Model\Duration $solver_time_limit solver_time_limit
     *
     * @return $this
     */
    public function setSolverTimeLimit($solver_time_limit)
    {
        $this->container['solver_time_limit'] = $solver_time_limit;

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