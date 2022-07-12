# Swagger\Client\XDimaApi

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
> \Swagger\Client\Model\DistanceMatrixResponse createDistanceMatrix($body)



Creates a distance matrix by calculating road distances and travel times between given locations. An InvalidValueException is returned if the Feature Layer theme PTV\\_RestrictionZones is activated. PTV\\_RestrictionZones cannot be used for distance matrices. Returns a summary of this distance matrix calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateDistanceMatrixRequest(); // \Swagger\Client\Model\CreateDistanceMatrixRequest | 

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
 **body** | [**\Swagger\Client\Model\CreateDistanceMatrixRequest**](../Model/CreateDistanceMatrixRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDistanceMatrix**
> \Swagger\Client\Model\VoidResponse deleteDistanceMatrix($body)



Deletes a distance matrix with a given ID considering user privileges and concurrent usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DeleteDistanceMatrixRequest(); // \Swagger\Client\Model\DeleteDistanceMatrixRequest | 

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
 **body** | [**\Swagger\Client\Model\DeleteDistanceMatrixRequest**](../Model/DeleteDistanceMatrixRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VoidResponse**](../Model/VoidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchDistanceMatrixResponse**
> \Swagger\Client\Model\DistanceMatrixResponse fetchDistanceMatrixResponse($body)



Fetches results of type DistanceMatrixResponse for the given job. If the calculation ended with an exception, fetchDistanceMatrixResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

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
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDistanceMatrix**
> \Swagger\Client\Model\DistanceMatrixResponse getDistanceMatrix($body)



Gets the distance matrix contents for specific matrix elements specified as relations between route locations or specified as an array of start and destination locations. Returns arrays representing the matrix contents for the requested part of the matrix.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GetDistanceMatrixRequest(); // \Swagger\Client\Model\GetDistanceMatrixRequest | 

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
 **body** | [**\Swagger\Client\Model\GetDistanceMatrixRequest**](../Model/GetDistanceMatrixRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDistanceMatrices**
> \Swagger\Client\Model\DistanceMatrixListResponse listDistanceMatrices($body)



Lists available distance matrices including their meta data considering user privileges and concurrent usage. See technical concept about multitenancy how to list matrices for all available tenants or scopes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ListDistanceMatricesRequest(); // \Swagger\Client\Model\ListDistanceMatricesRequest | 

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
 **body** | [**\Swagger\Client\Model\ListDistanceMatricesRequest**](../Model/ListDistanceMatricesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DistanceMatrixListResponse**](../Model/DistanceMatrixListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCreateDistanceMatrix**
> \Swagger\Client\Model\Job startCreateDistanceMatrix($body)



This is the asynchronous version of createDistanceMatrix. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchDistanceMatrixResponse. If the job ended with status FAILED, fetchDistanceMatrixResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateDistanceMatrixRequest(); // \Swagger\Client\Model\CreateDistanceMatrixRequest | 

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
 **body** | [**\Swagger\Client\Model\CreateDistanceMatrixRequest**](../Model/CreateDistanceMatrixRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startUpdateDistanceMatrix**
> \Swagger\Client\Model\Job startUpdateDistanceMatrix($body)



This is the asynchronous version of updateDistanceMatrix. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchDistanceMatrixResponse. If the job ended with status FAILED, fetchDistanceMatrixResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\UpdateDistanceMatrixRequest(); // \Swagger\Client\Model\UpdateDistanceMatrixRequest | 

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
 **body** | [**\Swagger\Client\Model\UpdateDistanceMatrixRequest**](../Model/UpdateDistanceMatrixRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDistanceMatrix**
> \Swagger\Client\Model\DistanceMatrixResponse updateDistanceMatrix($body)



Updates an existing distance matrix by extending it with new locations or overwriting existing entries. Returns a summary of this distance matrix calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XDimaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\UpdateDistanceMatrixRequest(); // \Swagger\Client\Model\UpdateDistanceMatrixRequest | 

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
 **body** | [**\Swagger\Client\Model\UpdateDistanceMatrixRequest**](../Model/UpdateDistanceMatrixRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DistanceMatrixResponse**](../Model/DistanceMatrixResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

