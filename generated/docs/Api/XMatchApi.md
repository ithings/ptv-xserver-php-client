# ithings\ptvxserver\XMatchApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchTrackResponse**](XMatchApi.md#fetchtrackresponse) | **POST** /services/rs/XMatch/2.26/fetchTrackResponse | 
[**matchPositions**](XMatchApi.md#matchpositions) | **POST** /services/rs/XMatch/2.26/matchPositions | 
[**matchTrack**](XMatchApi.md#matchtrack) | **POST** /services/rs/XMatch/2.26/matchTrack | 
[**startMatchTrack**](XMatchApi.md#startmatchtrack) | **POST** /services/rs/XMatch/2.26/startMatchTrack | 

# **fetchTrackResponse**
> \ithings\ptvxserver\model\TrackResponse fetchTrackResponse($body)



Fetches results of type TrackResponse for the given job. If the calculation ended with an exception, fetchTrackResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XMatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->fetchTrackResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XMatchApi->fetchTrackResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\TrackResponse**](../Model/TrackResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **matchPositions**
> \ithings\ptvxserver\model\PositionsResponse matchPositions($body)



Matches positions which do not necessarily belong together

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XMatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\MatchPositionsRequest(); // \ithings\ptvxserver\model\MatchPositionsRequest | 

try {
    $result = $apiInstance->matchPositions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XMatchApi->matchPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\MatchPositionsRequest**](../Model/MatchPositionsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\PositionsResponse**](../Model/PositionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **matchTrack**
> \ithings\ptvxserver\model\TrackResponse matchTrack($body)



Matches a complete track and returns the path(s) driven by the vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XMatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\MatchTrackRequest(); // \ithings\ptvxserver\model\MatchTrackRequest | 

try {
    $result = $apiInstance->matchTrack($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XMatchApi->matchTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\MatchTrackRequest**](../Model/MatchTrackRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\TrackResponse**](../Model/TrackResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startMatchTrack**
> \ithings\ptvxserver\model\Job startMatchTrack($body)



This is the asynchronous version of matchTrack. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchTrackResponse. If the job ended with status FAILED, fetchTrackResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XMatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\MatchTrackRequest(); // \ithings\ptvxserver\model\MatchTrackRequest | 

try {
    $result = $apiInstance->startMatchTrack($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XMatchApi->startMatchTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\MatchTrackRequest**](../Model/MatchTrackRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

