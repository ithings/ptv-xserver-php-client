<?php
/**
 * HatchType
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
 * HatchType Class Doc Comment
 *
 * @category Class
 * @description A type of hatch to fill a geometry.    * &#x60;LEFT_INCLINED&#x60; - Hatch pattern inclined from top left to bottom right.    * &#x60;RIGHT_INCLINED&#x60; - Hatch pattern inclined from top right to bottom left.    * &#x60;VERTICAL&#x60; - Vertical hatch pattern.    * &#x60;HORIZONTAL&#x60; - Horizontal hatch pattern.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.renderingprofile.HatchType
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HatchType
{
    /**
     * Possible values of this enum
     */
    const LEFT_INCLINED = 'LEFT_INCLINED';
const RIGHT_INCLINED = 'RIGHT_INCLINED';
const VERTICAL = 'VERTICAL';
const HORIZONTAL = 'HORIZONTAL';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LEFT_INCLINED,
self::RIGHT_INCLINED,
self::VERTICAL,
self::HORIZONTAL,        ];
    }
}
