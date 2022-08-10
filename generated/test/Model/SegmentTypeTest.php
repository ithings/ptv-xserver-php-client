<?php
/**
 * SegmentTypeTest
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
 * SegmentTypeTest Class Doc Comment
 *
 * @category    Class
 * @description The type of a segment.    * &#x60;NETWORK_SEGMENT&#x60; - This segment is a network segment.    * &#x60;LINK_SEGMENT&#x60; - This segment is a virtual one, but not a network segment. It links the input coordinate to the routing network and does not have SegmentAttributes.    * &#x60;COMBINED_TRANSPORT&#x60; - This segment is a combined transport, i.e. the vehicle is carried by some other vehicle such as a boat or a train. The CombinedTransportAttributes are available only for segments of this type.    * &#x60;NOT_DRIVING&#x60; - This segment is a virtual one which denotes that the vehicle is not driving. Thus, the segment has distance and travelSpeed 0 and does not have a polyline nor SegmentAttributes.     *  Border crossings which are not a combined transport. Start and end node have the same location but are in different countries. The travelTime equals 0.   *  When the driver is making a break or a rest, during service and other waiting periods. For those waiting segments start and end nodes are equal.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.segments.SegmentType
 * @package     ithings\ptvxserver
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SegmentTypeTest extends \PHPUnit_Framework_TestCase
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
     * Test "SegmentType"
     */
    public function testSegmentType()
    {
    }
}
