<?php
/**
 * StackingRestrictionType
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
 * StackingRestrictionType Class Doc Comment
 *
 * @category Class
 * @description Defines the stacking restrictions.    * &#x60;ALL_ALLOWED&#x60; - All ItemType can be stacked on top of the current one. Moreover, every items of the same ItemType can be stacked on top of the current one.    * &#x60;ALL_PROHIBITED&#x60; - All ItemType can not be stacked on top of the current one. Moreover, even items of the same ItemType can not be stacked on top of the current one.    * &#x60;ALLOWED&#x60; - Every listed ItemType can be stacked on top of the current one.    * &#x60;PROHIBITED&#x60; - Every listed ItemType can not be stacked on top of the current one.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xload.StackingRestrictionType
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StackingRestrictionType
{
    /**
     * Possible values of this enum
     */
    const ALL_ALLOWED = 'ALL_ALLOWED';
const ALL_PROHIBITED = 'ALL_PROHIBITED';
const ALLOWED = 'ALLOWED';
const PROHIBITED = 'PROHIBITED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_ALLOWED,
self::ALL_PROHIBITED,
self::ALLOWED,
self::PROHIBITED,        ];
    }
}
