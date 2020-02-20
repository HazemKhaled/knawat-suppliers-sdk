<?php
/**
 * SupplierBillingAddressTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Knawat supplier API Documentation
 *
 * Knawat Supply API allows you to list your products on Knawat and get purchase orders, it's also allow you to set order status and shipping tracking number. ## Getting Started In Knawat each supplier has a different `consumerKey` and `consumerSecret`, which you can get from your account manager. You need those keys for API authorization. Knawat suppliers npm package: [![npm version](https://badge.fury.io/js/%40knawat%2Fsuppliers.svg)](https://badge.fury.io/js/%40knawat%2Fsuppliers). ## Support and Chat   We are happy to receive your questions. click here to [chat with us](https://gitter.im/Knawat/Lobby).  ## Errors Handling   This API uses standard HTTP status codes to indicate the status of a   response.    There are two main categories of error responses. Each have a different   response payload structure.    * Simple errors   * Detailed errors    # Simple errors    | Name | Code | Description |   | -------- | -------- | -------- |   | Bad request     | 400     | The request was unacceptable     |   | Unauthorized     | 401     | The request has not been applied because it lacks valid authentication credentials for the target resource.     |   | Forbidden     | 403     | The server understood the request, but is refusing to fulfill it     |   | Not Found     | 404     | The server has not found anything matching the request URI     |   | Not acceptable     | 406     | The server is unable to return a response in the format that was requested by the client     |   | Unsupported Media Type     | 415     | The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method |   | Too many requests     | 429     | Too many requests hit the API too quickly |   | Server error     | 500     | A technical error occurred |    # Detailed errors   | Name | Code | Description |   | -------- | -------- | -------- |   | Un-processable entity     | 422     | The server understands the content type of the request entity, and the syntax of the request entity is correct, but was unable to process the contained instructions. |
 *
 * OpenAPI spec version: 1.1.0
 * Contact: support@knawat.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * SupplierBillingAddressTest Class Doc Comment
 *
 * @category    Class
 * @description SupplierBillingAddress
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SupplierBillingAddressTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "SupplierBillingAddress"
     */
    public function testSupplierBillingAddress()
    {
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
    }

    /**
     * Test attribute "company"
     */
    public function testPropertyCompany()
    {
    }

    /**
     * Test attribute "address_1"
     */
    public function testPropertyAddress1()
    {
    }

    /**
     * Test attribute "address_2"
     */
    public function testPropertyAddress2()
    {
    }

    /**
     * Test attribute "city"
     */
    public function testPropertyCity()
    {
    }

    /**
     * Test attribute "state"
     */
    public function testPropertyState()
    {
    }

    /**
     * Test attribute "postcode"
     */
    public function testPropertyPostcode()
    {
    }

    /**
     * Test attribute "country"
     */
    public function testPropertyCountry()
    {
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
    }

    /**
     * Test attribute "phone"
     */
    public function testPropertyPhone()
    {
    }
}
