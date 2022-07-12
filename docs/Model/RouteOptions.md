# RouteOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_consideration** | [**\Swagger\Client\Model\TimeConsideration**](TimeConsideration.md) |  | [optional] 
**content_snapshot_id** | **string** | Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used. | [optional] 
**high_performance_routing_network_id** | **string** | Specifies the high-performance routing network to use. Besides, the routing type must be explicitly set to RoutingType.HIGH\\_PERFORMANCE\\_ROUTING otherwise a exceptions.ParameterConflictException is thrown. The profile and request parameters of the high-performance routing network are used for linking and routing. The stored profile of the service.RequestBase will be ignored. Throws a exceptions.DataNotAvailableException if the high-performance routing network with the given id does not exist. | [optional] 
**geographic_restrictions** | [**\Swagger\Client\Model\GeographicRestrictions**](GeographicRestrictions.md) |  | [optional] 
**polyline_options** | [**\Swagger\Client\Model\PolylineOptions**](PolylineOptions.md) |  | [optional] 
**emission_options** | [**\Swagger\Client\Model\EmissionOptions**](EmissionOptions.md) |  | [optional] 
**effective_fuel_consumption** | [**\Swagger\Client\Model\EffectiveFuelConsumption**](EffectiveFuelConsumption.md) |  | [optional] 
**toll_options** | [**\Swagger\Client\Model\TollOptions**](TollOptions.md) |  | [optional] 
**routing_type** | [**\Swagger\Client\Model\RoutingType**](RoutingType.md) |  | [optional] 
**tour_restrictions** | [**\Swagger\Client\Model\RoutingTourRestrictions**](RoutingTourRestrictions.md) |  | [optional] 
**calculation_criteria** | [**\Swagger\Client\Model\RouteCalculationCriteria**](RouteCalculationCriteria.md) |  | [optional] 
**monetary_cost_options** | [**\Swagger\Client\Model\MonetaryCostOptions**](MonetaryCostOptions.md) |  | [optional] 
**binary_feature_layer** | [**\Swagger\Client\Model\EncodedContent**](EncodedContent.md) |  | [optional] 
**eta_calculation_options** | [**\Swagger\Client\Model\ETACalculationOptions**](ETACalculationOptions.md) |  | [optional] 
**currency** | [**\Swagger\Client\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**exchange_rates** | [**\Swagger\Client\Model\ExchangeRates**](ExchangeRates.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

