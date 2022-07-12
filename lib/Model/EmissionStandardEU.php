<?php
/**
 * EmissionStandardEU
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
 * EmissionStandardEU Class Doc Comment
 *
 * @category Class
 * @description Defines the emission standard of the vehicle valid in the European Union.    * &#x60;NONE&#x60; - The vehicle is not assigned an emission standard for the European Union.    * &#x60;EURO_0&#x60; - Euro 0 standards (old standards 1988-1992).    * &#x60;EURO_1&#x60; - Euro 1 standards (also known as EC 93): Directives 91/441/EEC (passenger cars only) or 93/59/EEC (passenger cars and light trucks).    * &#x60;EURO_2&#x60; - Euro 2 standards (EC 96): Directives 94/12/EC and 96/69/EC for passenger cars, 2002/51/EC(row A)-2006/120/EC for motorcycle.    * &#x60;EURO_3&#x60; - Euro 3 standards (2000): Directives 98/69/EC for any vehicle, 2002/51/EC(row A)-2006/120/EC for motorcycle.    * &#x60;EURO_4&#x60; - Euro 4 standards (2005): Directives 98/69/EC and 2002/80/EC for any vehicle.    * &#x60;EURO_5&#x60; - Euro 5 standards (2008/9): Directive 715/2007/EC for any vehicle.    * &#x60;EURO_EEV&#x60; - Standards for enhanced environmentally friendly vehicles. The standard lies between the levels of Euro V and Euro VI.    * &#x60;EURO_6&#x60; - Euro 6 standards (2014): Directive 715/2007/EC for any vehicle. Includes 6a and 6b.    * &#x60;EURO_6c&#x60; - Euro 6c standards (2017): for passenger cars and light trucks.    * &#x60;EURO_7&#x60; - Euro 7 standards (to appear 2025).  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.vehicleprofile.EmissionStandardEU
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmissionStandardEU
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
const EURO_0 = 'EURO_0';
const EURO_1 = 'EURO_1';
const EURO_2 = 'EURO_2';
const EURO_3 = 'EURO_3';
const EURO_4 = 'EURO_4';
const EURO_5 = 'EURO_5';
const EURO_EEV = 'EURO_EEV';
const EURO_6 = 'EURO_6';
const EURO_6C = 'EURO_6c';
const EURO_7 = 'EURO_7';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::EURO_0,
self::EURO_1,
self::EURO_2,
self::EURO_3,
self::EURO_4,
self::EURO_5,
self::EURO_EEV,
self::EURO_6,
self::EURO_6C,
self::EURO_7,        ];
    }
}