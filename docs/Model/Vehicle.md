# Vehicle

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ids** | **string[]** |  | [optional] 
**maximum_quantity_scenarios** | [**\Swagger\Client\Model\MaximumQuantityScenario[]**](MaximumQuantityScenario.md) |  | [optional] 
**quantity_scenario_change_position** | [**\Swagger\Client\Model\QuantityScenarioChangePosition**](QuantityScenarioChangePosition.md) |  | [optional] 
**distance_matrix_id** | **string** | Distance matrix of this vehicle if distance mode ExistingDistanceMatrixPerVehicle is specified. Empty otherwise. If not, an exception is thrown. The distance matrix is specified by its ID, which can be retrieved in the distance matrix summary of the corresponding DistanceMatrixResponse. The ID is considered case sensitively. The distance matrix has to contain every location that is necessary for the tour planning, otherwise an exception is thrown. | [optional] 
**start_location_id** | **string** | ID of the vehicle&#x27;s start location. May be a vehicle location or a site. Opening intervals and service times are not considered for a vehicle&#x27;s start location. If no start location is specified, it is assumed that the vehicle is available at the first stop. | [optional] 
**end_location_id** | **string** | ID of the vehicle&#x27;s end location. May be a vehicle location or a site. Opening intervals and service times are not considered for a vehicle&#x27;s end location. If no end location is specified, it is assumed that the vehicle remains at the last stop. | [optional] 
**service_time_factor_for_orders** | [**\Swagger\Client\Model\ServiceTimeFactor**](ServiceTimeFactor.md) |  | [optional] 
**service_time_per_stop** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**equipment** | **string[]** |  | [optional] 
**order_group_ids** | **string[]** |  | [optional] 
**tour_start_interval** | [**\Swagger\Client\Model\StartEndInterval**](StartEndInterval.md) |  | [optional] 
**maximum_number_of_customer_stops** | [**\Swagger\Client\Model\NonNegativeInteger**](NonNegativeInteger.md) |  | [optional] 
**maximum_distance** | [**\Swagger\Client\Model\Distance**](Distance.md) |  | [optional] 
**maximum_travel_time** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**maximum_driving_time** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**ignore_mixed_loading_prohibitions** | **bool** | Indicates whether the mixed loading prohibitions are relevant for this vehicle. If set to false, the mixed loading prohibitions -- if there are any -- must be respected on every trip of the vehicle. If set to true, the mixed loading prohibitions are ignored by the vehicle. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

