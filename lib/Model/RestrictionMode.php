<?php
/**
 * RestrictionMode
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
 * RestrictionMode Class Doc Comment
 *
 * @category Class
 * @description Defines the restriction mode how to restrict the route calculation using a bounding box.    * &#x60;NONE&#x60; - No restriction by bounding box.    * &#x60;AUTOMATIC&#x60; - Use a bounding box automatically calculated from the route locations to restrict the search space.    * &#x60;CUSTOM&#x60; - Use the custom bounding box to restrict the search space.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.routing.RestrictionMode
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RestrictionMode
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
const AUTOMATIC = 'AUTOMATIC';
const CUSTOM = 'CUSTOM';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::AUTOMATIC,
self::CUSTOM,        ];
    }
}