<?php
/**
 * PenaltyTest
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
 * PenaltyTest Class Doc Comment
 *
 * @category    Class
 * @description Defines the segment-specific penalty values in percent for controlling the course of the route based on special needs. There are two special penalty values: 2501 blocks all segments with the property in question (e.g. toll roads), and -99 prefers them over all other segments. Use a value in between to increase or decrease the mathematical cost for the segments in the routing algorithm. Use a positive value to increase the initial mathematical cost of the segment and a negative value decreases the cost by the given percentage. For example, 100 increases the costs by a factor of two and -50 decreases the costs by a factor of two. 2500 is the proper value when segments must not be used unless there is no other option (consider a ferry being the only way to leave an island, residential areas at start or destination). Range: -99 ??? value ??? 2501. Hint: Corresponding unittype in xServer API documentation - com.ptvgroup.xserver.Penalty
 * @package     ithings\ptvxserver
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PenaltyTest extends \PHPUnit_Framework_TestCase
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
     * Test "Penalty"
     */
    public function testPenalty()
    {
    }
}
