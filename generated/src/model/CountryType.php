<?php
/**
 * CountryType
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
 * CountryType Class Doc Comment
 *
 * @category Class
 * @description Specifies the representation of the country in a request or response.    * &#x60;ISO_3166_1_ALPHA_2&#x60; - The country will be represented as ISO 3166-1 alpha-2, e.g. DE for Germany.    * &#x60;ISO_3166_1_ALPHA_3&#x60; - The country will be represented as ISO 3166-1 alpha-3, e.g. DEU for Germany.    * &#x60;LICENSE_PLATE&#x60; - The country will be represented by its license plate code, e.g. D for Germany.    * &#x60;NAME&#x60; - The country will be represented by its name, not abbreviated nor encoded, in the requested language.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xlocate.CountryType
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CountryType
{
    /**
     * Possible values of this enum
     */
    const ISO_3166_1_ALPHA_2 = 'ISO_3166_1_ALPHA_2';
const ISO_3166_1_ALPHA_3 = 'ISO_3166_1_ALPHA_3';
const LICENSE_PLATE = 'LICENSE_PLATE';
const NAME = 'NAME';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ISO_3166_1_ALPHA_2,
self::ISO_3166_1_ALPHA_3,
self::LICENSE_PLATE,
self::NAME,        ];
    }
}
