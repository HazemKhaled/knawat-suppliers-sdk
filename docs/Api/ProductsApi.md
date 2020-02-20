# Swagger\Client\ProductsApi

All URIs are relative to *https://dev.suppliers.knawat.io/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductsGet**](ProductsApi.md#catalogproductsget) | **GET** /catalog/products | Get list of products
[**catalogProductsPost**](ProductsApi.md#catalogproductspost) | **POST** /catalog/products | Create a product
[**catalogProductsPut**](ProductsApi.md#catalogproductsput) | **PUT** /catalog/products | Update products
[**catalogProductsSkuGet**](ProductsApi.md#catalogproductsskuget) | **GET** /catalog/products/{sku} | Get product by id
[**catalogProductsSkuPut**](ProductsApi.md#catalogproductsskuput) | **PUT** /catalog/products/{sku} | Update a product
[**catalogVariationsPut**](ProductsApi.md#catalogvariationsput) | **PUT** /catalog/variations | Update quantity of variation

# **catalogProductsGet**
> \Swagger\Client\Model\InlineResponse2001 catalogProductsGet($limit, $page, $qualified, $category_id, $stock, $price, $keyword, $sort_by, $sort_asc, $language)

Get list of products

Get all products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1.2; // float | Limit for products in response
$page = 1.2; // float | Page number for list
$qualified = 1.2; // float | Product qualified status = 1: Qualified, 2: Needs to review, 4: Disqualified, 5 : Draft
$category_id = "category_id_example"; // string | Product categories comma separated.if category_id = -1, get all un-categories products
$stock = new \Swagger\Client\Model\Stock(); // \Swagger\Client\Model\Stock | 
$price = new \Swagger\Client\Model\Price(); // \Swagger\Client\Model\Price | 
$keyword = "keyword_example"; // string | Search products by Name or Sku
$sort_by = "sort_by_example"; // string | Sort products. keywords to sort = name, stock, qualified, price, stock
$sort_asc = 1.2; // float | sort_asc: 1 = acs, -1 = desc
$language = "language_example"; // string | language to search products by name. Default language will be first language from supplier languages

try {
    $result = $apiInstance->catalogProductsGet($limit, $page, $qualified, $category_id, $stock, $price, $keyword, $sort_by, $sort_asc, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->catalogProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **float**| Limit for products in response | [optional]
 **page** | **float**| Page number for list | [optional]
 **qualified** | **float**| Product qualified status &#x3D; 1: Qualified, 2: Needs to review, 4: Disqualified, 5 : Draft | [optional]
 **category_id** | **string**| Product categories comma separated.if category_id &#x3D; -1, get all un-categories products | [optional]
 **stock** | [**\Swagger\Client\Model\Stock**](../Model/.md)|  | [optional]
 **price** | [**\Swagger\Client\Model\Price**](../Model/.md)|  | [optional]
 **keyword** | **string**| Search products by Name or Sku | [optional]
 **sort_by** | **string**| Sort products. keywords to sort &#x3D; name, stock, qualified, price, stock | [optional]
 **sort_asc** | **float**| sort_asc: 1 &#x3D; acs, -1 &#x3D; desc | [optional]
 **language** | **string**| language to search products by name. Default language will be first language from supplier languages | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductsPost**
> \Swagger\Client\Model\InlineResponse2001 catalogProductsPost($body)

Create a product

Creating a product for supplier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->catalogProductsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->catalogProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductsPut**
> \Swagger\Client\Model\InlineResponse2002 catalogProductsPut($body)

Update products

Update product fields for more than one products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->catalogProductsPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->catalogProductsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductsSkuGet**
> \Swagger\Client\Model\InlineResponse2003 catalogProductsSkuGet($sku)

Get product by id

Get product by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogProductsSkuGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->catalogProductsSkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductsSkuPut**
> \Swagger\Client\Model\InlineResponse2003 catalogProductsSkuPut($body, $sku)

Update a product

Update product fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->catalogProductsSkuPut($body, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->catalogProductsSkuPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogVariationsPut**
> \Swagger\Client\Model\InlineResponse2002 catalogVariationsPut($body)

Update quantity of variation

Update product quantity of variation for more than one products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | 

try {
    $result = $apiInstance->catalogVariationsPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->catalogVariationsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

