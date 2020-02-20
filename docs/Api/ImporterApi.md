# Swagger\Client\ImporterApi

All URIs are relative to *https://dev.suppliers.knawat.io/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importProductsGet**](ImporterApi.md#importproductsget) | **GET** /import/products | List files
[**importProductsPost**](ImporterApi.md#importproductspost) | **POST** /import/products | Import products

# **importProductsGet**
> \Swagger\Client\Model\InlineResponse200 importProductsGet($page, $limit, $status, $created, $sort)

List files

List csv files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ImporterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1.2; // float | Page number
$limit = 1.2; // float | Page limit
$status = "status_example"; // string | Files status
$created = new \Swagger\Client\Model\Created(); // \Swagger\Client\Model\Created | The date the file was imported
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | Sort by field

try {
    $result = $apiInstance->importProductsGet($page, $limit, $status, $created, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Page number | [optional]
 **limit** | **float**| Page limit | [optional]
 **status** | **string**| Files status | [optional]
 **created** | [**\Swagger\Client\Model\Created**](../Model/.md)| The date the file was imported | [optional]
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/.md)| Sort by field | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importProductsPost**
> \Swagger\Client\Model\Import importProductsPost($files)

Import products

Import products from csv

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ImporterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = array("files_example"); // string[] | 

try {
    $result = $apiInstance->importProductsPost($files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Import**](../Model/Import.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

