<?php
/**
 * ShippingLabelAccessCredentials
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shipping Label API
 *
 * Shipping Label application
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.57
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ShippingLabelAccessCredentials Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingLabelAccessCredentials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingLabelAccessCredentials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_name' => 'string',
        'password' => 'string',
        'account_number' => 'string',
        'access_key' => 'string',
        'email' => 'string',
        'store_url' => 'string',
        'api_key' => 'string',
        'api_secret' => 'string',
        'store_id' => 'string',
        'webhook_url' => 'string',
        'hs_provider' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_name' => null,
        'password' => null,
        'account_number' => null,
        'access_key' => null,
        'email' => null,
        'store_url' => null,
        'api_key' => null,
        'api_secret' => null,
        'store_id' => null,
        'webhook_url' => null,
        'hs_provider' => null
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
        'user_name' => 'userName',
        'password' => 'password',
        'account_number' => 'accountNumber',
        'access_key' => 'accessKey',
        'email' => 'email',
        'store_url' => 'storeUrl',
        'api_key' => 'apiKey',
        'api_secret' => 'apiSecret',
        'store_id' => 'storeId',
        'webhook_url' => 'webhookUrl',
        'hs_provider' => 'hsProvider'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_name' => 'setUserName',
        'password' => 'setPassword',
        'account_number' => 'setAccountNumber',
        'access_key' => 'setAccessKey',
        'email' => 'setEmail',
        'store_url' => 'setStoreUrl',
        'api_key' => 'setApiKey',
        'api_secret' => 'setApiSecret',
        'store_id' => 'setStoreId',
        'webhook_url' => 'setWebhookUrl',
        'hs_provider' => 'setHsProvider'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_name' => 'getUserName',
        'password' => 'getPassword',
        'account_number' => 'getAccountNumber',
        'access_key' => 'getAccessKey',
        'email' => 'getEmail',
        'store_url' => 'getStoreUrl',
        'api_key' => 'getApiKey',
        'api_secret' => 'getApiSecret',
        'store_id' => 'getStoreId',
        'webhook_url' => 'getWebhookUrl',
        'hs_provider' => 'getHsProvider'
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

    const HS_PROVIDER_HURRICANE = 'Hurricane';
    const HS_PROVIDER_UPS = 'UPS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHsProviderAllowableValues()
    {
        return [
            self::HS_PROVIDER_HURRICANE,
            self::HS_PROVIDER_UPS
        ];
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
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['access_key'] = isset($data['access_key']) ? $data['access_key'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['store_url'] = isset($data['store_url']) ? $data['store_url'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['api_secret'] = isset($data['api_secret']) ? $data['api_secret'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
        $this->container['hs_provider'] = isset($data['hs_provider']) ? $data['hs_provider'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ($this->container['api_secret'] === null) {
            $invalidProperties[] = "'api_secret' can't be null";
        }
        $allowedValues = $this->getHsProviderAllowableValues();
        if (!is_null($this->container['hs_provider']) && !in_array($this->container['hs_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hs_provider', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name user_name
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

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
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number account_number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

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
     * Gets store_url
     *
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->container['store_url'];
    }

    /**
     * Sets store_url
     *
     * @param string $store_url store_url
     *
     * @return $this
     */
    public function setStoreUrl($store_url)
    {
        $this->container['store_url'] = $store_url;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets api_secret
     *
     * @return string
     */
    public function getApiSecret()
    {
        return $this->container['api_secret'];
    }

    /**
     * Sets api_secret
     *
     * @param string $api_secret api_secret
     *
     * @return $this
     */
    public function setApiSecret($api_secret)
    {
        $this->container['api_secret'] = $api_secret;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string $store_id store_id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url webhook_url
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets hs_provider
     *
     * @return string
     */
    public function getHsProvider()
    {
        return $this->container['hs_provider'];
    }

    /**
     * Sets hs_provider
     *
     * @param string $hs_provider hs_provider
     *
     * @return $this
     */
    public function setHsProvider($hs_provider)
    {
        $allowedValues = $this->getHsProviderAllowableValues();
        if (!is_null($hs_provider) && !in_array($hs_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hs_provider', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hs_provider'] = $hs_provider;

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
