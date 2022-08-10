# ithings\ptvxserver\XTourApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeTours**](XTourApi.md#changetours) | **POST** /services/rs/XTour/2.26/changeTours | 
[**evaluateToursInExecution**](XTourApi.md#evaluatetoursinexecution) | **POST** /services/rs/XTour/2.26/evaluateToursInExecution | 
[**fetchChangeToursProposalsResponse**](XTourApi.md#fetchchangetoursproposalsresponse) | **POST** /services/rs/XTour/2.26/fetchChangeToursProposalsResponse | 
[**fetchToursResponse**](XTourApi.md#fetchtoursresponse) | **POST** /services/rs/XTour/2.26/fetchToursResponse | 
[**findChangeToursProposals**](XTourApi.md#findchangetoursproposals) | **POST** /services/rs/XTour/2.26/findChangeToursProposals | 
[**planTours**](XTourApi.md#plantours) | **POST** /services/rs/XTour/2.26/planTours | 
[**startChangeTours**](XTourApi.md#startchangetours) | **POST** /services/rs/XTour/2.26/startChangeTours | 
[**startEvaluateToursInExecution**](XTourApi.md#startevaluatetoursinexecution) | **POST** /services/rs/XTour/2.26/startEvaluateToursInExecution | 
[**startFindChangeToursProposals**](XTourApi.md#startfindchangetoursproposals) | **POST** /services/rs/XTour/2.26/startFindChangeToursProposals | 
[**startPlanTours**](XTourApi.md#startplantours) | **POST** /services/rs/XTour/2.26/startPlanTours | 

# **changeTours**
> \ithings\ptvxserver\model\ToursResponse changeTours($body)



Change existing tours via specified actions. Returns a plan containing the changed tours and reports with additional information about those changed tours. The source tour(s) and target tour are always returned even if the tours did not change (for example if an addTripAction with an insertion position of type insertion at best position does not find a valid insertion position). Furthermore the stored request will be the original PlanToursRequest with changed tours information contained in the input plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\ChangeToursRequest(); // \ithings\ptvxserver\model\ChangeToursRequest | 

try {
    $result = $apiInstance->changeTours($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->changeTours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\ChangeToursRequest**](../Model/ChangeToursRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ToursResponse**](../Model/ToursResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluateToursInExecution**
> \ithings\ptvxserver\model\ToursResponse evaluateToursInExecution($body)



Calculate time profile for a tour in execution. Returns tour reports containing the time profile starting at the current position of each specified vehicle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\ToursInExecutionRequest(); // \ithings\ptvxserver\model\ToursInExecutionRequest | 

try {
    $result = $apiInstance->evaluateToursInExecution($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->evaluateToursInExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\ToursInExecutionRequest**](../Model/ToursInExecutionRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ToursResponse**](../Model/ToursResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchChangeToursProposalsResponse**
> \ithings\ptvxserver\model\ChangeToursProposalsResponse fetchChangeToursProposalsResponse($body)



Fetches results of type ChangeToursProposalsResponse for the given job. If the calculation ended with an exception, fetchChangeToursProposalsResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->fetchChangeToursProposalsResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->fetchChangeToursProposalsResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ChangeToursProposalsResponse**](../Model/ChangeToursProposalsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchToursResponse**
> \ithings\ptvxserver\model\ToursResponse fetchToursResponse($body)



Fetches results of type ToursResponse for the given job. If the calculation ended with an exception, fetchToursResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->fetchToursResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->fetchToursResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ToursResponse**](../Model/ToursResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findChangeToursProposals**
> \ithings\ptvxserver\model\ChangeToursProposalsResponse findChangeToursProposals($body)



Propose ChangeToursActions to change an existing tour plan as desired. Returns proposed ChangeToursActions with resulting TourReports if the corresponding ChangeToursAction would be applied via a ChangeToursRequest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\FindChangeToursProposalsRequest(); // \ithings\ptvxserver\model\FindChangeToursProposalsRequest | 

try {
    $result = $apiInstance->findChangeToursProposals($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->findChangeToursProposals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\FindChangeToursProposalsRequest**](../Model/FindChangeToursProposalsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ChangeToursProposalsResponse**](../Model/ChangeToursProposalsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planTours**
> \ithings\ptvxserver\model\ToursResponse planTours($body)



Plan tours that ideally include all orders that are specified in the request. Returns a plan with tours and reports with additional information about the planned tours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\PlanToursRequest(); // \ithings\ptvxserver\model\PlanToursRequest | 

try {
    $result = $apiInstance->planTours($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->planTours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\PlanToursRequest**](../Model/PlanToursRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\ToursResponse**](../Model/ToursResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startChangeTours**
> \ithings\ptvxserver\model\Job startChangeTours($body)



This is the asynchronous version of changeTours. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchToursResponse. If the job ended with status FAILED, fetchToursResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\ChangeToursRequest(); // \ithings\ptvxserver\model\ChangeToursRequest | 

try {
    $result = $apiInstance->startChangeTours($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->startChangeTours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\ChangeToursRequest**](../Model/ChangeToursRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startEvaluateToursInExecution**
> \ithings\ptvxserver\model\Job startEvaluateToursInExecution($body)



This is the asynchronous version of evaluateToursInExecution. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchToursResponse. If the job ended with status FAILED, fetchToursResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\ToursInExecutionRequest(); // \ithings\ptvxserver\model\ToursInExecutionRequest | 

try {
    $result = $apiInstance->startEvaluateToursInExecution($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->startEvaluateToursInExecution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\ToursInExecutionRequest**](../Model/ToursInExecutionRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startFindChangeToursProposals**
> \ithings\ptvxserver\model\Job startFindChangeToursProposals($body)



This is the asynchronous version of findChangeToursProposals. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchChangeToursProposalsResponse. If the job ended with status FAILED, fetchChangeToursProposalsResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\FindChangeToursProposalsRequest(); // \ithings\ptvxserver\model\FindChangeToursProposalsRequest | 

try {
    $result = $apiInstance->startFindChangeToursProposals($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->startFindChangeToursProposals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\FindChangeToursProposalsRequest**](../Model/FindChangeToursProposalsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startPlanTours**
> \ithings\ptvxserver\model\Job startPlanTours($body)



This is the asynchronous version of planTours. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchToursResponse. If the job ended with status FAILED, fetchToursResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XTourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\PlanToursRequest(); // \ithings\ptvxserver\model\PlanToursRequest | 

try {
    $result = $apiInstance->startPlanTours($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XTourApi->startPlanTours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\PlanToursRequest**](../Model/PlanToursRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

