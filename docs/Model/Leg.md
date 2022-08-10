# Leg

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_waypoint_name** | **string** | The name of the start waypoint of the leg. This user-defined name is available only if InputWaypoint.name for the corresponding input waypoint is set. | [optional] 
**end_waypoint_name** | **string** | The name of the end waypoint of the leg. This user-defined name is available only if InputWaypoint.name for the corresponding input waypoint is set. | [optional] 
**start_segment_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**end_segment_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**start_node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**end_node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**start_toll_section_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**end_toll_section_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**distance** | [**\ithings\ptvxserver\model\Distance**](Distance.md) |  | 
**travel_time** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | 
**traffic_delay** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**toll_summary** | [**\ithings\ptvxserver\model\TollSummary**](TollSummary.md) |  | [optional] 
**emissions** | [**\ithings\ptvxserver\model\Emissions**](Emissions.md) |  | [optional] 
**polyline** | [**\ithings\ptvxserver\model\EncodedGeometry**](EncodedGeometry.md) |  | [optional] 
**violated** | **bool** | If set to true, indicates that this leg contains a violation for the chosen vehicle. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

