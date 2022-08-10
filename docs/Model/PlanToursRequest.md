# PlanToursRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locations** | [**\ithings\ptvxserver\model\TourPlanningLocation[]**](TourPlanningLocation.md) |  | [optional] 
**orders** | [**\ithings\ptvxserver\model\Order[]**](Order.md) |  | [optional] 
**fleet** | [**\ithings\ptvxserver\model\Fleet**](Fleet.md) |  | 
**input_plan** | [**\ithings\ptvxserver\model\InputPlan**](InputPlan.md) |  | [optional] 
**plan_tours_options** | [**\ithings\ptvxserver\model\PlanToursOptions**](PlanToursOptions.md) |  | [optional] 
**distance_mode** | [**\ithings\ptvxserver\model\DistanceMode**](DistanceMode.md) |  | 
**store_request** | **bool** | Defines if the request should be stored in the session storage. Note that if there occur problems with the session storage, an ObjectNotStoredLimitation is generated and the stored request ID in the response is null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

