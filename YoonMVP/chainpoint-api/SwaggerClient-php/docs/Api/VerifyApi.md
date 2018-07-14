# Swagger\Client\VerifyApi

All URIs are relative to *http://35.230.179.171*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyPost**](VerifyApi.md#verifyPost) | **POST** /verify | Submit one or more proofs for verification


# **verifyPost**
> \Swagger\Client\Model\PostVerifyResponse[] verifyPost($body)

Submit one or more proofs for verification



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PostVerifyRequest(); // \Swagger\Client\Model\PostVerifyRequest | Array of one or more proofs to be verified

try {
    $result = $apiInstance->verifyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->verifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PostVerifyRequest**](../Model/PostVerifyRequest.md)| Array of one or more proofs to be verified |

### Return type

[**\Swagger\Client\Model\PostVerifyResponse[]**](../Model/PostVerifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

