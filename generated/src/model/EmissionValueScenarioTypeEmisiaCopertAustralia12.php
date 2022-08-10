<?php
/**
 * EmissionValueScenarioTypeEmisiaCopertAustralia12
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
 * EmissionValueScenarioTypeEmisiaCopertAustralia12 Class Doc Comment
 *
 * @category Class
 * @description Define the option of scenario to calculate COPERT emissions    * &#x60;CURRENT_ROUTE&#x60; - The emissions are calculated on the current route, considering the current vehicle profile.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.emissions.EmissionValueScenarioType\\_EMISIA\\_COPERT\\_AUSTRALIA\\_1\\_2
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmissionValueScenarioTypeEmisiaCopertAustralia12
{
    /**
     * Possible values of this enum
     */
    const CURRENT_ROUTE = 'CURRENT_ROUTE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CURRENT_ROUTE,        ];
    }
}