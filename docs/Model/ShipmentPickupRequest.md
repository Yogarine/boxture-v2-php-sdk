# # ShipmentPickupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickedupAt** | [**\DateTime**](\DateTime.md) | Pickup date/time, you can leave this empty to use the current date/time | [optional] 
**waybillNr** | **string** | Waybill number on shipment level (consult your channel settings). &lt;br&gt;Only needed when a waybill is needed for pickup (check handling options). | 
**waybillNrConfirmation** | **string** | Waybill number confirmation on shipment level (consult your channel settings).&lt;br&gt;Only needed when a waybill is know at pickup time. | 
**pickupCodeConfirmation** | **string** |  | [optional] 
**lines** | [**\Boxture\V2\Model\ShipmentPickupLineRequest[]**](ShipmentPickupLineRequest.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


