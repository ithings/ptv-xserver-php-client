<?php
/**
 * EmissionValueScenarioTypeFrenchCO2eDecree2017639
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
 * EmissionValueScenarioTypeFrenchCO2eDecree2017639 Class Doc Comment
 *
 * @category Class
 * @description Define the option of scenario to calculate 2017 French CO2E decree emissions    * &#x60;VEHICLE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION&#x60; - The calculation of emissions is based on the current vehicle profile.    * &#x60;FLEET_SPECIFIC_AVERAGE_FUEL_CONSUMPTION&#x60; - The average fuel consumption for a fleet in \\[l/100km\\] for liquid fuel types or \\[kg/100km\\] for gaseous fuel types like COMPRESSED\\_NATURAL\\_GAS.    * &#x60;ROUTE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION&#x60; - The average fuel consumption for a specific type of route in \\[l/100km\\] for liquid fuel types or \\[kg/100km\\] for gaseous fuel types like COMPRESSED\\_NATURAL\\_GAS.    * &#x60;ACTUAL_FUEL_CONSUMPTION&#x60; - The actual fuel consumption for this route in \\[l\\] for liquid fuel types or \\[kg\\] for gaseous fuel types like COMPRESSED\\_NATURAL\\_GAS.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.emissions.EmissionValueScenarioType\\_FRENCH\\_CO2E\\_DECREE\\_2017\\_639
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmissionValueScenarioTypeFrenchCO2eDecree2017639
{
    /**
     * Possible values of this enum
     */
    const VEHICLE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION = 'VEHICLE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION';
const FLEET_SPECIFIC_AVERAGE_FUEL_CONSUMPTION = 'FLEET_SPECIFIC_AVERAGE_FUEL_CONSUMPTION';
const ROUTE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION = 'ROUTE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION';
const ACTUAL_FUEL_CONSUMPTION = 'ACTUAL_FUEL_CONSUMPTION';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VEHICLE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION,
self::FLEET_SPECIFIC_AVERAGE_FUEL_CONSUMPTION,
self::ROUTE_SPECIFIC_AVERAGE_FUEL_CONSUMPTION,
self::ACTUAL_FUEL_CONSUMPTION,        ];
    }
}
