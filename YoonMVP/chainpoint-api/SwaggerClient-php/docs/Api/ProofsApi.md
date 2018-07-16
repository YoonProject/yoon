# Chainpoint\Client\ProofsApi

All URIs are relative to *http://35.230.179.171*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proofsGet**](ProofsApi.md#proofsGet) | **GET** /proofs/ | Retrieves one or more proofs by hashids supplied in header
[**proofsHashIdNodeGet**](ProofsApi.md#proofsHashIdNodeGet) | **GET** /proofs/{hash_id_node} | Retrieves a proof by hash_id_node


# **proofsGet**
> \Chainpoint\Client\Model\GetProofsResponse[] proofsGet($hashids)

Retrieves one or more proofs by hashids supplied in header



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Chainpoint\Client\Api\ProofsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hashids = "hashids_example"; // string | Comma separated hash_id_node list of the proofs to retrieve

try {
    $result = $apiInstance->proofsGet($hashids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsApi->proofsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hashids** | **string**| Comma separated hash_id_node list of the proofs to retrieve |

### Return type

[**\Chainpoint\Client\Model\GetProofsResponse[]**](../Model/GetProofsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.chainpoint.ld+json, application/vnd.chainpoint.json+base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proofsHashIdNodeGet**
> \Chainpoint\Client\Model\GetProofsResponse[] proofsHashIdNodeGet($hash_id_node)

Retrieves a proof by hash_id_node



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Chainpoint\Client\Api\ProofsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash_id_node = "hash_id_node_example"; // string | The hash_id_node of the proof to retrieve

try {
    $result = $apiInstance->proofsHashIdNodeGet($hash_id_node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProofsApi->proofsHashIdNodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_id_node** | **string**| The hash_id_node of the proof to retrieve |

### Return type

[**\Chainpoint\Client\Model\GetProofsResponse[]**](../Model/GetProofsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.chainpoint.ld+json, application/vnd.chainpoint.json+base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

