# Swagger\Client\HashesApi

All URIs are relative to *http://35.230.179.171*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hashesPost**](HashesApi.md#hashesPost) | **POST** /hashes | Submit one or more hashes for anchoring


# **hashesPost**
> \Swagger\Client\Model\PostHashResponse hashesPost($body)

Submit one or more hashes for anchoring



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HashesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostHashRequest(); // \Swagger\Client\Model\PostHashRequest | An array of hex string hashes to be anchored

try {
    $result = $apiInstance->hashesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HashesApi->hashesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PostHashRequest**](../Model/PostHashRequest.md)| An array of hex string hashes to be anchored |

### Return type

[**\Swagger\Client\Model\PostHashResponse**](../Model/PostHashResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

