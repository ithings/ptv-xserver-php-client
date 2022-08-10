# RoutingResultFields

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**waypoints** | **bool** | Specifies if the RouteResponse.waypoints shall be returned for the complete route. | [optional] 
**legs** | [**\ithings\ptvxserver\model\LegResultFields**](LegResultFields.md) |  | [optional] 
**segments** | [**\ithings\ptvxserver\model\SegmentResultFields**](SegmentResultFields.md) |  | [optional] 
**nodes** | **bool** | Specifies if the RouteResponse.nodes shall be returned for the complete route. | [optional] 
**event_types** | [**\ithings\ptvxserver\model\RouteEventType[]**](RouteEventType.md) |  | [optional] 
**polyline** | **bool** | Specifies if the RouteResponse.polyline shall be returned for the complete route. In order to return the RouteResponse.polyline for legs and segments, enable LegResultFields.polyline and SegmentResultFields.polyline. In order to obtain the elevations for the RouteResponse.polyline, enable PolylineOptions.elevations in RouteOptions. | [optional] 
**toll** | [**\ithings\ptvxserver\model\TollResultFields**](TollResultFields.md) |  | [optional] 
**emissions** | **bool** | Specifies if the RouteResponse.emissions shall be returned for the complete route. | [optional] 
**report** | **bool** | Specifies if the RouteResponse.report shall be returned for the complete route. | [optional] 
**tour_report** | **bool** | Specifies if the RouteResponse.tourReport shall be returned for the complete route. | [optional] 
**encoded_path** | **bool** | Specifies if the RouteResponse.encodedPath shall be returned for the complete route. | [optional] 
**guided_navigation_route** | **bool** | Specifies if the RouteResponse.guidedNavigationRoute shall be returned for the complete route.    Setting this parameter to true requires a detailed list of maneuver events, which have to be requested separately by adding the RouteEventType MANEUVER\\_EVENT to the list of eventTypes in the result fields.    This feature therefore may consume some additional computation time and returns a list of maneuver events in the response. | [optional] 
**monetary_costs_report** | **bool** | Specifies if the RouteResponse.monetaryCostsReport shall be returned for the complete route.    If requested, it is required to specify a currency in the route options. | [optional] 
**alternative_routes** | **bool** | Specifies if the RouteResponse.alternativeRoutes shall be returned.    In addition to the optimal route up to three alternatives are returned. Note that sometimes no alternative routes are returned because possible alternatives are not considered as practical with regards to detour or sharing with the optimal route.    Note that this is only supported with requests with exactly two input waypoints of types OnRoadWaypoint or OffRoadWaypoint, otherwise, an exception will be thrown. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

