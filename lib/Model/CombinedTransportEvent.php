<?php
/**
 * CombinedTransportEvent
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
 * CombinedTransportEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CombinedTransportEvent extends RouteEvent 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CombinedTransportEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'combined_transport_id' => '\Swagger\Client\Model\SegmentId',
'combined_transport_name' => 'string',
'combined_transport_type' => '\Swagger\Client\Model\CombinedTransportType',
'access_type' => '\Swagger\Client\Model\AccessType',
'related_event_index' => '\Swagger\Client\Model\Index'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'combined_transport_id' => null,
'combined_transport_name' => null,
'combined_transport_type' => null,
'access_type' => null,
'related_event_index' => null    ];

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
        'combined_transport_id' => 'combinedTransportId',
'combined_transport_name' => 'combinedTransportName',
'combined_transport_type' => 'combinedTransportType',
'access_type' => 'accessType',
'related_event_index' => 'relatedEventIndex'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'combined_transport_id' => 'setCombinedTransportId',
'combined_transport_name' => 'setCombinedTransportName',
'combined_transport_type' => 'setCombinedTransportType',
'access_type' => 'setAccessType',
'related_event_index' => 'setRelatedEventIndex'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'combined_transport_id' => 'getCombinedTransportId',
'combined_transport_name' => 'getCombinedTransportName',
'combined_transport_type' => 'getCombinedTransportType',
'access_type' => 'getAccessType',
'related_event_index' => 'getRelatedEventIndex'    ];

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

        $this->container['combined_transport_id'] = isset($data['combined_transport_id']) ? $data['combined_transport_id'] : null;
        $this->container['combined_transport_name'] = isset($data['combined_transport_name']) ? $data['combined_transport_name'] : null;
        $this->container['combined_transport_type'] = isset($data['combined_transport_type']) ? $data['combined_transport_type'] : null;
        $this->container['access_type'] = isset($data['access_type']) ? $data['access_type'] : null;
        $this->container['related_event_index'] = isset($data['related_event_index']) ? $data['related_event_index'] : null;
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
     * Gets combined_transport_id
     *
     * @return \Swagger\Client\Model\SegmentId
     */
    public function getCombinedTransportId()
    {
        return $this->container['combined_transport_id'];
    }

    /**
     * Sets combined_transport_id
     *
     * @param \Swagger\Client\Model\SegmentId $combined_transport_id combined_transport_id
     *
     * @return $this
     */
    public function setCombinedTransportId($combined_transport_id)
    {
        $this->container['combined_transport_id'] = $combined_transport_id;

        return $this;
    }

    /**
     * Gets combined_transport_name
     *
     * @return string
     */
    public function getCombinedTransportName()
    {
        return $this->container['combined_transport_name'];
    }

    /**
     * Sets combined_transport_name
     *
     * @param string $combined_transport_name The name of the combined transport.
     *
     * @return $this
     */
    public function setCombinedTransportName($combined_transport_name)
    {
        $this->container['combined_transport_name'] = $combined_transport_name;

        return $this;
    }

    /**
     * Gets combined_transport_type
     *
     * @return \Swagger\Client\Model\CombinedTransportType
     */
    public function getCombinedTransportType()
    {
        return $this->container['combined_transport_type'];
    }

    /**
     * Sets combined_transport_type
     *
     * @param \Swagger\Client\Model\CombinedTransportType $combined_transport_type combined_transport_type
     *
     * @return $this
     */
    public function setCombinedTransportType($combined_transport_type)
    {
        $this->container['combined_transport_type'] = $combined_transport_type;

        return $this;
    }

    /**
     * Gets access_type
     *
     * @return \Swagger\Client\Model\AccessType
     */
    public function getAccessType()
    {
        return $this->container['access_type'];
    }

    /**
     * Sets access_type
     *
     * @param \Swagger\Client\Model\AccessType $access_type access_type
     *
     * @return $this
     */
    public function setAccessType($access_type)
    {
        $this->container['access_type'] = $access_type;

        return $this;
    }

    /**
     * Gets related_event_index
     *
     * @return \Swagger\Client\Model\Index
     */
    public function getRelatedEventIndex()
    {
        return $this->container['related_event_index'];
    }

    /**
     * Sets related_event_index
     *
     * @param \Swagger\Client\Model\Index $related_event_index related_event_index
     *
     * @return $this
     */
    public function setRelatedEventIndex($related_event_index)
    {
        $this->container['related_event_index'] = $related_event_index;

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
