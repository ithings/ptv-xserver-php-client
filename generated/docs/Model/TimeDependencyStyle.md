# TimeDependencyStyle

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**icons_with_clock** | **bool** | If true, a small clock is added to the bottom right corner of every icon representing a time-dependent feature, i.e. a feature which is not valid 24/7 but only for a specific time period, e.g. at night or on Sundays. Use this in order to distinguish time-dependent from time-independent features within one Feature Layer theme. | [optional] 
**strokes_dashed** | **bool** | If true, a stroke representing a time-dependent feature is drawn dashed instead of solid. Use this in order to distinguish time-dependent from time-independent features within one Feature Layer theme. | [optional] 
**irrelevant_icons_grayed** | **bool** | If true, the icon of a feature which is not valid for the given time-consideration scenario will be drawn in gray. E.g. when requesting time-consideration scenario &#x27;snapshot&#x27; at 3 p.m., features valid only at night are displayed with a gray icon. Please make sure to use colored icons when using this feature. Use this to distinguish relevant features from those not relevant for the selected time-consideration scenario. | [optional] 
**irrelevant_strokes_grayed** | **bool** | If true, the stroke of a feature which is not valid for the given time-consideration scenario will be drawn in gray. Please make sure to use colored strokes when using this feature. Use this to distinguish relevant features from those not relevant for the selected time-consideration scenario. | [optional] 
**irrelevant_polygons_grayed** | **bool** | If true, the polygon of a feature which is not valid for the given time-consideration scenario will be drawn in gray and hatched. Please make sure to use colored polygons when using this feature. Use this to distinguish relevant features from those not relevant for the selected time-consideration scenario. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

