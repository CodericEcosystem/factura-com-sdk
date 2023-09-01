<?php
/**
 * ObjectSerializer
 *
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

namespace FacturaCom\FacturaComSdk;

/**
 * ObjectSerializer Class Doc Comment
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ObjectSerializer
{
    /**
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the SwaggerType of the data
     * @param string $format the format of the Swagger type of the data
     *
     * @return string|object serialized form of $data
     */
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(\DateTime::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif ($data instanceof \stdClass) {
            foreach ($data as $property => $value) {
                $data->$property = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::swaggerFormats();
            foreach ($data::swaggerTypes() as $property => $swaggerType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null
                    && !in_array($swaggerType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($swaggerType, 'getAllowableEnumValues')
                    && !in_array($value, $swaggerType::getAllowableEnumValues(), true)) {
                    $imploded = implode("', '", $swaggerType::getAllowableEnumValues());
                    throw new \InvalidArgumentException("Invalid value for enum '$swaggerType', must be one of: '$imploded'");
                }
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $swaggerType, $formats[$property]);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        if ($value instanceof \DateTime) { // datetime in ISO8601 format
            return $value->format(\DateTime::ATOM);
        } else {
            return $value;
        }
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv,
     * ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($collectionFormat) {
            case 'pipes':
                return implode('|', $collection);

            case 'tsv':
                return implode("\t", $collection);

            case 'ssv':
                return implode(' ', $collection);

            case 'csv':
                // Deliberate fall through. CSV is default format.
            default:
                return implode(',', $collection);
        }
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data          object or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[] $httpHeaders   HTTP headers
     * @param string   $discriminator discriminator if polymorphism is used
     *
     * @return object|array|null an single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        } elseif (substr($class, 0, 4) === 'map[') { // for associative array e.g. map[string,int]
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($class, -2), '[]') === 0) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        } elseif ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                return new \DateTime($data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        } elseif ($class === '\SplFileObject') {
            /** @var \Psr\Http\Message\StreamInterface $data */

            // determine file name
            if (array_key_exists('Content-Disposition', $httpHeaders) &&
                preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);

            return new \SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '{{invokerPackage}}\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
            $instance = new $class();
            foreach ($instance::swaggerTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }
}
