<?php
/**
 * ShipmentLineResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Boxture\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Boxture API v2
 *
 * Detailed documentation and test tool for the Boxture API v2
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: support@boxture.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Boxture\V2\Model;

use \ArrayAccess;
use \Boxture\V2\ObjectSerializer;

/**
 * ShipmentLineResponse Class Doc Comment
 *
 * @category Class
 * @package  Boxture\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentLineResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentLineResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'productId' => 'string',
        'quantity' => 'string',
        'comments' => 'string',
        'waybillNr' => 'string',
        'weight' => 'string',
        'handlingUnitId' => 'string',
        'reference' => 'string',
        'customerReference' => 'string',
        'tag' => 'string',
        'boardingPass' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'productId' => null,
        'quantity' => null,
        'comments' => null,
        'waybillNr' => null,
        'weight' => null,
        'handlingUnitId' => null,
        'reference' => null,
        'customerReference' => null,
        'tag' => null,
        'boardingPass' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'productId' => 'product_id',
        'quantity' => 'quantity',
        'comments' => 'comments',
        'waybillNr' => 'waybill_nr',
        'weight' => 'weight',
        'handlingUnitId' => 'handling_unit_id',
        'reference' => 'reference',
        'customerReference' => 'customer_reference',
        'tag' => 'tag',
        'boardingPass' => 'boarding_pass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'productId' => 'setProductId',
        'quantity' => 'setQuantity',
        'comments' => 'setComments',
        'waybillNr' => 'setWaybillNr',
        'weight' => 'setWeight',
        'handlingUnitId' => 'setHandlingUnitId',
        'reference' => 'setReference',
        'customerReference' => 'setCustomerReference',
        'tag' => 'setTag',
        'boardingPass' => 'setBoardingPass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'productId' => 'getProductId',
        'quantity' => 'getQuantity',
        'comments' => 'getComments',
        'waybillNr' => 'getWaybillNr',
        'weight' => 'getWeight',
        'handlingUnitId' => 'getHandlingUnitId',
        'reference' => 'getReference',
        'customerReference' => 'getCustomerReference',
        'tag' => 'getTag',
        'boardingPass' => 'getBoardingPass'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['waybillNr'] = isset($data['waybillNr']) ? $data['waybillNr'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['handlingUnitId'] = isset($data['handlingUnitId']) ? $data['handlingUnitId'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['customerReference'] = isset($data['customerReference']) ? $data['customerReference'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['boardingPass'] = isset($data['boardingPass']) ? $data['boardingPass'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string|null $productId productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets waybillNr
     *
     * @return string|null
     */
    public function getWaybillNr()
    {
        return $this->container['waybillNr'];
    }

    /**
     * Sets waybillNr
     *
     * @param string|null $waybillNr waybillNr
     *
     * @return $this
     */
    public function setWaybillNr($waybillNr)
    {
        $this->container['waybillNr'] = $waybillNr;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string|null $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets handlingUnitId
     *
     * @return string|null
     */
    public function getHandlingUnitId()
    {
        return $this->container['handlingUnitId'];
    }

    /**
     * Sets handlingUnitId
     *
     * @param string|null $handlingUnitId handlingUnitId
     *
     * @return $this
     */
    public function setHandlingUnitId($handlingUnitId)
    {
        $this->container['handlingUnitId'] = $handlingUnitId;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets customerReference
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->container['customerReference'];
    }

    /**
     * Sets customerReference
     *
     * @param string|null $customerReference customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->container['customerReference'] = $customerReference;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets boardingPass
     *
     * @return string|null
     */
    public function getBoardingPass()
    {
        return $this->container['boardingPass'];
    }

    /**
     * Sets boardingPass
     *
     * @param string|null $boardingPass boardingPass
     *
     * @return $this
     */
    public function setBoardingPass($boardingPass)
    {
        $this->container['boardingPass'] = $boardingPass;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


