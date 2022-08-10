# ToursResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_report** | [**\ithings\ptvxserver\model\CostReport**](CostReport.md) |  | 
**tours** | [**\ithings\ptvxserver\model\Tour[]**](Tour.md) |  | [optional] 
**tour_reports** | [**\ithings\ptvxserver\model\TourReport[]**](TourReport.md) |  | [optional] 
**order_ids_not_planned** | **string[]** |  | [optional] 
**order_ids_not_plannable** | **string[]** |  | [optional] 
**vehicle_ids_not_planned** | **string[]** |  | [optional] 
**vehicle_ids_with_tour_violations** | **string[]** |  | [optional] 
**vehicle_ids_with_route_violations** | **string[]** |  | [optional] 
**vehicle_ids_with_direct_distance_estimation** | **string[]** |  | [optional] 
**violated** | **bool** | True if there is any tour violation. | [optional] 
**route_violated** | **bool** | True if there is at least one route violation at the leg. | [optional] 
**stored_request_id** | **string** | Reference to the request that is stored in the session storage with this response as input plan. If there occur any problems with the session storage, an ObjectNotStoredLimitation is generated and this parameter is null even if storage was requested. In case of evaluateToursInExecution no storedRequestId is returned because the stored input plan does not change. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

