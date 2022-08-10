# Request

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | ID of this request. | 
**service_name** | **string** | The used service. | 
**method_name** | **string** | The used method. | 
**status** | [**\ithings\ptvxserver\model\JobStatus**](JobStatus.md) |  | [optional] 
**request_information** | [**\ithings\ptvxserver\model\RequestInformation[]**](RequestInformation.md) |  | [optional] 
**finished** | [**\DateTime**](\DateTime.md) | Deprecated: inaccurate type assigned, use finishedAt instead. | [optional] 
**finished_at** | [**\DateTime**](\DateTime.md) | Instant of time when the request ended. | [optional] 
**calculation_time** | **int** | Calculation time of the request. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

