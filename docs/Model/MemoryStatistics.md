# MemoryStatistics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memory_usage** | **int** | Process assignable (private) memory in bytes.     *  Windows: Heap, Stack and Private Data   *  Linux: Resident Set Size (RSS) | [optional] 
**committed_virtual_memory_size** | **int** | Returns the amount of virtual memory that is guaranteed to be available to the running process in bytes. | 
**heap_committed_memory_size** | **int** | Returns the current memory usage of the heap that is available for object allocation. | 
**heap_used_memory_size** | **int** | Returns the current memory usage of the heap that is used for object allocation. | 
**non_heap_committed_memory_size** | **int** | Returns the current memory usage of the non-heap memory that is available for object allocation. | 
**non_heap_used_memory_size** | **int** | Returns the current memory usage of the non-heap memory that is used for object allocation. | 
**process_cpu_time** | [**\Swagger\Client\Model\Nanoseconds**](Nanoseconds.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

