<?php
/**
 * ServerConfigurationResponse
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
 * ServerConfigurationResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServerConfigurationResponse extends ResponseBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServerConfigurationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version' => 'string',
'profiles' => '\Swagger\Client\Model\ProfileDescription[]',
'config_file_names' => '\Swagger\Client\Model\FileName[]',
'used3rd_party_libraries' => '\Swagger\Client\Model\Library[]',
'internal_libraries' => '\Swagger\Client\Model\Library[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version' => null,
'profiles' => null,
'config_file_names' => null,
'used3rd_party_libraries' => null,
'internal_libraries' => null    ];

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
        'version' => 'version',
'profiles' => 'profiles',
'config_file_names' => 'configFileNames',
'used3rd_party_libraries' => 'used3rdPartyLibraries',
'internal_libraries' => 'internalLibraries'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
'profiles' => 'setProfiles',
'config_file_names' => 'setConfigFileNames',
'used3rd_party_libraries' => 'setUsed3rdPartyLibraries',
'internal_libraries' => 'setInternalLibraries'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
'profiles' => 'getProfiles',
'config_file_names' => 'getConfigFileNames',
'used3rd_party_libraries' => 'getUsed3rdPartyLibraries',
'internal_libraries' => 'getInternalLibraries'    ];

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

        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['config_file_names'] = isset($data['config_file_names']) ? $data['config_file_names'] : null;
        $this->container['used3rd_party_libraries'] = isset($data['used3rd_party_libraries']) ? $data['used3rd_party_libraries'] : null;
        $this->container['internal_libraries'] = isset($data['internal_libraries']) ? $data['internal_libraries'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The xServer version.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \Swagger\Client\Model\ProfileDescription[]
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \Swagger\Client\Model\ProfileDescription[] $profiles profiles
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets config_file_names
     *
     * @return \Swagger\Client\Model\FileName[]
     */
    public function getConfigFileNames()
    {
        return $this->container['config_file_names'];
    }

    /**
     * Sets config_file_names
     *
     * @param \Swagger\Client\Model\FileName[] $config_file_names config_file_names
     *
     * @return $this
     */
    public function setConfigFileNames($config_file_names)
    {
        $this->container['config_file_names'] = $config_file_names;

        return $this;
    }

    /**
     * Gets used3rd_party_libraries
     *
     * @return \Swagger\Client\Model\Library[]
     */
    public function getUsed3rdPartyLibraries()
    {
        return $this->container['used3rd_party_libraries'];
    }

    /**
     * Sets used3rd_party_libraries
     *
     * @param \Swagger\Client\Model\Library[] $used3rd_party_libraries used3rd_party_libraries
     *
     * @return $this
     */
    public function setUsed3rdPartyLibraries($used3rd_party_libraries)
    {
        $this->container['used3rd_party_libraries'] = $used3rd_party_libraries;

        return $this;
    }

    /**
     * Gets internal_libraries
     *
     * @return \Swagger\Client\Model\Library[]
     */
    public function getInternalLibraries()
    {
        return $this->container['internal_libraries'];
    }

    /**
     * Sets internal_libraries
     *
     * @param \Swagger\Client\Model\Library[] $internal_libraries internal_libraries
     *
     * @return $this
     */
    public function setInternalLibraries($internal_libraries)
    {
        $this->container['internal_libraries'] = $internal_libraries;

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
