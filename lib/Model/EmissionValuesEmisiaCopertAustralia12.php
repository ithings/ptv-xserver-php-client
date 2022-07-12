<?php
/**
 * EmissionValuesEmisiaCopertAustralia12
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
 * EmissionValuesEmisiaCopertAustralia12 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmissionValuesEmisiaCopertAustralia12 extends EmissionValues 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmissionValues_Emisia_Copert_Australia_1_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value_scenario_type' => '\Swagger\Client\Model\EmissionValueScenarioTypeEmisiaCopertAustralia12',
'carbon_dioxide' => '\Swagger\Client\Model\Kilograms',
'fuel_consumption' => '\Swagger\Client\Model\Kilograms'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value_scenario_type' => null,
'carbon_dioxide' => null,
'fuel_consumption' => null    ];

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
        'value_scenario_type' => 'valueScenarioType',
'carbon_dioxide' => 'carbonDioxide',
'fuel_consumption' => 'fuelConsumption'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value_scenario_type' => 'setValueScenarioType',
'carbon_dioxide' => 'setCarbonDioxide',
'fuel_consumption' => 'setFuelConsumption'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value_scenario_type' => 'getValueScenarioType',
'carbon_dioxide' => 'getCarbonDioxide',
'fuel_consumption' => 'getFuelConsumption'    ];

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

        $this->container['value_scenario_type'] = isset($data['value_scenario_type']) ? $data['value_scenario_type'] : null;
        $this->container['carbon_dioxide'] = isset($data['carbon_dioxide']) ? $data['carbon_dioxide'] : null;
        $this->container['fuel_consumption'] = isset($data['fuel_consumption']) ? $data['fuel_consumption'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['value_scenario_type'] === null) {
            $invalidProperties[] = "'value_scenario_type' can't be null";
        }
        if ($this->container['carbon_dioxide'] === null) {
            $invalidProperties[] = "'carbon_dioxide' can't be null";
        }
        if ($this->container['fuel_consumption'] === null) {
            $invalidProperties[] = "'fuel_consumption' can't be null";
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
     * Gets value_scenario_type
     *
     * @return \Swagger\Client\Model\EmissionValueScenarioTypeEmisiaCopertAustralia12
     */
    public function getValueScenarioType()
    {
        return $this->container['value_scenario_type'];
    }

    /**
     * Sets value_scenario_type
     *
     * @param \Swagger\Client\Model\EmissionValueScenarioTypeEmisiaCopertAustralia12 $value_scenario_type value_scenario_type
     *
     * @return $this
     */
    public function setValueScenarioType($value_scenario_type)
    {
        $this->container['value_scenario_type'] = $value_scenario_type;

        return $this;
    }

    /**
     * Gets carbon_dioxide
     *
     * @return \Swagger\Client\Model\Kilograms
     */
    public function getCarbonDioxide()
    {
        return $this->container['carbon_dioxide'];
    }

    /**
     * Sets carbon_dioxide
     *
     * @param \Swagger\Client\Model\Kilograms $carbon_dioxide carbon_dioxide
     *
     * @return $this
     */
    public function setCarbonDioxide($carbon_dioxide)
    {
        $this->container['carbon_dioxide'] = $carbon_dioxide;

        return $this;
    }

    /**
     * Gets fuel_consumption
     *
     * @return \Swagger\Client\Model\Kilograms
     */
    public function getFuelConsumption()
    {
        return $this->container['fuel_consumption'];
    }

    /**
     * Sets fuel_consumption
     *
     * @param \Swagger\Client\Model\Kilograms $fuel_consumption fuel_consumption
     *
     * @return $this
     */
    public function setFuelConsumption($fuel_consumption)
    {
        $this->container['fuel_consumption'] = $fuel_consumption;

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
