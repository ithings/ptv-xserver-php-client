<?php
/**
 * DistanceMatrixOptions
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
 * DistanceMatrixOptions Class Doc Comment
 *
 * @category Class
 * @description This type represents options of a distance matrix. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.dima.DistanceMatrixOptions
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DistanceMatrixOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DistanceMatrixOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'time_consideration' => '\ithings\ptvxserver\model\TimeConsideration',
'content_snapshot_id' => 'string',
'high_performance_routing_network_id' => 'string',
'geographic_restrictions' => '\ithings\ptvxserver\model\GeographicRestrictions',
'detour_factor' => 'double',
'average_speed' => '\ithings\ptvxserver\model\Speed',
'routing_type' => '\ithings\ptvxserver\model\RoutingType',
'persist_toll_costs' => 'bool',
'currency' => '\ithings\ptvxserver\model\CurrencyCode',
'binary_feature_layer' => '\ithings\ptvxserver\model\EncodedContent',
'exchange_rates' => '\ithings\ptvxserver\model\ExchangeRates'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'time_consideration' => null,
'content_snapshot_id' => null,
'high_performance_routing_network_id' => null,
'geographic_restrictions' => null,
'detour_factor' => 'double',
'average_speed' => null,
'routing_type' => null,
'persist_toll_costs' => null,
'currency' => null,
'binary_feature_layer' => null,
'exchange_rates' => null    ];

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
        'time_consideration' => 'timeConsideration',
'content_snapshot_id' => 'contentSnapshotId',
'high_performance_routing_network_id' => 'highPerformanceRoutingNetworkId',
'geographic_restrictions' => 'geographicRestrictions',
'detour_factor' => 'detourFactor',
'average_speed' => 'averageSpeed',
'routing_type' => 'routingType',
'persist_toll_costs' => 'persistTollCosts',
'currency' => 'currency',
'binary_feature_layer' => 'binaryFeatureLayer',
'exchange_rates' => 'exchangeRates'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time_consideration' => 'setTimeConsideration',
'content_snapshot_id' => 'setContentSnapshotId',
'high_performance_routing_network_id' => 'setHighPerformanceRoutingNetworkId',
'geographic_restrictions' => 'setGeographicRestrictions',
'detour_factor' => 'setDetourFactor',
'average_speed' => 'setAverageSpeed',
'routing_type' => 'setRoutingType',
'persist_toll_costs' => 'setPersistTollCosts',
'currency' => 'setCurrency',
'binary_feature_layer' => 'setBinaryFeatureLayer',
'exchange_rates' => 'setExchangeRates'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time_consideration' => 'getTimeConsideration',
'content_snapshot_id' => 'getContentSnapshotId',
'high_performance_routing_network_id' => 'getHighPerformanceRoutingNetworkId',
'geographic_restrictions' => 'getGeographicRestrictions',
'detour_factor' => 'getDetourFactor',
'average_speed' => 'getAverageSpeed',
'routing_type' => 'getRoutingType',
'persist_toll_costs' => 'getPersistTollCosts',
'currency' => 'getCurrency',
'binary_feature_layer' => 'getBinaryFeatureLayer',
'exchange_rates' => 'getExchangeRates'    ];

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
        $this->container['time_consideration'] = isset($data['time_consideration']) ? $data['time_consideration'] : null;
        $this->container['content_snapshot_id'] = isset($data['content_snapshot_id']) ? $data['content_snapshot_id'] : null;
        $this->container['high_performance_routing_network_id'] = isset($data['high_performance_routing_network_id']) ? $data['high_performance_routing_network_id'] : null;
        $this->container['geographic_restrictions'] = isset($data['geographic_restrictions']) ? $data['geographic_restrictions'] : null;
        $this->container['detour_factor'] = isset($data['detour_factor']) ? $data['detour_factor'] : null;
        $this->container['average_speed'] = isset($data['average_speed']) ? $data['average_speed'] : null;
        $this->container['routing_type'] = isset($data['routing_type']) ? $data['routing_type'] : null;
        $this->container['persist_toll_costs'] = isset($data['persist_toll_costs']) ? $data['persist_toll_costs'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['binary_feature_layer'] = isset($data['binary_feature_layer']) ? $data['binary_feature_layer'] : null;
        $this->container['exchange_rates'] = isset($data['exchange_rates']) ? $data['exchange_rates'] : null;
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
     * Gets time_consideration
     *
     * @return \ithings\ptvxserver\model\TimeConsideration
     */
    public function getTimeConsideration()
    {
        return $this->container['time_consideration'];
    }

    /**
     * Sets time_consideration
     *
     * @param \ithings\ptvxserver\model\TimeConsideration $time_consideration time_consideration
     *
     * @return $this
     */
    public function setTimeConsideration($time_consideration)
    {
        $this->container['time_consideration'] = $time_consideration;

        return $this;
    }

    /**
     * Gets content_snapshot_id
     *
     * @return string
     */
    public function getContentSnapshotId()
    {
        return $this->container['content_snapshot_id'];
    }

    /**
     * Sets content_snapshot_id
     *
     * @param string $content_snapshot_id Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used.
     *
     * @return $this
     */
    public function setContentSnapshotId($content_snapshot_id)
    {
        $this->container['content_snapshot_id'] = $content_snapshot_id;

        return $this;
    }

    /**
     * Gets high_performance_routing_network_id
     *
     * @return string
     */
    public function getHighPerformanceRoutingNetworkId()
    {
        return $this->container['high_performance_routing_network_id'];
    }

    /**
     * Sets high_performance_routing_network_id
     *
     * @param string $high_performance_routing_network_id Specifies the high-performance routing network to use. Besides, the routing type must be explicitly set to RoutingType.HIGH\\_PERFORMANCE\\_ROUTING otherwise a exceptions.ParameterConflictException is thrown. The profile and request parameters of the high-performance routing network are used for linking and routing. The stored profile of the service.RequestBase will be ignored. Throws a exceptions.DataNotAvailableException if the high-performance routing network with the given id does not exist.
     *
     * @return $this
     */
    public function setHighPerformanceRoutingNetworkId($high_performance_routing_network_id)
    {
        $this->container['high_performance_routing_network_id'] = $high_performance_routing_network_id;

        return $this;
    }

    /**
     * Gets geographic_restrictions
     *
     * @return \ithings\ptvxserver\model\GeographicRestrictions
     */
    public function getGeographicRestrictions()
    {
        return $this->container['geographic_restrictions'];
    }

    /**
     * Sets geographic_restrictions
     *
     * @param \ithings\ptvxserver\model\GeographicRestrictions $geographic_restrictions geographic_restrictions
     *
     * @return $this
     */
    public function setGeographicRestrictions($geographic_restrictions)
    {
        $this->container['geographic_restrictions'] = $geographic_restrictions;

        return $this;
    }

    /**
     * Gets detour_factor
     *
     * @return double
     */
    public function getDetourFactor()
    {
        return $this->container['detour_factor'];
    }

    /**
     * Sets detour_factor
     *
     * @param double $detour_factor A factor that describes the average detour an actual route on the road requires, compared to the direct distance. This factor is used to approximate a relation that could not be calculated using the road network.
     *
     * @return $this
     */
    public function setDetourFactor($detour_factor)
    {
        $this->container['detour_factor'] = $detour_factor;

        return $this;
    }

    /**
     * Gets average_speed
     *
     * @return \ithings\ptvxserver\model\Speed
     */
    public function getAverageSpeed()
    {
        return $this->container['average_speed'];
    }

    /**
     * Sets average_speed
     *
     * @param \ithings\ptvxserver\model\Speed $average_speed average_speed
     *
     * @return $this
     */
    public function setAverageSpeed($average_speed)
    {
        $this->container['average_speed'] = $average_speed;

        return $this;
    }

    /**
     * Gets routing_type
     *
     * @return \ithings\ptvxserver\model\RoutingType
     */
    public function getRoutingType()
    {
        return $this->container['routing_type'];
    }

    /**
     * Sets routing_type
     *
     * @param \ithings\ptvxserver\model\RoutingType $routing_type routing_type
     *
     * @return $this
     */
    public function setRoutingType($routing_type)
    {
        $this->container['routing_type'] = $routing_type;

        return $this;
    }

    /**
     * Gets persist_toll_costs
     *
     * @return bool
     */
    public function getPersistTollCosts()
    {
        return $this->container['persist_toll_costs'];
    }

    /**
     * Sets persist_toll_costs
     *
     * @param bool $persist_toll_costs Specifies whether to calculate and persist the toll costs of each relation in the distance matrix.    The toll costs are persisted and returned in one currency. If no currency is set in the request, an exception is thrown.    Note that the aggregated toll costs returned by the xDima service can differ slightly from the toll costs returned by the xRoute service because price calculation, currency conversion and rounding is carried out in a different order.
     *
     * @return $this
     */
    public function setPersistTollCosts($persist_toll_costs)
    {
        $this->container['persist_toll_costs'] = $persist_toll_costs;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \ithings\ptvxserver\model\CurrencyCode
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \ithings\ptvxserver\model\CurrencyCode $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets binary_feature_layer
     *
     * @return \ithings\ptvxserver\model\EncodedContent
     */
    public function getBinaryFeatureLayer()
    {
        return $this->container['binary_feature_layer'];
    }

    /**
     * Sets binary_feature_layer
     *
     * @param \ithings\ptvxserver\model\EncodedContent $binary_feature_layer binary_feature_layer
     *
     * @return $this
     */
    public function setBinaryFeatureLayer($binary_feature_layer)
    {
        $this->container['binary_feature_layer'] = $binary_feature_layer;

        return $this;
    }

    /**
     * Gets exchange_rates
     *
     * @return \ithings\ptvxserver\model\ExchangeRates
     */
    public function getExchangeRates()
    {
        return $this->container['exchange_rates'];
    }

    /**
     * Sets exchange_rates
     *
     * @param \ithings\ptvxserver\model\ExchangeRates $exchange_rates exchange_rates
     *
     * @return $this
     */
    public function setExchangeRates($exchange_rates)
    {
        $this->container['exchange_rates'] = $exchange_rates;

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
