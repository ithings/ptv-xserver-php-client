# TweaksToObjective

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**avoid_intersections** | **bool** | If this parameter is set to true, the focus is to avoid intersections of edges, where an edge is a straight line drawn between two consecutive stops in a trip. The number of tours may be higher compared to the result when this parameter is set to false. If the calculation mode is set to avoid intersections, this must be set, otherwise an exception is thrown. | [optional] 
**minimize_number_of_tours** | **bool** | If this parameter is set to true, the algorithm plans as many orders as possible using as few vehicles as possible, even though the costs, for example driving time or distance, of the whole plan might increase. If this parameter is set to false, the algorithm plans as many orders as possible so that the total cost is minimized. Therefore it is likely that the number of tours will be higher compared to the result when this parameter is set to false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

