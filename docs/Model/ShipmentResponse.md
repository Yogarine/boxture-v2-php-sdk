# # ShipmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**sgid** | **string** | Signed id able to access the portal for 8 hours | [optional] 
**humanId** | **string** | Human readable/rememberable id | [optional] 
**serviceTypeId** | **string** |  | [optional] 
**state** | **string** |  | [optional] 
**channelId** | **string** |  | [optional] 
**companyId** | **string** |  | [optional] 
**courierId** | **string** |  | [optional] 
**quantity** | **int** |  | [optional] 
**weight** | **string** |  | [optional] 
**vehicleTypeId** | **string** |  | [optional] 
**comments** | **string** |  | [optional] 
**jobNumber** | **string** |  | [optional] 
**reference** | **string** |  | [optional] 
**customerReference** | **string** |  | [optional] 
**content** | **string** |  | [optional] 
**servicedAreaGroup** | **string** |  | [optional] 
**flightNumber** | **string** |  | [optional] 
**waybillNr** | **string** |  | [optional] 
**price** | **float** |  | [optional] 
**currency** | **string** |  | [optional] 
**distance** | **string** |  | [optional] 
**duration** | **string** |  | [optional] 
**finalConsignee** | **string** |  | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updatedAt** | [**\DateTime**](\DateTime.md) |  | [optional] 
**droppedoffAt** | [**\DateTime**](\DateTime.md) |  | [optional] 
**pickedupAt** | [**\DateTime**](\DateTime.md) |  | [optional] 
**serviceTypes** | [**\Boxture\V2\Model\ShipmentResponseServiceTypes**](ShipmentResponseServiceTypes.md) |  | [optional] 
**origin** | [**\Boxture\V2\Model\LocationResponse**](LocationResponse.md) |  | [optional] 
**destination** | [**\Boxture\V2\Model\LocationResponse**](LocationResponse.md) |  | [optional] 
**customer** | [**\Boxture\V2\Model\UserResponseMinimal**](UserResponseMinimal.md) |  | [optional] 
**user** | [**\Boxture\V2\Model\UserResponseMinimal**](UserResponseMinimal.md) |  | [optional] 
**courier** | [**\Boxture\V2\Model\UserResponseMinimal**](UserResponseMinimal.md) |  | [optional] 
**company** | [**\Boxture\V2\Model\CompanyResponseMinimal**](CompanyResponseMinimal.md) |  | [optional] 
**retailer** | [**\Boxture\V2\Model\RetailerResponseMinimal**](RetailerResponseMinimal.md) |  | [optional] 
**lines** | [**\Boxture\V2\Model\ShipmentLineResponse[]**](ShipmentLineResponse.md) |  | [optional] 
**shipmentStateTransitions** | [**\Boxture\V2\Model\ShipmentStateTransitionResponse[]**](ShipmentStateTransitionResponse.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


