<?php
/**
 * SkyPostalLiveRatesSettingsData
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
 * SkyPostalLiveRatesSettingsData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SkyPostalLiveRatesSettingsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SkyPostalLiveRatesSettingsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'split_packages_countries' => 'string[]',
        'default_hs_code' => 'string',
        'service_additional_descriptions' => '\Swagger\Client\Model\ServiceAdditionalDescription[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'split_packages_countries' => null,
        'default_hs_code' => null,
        'service_additional_descriptions' => null
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
        'split_packages_countries' => 'splitPackagesCountries',
        'default_hs_code' => 'defaultHsCode',
        'service_additional_descriptions' => 'serviceAdditionalDescriptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'split_packages_countries' => 'setSplitPackagesCountries',
        'default_hs_code' => 'setDefaultHsCode',
        'service_additional_descriptions' => 'setServiceAdditionalDescriptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'split_packages_countries' => 'getSplitPackagesCountries',
        'default_hs_code' => 'getDefaultHsCode',
        'service_additional_descriptions' => 'getServiceAdditionalDescriptions'
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
        $this->container['split_packages_countries'] = isset($data['split_packages_countries']) ? $data['split_packages_countries'] : null;
        $this->container['default_hs_code'] = isset($data['default_hs_code']) ? $data['default_hs_code'] : null;
        $this->container['service_additional_descriptions'] = isset($data['service_additional_descriptions']) ? $data['service_additional_descriptions'] : null;
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
     * Gets split_packages_countries
     *
     * @return string[]
     */
    public function getSplitPackagesCountries()
    {
        return $this->container['split_packages_countries'];
    }

    /**
     * Sets split_packages_countries
     *
     * @param string[] $split_packages_countries split_packages_countries
     *
     * @return $this
     */
    public function setSplitPackagesCountries($split_packages_countries)
    {
        $this->container['split_packages_countries'] = $split_packages_countries;

        return $this;
    }

    /**
     * Gets default_hs_code
     *
     * @return string
     */
    public function getDefaultHsCode()
    {
        return $this->container['default_hs_code'];
    }

    /**
     * Sets default_hs_code
     *
     * @param string $default_hs_code default_hs_code
     *
     * @return $this
     */
    public function setDefaultHsCode($default_hs_code)
    {
        $this->container['default_hs_code'] = $default_hs_code;

        return $this;
    }

    /**
     * Gets service_additional_descriptions
     *
     * @return \Swagger\Client\Model\ServiceAdditionalDescription[]
     */
    public function getServiceAdditionalDescriptions()
    {
        return $this->container['service_additional_descriptions'];
    }

    /**
     * Sets service_additional_descriptions
     *
     * @param \Swagger\Client\Model\ServiceAdditionalDescription[] $service_additional_descriptions service_additional_descriptions
     *
     * @return $this
     */
    public function setServiceAdditionalDescriptions($service_additional_descriptions)
    {
        $this->container['service_additional_descriptions'] = $service_additional_descriptions;

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
