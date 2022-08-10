# LegalCondition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_emergency** | **bool** | True for emergency vehicles. If this condition is set to true, certain parts of the road network that are prohibited except that emergency vehicles are accessible for the routing algorithm, and these parts are then treated exactly the same way as normal parts of the road network that are not prohibited. This setting affects segments which have set segments.RoadAttributes.allowedForEmergency. (1) | [optional] 
**is_delivery** | **bool** | True for vehicles which are intended to deliver something. If this condition is set to true, certain parts of the road network that are prohibited except for delivery vehicles are accessible for the routing algorithm. The treatment of such parts can be configured in the routing profile using the parameters SpecialAreas.deliveryOnlyPenalty and SpecialAreas.deliveryOnlyGateCost. These settings affect segments which have set segments.RoadAttributes.deliveryOnly. (1,4) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

