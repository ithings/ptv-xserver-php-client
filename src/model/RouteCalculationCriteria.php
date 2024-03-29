<?php
/**
 * RouteCalculationCriteria
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
 * RouteCalculationCriteria Class Doc Comment
 *
 * @category Class
 * @description Specifies what the routing algorithm should optimize for.    * &#x60;ABSTRACT_COSTS&#x60; - Calculate the route according to the best abstract costs based on distance time weighting and penalties.    * &#x60;MONETARY_COSTS&#x60; - Calculate the route according to the best monetary costs based on the parameters in the monetary cost options and including toll costs.    If set, it is required to specify a currency in the route options.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.routing.RouteCalculationCriteria
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteCalculationCriteria
{
    /**
     * Possible values of this enum
     */
    const ABSTRACT_COSTS = 'ABSTRACT_COSTS';
const MONETARY_COSTS = 'MONETARY_COSTS';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABSTRACT_COSTS,
self::MONETARY_COSTS,        ];
    }
}
