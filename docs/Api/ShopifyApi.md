# Swagger\Client\ShopifyApi

All URIs are relative to *https://api.itembase.com/connectivity*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRates1**](ShopifyApi.md#getrates1) | **POST** /instances/{instanceId}/connections/{connectionId}/shipping/api/v2/extint/shopify/rates | Get Rates

# **getRates1**
> \Swagger\Client\Model\ShopifyExtGetRatesResponse getRates1($body, $instance_id, $connection_id)

Get Rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer-jwt
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ShopifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShopifyExtGetRateRequest(); // \Swagger\Client\Model\ShopifyExtGetRateRequest | 
$instance_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$connection_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getRates1($body, $instance_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyApi->getRates1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShopifyExtGetRateRequest**](../Model/ShopifyExtGetRateRequest.md)|  |
 **instance_id** | [**string**](../Model/.md)|  |
 **connection_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ShopifyExtGetRatesResponse**](../Model/ShopifyExtGetRatesResponse.md)

### Authorization

[bearer-jwt](../../README.md#bearer-jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

