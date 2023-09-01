# FacturaCom\FacturaComSdk\MigracionesApi

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiMigrator704e9db88fc34fa38ec0424b47ac0072ViewGet**](MigracionesApi.md#apimigrator704e9db88fc34fa38ec0424b47ac0072viewget) | **GET** /api/migrator/704e9db8-8fc3-4fa3-8ec0-424b47ac0072/view | Consultar una migracion en especifico
[**apiMigratorCreatePost**](MigracionesApi.md#apimigratorcreatepost) | **POST** /api/migrator/create | Crear nueva migración de CFDIs
[**apiMigratorListGet**](MigracionesApi.md#apimigratorlistget) | **GET** /api/migrator/list | Consultar todas las migraciones

# **apiMigrator704e9db88fc34fa38ec0424b47ac0072ViewGet**
> apiMigrator704e9db88fc34fa38ec0424b47ac0072ViewGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar una migracion en especifico

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\MigracionesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiMigrator704e9db88fc34fa38ec0424b47ac0072ViewGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling MigracionesApi->apiMigrator704e9db88fc34fa38ec0424b47ac0072ViewGet: ', $e->getMessage(), PHP_EOL;
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

# **apiMigratorCreatePost**
> apiMigratorCreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Crear nueva migración de CFDIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\MigracionesApi(
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
    $apiInstance->apiMigratorCreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling MigracionesApi->apiMigratorCreatePost: ', $e->getMessage(), PHP_EOL;
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

# **apiMigratorListGet**
> apiMigratorListGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar todas las migraciones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\MigracionesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiMigratorListGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling MigracionesApi->apiMigratorListGet: ', $e->getMessage(), PHP_EOL;
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

