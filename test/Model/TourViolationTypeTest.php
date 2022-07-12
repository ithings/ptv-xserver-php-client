<?php
/**
 * TourViolationTypeTest
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
 * TourViolationTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Specifies the type of a tour event. In xRoute, only the following types are returned: OPENING\\_INTERVAL, MAXIMUM\\_TRAVEL\\_TIME\\_PER\\_TOUR, MAXIMUM\\_DRIVING\\_TIME\\_PER\\_TOUR. In xTour, all the types are returned.    * &#x60;PLANNING_HORIZON&#x60; - Indicates a violation of the planning horizon. This is caused by a tour event that begins outside the planning horizon. This violation is repeated for all subsequent events of the current tour.    * &#x60;OPERATING_INTERVAL&#x60; - Indicates a violation of the operating interval of the driver. This is caused by a tour event that begins outside of the operating intervals of the driver of the current tour. This violation is repeated for all subsequent events of the current trip.    * &#x60;TOUR_START_INTERVAL&#x60; - Indicates a violation of the tour start interval of the vehicle. This violation is only included at tour start events.    * &#x60;OPENING_INTERVAL&#x60; - Indicates a violation of the opening interval(s) of the current site. This is caused by service that begins after the end of the last opening interval of the current site. This violation is repeated for all subsequent events of the current stop.    * &#x60;MAXIMUM_TRAVEL_TIME_PER_TOUR&#x60; - Indicates a violation of the maximum allowed travel time per tour. This violation is repeated for all subsequent events of the current tour.    * &#x60;MAXIMUM_DRIVING_TIME_PER_TOUR&#x60; - Indicates a violation of the maximum allowed driving time per tour. This violation is repeated for all subsequent events of the current tour.    * &#x60;REST_POSITION&#x60; - Indicates that a daily rest for European drivers&#x27; working hours is not at the end of a trip. The expected position for a daily rest is at the end of a trip. Daily rests at other positions are only scheduled if they are absolutely necessary to conform to the European drivers&#x27; working hours. This violation is only included at tour events of the violated daily rest.    * &#x60;MAXIMUM_QUANTITY_SCENARIO&#x60; - Indicates a violation of the maximum quantity scenario of the used vehicle. This violation is repeated for all subsequent events for which the maximum quantity of the vehicle is exceeded.    * &#x60;VEHICLE_EQUIPMENT&#x60; - Indicates a violation of the vehicle equipment required for the currently loaded orders. This violation is repeated for all subsequent events for which a vehicle equipment is missing.    * &#x60;MAXIMUM_TRAVEL_TIME_PER_DRIVER&#x60; - Indicates a violation of the maximum allowed travel time per driver as specified by the drivers&#x27; working hours restriction. Travel time prior to tour start as specified by the work logbook summary is also considered for this check. This violation is repeated for all subsequent events of the current tour.    * &#x60;MAXIMUM_DRIVING_TIME_PER_DRIVER&#x60; - Indicates a violation of the maximum allowed driving time per driver as specified by the drivers&#x27; working hours restriction. Driving time prior to tour start as specified by the work logbook summary is also considered for this check. This violation is repeated for all subsequent events of the current tour.    * &#x60;TRIP_START_INTERVAL&#x60; - Indicates a violation of the trip start interval. This violation is only included at trip start events.    * &#x60;MAXIMUM_NUMBER_OF_CUSTOMER_STOPS&#x60; - Indicates a violation of the maximum allowed number of stops per tour. This violation only occurs at events of type service at customer stops and is repeated for all subsequent events.    * &#x60;CUSTOMER_STOP_POSITION_IN_TRIP&#x60; - Indicates a violation of the customer stop position in trip. This violation only occurs at events of type service at customer stops when a position in trip set for this site and the current customer stop is not the first/last one in the trip.    * &#x60;TRIP_SECTION&#x60; - Indicates a violation of the trip section numbers. This violation only occurs at events of type service at customer stops when the previous trip section number is higher than the one at this customer site.    * &#x60;MAXIMUM_DISTANCE&#x60; - Indicates a violation of the maximum allowed distance per tour. This violation is repeated for all subsequent events of the current tour.    * &#x60;MIXED_LOADING_PROHIBITION&#x60; - Indicates a violation of a mixed loading prohibition. This violation only occurs at events of type service.    * &#x60;ROUTE&#x60; - Indicates a violation where the route between two locations is calculated with route violations. This violation only occurs at events of type driving.    * &#x60;REACHABILITY&#x60; - Indicates a violation where the route between two locations was calculated by direct distance instead of the road network. This violation only occurs at events of type driving.    * &#x60;UNSPECIFIED&#x60; - Fallback value to be substituted for enumeration values which were added in an API version that is newer than the request version. When using the current API, this value will never be returned.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.tourplanning.TourViolationType
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TourViolationTypeTest extends \PHPUnit_Framework_TestCase
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
     * Test "TourViolationType"
     */
    public function testTourViolationType()
    {
    }
}
