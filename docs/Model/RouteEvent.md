# RouteEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_type** | [**\ithings\ptvxserver\model\RouteEventType**](RouteEventType.md) |  | [optional] 
**starts_at** | [**\DateTime**](\DateTime.md) | The point in time at which the event starts. This field is only present if a time-consideration scenario with a reference time is given in the request. The time zone is that of the reference time. Use the UTCOffsetEvent to derive the local time. | [optional] 
**coordinate** | [**\ithings\ptvxserver\model\Coordinate**](Coordinate.md) |  | [optional] 
**node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**distance_from_start** | **float** | The distance of the route from the start up to this event. | [optional] 
**travel_time_from_start** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**type** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

