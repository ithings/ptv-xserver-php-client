# TourRestrictions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**single_trip_per_tour** | **bool** | Restricts the number of trips for each tour to one. See Tours and Trips. | [optional] 
**single_depot_per_tour** | **bool** | Restricts the number of depots of a tour to at most one. That means a tour without depots is also valid if this parameter is set to true. See Tours and Trips. | [optional] 
**maximum_number_of_customer_stops_per_tour** | [**\ithings\ptvxserver\model\NonNegativeInteger**](NonNegativeInteger.md) |  | [optional] 
**maximum_distance_per_tour** | **float** | Restricts the maximum allowed total distance per tour in meters. If this parameter is set, maximum distance at vehicles must not be set, otherwise an exception is thrown. Is infinite if it is not set. This restriction is ignored for ToursInExecutionRequests. | [optional] 
**maximum_travel_time_per_tour** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**maximum_driving_time_per_tour** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**working_hours** | [**\ithings\ptvxserver\model\WorkingHours**](WorkingHours.md) |  | [optional] 
**mixed_loading_prohibitions** | [**\ithings\ptvxserver\model\MixedLoadingProhibition[]**](MixedLoadingProhibition.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

