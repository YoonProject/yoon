# Swagger\Client\ConfigApi

All URIs are relative to *http://35.230.179.171*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configGet**](ConfigApi.md#configGet) | **GET** /config | Retrieves the configuration information for the Node


# **configGet**
> \Swagger\Client\Model\GetConfigResponse[] configGet()

Retrieves the configuration information for the Node



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->configGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetConfigResponse[]**](../Model/GetConfigResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

