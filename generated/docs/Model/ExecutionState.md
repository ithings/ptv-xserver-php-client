# ExecutionState

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vehicle_id** | **string** | Vehicle ID of the tour that is currently in execution. Note that the stored profile of the ToursInExecutionRequest is used for recomputation. | 
**vehicle_position** | [**\ithings\ptvxserver\model\VehiclePosition**](VehiclePosition.md) |  | 
**current_time** | [**\DateTime**](\DateTime.md) | Current time of the execution state. It is assumed that the time between lastTimeTheDriverWorked of workLogbookSummary and currentTime counts as break/rest, provided it has the required minimum duration. | 
**work_logbook_summary** | [**\ithings\ptvxserver\model\WorkLogbookSummary**](WorkLogbookSummary.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

