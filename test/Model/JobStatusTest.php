<?php
/**
 * JobStatusTest
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
 * JobStatusTest Class Doc Comment
 *
 * @category    Class
 * @description Specifies different job status values.    * &#x60;QUEUING&#x60; - Job has been enqueued.    * &#x60;RUNNING&#x60; - Job is currently running.    * &#x60;STOPPING&#x60; - Stop has been requested, the job will terminate its calculation as soon as possible.    * &#x60;SUCCEEDED&#x60; - Job has completed successfully.    * &#x60;FAILED&#x60; - Job has failed with an exception.    * &#x60;DELETED&#x60; - The job was deleted by the user.    * &#x60;UNKNOWN&#x60; - The job is in an unknown state. For example a given ID is unknown or the job has already been fetched and has therefore been deleted from the underlying persistent store.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.jobs.JobStatus
 * @package     ithings\ptvxserver
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobStatusTest extends \PHPUnit_Framework_TestCase
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
     * Test "JobStatus"
     */
    public function testJobStatus()
    {
    }
}