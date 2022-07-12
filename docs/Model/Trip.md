# Trip

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The reference ID of this trip. Response trips that are identical to input plan trips in stops and stop sequence have the same trip ID as the corresponding input plan trip. The ID also stays the same if the trip&#x27;s position within its tour changes or if its vehicle changes. Response trips that are changed input plan trips or newly generated as result of a PlanToursRequest get a newly generated ID. Trip changes caused by a ChangeToursRequest do not change the trip ID. | 
**stops** | [**\Swagger\Client\Model\TripStop[]**](TripStop.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

