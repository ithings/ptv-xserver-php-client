# VisitPlanningOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of this order. | 
**location_id** | **string** | The unique identifier of the customer location that should be visited in this order. | 
**visit_rhythm_in_weeks** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | 
**number_of_visits_per_week** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | 
**visit_pattern_options** | [**\Swagger\Client\Model\VisitPatternOptions**](VisitPatternOptions.md) |  | [optional] 
**week_of_possible_first_visit** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**week_of_possible_last_visit** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**service_times** | [**\Swagger\Client\Model\Duration[]**](Duration.md) |  | [optional] 
**score** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

