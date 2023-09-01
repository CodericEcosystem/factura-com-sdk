<?php
/**
 * EmpresaApi
 * PHP version 5
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Factura.com Workspace Publico
 *
 * # Introducción  Te invitamos a utilizar la [documentación de nuestra API](). Es un   recurso completo y fácil de entender que te guiará en el uso de nuestras   funcionalidades. Si tienes alguna pregunta, nuestro equipo de soporte   técnico está disponible para ayudarte.  Aprovecha las ventajas de nuestra API para automatizar tus procesos de facturación y agilizar tus operaciones comerciales.  ¡Explora nuestra documentación de API y descubre todo lo que Factura.com puede hacer por ti!  Atentamente, El equipo de Factura.com  ---  # Autenticación de API  El API de factura.com utiliza autenticación básica la cual requiere los siguientes datos de acceso:  - \\[API_KEY\\] - \\[SECRET_KEY\\]       La autenticación del API requiere incluir en el header los datos de autorización junto a el **F-PLUGIN** cuyo valor siempre será: **9d4095c8f7ed5785cb14c0e3b033eeb8252416ed**  Los métodos disponibles en el workspace ya cuentan con un header de ejemplo en donde contienen los datos antes mencionados, en el entorno existen dos variables en donde podemos ingresar nuestras llaves para usarlas de forma mas sencilla estas variables se encuentran en:  - Factura.com Workspace Publico **→** Variables       Solo sustituye el texto **Tu API key** y **Tu Secret key** por los valores correspondientes  # Genera tu API Key  Puedes usar el API de factura.com en dos modos, sandbox y producción. El API Key y el Secret Key son diferentes para cada modo.  Para obtener tus llaves de acceso deber seguir los siguientes pasos:  - Iniciar sesión (Si es en producción en [https://factura.com/](), si es en sandbox en [http://sandbox.factura.com/]() ). - En el menú lateral dirígete a Configuraciones - API - Datos de acceso . - Haz clic en el botón que se encuentra junto a cada token de acceso para copiarlo.       # Errores  Todas las peticiones exitosas regresan un código de estatus HTTP 204. En caso de un error, el API regresa un JSON con los parámetros que contienen la razón del error.  La documentación completa y explicación de los métodos la puedes encontrar en nuestra documentación para developers en:  [Documentación API factura.com]()  # Construcción de la URL  A continuación se explica la estructura básica de como están compuestos los siguientes métodos para operaciones de CFDI  **Host**: [https://api.factura.com/]() (producción) / [http://sandbox.factura.com/api/]() (sandbox)   **Endpoint**: /v4/cfdi/list  **Ejemplo**: [https://api.factura.com/v4/cfdi/list]()  ## Ejemplo:  ``` php $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, \"http://sandbox.factura.com/api/v4/cfdi/list\"); curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); curl_setopt($ch, CURLOPT_HEADER, FALSE); curl_setopt($ch, CURLOPT_HTTPHEADER, array(     \"Content-Type: application/json\",     \"F-PLUGIN: \" . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',     \"F-Api-Key: \".'Ingresa API KEY',     \"F-Secret-Key: \" .'Ingresa SECRET KEY' )); $response = curl_exec($ch); return die($response); curl_close($ch); ?>   ```  > &lt;h3 &gt;RECUERDA QUE 👀&lt;/h3&gt;     > Para probar el código de ejemplo es necesario que reemplaces el texto **Ingresa API KEY** por el API KEY de tu cuenta, e **Ingresa SECRET KEY** por el SECRET KEY correspondiente.      ## Respuesta:  ## Respuesta exitosa  ``` jason {   \"status\": \"success\",   \"response\": \"success\",   \"total\": 2479,   \"per_page\": 100,   \"current_page\": 1,   \"last_page\": 25,   \"from\": 1,   \"to\": 100,   \"data\": [     {       \"RazonSocialReceptor\": \"Venta Al Público en General\",       \"Folio\": \"F 01\",       \"UID\": \"5c04c662exxxx\",       \"UUID\": \"1750d757-577d-xxxx-xxxx-518b87b24a87\",       \"Subtotal\": \"5.000000\",       \"Descuento\": null,       \"Total\": \"5.800000\",       \"ReferenceClient\": 0,       \"NumOrder\": null,       \"Receptor\": \"XAXX010101000\",       \"FechaTimbrado\": \"2018-12-03\",       \"Status\": \"enviada\",       \"Version\": \"3.3\"     },     {       \"RazonSocialReceptor\": \"Cliente ejemplo\",       \"Folio\": \"F 160\",       \"UID\": \"5c033ca2e4xxx\",       \"UUID\": \"c25c6c99-xxx-xxx-810e-e5ae7e12eb15\",       \"Subtotal\": \"10000.000000\",       \"Descuento\": null,       \"Total\": \"11600.000000\",       \"ReferenceClient\": 15,       \"NumOrder\": null,       \"Receptor\": \"XAXX010101000\",       \"FechaTimbrado\": \"2018-12-01\",       \"Status\": \"enviada\",       \"Version\": \"3.3\"     }   ] }   ```  ## Respuesta erronea  ``` json {   \"status\": \"error\",   \"message\": \"La cuenta que intenta autenticarse no existe\",   \"Data\": \"$2y$10$dnOV7qC7ZrD1CZitpUnTReLKtKPxG29XfwZylrEuiR0KVl18pOXXX\",   \"Secret\": \"$2y$10$6ZN4aX5UExwz6HFlDSZcxOF1TGjHx8f40neE.CrXHHahyAfi8qiXXX\" }   ```  # Métodos disponibles:
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FacturaCom\FacturaComSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FacturaCom\FacturaComSdk\ApiException;
use FacturaCom\FacturaComSdk\Configuration;
use FacturaCom\FacturaComSdk\HeaderSelector;
use FacturaCom\FacturaComSdk\ObjectSerializer;

/**
 * EmpresaApi Class Doc Comment
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmpresaApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV1AccountUidEmpresaGet
     *
     * Consultar detalles de empresas adicionales
     *
     * @param  string $uid_empresa uid_empresa (required)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1AccountUidEmpresaGet($uid_empresa, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV1AccountUidEmpresaGetWithHttpInfo($uid_empresa, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV1AccountUidEmpresaGetWithHttpInfo
     *
     * Consultar detalles de empresas adicionales
     *
     * @param  string $uid_empresa (required)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1AccountUidEmpresaGetWithHttpInfo($uid_empresa, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV1AccountUidEmpresaGetRequest($uid_empresa, $content_type, $f_plugin, $f_api_key, $f_secret_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1AccountUidEmpresaGetAsync
     *
     * Consultar detalles de empresas adicionales
     *
     * @param  string $uid_empresa (required)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1AccountUidEmpresaGetAsync($uid_empresa, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV1AccountUidEmpresaGetAsyncWithHttpInfo($uid_empresa, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1AccountUidEmpresaGetAsyncWithHttpInfo
     *
     * Consultar detalles de empresas adicionales
     *
     * @param  string $uid_empresa (required)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1AccountUidEmpresaGetAsyncWithHttpInfo($uid_empresa, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV1AccountUidEmpresaGetRequest($uid_empresa, $content_type, $f_plugin, $f_api_key, $f_secret_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1AccountUidEmpresaGet'
     *
     * @param  string $uid_empresa (required)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1AccountUidEmpresaGetRequest($uid_empresa, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        // verify the required parameter 'uid_empresa' is set
        if ($uid_empresa === null || (is_array($uid_empresa) && count($uid_empresa) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid_empresa when calling apiV1AccountUidEmpresaGet'
            );
        }

        $resourcePath = '/api/v1/account/{uid_empresa}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($f_plugin !== null) {
            $headerParams['F-PLUGIN'] = ObjectSerializer::toHeaderValue($f_plugin);
        }
        // header params
        if ($f_api_key !== null) {
            $headerParams['F-Api-Key'] = ObjectSerializer::toHeaderValue($f_api_key);
        }
        // header params
        if ($f_secret_key !== null) {
            $headerParams['F-Secret-Key'] = ObjectSerializer::toHeaderValue($f_secret_key);
        }

        // path params
        if ($uid_empresa !== null) {
            $resourcePath = str_replace(
                '{' . 'uid_empresa' . '}',
                ObjectSerializer::toPathValue($uid_empresa),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1CurrentAccountGet
     *
     * Consultar detalles de empresa actual
     *
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1CurrentAccountGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV1CurrentAccountGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV1CurrentAccountGetWithHttpInfo
     *
     * Consultar detalles de empresa actual
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1CurrentAccountGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV1CurrentAccountGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1CurrentAccountGetAsync
     *
     * Consultar detalles de empresa actual
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CurrentAccountGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV1CurrentAccountGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1CurrentAccountGetAsyncWithHttpInfo
     *
     * Consultar detalles de empresa actual
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CurrentAccountGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV1CurrentAccountGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1CurrentAccountGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1CurrentAccountGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v1/current/account';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($f_plugin !== null) {
            $headerParams['F-PLUGIN'] = ObjectSerializer::toHeaderValue($f_plugin);
        }
        // header params
        if ($f_api_key !== null) {
            $headerParams['F-Api-Key'] = ObjectSerializer::toHeaderValue($f_api_key);
        }
        // header params
        if ($f_secret_key !== null) {
            $headerParams['F-Secret-Key'] = ObjectSerializer::toHeaderValue($f_secret_key);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV4AccountCreatePost
     *
     * Actualizar empresa
     *
     * @param  string $razons razons (optional)
     * @param  string $rfc rfc (optional)
     * @param  int $codpos codpos (optional)
     * @param  string $calle calle (optional)
     * @param  int $numero_exterior numero_exterior (optional)
     * @param  int $numero_interior numero_interior (optional)
     * @param  string $colonia colonia (optional)
     * @param  string $estado estado (optional)
     * @param  string $ciudad ciudad (optional)
     * @param  string $delegacion delegacion (optional)
     * @param  string $email email (optional)
     * @param  int $regimen regimen (optional)
     * @param  int $mailtomyconta mailtomyconta (optional)
     * @param  string $mail_conta mail_conta (optional)
     * @param  int $mailtomyself mailtomyself (optional)
     * @param  int $regimen_nomina regimen_nomina (optional)
     * @param  int $cant_folios_min cant_folios_min (optional)
     * @param  int $smtp smtp (optional)
     * @param  string $smtp_email smtp_email (optional)
     * @param  string $smtp_password smtp_password (optional)
     * @param  int $smtp_port smtp_port (optional)
     * @param  string $smtp_host smtp_host (optional)
     * @param  string $smtp_encryption smtp_encryption (optional)
     * @param  int $telefono telefono (optional)
     * @param  string $curp curp (optional)
     * @param  string $logo logo (optional)
     * @param  string $password password (optional)
     * @param  string $cer cer (optional)
     * @param  string $key key (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4AccountCreatePost($razons = null, $rfc = null, $codpos = null, $calle = null, $numero_exterior = null, $numero_interior = null, $colonia = null, $estado = null, $ciudad = null, $delegacion = null, $email = null, $regimen = null, $mailtomyconta = null, $mail_conta = null, $mailtomyself = null, $regimen_nomina = null, $cant_folios_min = null, $smtp = null, $smtp_email = null, $smtp_password = null, $smtp_port = null, $smtp_host = null, $smtp_encryption = null, $telefono = null, $curp = null, $logo = null, $password = null, $cer = null, $key = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4AccountCreatePostWithHttpInfo($razons, $rfc, $codpos, $calle, $numero_exterior, $numero_interior, $colonia, $estado, $ciudad, $delegacion, $email, $regimen, $mailtomyconta, $mail_conta, $mailtomyself, $regimen_nomina, $cant_folios_min, $smtp, $smtp_email, $smtp_password, $smtp_port, $smtp_host, $smtp_encryption, $telefono, $curp, $logo, $password, $cer, $key, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4AccountCreatePostWithHttpInfo
     *
     * Actualizar empresa
     *
     * @param  string $razons (optional)
     * @param  string $rfc (optional)
     * @param  int $codpos (optional)
     * @param  string $calle (optional)
     * @param  int $numero_exterior (optional)
     * @param  int $numero_interior (optional)
     * @param  string $colonia (optional)
     * @param  string $estado (optional)
     * @param  string $ciudad (optional)
     * @param  string $delegacion (optional)
     * @param  string $email (optional)
     * @param  int $regimen (optional)
     * @param  int $mailtomyconta (optional)
     * @param  string $mail_conta (optional)
     * @param  int $mailtomyself (optional)
     * @param  int $regimen_nomina (optional)
     * @param  int $cant_folios_min (optional)
     * @param  int $smtp (optional)
     * @param  string $smtp_email (optional)
     * @param  string $smtp_password (optional)
     * @param  int $smtp_port (optional)
     * @param  string $smtp_host (optional)
     * @param  string $smtp_encryption (optional)
     * @param  int $telefono (optional)
     * @param  string $curp (optional)
     * @param  string $logo (optional)
     * @param  string $password (optional)
     * @param  string $cer (optional)
     * @param  string $key (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4AccountCreatePostWithHttpInfo($razons = null, $rfc = null, $codpos = null, $calle = null, $numero_exterior = null, $numero_interior = null, $colonia = null, $estado = null, $ciudad = null, $delegacion = null, $email = null, $regimen = null, $mailtomyconta = null, $mail_conta = null, $mailtomyself = null, $regimen_nomina = null, $cant_folios_min = null, $smtp = null, $smtp_email = null, $smtp_password = null, $smtp_port = null, $smtp_host = null, $smtp_encryption = null, $telefono = null, $curp = null, $logo = null, $password = null, $cer = null, $key = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4AccountCreatePostRequest($razons, $rfc, $codpos, $calle, $numero_exterior, $numero_interior, $colonia, $estado, $ciudad, $delegacion, $email, $regimen, $mailtomyconta, $mail_conta, $mailtomyself, $regimen_nomina, $cant_folios_min, $smtp, $smtp_email, $smtp_password, $smtp_port, $smtp_host, $smtp_encryption, $telefono, $curp, $logo, $password, $cer, $key, $content_type, $f_plugin, $f_api_key, $f_secret_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV4AccountCreatePostAsync
     *
     * Actualizar empresa
     *
     * @param  string $razons (optional)
     * @param  string $rfc (optional)
     * @param  int $codpos (optional)
     * @param  string $calle (optional)
     * @param  int $numero_exterior (optional)
     * @param  int $numero_interior (optional)
     * @param  string $colonia (optional)
     * @param  string $estado (optional)
     * @param  string $ciudad (optional)
     * @param  string $delegacion (optional)
     * @param  string $email (optional)
     * @param  int $regimen (optional)
     * @param  int $mailtomyconta (optional)
     * @param  string $mail_conta (optional)
     * @param  int $mailtomyself (optional)
     * @param  int $regimen_nomina (optional)
     * @param  int $cant_folios_min (optional)
     * @param  int $smtp (optional)
     * @param  string $smtp_email (optional)
     * @param  string $smtp_password (optional)
     * @param  int $smtp_port (optional)
     * @param  string $smtp_host (optional)
     * @param  string $smtp_encryption (optional)
     * @param  int $telefono (optional)
     * @param  string $curp (optional)
     * @param  string $logo (optional)
     * @param  string $password (optional)
     * @param  string $cer (optional)
     * @param  string $key (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4AccountCreatePostAsync($razons = null, $rfc = null, $codpos = null, $calle = null, $numero_exterior = null, $numero_interior = null, $colonia = null, $estado = null, $ciudad = null, $delegacion = null, $email = null, $regimen = null, $mailtomyconta = null, $mail_conta = null, $mailtomyself = null, $regimen_nomina = null, $cant_folios_min = null, $smtp = null, $smtp_email = null, $smtp_password = null, $smtp_port = null, $smtp_host = null, $smtp_encryption = null, $telefono = null, $curp = null, $logo = null, $password = null, $cer = null, $key = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4AccountCreatePostAsyncWithHttpInfo($razons, $rfc, $codpos, $calle, $numero_exterior, $numero_interior, $colonia, $estado, $ciudad, $delegacion, $email, $regimen, $mailtomyconta, $mail_conta, $mailtomyself, $regimen_nomina, $cant_folios_min, $smtp, $smtp_email, $smtp_password, $smtp_port, $smtp_host, $smtp_encryption, $telefono, $curp, $logo, $password, $cer, $key, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4AccountCreatePostAsyncWithHttpInfo
     *
     * Actualizar empresa
     *
     * @param  string $razons (optional)
     * @param  string $rfc (optional)
     * @param  int $codpos (optional)
     * @param  string $calle (optional)
     * @param  int $numero_exterior (optional)
     * @param  int $numero_interior (optional)
     * @param  string $colonia (optional)
     * @param  string $estado (optional)
     * @param  string $ciudad (optional)
     * @param  string $delegacion (optional)
     * @param  string $email (optional)
     * @param  int $regimen (optional)
     * @param  int $mailtomyconta (optional)
     * @param  string $mail_conta (optional)
     * @param  int $mailtomyself (optional)
     * @param  int $regimen_nomina (optional)
     * @param  int $cant_folios_min (optional)
     * @param  int $smtp (optional)
     * @param  string $smtp_email (optional)
     * @param  string $smtp_password (optional)
     * @param  int $smtp_port (optional)
     * @param  string $smtp_host (optional)
     * @param  string $smtp_encryption (optional)
     * @param  int $telefono (optional)
     * @param  string $curp (optional)
     * @param  string $logo (optional)
     * @param  string $password (optional)
     * @param  string $cer (optional)
     * @param  string $key (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4AccountCreatePostAsyncWithHttpInfo($razons = null, $rfc = null, $codpos = null, $calle = null, $numero_exterior = null, $numero_interior = null, $colonia = null, $estado = null, $ciudad = null, $delegacion = null, $email = null, $regimen = null, $mailtomyconta = null, $mail_conta = null, $mailtomyself = null, $regimen_nomina = null, $cant_folios_min = null, $smtp = null, $smtp_email = null, $smtp_password = null, $smtp_port = null, $smtp_host = null, $smtp_encryption = null, $telefono = null, $curp = null, $logo = null, $password = null, $cer = null, $key = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4AccountCreatePostRequest($razons, $rfc, $codpos, $calle, $numero_exterior, $numero_interior, $colonia, $estado, $ciudad, $delegacion, $email, $regimen, $mailtomyconta, $mail_conta, $mailtomyself, $regimen_nomina, $cant_folios_min, $smtp, $smtp_email, $smtp_password, $smtp_port, $smtp_host, $smtp_encryption, $telefono, $curp, $logo, $password, $cer, $key, $content_type, $f_plugin, $f_api_key, $f_secret_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV4AccountCreatePost'
     *
     * @param  string $razons (optional)
     * @param  string $rfc (optional)
     * @param  int $codpos (optional)
     * @param  string $calle (optional)
     * @param  int $numero_exterior (optional)
     * @param  int $numero_interior (optional)
     * @param  string $colonia (optional)
     * @param  string $estado (optional)
     * @param  string $ciudad (optional)
     * @param  string $delegacion (optional)
     * @param  string $email (optional)
     * @param  int $regimen (optional)
     * @param  int $mailtomyconta (optional)
     * @param  string $mail_conta (optional)
     * @param  int $mailtomyself (optional)
     * @param  int $regimen_nomina (optional)
     * @param  int $cant_folios_min (optional)
     * @param  int $smtp (optional)
     * @param  string $smtp_email (optional)
     * @param  string $smtp_password (optional)
     * @param  int $smtp_port (optional)
     * @param  string $smtp_host (optional)
     * @param  string $smtp_encryption (optional)
     * @param  int $telefono (optional)
     * @param  string $curp (optional)
     * @param  string $logo (optional)
     * @param  string $password (optional)
     * @param  string $cer (optional)
     * @param  string $key (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4AccountCreatePostRequest($razons = null, $rfc = null, $codpos = null, $calle = null, $numero_exterior = null, $numero_interior = null, $colonia = null, $estado = null, $ciudad = null, $delegacion = null, $email = null, $regimen = null, $mailtomyconta = null, $mail_conta = null, $mailtomyself = null, $regimen_nomina = null, $cant_folios_min = null, $smtp = null, $smtp_email = null, $smtp_password = null, $smtp_port = null, $smtp_host = null, $smtp_encryption = null, $telefono = null, $curp = null, $logo = null, $password = null, $cer = null, $key = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/account/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($f_plugin !== null) {
            $headerParams['F-PLUGIN'] = ObjectSerializer::toHeaderValue($f_plugin);
        }
        // header params
        if ($f_api_key !== null) {
            $headerParams['F-Api-Key'] = ObjectSerializer::toHeaderValue($f_api_key);
        }
        // header params
        if ($f_secret_key !== null) {
            $headerParams['F-Secret-Key'] = ObjectSerializer::toHeaderValue($f_secret_key);
        }


        // form params
        if ($razons !== null) {
            $formParams['razons'] = ObjectSerializer::toFormValue($razons);
        }
        // form params
        if ($rfc !== null) {
            $formParams['rfc'] = ObjectSerializer::toFormValue($rfc);
        }
        // form params
        if ($codpos !== null) {
            $formParams['codpos'] = ObjectSerializer::toFormValue($codpos);
        }
        // form params
        if ($calle !== null) {
            $formParams['calle'] = ObjectSerializer::toFormValue($calle);
        }
        // form params
        if ($numero_exterior !== null) {
            $formParams['numero_exterior'] = ObjectSerializer::toFormValue($numero_exterior);
        }
        // form params
        if ($numero_interior !== null) {
            $formParams['numero_interior'] = ObjectSerializer::toFormValue($numero_interior);
        }
        // form params
        if ($colonia !== null) {
            $formParams['colonia'] = ObjectSerializer::toFormValue($colonia);
        }
        // form params
        if ($estado !== null) {
            $formParams['estado'] = ObjectSerializer::toFormValue($estado);
        }
        // form params
        if ($ciudad !== null) {
            $formParams['ciudad'] = ObjectSerializer::toFormValue($ciudad);
        }
        // form params
        if ($delegacion !== null) {
            $formParams['delegacion'] = ObjectSerializer::toFormValue($delegacion);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = ObjectSerializer::toFormValue($email);
        }
        // form params
        if ($regimen !== null) {
            $formParams['regimen'] = ObjectSerializer::toFormValue($regimen);
        }
        // form params
        if ($mailtomyconta !== null) {
            $formParams['mailtomyconta'] = ObjectSerializer::toFormValue($mailtomyconta);
        }
        // form params
        if ($mail_conta !== null) {
            $formParams['mail_conta'] = ObjectSerializer::toFormValue($mail_conta);
        }
        // form params
        if ($mailtomyself !== null) {
            $formParams['mailtomyself'] = ObjectSerializer::toFormValue($mailtomyself);
        }
        // form params
        if ($regimen_nomina !== null) {
            $formParams['regimen_nomina'] = ObjectSerializer::toFormValue($regimen_nomina);
        }
        // form params
        if ($cant_folios_min !== null) {
            $formParams['cant_folios_min'] = ObjectSerializer::toFormValue($cant_folios_min);
        }
        // form params
        if ($smtp !== null) {
            $formParams['smtp'] = ObjectSerializer::toFormValue($smtp);
        }
        // form params
        if ($smtp_email !== null) {
            $formParams['smtp_email'] = ObjectSerializer::toFormValue($smtp_email);
        }
        // form params
        if ($smtp_password !== null) {
            $formParams['smtp_password'] = ObjectSerializer::toFormValue($smtp_password);
        }
        // form params
        if ($smtp_port !== null) {
            $formParams['smtp_port'] = ObjectSerializer::toFormValue($smtp_port);
        }
        // form params
        if ($smtp_host !== null) {
            $formParams['smtp_host'] = ObjectSerializer::toFormValue($smtp_host);
        }
        // form params
        if ($smtp_encryption !== null) {
            $formParams['smtp_encryption'] = ObjectSerializer::toFormValue($smtp_encryption);
        }
        // form params
        if ($telefono !== null) {
            $formParams['telefono'] = ObjectSerializer::toFormValue($telefono);
        }
        // form params
        if ($curp !== null) {
            $formParams['curp'] = ObjectSerializer::toFormValue($curp);
        }
        // form params
        if ($logo !== null) {
            $multipart = true;
            $formParams['logo'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($logo), 'rb');
        }
        // form params
        if ($password !== null) {
            $formParams['password'] = ObjectSerializer::toFormValue($password);
        }
        // form params
        if ($cer !== null) {
            $multipart = true;
            $formParams['cer'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($cer), 'rb');
        }
        // form params
        if ($key !== null) {
            $multipart = true;
            $formParams['key'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($key), 'rb');
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV4AccountUidEmpresaDeletePost
     *
     * Eliminar Empresa
     *
     * @param  string $uid_empresa uid_empresa (required)
     * @param  string $_method _method (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4AccountUidEmpresaDeletePost($uid_empresa, $_method = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4AccountUidEmpresaDeletePostWithHttpInfo($uid_empresa, $_method, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4AccountUidEmpresaDeletePostWithHttpInfo
     *
     * Eliminar Empresa
     *
     * @param  string $uid_empresa (required)
     * @param  string $_method (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4AccountUidEmpresaDeletePostWithHttpInfo($uid_empresa, $_method = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4AccountUidEmpresaDeletePostRequest($uid_empresa, $_method, $content_type, $f_plugin, $f_api_key, $f_secret_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiV4AccountUidEmpresaDeletePostAsync
     *
     * Eliminar Empresa
     *
     * @param  string $uid_empresa (required)
     * @param  string $_method (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4AccountUidEmpresaDeletePostAsync($uid_empresa, $_method = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4AccountUidEmpresaDeletePostAsyncWithHttpInfo($uid_empresa, $_method, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4AccountUidEmpresaDeletePostAsyncWithHttpInfo
     *
     * Eliminar Empresa
     *
     * @param  string $uid_empresa (required)
     * @param  string $_method (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4AccountUidEmpresaDeletePostAsyncWithHttpInfo($uid_empresa, $_method = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4AccountUidEmpresaDeletePostRequest($uid_empresa, $_method, $content_type, $f_plugin, $f_api_key, $f_secret_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV4AccountUidEmpresaDeletePost'
     *
     * @param  string $uid_empresa (required)
     * @param  string $_method (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4AccountUidEmpresaDeletePostRequest($uid_empresa, $_method = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        // verify the required parameter 'uid_empresa' is set
        if ($uid_empresa === null || (is_array($uid_empresa) && count($uid_empresa) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid_empresa when calling apiV4AccountUidEmpresaDeletePost'
            );
        }

        $resourcePath = '/api/v4/account/{uid_empresa}/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($f_plugin !== null) {
            $headerParams['F-PLUGIN'] = ObjectSerializer::toHeaderValue($f_plugin);
        }
        // header params
        if ($f_api_key !== null) {
            $headerParams['F-Api-Key'] = ObjectSerializer::toHeaderValue($f_api_key);
        }
        // header params
        if ($f_secret_key !== null) {
            $headerParams['F-Secret-Key'] = ObjectSerializer::toHeaderValue($f_secret_key);
        }

        // path params
        if ($uid_empresa !== null) {
            $resourcePath = str_replace(
                '{' . 'uid_empresa' . '}',
                ObjectSerializer::toPathValue($uid_empresa),
                $resourcePath
            );
        }

        // form params
        if ($_method !== null) {
            $formParams['_method'] = ObjectSerializer::toFormValue($_method);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
