# FacturaCom\FacturaComSdk\CatalogosCatalogosNominaApi

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPayrollCatalogosBancosGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogosbancosget) | **GET** /api/payroll/catalogos/bancos | Consultar catalogo de bancos
[**apiPayrollCatalogosEstadosGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogosestadosget) | **GET** /api/payroll/catalogos/estados | Consultar catalogo de estados
[**apiPayrollCatalogosMetodopagoGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogosmetodopagoget) | **GET** /api/payroll/catalogos/metodopago | Consultar catalogo de Metodo pago nomina
[**apiPayrollCatalogosOrigenrecursoGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogosorigenrecursoget) | **GET** /api/payroll/catalogos/origenrecurso | Consultar catalogo de Origen Recurso
[**apiPayrollCatalogosRiesgoGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogosriesgoget) | **GET** /api/payroll/catalogos/riesgo | Consultar catalogo de Riesgo
[**apiPayrollCatalogosTipocontratoGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostipocontratoget) | **GET** /api/payroll/catalogos/tipocontrato | Consultar catalogo de Tipo contrato
[**apiPayrollCatalogosTipodeduccionGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostipodeduccionget) | **GET** /api/payroll/catalogos/tipodeduccion | Consultar catalogo de Tipo deduccion
[**apiPayrollCatalogosTipohorasGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostipohorasget) | **GET** /api/payroll/catalogos/tipohoras | Consultar catalogo de Tipo horas
[**apiPayrollCatalogosTipoincapacidadGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostipoincapacidadget) | **GET** /api/payroll/catalogos/tipoincapacidad | Consultar catalogo de Tipo incapacidad
[**apiPayrollCatalogosTipojornadaGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostipojornadaget) | **GET** /api/payroll/catalogos/tipojornada | Consultar catalogo de Tipo jornada
[**apiPayrollCatalogosTipopagoGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostipopagoget) | **GET** /api/payroll/catalogos/tipopago | Consultar catalogo de Tipo pago
[**apiPayrollCatalogosTiporegimenGet**](CatalogosCatalogosNominaApi.md#apipayrollcatalogostiporegimenget) | **GET** /api/payroll/catalogos/tiporegimen | Consultar catalogo de Tipo regimen

# **apiPayrollCatalogosBancosGet**
> apiPayrollCatalogosBancosGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de bancos

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosBancosGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosBancosGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosEstadosGet**
> apiPayrollCatalogosEstadosGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de estados

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosEstadosGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosEstadosGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosMetodopagoGet**
> apiPayrollCatalogosMetodopagoGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Metodo pago nomina

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosMetodopagoGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosMetodopagoGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosOrigenrecursoGet**
> apiPayrollCatalogosOrigenrecursoGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Origen Recurso

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosOrigenrecursoGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosOrigenrecursoGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosRiesgoGet**
> apiPayrollCatalogosRiesgoGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Riesgo

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosRiesgoGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosRiesgoGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTipocontratoGet**
> apiPayrollCatalogosTipocontratoGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo contrato

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTipocontratoGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTipocontratoGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTipodeduccionGet**
> apiPayrollCatalogosTipodeduccionGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo deduccion

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTipodeduccionGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTipodeduccionGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTipohorasGet**
> apiPayrollCatalogosTipohorasGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo horas

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTipohorasGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTipohorasGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTipoincapacidadGet**
> apiPayrollCatalogosTipoincapacidadGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo incapacidad

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTipoincapacidadGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTipoincapacidadGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTipojornadaGet**
> apiPayrollCatalogosTipojornadaGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo jornada

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTipojornadaGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTipojornadaGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTipopagoGet**
> apiPayrollCatalogosTipopagoGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo pago

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTipopagoGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTipopagoGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiPayrollCatalogosTiporegimenGet**
> apiPayrollCatalogosTiporegimenGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar catalogo de Tipo regimen

Método para consultar los catálogos de uso de CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\CatalogosCatalogosNominaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiPayrollCatalogosTiporegimenGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling CatalogosCatalogosNominaApi->apiPayrollCatalogosTiporegimenGet: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

