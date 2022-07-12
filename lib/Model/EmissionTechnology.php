<?php
/**
 * EmissionTechnology
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
 * EmissionTechnology Class Doc Comment
 *
 * @category Class
 * @description Defines the emission reduction technology of the vehicle (from HBEFA).    * &#x60;NONE&#x60; - No emission reduction technology.    * &#x60;EXHAUST_GAS_RECIRCULATION&#x60; - Exhaust gas recirculation technology.    * &#x60;SELECTIVE_CATALYTIC_REDUCTION&#x60; - Selective catalytic reduction.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.vehicleprofile.EmissionTechnology
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmissionTechnology
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
const EXHAUST_GAS_RECIRCULATION = 'EXHAUST_GAS_RECIRCULATION';
const SELECTIVE_CATALYTIC_REDUCTION = 'SELECTIVE_CATALYTIC_REDUCTION';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::EXHAUST_GAS_RECIRCULATION,
self::SELECTIVE_CATALYTIC_REDUCTION,        ];
    }
}
