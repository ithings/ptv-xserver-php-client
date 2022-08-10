<?php
/**
 * NodeType
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
 * NodeType Class Doc Comment
 *
 * @category Class
 * @description Enumeration of the different Node types returned by a routing operation. While a NodeType.NETWORK\\_NODE is an actual node in the routing network, other virtual node types are also created. For example a NodeType.INPUT\\_NODE might represent an arbitrary user supplied InputWaypoint. A corresponding NodeType.LINK\\_NODE is then required to represent the point where the segment from the user supplied waypoint is connected to the actual routing network.    * &#x60;NETWORK_NODE&#x60; - Node is present in the underlying routing network.    * &#x60;LINK_NODE&#x60; - Virtual node on a segment in the underlying routing network to which an NodeType.INPUT\\_NODE is linked.    * &#x60;INPUT_NODE&#x60; - Virtual node representing a user provided input waypoint.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xroute.NodeType
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NodeType
{
    /**
     * Possible values of this enum
     */
    const NETWORK_NODE = 'NETWORK_NODE';
const LINK_NODE = 'LINK_NODE';
const INPUT_NODE = 'INPUT_NODE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NETWORK_NODE,
self::LINK_NODE,
self::INPUT_NODE,        ];
    }
}