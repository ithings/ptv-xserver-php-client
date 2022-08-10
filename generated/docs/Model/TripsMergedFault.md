# TripsMergedFault

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vehicle_id** | **string** | ID of the vehicle that would serve a tour with invalid structure. | 
**trip_id_a** | **string** | ID of the trip that would be merged with the trip corresponding to tripIdB. | 
**trip_id_b** | **string** | ID of the trip that would be merged with the trip corresponding to tripIdA. | 
**object_id** | **string** | ID of the object in the ChangeToursAction that would cause the merge of two trips.     *  In case of a move trips action it will be a tripId.   *  In case of a move orders action it will be an orderId.   *  In case of a remove orders action it will be an orderId.   *  In case of a remove trips action it will be a tripId.   *  In case of a move stops action it will be the position of a stop within the trip (either the position of the moved stop itself or of the stop containing the corresponding partner task). | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

