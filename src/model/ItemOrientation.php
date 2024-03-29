<?php
/**
 * ItemOrientation
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
 * ItemOrientation Class Doc Comment
 *
 * @category Class
 * @description Enumerates possible orientations. This is the full set of orientations that can lead to a unique shape of a cuboid object. Note that as only the shape is considered, things like whether an item is upside down have no influence on its orientation in this model. While we named the orientations, it might be simpler thinking of them as discrete orientations with no deeper meaning.    * &#x60;ORIGINAL&#x60; - Items is not re-oriented. Dimensions stay (x,y,z).    * &#x60;X&#x60; - Item is rotated around x-axis (widthwise) by +/-90 degrees compared to the original orientation. Dimensions are (x,z,y).    * &#x60;Y&#x60; - Item is rotated around y-axis (heightwise) by +/-90 degrees compared to the original orientation. Dimensions are (z,y,x).    * &#x60;Z&#x60; - Item is rotated around z-axis (lengthwise) by +/-90 degrees compared to the original orientation. Dimensions are (y,x,z).    * &#x60;XZ&#x60; - Item is rotated around x- then z-axis (width- then heightwise) by +/-90 degrees compared to the original orientation. Dimensions are (z,x,y).    * &#x60;YZ&#x60; - Item is rotated around its y- then z-axis (length- then heightwise) by +/-90 degrees compared to the original orientation. Dimensions are (y,z,x).  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xload.ItemOrientation
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemOrientation
{
    /**
     * Possible values of this enum
     */
    const ORIGINAL = 'ORIGINAL';
const X = 'X';
const Y = 'Y';
const Z = 'Z';
const XZ = 'XZ';
const YZ = 'YZ';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORIGINAL,
self::X,
self::Y,
self::Z,
self::XZ,
self::YZ,        ];
    }
}
