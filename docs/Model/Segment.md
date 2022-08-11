# Segment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**end_node_index** | [**\ithings\ptvxserver\model\Index**](Index.md) |  | [optional] 
**distance** | **float** | The travel distance for the segment. It is always a whole number and depends on the segment type as follows.     *  segments.SegmentType.NETWORK\\_SEGMENT. The distance on the network segment which is actually driven on.   *  segments.SegmentType.LINK\\_SEGMENT. The air-line distance between input and link node.   *  segments.SegmentType.COMBINED\\_TRANSPORT. The travel distance is always 0.   *  segments.SegmentType.NOT\\_DRIVING. The travel distance is always 0. | 
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

