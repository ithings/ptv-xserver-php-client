<?php
/**
 * DriveType
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
 * DriveType Class Doc Comment
 *
 * @category Class
 * @description Defines the type of drive.    * &#x60;MOTOR_VEHICLE&#x60; - All common motor vehicles, e.g. cars, trucks, motorcycles etc.    * &#x60;BICYCLE&#x60; - Bicycles and other vehicles with very limited engines such as e-bikes or mopeds.    * &#x60;PEDESTRIAN&#x60; - Pedestrians.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.vehicleprofile.DriveType
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DriveType
{
    /**
     * Possible values of this enum
     */
    const MOTOR_VEHICLE = 'MOTOR_VEHICLE';
const BICYCLE = 'BICYCLE';
const PEDESTRIAN = 'PEDESTRIAN';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MOTOR_VEHICLE,
self::BICYCLE,
self::PEDESTRIAN,        ];
    }
}