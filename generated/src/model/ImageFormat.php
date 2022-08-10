<?php
/**
 * ImageFormat
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
 * ImageFormat Class Doc Comment
 *
 * @category Class
 * @description Enumeration of the supported bitmap formats, which can be used for rendered map images.    * &#x60;PNG&#x60; - Image is provided in *Portable Network Graphics* format.    * &#x60;JPG&#x60; - Image is provided in  *Joint Photographic Experts Group* format.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xmap.ImageFormat
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageFormat
{
    /**
     * Possible values of this enum
     */
    const PNG = 'PNG';
const JPG = 'JPG';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PNG,
self::JPG,        ];
    }
}