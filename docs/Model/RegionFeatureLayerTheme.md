# RegionFeatureLayerTheme

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**theme_id** | [**\ithings\ptvxserver\model\ThemeId**](ThemeId.md) |  | [optional] 
**provider_name** | **string** | The name of the data provider of this Feature Layer theme if other than the reference provider name. It is not necessary equal to the name of the data provider of the related map data. Especially traffic incidents data may have other sources than the map data provider. If a theme consists of data from more than one provider, there will be multiple instances of this object. | [optional] 
**reference_provider_name** | **string** | The provider name of the map data this Feature Layer theme is based on. For best results the Feature Layer data should match the routing data of the underlying map, therefore this name usually equals the corresponding RegionDescription.providerName. | [optional] 
**reference_provider_data_version** | **string** | The data version of the map data this Feature Layer theme is based on. For best results the Feature Layer data should match the routing data of the underlying map, therefore this version number usually equals the corresponding RegionDescription.providerDataVersion. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

