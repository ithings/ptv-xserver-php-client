# Leg

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_waypoint_name** | **string** | The name of the start waypoint of the leg. This user-defined name is available only if InputWaypoint.name for the corresponding input waypoint is set. | [optional] 
**end_waypoint_name** | **string** | The name of the end waypoint of the leg. This user-defined name is available only if InputWaypoint.name for the corresponding input waypoint is set. | [optional] 
**start_segment_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**end_segment_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**start_node_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**end_node_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**start_toll_section_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**end_toll_section_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**distance** | [**\Swagger\Client\Model\Distance**](Distance.md) |  | 
**travel_time** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | 
**traffic_delay** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**toll_summary** | [**\Swagger\Client\Model\TollSummary**](TollSummary.md) |  | [optional] 
**emissions** | [**\Swagger\Client\Model\Emissions**](Emissions.md) |  | [optional] 
**polyline** | [**\Swagger\Client\Model\EncodedGeometry**](EncodedGeometry.md) |  | [optional] 
**violated** | **bool** | If set to true, indicates that this leg contains a violation for the chosen vehicle. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

