<?php
/**
 * ReachableAreasCalculationMode
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
 * ReachableAreasCalculationMode Class Doc Comment
 *
 * @category Class
 * @description Specifies the calculation mode of a reachable areas calculation.    * &#x60;PERFORMANCE&#x60; - The calculation is fast but produces a polygon which gives only a rough overview on the reachable areas. Use this mode to get a quick response on large horizons.    * &#x60;QUALITY&#x60; - The calculation produces an exact polygon for the reachable areas including minor roads but is less performant. Use this mode to get good results and with small horizons. It is strongly recommended to call the operation asynchronously as the response times tend to be much longer.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xroute.ReachableAreasCalculationMode
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReachableAreasCalculationMode
{
    /**
     * Possible values of this enum
     */
    const PERFORMANCE = 'PERFORMANCE';
const QUALITY = 'QUALITY';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERFORMANCE,
self::QUALITY,        ];
    }
}
