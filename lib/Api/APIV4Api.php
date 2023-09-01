<?php
/**
 * APIV4Api
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
 * APIV4Api Class Doc Comment
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIV4Api
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
     * Operation apiV4Cfdi4061cf901246a82AcuseGet
     *
     * Descargar acuse de cancelacion de CFDI 4.0 XML
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
    public function apiV4Cfdi4061cf901246a82AcuseGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4061cf901246a82AcuseGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4061cf901246a82AcuseGetWithHttpInfo
     *
     * Descargar acuse de cancelacion de CFDI 4.0 XML
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
    public function apiV4Cfdi4061cf901246a82AcuseGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061cf901246a82AcuseGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4061cf901246a82AcuseGetAsync
     *
     * Descargar acuse de cancelacion de CFDI 4.0 XML
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061cf901246a82AcuseGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4061cf901246a82AcuseGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4061cf901246a82AcuseGetAsyncWithHttpInfo
     *
     * Descargar acuse de cancelacion de CFDI 4.0 XML
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061cf901246a82AcuseGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061cf901246a82AcuseGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4061cf901246a82AcuseGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4061cf901246a82AcuseGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/61cf901246a82/acuse';
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
     * Operation apiV4Cfdi4061cf901246a82CancelStatusGet
     *
     * Consultar Estado de Cancelacion CFDI 4.0
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
    public function apiV4Cfdi4061cf901246a82CancelStatusGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4061cf901246a82CancelStatusGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4061cf901246a82CancelStatusGetWithHttpInfo
     *
     * Consultar Estado de Cancelacion CFDI 4.0
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
    public function apiV4Cfdi4061cf901246a82CancelStatusGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061cf901246a82CancelStatusGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4061cf901246a82CancelStatusGetAsync
     *
     * Consultar Estado de Cancelacion CFDI 4.0
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061cf901246a82CancelStatusGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4061cf901246a82CancelStatusGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4061cf901246a82CancelStatusGetAsyncWithHttpInfo
     *
     * Consultar Estado de Cancelacion CFDI 4.0
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061cf901246a82CancelStatusGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061cf901246a82CancelStatusGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4061cf901246a82CancelStatusGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4061cf901246a82CancelStatusGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/61cf901246a82/cancel_status';
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
     * Operation apiV4Cfdi4061d4c2d768a14CancelPost
     *
     * Cancelar CFDI 4.0
     *
     * @param  string $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4Cfdi4061d4c2d768a14CancelPost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4061d4c2d768a14CancelPostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4061d4c2d768a14CancelPostWithHttpInfo
     *
     * Cancelar CFDI 4.0
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4Cfdi4061d4c2d768a14CancelPostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c2d768a14CancelPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4061d4c2d768a14CancelPostAsync
     *
     * Cancelar CFDI 4.0
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c2d768a14CancelPostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4061d4c2d768a14CancelPostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4061d4c2d768a14CancelPostAsyncWithHttpInfo
     *
     * Cancelar CFDI 4.0
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c2d768a14CancelPostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c2d768a14CancelPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4061d4c2d768a14CancelPost'
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4061d4c2d768a14CancelPostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/61d4c2d768a14/cancel';
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
                ['*/*']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8EmailGet
     *
     * Enviar CFDI 4.0
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
    public function apiV4Cfdi4061d4c3fe77dd8EmailGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4061d4c3fe77dd8EmailGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8EmailGetWithHttpInfo
     *
     * Enviar CFDI 4.0
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
    public function apiV4Cfdi4061d4c3fe77dd8EmailGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c3fe77dd8EmailGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4061d4c3fe77dd8EmailGetAsync
     *
     * Enviar CFDI 4.0
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c3fe77dd8EmailGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4061d4c3fe77dd8EmailGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8EmailGetAsyncWithHttpInfo
     *
     * Enviar CFDI 4.0
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c3fe77dd8EmailGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c3fe77dd8EmailGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4061d4c3fe77dd8EmailGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4061d4c3fe77dd8EmailGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/61d4c3fe77dd8/email';
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
     * Operation apiV4Cfdi4061d4c3fe77dd8PdfGet
     *
     * Descargar CFDI 4.0 PDF
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
    public function apiV4Cfdi4061d4c3fe77dd8PdfGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4061d4c3fe77dd8PdfGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8PdfGetWithHttpInfo
     *
     * Descargar CFDI 4.0 PDF
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
    public function apiV4Cfdi4061d4c3fe77dd8PdfGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c3fe77dd8PdfGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4061d4c3fe77dd8PdfGetAsync
     *
     * Descargar CFDI 4.0 PDF
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c3fe77dd8PdfGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4061d4c3fe77dd8PdfGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8PdfGetAsyncWithHttpInfo
     *
     * Descargar CFDI 4.0 PDF
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c3fe77dd8PdfGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c3fe77dd8PdfGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4061d4c3fe77dd8PdfGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4061d4c3fe77dd8PdfGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/61d4c3fe77dd8/pdf';
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
     * Operation apiV4Cfdi4061d4c3fe77dd8XmlGet
     *
     * Descargar CFDI 4.0 XML
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
    public function apiV4Cfdi4061d4c3fe77dd8XmlGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4061d4c3fe77dd8XmlGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8XmlGetWithHttpInfo
     *
     * Descargar CFDI 4.0 XML
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
    public function apiV4Cfdi4061d4c3fe77dd8XmlGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c3fe77dd8XmlGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4061d4c3fe77dd8XmlGetAsync
     *
     * Descargar CFDI 4.0 XML
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c3fe77dd8XmlGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4061d4c3fe77dd8XmlGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4061d4c3fe77dd8XmlGetAsyncWithHttpInfo
     *
     * Descargar CFDI 4.0 XML
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4061d4c3fe77dd8XmlGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4061d4c3fe77dd8XmlGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4061d4c3fe77dd8XmlGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4061d4c3fe77dd8XmlGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/61d4c3fe77dd8/xml';
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
     * Operation apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost
     *
     * Timbrar borrador
     *
     * @param  string $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostWithHttpInfo
     *
     * Timbrar borrador
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostAsync
     *
     * Timbrar borrador
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostAsyncWithHttpInfo
     *
     * Timbrar borrador
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPost'
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi4062fbeb2d0fd5fTimbrarborradorPostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/62fbeb2d0fd5f/timbrarborrador';
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
                ['*/*']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV4Cfdi40Create62fbe97d65eeaPost
     *
     * Modificar borrador
     *
     * @param  string $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4Cfdi40Create62fbe97d65eeaPost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Cfdi40Create62fbe97d65eeaPostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Cfdi40Create62fbe97d65eeaPostWithHttpInfo
     *
     * Modificar borrador
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4Cfdi40Create62fbe97d65eeaPostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi40Create62fbe97d65eeaPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Cfdi40Create62fbe97d65eeaPostAsync
     *
     * Modificar borrador
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi40Create62fbe97d65eeaPostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Cfdi40Create62fbe97d65eeaPostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Cfdi40Create62fbe97d65eeaPostAsyncWithHttpInfo
     *
     * Modificar borrador
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Cfdi40Create62fbe97d65eeaPostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Cfdi40Create62fbe97d65eeaPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Cfdi40Create62fbe97d65eeaPost'
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Cfdi40Create62fbe97d65eeaPostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi40/create/62fbe97d65eea';
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
                ['*/*']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV4CfdiFolioCop93Get
     *
     * Buscar CFDI por folio
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
    public function apiV4CfdiFolioCop93Get($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4CfdiFolioCop93GetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4CfdiFolioCop93GetWithHttpInfo
     *
     * Buscar CFDI por folio
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
    public function apiV4CfdiFolioCop93GetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiFolioCop93GetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4CfdiFolioCop93GetAsync
     *
     * Buscar CFDI por folio
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiFolioCop93GetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4CfdiFolioCop93GetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4CfdiFolioCop93GetAsyncWithHttpInfo
     *
     * Buscar CFDI por folio
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiFolioCop93GetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiFolioCop93GetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4CfdiFolioCop93Get'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4CfdiFolioCop93GetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi/folio/cop93';
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
     * Operation apiV4CfdiListGet
     *
     * Listar CFDIs
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
    public function apiV4CfdiListGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4CfdiListGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4CfdiListGetWithHttpInfo
     *
     * Listar CFDIs
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
    public function apiV4CfdiListGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiListGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4CfdiListGetAsync
     *
     * Listar CFDIs
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiListGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4CfdiListGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4CfdiListGetAsyncWithHttpInfo
     *
     * Listar CFDIs
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiListGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiListGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4CfdiListGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4CfdiListGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi/list';
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
     * Operation apiV4CfdiUid632b94a897f8cGet
     *
     * Buscar CFDI por UID
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
    public function apiV4CfdiUid632b94a897f8cGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4CfdiUid632b94a897f8cGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4CfdiUid632b94a897f8cGetWithHttpInfo
     *
     * Buscar CFDI por UID
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
    public function apiV4CfdiUid632b94a897f8cGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiUid632b94a897f8cGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4CfdiUid632b94a897f8cGetAsync
     *
     * Buscar CFDI por UID
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiUid632b94a897f8cGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4CfdiUid632b94a897f8cGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4CfdiUid632b94a897f8cGetAsyncWithHttpInfo
     *
     * Buscar CFDI por UID
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiUid632b94a897f8cGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiUid632b94a897f8cGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4CfdiUid632b94a897f8cGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4CfdiUid632b94a897f8cGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi/uid/632b94a897f8c';
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
     * Operation apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get
     *
     * Buscar CFDI por UUID
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
    public function apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetWithHttpInfo
     *
     * Buscar CFDI por UUID
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
    public function apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetAsync
     *
     * Buscar CFDI por UUID
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetAsyncWithHttpInfo
     *
     * Buscar CFDI por UUID
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4CfdiUuid1a7cf8f934064024902884266cab1f13Get'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4CfdiUuid1a7cf8f934064024902884266cab1f13GetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/cfdi/uuid/1a7cf8f9-3406-4024-9028-84266cab1f13';
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
     * Operation apiV4Drafts6245dde60cc1eDropPost
     *
     * Eliminar borradores de CFDI
     *
     * @param  string $body body (optional)
     * @param  string $content_type content_type (optional)
     * @param  string $f_plugin f_plugin (optional)
     * @param  string $f_api_key f_api_key (optional)
     * @param  string $f_secret_key f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV4Drafts6245dde60cc1eDropPost($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Drafts6245dde60cc1eDropPostWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Drafts6245dde60cc1eDropPostWithHttpInfo
     *
     * Eliminar borradores de CFDI
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \FacturaCom\FacturaComSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV4Drafts6245dde60cc1eDropPostWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Drafts6245dde60cc1eDropPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Drafts6245dde60cc1eDropPostAsync
     *
     * Eliminar borradores de CFDI
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Drafts6245dde60cc1eDropPostAsync($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Drafts6245dde60cc1eDropPostAsyncWithHttpInfo($body, $content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Drafts6245dde60cc1eDropPostAsyncWithHttpInfo
     *
     * Eliminar borradores de CFDI
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Drafts6245dde60cc1eDropPostAsyncWithHttpInfo($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Drafts6245dde60cc1eDropPostRequest($body, $content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Drafts6245dde60cc1eDropPost'
     *
     * @param  string $body (optional)
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Drafts6245dde60cc1eDropPostRequest($body = null, $content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/drafts/6245dde60cc1e/drop';
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
                ['*/*']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV4Drafts6245dde60cc1eGet
     *
     * Consultar borrador por UID
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
    public function apiV4Drafts6245dde60cc1eGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4Drafts6245dde60cc1eGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4Drafts6245dde60cc1eGetWithHttpInfo
     *
     * Consultar borrador por UID
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
    public function apiV4Drafts6245dde60cc1eGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Drafts6245dde60cc1eGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4Drafts6245dde60cc1eGetAsync
     *
     * Consultar borrador por UID
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Drafts6245dde60cc1eGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4Drafts6245dde60cc1eGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4Drafts6245dde60cc1eGetAsyncWithHttpInfo
     *
     * Consultar borrador por UID
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4Drafts6245dde60cc1eGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4Drafts6245dde60cc1eGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4Drafts6245dde60cc1eGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4Drafts6245dde60cc1eGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/drafts/6245dde60cc1e';
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
     * Operation apiV4DraftsGet
     *
     * Consultar borradores
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
    public function apiV4DraftsGet($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $this->apiV4DraftsGetWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key);
    }

    /**
     * Operation apiV4DraftsGetWithHttpInfo
     *
     * Consultar borradores
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
    public function apiV4DraftsGetWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4DraftsGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Operation apiV4DraftsGetAsync
     *
     * Consultar borradores
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4DraftsGetAsync($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        return $this->apiV4DraftsGetAsyncWithHttpInfo($content_type, $f_plugin, $f_api_key, $f_secret_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV4DraftsGetAsyncWithHttpInfo
     *
     * Consultar borradores
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV4DraftsGetAsyncWithHttpInfo($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {
        $returnType = '';
        $request = $this->apiV4DraftsGetRequest($content_type, $f_plugin, $f_api_key, $f_secret_key);

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
     * Create request for operation 'apiV4DraftsGet'
     *
     * @param  string $content_type (optional)
     * @param  string $f_plugin (optional)
     * @param  string $f_api_key (optional)
     * @param  string $f_secret_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV4DraftsGetRequest($content_type = null, $f_plugin = null, $f_api_key = null, $f_secret_key = null)
    {

        $resourcePath = '/api/v4/drafts';
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
