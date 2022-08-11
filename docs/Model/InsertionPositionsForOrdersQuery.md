# InsertionPositionsForOrdersQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_ids** | **string[]** |  | [optional] 
**target_vehicle_ids** | **string[]** |  | [optional] 
**maximum_number_of_move_orders_actions** | [**\ithings\ptvxserver\model\NonNegativeInteger**](NonNegativeInteger.md) |  | [optional] 
**maximum_distance_of_adjacent_stops** | **float** | Option to restrict the number of proposals which may reduce the calculation time of the request. A MoveOrdersAction is proposed only if the airline distance of the leg between the sites of the given order and the adjacent stops in the tour is less than the given value. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

