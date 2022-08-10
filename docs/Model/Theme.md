# Theme

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_specific_parameters** | [**\ithings\ptvxserver\model\CountrySpecificParameter[]**](CountrySpecificParameter.md) |  | [optional] 
**feature_result_properties** | [**\ithings\ptvxserver\model\FeatureResultProperty[]**](FeatureResultProperty.md) |  | [optional] 
**id** | [**\ithings\ptvxserver\model\ThemeId**](ThemeId.md) |  | 
**enabled** | **bool** | Enables or disables the theme. Every subsequent country, rule, property and action type that is relative to this theme will be considered enabled or disabled for this theme. | [optional] 
**priority_level** | **int** | The priority level \\[0-255\\]. 100 is the default priority level, a 101 value defines a higher priority than 100. | [optional] 
**feature_scenarios** | [**\ithings\ptvxserver\model\FeatureScenario[]**](FeatureScenario.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

