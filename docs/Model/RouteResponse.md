# RouteResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distance** | **float** | The distance of the complete route. It is the sum of distances of all segments and hence is a whole number without decimal places (see Segment.distance). It equals the sum of distances of all legs. | 
**travel_time** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | 
**traffic_delay** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**waypoints** | [**\ithings\ptvxserver\model\Waypoint[]**](Waypoint.md) |  | [optional] 
**legs** | [**\ithings\ptvxserver\model\Leg[]**](Leg.md) |  | [optional] 
**segments** | [**\ithings\ptvxserver\model\Segment[]**](Segment.md) |  | [optional] 
**nodes** | [**\ithings\ptvxserver\model\Node[]**](Node.md) |  | [optional] 
**events** | [**\ithings\ptvxserver\model\RouteEvent[]**](RouteEvent.md) |  | [optional] 
**polyline** | [**\ithings\ptvxserver\model\EncodedGeometry**](EncodedGeometry.md) |  | [optional] 
**toll** | [**\ithings\ptvxserver\model\TollResult**](TollResult.md) |  | [optional] 
**emissions** | [**\ithings\ptvxserver\model\Emissions**](Emissions.md) |  | [optional] 
**encoded_path** | [**\ithings\ptvxserver\model\EncodedContent**](EncodedContent.md) |  | [optional] 
**guided_navigation_route** | **string** | A base64 encoded representation of the route that can be used for guided navigation. Calculating a guided navigation route requires maneuver events which have to be requested separately. The base64 binary has to be decoded and saved as text file and can then be imported in PTV Navigator and used for navigation. | [optional] 
**tour_report** | [**\ithings\ptvxserver\model\RoutingTourReport**](RoutingTourReport.md) |  | [optional] 
**violated** | **bool** | If set to true, indicates that this route contains a violation for the chosen vehicle. | 
**report** | [**\ithings\ptvxserver\model\RouteReport**](RouteReport.md) |  | [optional] 
**monetary_costs_report** | [**\ithings\ptvxserver\model\MonetaryCostsReport**](MonetaryCostsReport.md) |  | [optional] 
**eta_calculation_report** | [**\ithings\ptvxserver\model\ETACalculationReport**](ETACalculationReport.md) |  | [optional] 
**alternative_routes** | [**\ithings\ptvxserver\model\AlternativeRoute[]**](AlternativeRoute.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

