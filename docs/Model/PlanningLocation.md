# PlanningLocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | [**\ithings\ptvxserver\model\ClusterPlanningLocation**](ClusterPlanningLocation.md) |  | 
**activity** | **double** | Represents an absolute value of constant activity. Activity values of all locations in a cluster are accumulated to the totalActivity of the cluster. Arbitrary numerical values can be used as activity measure. Typical examples are sales figures, enterprise sizes, or population figures. If estimated tour durations should be balanced, activities can be considered as service times in seconds that have to be done at the corresponding location. In this case, considerActivitiesAsServiceTimes has to be enabled. The resulting tour duration of a cluster consists of the sum of given service times and estimated driving times. | 
**group_id** | **string** | Unique identifier of a group of locations this location belongs to. Locations that are in the same group will be assigned to the same cluster. | [optional] 
**cluster_compatibility** | [**\ithings\ptvxserver\model\ClusterCompatibility**](ClusterCompatibility.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

