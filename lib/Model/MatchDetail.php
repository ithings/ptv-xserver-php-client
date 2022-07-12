<?php
/**
 * MatchDetail
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
 * MatchDetail Class Doc Comment
 *
 * @category Class
 * @description Describing the result of a match operation for a single position.    * &#x60;MATCH_SUCCESSFUL&#x60; - The position was matched successfully.    * &#x60;MATCH_FAILED&#x60; - The position could not be matched.    * &#x60;NOT_CONSIDERED&#x60; - The position was not considered. This can only occur for track matching and not for position matching.    * &#x60;UNSPECIFIED&#x60; - Fallback value to be substituted for enumeration values which were added in an API version that is newer than the request version. When using the current API, this value will never be returned.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xmatch.MatchDetail
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchDetail
{
    /**
     * Possible values of this enum
     */
    const MATCH_SUCCESSFUL = 'MATCH_SUCCESSFUL';
const MATCH_FAILED = 'MATCH_FAILED';
const NOT_CONSIDERED = 'NOT_CONSIDERED';
const UNSPECIFIED = 'UNSPECIFIED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MATCH_SUCCESSFUL,
self::MATCH_FAILED,
self::NOT_CONSIDERED,
self::UNSPECIFIED,        ];
    }
}