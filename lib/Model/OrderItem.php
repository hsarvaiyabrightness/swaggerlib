<?php
/**
 * OrderItem
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
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifier' => 'string',
        'title' => 'string',
        'description' => 'string',
        'sku' => 'string',
        'hs_code' => 'string',
        'origin_country' => 'string',
        'quantity' => 'int',
        'price' => 'double',
        'weight' => 'string',
        'height' => 'string',
        'weight_unit' => 'string',
        'width' => 'string',
        'length' => 'string',
        'dimensions_unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifier' => null,
        'title' => null,
        'description' => null,
        'sku' => null,
        'hs_code' => null,
        'origin_country' => null,
        'quantity' => 'int32',
        'price' => 'double',
        'weight' => null,
        'height' => null,
        'weight_unit' => null,
        'width' => null,
        'length' => null,
        'dimensions_unit' => null
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
        'identifier' => 'identifier',
        'title' => 'title',
        'description' => 'description',
        'sku' => 'sku',
        'hs_code' => 'hsCode',
        'origin_country' => 'originCountry',
        'quantity' => 'quantity',
        'price' => 'price',
        'weight' => 'weight',
        'height' => 'height',
        'weight_unit' => 'weightUnit',
        'width' => 'width',
        'length' => 'length',
        'dimensions_unit' => 'dimensionsUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'sku' => 'setSku',
        'hs_code' => 'setHsCode',
        'origin_country' => 'setOriginCountry',
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'weight' => 'setWeight',
        'height' => 'setHeight',
        'weight_unit' => 'setWeightUnit',
        'width' => 'setWidth',
        'length' => 'setLength',
        'dimensions_unit' => 'setDimensionsUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'sku' => 'getSku',
        'hs_code' => 'getHsCode',
        'origin_country' => 'getOriginCountry',
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'weight' => 'getWeight',
        'height' => 'getHeight',
        'weight_unit' => 'getWeightUnit',
        'width' => 'getWidth',
        'length' => 'getLength',
        'dimensions_unit' => 'getDimensionsUnit'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['origin_country'] = isset($data['origin_country']) ? $data['origin_country'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['weight_unit'] = isset($data['weight_unit']) ? $data['weight_unit'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['dimensions_unit'] = isset($data['dimensions_unit']) ? $data['dimensions_unit'] : null;
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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code hs_code
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

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
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param string $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets dimensions_unit
     *
     * @return string
     */
    public function getDimensionsUnit()
    {
        return $this->container['dimensions_unit'];
    }

    /**
     * Sets dimensions_unit
     *
     * @param string $dimensions_unit dimensions_unit
     *
     * @return $this
     */
    public function setDimensionsUnit($dimensions_unit)
    {
        $this->container['dimensions_unit'] = $dimensions_unit;

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