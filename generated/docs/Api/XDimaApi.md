# ithings\ptvxserver\XDimaApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDistanceMatrix**](XDimaApi.md#createdistancematrix) | **POST** /services/rs/XDima/2.26/createDistanceMatrix | 
[**deleteDistanceMatrix**](XDimaApi.md#deletedistancematrix) | **POST** /services/rs/XDima/2.26/deleteDistanceMatrix | 
[**fetchDistanceMatrixResponse**](XDimaApi.md#fetchdistancematrixresponse) | **POST** /services/rs/XDima/2.26/fetchDistanceMatrixResponse | 
[**getDistanceMatrix**](XDimaApi.md#getdistancematrix) | **POST** /services/rs/XDima/2.26/getDistanceMatrix | 
[**listDistanceMatrices**](XDimaApi.md#listdistancematrices) | **POST** /services/rs/XDima/2.26/listDistanceMatrices | 
[**startCreateDistanceMatrix**](XDimaApi.md#startcreatedistancematrix) | **POST** /services/rs/XDima/2.26/startCreateDistanceMatrix | 
[**startUpdateDistanceMatrix**](XDimaApi.md#startupdatedistancematrix) | **POST** /services/rs/XDima/2.26/startUpdateDistanceMatrix | 
[**updateDistanceMatrix**](XDimaApi.md#updatedistancematrix) | **POST** /services/rs/XDima/2.26/updateDistanceMatrix | 

# **createDistanceMatrix**
> \ithings\ptvxserver\model\DistanceMatrixResponse createDistanceMatrix($body)



Creates a distance matrix by calculating road distances and travel times between given locations. An InvalidValueException is returned if the Feature Layer theme PTV\\_RestrictionZones is activated. PTV\\_RestrictionZones cannot be used for distance matrices. Returns a summary of this distance matrix calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\CreateDistanceMatrixRequest(); // \ithings\ptvxserver\model\CreateDistanceMatrixRequest | 

try {
    $result = $apiInstance->createDistanceMatrix($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->createDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\CreateDistanceMatrixRequest**](../Model/CreateDistanceMatrixRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDistanceMatrix**
> \ithings\ptvxserver\model\VoidResponse deleteDistanceMatrix($body)



Deletes a distance matrix with a given ID considering user privileges and concurrent usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\DeleteDistanceMatrixRequest(); // \ithings\ptvxserver\model\DeleteDistanceMatrixRequest | 

try {
    $result = $apiInstance->deleteDistanceMatrix($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->deleteDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\DeleteDistanceMatrixRequest**](../Model/DeleteDistanceMatrixRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchDistanceMatrixResponse**
> \ithings\ptvxserver\model\DistanceMatrixResponse fetchDistanceMatrixResponse($body)



Fetches results of type DistanceMatrixResponse for the given job. If the calculation ended with an exception, fetchDistanceMatrixResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->fetchDistanceMatrixResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->fetchDistanceMatrixResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistanceMatrix**
> \ithings\ptvxserver\model\DistanceMatrixResponse getDistanceMatrix($body)



Gets the distance matrix contents for specific matrix elements specified as relations between route locations or specified as an array of start and destination locations. Returns arrays representing the matrix contents for the requested part of the matrix.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\GetDistanceMatrixRequest(); // \ithings\ptvxserver\model\GetDistanceMatrixRequest | 

try {
    $result = $apiInstance->getDistanceMatrix($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->getDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\GetDistanceMatrixRequest**](../Model/GetDistanceMatrixRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDistanceMatrices**
> \ithings\ptvxserver\model\DistanceMatrixListResponse listDistanceMatrices($body)



Lists available distance matrices including their meta data considering user privileges and concurrent usage. See technical concept about multitenancy how to list matrices for all available tenants or scopes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\ListDistanceMatricesRequest(); // \ithings\ptvxserver\model\ListDistanceMatricesRequest | 

try {
    $result = $apiInstance->listDistanceMatrices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->listDistanceMatrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\ListDistanceMatricesRequest**](../Model/ListDistanceMatricesRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\DistanceMatrixListResponse**](../Model/DistanceMatrixListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCreateDistanceMatrix**
> \ithings\ptvxserver\model\Job startCreateDistanceMatrix($body)



This is the asynchronous version of createDistanceMatrix. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchDistanceMatrixResponse. If the job ended with status FAILED, fetchDistanceMatrixResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\CreateDistanceMatrixRequest(); // \ithings\ptvxserver\model\CreateDistanceMatrixRequest | 

try {
    $result = $apiInstance->startCreateDistanceMatrix($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->startCreateDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\CreateDistanceMatrixRequest**](../Model/CreateDistanceMatrixRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startUpdateDistanceMatrix**
> \ithings\ptvxserver\model\Job startUpdateDistanceMatrix($body)



This is the asynchronous version of updateDistanceMatrix. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchDistanceMatrixResponse. If the job ended with status FAILED, fetchDistanceMatrixResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\UpdateDistanceMatrixRequest(); // \ithings\ptvxserver\model\UpdateDistanceMatrixRequest | 

try {
    $result = $apiInstance->startUpdateDistanceMatrix($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->startUpdateDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\UpdateDistanceMatrixRequest**](../Model/UpdateDistanceMatrixRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDistanceMatrix**
> \ithings\ptvxserver\model\DistanceMatrixResponse updateDistanceMatrix($body)



Updates an existing distance matrix by extending it with new locations or overwriting existing entries. Returns a summary of this distance matrix calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\UpdateDistanceMatrixRequest(); // \ithings\ptvxserver\model\UpdateDistanceMatrixRequest | 

try {
    $result = $apiInstance->updateDistanceMatrix($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XDimaApi->updateDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\UpdateDistanceMatrixRequest**](../Model/UpdateDistanceMatrixRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

