# Segment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**end_node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**distance** | [**\ithings\ptvxserver\model\Distance**](Distance.md) |  | 
**travel_time** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | 
**travel_speed** | [**\ithings\ptvxserver\model\Speed**](Speed.md) |  | 
**traffic_delay** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | [optional] 
**emissions** | [**\ithings\ptvxserver\model\Emissions**](Emissions.md) |  | [optional] 
**violated** | **bool** | If set to true, indicates that this segment contains a violation for the chosen vehicle. | 
**event_indices** | [**\ithings\ptvxserver\model\Index[]**](Index.md) |  | [optional] 
**type** | [**\ithings\ptvxserver\model\SegmentType**](SegmentType.md) |  | 
**polyline** | [**\ithings\ptvxserver\model\EncodedGeometry**](EncodedGeometry.md) |  | [optional] 
**attributes** | [**\ithings\ptvxserver\model\SegmentAttributes**](SegmentAttributes.md) |  | [optional] 
**combined_transport** | [**\ithings\ptvxserver\model\CombinedTransportAttributes**](CombinedTransportAttributes.md) |  | [optional] 
**id** | [**\ithings\ptvxserver\model\SegmentId**](SegmentId.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

