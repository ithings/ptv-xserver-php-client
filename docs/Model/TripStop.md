# TripStop

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **string** | The reference to the location of the site where the stop is served. This location is either a customer site or a depot site. | 
**customer_id** | **string** | ID corresponding to the customerId of a customer site. This parameter needs to be set if the locationId of the stop belongs to a customer site with defined customer ID. Else, the parameter must not be set. | [optional] 
**tasks** | [**\Swagger\Client\Model\OrderTask[]**](OrderTask.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

