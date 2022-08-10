<?php
/**
 * MixedLoadingProhibitionTest
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
 * MixedLoadingProhibitionTest Class Doc Comment
 *
 * @category    Class
 * @description There may be some orders that shall not be mixed with some other orders on one trip. For instance, it may be prohibited to load certain dangerous goods together on the same trip, such as flammable solids on the one hand and explosive substances on the other hand. A mixed loading prohibition is a pair of two conflicting categories that prohibits orders of these categories to be mixed on the same trip. The category can be specified for every order. For a vehicle, there is a flag that lets the vehicle ignore this restriction. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xtour.MixedLoadingProhibition
 * @package     ithings\ptvxserver
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MixedLoadingProhibitionTest extends \PHPUnit_Framework_TestCase
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
     * Test "MixedLoadingProhibition"
     */
    public function testMixedLoadingProhibition()
    {
    }

    /**
     * Test attribute "conflicting_category1"
     */
    public function testPropertyConflictingCategory1()
    {
    }

    /**
     * Test attribute "conflicting_category2"
     */
    public function testPropertyConflictingCategory2()
    {
    }
}
