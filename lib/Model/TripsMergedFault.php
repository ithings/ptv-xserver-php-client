<?php
/**
 * TripsMergedFault
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
 * TripsMergedFault Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TripsMergedFault extends TourStructureFault 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TripsMergedFault';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vehicle_id' => 'string',
'trip_id_a' => 'string',
'trip_id_b' => 'string',
'object_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vehicle_id' => null,
'trip_id_a' => null,
'trip_id_b' => null,
'object_id' => null    ];

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
        'vehicle_id' => 'vehicleId',
'trip_id_a' => 'tripIdA',
'trip_id_b' => 'tripIdB',
'object_id' => 'objectId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vehicle_id' => 'setVehicleId',
'trip_id_a' => 'setTripIdA',
'trip_id_b' => 'setTripIdB',
'object_id' => 'setObjectId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vehicle_id' => 'getVehicleId',
'trip_id_a' => 'getTripIdA',
'trip_id_b' => 'getTripIdB',
'object_id' => 'getObjectId'    ];

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

        $this->container['vehicle_id'] = isset($data['vehicle_id']) ? $data['vehicle_id'] : null;
        $this->container['trip_id_a'] = isset($data['trip_id_a']) ? $data['trip_id_a'] : null;
        $this->container['trip_id_b'] = isset($data['trip_id_b']) ? $data['trip_id_b'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['vehicle_id'] === null) {
            $invalidProperties[] = "'vehicle_id' can't be null";
        }
        if ($this->container['trip_id_a'] === null) {
            $invalidProperties[] = "'trip_id_a' can't be null";
        }
        if ($this->container['trip_id_b'] === null) {
            $invalidProperties[] = "'trip_id_b' can't be null";
        }
        if ($this->container['object_id'] === null) {
            $invalidProperties[] = "'object_id' can't be null";
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
     * Gets vehicle_id
     *
     * @return string
     */
    public function getVehicleId()
    {
        return $this->container['vehicle_id'];
    }

    /**
     * Sets vehicle_id
     *
     * @param string $vehicle_id ID of the vehicle that would serve a tour with invalid structure.
     *
     * @return $this
     */
    public function setVehicleId($vehicle_id)
    {
        $this->container['vehicle_id'] = $vehicle_id;

        return $this;
    }

    /**
     * Gets trip_id_a
     *
     * @return string
     */
    public function getTripIdA()
    {
        return $this->container['trip_id_a'];
    }

    /**
     * Sets trip_id_a
     *
     * @param string $trip_id_a ID of the trip that would be merged with the trip corresponding to tripIdB.
     *
     * @return $this
     */
    public function setTripIdA($trip_id_a)
    {
        $this->container['trip_id_a'] = $trip_id_a;

        return $this;
    }

    /**
     * Gets trip_id_b
     *
     * @return string
     */
    public function getTripIdB()
    {
        return $this->container['trip_id_b'];
    }

    /**
     * Sets trip_id_b
     *
     * @param string $trip_id_b ID of the trip that would be merged with the trip corresponding to tripIdA.
     *
     * @return $this
     */
    public function setTripIdB($trip_id_b)
    {
        $this->container['trip_id_b'] = $trip_id_b;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string $object_id ID of the object in the ChangeToursAction that would cause the merge of two trips.     *  In case of a move trips action it will be a tripId.   *  In case of a move orders action it will be an orderId.   *  In case of a remove orders action it will be an orderId.   *  In case of a remove trips action it will be a tripId.   *  In case of a move stops action it will be the position of a stop within the trip (either the position of the moved stop itself or of the stop containing the corresponding partner task).
     *
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

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
