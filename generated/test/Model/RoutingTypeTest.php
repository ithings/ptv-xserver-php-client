<?php
/**
 * RoutingTypeTest
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
 * Please update the test case below to test the model.
 */

namespace ithings\ptvxserver;

/**
 * RoutingTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Represents the type of the route calculation algorithm. It can be used as input parameter or the type is reported, for instance as part of a distance matrix calculation.    * &#x60;CONVENTIONAL&#x60; - Route calculation based on a standard algorithm. Heuristic elements are used to improve performance. If this element is used as input it the routing is forced to use the conventional algorithm.    * &#x60;HIGH_PERFORMANCE_ROUTING_WITH_FALLBACK_CONVENTIONAL&#x60; - This element is used only as input. It indicates that the service tries to use a high-performance routing network, and if no adequate data is found conventional routing is used instead.    * &#x60;HIGH_PERFORMANCE_ROUTING&#x60; - High-performance route calculation based on pre-calculated, profile-dependent additional routing networks. If it is used as input and no such network which fits the current profile settings is available an exception is thrown.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.routing.RoutingType
 * @package     ithings\ptvxserver
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RoutingTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "RoutingType"
     */
    public function testRoutingType()
    {
    }
}
