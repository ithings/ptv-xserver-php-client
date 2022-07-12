# OnRoadRouteLocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**coordinate** | [**\Swagger\Client\Model\Coordinate**](Coordinate.md) |  | 
**consider_alternative_near_by_roads** | **bool** | If true, roads within a radius of 500 meters around the location are considered as alternative start/end points of the route. Otherwise, the route always starts/ends at the nearest road. Note that this feature is currently available only for the xRoute calculateRoute service for the first and last waypoint. If it is set to true for an intermediate xRoute via waypoint this parameter is ignored and always the nearest road is used. All other services return an exception if this parameter is set to true. | [optional] 
**side_of_street_restriction** | [**\Swagger\Client\Model\SideOfStreetRestriction**](SideOfStreetRestriction.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

