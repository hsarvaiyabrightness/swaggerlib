<?php
/**
 * ProductsRequest
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
 * ProductsRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'description' => 'string',
        'sku' => 'string',
        'origin_country' => 'string',
        'attribute1' => 'string',
        'attribute2' => 'string',
        'attribute3' => 'string',
        'attribute4' => 'string',
        'attribute5' => 'string',
        'attribute6' => 'string',
        'hs_code_us' => 'string',
        'current_price' => 'double',
        'product_url' => 'string',
        'weight' => 'double',
        'skn' => 'string',
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'ship_alone' => 'bool',
        'delete' => 'bool',
        'weight_unit' => 'string',
        'dim_unit' => 'string',
        'battery_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => null,
        'description' => null,
        'sku' => null,
        'origin_country' => null,
        'attribute1' => null,
        'attribute2' => null,
        'attribute3' => null,
        'attribute4' => null,
        'attribute5' => null,
        'attribute6' => null,
        'hs_code_us' => null,
        'current_price' => 'double',
        'product_url' => null,
        'weight' => 'double',
        'skn' => null,
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'ship_alone' => null,
        'delete' => null,
        'weight_unit' => null,
        'dim_unit' => null,
        'battery_type' => null
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
        'product_id' => 'productId',
        'description' => 'description',
        'sku' => 'sku',
        'origin_country' => 'originCountry',
        'attribute1' => 'attribute1',
        'attribute2' => 'attribute2',
        'attribute3' => 'attribute3',
        'attribute4' => 'attribute4',
        'attribute5' => 'attribute5',
        'attribute6' => 'attribute6',
        'hs_code_us' => 'hsCodeUS',
        'current_price' => 'currentPrice',
        'product_url' => 'productUrl',
        'weight' => 'weight',
        'skn' => 'skn',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'ship_alone' => 'shipAlone',
        'delete' => 'delete',
        'weight_unit' => 'weightUnit',
        'dim_unit' => 'dimUnit',
        'battery_type' => 'batteryType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'description' => 'setDescription',
        'sku' => 'setSku',
        'origin_country' => 'setOriginCountry',
        'attribute1' => 'setAttribute1',
        'attribute2' => 'setAttribute2',
        'attribute3' => 'setAttribute3',
        'attribute4' => 'setAttribute4',
        'attribute5' => 'setAttribute5',
        'attribute6' => 'setAttribute6',
        'hs_code_us' => 'setHsCodeUs',
        'current_price' => 'setCurrentPrice',
        'product_url' => 'setProductUrl',
        'weight' => 'setWeight',
        'skn' => 'setSkn',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'ship_alone' => 'setShipAlone',
        'delete' => 'setDelete',
        'weight_unit' => 'setWeightUnit',
        'dim_unit' => 'setDimUnit',
        'battery_type' => 'setBatteryType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'description' => 'getDescription',
        'sku' => 'getSku',
        'origin_country' => 'getOriginCountry',
        'attribute1' => 'getAttribute1',
        'attribute2' => 'getAttribute2',
        'attribute3' => 'getAttribute3',
        'attribute4' => 'getAttribute4',
        'attribute5' => 'getAttribute5',
        'attribute6' => 'getAttribute6',
        'hs_code_us' => 'getHsCodeUs',
        'current_price' => 'getCurrentPrice',
        'product_url' => 'getProductUrl',
        'weight' => 'getWeight',
        'skn' => 'getSkn',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'ship_alone' => 'getShipAlone',
        'delete' => 'getDelete',
        'weight_unit' => 'getWeightUnit',
        'dim_unit' => 'getDimUnit',
        'battery_type' => 'getBatteryType'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['origin_country'] = isset($data['origin_country']) ? $data['origin_country'] : null;
        $this->container['attribute1'] = isset($data['attribute1']) ? $data['attribute1'] : null;
        $this->container['attribute2'] = isset($data['attribute2']) ? $data['attribute2'] : null;
        $this->container['attribute3'] = isset($data['attribute3']) ? $data['attribute3'] : null;
        $this->container['attribute4'] = isset($data['attribute4']) ? $data['attribute4'] : null;
        $this->container['attribute5'] = isset($data['attribute5']) ? $data['attribute5'] : null;
        $this->container['attribute6'] = isset($data['attribute6']) ? $data['attribute6'] : null;
        $this->container['hs_code_us'] = isset($data['hs_code_us']) ? $data['hs_code_us'] : null;
        $this->container['current_price'] = isset($data['current_price']) ? $data['current_price'] : null;
        $this->container['product_url'] = isset($data['product_url']) ? $data['product_url'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['skn'] = isset($data['skn']) ? $data['skn'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['ship_alone'] = isset($data['ship_alone']) ? $data['ship_alone'] : null;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['weight_unit'] = isset($data['weight_unit']) ? $data['weight_unit'] : null;
        $this->container['dim_unit'] = isset($data['dim_unit']) ? $data['dim_unit'] : null;
        $this->container['battery_type'] = isset($data['battery_type']) ? $data['battery_type'] : null;
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
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets attribute1
     *
     * @return string
     */
    public function getAttribute1()
    {
        return $this->container['attribute1'];
    }

    /**
     * Sets attribute1
     *
     * @param string $attribute1 attribute1
     *
     * @return $this
     */
    public function setAttribute1($attribute1)
    {
        $this->container['attribute1'] = $attribute1;

        return $this;
    }

    /**
     * Gets attribute2
     *
     * @return string
     */
    public function getAttribute2()
    {
        return $this->container['attribute2'];
    }

    /**
     * Sets attribute2
     *
     * @param string $attribute2 attribute2
     *
     * @return $this
     */
    public function setAttribute2($attribute2)
    {
        $this->container['attribute2'] = $attribute2;

        return $this;
    }

    /**
     * Gets attribute3
     *
     * @return string
     */
    public function getAttribute3()
    {
        return $this->container['attribute3'];
    }

    /**
     * Sets attribute3
     *
     * @param string $attribute3 attribute3
     *
     * @return $this
     */
    public function setAttribute3($attribute3)
    {
        $this->container['attribute3'] = $attribute3;

        return $this;
    }

    /**
     * Gets attribute4
     *
     * @return string
     */
    public function getAttribute4()
    {
        return $this->container['attribute4'];
    }

    /**
     * Sets attribute4
     *
     * @param string $attribute4 attribute4
     *
     * @return $this
     */
    public function setAttribute4($attribute4)
    {
        $this->container['attribute4'] = $attribute4;

        return $this;
    }

    /**
     * Gets attribute5
     *
     * @return string
     */
    public function getAttribute5()
    {
        return $this->container['attribute5'];
    }

    /**
     * Sets attribute5
     *
     * @param string $attribute5 attribute5
     *
     * @return $this
     */
    public function setAttribute5($attribute5)
    {
        $this->container['attribute5'] = $attribute5;

        return $this;
    }

    /**
     * Gets attribute6
     *
     * @return string
     */
    public function getAttribute6()
    {
        return $this->container['attribute6'];
    }

    /**
     * Sets attribute6
     *
     * @param string $attribute6 attribute6
     *
     * @return $this
     */
    public function setAttribute6($attribute6)
    {
        $this->container['attribute6'] = $attribute6;

        return $this;
    }

    /**
     * Gets hs_code_us
     *
     * @return string
     */
    public function getHsCodeUs()
    {
        return $this->container['hs_code_us'];
    }

    /**
     * Sets hs_code_us
     *
     * @param string $hs_code_us hs_code_us
     *
     * @return $this
     */
    public function setHsCodeUs($hs_code_us)
    {
        $this->container['hs_code_us'] = $hs_code_us;

        return $this;
    }

    /**
     * Gets current_price
     *
     * @return double
     */
    public function getCurrentPrice()
    {
        return $this->container['current_price'];
    }

    /**
     * Sets current_price
     *
     * @param double $current_price current_price
     *
     * @return $this
     */
    public function setCurrentPrice($current_price)
    {
        $this->container['current_price'] = $current_price;

        return $this;
    }

    /**
     * Gets product_url
     *
     * @return string
     */
    public function getProductUrl()
    {
        return $this->container['product_url'];
    }

    /**
     * Sets product_url
     *
     * @param string $product_url product_url
     *
     * @return $this
     */
    public function setProductUrl($product_url)
    {
        $this->container['product_url'] = $product_url;

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
     * Gets skn
     *
     * @return string
     */
    public function getSkn()
    {
        return $this->container['skn'];
    }

    /**
     * Sets skn
     *
     * @param string $skn skn
     *
     * @return $this
     */
    public function setSkn($skn)
    {
        $this->container['skn'] = $skn;

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
     * Gets ship_alone
     *
     * @return bool
     */
    public function getShipAlone()
    {
        return $this->container['ship_alone'];
    }

    /**
     * Sets ship_alone
     *
     * @param bool $ship_alone ship_alone
     *
     * @return $this
     */
    public function setShipAlone($ship_alone)
    {
        $this->container['ship_alone'] = $ship_alone;

        return $this;
    }

    /**
     * Gets delete
     *
     * @return bool
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param bool $delete delete
     *
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

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
     * Gets battery_type
     *
     * @return string
     */
    public function getBatteryType()
    {
        return $this->container['battery_type'];
    }

    /**
     * Sets battery_type
     *
     * @param string $battery_type battery_type
     *
     * @return $this
     */
    public function setBatteryType($battery_type)
    {
        $this->container['battery_type'] = $battery_type;

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
