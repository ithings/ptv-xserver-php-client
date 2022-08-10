<?php
/**
 * DepotSite
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
 * DepotSite Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DepotSite extends Site 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DepotSite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_service_time_per_pickup_stop' => '\ithings\ptvxserver\model\Duration',
'additional_service_time_per_delivery_stop' => '\ithings\ptvxserver\model\Duration'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_service_time_per_pickup_stop' => null,
'additional_service_time_per_delivery_stop' => null    ];

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
        'additional_service_time_per_pickup_stop' => 'additionalServiceTimePerPickupStop',
'additional_service_time_per_delivery_stop' => 'additionalServiceTimePerDeliveryStop'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_service_time_per_pickup_stop' => 'setAdditionalServiceTimePerPickupStop',
'additional_service_time_per_delivery_stop' => 'setAdditionalServiceTimePerDeliveryStop'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_service_time_per_pickup_stop' => 'getAdditionalServiceTimePerPickupStop',
'additional_service_time_per_delivery_stop' => 'getAdditionalServiceTimePerDeliveryStop'    ];

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

        $this->container['additional_service_time_per_pickup_stop'] = isset($data['additional_service_time_per_pickup_stop']) ? $data['additional_service_time_per_pickup_stop'] : null;
        $this->container['additional_service_time_per_delivery_stop'] = isset($data['additional_service_time_per_delivery_stop']) ? $data['additional_service_time_per_delivery_stop'] : null;
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
     * Gets additional_service_time_per_pickup_stop
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getAdditionalServiceTimePerPickupStop()
    {
        return $this->container['additional_service_time_per_pickup_stop'];
    }

    /**
     * Sets additional_service_time_per_pickup_stop
     *
     * @param \ithings\ptvxserver\model\Duration $additional_service_time_per_pickup_stop additional_service_time_per_pickup_stop
     *
     * @return $this
     */
    public function setAdditionalServiceTimePerPickupStop($additional_service_time_per_pickup_stop)
    {
        $this->container['additional_service_time_per_pickup_stop'] = $additional_service_time_per_pickup_stop;

        return $this;
    }

    /**
     * Gets additional_service_time_per_delivery_stop
     *
     * @return \ithings\ptvxserver\model\Duration
     */
    public function getAdditionalServiceTimePerDeliveryStop()
    {
        return $this->container['additional_service_time_per_delivery_stop'];
    }

    /**
     * Sets additional_service_time_per_delivery_stop
     *
     * @param \ithings\ptvxserver\model\Duration $additional_service_time_per_delivery_stop additional_service_time_per_delivery_stop
     *
     * @return $this
     */
    public function setAdditionalServiceTimePerDeliveryStop($additional_service_time_per_delivery_stop)
    {
        $this->container['additional_service_time_per_delivery_stop'] = $additional_service_time_per_delivery_stop;

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
