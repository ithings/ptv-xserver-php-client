<?php
/**
 * JobStatus
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
 * JobStatus Class Doc Comment
 *
 * @category Class
 * @description Specifies different job status values.    * &#x60;QUEUING&#x60; - Job has been enqueued.    * &#x60;RUNNING&#x60; - Job is currently running.    * &#x60;STOPPING&#x60; - Stop has been requested, the job will terminate its calculation as soon as possible.    * &#x60;SUCCEEDED&#x60; - Job has completed successfully.    * &#x60;FAILED&#x60; - Job has failed with an exception.    * &#x60;DELETED&#x60; - The job was deleted by the user.    * &#x60;UNKNOWN&#x60; - The job is in an unknown state. For example a given ID is unknown or the job has already been fetched and has therefore been deleted from the underlying persistent store.  Hint: Corresponding enum in xServer API documentation - com.ptvgroup.xserver.jobs.JobStatus
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobStatus
{
    /**
     * Possible values of this enum
     */
    const QUEUING = 'QUEUING';
const RUNNING = 'RUNNING';
const STOPPING = 'STOPPING';
const SUCCEEDED = 'SUCCEEDED';
const FAILED = 'FAILED';
const DELETED = 'DELETED';
const UNKNOWN = 'UNKNOWN';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUEUING,
self::RUNNING,
self::STOPPING,
self::SUCCEEDED,
self::FAILED,
self::DELETED,
self::UNKNOWN,        ];
    }
}
