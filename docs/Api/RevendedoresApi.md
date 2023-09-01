# FacturaCom\FacturaComSdk\RevendedoresApi

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV4ResellersClientsCreatePost**](RevendedoresApi.md#apiv4resellersclientscreatepost) | **POST** /api/v4/resellers/clients/create | Crear cliente para revendedores
[**apiV4ResellersClientsGet**](RevendedoresApi.md#apiv4resellersclientsget) | **GET** /api/v4/resellers/clients | Listar tus clientes como revendedor
[**apiV4ResellersClientsUidGet**](RevendedoresApi.md#apiv4resellersclientsuidget) | **GET** /api/v4/resellers/clients/{uid} | Listar uno de tus clientes como revendedor
[**apiV4ResellersPackagesGet**](RevendedoresApi.md#apiv4resellerspackagesget) | **GET** /api/v4/resellers/packages | Consultar tus planes de revendedor

# **apiV4ResellersClientsCreatePost**
> apiV4ResellersClientsCreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Crear cliente para revendedores

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\RevendedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4ResellersClientsCreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling RevendedoresApi->apiV4ResellersClientsCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4ResellersClientsGet**
> apiV4ResellersClientsGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Listar tus clientes como revendedor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\RevendedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4ResellersClientsGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling RevendedoresApi->apiV4ResellersClientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4ResellersClientsUidGet**
> apiV4ResellersClientsUidGet($uid, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Listar uno de tus clientes como revendedor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\RevendedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4ResellersClientsUidGet($uid, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling RevendedoresApi->apiV4ResellersClientsUidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4ResellersPackagesGet**
> apiV4ResellersPackagesGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar tus planes de revendedor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\RevendedoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4ResellersPackagesGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling RevendedoresApi->apiV4ResellersPackagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

