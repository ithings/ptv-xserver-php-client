# OptimizeVisitSequenceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locations** | [**\ithings\ptvxserver\model\ClusterPlanningLocation[]**](ClusterPlanningLocation.md) |  | [optional] 
**start_location_id** | **string** | If given, the location from OptimizeVisitSequenceRequest.locations with this ID is used as the start of the tour. It can be the same as OptimizeVisitSequenceRequest.endLocationId. If not given, the algorithm can freely choose the start of the tour from the given locations. | [optional] 
**end_location_id** | **string** | If given, the location from OptimizeVisitSequenceRequest.locations with this ID is used as the end of the tour. Can be the same as OptimizeVisitSequenceRequest.startLocationId. If not given, the algorithm can freely choose the end of the tour from the given locations. | [optional] 
**optimize_visit_sequence_options** | [**\ithings\ptvxserver\model\OptimizeVisitSequenceOptions**](OptimizeVisitSequenceOptions.md) |  | [optional] 
**distance_mode** | [**\ithings\ptvxserver\model\DistanceMode**](DistanceMode.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

