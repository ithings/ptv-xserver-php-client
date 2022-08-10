<?php
/**
 * MapMatchingCalculationModeTest
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
 * MapMatchingCalculationModeTest Class Doc Comment
 *
 * @category    Class
 * @description Enumeration to define the calculation behaviour of the algorithm, i.e. if the focus of calculation is on performance, quality or both.    * &#x60;PERFORMANCE&#x60; - The algorithm&#x27;s focus is on performance. This means to take into account a higher count of failed matches and in the case of track matching that the matched track may be split into several paths.    * &#x60;STANDARD&#x60; - The algorithm chooses a standard trade-off between quality and performance.    * &#x60;QUALITY&#x60; - The algorithm&#x27;s focus is on high solution quality. This means that as much as possible of the input positions are matched and taken into account. Though the processing time of the request can be high.    * &#x60;CUSTOM&#x60; - The algorithm&#x27;s focus is adapted to the customer&#x27;s needs. It is necessary to define the MatchTrackOptions.customCalculationModeConfiguration or MatchPositionsOptions.customCalculationModeConfiguration accordingly.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.xmatch.CalculationMode
 * @package     ithings\ptvxserver
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MapMatchingCalculationModeTest extends \PHPUnit_Framework_TestCase
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
     * Test "MapMatchingCalculationMode"
     */
    public function testMapMatchingCalculationMode()
    {
    }
}
