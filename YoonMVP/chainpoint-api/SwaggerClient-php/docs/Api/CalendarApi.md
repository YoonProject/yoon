# Chainpoint\Client\CalendarApi

All URIs are relative to *http://35.230.179.171*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calendarHeightDataGet**](CalendarApi.md#calendarHeightDataGet) | **GET** /calendar/{height}/data | Retrieves the calendar block data_val at the given height
[**calendarHeightGet**](CalendarApi.md#calendarHeightGet) | **GET** /calendar/{height} | Retrieves the calendar block at the given height
[**calendarHeightHashGet**](CalendarApi.md#calendarHeightHashGet) | **GET** /calendar/{height}/hash | Retrieves the calendar block hash at the given height


# **calendarHeightDataGet**
> \Chainpoint\Client\Model\GetCalendarBlockDataResponse calendarHeightDataGet($height)

Retrieves the calendar block data_val at the given height



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Chainpoint\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$height = 56; // int | The height of the block data_val to retrieve

try {
    $result = $apiInstance->calendarHeightDataGet($height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarHeightDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **height** | **int**| The height of the block data_val to retrieve |

### Return type

[**\Chainpoint\Client\Model\GetCalendarBlockDataResponse**](../Model/GetCalendarBlockDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarHeightGet**
> \Chainpoint\Client\Model\GetCalendarBlockResponse calendarHeightGet($height)

Retrieves the calendar block at the given height



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Chainpoint\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$height = 56; // int | The height of the block to retrieve

try {
    $result = $apiInstance->calendarHeightGet($height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarHeightGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **height** | **int**| The height of the block to retrieve |

### Return type

[**\Chainpoint\Client\Model\GetCalendarBlockResponse**](../Model/GetCalendarBlockResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarHeightHashGet**
> \Chainpoint\Client\Model\GetCalendarBlockHashResponse calendarHeightHashGet($height)

Retrieves the calendar block hash at the given height



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Chainpoint\Client\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$height = 56; // int | The height of the block hash to retrieve

try {
    $result = $apiInstance->calendarHeightHashGet($height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarHeightHashGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **height** | **int**| The height of the block hash to retrieve |

### Return type

[**\Chainpoint\Client\Model\GetCalendarBlockHashResponse**](../Model/GetCalendarBlockHashResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

