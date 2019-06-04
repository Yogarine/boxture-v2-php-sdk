# boxture-v2-sdk-php

Detailed documentation and test tool for the Boxture API v2

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.0.1
- Package version: 0.1.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/yogarine/boxture-v2-sdk-php.git"
    }
  ],
  "require": {
    "yogarine/boxture-v2-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/boxture-v2-sdk-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api_key
$config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Boxture\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Boxture\V2\Api\HandlingUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | 
$orderField = 'orderField_example'; // string | Exact field name you want to sort the output by
$orderDirection = 'asc'; // string | Sort direction
$page = 1; // int | Page number
$pageSize = 25; // int | Max number of results per page

try {
    $result = $apiInstance->getHandlingUnits($search, $orderField, $orderDirection, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HandlingUnitsApi->getHandlingUnits: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://staging.localexpress.nl/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*HandlingUnitsApi* | [**getHandlingUnits**](docs/Api/HandlingUnitsApi.md#gethandlingunits) | **GET** /handling_units | List handling units
*ShipmentsApi* | [**getShipments**](docs/Api/ShipmentsApi.md#getshipments) | **GET** /shipments | List shipments
*ShipmentsApi* | [**getShipmentsId**](docs/Api/ShipmentsApi.md#getshipmentsid) | **GET** /shipments/{id} | 
*ShipmentsApi* | [**patchShipmentsId**](docs/Api/ShipmentsApi.md#patchshipmentsid) | **PATCH** /shipments/{id} | 
*ShipmentsApi* | [**postShipments**](docs/Api/ShipmentsApi.md#postshipments) | **POST** /shipments | Shipment quote
*ShipmentsApi* | [**postShipmentsIdAccept**](docs/Api/ShipmentsApi.md#postshipmentsidaccept) | **POST** /shipments/{id}/accept | Shipment accept
*ShipmentsApi* | [**postShipmentsIdAssign**](docs/Api/ShipmentsApi.md#postshipmentsidassign) | **POST** /shipments/{id}/assign | Shipment assign
*ShipmentsApi* | [**postShipmentsIdCancel**](docs/Api/ShipmentsApi.md#postshipmentsidcancel) | **POST** /shipments/{id}/cancel | Shipment cancel
*ShipmentsApi* | [**postShipmentsIdDropoff**](docs/Api/ShipmentsApi.md#postshipmentsiddropoff) | **POST** /shipments/{id}/dropoff | Shipment dropoff
*ShipmentsApi* | [**postShipmentsIdPickup**](docs/Api/ShipmentsApi.md#postshipmentsidpickup) | **POST** /shipments/{id}/pickup | Shipment pickup
*ShipmentsApi* | [**postShipmentsIdPurchase**](docs/Api/ShipmentsApi.md#postshipmentsidpurchase) | **POST** /shipments/{id}/purchase | Shipment purchase
*ShipmentsApi* | [**postShipmentsIdReplan**](docs/Api/ShipmentsApi.md#postshipmentsidreplan) | **POST** /shipments/{id}/replan | Shipment replan


## Documentation For Models

 - [CompanyResponseMinimal](docs/Model/CompanyResponseMinimal.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [HandlingUnitResponse](docs/Model/HandlingUnitResponse.md)
 - [LocationRequest](docs/Model/LocationRequest.md)
 - [LocationResponse](docs/Model/LocationResponse.md)
 - [PatchShipments](docs/Model/PatchShipments.md)
 - [PostShipments](docs/Model/PostShipments.md)
 - [PostShipmentsIdAccept](docs/Model/PostShipmentsIdAccept.md)
 - [PostShipmentsIdAssign](docs/Model/PostShipmentsIdAssign.md)
 - [PostShipmentsIdCancel](docs/Model/PostShipmentsIdCancel.md)
 - [PostShipmentsIdDropoff](docs/Model/PostShipmentsIdDropoff.md)
 - [PostShipmentsIdPickup](docs/Model/PostShipmentsIdPickup.md)
 - [PostShipmentsIdPurchase](docs/Model/PostShipmentsIdPurchase.md)
 - [PostShipmentsIdReplan](docs/Model/PostShipmentsIdReplan.md)
 - [RetailerResponseMinimal](docs/Model/RetailerResponseMinimal.md)
 - [ServiceTypeDropoffOfferResponse](docs/Model/ServiceTypeDropoffOfferResponse.md)
 - [ServiceTypeResponse](docs/Model/ServiceTypeResponse.md)
 - [ShipmentAcceptRequest](docs/Model/ShipmentAcceptRequest.md)
 - [ShipmentAssignRequest](docs/Model/ShipmentAssignRequest.md)
 - [ShipmentCancelRequest](docs/Model/ShipmentCancelRequest.md)
 - [ShipmentDropoffLineRequest](docs/Model/ShipmentDropoffLineRequest.md)
 - [ShipmentDropoffRequest](docs/Model/ShipmentDropoffRequest.md)
 - [ShipmentLineRequest](docs/Model/ShipmentLineRequest.md)
 - [ShipmentLineResponse](docs/Model/ShipmentLineResponse.md)
 - [ShipmentPickupLineRequest](docs/Model/ShipmentPickupLineRequest.md)
 - [ShipmentPickupRequest](docs/Model/ShipmentPickupRequest.md)
 - [ShipmentPurchaseRequest](docs/Model/ShipmentPurchaseRequest.md)
 - [ShipmentQuoteRequest](docs/Model/ShipmentQuoteRequest.md)
 - [ShipmentReplanRequest](docs/Model/ShipmentReplanRequest.md)
 - [ShipmentResponse](docs/Model/ShipmentResponse.md)
 - [ShipmentResponseServiceTypes](docs/Model/ShipmentResponseServiceTypes.md)
 - [ShipmentStateTransitionResponse](docs/Model/ShipmentStateTransitionResponse.md)
 - [ShipmentUpdateLineRequest](docs/Model/ShipmentUpdateLineRequest.md)
 - [ShipmentUpdateRequest](docs/Model/ShipmentUpdateRequest.md)
 - [TimeWindowRequest](docs/Model/TimeWindowRequest.md)
 - [TimeWindowResponse](docs/Model/TimeWindowResponse.md)
 - [UserResponseMinimal](docs/Model/UserResponseMinimal.md)


## Documentation For Authorization



## api_key


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author

support@boxture.com

