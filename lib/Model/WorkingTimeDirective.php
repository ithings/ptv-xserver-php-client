<?php
/**
 * WorkingTimeDirective
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
 * WorkingTimeDirective Class Doc Comment
 *
 * @category Class
 * @description Defines which legislation regarding working time is applicable.    * &#x60;NONE&#x60; - No restriction by working law.    * &#x60;EU_2002_15_EC&#x60; - Enables directive 2002/15/EC of the European Parliament and of the Council \&quot;on the organisation of the working time of persons performing mobile road transport activities\&quot;.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.tourplanning.WorkingTimeDirective
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkingTimeDirective
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
const EU_2002_15_EC = 'EU_2002_15_EC';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::EU_2002_15_EC,        ];
    }
}