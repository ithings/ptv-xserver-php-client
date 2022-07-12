# ManeuverEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**maneuver_type** | [**\Swagger\Client\Model\ManeuverType**](ManeuverType.md) |  | [optional] 
**relative_direction** | [**\Swagger\Client\Model\RelativeDirection**](RelativeDirection.md) |  | [optional] 
**absolute_direction** | [**\Swagger\Client\Model\AbsoluteDirectionInteger**](AbsoluteDirectionInteger.md) |  | [optional] 
**direction_description** | **string** | A descriptive text for the current maneuver. The language can be specified by profile.RequestProfile.userLanguage. The profile.RequestProfile.mapLanguage will not be considered, geographical names such as road names are always given in the local language. | [optional] 
**direction_description_language** | [**\Swagger\Client\Model\LanguageCode**](LanguageCode.md) |  | [optional] 
**road_ahead** | [**\Swagger\Client\Model\RoadDescriptor**](RoadDescriptor.md) |  | [optional] 
**direction_sign_text** | **string** | The city names and road numbers on a signpost at the current location to follow for the current maneuver. Empty if no signpost is present or the data is not available. | [optional] 
**exit_number** | **string** | The number of an exit or interchange of a highway or a freeway-like road. Only present if the maneuver type is CHANGE or EXIT. Empty if the data does not contain an exit number. | [optional] 
**exit_name** | **string** | The name of an exit or interchange of a highway or a freeway-like road. Only present if the maneuver type is CHANGE or EXIT. Empty if the data does not contain an exit name. | [optional] 
**roundabout_exit** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**combined_transport_name** | **string** | The name of the combined transport to take a the current location. Only present if the maneuver type is TAKE\\_COMBINED\\_TRANSPORT. | [optional] 
**combined_transport_type** | [**\Swagger\Client\Model\CombinedTransportType**](CombinedTransportType.md) |  | [optional] 
**crossing_road_name** | **string** | The name of the crossing road at which a U-turn has to be made. Only present if the maneuver type is MAKE\\_U\\_TURN and if the U-turn takes place at a crossing. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

