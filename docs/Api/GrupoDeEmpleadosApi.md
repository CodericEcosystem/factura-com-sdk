# FacturaCom\FacturaComSdk\GrupoDeEmpleadosApi

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPayrollEmployeeGroup619ead8d6427aViewGet**](GrupoDeEmpleadosApi.md#apipayrollemployeegroup619ead8d6427aviewget) | **GET** /api/payroll/employee/group/619ead8d6427a/view | Listar grupo de empleados por UID
[**apiPayrollEmployeeGroup62571c9798aaeDeletePost**](GrupoDeEmpleadosApi.md#apipayrollemployeegroup62571c9798aaedeletepost) | **POST** /api/payroll/employee/group/62571c9798aae/delete | Eliminar grupo de empleados
[**apiPayrollEmployeeGroup62571c9798aaeDownPost**](GrupoDeEmpleadosApi.md#apipayrollemployeegroup62571c9798aaedownpost) | **POST** /api/payroll/employee/group/62571c9798aae/down | Desactivar grupo de empleados
[**apiPayrollEmployeeGroup62571c9798aaeUpPost**](GrupoDeEmpleadosApi.md#apipayrollemployeegroup62571c9798aaeuppost) | **POST** /api/payroll/employee/group/62571c9798aae/up | Activar grupo de empleados
[**apiPayrollEmployeeGroupCreatePost**](GrupoDeEmpleadosApi.md#apipayrollemployeegroupcreatepost) | **POST** /api/payroll/employee/group/create | Crear grupo de empleados
[**apiPayrollEmployeeGroupListGet**](GrupoDeEmpleadosApi.md#apipayrollemployeegrouplistget) | **GET** /api/payroll/employee/group/list | Listar grupo de empleados

# **apiPayrollEmployeeGroup619ead8d6427aViewGet**
> apiPayrollEmployeeGroup619ead8d6427aViewGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Listar grupo de empleados por UID

Método para crear un CFDI nuevo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\GrupoDeEmpleadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollEmployeeGroup619ead8d6427aViewGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling GrupoDeEmpleadosApi->apiPayrollEmployeeGroup619ead8d6427aViewGet: ', $e->getMessage(), PHP_EOL;
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

# **apiPayrollEmployeeGroup62571c9798aaeDeletePost**
> apiPayrollEmployeeGroup62571c9798aaeDeletePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Eliminar grupo de empleados

Método para crear un CFDI nuevo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\GrupoDeEmpleadosApi(
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
    $apiInstance->apiPayrollEmployeeGroup62571c9798aaeDeletePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling GrupoDeEmpleadosApi->apiPayrollEmployeeGroup62571c9798aaeDeletePost: ', $e->getMessage(), PHP_EOL;
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

# **apiPayrollEmployeeGroup62571c9798aaeDownPost**
> apiPayrollEmployeeGroup62571c9798aaeDownPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Desactivar grupo de empleados

Método para crear un CFDI nuevo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\GrupoDeEmpleadosApi(
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
    $apiInstance->apiPayrollEmployeeGroup62571c9798aaeDownPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling GrupoDeEmpleadosApi->apiPayrollEmployeeGroup62571c9798aaeDownPost: ', $e->getMessage(), PHP_EOL;
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

# **apiPayrollEmployeeGroup62571c9798aaeUpPost**
> apiPayrollEmployeeGroup62571c9798aaeUpPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Activar grupo de empleados

Método para crear un CFDI nuevo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\GrupoDeEmpleadosApi(
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
    $apiInstance->apiPayrollEmployeeGroup62571c9798aaeUpPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling GrupoDeEmpleadosApi->apiPayrollEmployeeGroup62571c9798aaeUpPost: ', $e->getMessage(), PHP_EOL;
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

# **apiPayrollEmployeeGroupCreatePost**
> apiPayrollEmployeeGroupCreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Crear grupo de empleados

Método para crear un CFDI nuevo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\GrupoDeEmpleadosApi(
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
    $apiInstance->apiPayrollEmployeeGroupCreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling GrupoDeEmpleadosApi->apiPayrollEmployeeGroupCreatePost: ', $e->getMessage(), PHP_EOL;
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

# **apiPayrollEmployeeGroupListGet**
> apiPayrollEmployeeGroupListGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Listar grupo de empleados

Método para crear un CFDI nuevo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\GrupoDeEmpleadosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollEmployeeGroupListGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling GrupoDeEmpleadosApi->apiPayrollEmployeeGroupListGet: ', $e->getMessage(), PHP_EOL;
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

