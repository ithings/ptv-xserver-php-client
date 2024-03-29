<?php
/**
 * DistanceMatrixContentsResultFields
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
 * DistanceMatrixContentsResultFields Class Doc Comment
 *
 * @category Class
 * @description The type represents settings for the result fields for retrieving distance matrix relations. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xdima.DistanceMatrixContentsResultFields
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DistanceMatrixContentsResultFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DistanceMatrixContentsResultFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distances' => 'bool',
'travel_times' => 'bool',
'violated' => 'bool',
'estimated_by_direct_distance' => 'bool',
'toll_costs' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'distances' => null,
'travel_times' => null,
'violated' => null,
'estimated_by_direct_distance' => null,
'toll_costs' => null    ];

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
        'distances' => 'distances',
'travel_times' => 'travelTimes',
'violated' => 'violated',
'estimated_by_direct_distance' => 'estimatedByDirectDistance',
'toll_costs' => 'tollCosts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distances' => 'setDistances',
'travel_times' => 'setTravelTimes',
'violated' => 'setViolated',
'estimated_by_direct_distance' => 'setEstimatedByDirectDistance',
'toll_costs' => 'setTollCosts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distances' => 'getDistances',
'travel_times' => 'getTravelTimes',
'violated' => 'getViolated',
'estimated_by_direct_distance' => 'getEstimatedByDirectDistance',
'toll_costs' => 'getTollCosts'    ];

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
        $this->container['distances'] = isset($data['distances']) ? $data['distances'] : null;
        $this->container['travel_times'] = isset($data['travel_times']) ? $data['travel_times'] : null;
        $this->container['violated'] = isset($data['violated']) ? $data['violated'] : null;
        $this->container['estimated_by_direct_distance'] = isset($data['estimated_by_direct_distance']) ? $data['estimated_by_direct_distance'] : null;
        $this->container['toll_costs'] = isset($data['toll_costs']) ? $data['toll_costs'] : null;
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
     * Gets distances
     *
     * @return bool
     */
    public function getDistances()
    {
        return $this->container['distances'];
    }

    /**
     * Sets distances
     *
     * @param bool $distances Indicates if distances should be included in the result.
     *
     * @return $this
     */
    public function setDistances($distances)
    {
        $this->container['distances'] = $distances;

        return $this;
    }

    /**
     * Gets travel_times
     *
     * @return bool
     */
    public function getTravelTimes()
    {
        return $this->container['travel_times'];
    }

    /**
     * Sets travel_times
     *
     * @param bool $travel_times Indicates if travel times should be included in the result.
     *
     * @return $this
     */
    public function setTravelTimes($travel_times)
    {
        $this->container['travel_times'] = $travel_times;

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
     * @param bool $violated Indicates if violated flags should be included in the result.
     *
     * @return $this
     */
    public function setViolated($violated)
    {
        $this->container['violated'] = $violated;

        return $this;
    }

    /**
     * Gets estimated_by_direct_distance
     *
     * @return bool
     */
    public function getEstimatedByDirectDistance()
    {
        return $this->container['estimated_by_direct_distance'];
    }

    /**
     * Sets estimated_by_direct_distance
     *
     * @param bool $estimated_by_direct_distance Indicates if estimated by direct distance flags should be included in the result.
     *
     * @return $this
     */
    public function setEstimatedByDirectDistance($estimated_by_direct_distance)
    {
        $this->container['estimated_by_direct_distance'] = $estimated_by_direct_distance;

        return $this;
    }

    /**
     * Gets toll_costs
     *
     * @return bool
     */
    public function getTollCosts()
    {
        return $this->container['toll_costs'];
    }

    /**
     * Sets toll_costs
     *
     * @param bool $toll_costs Indicates if toll costs should be included in the result.
     *
     * @return $this
     */
    public function setTollCosts($toll_costs)
    {
        $this->container['toll_costs'] = $toll_costs;

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
