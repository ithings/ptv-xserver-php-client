# ModuleInstance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instance_id** | **string** | Instance ID. Usually m0001, m0002, ... | [optional] 
**services** | **string[]** |  | [optional] 
**uptime** | [**\ithings\ptvxserver\model\Nanoseconds**](Nanoseconds.md) |  | 
**number_of_restarts** | [**\ithings\ptvxserver\model\NonNegativeInteger**](NonNegativeInteger.md) |  | 
**in_use** | **bool** | Is this instance currently in use? | 
**use_counter** | **int** | How often has this instance been used since last restart? | 
**memory_statistics** | [**\ithings\ptvxserver\model\MemoryStatistics**](MemoryStatistics.md) |  | [optional] 
**state** | **string** | Current state of this instance, e.g. STARTING, RUNNING, STOPPING, TERMINATED, FAILED. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

