# RouteResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distance** | [**\Swagger\Client\Model\Distance**](Distance.md) |  | 
**travel_time** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | 
**traffic_delay** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**waypoints** | [**\Swagger\Client\Model\Waypoint[]**](Waypoint.md) |  | [optional] 
**legs** | [**\Swagger\Client\Model\Leg[]**](Leg.md) |  | [optional] 
**segments** | [**\Swagger\Client\Model\Segment[]**](Segment.md) |  | [optional] 
**nodes** | [**\Swagger\Client\Model\Node[]**](Node.md) |  | [optional] 
**events** | [**\Swagger\Client\Model\RouteEvent[]**](RouteEvent.md) |  | [optional] 
**polyline** | [**\Swagger\Client\Model\EncodedGeometry**](EncodedGeometry.md) |  | [optional] 
**toll** | [**\Swagger\Client\Model\TollResult**](TollResult.md) |  | [optional] 
**emissions** | [**\Swagger\Client\Model\Emissions**](Emissions.md) |  | [optional] 
**encoded_path** | [**\Swagger\Client\Model\EncodedContent**](EncodedContent.md) |  | [optional] 
**guided_navigation_route** | **string** | A base64 encoded representation of the route that can be used for guided navigation. Calculating a guided navigation route requires maneuver events which have to be requested separately. The base64 binary has to be decoded and saved as text file and can then be imported in PTV Navigator and used for navigation. | [optional] 
**tour_report** | [**\Swagger\Client\Model\RoutingTourReport**](RoutingTourReport.md) |  | [optional] 
**violated** | **bool** | If set to true, indicates that this route contains a violation for the chosen vehicle. | 
**report** | [**\Swagger\Client\Model\RouteReport**](RouteReport.md) |  | [optional] 
**monetary_costs_report** | [**\Swagger\Client\Model\MonetaryCostsReport**](MonetaryCostsReport.md) |  | [optional] 
**eta_calculation_report** | [**\Swagger\Client\Model\ETACalculationReport**](ETACalculationReport.md) |  | [optional] 
**alternative_routes** | [**\Swagger\Client\Model\AlternativeRoute[]**](AlternativeRoute.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

