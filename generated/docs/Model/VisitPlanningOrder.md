# VisitPlanningOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of this order. | 
**location_id** | **string** | The unique identifier of the customer location that should be visited in this order. | 
**visit_rhythm_in_weeks** | [**\ithings\ptvxserver\model\PositiveInteger**](PositiveInteger.md) |  | 
**number_of_visits_per_week** | [**\ithings\ptvxserver\model\PositiveInteger**](PositiveInteger.md) |  | 
**visit_pattern_options** | [**\ithings\ptvxserver\model\VisitPatternOptions**](VisitPatternOptions.md) |  | [optional] 
**week_of_possible_first_visit** | [**\ithings\ptvxserver\model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**week_of_possible_last_visit** | [**\ithings\ptvxserver\model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**service_times** | [**\ithings\ptvxserver\model\Duration[]**](Duration.md) |  | [optional] 
**score** | [**\ithings\ptvxserver\model\PositiveInteger**](PositiveInteger.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

