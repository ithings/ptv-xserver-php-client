# Theme

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_specific_parameters** | [**\Swagger\Client\Model\CountrySpecificParameter[]**](CountrySpecificParameter.md) |  | [optional] 
**feature_result_properties** | [**\Swagger\Client\Model\FeatureResultProperty[]**](FeatureResultProperty.md) |  | [optional] 
**id** | [**\Swagger\Client\Model\ThemeId**](ThemeId.md) |  | 
**enabled** | **bool** | Enables or disables the theme. Every subsequent country, rule, property and action type that is relative to this theme will be considered enabled or disabled for this theme. | [optional] 
**priority_level** | **int** | The priority level \\[0-255\\]. 100 is the default priority level, a 101 value defines a higher priority than 100. | [optional] 
**feature_scenarios** | [**\Swagger\Client\Model\FeatureScenario[]**](FeatureScenario.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

