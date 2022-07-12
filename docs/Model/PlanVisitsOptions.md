# PlanVisitsOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**planning_period** | [**\Swagger\Client\Model\PlanningPeriod**](PlanningPeriod.md) |  | 
**work_days** | [**\Swagger\Client\Model\Week**](Week.md) |  | 
**ignore_weekly_imbalance_tolerance** | **bool** | If false, the weeklyImbalanceTolerance parameter will be considered by the planning algorithm. If true, the weeklyImbalanceTolerance will be ignored and a probably imbalanced solution is returned. This parameter is ignored if workLoadOptions are used. | [optional] 
**weekly_imbalance_tolerance** | [**\Swagger\Client\Model\Tolerance**](Tolerance.md) |  | [optional] 
**ignore_daily_imbalance_tolerance** | **bool** | If false, the dailyImbalanceTolerance parameter will be considered by the planning algorithm. If true, the dailyImbalanceTolerance will be ignored and a probably imbalanced solution is returned. This parameter is ignored if workLoadOptions are used. | [optional] 
**daily_imbalance_tolerance** | [**\Swagger\Client\Model\Tolerance**](Tolerance.md) |  | [optional] 
**determine_shortest_visit_sequence_per_day** | **bool** | If true, the visits are returned in an optimal sequence that leads to a shortest tour with respect to travel time for each visit day. The calculation of these shortest tours is allowed to take up to 100 seconds of calculation time on top of the configured solverTimeLimit per day in the result but is usually much quicker. If the parameter is false, visits are sorted by visit day but the sequence of visits within a visit day has no special meaning. | [optional] 
**improve_daily_workload_balance** | **bool** | This feature is only available for the Gurobi solver type. If true, xcluster attempts to further minimize workload imbalances between days. In contrast to the dailyImbalanceTolerance this option considers the workload to not only consist of service time, but also of the travel time between customers on the day. This additional improvement may take up to solverTimeLimit of additional processing time. As the daily workload is calculated based on the shortest visit sequence for the day, determineShortestVisitSequencePerDay is implied to be true. If improveDailyWorkloadBalance is false, balancing will only be performed based on service time according to the given tolerances. This parameter is ignored if workLoadOptions are used. | [optional] 
**overnight_stay_options** | [**\Swagger\Client\Model\OvernightStayOptions**](OvernightStayOptions.md) |  | [optional] 
**workload_options** | [**\Swagger\Client\Model\WorkloadOptions**](WorkloadOptions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

