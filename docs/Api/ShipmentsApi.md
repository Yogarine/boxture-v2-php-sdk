# Boxture\V2\ShipmentsApi

All URIs are relative to *http://staging.localexpress.nl/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShipments**](ShipmentsApi.md#getShipments) | **GET** /shipments | List shipments
[**getShipmentsId**](ShipmentsApi.md#getShipmentsId) | **GET** /shipments/{id} | 
[**patchShipmentsId**](ShipmentsApi.md#patchShipmentsId) | **PATCH** /shipments/{id} | 
[**postShipments**](ShipmentsApi.md#postShipments) | **POST** /shipments | Shipment quote
[**postShipmentsIdAccept**](ShipmentsApi.md#postShipmentsIdAccept) | **POST** /shipments/{id}/accept | Shipment accept
[**postShipmentsIdAssign**](ShipmentsApi.md#postShipmentsIdAssign) | **POST** /shipments/{id}/assign | Shipment assign
[**postShipmentsIdCancel**](ShipmentsApi.md#postShipmentsIdCancel) | **POST** /shipments/{id}/cancel | Shipment cancel
[**postShipmentsIdDropoff**](ShipmentsApi.md#postShipmentsIdDropoff) | **POST** /shipments/{id}/dropoff | Shipment dropoff
[**postShipmentsIdPickup**](ShipmentsApi.md#postShipmentsIdPickup) | **POST** /shipments/{id}/pickup | Shipment pickup
[**postShipmentsIdPurchase**](ShipmentsApi.md#postShipmentsIdPurchase) | **POST** /shipments/{id}/purchase | Shipment purchase
[**postShipmentsIdReplan**](ShipmentsApi.md#postShipmentsIdReplan) | **POST** /shipments/{id}/replan | Shipment replan



## getShipments

> \Boxture\V2\Model\ShipmentResponse getShipments($state, $search, $waybillNr, $role, $orderField, $orderDirection, $page, $pageSize)

List shipments

Lists shipments associated to the authorized user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'state_example'; // string | state of the shipment to search for
$search = 'search_example'; // string | generic search
$waybillNr = 'waybillNr_example'; // string | waybill_nr on the shipment to search for
$role = 'user'; // string | 
$orderField = 'orderField_example'; // string | Exact field name you want to sort the output by
$orderDirection = 'asc'; // string | Sort direction
$page = 1; // int | Page number
$pageSize = 25; // int | Max number of results per page

try {
    $result = $apiInstance->getShipments($state, $search, $waybillNr, $role, $orderField, $orderDirection, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| state of the shipment to search for | [optional]
 **search** | **string**| generic search | [optional]
 **waybillNr** | **string**| waybill_nr on the shipment to search for | [optional]
 **role** | **string**|  | [optional] [default to &#39;user&#39;]
 **orderField** | **string**| Exact field name you want to sort the output by | [optional]
 **orderDirection** | **string**| Sort direction | [optional] [default to &#39;asc&#39;]
 **page** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Max number of results per page | [optional] [default to 25]

### Return type

[**\Boxture\V2\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getShipmentsId

> \Boxture\V2\Model\ShipmentResponse getShipmentsId($id, $role)



Get shipment detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$role = 'user'; // string | 

try {
    $result = $apiInstance->getShipmentsId($id, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipmentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **role** | **string**|  | [optional] [default to &#39;user&#39;]

### Return type

[**\Boxture\V2\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchShipmentsId

> \Boxture\V2\Model\ShipmentResponse patchShipmentsId($id, $shipments)



Update shipment information, informational changes only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipments = new \Boxture\V2\Model\PatchShipments(); // \Boxture\V2\Model\PatchShipments | 

try {
    $result = $apiInstance->patchShipmentsId($id, $shipments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->patchShipmentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipments** | [**\Boxture\V2\Model\PatchShipments**](../Model/PatchShipments.md)|  |

### Return type

[**\Boxture\V2\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipments

> \Boxture\V2\Model\ShipmentResponse postShipments($shipments)

Shipment quote

Quote a shipment, this will create a new shipment to get a quote, in this state the shipment will not be acted upon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipments = new \Boxture\V2\Model\PostShipments(); // \Boxture\V2\Model\PostShipments | 

try {
    $result = $apiInstance->postShipments($shipments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipments** | [**\Boxture\V2\Model\PostShipments**](../Model/PostShipments.md)|  |

### Return type

[**\Boxture\V2\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdAccept

> postShipmentsIdAccept($id, $shipmentsIdAccept)

Shipment accept

Accept a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdAccept = new \Boxture\V2\Model\PostShipmentsIdAccept(); // \Boxture\V2\Model\PostShipmentsIdAccept | 

try {
    $apiInstance->postShipmentsIdAccept($id, $shipmentsIdAccept);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdAccept** | [**\Boxture\V2\Model\PostShipmentsIdAccept**](../Model/PostShipmentsIdAccept.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdAssign

> postShipmentsIdAssign($id, $shipmentsIdAssign)

Shipment assign

Assign a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdAssign = new \Boxture\V2\Model\PostShipmentsIdAssign(); // \Boxture\V2\Model\PostShipmentsIdAssign | 

try {
    $apiInstance->postShipmentsIdAssign($id, $shipmentsIdAssign);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdAssign** | [**\Boxture\V2\Model\PostShipmentsIdAssign**](../Model/PostShipmentsIdAssign.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdCancel

> postShipmentsIdCancel($id, $shipmentsIdCancel)

Shipment cancel

cancels a shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdCancel = new \Boxture\V2\Model\PostShipmentsIdCancel(); // \Boxture\V2\Model\PostShipmentsIdCancel | 

try {
    $apiInstance->postShipmentsIdCancel($id, $shipmentsIdCancel);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdCancel** | [**\Boxture\V2\Model\PostShipmentsIdCancel**](../Model/PostShipmentsIdCancel.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdDropoff

> postShipmentsIdDropoff($id, $shipmentsIdDropoff)

Shipment dropoff

dropoff a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdDropoff = new \Boxture\V2\Model\PostShipmentsIdDropoff(); // \Boxture\V2\Model\PostShipmentsIdDropoff | 

try {
    $apiInstance->postShipmentsIdDropoff($id, $shipmentsIdDropoff);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdDropoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdDropoff** | [**\Boxture\V2\Model\PostShipmentsIdDropoff**](../Model/PostShipmentsIdDropoff.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdPickup

> postShipmentsIdPickup($id, $shipmentsIdPickup)

Shipment pickup

pickup a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdPickup = new \Boxture\V2\Model\PostShipmentsIdPickup(); // \Boxture\V2\Model\PostShipmentsIdPickup | 

try {
    $apiInstance->postShipmentsIdPickup($id, $shipmentsIdPickup);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdPickup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdPickup** | [**\Boxture\V2\Model\PostShipmentsIdPickup**](../Model/PostShipmentsIdPickup.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdPurchase

> \Boxture\V2\Model\ShipmentResponse postShipmentsIdPurchase($id, $shipmentsIdPurchase)

Shipment purchase

Purchase the shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdPurchase = new \Boxture\V2\Model\PostShipmentsIdPurchase(); // \Boxture\V2\Model\PostShipmentsIdPurchase | 

try {
    $result = $apiInstance->postShipmentsIdPurchase($id, $shipmentsIdPurchase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdPurchase** | [**\Boxture\V2\Model\PostShipmentsIdPurchase**](../Model/PostShipmentsIdPurchase.md)|  |

### Return type

[**\Boxture\V2\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postShipmentsIdReplan

> postShipmentsIdReplan($id, $shipmentsIdReplan)

Shipment replan

replan a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$shipmentsIdReplan = new \Boxture\V2\Model\PostShipmentsIdReplan(); // \Boxture\V2\Model\PostShipmentsIdReplan | 

try {
    $apiInstance->postShipmentsIdReplan($id, $shipmentsIdReplan);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->postShipmentsIdReplan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **shipmentsIdReplan** | [**\Boxture\V2\Model\PostShipmentsIdReplan**](../Model/PostShipmentsIdReplan.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

