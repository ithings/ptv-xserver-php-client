# PlanToursOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**planning_horizon** | [**\Swagger\Client\Model\StartEndInterval**](StartEndInterval.md) |  | [optional] 
**restrictions** | [**\Swagger\Client\Model\TourRestrictions**](TourRestrictions.md) |  | [optional] 
**calculation_mode** | [**\Swagger\Client\Model\TourPlanningCalculationMode**](TourPlanningCalculationMode.md) |  | [optional] 
**custom_calculation_mode_configuration** | [**\Swagger\Client\Model\EncodedContent**](EncodedContent.md) |  | [optional] 
**tweaks_to_objective** | [**\Swagger\Client\Model\TweaksToObjective**](TweaksToObjective.md) |  | [optional] 
**order_group_consideration** | [**\Swagger\Client\Model\OrderGroupConsideration**](OrderGroupConsideration.md) |  | [optional] 
**single_stop_per_customer_site** | **bool** | Defines a strong preference that all tasks of orders for the same customer site are carried out at the same stop if possible. If this is not possible, all unplanned orders for that customer site remain unplanned. Transport orders between two customer sites are ignored here. This preference is only considered in automatic planning. If this preference is not met for an input plan or for a change tours action, it is not reported as a violation. | [optional] 
**consider_order_priorities** | **bool** | If set to true order priorities are considered during automatic planning. Please keep in mind that using multiple priorities will increase the computation time of the algorithm. See technical concept Order Priorities for further details. | [optional] 
**ignore_route_violations** | **bool** | If this field is set to true, route violations are ignored. No route violation is reported at the tour events. If this field is set to false, automatic planning will not create a tour with a route violation. Input tours with a route violation will be treated as violated tours and therefore will not be changed by the automatic planning. At the leg report and at the tours response route violated is set regardless of this field. | [optional] 
**ignore_reachability_violations** | **bool** | If this field is set to true, reachability violations are ignored. No reachability violation is reported at the tour events. If this field is set to false, automatic planning will not create a tour with a reachability violation. Input tours with a reachability violation will be treated as violated tours and therefore will not be changed by the automatic planning. At the leg report estimated by direct distance is set regardless of this field. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

