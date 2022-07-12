# TourEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | [**\DateTime**](\DateTime.md) | Start time of the event. The time zone is that of the planning horizon (if a planning horizon is defined) or that of a given location. | 
**trip_id** | **string** | ID of the trip this event is referring to, for example for a TRIP\\_START event. Not set for events that do not belong to a specific trip such as DRIVING events between depot sites of adjacent trips. | [optional] 
**location_id** | **string** | ID of the location where the vehicle is stopped during this event. Not set for events that do not belong to a specific site such as DRIVING events or BREAK events that occur en route between two stops. | [optional] 
**order_id** | **string** | ID of the order that is currently carried if the event is a SERVICE event. Not set for other event types. | [optional] 
**event_types** | [**\Swagger\Client\Model\TourEventType[]**](TourEventType.md) |  | [optional] 
**tour_violations** | [**\Swagger\Client\Model\TourViolation[]**](TourViolation.md) |  | [optional] 
**duration** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

