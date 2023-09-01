<?php
/**
 * AccountCreateBody
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

namespace FacturaCom\FacturaComSdk\Model;

use \ArrayAccess;
use \FacturaCom\FacturaComSdk\ObjectSerializer;

/**
 * AccountCreateBody Class Doc Comment
 *
 * @category Class
 * @package  FacturaCom\FacturaComSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountCreateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'account_create_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'razons' => 'string',
        'rfc' => 'string',
        'codpos' => 'int',
        'calle' => 'string',
        'numero_exterior' => 'int',
        'numero_interior' => 'int',
        'colonia' => 'string',
        'estado' => 'string',
        'ciudad' => 'string',
        'delegacion' => 'string',
        'email' => 'string',
        'regimen' => 'int',
        'mailtomyconta' => 'int',
        'mail_conta' => 'string',
        'mailtomyself' => 'int',
        'regimen_nomina' => 'int',
        'cant_folios_min' => 'int',
        'smtp' => 'int',
        'smtp_email' => 'string',
        'smtp_password' => 'string',
        'smtp_port' => 'int',
        'smtp_host' => 'string',
        'smtp_encryption' => 'string',
        'telefono' => 'int',
        'curp' => 'string',
        'logo' => 'string',
        'password' => 'string',
        'cer' => 'string',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'razons' => null,
        'rfc' => null,
        'codpos' => null,
        'calle' => null,
        'numero_exterior' => null,
        'numero_interior' => null,
        'colonia' => null,
        'estado' => null,
        'ciudad' => null,
        'delegacion' => null,
        'email' => null,
        'regimen' => null,
        'mailtomyconta' => null,
        'mail_conta' => null,
        'mailtomyself' => null,
        'regimen_nomina' => null,
        'cant_folios_min' => null,
        'smtp' => null,
        'smtp_email' => null,
        'smtp_password' => null,
        'smtp_port' => null,
        'smtp_host' => null,
        'smtp_encryption' => null,
        'telefono' => null,
        'curp' => null,
        'logo' => 'binary',
        'password' => null,
        'cer' => 'binary',
        'key' => 'binary'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'razons' => 'razons',
        'rfc' => 'rfc',
        'codpos' => 'codpos',
        'calle' => 'calle',
        'numero_exterior' => 'numero_exterior',
        'numero_interior' => 'numero_interior',
        'colonia' => 'colonia',
        'estado' => 'estado',
        'ciudad' => 'ciudad',
        'delegacion' => 'delegacion',
        'email' => 'email',
        'regimen' => 'regimen',
        'mailtomyconta' => 'mailtomyconta',
        'mail_conta' => 'mail_conta',
        'mailtomyself' => 'mailtomyself',
        'regimen_nomina' => 'regimen_nomina',
        'cant_folios_min' => 'cant_folios_min',
        'smtp' => 'smtp',
        'smtp_email' => 'smtp_email',
        'smtp_password' => 'smtp_password',
        'smtp_port' => 'smtp_port',
        'smtp_host' => 'smtp_host',
        'smtp_encryption' => 'smtp_encryption',
        'telefono' => 'telefono',
        'curp' => 'curp',
        'logo' => 'logo',
        'password' => 'password',
        'cer' => 'cer',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'razons' => 'setRazons',
        'rfc' => 'setRfc',
        'codpos' => 'setCodpos',
        'calle' => 'setCalle',
        'numero_exterior' => 'setNumeroExterior',
        'numero_interior' => 'setNumeroInterior',
        'colonia' => 'setColonia',
        'estado' => 'setEstado',
        'ciudad' => 'setCiudad',
        'delegacion' => 'setDelegacion',
        'email' => 'setEmail',
        'regimen' => 'setRegimen',
        'mailtomyconta' => 'setMailtomyconta',
        'mail_conta' => 'setMailConta',
        'mailtomyself' => 'setMailtomyself',
        'regimen_nomina' => 'setRegimenNomina',
        'cant_folios_min' => 'setCantFoliosMin',
        'smtp' => 'setSmtp',
        'smtp_email' => 'setSmtpEmail',
        'smtp_password' => 'setSmtpPassword',
        'smtp_port' => 'setSmtpPort',
        'smtp_host' => 'setSmtpHost',
        'smtp_encryption' => 'setSmtpEncryption',
        'telefono' => 'setTelefono',
        'curp' => 'setCurp',
        'logo' => 'setLogo',
        'password' => 'setPassword',
        'cer' => 'setCer',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'razons' => 'getRazons',
        'rfc' => 'getRfc',
        'codpos' => 'getCodpos',
        'calle' => 'getCalle',
        'numero_exterior' => 'getNumeroExterior',
        'numero_interior' => 'getNumeroInterior',
        'colonia' => 'getColonia',
        'estado' => 'getEstado',
        'ciudad' => 'getCiudad',
        'delegacion' => 'getDelegacion',
        'email' => 'getEmail',
        'regimen' => 'getRegimen',
        'mailtomyconta' => 'getMailtomyconta',
        'mail_conta' => 'getMailConta',
        'mailtomyself' => 'getMailtomyself',
        'regimen_nomina' => 'getRegimenNomina',
        'cant_folios_min' => 'getCantFoliosMin',
        'smtp' => 'getSmtp',
        'smtp_email' => 'getSmtpEmail',
        'smtp_password' => 'getSmtpPassword',
        'smtp_port' => 'getSmtpPort',
        'smtp_host' => 'getSmtpHost',
        'smtp_encryption' => 'getSmtpEncryption',
        'telefono' => 'getTelefono',
        'curp' => 'getCurp',
        'logo' => 'getLogo',
        'password' => 'getPassword',
        'cer' => 'getCer',
        'key' => 'getKey'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['razons'] = isset($data['razons']) ? $data['razons'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['codpos'] = isset($data['codpos']) ? $data['codpos'] : null;
        $this->container['calle'] = isset($data['calle']) ? $data['calle'] : null;
        $this->container['numero_exterior'] = isset($data['numero_exterior']) ? $data['numero_exterior'] : null;
        $this->container['numero_interior'] = isset($data['numero_interior']) ? $data['numero_interior'] : null;
        $this->container['colonia'] = isset($data['colonia']) ? $data['colonia'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['delegacion'] = isset($data['delegacion']) ? $data['delegacion'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['regimen'] = isset($data['regimen']) ? $data['regimen'] : null;
        $this->container['mailtomyconta'] = isset($data['mailtomyconta']) ? $data['mailtomyconta'] : null;
        $this->container['mail_conta'] = isset($data['mail_conta']) ? $data['mail_conta'] : null;
        $this->container['mailtomyself'] = isset($data['mailtomyself']) ? $data['mailtomyself'] : null;
        $this->container['regimen_nomina'] = isset($data['regimen_nomina']) ? $data['regimen_nomina'] : null;
        $this->container['cant_folios_min'] = isset($data['cant_folios_min']) ? $data['cant_folios_min'] : null;
        $this->container['smtp'] = isset($data['smtp']) ? $data['smtp'] : null;
        $this->container['smtp_email'] = isset($data['smtp_email']) ? $data['smtp_email'] : null;
        $this->container['smtp_password'] = isset($data['smtp_password']) ? $data['smtp_password'] : null;
        $this->container['smtp_port'] = isset($data['smtp_port']) ? $data['smtp_port'] : null;
        $this->container['smtp_host'] = isset($data['smtp_host']) ? $data['smtp_host'] : null;
        $this->container['smtp_encryption'] = isset($data['smtp_encryption']) ? $data['smtp_encryption'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['cer'] = isset($data['cer']) ? $data['cer'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets razons
     *
     * @return string
     */
    public function getRazons()
    {
        return $this->container['razons'];
    }

    /**
     * Sets razons
     *
     * @param string $razons Requerido
     *
     * @return $this
     */
    public function setRazons($razons)
    {
        $this->container['razons'] = $razons;

        return $this;
    }

    /**
     * Gets rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->container['rfc'];
    }

    /**
     * Sets rfc
     *
     * @param string $rfc Requerido
     *
     * @return $this
     */
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;

        return $this;
    }

    /**
     * Gets codpos
     *
     * @return int
     */
    public function getCodpos()
    {
        return $this->container['codpos'];
    }

    /**
     * Sets codpos
     *
     * @param int $codpos Requerido
     *
     * @return $this
     */
    public function setCodpos($codpos)
    {
        $this->container['codpos'] = $codpos;

        return $this;
    }

    /**
     * Gets calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->container['calle'];
    }

    /**
     * Sets calle
     *
     * @param string $calle calle
     *
     * @return $this
     */
    public function setCalle($calle)
    {
        $this->container['calle'] = $calle;

        return $this;
    }

    /**
     * Gets numero_exterior
     *
     * @return int
     */
    public function getNumeroExterior()
    {
        return $this->container['numero_exterior'];
    }

    /**
     * Sets numero_exterior
     *
     * @param int $numero_exterior numero_exterior
     *
     * @return $this
     */
    public function setNumeroExterior($numero_exterior)
    {
        $this->container['numero_exterior'] = $numero_exterior;

        return $this;
    }

    /**
     * Gets numero_interior
     *
     * @return int
     */
    public function getNumeroInterior()
    {
        return $this->container['numero_interior'];
    }

    /**
     * Sets numero_interior
     *
     * @param int $numero_interior numero_interior
     *
     * @return $this
     */
    public function setNumeroInterior($numero_interior)
    {
        $this->container['numero_interior'] = $numero_interior;

        return $this;
    }

    /**
     * Gets colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->container['colonia'];
    }

    /**
     * Sets colonia
     *
     * @param string $colonia colonia
     *
     * @return $this
     */
    public function setColonia($colonia)
    {
        $this->container['colonia'] = $colonia;

        return $this;
    }

    /**
     * Gets estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->container['estado'];
    }

    /**
     * Sets estado
     *
     * @param string $estado estado
     *
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;

        return $this;
    }

    /**
     * Gets ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }

    /**
     * Sets ciudad
     *
     * @param string $ciudad ciudad
     *
     * @return $this
     */
    public function setCiudad($ciudad)
    {
        $this->container['ciudad'] = $ciudad;

        return $this;
    }

    /**
     * Gets delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->container['delegacion'];
    }

    /**
     * Sets delegacion
     *
     * @param string $delegacion delegacion
     *
     * @return $this
     */
    public function setDelegacion($delegacion)
    {
        $this->container['delegacion'] = $delegacion;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets regimen
     *
     * @return int
     */
    public function getRegimen()
    {
        return $this->container['regimen'];
    }

    /**
     * Sets regimen
     *
     * @param int $regimen regimen
     *
     * @return $this
     */
    public function setRegimen($regimen)
    {
        $this->container['regimen'] = $regimen;

        return $this;
    }

    /**
     * Gets mailtomyconta
     *
     * @return int
     */
    public function getMailtomyconta()
    {
        return $this->container['mailtomyconta'];
    }

    /**
     * Sets mailtomyconta
     *
     * @param int $mailtomyconta 1 para si y en blanco o 0 para no
     *
     * @return $this
     */
    public function setMailtomyconta($mailtomyconta)
    {
        $this->container['mailtomyconta'] = $mailtomyconta;

        return $this;
    }

    /**
     * Gets mail_conta
     *
     * @return string
     */
    public function getMailConta()
    {
        return $this->container['mail_conta'];
    }

    /**
     * Sets mail_conta
     *
     * @param string $mail_conta mail_conta
     *
     * @return $this
     */
    public function setMailConta($mail_conta)
    {
        $this->container['mail_conta'] = $mail_conta;

        return $this;
    }

    /**
     * Gets mailtomyself
     *
     * @return int
     */
    public function getMailtomyself()
    {
        return $this->container['mailtomyself'];
    }

    /**
     * Sets mailtomyself
     *
     * @param int $mailtomyself 1 para si y en blanco o 0 para no
     *
     * @return $this
     */
    public function setMailtomyself($mailtomyself)
    {
        $this->container['mailtomyself'] = $mailtomyself;

        return $this;
    }

    /**
     * Gets regimen_nomina
     *
     * @return int
     */
    public function getRegimenNomina()
    {
        return $this->container['regimen_nomina'];
    }

    /**
     * Sets regimen_nomina
     *
     * @param int $regimen_nomina regimen_nomina
     *
     * @return $this
     */
    public function setRegimenNomina($regimen_nomina)
    {
        $this->container['regimen_nomina'] = $regimen_nomina;

        return $this;
    }

    /**
     * Gets cant_folios_min
     *
     * @return int
     */
    public function getCantFoliosMin()
    {
        return $this->container['cant_folios_min'];
    }

    /**
     * Sets cant_folios_min
     *
     * @param int $cant_folios_min cant_folios_min
     *
     * @return $this
     */
    public function setCantFoliosMin($cant_folios_min)
    {
        $this->container['cant_folios_min'] = $cant_folios_min;

        return $this;
    }

    /**
     * Gets smtp
     *
     * @return int
     */
    public function getSmtp()
    {
        return $this->container['smtp'];
    }

    /**
     * Sets smtp
     *
     * @param int $smtp smtp
     *
     * @return $this
     */
    public function setSmtp($smtp)
    {
        $this->container['smtp'] = $smtp;

        return $this;
    }

    /**
     * Gets smtp_email
     *
     * @return string
     */
    public function getSmtpEmail()
    {
        return $this->container['smtp_email'];
    }

    /**
     * Sets smtp_email
     *
     * @param string $smtp_email smtp_email
     *
     * @return $this
     */
    public function setSmtpEmail($smtp_email)
    {
        $this->container['smtp_email'] = $smtp_email;

        return $this;
    }

    /**
     * Gets smtp_password
     *
     * @return string
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string $smtp_password smtp_password
     *
     * @return $this
     */
    public function setSmtpPassword($smtp_password)
    {
        $this->container['smtp_password'] = $smtp_password;

        return $this;
    }

    /**
     * Gets smtp_port
     *
     * @return int
     */
    public function getSmtpPort()
    {
        return $this->container['smtp_port'];
    }

    /**
     * Sets smtp_port
     *
     * @param int $smtp_port smtp_port
     *
     * @return $this
     */
    public function setSmtpPort($smtp_port)
    {
        $this->container['smtp_port'] = $smtp_port;

        return $this;
    }

    /**
     * Gets smtp_host
     *
     * @return string
     */
    public function getSmtpHost()
    {
        return $this->container['smtp_host'];
    }

    /**
     * Sets smtp_host
     *
     * @param string $smtp_host smtp_host
     *
     * @return $this
     */
    public function setSmtpHost($smtp_host)
    {
        $this->container['smtp_host'] = $smtp_host;

        return $this;
    }

    /**
     * Gets smtp_encryption
     *
     * @return string
     */
    public function getSmtpEncryption()
    {
        return $this->container['smtp_encryption'];
    }

    /**
     * Sets smtp_encryption
     *
     * @param string $smtp_encryption en blanco para default u opciones -> ssl, tls, none
     *
     * @return $this
     */
    public function setSmtpEncryption($smtp_encryption)
    {
        $this->container['smtp_encryption'] = $smtp_encryption;

        return $this;
    }

    /**
     * Gets telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->container['telefono'];
    }

    /**
     * Sets telefono
     *
     * @param int $telefono telefono
     *
     * @return $this
     */
    public function setTelefono($telefono)
    {
        $this->container['telefono'] = $telefono;

        return $this;
    }

    /**
     * Gets curp
     *
     * @return string
     */
    public function getCurp()
    {
        return $this->container['curp'];
    }

    /**
     * Sets curp
     *
     * @param string $curp curp
     *
     * @return $this
     */
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Requerido contraseña para CSD (.cer y .key)
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets cer
     *
     * @return string
     */
    public function getCer()
    {
        return $this->container['cer'];
    }

    /**
     * Sets cer
     *
     * @param string $cer Requerido
     *
     * @return $this
     */
    public function setCer($cer)
    {
        $this->container['cer'] = $cer;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key Requerido
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
