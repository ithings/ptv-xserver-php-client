# ithings\ptvxserver\XLocateApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchLocationsBulkResponse**](XLocateApi.md#fetchlocationsbulkresponse) | **POST** /services/rs/XLocate/2.26/fetchLocationsBulkResponse | 
[**locations**](XLocateApi.md#locations) | **GET** /services/rest/XLocate/2.26/locations/{address} | 
[**searchLocations**](XLocateApi.md#searchlocations) | **POST** /services/rs/XLocate/2.26/searchLocations | 
[**searchLocationsInBulk**](XLocateApi.md#searchlocationsinbulk) | **POST** /services/rs/XLocate/2.26/searchLocationsInBulk | 
[**startSearchLocationsInBulk**](XLocateApi.md#startsearchlocationsinbulk) | **POST** /services/rs/XLocate/2.26/startSearchLocationsInBulk | 

# **fetchLocationsBulkResponse**
> \ithings\ptvxserver\model\LocationsBulkResponse fetchLocationsBulkResponse($body)



Fetches results of type LocationsBulkResponse for the given job. If the calculation ended with an exception, fetchLocationsBulkResponse will rethrow it. If the id of the job is unknown, a XServerException with message 'unknown id' is thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\JobRequest(); // \ithings\ptvxserver\model\JobRequest | 

try {
    $result = $apiInstance->fetchLocationsBulkResponse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLocateApi->fetchLocationsBulkResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\JobRequest**](../Model/JobRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\LocationsBulkResponse**](../Model/LocationsBulkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locations**
> \ithings\ptvxserver\model\LocationsResponse locations($address, $map_language)



Searches for locations matching a given address, specified as a free-form text input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | The input address.
$map_language = "map_language_example"; // string | The language used for geographic names that are part of the map. The default x-ptv-DFT means that names are given in the language spoken in that country or region.

try {
    $result = $apiInstance->locations($address, $map_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLocateApi->locations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| The input address. |
 **map_language** | **string**| The language used for geographic names that are part of the map. The default x-ptv-DFT means that names are given in the language spoken in that country or region. | [optional]

### Return type

[**\ithings\ptvxserver\model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLocations**
> \ithings\ptvxserver\model\LocationsResponse searchLocations($body)



Searches for locations matching a given address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\SearchLocationsRequest(); // \ithings\ptvxserver\model\SearchLocationsRequest | 

try {
    $result = $apiInstance->searchLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLocateApi->searchLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\SearchLocationsRequest**](../Model/SearchLocationsRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLocationsInBulk**
> \ithings\ptvxserver\model\LocationsBulkResponse searchLocationsInBulk($body)



For each element of a list of addresses, searches for locations matching that address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\SearchLocationsBulkRequest(); // \ithings\ptvxserver\model\SearchLocationsBulkRequest | 

try {
    $result = $apiInstance->searchLocationsInBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLocateApi->searchLocationsInBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\SearchLocationsBulkRequest**](../Model/SearchLocationsBulkRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\LocationsBulkResponse**](../Model/LocationsBulkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startSearchLocationsInBulk**
> \ithings\ptvxserver\model\Job startSearchLocationsInBulk($body)



This is the asynchronous version of searchLocationsInBulk. Calling this operation will not block until the result has been calculated. Instead of a result object, a Job object is returned which identifies the started calculation. To get status updates on a running job, use the operation watchJob. If the status changes to SUCCEEDED, the calculation was successful and the result can be obtained using fetchLocationsBulkResponse. If the job ended with status FAILED, fetchLocationsBulkResponse throws the exception that occurred during calculation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ithings\ptvxserver\api\XLocateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ithings\ptvxserver\model\SearchLocationsBulkRequest(); // \ithings\ptvxserver\model\SearchLocationsBulkRequest | 

try {
    $result = $apiInstance->startSearchLocationsInBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XLocateApi->startSearchLocationsInBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ithings\ptvxserver\model\SearchLocationsBulkRequest**](../Model/SearchLocationsBulkRequest.md)|  |

### Return type

[**\ithings\ptvxserver\model\Job**](../Model/Job.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

