# DistanceMatrixOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_consideration** | [**\ithings\ptvxserver\model\TimeConsideration**](TimeConsideration.md) |  | [optional] 
**content_snapshot_id** | **string** | Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used. | [optional] 
**high_performance_routing_network_id** | **string** | Specifies the high-performance routing network to use. Besides, the routing type must be explicitly set to RoutingType.HIGH\\_PERFORMANCE\\_ROUTING otherwise a exceptions.ParameterConflictException is thrown. The profile and request parameters of the high-performance routing network are used for linking and routing. The stored profile of the service.RequestBase will be ignored. Throws a exceptions.DataNotAvailableException if the high-performance routing network with the given id does not exist. | [optional] 
**geographic_restrictions** | [**\ithings\ptvxserver\model\GeographicRestrictions**](GeographicRestrictions.md) |  | [optional] 
**detour_factor** | **double** | A factor that describes the average detour an actual route on the road requires, compared to the direct distance. This factor is used to approximate a relation that could not be calculated using the road network. | [optional] 
**average_speed** | [**\ithings\ptvxserver\model\Speed**](Speed.md) |  | [optional] 
**routing_type** | [**\ithings\ptvxserver\model\RoutingType**](RoutingType.md) |  | [optional] 
**persist_toll_costs** | **bool** | Specifies whether to calculate and persist the toll costs of each relation in the distance matrix.    The toll costs are persisted and returned in one currency. If no currency is set in the request, an exception is thrown.    Note that the aggregated toll costs returned by the xDima service can differ slightly from the toll costs returned by the xRoute service because price calculation, currency conversion and rounding is carried out in a different order. | [optional] 
**currency** | [**\ithings\ptvxserver\model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**binary_feature_layer** | [**\ithings\ptvxserver\model\EncodedContent**](EncodedContent.md) |  | [optional] 
**exchange_rates** | [**\ithings\ptvxserver\model\ExchangeRates**](ExchangeRates.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

