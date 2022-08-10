# ithings\ptvxserver\XMapApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**renderMap**](XMapApi.md#rendermap) | **POST** /services/rs/XMap/2.26/renderMap | 
[**tileBinary**](XMapApi.md#tilebinary) | **GET** /services/rest/XMap/2.26/tile/{zoomLevel}/{x}/{y} | 

# **renderMap**
> \ithings\ptvxserver\model\MapResponse renderMap($body)



Render image(s) of a map and return information on drawn Feature Layer data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\MapRequest(); // \ithings\ptvxserver\model\MapRequest | 

try {
    $result = $apiInstance->renderMap($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XMapApi->renderMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\MapRequest**](../Model/MapRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\MapResponse**](../Model/MapResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tileBinary**
> string tileBinary($zoom_level, $x, $y, $stored_profile, $layers, $image_format, $size, $time_consideration, $reference_time, $time_span, $show_only_relevant_by_time, $show_copyright, $preferred_route_types, $user_language, $content_snapshot_id, $map_language, $scope, $draw_icons, $icon_reference)



Render a single map tile according the concept of the Map Tile API. By means of different frameworks a map image can be composed of multiple tiles. These tiles can be cached and reused for drawing of similar sections of a map. Optionally it is possible to return textual information on drawn Feature Layer data. Therefore, this operation can return either an image directly or a structured response which contains the image and additional information on drawn Feature Layer data such as their positions and names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XMapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zoom_level = 56; // int | Zoom level. Details about zoom levels are documented in the Map Tile API.
$x = 56; // int | Horizontal tile index.
$y = 56; // int | Vertical tile index.
$stored_profile = "stored_profile_example"; // string | The name of the stored profile to use without its extension, e.g. `silkysand`. The corresponding file `silkysand.xml` must be available in the folder `conf/profiles`. Parent profiles must be located in the same folder.
$layers = "layers_example"; // string | A comma-separated list of layers which will be displayed on the map. If this parameter is specified, layers enabled in the stored profile are ignored. These layers can be the base layers `labels`, `transport`, and `background`, or any of the supported Feature Layer themes such as `PTV_TruckAttributes`. If this parameter is not present, the layers defined by the stored profile are displayed. For more information see Integration of custom data and Displaying Feature Layer PTV\\_TruckAttributes.
$image_format = "image_format_example"; // string | Image format of the rendered tile. This can be `PNG` or `JPG`. In case of `JPG`, the backgrounds (like oceans and forests) must be part of the image content, because they guarantee an image without any transparent pixels. This is important, because for `JPG` semi-transparent pixels would be drawn in black erroneously. Therefore a ParameterConflictException is thrown in such a case.
$size = 56; // int | Width and height of the tile in pixels. The maximum allowed value is 8192.
$time_consideration = "time_consideration_example"; // string | Specifies how to evaluate Feature Layer attributes which contain time restrictions. For time consideration scenario `NONE` the parameters for reference time and timespan are not evaluated. For `SNAPSHOT` and `TIME_SPAN` the reference time is required. The time span is needed for the `TIME_SPAN` scenarios. For detailed information about time consideration scenarios see time consideration.
$reference_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The reference time at which Feature Layer attributes with time restrictions will be evaluated. The time format either has to conform to the notation of xs:dateTime such as 2015-12-24T12:00:00+01:00, or it has to be a datetime sequence without any delimiters nor time-zone specification such as 20151224T120000. If the time-zone offset is missing, the corresponding service tries to detect it by means of information available in the calling context. A detailed description of this behavior can be found in the technical concept time zones. It is recommended to always specify the time zone. If no reference time is set, the current UTC time is used.
$time_span = 1.2; // double | The duration of time (in combination with reference time as start) at which Feature Layer attributes with time restrictions will be evaluated, defined in \\[s\\]. The value is rounded to whole seconds.
$show_only_relevant_by_time = true; // bool | Specifies if the map shows all attributes regardless of relevance for time consideration (default), or only the attributes which are relevant for this time consideration scenario. For further details, see Relevance of Feature Layer attributes.
$show_copyright = true; // bool | If true it shows the copyright text in the lower right corner of the image. If not defined the default value is false and no copyright text is shown.
$preferred_route_types = "preferred_route_types_example"; // string | The road networks to be preferred by the routing algorithm as a comma-separated list (only if the Feature Layer PTV\\_PreferredRoutes is enabled). The available types can be requested through the xRuntime service and are documented in the manual as layer-specific properties of the Feature Layer PTV\\_PreferredRoutes. If this parameter is not present, all types of PTV\\_PreferredRoutes are displayed.
$user_language = "user_language_example"; // string | The language of texts such as traffic-incident descriptions which are returned for *contentType = JSON*.
$content_snapshot_id = "content_snapshot_id_example"; // string | Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used.
$map_language = "map_language_example"; // string | The language used for geographic names that are part of the map. The default x-ptv-DFT means that names are given in the language spoken in that country or region.
$scope = "scope_example"; // string | A user defined scope for persistent data like Feature Layers.
$draw_icons = true; // bool | Specifies if the Feature Layer icons have to be drawn on the map.
$icon_reference = true; // bool | Specifies if icon references should be returned with the features.

try {
    $result = $apiInstance->tileBinary($zoom_level, $x, $y, $stored_profile, $layers, $image_format, $size, $time_consideration, $reference_time, $time_span, $show_only_relevant_by_time, $show_copyright, $preferred_route_types, $user_language, $content_snapshot_id, $map_language, $scope, $draw_icons, $icon_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XMapApi->tileBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zoom_level** | **int**| Zoom level. Details about zoom levels are documented in the Map Tile API. |
 **x** | **int**| Horizontal tile index. |
 **y** | **int**| Vertical tile index. |
 **stored_profile** | **string**| The name of the stored profile to use without its extension, e.g. &#x60;silkysand&#x60;. The corresponding file &#x60;silkysand.xml&#x60; must be available in the folder &#x60;conf/profiles&#x60;. Parent profiles must be located in the same folder. | [optional]
 **layers** | **string**| A comma-separated list of layers which will be displayed on the map. If this parameter is specified, layers enabled in the stored profile are ignored. These layers can be the base layers &#x60;labels&#x60;, &#x60;transport&#x60;, and &#x60;background&#x60;, or any of the supported Feature Layer themes such as &#x60;PTV_TruckAttributes&#x60;. If this parameter is not present, the layers defined by the stored profile are displayed. For more information see Integration of custom data and Displaying Feature Layer PTV\\_TruckAttributes. | [optional]
 **image_format** | **string**| Image format of the rendered tile. This can be &#x60;PNG&#x60; or &#x60;JPG&#x60;. In case of &#x60;JPG&#x60;, the backgrounds (like oceans and forests) must be part of the image content, because they guarantee an image without any transparent pixels. This is important, because for &#x60;JPG&#x60; semi-transparent pixels would be drawn in black erroneously. Therefore a ParameterConflictException is thrown in such a case. | [optional]
 **size** | **int**| Width and height of the tile in pixels. The maximum allowed value is 8192. | [optional]
 **time_consideration** | **string**| Specifies how to evaluate Feature Layer attributes which contain time restrictions. For time consideration scenario &#x60;NONE&#x60; the parameters for reference time and timespan are not evaluated. For &#x60;SNAPSHOT&#x60; and &#x60;TIME_SPAN&#x60; the reference time is required. The time span is needed for the &#x60;TIME_SPAN&#x60; scenarios. For detailed information about time consideration scenarios see time consideration. | [optional]
 **reference_time** | **\DateTime**| The reference time at which Feature Layer attributes with time restrictions will be evaluated. The time format either has to conform to the notation of xs:dateTime such as 2015-12-24T12:00:00+01:00, or it has to be a datetime sequence without any delimiters nor time-zone specification such as 20151224T120000. If the time-zone offset is missing, the corresponding service tries to detect it by means of information available in the calling context. A detailed description of this behavior can be found in the technical concept time zones. It is recommended to always specify the time zone. If no reference time is set, the current UTC time is used. | [optional]
 **time_span** | **double**| The duration of time (in combination with reference time as start) at which Feature Layer attributes with time restrictions will be evaluated, defined in \\[s\\]. The value is rounded to whole seconds. | [optional]
 **show_only_relevant_by_time** | **bool**| Specifies if the map shows all attributes regardless of relevance for time consideration (default), or only the attributes which are relevant for this time consideration scenario. For further details, see Relevance of Feature Layer attributes. | [optional]
 **show_copyright** | **bool**| If true it shows the copyright text in the lower right corner of the image. If not defined the default value is false and no copyright text is shown. | [optional]
 **preferred_route_types** | **string**| The road networks to be preferred by the routing algorithm as a comma-separated list (only if the Feature Layer PTV\\_PreferredRoutes is enabled). The available types can be requested through the xRuntime service and are documented in the manual as layer-specific properties of the Feature Layer PTV\\_PreferredRoutes. If this parameter is not present, all types of PTV\\_PreferredRoutes are displayed. | [optional]
 **user_language** | **string**| The language of texts such as traffic-incident descriptions which are returned for *contentType &#x3D; JSON*. | [optional]
 **content_snapshot_id** | **string**| Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used. | [optional]
 **map_language** | **string**| The language used for geographic names that are part of the map. The default x-ptv-DFT means that names are given in the language spoken in that country or region. | [optional]
 **scope** | **string**| A user defined scope for persistent data like Feature Layers. | [optional]
 **draw_icons** | **bool**| Specifies if the Feature Layer icons have to be drawn on the map. | [optional]
 **icon_reference** | **bool**| Specifies if icon references should be returned with the features. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, image/jpeg

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

