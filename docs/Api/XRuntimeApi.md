# ithings\ptvxserver\XRuntimeApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataInformation**](XRuntimeApi.md#datainformation) | **GET** /services/rest/XRuntime/2.26/dataInformation | 
[**deleteJob**](XRuntimeApi.md#deletejob) | **POST** /services/rs/XRuntime/2.26/deleteJob | 
[**deleteRequest**](XRuntimeApi.md#deleterequest) | **POST** /services/rs/XRuntime/2.26/deleteRequest | 
[**getDataInformation**](XRuntimeApi.md#getdatainformation) | **POST** /services/rs/XRuntime/2.26/getDataInformation | 
[**getRuntimeInformation**](XRuntimeApi.md#getruntimeinformation) | **POST** /services/rs/XRuntime/2.26/getRuntimeInformation | 
[**getServerConfiguration**](XRuntimeApi.md#getserverconfiguration) | **POST** /services/rs/XRuntime/2.26/getServerConfiguration | 
[**icon**](XRuntimeApi.md#icon) | **GET** /services/rest/XRuntime/2.26/icon/{iconReference} | 
[**profiles**](XRuntimeApi.md#profiles) | **GET** /services/rest/XRuntime/2.26/profiles | 
[**runtimeInformation**](XRuntimeApi.md#runtimeinformation) | **GET** /services/rest/XRuntime/2.26/runtimeInformation | 
[**stopJob**](XRuntimeApi.md#stopjob) | **POST** /services/rs/XRuntime/2.26/stopJob | 
[**stopRequest**](XRuntimeApi.md#stoprequest) | **POST** /services/rs/XRuntime/2.26/stopRequest | 
[**watchJob**](XRuntimeApi.md#watchjob) | **POST** /services/rs/XRuntime/2.26/watchJob | 

# **dataInformation**
> \ithings\ptvxserver\model\DataInformationResponse dataInformation($return_only_licensed_map_features, $continents)



Returns information about the data used by PTV xServer as a REST service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$return_only_licensed_map_features = true; // bool | Specifies if all DataInformationResponse.mapFeatures shall be returned or only the licensed ones.
$continents = true; // bool | Specifies if the DataInformationResponse.continents shall be returned.

try {
    $result = $apiInstance->dataInformation($return_only_licensed_map_features, $continents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->dataInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_only_licensed_map_features** | **bool**| Specifies if all DataInformationResponse.mapFeatures shall be returned or only the licensed ones. | [optional]
 **continents** | **bool**| Specifies if the DataInformationResponse.continents shall be returned. | [optional]

### Return type

[**\ithings\ptvxserver\model\DataInformationResponse**](../Model/DataInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJob**
> \ithings\ptvxserver\model\Job deleteJob($body)



Attempts to delete a running job. If successful, the returned job will have state DELETED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->deleteJob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->deleteJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRequest**
> \ithings\ptvxserver\model\VoidResponse deleteRequest($body)



Immediately deletes a running request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\StopDeleteRequest(); // \ithings\ptvxserver\model\StopDeleteRequest | 

try {
    $result = $apiInstance->deleteRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->deleteRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\StopDeleteRequest**](../Model/StopDeleteRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataInformation**
> \ithings\ptvxserver\model\DataInformationResponse getDataInformation($body)



Returns information about the data used by PTV xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\DataInformationRequest(); // \ithings\ptvxserver\model\DataInformationRequest | 

try {
    $result = $apiInstance->getDataInformation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->getDataInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\DataInformationRequest**](../Model/DataInformationRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\DataInformationResponse**](../Model/DataInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuntimeInformation**
> \ithings\ptvxserver\model\RuntimeInformation getRuntimeInformation($body)



Returns dynamic information about the runtime of this xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\RuntimeInformationRequest(); // \ithings\ptvxserver\model\RuntimeInformationRequest | 

try {
    $result = $apiInstance->getRuntimeInformation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->getRuntimeInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\RuntimeInformationRequest**](../Model/RuntimeInformationRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\RuntimeInformation**](../Model/RuntimeInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerConfiguration**
> \ithings\ptvxserver\model\ServerConfigurationResponse getServerConfiguration($body)



Returns information on the configuration of the xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\ServerConfigurationRequest(); // \ithings\ptvxserver\model\ServerConfigurationRequest | 

try {
    $result = $apiInstance->getServerConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->getServerConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\ServerConfigurationRequest**](../Model/ServerConfigurationRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ServerConfigurationResponse**](../Model/ServerConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **icon**
> string icon($icon_reference)



Returns icons as a REST service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$icon_reference = "icon_reference_example"; // string | Specifies the icon reference, e.g. returned in an xMap response Feature.iconReference.

try {
    $result = $apiInstance->icon($icon_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->icon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **icon_reference** | **string**| Specifies the icon reference, e.g. returned in an xMap response Feature.iconReference. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, image/jpeg, image/bmp

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profiles**
> \ithings\ptvxserver\model\ProfilesResponse profiles()



Returns information on the available profiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->profiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->profiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ithings\ptvxserver\model\ProfilesResponse**](../Model/ProfilesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runtimeInformation**
> \ithings\ptvxserver\model\RuntimeInformation runtimeInformation($version_information, $service_information, $memory_statistics, $environment, $module_instances, $active_requests)



Returns dynamic information about the runtime of this xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version_information = true; // bool | Specifies if the RuntimeInformation.versionInformation shall be returned.
$service_information = true; // bool | Specifies if the RuntimeInformation.serviceInformation shall be returned.
$memory_statistics = true; // bool | Specifies if the RuntimeInformation.memoryStatistics shall be returned.
$environment = true; // bool | Specifies if the RuntimeInformation.environment shall be returned.
$module_instances = true; // bool | Specifies if the RuntimeInformation.moduleInstances shall be returned.
$active_requests = true; // bool | Specifies if the RuntimeInformation.activeRequests shall be returned.

try {
    $result = $apiInstance->runtimeInformation($version_information, $service_information, $memory_statistics, $environment, $module_instances, $active_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->runtimeInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version_information** | **bool**| Specifies if the RuntimeInformation.versionInformation shall be returned. | [optional]
 **service_information** | **bool**| Specifies if the RuntimeInformation.serviceInformation shall be returned. | [optional]
 **memory_statistics** | **bool**| Specifies if the RuntimeInformation.memoryStatistics shall be returned. | [optional]
 **environment** | **bool**| Specifies if the RuntimeInformation.environment shall be returned. | [optional]
 **module_instances** | **bool**| Specifies if the RuntimeInformation.moduleInstances shall be returned. | [optional]
 **active_requests** | **bool**| Specifies if the RuntimeInformation.activeRequests shall be returned. | [optional]

### Return type

[**\ithings\ptvxserver\model\RuntimeInformation**](../Model/RuntimeInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopJob**
> \ithings\ptvxserver\model\Job stopJob($body)



Attempts to stop a running job. If the status of the job changes to SUCCEEDED, preliminary results can be fetched, if available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->stopJob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->stopJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopRequest**
> \ithings\ptvxserver\model\VoidResponse stopRequest($body)



Tries to stop a running request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\StopDeleteRequest(); // \ithings\ptvxserver\model\StopDeleteRequest | 

try {
    $result = $apiInstance->stopRequest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->stopRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\StopDeleteRequest**](../Model/StopDeleteRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchJob**
> \ithings\ptvxserver\model\Job watchJob($body)



Returns the status of the given job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\WatchRequest(); // \ithings\ptvxserver\model\WatchRequest | 

try {
    $result = $apiInstance->watchJob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XRuntimeApi->watchJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\WatchRequest**](../Model/WatchRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

