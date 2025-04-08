# Trinsic\Api\NetworkApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listProviderContracts()**](NetworkApi.md#listProviderContracts) | **GET** /api/v1/network/providers/contracts | List Provider Contracts |
| [**listProviders()**](NetworkApi.md#listProviders) | **GET** /api/v1/network/providers | List Providers |
| [**recommendProviders()**](NetworkApi.md#recommendProviders) | **POST** /api/v1/network/recommend | Recommend Providers |


## `listProviderContracts()`

```php
listProviderContracts(): \Trinsic\Api\Model\ListProviderContractsResponse
```

List Provider Contracts

List the contracts for all Providers available to your App.              If your App is in test mode, this call will only return Providers available in test mode. If your App is not in test mode, this call will only return Providers available in production.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProviderContracts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->listProviderContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Trinsic\Api\Model\ListProviderContractsResponse**](../Model/ListProviderContractsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProviders()`

```php
listProviders(): \Trinsic\Api\Model\ListProvidersResponse
```

List Providers

List all identity providers available for use

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Trinsic\Api\Model\ListProvidersResponse**](../Model/ListProvidersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recommendProviders()`

```php
recommendProviders($recommend_request): \Trinsic\Api\Model\RecommendResponse
```

Recommend Providers

Generate provider recommendations based on the given signals (phone number, countries, states).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recommend_request = new \Trinsic\Api\Model\RecommendRequest(); // \Trinsic\Api\Model\RecommendRequest

try {
    $result = $apiInstance->recommendProviders($recommend_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->recommendProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recommend_request** | [**\Trinsic\Api\Model\RecommendRequest**](../Model/RecommendRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\RecommendResponse**](../Model/RecommendResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
