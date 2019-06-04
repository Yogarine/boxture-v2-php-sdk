<?php
/**
 * ShipmentQuoteRequest
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
 * ShipmentQuoteRequest Class Doc Comment
 *
 * @category Class
 * @package  Boxture\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentQuoteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentQuoteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'humanId' => 'string',
        'serviceTypeId' => 'string',
        'originatesFrom' => 'string',
        'quantity' => 'string',
        'weight' => 'int',
        'vehicleTypeId' => 'string',
        'comments' => 'string',
        'customerEmail' => 'string',
        'reference' => 'string',
        'customerAccountNumber' => 'string',
        'customerReference' => 'string',
        'servicedAreaGroup' => 'string',
        'estimatedStartPlanningAt' => '\DateTime',
        'startPlanningAt' => '\DateTime',
        'flightNumber' => 'string',
        'waybillNr' => 'string',
        'content' => 'string',
        'origin' => '\Boxture\V2\Model\LocationRequest',
        'destination' => '\Boxture\V2\Model\LocationRequest',
        'lines' => '\Boxture\V2\Model\ShipmentLineRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'humanId' => null,
        'serviceTypeId' => null,
        'originatesFrom' => null,
        'quantity' => null,
        'weight' => 'int32',
        'vehicleTypeId' => null,
        'comments' => null,
        'customerEmail' => null,
        'reference' => null,
        'customerAccountNumber' => null,
        'customerReference' => null,
        'servicedAreaGroup' => null,
        'estimatedStartPlanningAt' => 'date',
        'startPlanningAt' => 'date',
        'flightNumber' => null,
        'waybillNr' => null,
        'content' => null,
        'origin' => null,
        'destination' => null,
        'lines' => null
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
        'humanId' => 'human_id',
        'serviceTypeId' => 'service_type_id',
        'originatesFrom' => 'originates_from',
        'quantity' => 'quantity',
        'weight' => 'weight',
        'vehicleTypeId' => 'vehicle_type_id',
        'comments' => 'comments',
        'customerEmail' => 'customer_email',
        'reference' => 'reference',
        'customerAccountNumber' => 'customer_account_number',
        'customerReference' => 'customer_reference',
        'servicedAreaGroup' => 'serviced_area_group',
        'estimatedStartPlanningAt' => 'estimated_start_planning_at',
        'startPlanningAt' => 'start_planning_at',
        'flightNumber' => 'flight_number',
        'waybillNr' => 'waybill_nr',
        'content' => 'content',
        'origin' => 'origin',
        'destination' => 'destination',
        'lines' => 'lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'humanId' => 'setHumanId',
        'serviceTypeId' => 'setServiceTypeId',
        'originatesFrom' => 'setOriginatesFrom',
        'quantity' => 'setQuantity',
        'weight' => 'setWeight',
        'vehicleTypeId' => 'setVehicleTypeId',
        'comments' => 'setComments',
        'customerEmail' => 'setCustomerEmail',
        'reference' => 'setReference',
        'customerAccountNumber' => 'setCustomerAccountNumber',
        'customerReference' => 'setCustomerReference',
        'servicedAreaGroup' => 'setServicedAreaGroup',
        'estimatedStartPlanningAt' => 'setEstimatedStartPlanningAt',
        'startPlanningAt' => 'setStartPlanningAt',
        'flightNumber' => 'setFlightNumber',
        'waybillNr' => 'setWaybillNr',
        'content' => 'setContent',
        'origin' => 'setOrigin',
        'destination' => 'setDestination',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'humanId' => 'getHumanId',
        'serviceTypeId' => 'getServiceTypeId',
        'originatesFrom' => 'getOriginatesFrom',
        'quantity' => 'getQuantity',
        'weight' => 'getWeight',
        'vehicleTypeId' => 'getVehicleTypeId',
        'comments' => 'getComments',
        'customerEmail' => 'getCustomerEmail',
        'reference' => 'getReference',
        'customerAccountNumber' => 'getCustomerAccountNumber',
        'customerReference' => 'getCustomerReference',
        'servicedAreaGroup' => 'getServicedAreaGroup',
        'estimatedStartPlanningAt' => 'getEstimatedStartPlanningAt',
        'startPlanningAt' => 'getStartPlanningAt',
        'flightNumber' => 'getFlightNumber',
        'waybillNr' => 'getWaybillNr',
        'content' => 'getContent',
        'origin' => 'getOrigin',
        'destination' => 'getDestination',
        'lines' => 'getLines'
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
        $this->container['humanId'] = isset($data['humanId']) ? $data['humanId'] : null;
        $this->container['serviceTypeId'] = isset($data['serviceTypeId']) ? $data['serviceTypeId'] : null;
        $this->container['originatesFrom'] = isset($data['originatesFrom']) ? $data['originatesFrom'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['vehicleTypeId'] = isset($data['vehicleTypeId']) ? $data['vehicleTypeId'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['customerEmail'] = isset($data['customerEmail']) ? $data['customerEmail'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['customerAccountNumber'] = isset($data['customerAccountNumber']) ? $data['customerAccountNumber'] : null;
        $this->container['customerReference'] = isset($data['customerReference']) ? $data['customerReference'] : null;
        $this->container['servicedAreaGroup'] = isset($data['servicedAreaGroup']) ? $data['servicedAreaGroup'] : null;
        $this->container['estimatedStartPlanningAt'] = isset($data['estimatedStartPlanningAt']) ? $data['estimatedStartPlanningAt'] : null;
        $this->container['startPlanningAt'] = isset($data['startPlanningAt']) ? $data['startPlanningAt'] : null;
        $this->container['flightNumber'] = isset($data['flightNumber']) ? $data['flightNumber'] : null;
        $this->container['waybillNr'] = isset($data['waybillNr']) ? $data['waybillNr'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
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
     * Gets humanId
     *
     * @return string|null
     */
    public function getHumanId()
    {
        return $this->container['humanId'];
    }

    /**
     * Sets humanId
     *
     * @param string|null $humanId Specify to create/update an existing quote.
     *
     * @return $this
     */
    public function setHumanId($humanId)
    {
        $this->container['humanId'] = $humanId;

        return $this;
    }

    /**
     * Gets serviceTypeId
     *
     * @return string|null
     */
    public function getServiceTypeId()
    {
        return $this->container['serviceTypeId'];
    }

    /**
     * Sets serviceTypeId
     *
     * @param string|null $serviceTypeId serviceTypeId
     *
     * @return $this
     */
    public function setServiceTypeId($serviceTypeId)
    {
        $this->container['serviceTypeId'] = $serviceTypeId;

        return $this;
    }

    /**
     * Gets originatesFrom
     *
     * @return string|null
     */
    public function getOriginatesFrom()
    {
        return $this->container['originatesFrom'];
    }

    /**
     * Sets originatesFrom
     *
     * @param string|null $originatesFrom Name of the origination platform, defaults to 'API'
     *
     * @return $this
     */
    public function setOriginatesFrom($originatesFrom)
    {
        $this->container['originatesFrom'] = $originatesFrom;

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
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets vehicleTypeId
     *
     * @return string|null
     */
    public function getVehicleTypeId()
    {
        return $this->container['vehicleTypeId'];
    }

    /**
     * Sets vehicleTypeId
     *
     * @param string|null $vehicleTypeId vehicleTypeId
     *
     * @return $this
     */
    public function setVehicleTypeId($vehicleTypeId)
    {
        $this->container['vehicleTypeId'] = $vehicleTypeId;

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
     * @param string|null $comments General comments about the shipment
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets customerEmail
     *
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->container['customerEmail'];
    }

    /**
     * Sets customerEmail
     *
     * @param string|null $customerEmail customerEmail
     *
     * @return $this
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->container['customerEmail'] = $customerEmail;

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
     * @param string|null $reference Your reference to this shipment
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets customerAccountNumber
     *
     * @return string|null
     */
    public function getCustomerAccountNumber()
    {
        return $this->container['customerAccountNumber'];
    }

    /**
     * Sets customerAccountNumber
     *
     * @param string|null $customerAccountNumber Your customer's account number to this shipment
     *
     * @return $this
     */
    public function setCustomerAccountNumber($customerAccountNumber)
    {
        $this->container['customerAccountNumber'] = $customerAccountNumber;

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
     * @param string|null $customerReference Your customer's reference to this shipment
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->container['customerReference'] = $customerReference;

        return $this;
    }

    /**
     * Gets servicedAreaGroup
     *
     * @return string|null
     */
    public function getServicedAreaGroup()
    {
        return $this->container['servicedAreaGroup'];
    }

    /**
     * Sets servicedAreaGroup
     *
     * @param string|null $servicedAreaGroup Serviced area group
     *
     * @return $this
     */
    public function setServicedAreaGroup($servicedAreaGroup)
    {
        $this->container['servicedAreaGroup'] = $servicedAreaGroup;

        return $this;
    }

    /**
     * Gets estimatedStartPlanningAt
     *
     * @return \DateTime|null
     */
    public function getEstimatedStartPlanningAt()
    {
        return $this->container['estimatedStartPlanningAt'];
    }

    /**
     * Sets estimatedStartPlanningAt
     *
     * @param \DateTime|null $estimatedStartPlanningAt estimatedStartPlanningAt
     *
     * @return $this
     */
    public function setEstimatedStartPlanningAt($estimatedStartPlanningAt)
    {
        $this->container['estimatedStartPlanningAt'] = $estimatedStartPlanningAt;

        return $this;
    }

    /**
     * Gets startPlanningAt
     *
     * @return \DateTime|null
     */
    public function getStartPlanningAt()
    {
        return $this->container['startPlanningAt'];
    }

    /**
     * Sets startPlanningAt
     *
     * @param \DateTime|null $startPlanningAt startPlanningAt
     *
     * @return $this
     */
    public function setStartPlanningAt($startPlanningAt)
    {
        $this->container['startPlanningAt'] = $startPlanningAt;

        return $this;
    }

    /**
     * Gets flightNumber
     *
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->container['flightNumber'];
    }

    /**
     * Sets flightNumber
     *
     * @param string|null $flightNumber Flight number. Example: KL0605
     *
     * @return $this
     */
    public function setFlightNumber($flightNumber)
    {
        $this->container['flightNumber'] = $flightNumber;

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
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return \Boxture\V2\Model\LocationRequest|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param \Boxture\V2\Model\LocationRequest|null $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \Boxture\V2\Model\LocationRequest|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \Boxture\V2\Model\LocationRequest|null $destination destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Boxture\V2\Model\ShipmentLineRequest[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Boxture\V2\Model\ShipmentLineRequest[]|null $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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

