# Trinsic\Api\ProvidersApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listProviders()**](ProvidersApi.md#listProviders) | **GET** /api/v1/providers | List Providers |


## `listProviders()`

```php
listProviders($licensed): \Trinsic\Api\Model\ListProvidersResponse
```

List Providers

List all identity providers available to your Organization, including their license status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$licensed = True; // bool | Filter by license status. If not specified, returns all providers.

try {
    $result = $apiInstance->listProviders($licensed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **licensed** | **bool**| Filter by license status. If not specified, returns all providers. | [optional] |

### Return type

[**\Trinsic\Api\Model\ListProvidersResponse**](../Model/ListProvidersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
