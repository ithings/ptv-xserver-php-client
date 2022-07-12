# Swagger\Client\XRuntimeApi

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
> \Swagger\Client\Model\DataInformationResponse dataInformation($return_only_licensed_map_features, $continents)



Returns information about the data used by PTV xServer as a REST service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
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

[**\Swagger\Client\Model\DataInformationResponse**](../Model/DataInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJob**
> \Swagger\Client\Model\Job deleteJob($body)



Attempts to delete a running job. If successful, the returned job will have state DELETED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

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
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRequest**
> \Swagger\Client\Model\VoidResponse deleteRequest($body)



Immediately deletes a running request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\StopDeleteRequest(); // \Swagger\Client\Model\StopDeleteRequest | 

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
 **body** | [**\Swagger\Client\Model\StopDeleteRequest**](../Model/StopDeleteRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataInformation**
> \Swagger\Client\Model\DataInformationResponse getDataInformation($body)



Returns information about the data used by PTV xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DataInformationRequest(); // \Swagger\Client\Model\DataInformationRequest | 

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
 **body** | [**\Swagger\Client\Model\DataInformationRequest**](../Model/DataInformationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DataInformationResponse**](../Model/DataInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuntimeInformation**
> \Swagger\Client\Model\RuntimeInformation getRuntimeInformation($body)



Returns dynamic information about the runtime of this xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RuntimeInformationRequest(); // \Swagger\Client\Model\RuntimeInformationRequest | 

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
 **body** | [**\Swagger\Client\Model\RuntimeInformationRequest**](../Model/RuntimeInformationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\RuntimeInformation**](../Model/RuntimeInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerConfiguration**
> \Swagger\Client\Model\ServerConfigurationResponse getServerConfiguration($body)



Returns information on the configuration of the xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ServerConfigurationRequest(); // \Swagger\Client\Model\ServerConfigurationRequest | 

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
 **body** | [**\Swagger\Client\Model\ServerConfigurationRequest**](../Model/ServerConfigurationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ServerConfigurationResponse**](../Model/ServerConfigurationResponse.md)

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

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
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
> \Swagger\Client\Model\ProfilesResponse profiles()



Returns information on the available profiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
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

[**\Swagger\Client\Model\ProfilesResponse**](../Model/ProfilesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runtimeInformation**
> \Swagger\Client\Model\RuntimeInformation runtimeInformation($version_information, $service_information, $memory_statistics, $environment, $module_instances, $active_requests)



Returns dynamic information about the runtime of this xServer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
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

[**\Swagger\Client\Model\RuntimeInformation**](../Model/RuntimeInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopJob**
> \Swagger\Client\Model\Job stopJob($body)



Attempts to stop a running job. If the status of the job changes to SUCCEEDED, preliminary results can be fetched, if available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

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
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopRequest**
> \Swagger\Client\Model\VoidResponse stopRequest($body)



Tries to stop a running request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\StopDeleteRequest(); // \Swagger\Client\Model\StopDeleteRequest | 

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
 **body** | [**\Swagger\Client\Model\StopDeleteRequest**](../Model/StopDeleteRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **watchJob**
> \Swagger\Client\Model\Job watchJob($body)



Returns the status of the given job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XRuntimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\WatchRequest(); // \Swagger\Client\Model\WatchRequest | 

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
 **body** | [**\Swagger\Client\Model\WatchRequest**](../Model/WatchRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

