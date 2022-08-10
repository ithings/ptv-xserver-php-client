# Maneuver

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**u_turn_cost** | [**\ithings\ptvxserver\model\MathematicalCost**](MathematicalCost.md) |  | [optional] 
**high_performance_routing_u_turn_cost** | [**\ithings\ptvxserver\model\MathematicalCost**](MathematicalCost.md) |  | [optional] 
**consider_turning_bans** | **bool** | The consideration of turning bans. | [optional] 
**use_fast_turning_ban_heuristic** | **bool** | The fast turning ban heuristic is used by default. This heuristic can cause in rare cases suboptimal routes because then driving in both directions of roads is not always considered by the algorithm. Switching off the heuristic by setting this attribute to false yields better routes but can increase the runtime of the routing algorithm. | [optional] 
**intersection_turn_costs** | [**\ithings\ptvxserver\model\IntersectionTurnCosts**](IntersectionTurnCosts.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

