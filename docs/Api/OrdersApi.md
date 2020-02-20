# Swagger\Client\OrdersApi

All URIs are relative to *https://dev.suppliers.knawat.io/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersGet**](OrdersApi.md#ordersget) | **GET** /orders | Get list of orders

# **ordersGet**
> \Swagger\Client\Model\InlineResponse2004 ordersGet($limit, $page, $sort)

Get list of orders

Get all orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1.2; // float | 
$page = 1.2; // float | 
$sort = "sort_example"; // string | 

try {
    $result = $apiInstance->ordersGet($limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **float**|  | [optional]
 **page** | **float**|  | [optional]
 **sort** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

