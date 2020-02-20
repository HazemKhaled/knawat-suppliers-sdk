# Swagger\Client\AuthApi

All URIs are relative to *https://dev.suppliers.knawat.io/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenPost**](AuthApi.md#tokenpost) | **POST** /token | Get token for supplier

# **tokenPost**
> \Swagger\Client\Model\Auth tokenPost($body)

Get token for supplier

Get token from supplier key and secret.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->tokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |

### Return type

[**\Swagger\Client\Model\Auth**](../Model/Auth.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

