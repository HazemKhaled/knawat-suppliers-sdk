# Swagger\Client\WeightRulesApi

All URIs are relative to *https://dev.suppliers.knawat.io/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**weightRulesGet**](WeightRulesApi.md#weightrulesget) | **GET** /weight_rules | Get list of Weight Rules
[**weightRulesPost**](WeightRulesApi.md#weightrulespost) | **POST** /weight_rules | Create a WeightRule
[**weightRulesWeightRuleIdDelete**](WeightRulesApi.md#weightrulesweightruleiddelete) | **DELETE** /weight_rules/{weightRuleId} | Delete a WeightRule
[**weightRulesWeightRuleIdPut**](WeightRulesApi.md#weightrulesweightruleidput) | **PUT** /weight_rules/{weightRuleId} | Update a WeightRule

# **weightRulesGet**
> \Swagger\Client\Model\InlineResponse2006 weightRulesGet($limit, $page, $sort)

Get list of Weight Rules

Get all Weight Rules.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WeightRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1.2; // float | 
$page = 1.2; // float | 
$sort = "sort_example"; // string | 

try {
    $result = $apiInstance->weightRulesGet($limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeightRulesApi->weightRulesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **weightRulesPost**
> \Swagger\Client\Model\InlineResponse2007 weightRulesPost($body)

Create a WeightRule

Creating a WeightRule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WeightRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->weightRulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeightRulesApi->weightRulesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **weightRulesWeightRuleIdDelete**
> \Swagger\Client\Model\InlineResponse2008 weightRulesWeightRuleIdDelete($weight_rule_id)

Delete a WeightRule

Delete WeightRule fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WeightRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$weight_rule_id = "weight_rule_id_example"; // string | 

try {
    $result = $apiInstance->weightRulesWeightRuleIdDelete($weight_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeightRulesApi->weightRulesWeightRuleIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **weight_rule_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **weightRulesWeightRuleIdPut**
> \Swagger\Client\Model\InlineResponse2007 weightRulesWeightRuleIdPut($body, $weight_rule_id)

Update a WeightRule

Update WeightRule fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\WeightRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$weight_rule_id = "weight_rule_id_example"; // string | 

try {
    $result = $apiInstance->weightRulesWeightRuleIdPut($body, $weight_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WeightRulesApi->weightRulesWeightRuleIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **weight_rule_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

