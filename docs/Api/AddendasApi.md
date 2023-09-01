# FacturaCom\FacturaComSdk\AddendasApi

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV3AddendaBaswareStorePost**](AddendasApi.md#apiv3addendabaswarestorepost) | **POST** /api/v3/addenda/basware/store | Basware
[**apiV3AddendaCalsonickanseiStorePost**](AddendasApi.md#apiv3addendacalsonickanseistorepost) | **POST** /api/v3/addenda/calsonickansei/store | Calsonic Kansei
[**apiV3AddendaCenaceStorePost**](AddendasApi.md#apiv3addendacenacestorepost) | **POST** /api/v3/addenda/cenace/store | CENACE
[**apiV3AddendaCityfreskoStorePost**](AddendasApi.md#apiv3addendacityfreskostorepost) | **POST** /api/v3/addenda/cityfresko/store | City Fresko
[**apiV3AddendaCostcoStorePost**](AddendasApi.md#apiv3addendacostcostorepost) | **POST** /api/v3/addenda/costco/store | Costco
[**apiV3AddendaKvStorePost**](AddendasApi.md#apiv3addendakvstorepost) | **POST** /api/v3/addenda/kv/store | Kuehne + Nagel
[**apiV3AddendaLesaffreStorePost**](AddendasApi.md#apiv3addendalesaffrestorepost) | **POST** /api/v3/addenda/lesaffre/store | Lesaffre
[**apiV3AddendaMabeStorePost**](AddendasApi.md#apiv3addendamabestorepost) | **POST** /api/v3/addenda/mabe/store | Mabe
[**apiV3AddendaNortechStorePost**](AddendasApi.md#apiv3addendanortechstorepost) | **POST** /api/v3/addenda/nortech/store | Nortech
[**apiV3AddendaPepsicoStorePost**](AddendasApi.md#apiv3addendapepsicostorepost) | **POST** /api/v3/addenda/pepsico/store | Pepsico
[**apiV3AddendaSorianaStorePost**](AddendasApi.md#apiv3addendasorianastorepost) | **POST** /api/v3/addenda/soriana/store | Soriana
[**apiV3AddendaSorianasimpStorePost**](AddendasApi.md#apiv3addendasorianasimpstorepost) | **POST** /api/v3/addenda/sorianasimp/store | Soriana Simplificada
[**apiV3AddendaWhirlpoolStorePost**](AddendasApi.md#apiv3addendawhirlpoolstorepost) | **POST** /api/v3/addenda/whirlpool/store | Whirlpool
[**apiV4Cfdi40CreatePost**](AddendasApi.md#apiv4cfdi40createpost) | **POST** /api/v4/cfdi40/create | Walmart

# **apiV3AddendaBaswareStorePost**
> apiV3AddendaBaswareStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Basware

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaBaswareStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaBaswareStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaCalsonickanseiStorePost**
> apiV3AddendaCalsonickanseiStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Calsonic Kansei

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada esta addenda es importante tomar en cuenta que la addenda se añade al mismo tiempo que creamos nuestro CFDI por lo que en la petición incluiremos el cuerpo del CFDI mas la sección \"**AddendaWalmart\"**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaCalsonickanseiStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaCalsonickanseiStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaCenaceStorePost**
> apiV3AddendaCenaceStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

CENACE

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada esta addenda es importante tomar en cuenta que la addenda se añade al mismo tiempo que creamos nuestro CFDI por lo que en la petición incluiremos el cuerpo del CFDI mas la sección \"**AddendaWalmart\"**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaCenaceStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaCenaceStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaCityfreskoStorePost**
> apiV3AddendaCityfreskoStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

City Fresko

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaCityfreskoStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaCityfreskoStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaCostcoStorePost**
> apiV3AddendaCostcoStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Costco

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaCostcoStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaCostcoStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaKvStorePost**
> apiV3AddendaKvStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Kuehne + Nagel

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaKvStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaKvStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaLesaffreStorePost**
> apiV3AddendaLesaffreStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Lesaffre

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada esta addenda es importante tomar en cuenta que la addenda se añade al mismo tiempo que creamos nuestro CFDI por lo que en la petición incluiremos el cuerpo del CFDI mas la sección \"**AddendaWalmart\"**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaLesaffreStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaLesaffreStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaMabeStorePost**
> apiV3AddendaMabeStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Mabe

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaMabeStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaMabeStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaNortechStorePost**
> apiV3AddendaNortechStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Nortech

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada esta addenda es importante tomar en cuenta que la addenda se añade al mismo tiempo que creamos nuestro CFDI por lo que en la petición incluiremos el cuerpo del CFDI mas la sección \"**AddendaWalmart\"**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaNortechStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaNortechStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaPepsicoStorePost**
> apiV3AddendaPepsicoStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Pepsico

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada esta addenda es importante tomar en cuenta que la addenda se añade al mismo tiempo que creamos nuestro CFDI por lo que en la petición incluiremos el cuerpo del CFDI mas la sección \"**AddendaWalmart\"**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaPepsicoStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaPepsicoStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaSorianaStorePost**
> apiV3AddendaSorianaStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Soriana

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaSorianaStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaSorianaStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaSorianasimpStorePost**
> apiV3AddendaSorianasimpStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Soriana Simplificada

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaSorianasimpStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaSorianasimpStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3AddendaWhirlpoolStorePost**
> apiV3AddendaWhirlpoolStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Whirlpool

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada es necesario contar con el CFDI timbrado antes de integrar la addenda ya que como datos importantes en el cuerpo se envía el campo \"**invoice**\" que hace referencia a el UUID o UID del CFDI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV3AddendaWhirlpoolStorePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV3AddendaWhirlpoolStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4Cfdi40CreatePost**
> apiV4Cfdi40CreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Walmart

# Datos sobre esta addenda  ## Requerimientos  Para ser utilizada esta addenda es importante tomar en cuenta que la addenda se añade al mismo tiempo que creamos nuestro CFDI por lo que en la petición incluiremos el cuerpo del CFDI mas la sección \"**AddendaWalmart\"**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\AddendasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4Cfdi40CreatePost($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling AddendasApi->apiV4Cfdi40CreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

