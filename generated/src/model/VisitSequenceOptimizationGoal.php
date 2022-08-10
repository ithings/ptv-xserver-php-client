<?php
/**
 * VisitSequenceOptimizationGoal
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
 * VisitSequenceOptimizationGoal Class Doc Comment
 *
 * @category Class
 * @description Selection of possible optimization goals in a sequencing operation.    * &#x60;MINIMUM_TRAVEL_TIME&#x60; - Optimize for minimum travel time (VisitSequenceResponse.travelTime)    * &#x60;MINIMUM_DISTANCE&#x60; - Optimize for minimum traveled distance (VisitSequenceResponse.distance)  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xcluster.VisitSequenceOptimizationGoal
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisitSequenceOptimizationGoal
{
    /**
     * Possible values of this enum
     */
    const TRAVEL_TIME = 'MINIMUM_TRAVEL_TIME';
const DISTANCE = 'MINIMUM_DISTANCE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRAVEL_TIME,
self::DISTANCE,        ];
    }
}
