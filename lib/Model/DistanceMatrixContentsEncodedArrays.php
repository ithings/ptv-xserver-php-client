<?php
/**
 * DistanceMatrixContentsEncodedArrays
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
 * DistanceMatrixContentsEncodedArrays Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DistanceMatrixContentsEncodedArrays extends DistanceMatrixContents 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DistanceMatrixContentsEncodedArrays';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'distances' => 'string',
'travel_times' => 'string',
'violated' => 'string',
'estimated_by_direct_distance' => 'string',
'toll_costs' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'distances' => 'byte',
'travel_times' => 'byte',
'violated' => 'byte',
'estimated_by_direct_distance' => 'byte',
'toll_costs' => 'byte'    ];

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
     * Gets distances
     *
     * @return string
     */
    public function getDistances()
    {
        return $this->container['distances'];
    }

    /**
     * Sets distances
     *
     * @param string $distances The distances of the requested matrix elements expressed in meters.
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
     * @return string
     */
    public function getTravelTimes()
    {
        return $this->container['travel_times'];
    }

    /**
     * Sets travel_times
     *
     * @param string $travel_times The travel times of the requested matrix elements expressed in milliseconds.
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
     * @return string
     */
    public function getViolated()
    {
        return $this->container['violated'];
    }

    /**
     * Sets violated
     *
     * @param string $violated The violated flags of the requested matrix elements.
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
     * @return string
     */
    public function getEstimatedByDirectDistance()
    {
        return $this->container['estimated_by_direct_distance'];
    }

    /**
     * Sets estimated_by_direct_distance
     *
     * @param string $estimated_by_direct_distance The estimated by direct distance flags of the requested matrix elements.
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
     * @return string
     */
    public function getTollCosts()
    {
        return $this->container['toll_costs'];
    }

    /**
     * Sets toll_costs
     *
     * @param string $toll_costs The toll costs of the requested matrix elements in the currency that has been provided in the options of the corresponding xdima.CreateDistanceMatrixRequest.
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
