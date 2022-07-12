# Swagger\Client\XDataApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContentSnapshot**](XDataApi.md#createcontentsnapshot) | **POST** /services/rs/XData/2.26/createContentSnapshot | 
[**createFeatureLayer**](XDataApi.md#createfeaturelayer) | **POST** /services/rs/XData/2.26/createFeatureLayer | 
[**deleteContentSnapshot**](XDataApi.md#deletecontentsnapshot) | **POST** /services/rs/XData/2.26/deleteContentSnapshot | 
[**deleteFeatureLayer**](XDataApi.md#deletefeaturelayer) | **POST** /services/rs/XData/2.26/deleteFeatureLayer | 
[**deleteHighPerformanceRoutingNetwork**](XDataApi.md#deletehighperformanceroutingnetwork) | **POST** /services/rs/XData/2.26/deleteHighPerformanceRoutingNetwork | 
[**fetchFeatureLayerResponse**](XDataApi.md#fetchfeaturelayerresponse) | **POST** /services/rs/XData/2.26/fetchFeatureLayerResponse | 
[**fetchHighPerformanceRoutingNetworkResponse**](XDataApi.md#fetchhighperformanceroutingnetworkresponse) | **POST** /services/rs/XData/2.26/fetchHighPerformanceRoutingNetworkResponse | 
[**getSegments**](XDataApi.md#getsegments) | **POST** /services/rs/XData/2.26/getSegments | 
[**getTimeZone**](XDataApi.md#gettimezone) | **POST** /services/rs/XData/2.26/getTimeZone | 
[**listContentSnapshots**](XDataApi.md#listcontentsnapshots) | **POST** /services/rs/XData/2.26/listContentSnapshots | 
[**listFeatureLayers**](XDataApi.md#listfeaturelayers) | **POST** /services/rs/XData/2.26/listFeatureLayers | 
[**listHighPerformanceRoutingNetworks**](XDataApi.md#listhighperformanceroutingnetworks) | **POST** /services/rs/XData/2.26/listHighPerformanceRoutingNetworks | 
[**startCreateFeatureLayer**](XDataApi.md#startcreatefeaturelayer) | **POST** /services/rs/XData/2.26/startCreateFeatureLayer | 
[**startCreateHighPerformanceRoutingNetwork**](XDataApi.md#startcreatehighperformanceroutingnetwork) | **POST** /services/rs/XData/2.26/startCreateHighPerformanceRoutingNetwork | 
[**timeZone**](XDataApi.md#timezone) | **GET** /services/rest/XData/2.26/timeZone/{x}/{y} | 

# **createContentSnapshot**
> \Swagger\Client\Model\ContentSnapshotResponse createContentSnapshot($body)



Creates a snapshot of the current state of automatically updated data, such as PTV\\_TrafficIncidents Feature Layer. See technical concept about content snapshots for more details. Returns the ID of the content snapshot.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateContentSnapshotRequest(); // \Swagger\Client\Model\CreateContentSnapshotRequest | 

try {
    $result = $apiInstance->createContentSnapshot($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->createContentSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateContentSnapshotRequest**](../Model/CreateContentSnapshotRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContentSnapshotResponse**](../Model/ContentSnapshotResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFeatureLayer**
> \Swagger\Client\Model\FeatureLayerResponse createFeatureLayer($body)



Creates a custom Feature Layer. Returns the Feature Layer as a binary object or the layer id if the persistent mode is choosen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateFeatureLayerRequest(); // \Swagger\Client\Model\CreateFeatureLayerRequest | 

try {
    $result = $apiInstance->createFeatureLayer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->createFeatureLayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateFeatureLayerRequest**](../Model/CreateFeatureLayerRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FeatureLayerResponse**](../Model/FeatureLayerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentSnapshot**
> \Swagger\Client\Model\VoidResponse deleteContentSnapshot($body)



Deletes a content snapshot.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DeleteContentSnapshotRequest(); // \Swagger\Client\Model\DeleteContentSnapshotRequest | 

try {
    $result = $apiInstance->deleteContentSnapshot($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->deleteContentSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteContentSnapshotRequest**](../Model/DeleteContentSnapshotRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFeatureLayer**
> \Swagger\Client\Model\VoidResponse deleteFeatureLayer($body)



Deletes a custom Feature Layer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DeleteFeatureLayerRequest(); // \Swagger\Client\Model\DeleteFeatureLayerRequest | 

try {
    $result = $apiInstance->deleteFeatureLayer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->deleteFeatureLayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteFeatureLayerRequest**](../Model/DeleteFeatureLayerRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHighPerformanceRoutingNetwork**
> \Swagger\Client\Model\VoidResponse deleteHighPerformanceRoutingNetwork($body)



Deletes a high-performance routing network with a given ID considering user privileges and concurrent usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DeleteHighPerformanceRoutingNetworkRequest(); // \Swagger\Client\Model\DeleteHighPerformanceRoutingNetworkRequest | 

try {
    $result = $apiInstance->deleteHighPerformanceRoutingNetwork($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->deleteHighPerformanceRoutingNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteHighPerformanceRoutingNetworkRequest**](../Model/DeleteHighPerformanceRoutingNetworkRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchFeatureLayerResponse**
> \Swagger\Client\Model\FeatureLayerResponse fetchFeatureLayerResponse($body)



Fetches results of type FeatureLayerResponse for the given job. If the calculation ended with an exception, fetchFeatureLayerResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchFeatureLayerResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->fetchFeatureLayerResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FeatureLayerResponse**](../Model/FeatureLayerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchHighPerformanceRoutingNetworkResponse**
> \Swagger\Client\Model\HighPerformanceRoutingNetworkResponse fetchHighPerformanceRoutingNetworkResponse($body)



Fetches results of type HighPerformanceRoutingNetworkResponse for the given job. If the calculation ended with an exception, fetchHighPerformanceRoutingNetworkResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchHighPerformanceRoutingNetworkResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->fetchHighPerformanceRoutingNetworkResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\HighPerformanceRoutingNetworkResponse**](../Model/HighPerformanceRoutingNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegments**
> \Swagger\Client\Model\SegmentsResponse getSegments($body)



Retrieves a list of segments from the map data according to the specified input, for example a coordinate. Returns a list of segments according to the specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SegmentsRequest(); // \Swagger\Client\Model\SegmentsRequest | 

try {
    $result = $apiInstance->getSegments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->getSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SegmentsRequest**](../Model/SegmentsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\SegmentsResponse**](../Model/SegmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeZone**
> \Swagger\Client\Model\TimeZoneResponse getTimeZone($body)



Determines the time zone for a given location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\TimeZoneRequest(); // \Swagger\Client\Model\TimeZoneRequest | 

try {
    $result = $apiInstance->getTimeZone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->getTimeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TimeZoneRequest**](../Model/TimeZoneRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TimeZoneResponse**](../Model/TimeZoneResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContentSnapshots**
> \Swagger\Client\Model\ContentSnapshotsListResponse listContentSnapshots($body)



Lists available content snapshots including their meta data considering user privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ListContentSnapshotsRequest(); // \Swagger\Client\Model\ListContentSnapshotsRequest | 

try {
    $result = $apiInstance->listContentSnapshots($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->listContentSnapshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListContentSnapshotsRequest**](../Model/ListContentSnapshotsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ContentSnapshotsListResponse**](../Model/ContentSnapshotsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFeatureLayers**
> \Swagger\Client\Model\FeatureLayersListResponse listFeatureLayers($body)



Lists available custom Feature Layers including their meta data considering user privileges and concurrent usage. See technical concept about multitenancy on how to list Feature Layers for all available tenants or scopes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ListFeatureLayersRequest(); // \Swagger\Client\Model\ListFeatureLayersRequest | 

try {
    $result = $apiInstance->listFeatureLayers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->listFeatureLayers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListFeatureLayersRequest**](../Model/ListFeatureLayersRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FeatureLayersListResponse**](../Model/FeatureLayersListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHighPerformanceRoutingNetworks**
> \Swagger\Client\Model\HighPerformanceRoutingNetworksListResponse listHighPerformanceRoutingNetworks($body)



Lists available high-performance routing networks including their meta data considering user privileges. Both networks of the map and user-created networks are listed. Networks belonging to the map have no scope, no tenant, and cannot be deleted. See technical concept about multitenancy on how to list networks for all available tenants or scopes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ListHighPerformanceRoutingNetworksRequest(); // \Swagger\Client\Model\ListHighPerformanceRoutingNetworksRequest | 

try {
    $result = $apiInstance->listHighPerformanceRoutingNetworks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->listHighPerformanceRoutingNetworks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListHighPerformanceRoutingNetworksRequest**](../Model/ListHighPerformanceRoutingNetworksRequest.md)|  |

### Return type

[**\Swagger\Client\Model\HighPerformanceRoutingNetworksListResponse**](../Model/HighPerformanceRoutingNetworksListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCreateFeatureLayer**
> \Swagger\Client\Model\Job startCreateFeatureLayer($body)



This is the asynchronous version of createFeatureLayer. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchFeatureLayerResponse. If the job ended with status FAILED, fetchFeatureLayerResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateFeatureLayerRequest(); // \Swagger\Client\Model\CreateFeatureLayerRequest | 

try {
    $result = $apiInstance->startCreateFeatureLayer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->startCreateFeatureLayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateFeatureLayerRequest**](../Model/CreateFeatureLayerRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCreateHighPerformanceRoutingNetwork**
> \Swagger\Client\Model\Job startCreateHighPerformanceRoutingNetwork($body)



Creates a high-performance routing network. Returns the ID of the high-performance routing network. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchHighPerformanceRoutingNetworkResponse. If the job ended with status FAILED, fetchHighPerformanceRoutingNetworkResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateHighPerformanceRoutingNetworkRequest(); // \Swagger\Client\Model\CreateHighPerformanceRoutingNetworkRequest | 

try {
    $result = $apiInstance->startCreateHighPerformanceRoutingNetwork($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->startCreateHighPerformanceRoutingNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateHighPerformanceRoutingNetworkRequest**](../Model/CreateHighPerformanceRoutingNetworkRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeZone**
> \Swagger\Client\Model\TimeZoneResponse timeZone($x, $y, $reference_date)



Determines the time zone for a given location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x = 1.2; // double | The value in x-direction (west to east), longitude for WGS84.
$y = 1.2; // double | The value in y-direction (south to north), latitude for WGS84.
$reference_date = new \DateTime("2013-10-20"); // \DateTime | The date to determine the daylight saving time for the given location. If not specified the time zone valid now will be returned. If daylight saving time changes at this date, the status at 12 noon will be assumed. Consequently, if daylight saving time changes from winter to summer at this date, summer will be returned.

try {
    $result = $apiInstance->timeZone($x, $y, $reference_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDataApi->timeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x** | **double**| The value in x-direction (west to east), longitude for WGS84. |
 **y** | **double**| The value in y-direction (south to north), latitude for WGS84. |
 **reference_date** | **\DateTime**| The date to determine the daylight saving time for the given location. If not specified the time zone valid now will be returned. If daylight saving time changes at this date, the status at 12 noon will be assumed. Consequently, if daylight saving time changes from winter to summer at this date, summer will be returned. | [optional]

### Return type

[**\Swagger\Client\Model\TimeZoneResponse**](../Model/TimeZoneResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

