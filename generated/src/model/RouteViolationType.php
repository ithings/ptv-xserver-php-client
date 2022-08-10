<?php
/**
 * RouteViolationType
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
 * RouteViolationType Class Doc Comment
 *
 * @category Class
 * @description Indicates due to what reason a route violation occurs.    * &#x60;PROHIBITED&#x60; - The violated segment is prohibited in general for the current vehicle. See road attribute &#x27;prohibited&#x27;.    * &#x60;DELIVERY_ONLY&#x60; - The violated segment is prohibited except for delivery reasons but delivery is disallowed for the current vehicle. See road attribute &#x27;deliveryOnly&#x27;.    * &#x60;URBAN&#x60; - The violated segment is prohibited because it is flagged as urban. See road attribute &#x27;urban&#x27;.    * &#x60;RESIDENTS_ONLY&#x60; - The violated segment is prohibited because it is flagged as residents only for the current vehicle. See road attribute &#x27;residentsOnly&#x27;.    * &#x60;RESTRICTED_ACCESS&#x60; - A point with restricted access, e.g. a gate or a bollard was passed.    * &#x60;FEATURE&#x60; - The violated segment has an attribute from some enabled Feature Layer theme which prohibits to pass with the current vehicle (e.g. a weight or height restriction).    * &#x60;COMBINED_TRANSPORT&#x60; - The violated segment is a ferry or a piggyback prohibited for the current vehicle.    * &#x60;PROHIBITED_BY_INTERSECTING_POLYLINE&#x60; - The violated segment is prohibited by an intersecting polyline.    * &#x60;UNSPECIFIED&#x60; - Fallback value to be substituted for enumeration values which were added in an API version that is newer than the request version.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xroute.RouteViolationType
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteViolationType
{
    /**
     * Possible values of this enum
     */
    const PROHIBITED = 'PROHIBITED';
const DELIVERY_ONLY = 'DELIVERY_ONLY';
const URBAN = 'URBAN';
const RESIDENTS_ONLY = 'RESIDENTS_ONLY';
const RESTRICTED_ACCESS = 'RESTRICTED_ACCESS';
const FEATURE = 'FEATURE';
const COMBINED_TRANSPORT = 'COMBINED_TRANSPORT';
const PROHIBITED_BY_INTERSECTING_POLYLINE = 'PROHIBITED_BY_INTERSECTING_POLYLINE';
const UNSPECIFIED = 'UNSPECIFIED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROHIBITED,
self::DELIVERY_ONLY,
self::URBAN,
self::RESIDENTS_ONLY,
self::RESTRICTED_ACCESS,
self::FEATURE,
self::COMBINED_TRANSPORT,
self::PROHIBITED_BY_INTERSECTING_POLYLINE,
self::UNSPECIFIED,        ];
    }
}
