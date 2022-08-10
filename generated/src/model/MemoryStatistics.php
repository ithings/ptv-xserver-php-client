<?php
/**
 * MemoryStatistics
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

use \ArrayAccess;
use \ithings\ptvxserver\ObjectSerializer;

/**
 * MemoryStatistics Class Doc Comment
 *
 * @category Class
 * @description Represents memory information on Java virtual machine. These values are operating-system dependent and may contain shared memory. High values are not critical as long as the performance does not drop. It may even happen that the total memory consumption of all modules exceeds the available physical memory. Hint: Corresponding type in xServer API documentation - com.ptvgroup.xserver.xruntime.MemoryStatistics
 * @package  ithings\ptvxserver
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemoryStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemoryStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'memory_usage' => 'int',
'committed_virtual_memory_size' => 'int',
'heap_committed_memory_size' => 'int',
'heap_used_memory_size' => 'int',
'non_heap_committed_memory_size' => 'int',
'non_heap_used_memory_size' => 'int',
'process_cpu_time' => '\ithings\ptvxserver\model\Nanoseconds'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'memory_usage' => 'int64',
'committed_virtual_memory_size' => 'int64',
'heap_committed_memory_size' => 'int64',
'heap_used_memory_size' => 'int64',
'non_heap_committed_memory_size' => 'int64',
'non_heap_used_memory_size' => 'int64',
'process_cpu_time' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'memory_usage' => 'memoryUsage',
'committed_virtual_memory_size' => 'committedVirtualMemorySize',
'heap_committed_memory_size' => 'heapCommittedMemorySize',
'heap_used_memory_size' => 'heapUsedMemorySize',
'non_heap_committed_memory_size' => 'nonHeapCommittedMemorySize',
'non_heap_used_memory_size' => 'nonHeapUsedMemorySize',
'process_cpu_time' => 'processCPUTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memory_usage' => 'setMemoryUsage',
'committed_virtual_memory_size' => 'setCommittedVirtualMemorySize',
'heap_committed_memory_size' => 'setHeapCommittedMemorySize',
'heap_used_memory_size' => 'setHeapUsedMemorySize',
'non_heap_committed_memory_size' => 'setNonHeapCommittedMemorySize',
'non_heap_used_memory_size' => 'setNonHeapUsedMemorySize',
'process_cpu_time' => 'setProcessCpuTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memory_usage' => 'getMemoryUsage',
'committed_virtual_memory_size' => 'getCommittedVirtualMemorySize',
'heap_committed_memory_size' => 'getHeapCommittedMemorySize',
'heap_used_memory_size' => 'getHeapUsedMemorySize',
'non_heap_committed_memory_size' => 'getNonHeapCommittedMemorySize',
'non_heap_used_memory_size' => 'getNonHeapUsedMemorySize',
'process_cpu_time' => 'getProcessCpuTime'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['memory_usage'] = isset($data['memory_usage']) ? $data['memory_usage'] : null;
        $this->container['committed_virtual_memory_size'] = isset($data['committed_virtual_memory_size']) ? $data['committed_virtual_memory_size'] : null;
        $this->container['heap_committed_memory_size'] = isset($data['heap_committed_memory_size']) ? $data['heap_committed_memory_size'] : null;
        $this->container['heap_used_memory_size'] = isset($data['heap_used_memory_size']) ? $data['heap_used_memory_size'] : null;
        $this->container['non_heap_committed_memory_size'] = isset($data['non_heap_committed_memory_size']) ? $data['non_heap_committed_memory_size'] : null;
        $this->container['non_heap_used_memory_size'] = isset($data['non_heap_used_memory_size']) ? $data['non_heap_used_memory_size'] : null;
        $this->container['process_cpu_time'] = isset($data['process_cpu_time']) ? $data['process_cpu_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['committed_virtual_memory_size'] === null) {
            $invalidProperties[] = "'committed_virtual_memory_size' can't be null";
        }
        if ($this->container['heap_committed_memory_size'] === null) {
            $invalidProperties[] = "'heap_committed_memory_size' can't be null";
        }
        if ($this->container['heap_used_memory_size'] === null) {
            $invalidProperties[] = "'heap_used_memory_size' can't be null";
        }
        if ($this->container['non_heap_committed_memory_size'] === null) {
            $invalidProperties[] = "'non_heap_committed_memory_size' can't be null";
        }
        if ($this->container['non_heap_used_memory_size'] === null) {
            $invalidProperties[] = "'non_heap_used_memory_size' can't be null";
        }
        if ($this->container['process_cpu_time'] === null) {
            $invalidProperties[] = "'process_cpu_time' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets memory_usage
     *
     * @return int
     */
    public function getMemoryUsage()
    {
        return $this->container['memory_usage'];
    }

    /**
     * Sets memory_usage
     *
     * @param int $memory_usage Process assignable (private) memory in bytes.     *  Windows: Heap, Stack and Private Data   *  Linux: Resident Set Size (RSS)
     *
     * @return $this
     */
    public function setMemoryUsage($memory_usage)
    {
        $this->container['memory_usage'] = $memory_usage;

        return $this;
    }

    /**
     * Gets committed_virtual_memory_size
     *
     * @return int
     */
    public function getCommittedVirtualMemorySize()
    {
        return $this->container['committed_virtual_memory_size'];
    }

    /**
     * Sets committed_virtual_memory_size
     *
     * @param int $committed_virtual_memory_size Returns the amount of virtual memory that is guaranteed to be available to the running process in bytes.
     *
     * @return $this
     */
    public function setCommittedVirtualMemorySize($committed_virtual_memory_size)
    {
        $this->container['committed_virtual_memory_size'] = $committed_virtual_memory_size;

        return $this;
    }

    /**
     * Gets heap_committed_memory_size
     *
     * @return int
     */
    public function getHeapCommittedMemorySize()
    {
        return $this->container['heap_committed_memory_size'];
    }

    /**
     * Sets heap_committed_memory_size
     *
     * @param int $heap_committed_memory_size Returns the current memory usage of the heap that is available for object allocation.
     *
     * @return $this
     */
    public function setHeapCommittedMemorySize($heap_committed_memory_size)
    {
        $this->container['heap_committed_memory_size'] = $heap_committed_memory_size;

        return $this;
    }

    /**
     * Gets heap_used_memory_size
     *
     * @return int
     */
    public function getHeapUsedMemorySize()
    {
        return $this->container['heap_used_memory_size'];
    }

    /**
     * Sets heap_used_memory_size
     *
     * @param int $heap_used_memory_size Returns the current memory usage of the heap that is used for object allocation.
     *
     * @return $this
     */
    public function setHeapUsedMemorySize($heap_used_memory_size)
    {
        $this->container['heap_used_memory_size'] = $heap_used_memory_size;

        return $this;
    }

    /**
     * Gets non_heap_committed_memory_size
     *
     * @return int
     */
    public function getNonHeapCommittedMemorySize()
    {
        return $this->container['non_heap_committed_memory_size'];
    }

    /**
     * Sets non_heap_committed_memory_size
     *
     * @param int $non_heap_committed_memory_size Returns the current memory usage of the non-heap memory that is available for object allocation.
     *
     * @return $this
     */
    public function setNonHeapCommittedMemorySize($non_heap_committed_memory_size)
    {
        $this->container['non_heap_committed_memory_size'] = $non_heap_committed_memory_size;

        return $this;
    }

    /**
     * Gets non_heap_used_memory_size
     *
     * @return int
     */
    public function getNonHeapUsedMemorySize()
    {
        return $this->container['non_heap_used_memory_size'];
    }

    /**
     * Sets non_heap_used_memory_size
     *
     * @param int $non_heap_used_memory_size Returns the current memory usage of the non-heap memory that is used for object allocation.
     *
     * @return $this
     */
    public function setNonHeapUsedMemorySize($non_heap_used_memory_size)
    {
        $this->container['non_heap_used_memory_size'] = $non_heap_used_memory_size;

        return $this;
    }

    /**
     * Gets process_cpu_time
     *
     * @return \ithings\ptvxserver\model\Nanoseconds
     */
    public function getProcessCpuTime()
    {
        return $this->container['process_cpu_time'];
    }

    /**
     * Sets process_cpu_time
     *
     * @param \ithings\ptvxserver\model\Nanoseconds $process_cpu_time process_cpu_time
     *
     * @return $this
     */
    public function setProcessCpuTime($process_cpu_time)
    {
        $this->container['process_cpu_time'] = $process_cpu_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
