# ithings\ptvxserver\XClusterApi

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
> \ithings\ptvxserver\model\ClustersResponse coverLocations($body)



Calculates a cluster planning for the given request. In contrast to the method planClusters, not all locations need to be covered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\CoverLocationsRequest(); // \ithings\ptvxserver\model\CoverLocationsRequest | 

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
 **body** | [**\ithings\ptvxserver\model\CoverLocationsRequest**](../Model/CoverLocationsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ClustersResponse**](../Model/ClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchClustersResponse**
> \ithings\ptvxserver\model\ClustersResponse fetchClustersResponse($body)



Fetches results of type ClustersResponse for the given job. If the calculation ended with an exception, fetchClustersResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

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
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ClustersResponse**](../Model/ClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchVisitSequenceResponse**
> \ithings\ptvxserver\model\VisitSequenceResponse fetchVisitSequenceResponse($body)



Fetches results of type VisitSequenceResponse for the given job. If the calculation ended with an exception, fetchVisitSequenceResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

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
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VisitSequenceResponse**](../Model/VisitSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchVisitsResponse**
> \ithings\ptvxserver\model\VisitsResponse fetchVisitsResponse($body)



Fetches results of type VisitsResponse for the given job. If the calculation ended with an exception, fetchVisitsResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

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
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VisitsResponse**](../Model/VisitsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimizeVisitSequence**
> \ithings\ptvxserver\model\VisitSequenceResponse optimizeVisitSequence($body)



Solves visit sequencing problems with street distances. This is equivalent to a traveling salesman problem (TSP) with street distances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\OptimizeVisitSequenceRequest(); // \ithings\ptvxserver\model\OptimizeVisitSequenceRequest | 

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
 **body** | [**\ithings\ptvxserver\model\OptimizeVisitSequenceRequest**](../Model/OptimizeVisitSequenceRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VisitSequenceResponse**](../Model/VisitSequenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planClusters**
> \ithings\ptvxserver\model\ClustersResponse planClusters($body)



Calculates a cluster planning for the given request including all of the locations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\PlanClustersRequest(); // \ithings\ptvxserver\model\PlanClustersRequest | 

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
 **body** | [**\ithings\ptvxserver\model\PlanClustersRequest**](../Model/PlanClustersRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ClustersResponse**](../Model/ClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planVisits**
> \ithings\ptvxserver\model\VisitsResponse planVisits($body)



Calculates a daily visit planning for the given request in a certain planning period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\PlanVisitsRequest(); // \ithings\ptvxserver\model\PlanVisitsRequest | 

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
 **body** | [**\ithings\ptvxserver\model\PlanVisitsRequest**](../Model/PlanVisitsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\VisitsResponse**](../Model/VisitsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startCoverLocations**
> \ithings\ptvxserver\model\Job startCoverLocations($body)



This is the asynchronous version of coverLocations. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchClustersResponse. If the job ended with status FAILED, fetchClustersResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\CoverLocationsRequest(); // \ithings\ptvxserver\model\CoverLocationsRequest | 

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
 **body** | [**\ithings\ptvxserver\model\CoverLocationsRequest**](../Model/CoverLocationsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startOptimizeVisitSequence**
> \ithings\ptvxserver\model\Job startOptimizeVisitSequence($body)



This is the asynchronous version of optimizeVisitSequence. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchVisitSequenceResponse. If the job ended with status FAILED, fetchVisitSequenceResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\OptimizeVisitSequenceRequest(); // \ithings\ptvxserver\model\OptimizeVisitSequenceRequest | 

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
 **body** | [**\ithings\ptvxserver\model\OptimizeVisitSequenceRequest**](../Model/OptimizeVisitSequenceRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPlanClusters**
> \ithings\ptvxserver\model\Job startPlanClusters($body)



This is the asynchronous version of planClusters. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchClustersResponse. If the job ended with status FAILED, fetchClustersResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\PlanClustersRequest(); // \ithings\ptvxserver\model\PlanClustersRequest | 

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
 **body** | [**\ithings\ptvxserver\model\PlanClustersRequest**](../Model/PlanClustersRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPlanVisits**
> \ithings\ptvxserver\model\Job startPlanVisits($body)



This is the asynchronous version of planVisits. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchVisitsResponse. If the job ended with status FAILED, fetchVisitsResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\PlanVisitsRequest(); // \ithings\ptvxserver\model\PlanVisitsRequest | 

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
 **body** | [**\ithings\ptvxserver\model\PlanVisitsRequest**](../Model/PlanVisitsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

