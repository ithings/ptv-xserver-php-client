<?php
/**
 * ReachableAreasDrivingDirection
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
 * ReachableAreasDrivingDirection Class Doc Comment
 *
 * @category Class
 * @description Specifies the driving direction, i.e. from start to destination or from destination to start.    * &#x60;INBOUND&#x60; - Indicates an inbound routing from destination to start, i.e. from where the location can be reached within the given horizon. Use this value to calculate the catchment area, e.g. of a school or a hospital.    * &#x60;OUTBOUND&#x60; - Indicates an outbound routing from start to destination, i.e. what area can be reached from the location within the given horizon. Use this value to calculate which can be covered e.g. by an emergency service such as a fire department.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xroute.ReachableAreasDrivingDirection
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReachableAreasDrivingDirection
{
    /**
     * Possible values of this enum
     */
    const INBOUND = 'INBOUND';
const OUTBOUND = 'OUTBOUND';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INBOUND,
self::OUTBOUND,        ];
    }
}
