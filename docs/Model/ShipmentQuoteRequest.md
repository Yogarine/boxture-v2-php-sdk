# # ShipmentQuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**humanId** | **string** | Specify to create/update an existing quote. | [optional] 
**serviceTypeId** | **string** |  | [optional] 
**originatesFrom** | **string** | Name of the origination platform, defaults to &#39;API&#39; | [optional] 
**quantity** | **string** |  | [optional] 
**weight** | **int** |  | [optional] 
**vehicleTypeId** | **string** |  | [optional] 
**comments** | **string** | General comments about the shipment | [optional] 
**customerEmail** | **string** |  | [optional] 
**reference** | **string** | Your reference to this shipment | [optional] 
**customerAccountNumber** | **string** | Your customer&#39;s account number to this shipment | [optional] 
**customerReference** | **string** | Your customer&#39;s reference to this shipment | [optional] 
**servicedAreaGroup** | **string** | Serviced area group | [optional] 
**estimatedStartPlanningAt** | [**\DateTime**](\DateTime.md) |  | [optional] 
**startPlanningAt** | [**\DateTime**](\DateTime.md) |  | [optional] 
**flightNumber** | **string** | Flight number. Example: KL0605 | [optional] 
**waybillNr** | **string** |  | [optional] 
**content** | **string** |  | [optional] 
**origin** | [**\Boxture\V2\Model\LocationRequest**](LocationRequest.md) |  | [optional] 
**destination** | [**\Boxture\V2\Model\LocationRequest**](LocationRequest.md) |  | [optional] 
**lines** | [**\Boxture\V2\Model\ShipmentLineRequest[]**](ShipmentLineRequest.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


