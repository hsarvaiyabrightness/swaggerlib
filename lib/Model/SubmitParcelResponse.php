<?php
/**
 * SubmitParcelResponse
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
 * SubmitParcelResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubmitParcelResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubmitParcelResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parcel_id' => 'int',
        'service_levels' => '\Swagger\Client\Model\ServiceLevel[]',
        'carrier_tracking_number' => 'string',
        'result' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parcel_id' => 'int32',
        'service_levels' => null,
        'carrier_tracking_number' => null,
        'result' => null
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
        'parcel_id' => 'parcelId',
        'service_levels' => 'serviceLevels',
        'carrier_tracking_number' => 'carrierTrackingNumber',
        'result' => 'result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parcel_id' => 'setParcelId',
        'service_levels' => 'setServiceLevels',
        'carrier_tracking_number' => 'setCarrierTrackingNumber',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parcel_id' => 'getParcelId',
        'service_levels' => 'getServiceLevels',
        'carrier_tracking_number' => 'getCarrierTrackingNumber',
        'result' => 'getResult'
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
        $this->container['parcel_id'] = isset($data['parcel_id']) ? $data['parcel_id'] : null;
        $this->container['service_levels'] = isset($data['service_levels']) ? $data['service_levels'] : null;
        $this->container['carrier_tracking_number'] = isset($data['carrier_tracking_number']) ? $data['carrier_tracking_number'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
     * Gets parcel_id
     *
     * @return int
     */
    public function getParcelId()
    {
        return $this->container['parcel_id'];
    }

    /**
     * Sets parcel_id
     *
     * @param int $parcel_id parcel_id
     *
     * @return $this
     */
    public function setParcelId($parcel_id)
    {
        $this->container['parcel_id'] = $parcel_id;

        return $this;
    }

    /**
     * Gets service_levels
     *
     * @return \Swagger\Client\Model\ServiceLevel[]
     */
    public function getServiceLevels()
    {
        return $this->container['service_levels'];
    }

    /**
     * Sets service_levels
     *
     * @param \Swagger\Client\Model\ServiceLevel[] $service_levels service_levels
     *
     * @return $this
     */
    public function setServiceLevels($service_levels)
    {
        $this->container['service_levels'] = $service_levels;

        return $this;
    }

    /**
     * Gets carrier_tracking_number
     *
     * @return string
     */
    public function getCarrierTrackingNumber()
    {
        return $this->container['carrier_tracking_number'];
    }

    /**
     * Sets carrier_tracking_number
     *
     * @param string $carrier_tracking_number carrier_tracking_number
     *
     * @return $this
     */
    public function setCarrierTrackingNumber($carrier_tracking_number)
    {
        $this->container['carrier_tracking_number'] = $carrier_tracking_number;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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
