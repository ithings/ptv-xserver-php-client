# RoadAttributes

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prohibited** | **bool** | This segment is usually prohibited for the selected vehicle. | 
**toll** | **bool** | The segment is part of a toll road. This attribute does not reflect the specific toll pricing conditions, so it is not guaranteed that the selected vehicle has to pay toll for this segment. | 
**urban** | **bool** | The segment is within an urban, i.e. built-up area. It can be avoided or prohibited during route calculation using the parameter routingprofile.SpecialAreas.urbanPenalty. | 
**residents_only** | **bool** | The segment is within a residents only area. It can be avoided, or prohibited during route calculation using the parameters routingprofile.SpecialAreas.residentsOnlyPenalty. | 
**pedestrian_zone** | **bool** | The segment is within a pedestrian zone. To open, avoid, or block it during route calculation see attribute prohibited. | 
**one_way** | **bool** | The segment is a one-way street. | 
**roundabout** | **bool** | The segment is part of a roundabout. | 
**ramp** | **bool** | The segment is part of a ramp. It can be avoided or prohibited during route calculation using the parameter routingprofile.Network.rampPenalty. | 
**bridge** | **bool** | The segment is a bridge. | 
**tunnel** | **bool** | The segment is a tunnel. | 
**delivery_only** | **bool** | The segment is in a delivery only area. It can be allowed, avoided, or prohibited during route calculation using the parameters routingprofile.SpecialAreas.deliveryOnlyPenalty and vehicleprofile.LegalCondition.isDelivery. | 
**allowed_for_emergency** | **bool** | The segment is allowed for emergency vehicles (see vehicleprofile.LegalCondition.isEmergency). | 
**low_emission_zone_type** | **string** | The low-emission zone types the selected vehicle must have to travel this segment. It can be opened, avoided, or prohibited during route calculation using the parameters routingprofile.SpecialAreas.forbiddenLowEmissionZonePenalty and vehicleprofile.Engine.lowEmissionZoneTypes. The available types can be requested through the xRuntime service, e.g. DE\\_GREEN, DE\\_YELLOW, DE\\_RED for Germany. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

