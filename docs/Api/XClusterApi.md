# Swagger\Client\XClusterApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coverLocations**](XClusterApi.md#coverlocations) | **POST** /services/rs/XCluster/2.26/coverLocations | 
[**fetchClustersResponse**](XClusterApi.md#fetchclustersresponse) | **POST** /services/rs/XCluster/2.26/fetchClustersResponse | 
[**fetchVisitSequenceResponse**](XClusterApi.md#fetchvisitsequenceresponse) | **POST** /services/rs/XCluster/2.26/fetchVisitSequenceResponse | 
[**fetchVisitsResponse**](XClusterApi.md#fetchvisitsresponse) | **POST** /services/rs/XCluster/2.26/fetchVisitsResponse | 
[**optimizeVisitSequence**](XClusterApi.md#optimizevisitsequence) | **POST** /services/rs/XCluster/2.26/optimizeVisitSequence | 
[**planClusters**](XClusterApi.md#planclusters) | **POST** /services/rs/XCluster/2.26/planClusters | 
[**planVisits**](XClusterApi.md#planvisits) | **POST** /services/rs/XCluster/2.26/planVisits | 
[**startCoverLocations**](XClusterApi.md#startcoverlocations) | **POST** /services/rs/XCluster/2.26/startCoverLocations | 
[**startOptimizeVisitSequence**](XClusterApi.md#startoptimizevisitsequence) | **POST** /services/rs/XCluster/2.26/startOptimizeVisitSequence | 
[**startPlanClusters**](XClusterApi.md#startplanclusters) | **POST** /services/rs/XCluster/2.26/startPlanClusters | 
[**startPlanVisits**](XClusterApi.md#startplanvisits) | **POST** /services/rs/XCluster/2.26/startPlanVisits | 

# **coverLocations**
> \Swagger\Client\Model\ClustersResponse coverLocations($body)



Calculates a cluster planning for the given request. In contrast to the method planClusters, not all locations need to be covered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CoverLocationsRequest(); // \Swagger\Client\Model\CoverLocationsRequest | 

try {
    $result = $apiInstance->coverLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->coverLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CoverLocationsRequest**](../Model/CoverLocationsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ClustersResponse**](../Model/ClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchClustersResponse**
> \Swagger\Client\Model\ClustersResponse fetchClustersResponse($body)



Fetches results of type ClustersResponse for the given job. If the calculation ended with an exception, fetchClustersResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchClustersResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->fetchClustersResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ClustersResponse**](../Model/ClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchVisitSequenceResponse**
> \Swagger\Client\Model\VisitSequenceResponse fetchVisitSequenceResponse($body)



Fetches results of type VisitSequenceResponse for the given job. If the calculation ended with an exception, fetchVisitSequenceResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchVisitSequenceResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->fetchVisitSequenceResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VisitSequenceResponse**](../Model/VisitSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchVisitsResponse**
> \Swagger\Client\Model\VisitsResponse fetchVisitsResponse($body)



Fetches results of type VisitsResponse for the given job. If the calculation ended with an exception, fetchVisitsResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\JobRequest(); // \Swagger\Client\Model\JobRequest | 

try {
    $result = $apiInstance->fetchVisitsResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->fetchVisitsResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VisitsResponse**](../Model/VisitsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimizeVisitSequence**
> \Swagger\Client\Model\VisitSequenceResponse optimizeVisitSequence($body)



Solves visit sequencing problems with street distances. This is equivalent to a traveling salesman problem (TSP) with street distances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OptimizeVisitSequenceRequest(); // \Swagger\Client\Model\OptimizeVisitSequenceRequest | 

try {
    $result = $apiInstance->optimizeVisitSequence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->optimizeVisitSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OptimizeVisitSequenceRequest**](../Model/OptimizeVisitSequenceRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VisitSequenceResponse**](../Model/VisitSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planClusters**
> \Swagger\Client\Model\ClustersResponse planClusters($body)



Calculates a cluster planning for the given request including all of the locations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PlanClustersRequest(); // \Swagger\Client\Model\PlanClustersRequest | 

try {
    $result = $apiInstance->planClusters($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->planClusters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PlanClustersRequest**](../Model/PlanClustersRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ClustersResponse**](../Model/ClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planVisits**
> \Swagger\Client\Model\VisitsResponse planVisits($body)



Calculates a daily visit planning for the given request in a certain planning period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PlanVisitsRequest(); // \Swagger\Client\Model\PlanVisitsRequest | 

try {
    $result = $apiInstance->planVisits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->planVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PlanVisitsRequest**](../Model/PlanVisitsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\VisitsResponse**](../Model/VisitsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCoverLocations**
> \Swagger\Client\Model\Job startCoverLocations($body)



This is the asynchronous version of coverLocations. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchClustersResponse. If the job ended with status FAILED, fetchClustersResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CoverLocationsRequest(); // \Swagger\Client\Model\CoverLocationsRequest | 

try {
    $result = $apiInstance->startCoverLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->startCoverLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CoverLocationsRequest**](../Model/CoverLocationsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startOptimizeVisitSequence**
> \Swagger\Client\Model\Job startOptimizeVisitSequence($body)



This is the asynchronous version of optimizeVisitSequence. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchVisitSequenceResponse. If the job ended with status FAILED, fetchVisitSequenceResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OptimizeVisitSequenceRequest(); // \Swagger\Client\Model\OptimizeVisitSequenceRequest | 

try {
    $result = $apiInstance->startOptimizeVisitSequence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->startOptimizeVisitSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OptimizeVisitSequenceRequest**](../Model/OptimizeVisitSequenceRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPlanClusters**
> \Swagger\Client\Model\Job startPlanClusters($body)



This is the asynchronous version of planClusters. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchClustersResponse. If the job ended with status FAILED, fetchClustersResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PlanClustersRequest(); // \Swagger\Client\Model\PlanClustersRequest | 

try {
    $result = $apiInstance->startPlanClusters($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->startPlanClusters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PlanClustersRequest**](../Model/PlanClustersRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPlanVisits**
> \Swagger\Client\Model\Job startPlanVisits($body)



This is the asynchronous version of planVisits. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchVisitsResponse. If the job ended with status FAILED, fetchVisitsResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PlanVisitsRequest(); // \Swagger\Client\Model\PlanVisitsRequest | 

try {
    $result = $apiInstance->startPlanVisits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XClusterApi->startPlanVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PlanVisitsRequest**](../Model/PlanVisitsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

