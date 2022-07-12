# TripReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trip_id** | **string** | ID of the corresponding trip to this report. | 
**cost_report** | [**\Swagger\Client\Model\CostReport**](CostReport.md) |  | 
**violation_report** | [**\Swagger\Client\Model\TripViolationReport**](TripViolationReport.md) |  | [optional] 
**order_group_id** | **string** | If there is at least one order with a groupId in the trip, the orderGroupId of a tripReport is the groupId that occurs most often among the orders of this trip. If no order of this trip has a groupId then this field is not set. If a planToursRequest has a trip in the input plan with different groupIds among the orders, first the orderGroupId of the trip is determined and then only orders of the same groupId are inserted in this trip during automatic planning. A changeToursRequest can change the orderGroupId of a trip for example by removing orders from the trip. All changeToursActions are performed even if options of the orderGroupConsideration are not fulfilled or if the orderGroupId does not match with any of the orderGroupIds of the target vehicle. For further information please have a look at the technical concept Order Groups. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

