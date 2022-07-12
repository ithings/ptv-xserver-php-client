# ViolationReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**maximum_opening_interval_exceedance** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**maximum_quantity_scenario_exceedance** | [**\Swagger\Client\Model\TransportQuantityUnit[]**](TransportQuantityUnit.md) |  | [optional] 
**vehicle_equipment_violations** | **string[]** |  | [optional] 
**rest_position_violated** | **bool** | Indicates if any daily rest is scheduled at an unexpected position according to possible rest positions that can for example be defined by multi day drivers&#x27; working hours. | [optional] 
**customer_stop_position_in_trip_violated** | **bool** | Indicates if any service is scheduled at an unexpected position according to the position in trip. Corresponds to tour events with violation type CUSTOMER\\_STOP\\_POSITION\\_IN\\_TRIP. | [optional] 
**trip_section_violated** | **bool** | Indicates if any service is scheduled at an unexpected position according to the trip section number. Corresponds to tour events with violation type TRIP\\_SECTION. | [optional] 
**mixed_loading_prohibitions_violations** | [**\Swagger\Client\Model\MixedLoadingProhibition[]**](MixedLoadingProhibition.md) |  | [optional] 
**route_violated** | **bool** | Indicates if at least one of the routes between two locations is violated. This violation does not occur if ignore route violations is set to true. Corresponds to tour events with violation type ROUTE. | [optional] 
**reachability_violated** | **bool** | Indicates if at least one of the routes between two locations was calculated by direct distance instead of the road network. This violation does not occur if ignore reachability violations is set to false and if distance mode is not set to direct distance. Corresponds to tour events with violation type REACHABILITY. | [optional] 
**type** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

