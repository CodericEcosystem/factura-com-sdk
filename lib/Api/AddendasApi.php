<?php
/**
 * AddendasApi
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
 * AddendasApi Class Doc Comment
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddendasApi
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
     * Operation apiV3AddendaBaswareStorePost
     *
     * Basware
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaBaswareStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaBaswareStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaBaswareStorePostWithHttpInfo
     *
     * Basware
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaBaswareStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaBaswareStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaBaswareStorePostAsync
     *
     * Basware
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaBaswareStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaBaswareStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaBaswareStorePostAsyncWithHttpInfo
     *
     * Basware
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaBaswareStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaBaswareStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaBaswareStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaBaswareStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/basware/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaCalsonickanseiStorePost
     *
     * Calsonic Kansei
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaCalsonickanseiStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaCalsonickanseiStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaCalsonickanseiStorePostWithHttpInfo
     *
     * Calsonic Kansei
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaCalsonickanseiStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCalsonickanseiStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaCalsonickanseiStorePostAsync
     *
     * Calsonic Kansei
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCalsonickanseiStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaCalsonickanseiStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaCalsonickanseiStorePostAsyncWithHttpInfo
     *
     * Calsonic Kansei
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCalsonickanseiStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCalsonickanseiStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaCalsonickanseiStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaCalsonickanseiStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/calsonickansei/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaCenaceStorePost
     *
     * CENACE
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaCenaceStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaCenaceStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaCenaceStorePostWithHttpInfo
     *
     * CENACE
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaCenaceStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCenaceStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaCenaceStorePostAsync
     *
     * CENACE
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCenaceStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaCenaceStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaCenaceStorePostAsyncWithHttpInfo
     *
     * CENACE
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCenaceStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCenaceStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaCenaceStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaCenaceStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/cenace/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaCityfreskoStorePost
     *
     * City Fresko
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaCityfreskoStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaCityfreskoStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaCityfreskoStorePostWithHttpInfo
     *
     * City Fresko
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaCityfreskoStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCityfreskoStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaCityfreskoStorePostAsync
     *
     * City Fresko
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCityfreskoStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaCityfreskoStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaCityfreskoStorePostAsyncWithHttpInfo
     *
     * City Fresko
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCityfreskoStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCityfreskoStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaCityfreskoStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaCityfreskoStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/cityfresko/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaCostcoStorePost
     *
     * Costco
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaCostcoStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaCostcoStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaCostcoStorePostWithHttpInfo
     *
     * Costco
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaCostcoStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCostcoStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaCostcoStorePostAsync
     *
     * Costco
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCostcoStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaCostcoStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaCostcoStorePostAsyncWithHttpInfo
     *
     * Costco
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaCostcoStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaCostcoStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaCostcoStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaCostcoStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/costco/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaKvStorePost
     *
     * Kuehne + Nagel
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaKvStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaKvStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaKvStorePostWithHttpInfo
     *
     * Kuehne + Nagel
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaKvStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaKvStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaKvStorePostAsync
     *
     * Kuehne + Nagel
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaKvStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaKvStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaKvStorePostAsyncWithHttpInfo
     *
     * Kuehne + Nagel
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaKvStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaKvStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaKvStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaKvStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/kv/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaLesaffreStorePost
     *
     * Lesaffre
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaLesaffreStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaLesaffreStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaLesaffreStorePostWithHttpInfo
     *
     * Lesaffre
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaLesaffreStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaLesaffreStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaLesaffreStorePostAsync
     *
     * Lesaffre
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaLesaffreStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaLesaffreStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaLesaffreStorePostAsyncWithHttpInfo
     *
     * Lesaffre
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaLesaffreStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaLesaffreStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaLesaffreStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaLesaffreStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/lesaffre/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaMabeStorePost
     *
     * Mabe
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaMabeStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaMabeStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaMabeStorePostWithHttpInfo
     *
     * Mabe
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaMabeStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaMabeStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaMabeStorePostAsync
     *
     * Mabe
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaMabeStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaMabeStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaMabeStorePostAsyncWithHttpInfo
     *
     * Mabe
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaMabeStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaMabeStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaMabeStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaMabeStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/mabe/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaNortechStorePost
     *
     * Nortech
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaNortechStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaNortechStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaNortechStorePostWithHttpInfo
     *
     * Nortech
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaNortechStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaNortechStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaNortechStorePostAsync
     *
     * Nortech
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaNortechStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaNortechStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaNortechStorePostAsyncWithHttpInfo
     *
     * Nortech
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaNortechStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaNortechStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaNortechStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaNortechStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/nortech/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaPepsicoStorePost
     *
     * Pepsico
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaPepsicoStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaPepsicoStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaPepsicoStorePostWithHttpInfo
     *
     * Pepsico
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaPepsicoStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaPepsicoStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaPepsicoStorePostAsync
     *
     * Pepsico
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaPepsicoStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaPepsicoStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaPepsicoStorePostAsyncWithHttpInfo
     *
     * Pepsico
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaPepsicoStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaPepsicoStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaPepsicoStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaPepsicoStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/pepsico/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaSorianaStorePost
     *
     * Soriana
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaSorianaStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaSorianaStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaSorianaStorePostWithHttpInfo
     *
     * Soriana
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaSorianaStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaSorianaStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaSorianaStorePostAsync
     *
     * Soriana
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaSorianaStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaSorianaStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaSorianaStorePostAsyncWithHttpInfo
     *
     * Soriana
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaSorianaStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaSorianaStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaSorianaStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaSorianaStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/soriana/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaSorianasimpStorePost
     *
     * Soriana Simplificada
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaSorianasimpStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaSorianasimpStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaSorianasimpStorePostWithHttpInfo
     *
     * Soriana Simplificada
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaSorianasimpStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaSorianasimpStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaSorianasimpStorePostAsync
     *
     * Soriana Simplificada
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaSorianasimpStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaSorianasimpStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaSorianasimpStorePostAsyncWithHttpInfo
     *
     * Soriana Simplificada
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaSorianasimpStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaSorianasimpStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaSorianasimpStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaSorianasimpStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/sorianasimp/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV3AddendaWhirlpoolStorePost
     *
     * Whirlpool
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3AddendaWhirlpoolStorePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV3AddendaWhirlpoolStorePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV3AddendaWhirlpoolStorePostWithHttpInfo
     *
     * Whirlpool
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3AddendaWhirlpoolStorePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaWhirlpoolStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV3AddendaWhirlpoolStorePostAsync
     *
     * Whirlpool
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaWhirlpoolStorePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV3AddendaWhirlpoolStorePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3AddendaWhirlpoolStorePostAsyncWithHttpInfo
     *
     * Whirlpool
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3AddendaWhirlpoolStorePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV3AddendaWhirlpoolStorePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV3AddendaWhirlpoolStorePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3AddendaWhirlpoolStorePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v3/addenda/whirlpool/store';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
     * Operation apiV4Cfdi40CreatePost
     *
     * Walmart
     *
     * @param  object $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4Cfdi40CreatePost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi40CreatePostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi40CreatePostWithHttpInfo
     *
     * Walmart
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4Cfdi40CreatePostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi40CreatePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi40CreatePostAsync
     *
     * Walmart
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi40CreatePostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi40CreatePostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi40CreatePostAsyncWithHttpInfo
     *
     * Walmart
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi40CreatePostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi40CreatePostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi40CreatePost'
     *
     * @param  object $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi40CreatePostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/create';
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
