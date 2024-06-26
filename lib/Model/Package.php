<?php
/**
 * Package
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
 * Package Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Package implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sequence_number' => 'int',
        'package_weight' => 'double',
        'package_width' => 'double',
        'package_height' => 'double',
        'package_depth' => 'double',
        'package_format' => 'string',
        'items' => '\Swagger\Client\Model\Item[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sequence_number' => 'int32',
        'package_weight' => 'double',
        'package_width' => 'double',
        'package_height' => 'double',
        'package_depth' => 'double',
        'package_format' => null,
        'items' => null
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
        'sequence_number' => 'SequenceNumber',
        'package_weight' => 'PackageWeight',
        'package_width' => 'PackageWidth',
        'package_height' => 'PackageHeight',
        'package_depth' => 'PackageDepth',
        'package_format' => 'PackageFormat',
        'items' => 'Items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence_number' => 'setSequenceNumber',
        'package_weight' => 'setPackageWeight',
        'package_width' => 'setPackageWidth',
        'package_height' => 'setPackageHeight',
        'package_depth' => 'setPackageDepth',
        'package_format' => 'setPackageFormat',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence_number' => 'getSequenceNumber',
        'package_weight' => 'getPackageWeight',
        'package_width' => 'getPackageWidth',
        'package_height' => 'getPackageHeight',
        'package_depth' => 'getPackageDepth',
        'package_format' => 'getPackageFormat',
        'items' => 'getItems'
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
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['package_weight'] = isset($data['package_weight']) ? $data['package_weight'] : null;
        $this->container['package_width'] = isset($data['package_width']) ? $data['package_width'] : null;
        $this->container['package_height'] = isset($data['package_height']) ? $data['package_height'] : null;
        $this->container['package_depth'] = isset($data['package_depth']) ? $data['package_depth'] : null;
        $this->container['package_format'] = isset($data['package_format']) ? $data['package_format'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number sequence_number
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets package_weight
     *
     * @return double
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param double $package_weight package_weight
     *
     * @return $this
     */
    public function setPackageWeight($package_weight)
    {
        $this->container['package_weight'] = $package_weight;

        return $this;
    }

    /**
     * Gets package_width
     *
     * @return double
     */
    public function getPackageWidth()
    {
        return $this->container['package_width'];
    }

    /**
     * Sets package_width
     *
     * @param double $package_width package_width
     *
     * @return $this
     */
    public function setPackageWidth($package_width)
    {
        $this->container['package_width'] = $package_width;

        return $this;
    }

    /**
     * Gets package_height
     *
     * @return double
     */
    public function getPackageHeight()
    {
        return $this->container['package_height'];
    }

    /**
     * Sets package_height
     *
     * @param double $package_height package_height
     *
     * @return $this
     */
    public function setPackageHeight($package_height)
    {
        $this->container['package_height'] = $package_height;

        return $this;
    }

    /**
     * Gets package_depth
     *
     * @return double
     */
    public function getPackageDepth()
    {
        return $this->container['package_depth'];
    }

    /**
     * Sets package_depth
     *
     * @param double $package_depth package_depth
     *
     * @return $this
     */
    public function setPackageDepth($package_depth)
    {
        $this->container['package_depth'] = $package_depth;

        return $this;
    }

    /**
     * Gets package_format
     *
     * @return string
     */
    public function getPackageFormat()
    {
        return $this->container['package_format'];
    }

    /**
     * Sets package_format
     *
     * @param string $package_format package_format
     *
     * @return $this
     */
    public function setPackageFormat($package_format)
    {
        $this->container['package_format'] = $package_format;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\Item[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
