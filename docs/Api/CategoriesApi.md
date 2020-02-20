# Swagger\Client\CategoriesApi

All URIs are relative to *https://dev.suppliers.knawat.io/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoriesGet**](CategoriesApi.md#catalogcategoriesget) | **GET** /catalog/categories | Get list of categories

# **catalogCategoriesGet**
> \Swagger\Client\Model\InlineResponse2005 catalogCategoriesGet($parent_id, $level)

Get list of categories

Get all categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 1.2; // float | 
$level = 1.2; // float | 

try {
    $result = $apiInstance->catalogCategoriesGet($parent_id, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->catalogCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **float**|  | [optional]
 **level** | **float**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

