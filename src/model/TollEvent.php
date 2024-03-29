<?php
/**
 * TollEvent
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
 * TollEvent Class Doc Comment
 *
 * @category Class
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TollEvent extends RouteEvent 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TollEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'section_index' => '\ithings\ptvxserver\model\Index',
'display_name' => 'string',
'access_type' => '\ithings\ptvxserver\model\AccessType',
'related_event_index' => '\ithings\ptvxserver\model\Index'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'section_index' => null,
'display_name' => null,
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
        'section_index' => 'sectionIndex',
'display_name' => 'displayName',
'access_type' => 'accessType',
'related_event_index' => 'relatedEventIndex'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'section_index' => 'setSectionIndex',
'display_name' => 'setDisplayName',
'access_type' => 'setAccessType',
'related_event_index' => 'setRelatedEventIndex'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'section_index' => 'getSectionIndex',
'display_name' => 'getDisplayName',
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

        $this->container['section_index'] = isset($data['section_index']) ? $data['section_index'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
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
     * Gets section_index
     *
     * @return \ithings\ptvxserver\model\Index
     */
    public function getSectionIndex()
    {
        return $this->container['section_index'];
    }

    /**
     * Sets section_index
     *
     * @param \ithings\ptvxserver\model\Index $section_index section_index
     *
     * @return $this
     */
    public function setSectionIndex($section_index)
    {
        $this->container['section_index'] = $section_index;

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
     * @param string $display_name The display name of the toll event. It is only populated if a name is available. For example, this name can be a toll location name defined by the toll operator.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets access_type
     *
     * @return \ithings\ptvxserver\model\AccessType
     */
    public function getAccessType()
    {
        return $this->container['access_type'];
    }

    /**
     * Sets access_type
     *
     * @param \ithings\ptvxserver\model\AccessType $access_type access_type
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
     * @return \ithings\ptvxserver\model\Index
     */
    public function getRelatedEventIndex()
    {
        return $this->container['related_event_index'];
    }

    /**
     * Sets related_event_index
     *
     * @param \ithings\ptvxserver\model\Index $related_event_index related_event_index
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
