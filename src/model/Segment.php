<?php
/**
 * Segment
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
 * Segment Class Doc Comment
 *
 * @category Class
 * @description A segment is defined by a start- and an end-node, which in turn will represent some geographic location. A segment may carry additional attributes and will add to the duration of a journey. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xroute.Segment
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Segment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Segment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_node_index' => '\ithings\ptvxserver\model\Index',
'end_node_index' => '\ithings\ptvxserver\model\Index',
'distance' => 'float',
'travel_time' => '\ithings\ptvxserver\model\Duration',
'travel_speed' => '\ithings\ptvxserver\model\Speed',
'traffic_delay' => '\ithings\ptvxserver\model\Duration',
'emissions' => '\ithings\ptvxserver\model\Emissions',
'violated' => 'bool',
'event_indices' => '\ithings\ptvxserver\model\Index[]',
'type' => '\ithings\ptvxserver\model\SegmentType',
'polyline' => '\ithings\ptvxserver\model\EncodedGeometry',
'attributes' => '\ithings\ptvxserver\model\SegmentAttributes',
'combined_transport' => '\ithings\ptvxserver\model\CombinedTransportAttributes',
'id' => '\ithings\ptvxserver\model\SegmentId'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_node_index' => null,
'end_node_index' => null,
'distance' => null,
'travel_time' => null,
'travel_speed' => null,
'traffic_delay' => null,
'emissions' => null,
'violated' => null,
'event_indices' => null,
'type' => null,
'polyline' => null,
'attributes' => null,
'combined_transport' => null,
'id' => null    ];

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
        'start_node_index' => 'startNodeIndex',
'end_node_index' => 'endNodeIndex',
'distance' => 'distance',
'travel_time' => 'travelTime',
'travel_speed' => 'travelSpeed',
'traffic_delay' => 'trafficDelay',
'emissions' => 'emissions',
'violated' => 'violated',
'event_indices' => 'eventIndices',
'type' => 'type',
'polyline' => 'polyline',
'attributes' => 'attributes',
'combined_transport' => 'combinedTransport',
'id' => 'id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_node_index' => 'setStartNodeIndex',
'end_node_index' => 'setEndNodeIndex',
'distance' => 'setDistance',
'travel_time' => 'setTravelTime',
'travel_speed' => 'setTravelSpeed',
'traffic_delay' => 'setTrafficDelay',
'emissions' => 'setEmissions',
'violated' => 'setViolated',
'event_indices' => 'setEventIndices',
'type' => 'setType',
'polyline' => 'setPolyline',
'attributes' => 'setAttributes',
'combined_transport' => 'setCombinedTransport',
'id' => 'setId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_node_index' => 'getStartNodeIndex',
'end_node_index' => 'getEndNodeIndex',
'distance' => 'getDistance',
'travel_time' => 'getTravelTime',
'travel_speed' => 'getTravelSpeed',
'traffic_delay' => 'getTrafficDelay',
'emissions' => 'getEmissions',
'violated' => 'getViolated',
'event_indices' => 'getEventIndices',
'type' => 'getType',
'polyline' => 'getPolyline',
'attributes' => 'getAttributes',
'combined_transport' => 'getCombinedTransport',
'id' => 'getId'    ];

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
        $this->container['start_node_index'] = isset($data['start_node_index']) ? $data['start_node_index'] : null;
        $this->container['end_node_index'] = isset($data['end_node_index']) ? $data['end_node_index'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['travel_time'] = isset($data['travel_time']) ? $data['travel_time'] : null;
        $this->container['travel_speed'] = isset($data['travel_speed']) ? $data['travel_speed'] : null;
        $this->container['traffic_delay'] = isset($data['traffic_delay']) ? $data['traffic_delay'] : null;
        $this->container['emissions'] = isset($data['emissions']) ? $data['emissions'] : null;
        $this->container['violated'] = isset($data['violated']) ? $data['violated'] : null;
        $this->container['event_indices'] = isset($data['event_indices']) ? $data['event_indices'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['polyline'] = isset($data['polyline']) ? $data['polyline'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['combined_transport'] = isset($data['combined_transport']) ? $data['combined_transport'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['travel_time'] === null) {
            $invalidProperties[] = "'travel_time' can't be null";
        }
        if ($this->container['travel_speed'] === null) {
            $invalidProperties[] = "'travel_speed' can't be null";
        }
        if ($this->container['violated'] === null) {
            $invalidProperties[] = "'violated' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance The travel distance for the segment. It is always a whole number and depends on the segment type as follows.     *  segments.SegmentType.NETWORK\\_SEGMENT. The distance on the network segment which is actually driven on.   *  segments.SegmentType.LINK\\_SEGMENT. The air-line distance between input and link node.   *  segments.SegmentType.COMBINED\\_TRANSPORT. The travel distance is always 0.   *  segments.SegmentType.NOT\\_DRIVING. The travel distance is always 0.
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets travel_time
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getTravelTime()
    {
        return $this->container['travel_time'];
    }

    /**
     * Sets travel_time
     *
     * @param \ithings\ptvxserver\model\Duration $travel_time travel_time
     *
     * @return $this
     */
    public function setTravelTime($travel_time)
    {
        $this->container['travel_time'] = $travel_time;

        return $this;
    }

    /**
     * Gets travel_speed
     *
     * @return \ithings\ptvxserver\model\Speed
     */
    public function getTravelSpeed()
    {
        return $this->container['travel_speed'];
    }

    /**
     * Sets travel_speed
     *
     * @param \ithings\ptvxserver\model\Speed $travel_speed travel_speed
     *
     * @return $this
     */
    public function setTravelSpeed($travel_speed)
    {
        $this->container['travel_speed'] = $travel_speed;

        return $this;
    }

    /**
     * Gets traffic_delay
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getTrafficDelay()
    {
        return $this->container['traffic_delay'];
    }

    /**
     * Sets traffic_delay
     *
     * @param \ithings\ptvxserver\model\Duration $traffic_delay traffic_delay
     *
     * @return $this
     */
    public function setTrafficDelay($traffic_delay)
    {
        $this->container['traffic_delay'] = $traffic_delay;

        return $this;
    }

    /**
     * Gets emissions
     *
     * @return \ithings\ptvxserver\model\Emissions
     */
    public function getEmissions()
    {
        return $this->container['emissions'];
    }

    /**
     * Sets emissions
     *
     * @param \ithings\ptvxserver\model\Emissions $emissions emissions
     *
     * @return $this
     */
    public function setEmissions($emissions)
    {
        $this->container['emissions'] = $emissions;

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
     * @param bool $violated If set to true, indicates that this segment contains a violation for the chosen vehicle.
     *
     * @return $this
     */
    public function setViolated($violated)
    {
        $this->container['violated'] = $violated;

        return $this;
    }

    /**
     * Gets event_indices
     *
     * @return \ithings\ptvxserver\model\Index[]
     */
    public function getEventIndices()
    {
        return $this->container['event_indices'];
    }

    /**
     * Sets event_indices
     *
     * @param \ithings\ptvxserver\model\Index[] $event_indices event_indices
     *
     * @return $this
     */
    public function setEventIndices($event_indices)
    {
        $this->container['event_indices'] = $event_indices;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \ithings\ptvxserver\model\SegmentType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \ithings\ptvxserver\model\SegmentType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets polyline
     *
     * @return \ithings\ptvxserver\model\EncodedGeometry
     */
    public function getPolyline()
    {
        return $this->container['polyline'];
    }

    /**
     * Sets polyline
     *
     * @param \ithings\ptvxserver\model\EncodedGeometry $polyline polyline
     *
     * @return $this
     */
    public function setPolyline($polyline)
    {
        $this->container['polyline'] = $polyline;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \ithings\ptvxserver\model\SegmentAttributes
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \ithings\ptvxserver\model\SegmentAttributes $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets combined_transport
     *
     * @return \ithings\ptvxserver\model\CombinedTransportAttributes
     */
    public function getCombinedTransport()
    {
        return $this->container['combined_transport'];
    }

    /**
     * Sets combined_transport
     *
     * @param \ithings\ptvxserver\model\CombinedTransportAttributes $combined_transport combined_transport
     *
     * @return $this
     */
    public function setCombinedTransport($combined_transport)
    {
        $this->container['combined_transport'] = $combined_transport;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \ithings\ptvxserver\model\SegmentId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \ithings\ptvxserver\model\SegmentId $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
