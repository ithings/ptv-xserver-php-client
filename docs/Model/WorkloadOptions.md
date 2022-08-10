# WorkloadOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**maximum_weekly_workload** | [**\ithings\ptvxserver\model\Duration**](Duration.md) |  | 
**workloads_by_day** | [**\ithings\ptvxserver\model\WorkloadByDay[]**](WorkloadByDay.md) |  | [optional] 
**allow_skipping_visits** | **bool** | If set to true, orders may be partially planned, i.e. visits of a visit order can be skipped for one or multiple weeks.    If a week is skipped for a visit order, all visits of this week (according to numberOfVisitsPerWeek will be skipped for this visit order.    If a visit order is partially planned, it will be referenced in visitOrderIdsSkipped for all skipped weeks.    If set to false, either all visits of a visit order are planned or none.    If an order is not planned at all, it will be referenced in visitOrderIdsNotPlanned. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

