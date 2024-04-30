<?php
/**
 * CreateShippingLabelResponse
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
 * Swagger Codegen version: 3.0.51
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
 * CreateShippingLabelResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateShippingLabelResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateShippingLabelResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tracking_number' => 'string',
        'return_tracking_number' => 'string',
        'shipper_reference' => 'string',
        'display_id' => 'string',
        'shipment_id' => 'string',
        'service' => 'string',
        'carrier' => 'string',
        'carrier_tracking_number' => 'string',
        'carrier_local_tracking_number' => 'string',
        'carrier_tracking_url' => 'string',
        'label_format' => 'string',
        'label_type' => 'string',
        'label_image' => 'string',
        'label_url' => 'string',
        'return_label_image' => 'string',
        'return_label_url' => 'string',
        'warning' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tracking_number' => null,
        'return_tracking_number' => null,
        'shipper_reference' => null,
        'display_id' => null,
        'shipment_id' => null,
        'service' => null,
        'carrier' => null,
        'carrier_tracking_number' => null,
        'carrier_local_tracking_number' => null,
        'carrier_tracking_url' => null,
        'label_format' => null,
        'label_type' => null,
        'label_image' => null,
        'label_url' => null,
        'return_label_image' => null,
        'return_label_url' => null,
        'warning' => null
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
        'tracking_number' => 'trackingNumber',
        'return_tracking_number' => 'returnTrackingNumber',
        'shipper_reference' => 'shipperReference',
        'display_id' => 'displayId',
        'shipment_id' => 'shipmentId',
        'service' => 'service',
        'carrier' => 'carrier',
        'carrier_tracking_number' => 'carrierTrackingNumber',
        'carrier_local_tracking_number' => 'carrierLocalTrackingNumber',
        'carrier_tracking_url' => 'carrierTrackingUrl',
        'label_format' => 'labelFormat',
        'label_type' => 'labelType',
        'label_image' => 'labelImage',
        'label_url' => 'labelURL',
        'return_label_image' => 'returnLabelImage',
        'return_label_url' => 'returnLabelURL',
        'warning' => 'warning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_number' => 'setTrackingNumber',
        'return_tracking_number' => 'setReturnTrackingNumber',
        'shipper_reference' => 'setShipperReference',
        'display_id' => 'setDisplayId',
        'shipment_id' => 'setShipmentId',
        'service' => 'setService',
        'carrier' => 'setCarrier',
        'carrier_tracking_number' => 'setCarrierTrackingNumber',
        'carrier_local_tracking_number' => 'setCarrierLocalTrackingNumber',
        'carrier_tracking_url' => 'setCarrierTrackingUrl',
        'label_format' => 'setLabelFormat',
        'label_type' => 'setLabelType',
        'label_image' => 'setLabelImage',
        'label_url' => 'setLabelUrl',
        'return_label_image' => 'setReturnLabelImage',
        'return_label_url' => 'setReturnLabelUrl',
        'warning' => 'setWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_number' => 'getTrackingNumber',
        'return_tracking_number' => 'getReturnTrackingNumber',
        'shipper_reference' => 'getShipperReference',
        'display_id' => 'getDisplayId',
        'shipment_id' => 'getShipmentId',
        'service' => 'getService',
        'carrier' => 'getCarrier',
        'carrier_tracking_number' => 'getCarrierTrackingNumber',
        'carrier_local_tracking_number' => 'getCarrierLocalTrackingNumber',
        'carrier_tracking_url' => 'getCarrierTrackingUrl',
        'label_format' => 'getLabelFormat',
        'label_type' => 'getLabelType',
        'label_image' => 'getLabelImage',
        'label_url' => 'getLabelUrl',
        'return_label_image' => 'getReturnLabelImage',
        'return_label_url' => 'getReturnLabelUrl',
        'warning' => 'getWarning'
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
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['return_tracking_number'] = isset($data['return_tracking_number']) ? $data['return_tracking_number'] : null;
        $this->container['shipper_reference'] = isset($data['shipper_reference']) ? $data['shipper_reference'] : null;
        $this->container['display_id'] = isset($data['display_id']) ? $data['display_id'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['carrier_tracking_number'] = isset($data['carrier_tracking_number']) ? $data['carrier_tracking_number'] : null;
        $this->container['carrier_local_tracking_number'] = isset($data['carrier_local_tracking_number']) ? $data['carrier_local_tracking_number'] : null;
        $this->container['carrier_tracking_url'] = isset($data['carrier_tracking_url']) ? $data['carrier_tracking_url'] : null;
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
        $this->container['label_image'] = isset($data['label_image']) ? $data['label_image'] : null;
        $this->container['label_url'] = isset($data['label_url']) ? $data['label_url'] : null;
        $this->container['return_label_image'] = isset($data['return_label_image']) ? $data['return_label_image'] : null;
        $this->container['return_label_url'] = isset($data['return_label_url']) ? $data['return_label_url'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
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
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number tracking_number
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets return_tracking_number
     *
     * @return string
     */
    public function getReturnTrackingNumber()
    {
        return $this->container['return_tracking_number'];
    }

    /**
     * Sets return_tracking_number
     *
     * @param string $return_tracking_number return_tracking_number
     *
     * @return $this
     */
    public function setReturnTrackingNumber($return_tracking_number)
    {
        $this->container['return_tracking_number'] = $return_tracking_number;

        return $this;
    }

    /**
     * Gets shipper_reference
     *
     * @return string
     */
    public function getShipperReference()
    {
        return $this->container['shipper_reference'];
    }

    /**
     * Sets shipper_reference
     *
     * @param string $shipper_reference shipper_reference
     *
     * @return $this
     */
    public function setShipperReference($shipper_reference)
    {
        $this->container['shipper_reference'] = $shipper_reference;

        return $this;
    }

    /**
     * Gets display_id
     *
     * @return string
     */
    public function getDisplayId()
    {
        return $this->container['display_id'];
    }

    /**
     * Sets display_id
     *
     * @param string $display_id display_id
     *
     * @return $this
     */
    public function setDisplayId($display_id)
    {
        $this->container['display_id'] = $display_id;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets service
     *
     * @return string
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param string $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

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
     * Gets carrier_local_tracking_number
     *
     * @return string
     */
    public function getCarrierLocalTrackingNumber()
    {
        return $this->container['carrier_local_tracking_number'];
    }

    /**
     * Sets carrier_local_tracking_number
     *
     * @param string $carrier_local_tracking_number carrier_local_tracking_number
     *
     * @return $this
     */
    public function setCarrierLocalTrackingNumber($carrier_local_tracking_number)
    {
        $this->container['carrier_local_tracking_number'] = $carrier_local_tracking_number;

        return $this;
    }

    /**
     * Gets carrier_tracking_url
     *
     * @return string
     */
    public function getCarrierTrackingUrl()
    {
        return $this->container['carrier_tracking_url'];
    }

    /**
     * Sets carrier_tracking_url
     *
     * @param string $carrier_tracking_url carrier_tracking_url
     *
     * @return $this
     */
    public function setCarrierTrackingUrl($carrier_tracking_url)
    {
        $this->container['carrier_tracking_url'] = $carrier_tracking_url;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string $label_format label_format
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param string $label_type label_type
     *
     * @return $this
     */
    public function setLabelType($label_type)
    {
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets label_image
     *
     * @return string
     */
    public function getLabelImage()
    {
        return $this->container['label_image'];
    }

    /**
     * Sets label_image
     *
     * @param string $label_image label_image
     *
     * @return $this
     */
    public function setLabelImage($label_image)
    {
        $this->container['label_image'] = $label_image;

        return $this;
    }

    /**
     * Gets label_url
     *
     * @return string
     */
    public function getLabelUrl()
    {
        return $this->container['label_url'];
    }

    /**
     * Sets label_url
     *
     * @param string $label_url label_url
     *
     * @return $this
     */
    public function setLabelUrl($label_url)
    {
        $this->container['label_url'] = $label_url;

        return $this;
    }

    /**
     * Gets return_label_image
     *
     * @return string
     */
    public function getReturnLabelImage()
    {
        return $this->container['return_label_image'];
    }

    /**
     * Sets return_label_image
     *
     * @param string $return_label_image return_label_image
     *
     * @return $this
     */
    public function setReturnLabelImage($return_label_image)
    {
        $this->container['return_label_image'] = $return_label_image;

        return $this;
    }

    /**
     * Gets return_label_url
     *
     * @return string
     */
    public function getReturnLabelUrl()
    {
        return $this->container['return_label_url'];
    }

    /**
     * Sets return_label_url
     *
     * @param string $return_label_url return_label_url
     *
     * @return $this
     */
    public function setReturnLabelUrl($return_label_url)
    {
        $this->container['return_label_url'] = $return_label_url;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return string
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param string $warning warning
     *
     * @return $this
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

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
