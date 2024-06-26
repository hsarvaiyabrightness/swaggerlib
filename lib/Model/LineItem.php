<?php
/**
 * LineItem
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
 * LineItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
        'weight' => 'double',
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'dim_unit' => 'string',
        'weight_unit' => 'string',
        'hts_code' => 'string',
        'origin_country' => 'string',
        'quantity' => 'int',
        'original_price' => 'string',
        'description' => 'string',
        'value_company_currency' => 'string',
        'company_currency' => 'string',
        'value_shopper_currency' => 'string',
        'shopper_currency' => 'string',
        'item_style' => 'string',
        'requested_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null,
        'weight' => 'double',
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'dim_unit' => null,
        'weight_unit' => null,
        'hts_code' => null,
        'origin_country' => null,
        'quantity' => 'int32',
        'original_price' => null,
        'description' => null,
        'value_company_currency' => null,
        'company_currency' => null,
        'value_shopper_currency' => null,
        'shopper_currency' => null,
        'item_style' => null,
        'requested_sku' => null
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
        'sku' => 'sku',
        'weight' => 'weight',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'dim_unit' => 'dimUnit',
        'weight_unit' => 'weightUnit',
        'hts_code' => 'htsCode',
        'origin_country' => 'originCountry',
        'quantity' => 'quantity',
        'original_price' => 'originalPrice',
        'description' => 'description',
        'value_company_currency' => 'valueCompanyCurrency',
        'company_currency' => 'companyCurrency',
        'value_shopper_currency' => 'valueShopperCurrency',
        'shopper_currency' => 'shopperCurrency',
        'item_style' => 'itemStyle',
        'requested_sku' => 'requestedSku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'weight' => 'setWeight',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dim_unit' => 'setDimUnit',
        'weight_unit' => 'setWeightUnit',
        'hts_code' => 'setHtsCode',
        'origin_country' => 'setOriginCountry',
        'quantity' => 'setQuantity',
        'original_price' => 'setOriginalPrice',
        'description' => 'setDescription',
        'value_company_currency' => 'setValueCompanyCurrency',
        'company_currency' => 'setCompanyCurrency',
        'value_shopper_currency' => 'setValueShopperCurrency',
        'shopper_currency' => 'setShopperCurrency',
        'item_style' => 'setItemStyle',
        'requested_sku' => 'setRequestedSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'weight' => 'getWeight',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dim_unit' => 'getDimUnit',
        'weight_unit' => 'getWeightUnit',
        'hts_code' => 'getHtsCode',
        'origin_country' => 'getOriginCountry',
        'quantity' => 'getQuantity',
        'original_price' => 'getOriginalPrice',
        'description' => 'getDescription',
        'value_company_currency' => 'getValueCompanyCurrency',
        'company_currency' => 'getCompanyCurrency',
        'value_shopper_currency' => 'getValueShopperCurrency',
        'shopper_currency' => 'getShopperCurrency',
        'item_style' => 'getItemStyle',
        'requested_sku' => 'getRequestedSku'
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['dim_unit'] = isset($data['dim_unit']) ? $data['dim_unit'] : null;
        $this->container['weight_unit'] = isset($data['weight_unit']) ? $data['weight_unit'] : null;
        $this->container['hts_code'] = isset($data['hts_code']) ? $data['hts_code'] : null;
        $this->container['origin_country'] = isset($data['origin_country']) ? $data['origin_country'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['original_price'] = isset($data['original_price']) ? $data['original_price'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['value_company_currency'] = isset($data['value_company_currency']) ? $data['value_company_currency'] : null;
        $this->container['company_currency'] = isset($data['company_currency']) ? $data['company_currency'] : null;
        $this->container['value_shopper_currency'] = isset($data['value_shopper_currency']) ? $data['value_shopper_currency'] : null;
        $this->container['shopper_currency'] = isset($data['shopper_currency']) ? $data['shopper_currency'] : null;
        $this->container['item_style'] = isset($data['item_style']) ? $data['item_style'] : null;
        $this->container['requested_sku'] = isset($data['requested_sku']) ? $data['requested_sku'] : null;
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets length
     *
     * @return double
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param double $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets dim_unit
     *
     * @return string
     */
    public function getDimUnit()
    {
        return $this->container['dim_unit'];
    }

    /**
     * Sets dim_unit
     *
     * @param string $dim_unit dim_unit
     *
     * @return $this
     */
    public function setDimUnit($dim_unit)
    {
        $this->container['dim_unit'] = $dim_unit;

        return $this;
    }

    /**
     * Gets weight_unit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->container['weight_unit'];
    }

    /**
     * Sets weight_unit
     *
     * @param string $weight_unit weight_unit
     *
     * @return $this
     */
    public function setWeightUnit($weight_unit)
    {
        $this->container['weight_unit'] = $weight_unit;

        return $this;
    }

    /**
     * Gets hts_code
     *
     * @return string
     */
    public function getHtsCode()
    {
        return $this->container['hts_code'];
    }

    /**
     * Sets hts_code
     *
     * @param string $hts_code hts_code
     *
     * @return $this
     */
    public function setHtsCode($hts_code)
    {
        $this->container['hts_code'] = $hts_code;

        return $this;
    }

    /**
     * Gets origin_country
     *
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->container['origin_country'];
    }

    /**
     * Sets origin_country
     *
     * @param string $origin_country origin_country
     *
     * @return $this
     */
    public function setOriginCountry($origin_country)
    {
        $this->container['origin_country'] = $origin_country;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets original_price
     *
     * @return string
     */
    public function getOriginalPrice()
    {
        return $this->container['original_price'];
    }

    /**
     * Sets original_price
     *
     * @param string $original_price original_price
     *
     * @return $this
     */
    public function setOriginalPrice($original_price)
    {
        $this->container['original_price'] = $original_price;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets value_company_currency
     *
     * @return string
     */
    public function getValueCompanyCurrency()
    {
        return $this->container['value_company_currency'];
    }

    /**
     * Sets value_company_currency
     *
     * @param string $value_company_currency value_company_currency
     *
     * @return $this
     */
    public function setValueCompanyCurrency($value_company_currency)
    {
        $this->container['value_company_currency'] = $value_company_currency;

        return $this;
    }

    /**
     * Gets company_currency
     *
     * @return string
     */
    public function getCompanyCurrency()
    {
        return $this->container['company_currency'];
    }

    /**
     * Sets company_currency
     *
     * @param string $company_currency company_currency
     *
     * @return $this
     */
    public function setCompanyCurrency($company_currency)
    {
        $this->container['company_currency'] = $company_currency;

        return $this;
    }

    /**
     * Gets value_shopper_currency
     *
     * @return string
     */
    public function getValueShopperCurrency()
    {
        return $this->container['value_shopper_currency'];
    }

    /**
     * Sets value_shopper_currency
     *
     * @param string $value_shopper_currency value_shopper_currency
     *
     * @return $this
     */
    public function setValueShopperCurrency($value_shopper_currency)
    {
        $this->container['value_shopper_currency'] = $value_shopper_currency;

        return $this;
    }

    /**
     * Gets shopper_currency
     *
     * @return string
     */
    public function getShopperCurrency()
    {
        return $this->container['shopper_currency'];
    }

    /**
     * Sets shopper_currency
     *
     * @param string $shopper_currency shopper_currency
     *
     * @return $this
     */
    public function setShopperCurrency($shopper_currency)
    {
        $this->container['shopper_currency'] = $shopper_currency;

        return $this;
    }

    /**
     * Gets item_style
     *
     * @return string
     */
    public function getItemStyle()
    {
        return $this->container['item_style'];
    }

    /**
     * Sets item_style
     *
     * @param string $item_style item_style
     *
     * @return $this
     */
    public function setItemStyle($item_style)
    {
        $this->container['item_style'] = $item_style;

        return $this;
    }

    /**
     * Gets requested_sku
     *
     * @return string
     */
    public function getRequestedSku()
    {
        return $this->container['requested_sku'];
    }

    /**
     * Sets requested_sku
     *
     * @param string $requested_sku requested_sku
     *
     * @return $this
     */
    public function setRequestedSku($requested_sku)
    {
        $this->container['requested_sku'] = $requested_sku;

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
