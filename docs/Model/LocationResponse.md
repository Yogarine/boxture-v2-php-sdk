# # LocationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**establishment** | **string** | Package width | [optional] 
**administrativeArea** | **string** | first-order civil entity below the country level. For example: Noord-Holland. | [optional] 
**administrativeAreaCode** | **string** | first-order civil entity code below the country level. For example: NH. | [optional] 
**isoCountryCode** | **string** | For example: NL. | [optional] 
**latitude** | **float** | Latitude | [optional] 
**longitude** | **float** | Longitude | [optional] 
**altitude** | **string** |  | [optional] 
**speed** | **string** |  | [optional] 
**course** | **string** |  | [optional] 
**postalCode** | **string** | postal code as used to address postal mail within the country. For example: 1017HL. | [optional] 
**locality** | **string** | incorporated city or town political entity. For example: Amsterdam. | [optional] 
**subLocality** | **string** | first-order civil entity below a locality. For example: Jordaan. | [optional] 
**thoroughfare** | **string** | street. For example: Vijzelstraat. | [optional] 
**subThoroughfare** | **string** | house-number, including additions. For example: 17-3H. | [optional] 
**companyName** | **string** | name of the company. For example: Boxture B.V. | [optional] 
**contact** | **string** | contact for this location | [optional] 
**email** | **string** | email for this location | [optional] 
**comments** | **string** | any useful comments which can help the courier identify the right location | [optional] 
**mobile** | **string** | mobile number. For example: +31612345678 | [optional] 
**formattedAddress** | **string** |  | [optional] 
**subAdministrativeArea** | **string** |  | [optional] 
**timeWindow** | [**\Boxture\V2\Model\TimeWindowResponse**](TimeWindowResponse.md) |  | [optional] 
**user** | [**\Boxture\V2\Model\UserResponseMinimal**](UserResponseMinimal.md) |  | [optional] 
**handling** | **string[]** | Handling to perform for the courier, valid values are: pincode,age16,age18,age21,id,signature,waybill_nr,single_waybill_nr,waybill_nr_seal,waybill_nr_seal_weight,shipment_photo,boarding_pass,seal,tag,questions | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


