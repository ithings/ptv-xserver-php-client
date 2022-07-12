# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An unique ID used to identify the order. | 
**priority** | [**\Swagger\Client\Model\OrderPriority**](OrderPriority.md) |  | [optional] 
**group_id** | **string** | The unique identifier of an order group. The preferences that apply to orders with the same group ID are specified in the order group consideration. Order groups may be referenced in the order group IDs of a vehicle. See technical concept Order Groups for further details. | [optional] 
**required_vehicle_equipment** | **string[]** |  | [optional] 
**category** | **string** | Category of an order. To specify a category is useful if there are orders of one category that shall not be mixed with orders of another category on one trip. If two categories are mutually exclusive on a trip, this can be specified as a mixed loading prohibition. Orders of conflicting categories will not be planned together on one trip. | [optional] 
**type** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

