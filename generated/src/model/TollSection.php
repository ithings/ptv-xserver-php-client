<?php
/**
 * TollSection
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
 * TollSection Class Doc Comment
 *
 * @category Class
 * @description Represents one single section of the route for which the toll operator has defined toll costs. Besides the toll costs further information is optionally provided such as alternative costs with different payment methods or an official distance for the section defined by the toll operator. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xroute.TollSection
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TollSection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TollSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost' => '\ithings\ptvxserver\model\TollCost',
'alternative_costs' => '\ithings\ptvxserver\model\TollCost[]',
'official_distance' => '\ithings\ptvxserver\model\Distance',
'toll_road_type' => '\ithings\ptvxserver\model\TollRoadType',
'country' => '\ithings\ptvxserver\model\CountryCode',
'toll_system_index' => '\ithings\ptvxserver\model\Index',
'start_node_index' => '\ithings\ptvxserver\model\Index',
'end_node_index' => '\ithings\ptvxserver\model\Index',
'display_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cost' => null,
'alternative_costs' => null,
'official_distance' => null,
'toll_road_type' => null,
'country' => null,
'toll_system_index' => null,
'start_node_index' => null,
'end_node_index' => null,
'display_name' => null    ];

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
        'cost' => 'cost',
'alternative_costs' => 'alternativeCosts',
'official_distance' => 'officialDistance',
'toll_road_type' => 'tollRoadType',
'country' => 'country',
'toll_system_index' => 'tollSystemIndex',
'start_node_index' => 'startNodeIndex',
'end_node_index' => 'endNodeIndex',
'display_name' => 'displayName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost' => 'setCost',
'alternative_costs' => 'setAlternativeCosts',
'official_distance' => 'setOfficialDistance',
'toll_road_type' => 'setTollRoadType',
'country' => 'setCountry',
'toll_system_index' => 'setTollSystemIndex',
'start_node_index' => 'setStartNodeIndex',
'end_node_index' => 'setEndNodeIndex',
'display_name' => 'setDisplayName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost' => 'getCost',
'alternative_costs' => 'getAlternativeCosts',
'official_distance' => 'getOfficialDistance',
'toll_road_type' => 'getTollRoadType',
'country' => 'getCountry',
'toll_system_index' => 'getTollSystemIndex',
'start_node_index' => 'getStartNodeIndex',
'end_node_index' => 'getEndNodeIndex',
'display_name' => 'getDisplayName'    ];

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
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['alternative_costs'] = isset($data['alternative_costs']) ? $data['alternative_costs'] : null;
        $this->container['official_distance'] = isset($data['official_distance']) ? $data['official_distance'] : null;
        $this->container['toll_road_type'] = isset($data['toll_road_type']) ? $data['toll_road_type'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['toll_system_index'] = isset($data['toll_system_index']) ? $data['toll_system_index'] : null;
        $this->container['start_node_index'] = isset($data['start_node_index']) ? $data['start_node_index'] : null;
        $this->container['end_node_index'] = isset($data['end_node_index']) ? $data['end_node_index'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
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
     * Gets cost
     *
     * @return \ithings\ptvxserver\model\TollCost
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \ithings\ptvxserver\model\TollCost $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets alternative_costs
     *
     * @return \ithings\ptvxserver\model\TollCost[]
     */
    public function getAlternativeCosts()
    {
        return $this->container['alternative_costs'];
    }

    /**
     * Sets alternative_costs
     *
     * @param \ithings\ptvxserver\model\TollCost[] $alternative_costs alternative_costs
     *
     * @return $this
     */
    public function setAlternativeCosts($alternative_costs)
    {
        $this->container['alternative_costs'] = $alternative_costs;

        return $this;
    }

    /**
     * Gets official_distance
     *
     * @return \ithings\ptvxserver\model\Distance
     */
    public function getOfficialDistance()
    {
        return $this->container['official_distance'];
    }

    /**
     * Sets official_distance
     *
     * @param \ithings\ptvxserver\model\Distance $official_distance official_distance
     *
     * @return $this
     */
    public function setOfficialDistance($official_distance)
    {
        $this->container['official_distance'] = $official_distance;

        return $this;
    }

    /**
     * Gets toll_road_type
     *
     * @return \ithings\ptvxserver\model\TollRoadType
     */
    public function getTollRoadType()
    {
        return $this->container['toll_road_type'];
    }

    /**
     * Sets toll_road_type
     *
     * @param \ithings\ptvxserver\model\TollRoadType $toll_road_type toll_road_type
     *
     * @return $this
     */
    public function setTollRoadType($toll_road_type)
    {
        $this->container['toll_road_type'] = $toll_road_type;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \ithings\ptvxserver\model\CountryCode
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \ithings\ptvxserver\model\CountryCode $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets toll_system_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getTollSystemIndex()
    {
        return $this->container['toll_system_index'];
    }

    /**
     * Sets toll_system_index
     *
     * @param \ithings\ptvxserver\model\Index $toll_system_index toll_system_index
     *
     * @return $this
     */
    public function setTollSystemIndex($toll_system_index)
    {
        $this->container['toll_system_index'] = $toll_system_index;

        return $this;
    }

    /**
     * Gets start_node_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getStartNodeIndex()
    {
        return $this->container['start_node_index'];
    }

    /**
     * Sets start_node_index
     *
     * @param \ithings\ptvxserver\model\Index $start_node_index start_node_index
     *
     * @return $this
     */
    public function setStartNodeIndex($start_node_index)
    {
        $this->container['start_node_index'] = $start_node_index;

        return $this;
    }

    /**
     * Gets end_node_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getEndNodeIndex()
    {
        return $this->container['end_node_index'];
    }

    /**
     * Sets end_node_index
     *
     * @param \ithings\ptvxserver\model\Index $end_node_index end_node_index
     *
     * @return $this
     */
    public function setEndNodeIndex($end_node_index)
    {
        $this->container['end_node_index'] = $end_node_index;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name A name that characterizes the toll section. For example it can relate to the names of the road intersections, to the area in general or to the type of toll.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
