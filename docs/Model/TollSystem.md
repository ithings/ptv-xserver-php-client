# TollSystem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the toll system. For example, Florida Turnpike, or TollCollect German Autobahn. | [optional] 
**operator_name** | **string** | The name of the toll operator. For example, TollCollect. | [optional] 
**tariff_version** | **string** | The tariff version that has been used. | [optional] 
**tariff_version_valid_from** | [**\DateTime**](\DateTime.md) | The starting date of the tariff version validity. Note that this date can also be later than a specified reference time: In case there is no tariff version that is valid at a specified reference time the tariff version with the earliest valid from date is used. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

