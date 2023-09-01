<?php
/**
 * CatalogosCatalogosSATApi
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
 * CatalogosCatalogosSATApi Class Doc Comment
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogosCatalogosSATApi
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
     * Operation apiV3CatalogoAduanaGet
     *
     * Consultar catalogo de aduana
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
    public function apiV3CatalogoAduanaGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoAduanaGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoAduanaGetWithHttpInfo
     *
     * Consultar catalogo de aduana
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
    public function apiV3CatalogoAduanaGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoAduanaGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoAduanaGetAsync
     *
     * Consultar catalogo de aduana
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoAduanaGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoAduanaGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoAduanaGetAsyncWithHttpInfo
     *
     * Consultar catalogo de aduana
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoAduanaGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoAduanaGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoAduanaGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoAduanaGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/Aduana';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoClaveUnidadGet
     *
     * Consultar catalogo de unidad de medida
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
    public function apiV3CatalogoClaveUnidadGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoClaveUnidadGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoClaveUnidadGetWithHttpInfo
     *
     * Consultar catalogo de unidad de medida
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
    public function apiV3CatalogoClaveUnidadGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoClaveUnidadGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoClaveUnidadGetAsync
     *
     * Consultar catalogo de unidad de medida
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoClaveUnidadGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoClaveUnidadGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoClaveUnidadGetAsyncWithHttpInfo
     *
     * Consultar catalogo de unidad de medida
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoClaveUnidadGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoClaveUnidadGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoClaveUnidadGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoClaveUnidadGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/ClaveUnidad';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoFormaPagoGet
     *
     * Consultar catalogo de forma de pago
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
    public function apiV3CatalogoFormaPagoGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoFormaPagoGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoFormaPagoGetWithHttpInfo
     *
     * Consultar catalogo de forma de pago
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
    public function apiV3CatalogoFormaPagoGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoFormaPagoGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoFormaPagoGetAsync
     *
     * Consultar catalogo de forma de pago
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoFormaPagoGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoFormaPagoGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoFormaPagoGetAsyncWithHttpInfo
     *
     * Consultar catalogo de forma de pago
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoFormaPagoGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoFormaPagoGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoFormaPagoGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoFormaPagoGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/FormaPago';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoImpuestoGet
     *
     * Consultar catalogo de impuestos
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
    public function apiV3CatalogoImpuestoGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoImpuestoGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoImpuestoGetWithHttpInfo
     *
     * Consultar catalogo de impuestos
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
    public function apiV3CatalogoImpuestoGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoImpuestoGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoImpuestoGetAsync
     *
     * Consultar catalogo de impuestos
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoImpuestoGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoImpuestoGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoImpuestoGetAsyncWithHttpInfo
     *
     * Consultar catalogo de impuestos
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoImpuestoGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoImpuestoGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoImpuestoGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoImpuestoGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/Impuesto';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoMetodoPagoGet
     *
     * Consultar catalogo de metodos de pago
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
    public function apiV3CatalogoMetodoPagoGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoMetodoPagoGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoMetodoPagoGetWithHttpInfo
     *
     * Consultar catalogo de metodos de pago
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
    public function apiV3CatalogoMetodoPagoGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoMetodoPagoGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoMetodoPagoGetAsync
     *
     * Consultar catalogo de metodos de pago
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoMetodoPagoGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoMetodoPagoGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoMetodoPagoGetAsyncWithHttpInfo
     *
     * Consultar catalogo de metodos de pago
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoMetodoPagoGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoMetodoPagoGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoMetodoPagoGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoMetodoPagoGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/MetodoPago';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoMonedaGet
     *
     * Consultar catalogo de monedas
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
    public function apiV3CatalogoMonedaGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoMonedaGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoMonedaGetWithHttpInfo
     *
     * Consultar catalogo de monedas
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
    public function apiV3CatalogoMonedaGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoMonedaGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoMonedaGetAsync
     *
     * Consultar catalogo de monedas
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoMonedaGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoMonedaGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoMonedaGetAsyncWithHttpInfo
     *
     * Consultar catalogo de monedas
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoMonedaGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoMonedaGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoMonedaGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoMonedaGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/Moneda';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoPaisGet
     *
     * Consultar catalogo de pais
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
    public function apiV3CatalogoPaisGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoPaisGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoPaisGetWithHttpInfo
     *
     * Consultar catalogo de pais
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
    public function apiV3CatalogoPaisGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoPaisGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoPaisGetAsync
     *
     * Consultar catalogo de pais
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoPaisGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoPaisGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoPaisGetAsyncWithHttpInfo
     *
     * Consultar catalogo de pais
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoPaisGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoPaisGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoPaisGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoPaisGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/Pais';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoRegimenFiscalGet
     *
     * Consultar catalogo de regimen fiscal
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
    public function apiV3CatalogoRegimenFiscalGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoRegimenFiscalGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoRegimenFiscalGetWithHttpInfo
     *
     * Consultar catalogo de regimen fiscal
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
    public function apiV3CatalogoRegimenFiscalGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoRegimenFiscalGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoRegimenFiscalGetAsync
     *
     * Consultar catalogo de regimen fiscal
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoRegimenFiscalGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoRegimenFiscalGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoRegimenFiscalGetAsyncWithHttpInfo
     *
     * Consultar catalogo de regimen fiscal
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoRegimenFiscalGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoRegimenFiscalGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoRegimenFiscalGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoRegimenFiscalGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/RegimenFiscal';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoRelacionGet
     *
     * Consultar catalogo de tipo de relacion
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
    public function apiV3CatalogoRelacionGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoRelacionGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoRelacionGetWithHttpInfo
     *
     * Consultar catalogo de tipo de relacion
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
    public function apiV3CatalogoRelacionGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoRelacionGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoRelacionGetAsync
     *
     * Consultar catalogo de tipo de relacion
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoRelacionGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoRelacionGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoRelacionGetAsyncWithHttpInfo
     *
     * Consultar catalogo de tipo de relacion
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoRelacionGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoRelacionGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoRelacionGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoRelacionGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/Relacion';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation apiV3CatalogoUsoCfdiGet
     *
     * Consultar catalogo de clave producto servicio
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
    public function apiV3CatalogoUsoCfdiGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3CatalogoUsoCfdiGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3CatalogoUsoCfdiGetWithHttpInfo
     *
     * Consultar catalogo de clave producto servicio
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
    public function apiV3CatalogoUsoCfdiGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoUsoCfdiGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3CatalogoUsoCfdiGetAsync
     *
     * Consultar catalogo de clave producto servicio
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoUsoCfdiGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3CatalogoUsoCfdiGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3CatalogoUsoCfdiGetAsyncWithHttpInfo
     *
     * Consultar catalogo de clave producto servicio
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3CatalogoUsoCfdiGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3CatalogoUsoCfdiGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3CatalogoUsoCfdiGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3CatalogoUsoCfdiGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/catalogo/UsoCfdi';
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
