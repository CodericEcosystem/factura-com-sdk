# FacturaCom\FacturaComSdk\APIV4Api

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV4Cfdi4061cf901246a82AcuseGet**](APIV4Api.md#apiv4cfdi4061cf901246a82acuseget) | **GET** /api/v4/cfdi40/61cf901246a82/acuse | Descargar acuse de cancelacion de CFDI 4.0 XML
[**apiV4Cfdi4061cf901246a82CancelStatusGet**](APIV4Api.md#apiv4cfdi4061cf901246a82cancelstatusget) | **GET** /api/v4/cfdi40/61cf901246a82/cancel_status | Consultar Estado de Cancelacion CFDI 4.0
[**apiV4Cfdi4061d4c2d768a14CancelPost**](APIV4Api.md#apiv4cfdi4061d4c2d768a14cancelpost) | **POST** /api/v4/cfdi40/61d4c2d768a14/cancel | Cancelar CFDI 4.0
[**apiV4Cfdi4061d4c3fe77dd8EmailGet**](APIV4Api.md#apiv4cfdi4061d4c3fe77dd8emailget) | **GET** /api/v4/cfdi40/61d4c3fe77dd8/email | Enviar CFDI 4.0
[**apiV4Cfdi4061d4c3fe77dd8PdfGet**](APIV4Api.md#apiv4cfdi4061d4c3fe77dd8pdfget) | **GET** /api/v4/cfdi40/61d4c3fe77dd8/pdf | Descargar CFDI 4.0 PDF
[**apiV4Cfdi4061d4c3fe77dd8XmlGet**](APIV4Api.md#apiv4cfdi4061d4c3fe77dd8xmlget) | **GET** /api/v4/cfdi40/61d4c3fe77dd8/xml | Descargar CFDI 4.0 XML
[**apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost**](APIV4Api.md#apiv4cfdi4062fbeb2d0fd5ftimbrarborradorpost) | **POST** /api/v4/cfdi40/62fbeb2d0fd5f/timbrarborrador | Timbrar borrador
[**apiV4Cfdi40Create62fbe97d65eeaPost**](APIV4Api.md#apiv4cfdi40create62fbe97d65eeapost) | **POST** /api/v4/cfdi40/create/62fbe97d65eea | Modificar borrador
[**apiV4CfdiFolioCop93Get**](APIV4Api.md#apiv4cfdifoliocop93get) | **GET** /api/v4/cfdi/folio/cop93 | Buscar CFDI por folio
[**apiV4CfdiListGet**](APIV4Api.md#apiv4cfdilistget) | **GET** /api/v4/cfdi/list | Listar CFDIs
[**apiV4CfdiUid632b94a897f8cGet**](APIV4Api.md#apiv4cfdiuid632b94a897f8cget) | **GET** /api/v4/cfdi/uid/632b94a897f8c | Buscar CFDI por UID
[**apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get**](APIV4Api.md#apiv4cfdiuuid1a7cf8f934064024902884266cab1f13get) | **GET** /api/v4/cfdi/uuid/1a7cf8f9-3406-4024-9028-84266cab1f13 | Buscar CFDI por UUID
[**apiV4Drafts6245dde60cc1eDropPost**](APIV4Api.md#apiv4drafts6245dde60cc1edroppost) | **POST** /api/v4/drafts/6245dde60cc1e/drop | Eliminar borradores de CFDI
[**apiV4Drafts6245dde60cc1eGet**](APIV4Api.md#apiv4drafts6245dde60cc1eget) | **GET** /api/v4/drafts/6245dde60cc1e | Consultar borrador por UID
[**apiV4DraftsGet**](APIV4Api.md#apiv4draftsget) | **GET** /api/v4/drafts | Consultar borradores

# **apiV4Cfdi4061cf901246a82AcuseGet**
> apiV4Cfdi4061cf901246a82AcuseGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Descargar acuse de cancelacion de CFDI 4.0 XML

Método para descargar el archivo XML de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4Cfdi4061cf901246a82AcuseGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4061cf901246a82AcuseGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4Cfdi4061cf901246a82CancelStatusGet**
> apiV4Cfdi4061cf901246a82CancelStatusGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar Estado de Cancelacion CFDI 4.0

Método para consultar el estado de cancelación de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4Cfdi4061cf901246a82CancelStatusGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4061cf901246a82CancelStatusGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4Cfdi4061d4c2d768a14CancelPost**
> apiV4Cfdi4061d4c2d768a14CancelPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Cancelar CFDI 4.0

Método para cancelar un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4Cfdi4061d4c2d768a14CancelPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4061d4c2d768a14CancelPost: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4Cfdi4061d4c3fe77dd8EmailGet**
> apiV4Cfdi4061d4c3fe77dd8EmailGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Enviar CFDI 4.0

Método para enviar un CFDI por email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4Cfdi4061d4c3fe77dd8EmailGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4061d4c3fe77dd8EmailGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4Cfdi4061d4c3fe77dd8PdfGet**
> apiV4Cfdi4061d4c3fe77dd8PdfGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Descargar CFDI 4.0 PDF

Metodo para descargar el PDF de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4Cfdi4061d4c3fe77dd8PdfGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4061d4c3fe77dd8PdfGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4Cfdi4061d4c3fe77dd8XmlGet**
> apiV4Cfdi4061d4c3fe77dd8XmlGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Descargar CFDI 4.0 XML

Método para descargar el archivo XML de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4Cfdi4061d4c3fe77dd8XmlGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4061d4c3fe77dd8XmlGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost**
> apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Timbrar borrador

Metodo para descargar el PDF de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4Cfdi40Create62fbe97d65eeaPost**
> apiV4Cfdi40Create62fbe97d65eeaPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Modificar borrador

Metodo para descargar el PDF de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4Cfdi40Create62fbe97d65eeaPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Cfdi40Create62fbe97d65eeaPost: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4CfdiFolioCop93Get**
> apiV4CfdiFolioCop93Get($content_type, $f_plugin, $f_api_key, $f_secret_key)

Buscar CFDI por folio

Método que lista todos los CFDIs en nuestra cuenta de factura.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4CfdiFolioCop93Get($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4CfdiFolioCop93Get: ', $e->getMessage(), PHP_EOL;
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

# **apiV4CfdiListGet**
> apiV4CfdiListGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Listar CFDIs

Método que lista todos los CFDIs en nuestra cuenta de factura.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4CfdiListGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4CfdiListGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4CfdiUid632b94a897f8cGet**
> apiV4CfdiUid632b94a897f8cGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Buscar CFDI por UID

Método que lista todos los CFDIs en nuestra cuenta de factura.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4CfdiUid632b94a897f8cGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4CfdiUid632b94a897f8cGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get**
> apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get($content_type, $f_plugin, $f_api_key, $f_secret_key)

Buscar CFDI por UUID

Método que lista todos los CFDIs en nuestra cuenta de factura.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get: ', $e->getMessage(), PHP_EOL;
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

# **apiV4Drafts6245dde60cc1eDropPost**
> apiV4Drafts6245dde60cc1eDropPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Eliminar borradores de CFDI

Metodo para descargar el PDF de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4Drafts6245dde60cc1eDropPost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Drafts6245dde60cc1eDropPost: ', $e->getMessage(), PHP_EOL;
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

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4Drafts6245dde60cc1eGet**
> apiV4Drafts6245dde60cc1eGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar borrador por UID

Metodo para descargar el PDF de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4Drafts6245dde60cc1eGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4Drafts6245dde60cc1eGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4DraftsGet**
> apiV4DraftsGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar borradores

Metodo para descargar el PDF de un CFDI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: apikeyAuth
$config = FacturaCom\FacturaComSdk\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FacturaCom\FacturaComSdk\Api\APIV4Api(
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
    $apiInstance->apiV4DraftsGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling APIV4Api->apiV4DraftsGet: ', $e->getMessage(), PHP_EOL;
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

