# RouteOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_consideration** | [**\ithings\ptvxserver\model\TimeConsideration**](TimeConsideration.md) |  | [optional] 
**content_snapshot_id** | **string** | Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used. | [optional] 
**high_performance_routing_network_id** | **string** | Specifies the high-performance routing network to use. Besides, the routing type must be explicitly set to RoutingType.HIGH\\_PERFORMANCE\\_ROUTING otherwise a exceptions.ParameterConflictException is thrown. The profile and request parameters of the high-performance routing network are used for linking and routing. The stored profile of the service.RequestBase will be ignored. Throws a exceptions.DataNotAvailableException if the high-performance routing network with the given id does not exist. | [optional] 
**geographic_restrictions** | [**\ithings\ptvxserver\model\GeographicRestrictions**](GeographicRestrictions.md) |  | [optional] 
**polyline_options** | [**\ithings\ptvxserver\model\PolylineOptions**](PolylineOptions.md) |  | [optional] 
**emission_options** | [**\ithings\ptvxserver\model\EmissionOptions**](EmissionOptions.md) |  | [optional] 
**effective_fuel_consumption** | [**\ithings\ptvxserver\model\EffectiveFuelConsumption**](EffectiveFuelConsumption.md) |  | [optional] 
**toll_options** | [**\ithings\ptvxserver\model\TollOptions**](TollOptions.md) |  | [optional] 
**routing_type** | [**\ithings\ptvxserver\model\RoutingType**](RoutingType.md) |  | [optional] 
**tour_restrictions** | [**\ithings\ptvxserver\model\RoutingTourRestrictions**](RoutingTourRestrictions.md) |  | [optional] 
**calculation_criteria** | [**\ithings\ptvxserver\model\RouteCalculationCriteria**](RouteCalculationCriteria.md) |  | [optional] 
**monetary_cost_options** | [**\ithings\ptvxserver\model\MonetaryCostOptions**](MonetaryCostOptions.md) |  | [optional] 
**binary_feature_layer** | [**\ithings\ptvxserver\model\EncodedContent**](EncodedContent.md) |  | [optional] 
**eta_calculation_options** | [**\ithings\ptvxserver\model\ETACalculationOptions**](ETACalculationOptions.md) |  | [optional] 
**currency** | [**\ithings\ptvxserver\model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**exchange_rates** | [**\ithings\ptvxserver\model\ExchangeRates**](ExchangeRates.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

