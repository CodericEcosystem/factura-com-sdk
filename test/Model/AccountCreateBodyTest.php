<?php
/**
 * AccountCreateBodyTest
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
 * Please update the test case below to test the model.
 */

namespace FacturaCom\FacturaComSdk;

use PHPUnit\Framework\TestCase;

/**
 * AccountCreateBodyTest Class Doc Comment
 *
 * @category    Class
 * @description AccountCreateBody
 * @package     FacturaCom\FacturaComSdk
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountCreateBodyTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "AccountCreateBody"
     */
    public function testAccountCreateBody()
    {
    }

    /**
     * Test attribute "razons"
     */
    public function testPropertyRazons()
    {
    }

    /**
     * Test attribute "rfc"
     */
    public function testPropertyRfc()
    {
    }

    /**
     * Test attribute "codpos"
     */
    public function testPropertyCodpos()
    {
    }

    /**
     * Test attribute "calle"
     */
    public function testPropertyCalle()
    {
    }

    /**
     * Test attribute "numero_exterior"
     */
    public function testPropertyNumeroExterior()
    {
    }

    /**
     * Test attribute "numero_interior"
     */
    public function testPropertyNumeroInterior()
    {
    }

    /**
     * Test attribute "colonia"
     */
    public function testPropertyColonia()
    {
    }

    /**
     * Test attribute "estado"
     */
    public function testPropertyEstado()
    {
    }

    /**
     * Test attribute "ciudad"
     */
    public function testPropertyCiudad()
    {
    }

    /**
     * Test attribute "delegacion"
     */
    public function testPropertyDelegacion()
    {
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
    }

    /**
     * Test attribute "regimen"
     */
    public function testPropertyRegimen()
    {
    }

    /**
     * Test attribute "mailtomyconta"
     */
    public function testPropertyMailtomyconta()
    {
    }

    /**
     * Test attribute "mail_conta"
     */
    public function testPropertyMailConta()
    {
    }

    /**
     * Test attribute "mailtomyself"
     */
    public function testPropertyMailtomyself()
    {
    }

    /**
     * Test attribute "regimen_nomina"
     */
    public function testPropertyRegimenNomina()
    {
    }

    /**
     * Test attribute "cant_folios_min"
     */
    public function testPropertyCantFoliosMin()
    {
    }

    /**
     * Test attribute "smtp"
     */
    public function testPropertySmtp()
    {
    }

    /**
     * Test attribute "smtp_email"
     */
    public function testPropertySmtpEmail()
    {
    }

    /**
     * Test attribute "smtp_password"
     */
    public function testPropertySmtpPassword()
    {
    }

    /**
     * Test attribute "smtp_port"
     */
    public function testPropertySmtpPort()
    {
    }

    /**
     * Test attribute "smtp_host"
     */
    public function testPropertySmtpHost()
    {
    }

    /**
     * Test attribute "smtp_encryption"
     */
    public function testPropertySmtpEncryption()
    {
    }

    /**
     * Test attribute "telefono"
     */
    public function testPropertyTelefono()
    {
    }

    /**
     * Test attribute "curp"
     */
    public function testPropertyCurp()
    {
    }

    /**
     * Test attribute "logo"
     */
    public function testPropertyLogo()
    {
    }

    /**
     * Test attribute "password"
     */
    public function testPropertyPassword()
    {
    }

    /**
     * Test attribute "cer"
     */
    public function testPropertyCer()
    {
    }

    /**
     * Test attribute "key"
     */
    public function testPropertyKey()
    {
    }
}
