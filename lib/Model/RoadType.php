<?php
/**
 * RoadType
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
 * RoadType Class Doc Comment
 *
 * @category Class
 * @description Defines the road types present in Feature Layer data..    * &#x60;MOTORWAY_FREEWAY&#x60; - Valid for motorways.    * &#x60;DUAL_CARRIAGE_HIGHWAY&#x60; - Valid for dual highways.    * &#x60;SINGLE_CARRIAGE_HIGHWAY&#x60; - Valid for single highways.    * &#x60;LOCAL_MAJOR_ROAD&#x60; - Valid for local major roads.    * &#x60;LOCAL_MINOR_ROAD&#x60; - Valid for local minor roads.    * &#x60;URBAN_ROAD&#x60; - Valid for urban roads.    * &#x60;PEDESTRIAN_ZONE&#x60; - Valid for pedestrian ways.    * &#x60;FORESTROADS_AND_WALKWAYS&#x60; - Valid for forest roads and walkways.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.renderingprofile.RoadType
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoadType
{
    /**
     * Possible values of this enum
     */
    const MOTORWAY_FREEWAY = 'MOTORWAY_FREEWAY';
const DUAL_CARRIAGE_HIGHWAY = 'DUAL_CARRIAGE_HIGHWAY';
const SINGLE_CARRIAGE_HIGHWAY = 'SINGLE_CARRIAGE_HIGHWAY';
const LOCAL_MAJOR_ROAD = 'LOCAL_MAJOR_ROAD';
const LOCAL_MINOR_ROAD = 'LOCAL_MINOR_ROAD';
const URBAN_ROAD = 'URBAN_ROAD';
const PEDESTRIAN_ZONE = 'PEDESTRIAN_ZONE';
const FORESTROADS_AND_WALKWAYS = 'FORESTROADS_AND_WALKWAYS';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MOTORWAY_FREEWAY,
self::DUAL_CARRIAGE_HIGHWAY,
self::SINGLE_CARRIAGE_HIGHWAY,
self::LOCAL_MAJOR_ROAD,
self::LOCAL_MINOR_ROAD,
self::URBAN_ROAD,
self::PEDESTRIAN_ZONE,
self::FORESTROADS_AND_WALKWAYS,        ];
    }
}