<?php
/**
 * Scope
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
 * Scope Class Doc Comment
 *
 * @category Class
 * @description Defines which labels are taken into account to resolve overlapping.    * &#x60;ALL&#x60; - Labels of this theme shall not overlap any other label including those of the basemap, e.g. road or town names or road signs.    * &#x60;FEATURE_LAYER_LABELS&#x60; - Labels of this theme shall not overlap other labels of this or any other theme, but they may overlap labels of the basemap.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.renderingprofile.Scope
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Scope
{
    /**
     * Possible values of this enum
     */
    const ALL = 'ALL';
const FEATURE_LAYER_LABELS = 'FEATURE_LAYER_LABELS';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
self::FEATURE_LAYER_LABELS,        ];
    }
}
