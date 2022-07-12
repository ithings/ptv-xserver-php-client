# TourRestrictions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**single_trip_per_tour** | **bool** | Restricts the number of trips for each tour to one. See Tours and Trips. | [optional] 
**single_depot_per_tour** | **bool** | Restricts the number of depots of a tour to at most one. That means a tour without depots is also valid if this parameter is set to true. See Tours and Trips. | [optional] 
**maximum_number_of_customer_stops_per_tour** | [**\Swagger\Client\Model\NonNegativeInteger**](NonNegativeInteger.md) |  | [optional] 
**maximum_distance_per_tour** | [**\Swagger\Client\Model\Distance**](Distance.md) |  | [optional] 
**maximum_travel_time_per_tour** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**maximum_driving_time_per_tour** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**working_hours** | [**\Swagger\Client\Model\WorkingHours**](WorkingHours.md) |  | [optional] 
**mixed_loading_prohibitions** | [**\Swagger\Client\Model\MixedLoadingProhibition[]**](MixedLoadingProhibition.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

