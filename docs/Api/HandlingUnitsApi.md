# Boxture\V2\HandlingUnitsApi

All URIs are relative to *http://staging.localexpress.nl/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHandlingUnits**](HandlingUnitsApi.md#getHandlingUnits) | **GET** /handling_units | List handling units



## getHandlingUnits

> \Boxture\V2\Model\HandlingUnitResponse getHandlingUnits($search, $orderField, $orderDirection, $page, $pageSize)

List handling units

Lists handling units for the channel associated to the authorized user.

### Example

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

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  | [optional]
 **orderField** | **string**| Exact field name you want to sort the output by | [optional]
 **orderDirection** | **string**| Sort direction | [optional] [default to &#39;asc&#39;]
 **page** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Max number of results per page | [optional] [default to 25]

### Return type

[**\Boxture\V2\Model\HandlingUnitResponse**](../Model/HandlingUnitResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

