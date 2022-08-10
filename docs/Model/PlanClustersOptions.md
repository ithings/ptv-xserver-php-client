# PlanClustersOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_clusters** | [**\ithings\ptvxserver\model\PositiveInteger**](PositiveInteger.md) |  | 
**ignore_imbalance_tolerance** | **bool** | If false, the imbalanceTolerance parameter will be considered by the planning algorithm. If true, the imbalanceTolerance will be ignored and a probably imbalanced solution is returned. | [optional] 
**imbalance_tolerance** | [**\ithings\ptvxserver\model\Tolerance**](Tolerance.md) |  | [optional] 
**optional_cluster_ids** | **string[]** |  | [optional] 
**reduce_overlapping_in_clusters** | **bool** | Clusters are always optimized towards compactness and towards minimal driving times from the reference point to each location. Depending on the routing profile used for driving time calculation, clusters may be stretched along major roads and it is possible that two clusters visually overlap. Furthermore, a high variance among activities might also lead to overlaps. If reduceOverlappingInClusters is set to true, the algorithm tries to reduce overlapping among clusters. If there is no valid solution that avoids overlapping clusters, a valid solution with overlapping clusters is returned. Setting this parameter to true usually increases runtime because additional steps have to be executed. In addition, the activity-imbalance among clusters and the overall driving time per cluster may increase. | [optional] 
**consider_activities_as_service_times** | **bool** | If this parameter is set to true, all activity values set at a location are considered to be service times in seconds. Using service periods as activity means that estimated tour durations are balanced for each cluster instead of the total sum of activity. Therefore the value of ClusterReport.totalActivity represents the estimated tour duration for the corresponding cluster. | [optional] 
**activity_capacities** | [**\ithings\ptvxserver\model\ActivityCapacity[]**](ActivityCapacity.md) |  | [optional] 
**activity_capacities_are_absolute** | **bool** | This feature can be used only when clusters are specified. If set to true, activity capacities are taken as absolute upper bounds for specified clusters according to their input sequence. The parameter imbalanceTolerance does not play any role. This means, it could happen, that a planning location remains unplanned in the end. Furthermore, it could happen, that a cluster facility is not allocated to any planning location, i.e. the respective ClusterReport.numberOfLocations is zero and the respective ClusteredLocations.locationIds is empty. | [optional] 
**calculation_mode** | [**\ithings\ptvxserver\model\ClusterPlanningCalculationMode**](ClusterPlanningCalculationMode.md) |  | [optional] 
**use_travel_distance** | **bool** | If set to true, travel distances and not travel times are used for calculations. The value of this parameter coupled with the choice of DistanceMode in PlanClustersRequest affects the result obtained in response. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

