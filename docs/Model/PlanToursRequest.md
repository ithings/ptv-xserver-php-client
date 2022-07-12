# PlanToursRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locations** | [**\Swagger\Client\Model\TourPlanningLocation[]**](TourPlanningLocation.md) |  | [optional] 
**orders** | [**\Swagger\Client\Model\Order[]**](Order.md) |  | [optional] 
**fleet** | [**\Swagger\Client\Model\Fleet**](Fleet.md) |  | 
**input_plan** | [**\Swagger\Client\Model\InputPlan**](InputPlan.md) |  | [optional] 
**plan_tours_options** | [**\Swagger\Client\Model\PlanToursOptions**](PlanToursOptions.md) |  | [optional] 
**distance_mode** | [**\Swagger\Client\Model\DistanceMode**](DistanceMode.md) |  | 
**store_request** | **bool** | Defines if the request should be stored in the session storage. Note that if there occur problems with the session storage, an ObjectNotStoredLimitation is generated and the stored request ID in the response is null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

