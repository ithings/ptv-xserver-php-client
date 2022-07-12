# CustomerSite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | ID of the customer that can be set to link several customer sites with different opening intervals. Customer sites with the same customer ID may only differ in the location ID and in the opening intervals. Otherwise an exception is thrown. If successive stops at customer sites share the same customer ID, the service time per stop of the site and of the vehicle are only considered at the first stop of the sequence. | [optional] 
**position_in_trip** | [**\Swagger\Client\Model\PositionInTrip**](PositionInTrip.md) |  | [optional] 
**trip_section_number** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

