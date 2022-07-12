# Swagger\Client\XRouteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateReachableAreas**](XRouteApi.md#calculatereachableareas) | **POST** /services/rs/XRoute/2.26/calculateReachableAreas | 
[**calculateReachableLocations**](XRouteApi.md#calculatereachablelocations) | **POST** /services/rs/XRoute/2.26/calculateReachableLocations | 
[**calculateRoute**](XRouteApi.md#calculateroute) | **POST** /services/rs/XRoute/2.26/calculateRoute | 
[**fetchReachableAreasResponse**](XRouteApi.md#fetchreachableareasresponse) | **POST** /services/rs/XRoute/2.26/fetchReachableAreasResponse | 
[**fetchReachableLocationsResponse**](XRouteApi.md#fetchreachablelocationsresponse) | **POST** /services/rs/XRoute/2.26/fetchReachableLocationsResponse | 
[**fetchRouteResponse**](XRouteApi.md#fetchrouteresponse) | **POST** /services/rs/XRoute/2.26/fetchRouteResponse | 
[**getProfile**](XRouteApi.md#getprofile) | **POST** /services/rs/XRoute/2.26/getProfile | 
[**route**](XRouteApi.md#route) | **GET** /services/rest/XRoute/2.26/route/{startX}/{startY}/{destinationX}/{destinationY} | 
[**startCalculateReachableAreas**](XRouteApi.md#startcalculatereachableareas) | **POST** /services/rs/XRoute/2.26/startCalculateReachableAreas | 
[**startCalculateReachableLocations**](XRouteApi.md#startcalculatereachablelocations) | **POST** /services/rs/XRoute/2.26/startCalculateReachableLocations | 
[**startCalculateRoute**](XRouteApi.md#startcalculateroute) | **POST** /services/rs/XRoute/2.26/startCalculateRoute | 

# **calculateReachableAreas**
> \Swagger\Client\Model\ReachableAreasResponse calculateReachableAreas($body)



Calculate the areas which can be reached from a location within given horizons. This operation requires a special license.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ReachableAreasRequest(); // \Swagger\Client\Model\ReachableAreasRequest | 

try {
    $result = $apiInstance->calculateReachableAreas($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->calculateReachableAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReachableAreasRequest**](../Model/ReachableAreasRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReachableAreasResponse**](../Model/ReachableAreasResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculateReachableLocations**
> \Swagger\Client\Model\ReachableLocationsResponse calculateReachableLocations($body)



Calculates the locations that can be reached from a waypoint within a given horizon.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ReachableLocationsRequest(); // \Swagger\Client\Model\ReachableLocationsRequest | 

try {
    $result = $apiInstance->calculateReachableLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->calculateReachableLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReachableLocationsRequest**](../Model/ReachableLocationsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReachableLocationsResponse**](../Model/ReachableLocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculateRoute**
> \Swagger\Client\Model\RouteResponse calculateRoute($body)



Calculates and returns route information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RouteRequest(); // \Swagger\Client\Model\RouteRequest | 

try {
    $result = $apiInstance->calculateRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->calculateRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RouteRequest**](../Model/RouteRequest.md)|  |

### Return type

[**\Swagger\Client\Model\RouteResponse**](../Model/RouteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchReachableAreasResponse**
> \Swagger\Client\Model\ReachableAreasResponse fetchReachableAreasResponse($body)



Fetches results of type ReachableAreasResponse for the given job. If the calculation ended with an exception, fetchReachableAreasResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchReachableAreasResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->fetchReachableAreasResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReachableAreasResponse**](../Model/ReachableAreasResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchReachableLocationsResponse**
> \Swagger\Client\Model\ReachableLocationsResponse fetchReachableLocationsResponse($body)



Fetches results of type ReachableLocationsResponse for the given job. If the calculation ended with an exception, fetchReachableLocationsResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchReachableLocationsResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->fetchReachableLocationsResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReachableLocationsResponse**](../Model/ReachableLocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchRouteResponse**
> \Swagger\Client\Model\RouteResponse fetchRouteResponse($body)



Fetches results of type RouteResponse for the given job. If the calculation ended with an exception, fetchRouteResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchRouteResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->fetchRouteResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\RouteResponse**](../Model/RouteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfile**
> \Swagger\Client\Model\ProfileResponse getProfile($body)



Returns the effective profile specified by the stored and the request profile. If no request profile is specified, the response contains the complete contents of the stored profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProfileRequest(); // \Swagger\Client\Model\ProfileRequest | 

try {
    $result = $apiInstance->getProfile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProfileRequest**](../Model/ProfileRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **route**
> \Swagger\Client\Model\RouteResponse route($start_x, $start_y, $destination_x, $destination_y, $stored_profile, $polyline, $theme_ids, $preferred_route_types, $time_consideration, $reference_time, $time_span, $content_snapshot_id)



Calculates a route from start to destination and returns route information. This operation supports exactly two on-road waypoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_x = 1.2; // double | The longitude in WGS84 (EPSG:4326) of the start location. The location is interpreted as an routing.OnRoadRouteLocation.
$start_y = 1.2; // double | The latitude in WGS84 (EPSG:4326) of the start location. The location is interpreted as an routing.OnRoadRouteLocation.
$destination_x = 1.2; // double | The longitude in WGS84 (EPSG:4326) of the destination location. The location is interpreted as an routing.OnRoadRouteLocation.
$destination_y = 1.2; // double | The latitude in WGS84 (EPSG:4326) of the destination location. The location is interpreted as an routing.OnRoadRouteLocation.
$stored_profile = "stored_profile_example"; // string | The name of the stored profile to use without its extension, e.g. `bicycle`. The corresponding file `bicycle.xml` must be available in the folder `conf/profiles`. Parent profiles must be located in the same folder.
$polyline = true; // bool | Specifies if the RouteResponse.polyline shall be returned for the complete route.
$theme_ids = "theme_ids_example"; // string | A comma-separated list of Feature Layer theme IDs which will be considered. If this parameter is specified, themes enabled in the stored profile are ignored. These themes can be any of the supported Feature Layer themes, such as `PTV_TruckAttributes`. If this parameter is not present, the themes defined by the stored profile are used. A trailing comma is permitted. For more information see Calculating the Best Route for Rush Hour Traffic and Considering Long-term Blockings.
$preferred_route_types = "preferred_route_types_example"; // string | The road networks to be preferred by the routing algorithm as a comma-separated list (only if the Feature Layer PTV\\_PreferredRoutes is enabled). The available types can be requested through the xRuntime service and are documented in the manual as layer-specific properties of the Feature Layer PTV\\_PreferredRoutes. If this parameter is not present, all types of PTV\\_PreferredRoutes are displayed.
$time_consideration = "time_consideration_example"; // string | Specifies how to evaluate Feature Layer attributes which contain time restrictions. For time consideration scenario `NONE` the parameters for reference time and timespan are not evaluated. For `SNAPSHOT`, `TIME_SPAN`, `EXACT_TIME_AT_START` and `EXACT_TIME_AT_ARRIVAL` the reference time is required. The time span is needed for the `TIME_SPAN` scenarios. For detailed information about time consideration scenarios see time consideration.
$reference_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The reference time at which Feature Layer attributes with time restrictions will be evaluated. The time format either has to conform to the notation of xs:dateTime such as 2015-12-24T12:00:00+01:00, or it has to be a datetime sequence without any delimiters nor time zone specification such as 20151224T120000. If the time-zone offset is missing, the corresponding service tries to detect it by means of information available in the calling context. A detailed description of this behavior can be found in the technical concept time zones. It is recommended to always specify the time zone. If no reference time is set, the current UTC time is used.
$time_span = 1.2; // double | The duration of time (in combination with reference time as start) at which Feature Layer attributes with time restrictions will be evaluated, defined in \\[s\\]. The value is rounded to whole seconds.
$content_snapshot_id = "content_snapshot_id_example"; // string | Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used.

try {
    $result = $apiInstance->route($start_x, $start_y, $destination_x, $destination_y, $stored_profile, $polyline, $theme_ids, $preferred_route_types, $time_consideration, $reference_time, $time_span, $content_snapshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->route: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_x** | **double**| The longitude in WGS84 (EPSG:4326) of the start location. The location is interpreted as an routing.OnRoadRouteLocation. |
 **start_y** | **double**| The latitude in WGS84 (EPSG:4326) of the start location. The location is interpreted as an routing.OnRoadRouteLocation. |
 **destination_x** | **double**| The longitude in WGS84 (EPSG:4326) of the destination location. The location is interpreted as an routing.OnRoadRouteLocation. |
 **destination_y** | **double**| The latitude in WGS84 (EPSG:4326) of the destination location. The location is interpreted as an routing.OnRoadRouteLocation. |
 **stored_profile** | **string**| The name of the stored profile to use without its extension, e.g. &#x60;bicycle&#x60;. The corresponding file &#x60;bicycle.xml&#x60; must be available in the folder &#x60;conf/profiles&#x60;. Parent profiles must be located in the same folder. | [optional]
 **polyline** | **bool**| Specifies if the RouteResponse.polyline shall be returned for the complete route. | [optional]
 **theme_ids** | **string**| A comma-separated list of Feature Layer theme IDs which will be considered. If this parameter is specified, themes enabled in the stored profile are ignored. These themes can be any of the supported Feature Layer themes, such as &#x60;PTV_TruckAttributes&#x60;. If this parameter is not present, the themes defined by the stored profile are used. A trailing comma is permitted. For more information see Calculating the Best Route for Rush Hour Traffic and Considering Long-term Blockings. | [optional]
 **preferred_route_types** | **string**| The road networks to be preferred by the routing algorithm as a comma-separated list (only if the Feature Layer PTV\\_PreferredRoutes is enabled). The available types can be requested through the xRuntime service and are documented in the manual as layer-specific properties of the Feature Layer PTV\\_PreferredRoutes. If this parameter is not present, all types of PTV\\_PreferredRoutes are displayed. | [optional]
 **time_consideration** | **string**| Specifies how to evaluate Feature Layer attributes which contain time restrictions. For time consideration scenario &#x60;NONE&#x60; the parameters for reference time and timespan are not evaluated. For &#x60;SNAPSHOT&#x60;, &#x60;TIME_SPAN&#x60;, &#x60;EXACT_TIME_AT_START&#x60; and &#x60;EXACT_TIME_AT_ARRIVAL&#x60; the reference time is required. The time span is needed for the &#x60;TIME_SPAN&#x60; scenarios. For detailed information about time consideration scenarios see time consideration. | [optional]
 **reference_time** | **\DateTime**| The reference time at which Feature Layer attributes with time restrictions will be evaluated. The time format either has to conform to the notation of xs:dateTime such as 2015-12-24T12:00:00+01:00, or it has to be a datetime sequence without any delimiters nor time zone specification such as 20151224T120000. If the time-zone offset is missing, the corresponding service tries to detect it by means of information available in the calling context. A detailed description of this behavior can be found in the technical concept time zones. It is recommended to always specify the time zone. If no reference time is set, the current UTC time is used. | [optional]
 **time_span** | **double**| The duration of time (in combination with reference time as start) at which Feature Layer attributes with time restrictions will be evaluated, defined in \\[s\\]. The value is rounded to whole seconds. | [optional]
 **content_snapshot_id** | **string**| Specifies the content snapshot to use. If no snapshot ID is set, the most recent content is used. | [optional]

### Return type

[**\Swagger\Client\Model\RouteResponse**](../Model/RouteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCalculateReachableAreas**
> \Swagger\Client\Model\Job startCalculateReachableAreas($body)



This is the asynchronous version of calculateReachableAreas. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchReachableAreasResponse. If the job ended with status FAILED, fetchReachableAreasResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ReachableAreasRequest(); // \Swagger\Client\Model\ReachableAreasRequest | 

try {
    $result = $apiInstance->startCalculateReachableAreas($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->startCalculateReachableAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReachableAreasRequest**](../Model/ReachableAreasRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCalculateReachableLocations**
> \Swagger\Client\Model\Job startCalculateReachableLocations($body)



This is the asynchronous version of calculateReachableLocations. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchReachableLocationsResponse. If the job ended with status FAILED, fetchReachableLocationsResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ReachableLocationsRequest(); // \Swagger\Client\Model\ReachableLocationsRequest | 

try {
    $result = $apiInstance->startCalculateReachableLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->startCalculateReachableLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReachableLocationsRequest**](../Model/ReachableLocationsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCalculateRoute**
> \Swagger\Client\Model\Job startCalculateRoute($body)



This is the asynchronous version of calculateRoute. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchRouteResponse. If the job ended with status FAILED, fetchRouteResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RouteRequest(); // \Swagger\Client\Model\RouteRequest | 

try {
    $result = $apiInstance->startCalculateRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRouteApi->startCalculateRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RouteRequest**](../Model/RouteRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

