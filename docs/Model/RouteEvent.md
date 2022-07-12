# RouteEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_type** | [**\Swagger\Client\Model\RouteEventType**](RouteEventType.md) |  | [optional] 
**starts_at** | [**\DateTime**](\DateTime.md) | The point in time at which the event starts. This field is only present if a time-consideration scenario with a reference time is given in the request. The time zone is that of the reference time. Use the UTCOffsetEvent to derive the local time. | [optional] 
**coordinate** | [**\Swagger\Client\Model\Coordinate**](Coordinate.md) |  | [optional] 
**node_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**distance_from_start** | [**\Swagger\Client\Model\Distance**](Distance.md) |  | [optional] 
**travel_time_from_start** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**type** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

