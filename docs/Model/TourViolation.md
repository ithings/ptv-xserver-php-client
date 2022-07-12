# TourViolation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**caused_by_this_event** | **bool** | True if the violation is caused by the tour event that contains this tour violation. For violations of type VEHICLE\\_EQUIPMENT and MAXIMUM\\_QUANTITY\\_SCENARIO the order ID of the tour event references the order that caused this violation. For time violations this member is true for the first event of a specific type of time violation. | [optional] 
**type** | [**\Swagger\Client\Model\TourViolationType**](TourViolationType.md) |  | [optional] 
**type** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

