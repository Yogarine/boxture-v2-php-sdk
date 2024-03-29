<?php
/**
 * LocationRequest
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
 * LocationRequest Class Doc Comment
 *
 * @category Class
 * @package  Boxture\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LocationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LocationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'establishment' => 'string',
        'administrativeArea' => 'string',
        'administrativeAreaCode' => 'string',
        'isoCountryCode' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'postalCode' => 'string',
        'locality' => 'string',
        'subLocality' => 'string',
        'thoroughfare' => 'string',
        'subThoroughfare' => 'string',
        'timeWindow' => '\Boxture\V2\Model\TimeWindowRequest',
        'companyName' => 'string',
        'contact' => 'string',
        'email' => 'string',
        'comments' => 'string',
        'mobile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'establishment' => null,
        'administrativeArea' => null,
        'administrativeAreaCode' => null,
        'isoCountryCode' => null,
        'latitude' => 'float',
        'longitude' => 'float',
        'postalCode' => null,
        'locality' => null,
        'subLocality' => null,
        'thoroughfare' => null,
        'subThoroughfare' => null,
        'timeWindow' => null,
        'companyName' => null,
        'contact' => null,
        'email' => null,
        'comments' => null,
        'mobile' => null
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
        'establishment' => 'establishment',
        'administrativeArea' => 'administrative_area',
        'administrativeAreaCode' => 'administrative_area_code',
        'isoCountryCode' => 'iso_country_code',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'postalCode' => 'postal_code',
        'locality' => 'locality',
        'subLocality' => 'sub_locality',
        'thoroughfare' => 'thoroughfare',
        'subThoroughfare' => 'sub_thoroughfare',
        'timeWindow' => 'time_window',
        'companyName' => 'company_name',
        'contact' => 'contact',
        'email' => 'email',
        'comments' => 'comments',
        'mobile' => 'mobile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'establishment' => 'setEstablishment',
        'administrativeArea' => 'setAdministrativeArea',
        'administrativeAreaCode' => 'setAdministrativeAreaCode',
        'isoCountryCode' => 'setIsoCountryCode',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'postalCode' => 'setPostalCode',
        'locality' => 'setLocality',
        'subLocality' => 'setSubLocality',
        'thoroughfare' => 'setThoroughfare',
        'subThoroughfare' => 'setSubThoroughfare',
        'timeWindow' => 'setTimeWindow',
        'companyName' => 'setCompanyName',
        'contact' => 'setContact',
        'email' => 'setEmail',
        'comments' => 'setComments',
        'mobile' => 'setMobile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'establishment' => 'getEstablishment',
        'administrativeArea' => 'getAdministrativeArea',
        'administrativeAreaCode' => 'getAdministrativeAreaCode',
        'isoCountryCode' => 'getIsoCountryCode',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'postalCode' => 'getPostalCode',
        'locality' => 'getLocality',
        'subLocality' => 'getSubLocality',
        'thoroughfare' => 'getThoroughfare',
        'subThoroughfare' => 'getSubThoroughfare',
        'timeWindow' => 'getTimeWindow',
        'companyName' => 'getCompanyName',
        'contact' => 'getContact',
        'email' => 'getEmail',
        'comments' => 'getComments',
        'mobile' => 'getMobile'
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
        $this->container['establishment'] = isset($data['establishment']) ? $data['establishment'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['administrativeAreaCode'] = isset($data['administrativeAreaCode']) ? $data['administrativeAreaCode'] : null;
        $this->container['isoCountryCode'] = isset($data['isoCountryCode']) ? $data['isoCountryCode'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['subLocality'] = isset($data['subLocality']) ? $data['subLocality'] : null;
        $this->container['thoroughfare'] = isset($data['thoroughfare']) ? $data['thoroughfare'] : null;
        $this->container['subThoroughfare'] = isset($data['subThoroughfare']) ? $data['subThoroughfare'] : null;
        $this->container['timeWindow'] = isset($data['timeWindow']) ? $data['timeWindow'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
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
     * Gets establishment
     *
     * @return string|null
     */
    public function getEstablishment()
    {
        return $this->container['establishment'];
    }

    /**
     * Sets establishment
     *
     * @param string|null $establishment Package width
     *
     * @return $this
     */
    public function setEstablishment($establishment)
    {
        $this->container['establishment'] = $establishment;

        return $this;
    }

    /**
     * Gets administrativeArea
     *
     * @return string|null
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     *
     * @param string|null $administrativeArea first-order civil entity below the country level. For example: Noord-Holland.
     *
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets administrativeAreaCode
     *
     * @return string|null
     */
    public function getAdministrativeAreaCode()
    {
        return $this->container['administrativeAreaCode'];
    }

    /**
     * Sets administrativeAreaCode
     *
     * @param string|null $administrativeAreaCode first-order civil entity code below the country level. For example: NH.
     *
     * @return $this
     */
    public function setAdministrativeAreaCode($administrativeAreaCode)
    {
        $this->container['administrativeAreaCode'] = $administrativeAreaCode;

        return $this;
    }

    /**
     * Gets isoCountryCode
     *
     * @return string|null
     */
    public function getIsoCountryCode()
    {
        return $this->container['isoCountryCode'];
    }

    /**
     * Sets isoCountryCode
     *
     * @param string|null $isoCountryCode For example: NL.
     *
     * @return $this
     */
    public function setIsoCountryCode($isoCountryCode)
    {
        $this->container['isoCountryCode'] = $isoCountryCode;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude Latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude Longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode postal code as used to address postal mail within the country. For example: 1017HL.
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality incorporated city or town political entity. For example: Amsterdam.
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets subLocality
     *
     * @return string|null
     */
    public function getSubLocality()
    {
        return $this->container['subLocality'];
    }

    /**
     * Sets subLocality
     *
     * @param string|null $subLocality first-order civil entity below a locality. For example: Amsterdam.
     *
     * @return $this
     */
    public function setSubLocality($subLocality)
    {
        $this->container['subLocality'] = $subLocality;

        return $this;
    }

    /**
     * Gets thoroughfare
     *
     * @return string|null
     */
    public function getThoroughfare()
    {
        return $this->container['thoroughfare'];
    }

    /**
     * Sets thoroughfare
     *
     * @param string|null $thoroughfare street. For example: Vijzelstraat.
     *
     * @return $this
     */
    public function setThoroughfare($thoroughfare)
    {
        $this->container['thoroughfare'] = $thoroughfare;

        return $this;
    }

    /**
     * Gets subThoroughfare
     *
     * @return string|null
     */
    public function getSubThoroughfare()
    {
        return $this->container['subThoroughfare'];
    }

    /**
     * Sets subThoroughfare
     *
     * @param string|null $subThoroughfare house-number, including additions. For example: 17-3H.
     *
     * @return $this
     */
    public function setSubThoroughfare($subThoroughfare)
    {
        $this->container['subThoroughfare'] = $subThoroughfare;

        return $this;
    }

    /**
     * Gets timeWindow
     *
     * @return \Boxture\V2\Model\TimeWindowRequest|null
     */
    public function getTimeWindow()
    {
        return $this->container['timeWindow'];
    }

    /**
     * Sets timeWindow
     *
     * @param \Boxture\V2\Model\TimeWindowRequest|null $timeWindow timeWindow
     *
     * @return $this
     */
    public function setTimeWindow($timeWindow)
    {
        $this->container['timeWindow'] = $timeWindow;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName name of the company. For example: Boxture B.V.
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string|null $contact contact for this location
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email for this location
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string|null $comments any useful comments which can help the courier identify the right location
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile mobile number. For example: +31612345678
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

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


