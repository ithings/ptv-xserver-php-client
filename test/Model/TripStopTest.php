<?php
/**
 * TripStopTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * TripStopTest Class Doc Comment
 *
 * @category    Class
 * @description A stop groups subsequent tasks of a tour that are carried out at the same site. If there is more than one task at the same customer site, tasks are grouped to one stop and scheduled in order of their type: DELIVERY tasks before VISIT tasks before PICKUP tasks. If there is more than one task at the same depot site, all DELIVERY tasks are grouped to one stop and all PICKUP tasks are grouped to another one. See Orders, Locations, and Stops. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.Stop
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TripStopTest extends \PHPUnit_Framework_TestCase
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
     * Test "TripStop"
     */
    public function testTripStop()
    {
    }

    /**
     * Test attribute "location_id"
     */
    public function testPropertyLocationId()
    {
    }

    /**
     * Test attribute "customer_id"
     */
    public function testPropertyCustomerId()
    {
    }

    /**
     * Test attribute "tasks"
     */
    public function testPropertyTasks()
    {
    }
}
