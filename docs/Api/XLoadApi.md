# Swagger\Client\XLoadApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchPackedBinsResponse**](XLoadApi.md#fetchpackedbinsresponse) | **POST** /services/rs/XLoad/2.26/fetchPackedBinsResponse | 
[**packBins**](XLoadApi.md#packbins) | **POST** /services/rs/XLoad/2.26/packBins | 
[**startPackBins**](XLoadApi.md#startpackbins) | **POST** /services/rs/XLoad/2.26/startPackBins | 

# **fetchPackedBinsResponse**
> \Swagger\Client\Model\PackedBinsResponse fetchPackedBinsResponse($body)



Fetches results of type PackedBinsResponse for the given job. If the calculation ended with an exception, fetchPackedBinsResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XLoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchPackedBinsResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLoadApi->fetchPackedBinsResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PackedBinsResponse**](../Model/PackedBinsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packBins**
> \Swagger\Client\Model\PackedBinsResponse packBins($body)



Performs a bin packing operation as described by the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XLoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PackBinsRequest(); // \Swagger\Client\Model\PackBinsRequest | 

try {
    $result = $apiInstance->packBins($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLoadApi->packBins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PackBinsRequest**](../Model/PackBinsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PackedBinsResponse**](../Model/PackedBinsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPackBins**
> \Swagger\Client\Model\Job startPackBins($body)



This is the asynchronous version of packBins. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchPackedBinsResponse. If the job ended with status FAILED, fetchPackedBinsResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XLoadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PackBinsRequest(); // \Swagger\Client\Model\PackBinsRequest | 

try {
    $result = $apiInstance->startPackBins($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLoadApi->startPackBins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PackBinsRequest**](../Model/PackBinsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

