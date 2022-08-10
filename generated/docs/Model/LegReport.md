# LegReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_tour_event_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**end_tour_event_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**driving_time** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**distance** | [**\ithings\ptvxserver\model\Distance**](Distance.md) |  | [optional] 
**estimated_by_direct_distance** | **bool** | True if the driving time of this leg is estimated by direct distance instead of the road network.    Possible causes:     *  start or end not within boundaries of map,   *  start or end too far from next road,   *  no route found between start and end.    If EstimateByReferenceMatrix is used as distance mode, the leg is estimated by direct distance if and only if the according reference locations are estimated by direct distance. If DirectDistance is used as distance mode, this flag will always be set. | [optional] 
**route_violated** | **bool** | True if the leg is calculated with route violations. If EstimateByReferenceMatrix is used as distance mode, the route is violated if and only if the route between the according reference locations is violated. | [optional] 
**transport_quantities** | [**\ithings\ptvxserver\model\TransportQuantityUnit[]**](TransportQuantityUnit.md) |  | [optional] 
**maximum_quantity_scenario_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

