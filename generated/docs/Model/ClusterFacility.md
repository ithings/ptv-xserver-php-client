# ClusterFacility

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cluster** | [**\ithings\ptvxserver\model\Cluster**](Cluster.md) |  | 
**cost** | [**\ithings\ptvxserver\model\MathematicalCost**](MathematicalCost.md) |  | [optional] 
**capacity** | **double** | The sum of activities of all planning locations assigned to this cluster facility cannot exceed the given capacity value. If not set, it is assumed that all planning locations can be assigned to this cluster facility in the worst case. If set, its value should be positive. If set for each cluster facility, it could happen, that a planning location remains unplanned in the end. Furthermore, it could happen, that a cluster facility is not allocated to any planning location, i.e. the respective ClusterReport.numberOfLocations is zero and the respective ClusteredLocations.locationIds is empty. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

