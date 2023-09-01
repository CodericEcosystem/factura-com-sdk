# FacturaCom\FacturaComSdk\EmpresaApi

All URIs are relative to *https://sandbox.factura.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1AccountUidEmpresaGet**](EmpresaApi.md#apiv1accountuidempresaget) | **GET** /api/v1/account/{uid_empresa} | Consultar detalles de empresas adicionales
[**apiV1CurrentAccountGet**](EmpresaApi.md#apiv1currentaccountget) | **GET** /api/v1/current/account | Consultar detalles de empresa actual
[**apiV4AccountCreatePost**](EmpresaApi.md#apiv4accountcreatepost) | **POST** /api/v4/account/create | Actualizar empresa
[**apiV4AccountUidEmpresaDeletePost**](EmpresaApi.md#apiv4accountuidempresadeletepost) | **POST** /api/v4/account/{uid_empresa}/delete | Eliminar Empresa

# **apiV1AccountUidEmpresaGet**
> apiV1AccountUidEmpresaGet($uid_empresa, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar detalles de empresas adicionales

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\EmpresaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid_empresa = "uid_empresa_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV1AccountUidEmpresaGet($uid_empresa, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->apiV1AccountUidEmpresaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid_empresa** | **string**|  |
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

# **apiV1CurrentAccountGet**
> apiV1CurrentAccountGet($content_type, $f_plugin, $f_api_key, $f_secret_key)

Consultar detalles de empresa actual

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\EmpresaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV1CurrentAccountGet($content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->apiV1CurrentAccountGet: ', $e->getMessage(), PHP_EOL;
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

# **apiV4AccountCreatePost**
> apiV4AccountCreatePost($razons, $rfc, $codpos, $calle, $numero_exterior, $numero_interior, $colonia, $estado, $ciudad, $delegacion, $email, $regimen, $mailtomyconta, $mail_conta, $mailtomyself, $regimen_nomina, $cant_folios_min, $smtp, $smtp_email, $smtp_password, $smtp_port, $smtp_host, $smtp_encryption, $telefono, $curp, $logo, $password, $cer, $key, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Actualizar empresa

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\EmpresaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$razons = "razons_example"; // string | 
$rfc = "rfc_example"; // string | 
$codpos = 56; // int | 
$calle = "calle_example"; // string | 
$numero_exterior = 56; // int | 
$numero_interior = 56; // int | 
$colonia = "colonia_example"; // string | 
$estado = "estado_example"; // string | 
$ciudad = "ciudad_example"; // string | 
$delegacion = "delegacion_example"; // string | 
$email = "email_example"; // string | 
$regimen = 56; // int | 
$mailtomyconta = 56; // int | 
$mail_conta = "mail_conta_example"; // string | 
$mailtomyself = 56; // int | 
$regimen_nomina = 56; // int | 
$cant_folios_min = 56; // int | 
$smtp = 56; // int | 
$smtp_email = "smtp_email_example"; // string | 
$smtp_password = "smtp_password_example"; // string | 
$smtp_port = 56; // int | 
$smtp_host = "smtp_host_example"; // string | 
$smtp_encryption = "smtp_encryption_example"; // string | 
$telefono = 56; // int | 
$curp = "curp_example"; // string | 
$logo = "logo_example"; // string | 
$password = "password_example"; // string | 
$cer = "cer_example"; // string | 
$key = "key_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4AccountCreatePost($razons, $rfc, $codpos, $calle, $numero_exterior, $numero_interior, $colonia, $estado, $ciudad, $delegacion, $email, $regimen, $mailtomyconta, $mail_conta, $mailtomyself, $regimen_nomina, $cant_folios_min, $smtp, $smtp_email, $smtp_password, $smtp_port, $smtp_host, $smtp_encryption, $telefono, $curp, $logo, $password, $cer, $key, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->apiV4AccountCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **razons** | **string**|  | [optional]
 **rfc** | **string**|  | [optional]
 **codpos** | **int**|  | [optional]
 **calle** | **string**|  | [optional]
 **numero_exterior** | **int**|  | [optional]
 **numero_interior** | **int**|  | [optional]
 **colonia** | **string**|  | [optional]
 **estado** | **string**|  | [optional]
 **ciudad** | **string**|  | [optional]
 **delegacion** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **regimen** | **int**|  | [optional]
 **mailtomyconta** | **int**|  | [optional]
 **mail_conta** | **string**|  | [optional]
 **mailtomyself** | **int**|  | [optional]
 **regimen_nomina** | **int**|  | [optional]
 **cant_folios_min** | **int**|  | [optional]
 **smtp** | **int**|  | [optional]
 **smtp_email** | **string**|  | [optional]
 **smtp_password** | **string**|  | [optional]
 **smtp_port** | **int**|  | [optional]
 **smtp_host** | **string**|  | [optional]
 **smtp_encryption** | **string**|  | [optional]
 **telefono** | **int**|  | [optional]
 **curp** | **string**|  | [optional]
 **logo** | **string****string**|  | [optional]
 **password** | **string**|  | [optional]
 **cer** | **string****string**|  | [optional]
 **key** | **string****string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV4AccountUidEmpresaDeletePost**
> apiV4AccountUidEmpresaDeletePost($uid_empresa, $_method, $content_type, $f_plugin, $f_api_key, $f_secret_key)

Eliminar Empresa

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FacturaCom\FacturaComSdk\Api\EmpresaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid_empresa = "uid_empresa_example"; // string | 
$_method = "_method_example"; // string | 
$content_type = "content_type_example"; // string | 
$f_plugin = "f_plugin_example"; // string | 
$f_api_key = "f_api_key_example"; // string | 
$f_secret_key = "f_secret_key_example"; // string | 

try {
    $apiInstance->apiV4AccountUidEmpresaDeletePost($uid_empresa, $_method, $content_type, $f_plugin, $f_api_key, $f_secret_key);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->apiV4AccountUidEmpresaDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid_empresa** | **string**|  |
 **_method** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **f_plugin** | **string**|  | [optional]
 **f_api_key** | **string**|  | [optional]
 **f_secret_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

