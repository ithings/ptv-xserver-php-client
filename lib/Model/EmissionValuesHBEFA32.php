<?php
/**
 * EmissionValuesHBEFA32
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
 * EmissionValuesHBEFA32 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmissionValuesHBEFA32 extends EmissionValues 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmissionValues_HBEFA_3_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value_scenario_type' => '\Swagger\Client\Model\EmissionValueScenarioTypeHBEFA32',
'fuel_consumption' => '\Swagger\Client\Model\Kilograms',
'hydrocarbons' => '\Swagger\Client\Model\Grams',
'methane' => '\Swagger\Client\Model\Grams',
'hydrocarbons_except_methane' => '\Swagger\Client\Model\Grams',
'carbon_monoxide' => '\Swagger\Client\Model\Grams',
'carbon_dioxide' => '\Swagger\Client\Model\Kilograms',
'fossil_carbon_dioxide' => '\Swagger\Client\Model\Kilograms',
'sulphur_dioxide' => '\Swagger\Client\Model\Grams',
'nitrogen_oxides' => '\Swagger\Client\Model\Grams',
'nitrogen_dioxide' => '\Swagger\Client\Model\Grams',
'nitrous_oxide' => '\Swagger\Client\Model\Grams',
'ammonia' => '\Swagger\Client\Model\Grams',
'benzene' => '\Swagger\Client\Model\Grams',
'particles' => '\Swagger\Client\Model\Grams',
'number_of_particles' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value_scenario_type' => null,
'fuel_consumption' => null,
'hydrocarbons' => null,
'methane' => null,
'hydrocarbons_except_methane' => null,
'carbon_monoxide' => null,
'carbon_dioxide' => null,
'fossil_carbon_dioxide' => null,
'sulphur_dioxide' => null,
'nitrogen_oxides' => null,
'nitrogen_dioxide' => null,
'nitrous_oxide' => null,
'ammonia' => null,
'benzene' => null,
'particles' => null,
'number_of_particles' => 'double'    ];

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
'fuel_consumption' => 'fuelConsumption',
'hydrocarbons' => 'hydrocarbons',
'methane' => 'methane',
'hydrocarbons_except_methane' => 'hydrocarbonsExceptMethane',
'carbon_monoxide' => 'carbonMonoxide',
'carbon_dioxide' => 'carbonDioxide',
'fossil_carbon_dioxide' => 'fossilCarbonDioxide',
'sulphur_dioxide' => 'sulphurDioxide',
'nitrogen_oxides' => 'nitrogenOxides',
'nitrogen_dioxide' => 'nitrogenDioxide',
'nitrous_oxide' => 'nitrousOxide',
'ammonia' => 'ammonia',
'benzene' => 'benzene',
'particles' => 'particles',
'number_of_particles' => 'numberOfParticles'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value_scenario_type' => 'setValueScenarioType',
'fuel_consumption' => 'setFuelConsumption',
'hydrocarbons' => 'setHydrocarbons',
'methane' => 'setMethane',
'hydrocarbons_except_methane' => 'setHydrocarbonsExceptMethane',
'carbon_monoxide' => 'setCarbonMonoxide',
'carbon_dioxide' => 'setCarbonDioxide',
'fossil_carbon_dioxide' => 'setFossilCarbonDioxide',
'sulphur_dioxide' => 'setSulphurDioxide',
'nitrogen_oxides' => 'setNitrogenOxides',
'nitrogen_dioxide' => 'setNitrogenDioxide',
'nitrous_oxide' => 'setNitrousOxide',
'ammonia' => 'setAmmonia',
'benzene' => 'setBenzene',
'particles' => 'setParticles',
'number_of_particles' => 'setNumberOfParticles'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value_scenario_type' => 'getValueScenarioType',
'fuel_consumption' => 'getFuelConsumption',
'hydrocarbons' => 'getHydrocarbons',
'methane' => 'getMethane',
'hydrocarbons_except_methane' => 'getHydrocarbonsExceptMethane',
'carbon_monoxide' => 'getCarbonMonoxide',
'carbon_dioxide' => 'getCarbonDioxide',
'fossil_carbon_dioxide' => 'getFossilCarbonDioxide',
'sulphur_dioxide' => 'getSulphurDioxide',
'nitrogen_oxides' => 'getNitrogenOxides',
'nitrogen_dioxide' => 'getNitrogenDioxide',
'nitrous_oxide' => 'getNitrousOxide',
'ammonia' => 'getAmmonia',
'benzene' => 'getBenzene',
'particles' => 'getParticles',
'number_of_particles' => 'getNumberOfParticles'    ];

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
        $this->container['fuel_consumption'] = isset($data['fuel_consumption']) ? $data['fuel_consumption'] : null;
        $this->container['hydrocarbons'] = isset($data['hydrocarbons']) ? $data['hydrocarbons'] : null;
        $this->container['methane'] = isset($data['methane']) ? $data['methane'] : null;
        $this->container['hydrocarbons_except_methane'] = isset($data['hydrocarbons_except_methane']) ? $data['hydrocarbons_except_methane'] : null;
        $this->container['carbon_monoxide'] = isset($data['carbon_monoxide']) ? $data['carbon_monoxide'] : null;
        $this->container['carbon_dioxide'] = isset($data['carbon_dioxide']) ? $data['carbon_dioxide'] : null;
        $this->container['fossil_carbon_dioxide'] = isset($data['fossil_carbon_dioxide']) ? $data['fossil_carbon_dioxide'] : null;
        $this->container['sulphur_dioxide'] = isset($data['sulphur_dioxide']) ? $data['sulphur_dioxide'] : null;
        $this->container['nitrogen_oxides'] = isset($data['nitrogen_oxides']) ? $data['nitrogen_oxides'] : null;
        $this->container['nitrogen_dioxide'] = isset($data['nitrogen_dioxide']) ? $data['nitrogen_dioxide'] : null;
        $this->container['nitrous_oxide'] = isset($data['nitrous_oxide']) ? $data['nitrous_oxide'] : null;
        $this->container['ammonia'] = isset($data['ammonia']) ? $data['ammonia'] : null;
        $this->container['benzene'] = isset($data['benzene']) ? $data['benzene'] : null;
        $this->container['particles'] = isset($data['particles']) ? $data['particles'] : null;
        $this->container['number_of_particles'] = isset($data['number_of_particles']) ? $data['number_of_particles'] : null;
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
        if ($this->container['fuel_consumption'] === null) {
            $invalidProperties[] = "'fuel_consumption' can't be null";
        }
        if ($this->container['hydrocarbons'] === null) {
            $invalidProperties[] = "'hydrocarbons' can't be null";
        }
        if ($this->container['methane'] === null) {
            $invalidProperties[] = "'methane' can't be null";
        }
        if ($this->container['hydrocarbons_except_methane'] === null) {
            $invalidProperties[] = "'hydrocarbons_except_methane' can't be null";
        }
        if ($this->container['carbon_monoxide'] === null) {
            $invalidProperties[] = "'carbon_monoxide' can't be null";
        }
        if ($this->container['carbon_dioxide'] === null) {
            $invalidProperties[] = "'carbon_dioxide' can't be null";
        }
        if ($this->container['fossil_carbon_dioxide'] === null) {
            $invalidProperties[] = "'fossil_carbon_dioxide' can't be null";
        }
        if ($this->container['sulphur_dioxide'] === null) {
            $invalidProperties[] = "'sulphur_dioxide' can't be null";
        }
        if ($this->container['nitrogen_oxides'] === null) {
            $invalidProperties[] = "'nitrogen_oxides' can't be null";
        }
        if ($this->container['nitrogen_dioxide'] === null) {
            $invalidProperties[] = "'nitrogen_dioxide' can't be null";
        }
        if ($this->container['nitrous_oxide'] === null) {
            $invalidProperties[] = "'nitrous_oxide' can't be null";
        }
        if ($this->container['ammonia'] === null) {
            $invalidProperties[] = "'ammonia' can't be null";
        }
        if ($this->container['benzene'] === null) {
            $invalidProperties[] = "'benzene' can't be null";
        }
        if ($this->container['particles'] === null) {
            $invalidProperties[] = "'particles' can't be null";
        }
        if ($this->container['number_of_particles'] === null) {
            $invalidProperties[] = "'number_of_particles' can't be null";
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
     * @return \Swagger\Client\Model\EmissionValueScenarioTypeHBEFA32
     */
    public function getValueScenarioType()
    {
        return $this->container['value_scenario_type'];
    }

    /**
     * Sets value_scenario_type
     *
     * @param \Swagger\Client\Model\EmissionValueScenarioTypeHBEFA32 $value_scenario_type value_scenario_type
     *
     * @return $this
     */
    public function setValueScenarioType($value_scenario_type)
    {
        $this->container['value_scenario_type'] = $value_scenario_type;

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
     * Gets hydrocarbons
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getHydrocarbons()
    {
        return $this->container['hydrocarbons'];
    }

    /**
     * Sets hydrocarbons
     *
     * @param \Swagger\Client\Model\Grams $hydrocarbons hydrocarbons
     *
     * @return $this
     */
    public function setHydrocarbons($hydrocarbons)
    {
        $this->container['hydrocarbons'] = $hydrocarbons;

        return $this;
    }

    /**
     * Gets methane
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getMethane()
    {
        return $this->container['methane'];
    }

    /**
     * Sets methane
     *
     * @param \Swagger\Client\Model\Grams $methane methane
     *
     * @return $this
     */
    public function setMethane($methane)
    {
        $this->container['methane'] = $methane;

        return $this;
    }

    /**
     * Gets hydrocarbons_except_methane
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getHydrocarbonsExceptMethane()
    {
        return $this->container['hydrocarbons_except_methane'];
    }

    /**
     * Sets hydrocarbons_except_methane
     *
     * @param \Swagger\Client\Model\Grams $hydrocarbons_except_methane hydrocarbons_except_methane
     *
     * @return $this
     */
    public function setHydrocarbonsExceptMethane($hydrocarbons_except_methane)
    {
        $this->container['hydrocarbons_except_methane'] = $hydrocarbons_except_methane;

        return $this;
    }

    /**
     * Gets carbon_monoxide
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getCarbonMonoxide()
    {
        return $this->container['carbon_monoxide'];
    }

    /**
     * Sets carbon_monoxide
     *
     * @param \Swagger\Client\Model\Grams $carbon_monoxide carbon_monoxide
     *
     * @return $this
     */
    public function setCarbonMonoxide($carbon_monoxide)
    {
        $this->container['carbon_monoxide'] = $carbon_monoxide;

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
     * Gets fossil_carbon_dioxide
     *
     * @return \Swagger\Client\Model\Kilograms
     */
    public function getFossilCarbonDioxide()
    {
        return $this->container['fossil_carbon_dioxide'];
    }

    /**
     * Sets fossil_carbon_dioxide
     *
     * @param \Swagger\Client\Model\Kilograms $fossil_carbon_dioxide fossil_carbon_dioxide
     *
     * @return $this
     */
    public function setFossilCarbonDioxide($fossil_carbon_dioxide)
    {
        $this->container['fossil_carbon_dioxide'] = $fossil_carbon_dioxide;

        return $this;
    }

    /**
     * Gets sulphur_dioxide
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getSulphurDioxide()
    {
        return $this->container['sulphur_dioxide'];
    }

    /**
     * Sets sulphur_dioxide
     *
     * @param \Swagger\Client\Model\Grams $sulphur_dioxide sulphur_dioxide
     *
     * @return $this
     */
    public function setSulphurDioxide($sulphur_dioxide)
    {
        $this->container['sulphur_dioxide'] = $sulphur_dioxide;

        return $this;
    }

    /**
     * Gets nitrogen_oxides
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getNitrogenOxides()
    {
        return $this->container['nitrogen_oxides'];
    }

    /**
     * Sets nitrogen_oxides
     *
     * @param \Swagger\Client\Model\Grams $nitrogen_oxides nitrogen_oxides
     *
     * @return $this
     */
    public function setNitrogenOxides($nitrogen_oxides)
    {
        $this->container['nitrogen_oxides'] = $nitrogen_oxides;

        return $this;
    }

    /**
     * Gets nitrogen_dioxide
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getNitrogenDioxide()
    {
        return $this->container['nitrogen_dioxide'];
    }

    /**
     * Sets nitrogen_dioxide
     *
     * @param \Swagger\Client\Model\Grams $nitrogen_dioxide nitrogen_dioxide
     *
     * @return $this
     */
    public function setNitrogenDioxide($nitrogen_dioxide)
    {
        $this->container['nitrogen_dioxide'] = $nitrogen_dioxide;

        return $this;
    }

    /**
     * Gets nitrous_oxide
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getNitrousOxide()
    {
        return $this->container['nitrous_oxide'];
    }

    /**
     * Sets nitrous_oxide
     *
     * @param \Swagger\Client\Model\Grams $nitrous_oxide nitrous_oxide
     *
     * @return $this
     */
    public function setNitrousOxide($nitrous_oxide)
    {
        $this->container['nitrous_oxide'] = $nitrous_oxide;

        return $this;
    }

    /**
     * Gets ammonia
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getAmmonia()
    {
        return $this->container['ammonia'];
    }

    /**
     * Sets ammonia
     *
     * @param \Swagger\Client\Model\Grams $ammonia ammonia
     *
     * @return $this
     */
    public function setAmmonia($ammonia)
    {
        $this->container['ammonia'] = $ammonia;

        return $this;
    }

    /**
     * Gets benzene
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getBenzene()
    {
        return $this->container['benzene'];
    }

    /**
     * Sets benzene
     *
     * @param \Swagger\Client\Model\Grams $benzene benzene
     *
     * @return $this
     */
    public function setBenzene($benzene)
    {
        $this->container['benzene'] = $benzene;

        return $this;
    }

    /**
     * Gets particles
     *
     * @return \Swagger\Client\Model\Grams
     */
    public function getParticles()
    {
        return $this->container['particles'];
    }

    /**
     * Sets particles
     *
     * @param \Swagger\Client\Model\Grams $particles particles
     *
     * @return $this
     */
    public function setParticles($particles)
    {
        $this->container['particles'] = $particles;

        return $this;
    }

    /**
     * Gets number_of_particles
     *
     * @return double
     */
    public function getNumberOfParticles()
    {
        return $this->container['number_of_particles'];
    }

    /**
     * Sets number_of_particles
     *
     * @param double $number_of_particles The number of particles (expressed as double bacause it could be greater than max int).
     *
     * @return $this
     */
    public function setNumberOfParticles($number_of_particles)
    {
        $this->container['number_of_particles'] = $number_of_particles;

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
