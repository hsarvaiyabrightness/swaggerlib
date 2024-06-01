# Swagger\Client\ProductsManagementApi

All URIs are relative to *https://api.itembase.com/connectivity*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProduct**](ProductsManagementApi.md#deleteproduct) | **DELETE** /instances/{instanceId}/connections/{connectionId}/shipping/api/v2/products | Delete product
[**getProduct**](ProductsManagementApi.md#getproduct) | **GET** /instances/{instanceId}/connections/{connectionId}/shipping/api/v2/products | Get product
[**saveProduct**](ProductsManagementApi.md#saveproduct) | **POST** /instances/{instanceId}/connections/{connectionId}/shipping/api/v2/products | Save product

# **deleteProduct**
> deleteProduct($instance_id, $connection_id, $product_id, $variant_id)

Delete product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer-jwt
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$connection_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$product_id = "product_id_example"; // string | 
$variant_id = "variant_id_example"; // string | 

try {
    $apiInstance->deleteProduct($instance_id, $connection_id, $product_id, $variant_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsManagementApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_id** | [**string**](../Model/.md)|  |
 **connection_id** | [**string**](../Model/.md)|  |
 **product_id** | **string**|  |
 **variant_id** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-jwt](../../README.md#bearer-jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \Swagger\Client\Model\ProductDto getProduct($instance_id, $connection_id, $product_id, $variant_id)

Get product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer-jwt
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$connection_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$product_id = "product_id_example"; // string | 
$variant_id = "variant_id_example"; // string | 

try {
    $result = $apiInstance->getProduct($instance_id, $connection_id, $product_id, $variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsManagementApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_id** | [**string**](../Model/.md)|  |
 **connection_id** | [**string**](../Model/.md)|  |
 **product_id** | **string**|  |
 **variant_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductDto**](../Model/ProductDto.md)

### Authorization

[bearer-jwt](../../README.md#bearer-jwt)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveProduct**
> \Swagger\Client\Model\ProductDto saveProduct($body, $instance_id, $connection_id)

Save product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer-jwt
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProductsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductDto(); // \Swagger\Client\Model\ProductDto | 
$instance_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$connection_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->saveProduct($body, $instance_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsManagementApi->saveProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductDto**](../Model/ProductDto.md)|  |
 **instance_id** | [**string**](../Model/.md)|  |
 **connection_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ProductDto**](../Model/ProductDto.md)

### Authorization

[bearer-jwt](../../README.md#bearer-jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

