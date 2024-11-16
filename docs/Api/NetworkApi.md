# Trinsic\Api\NetworkApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**identityLookup()**](NetworkApi.md#identityLookup) | **GET** /api/v1/network/identities/{phoneNumber} | Lookup Identity |
| [**listProviders()**](NetworkApi.md#listProviders) | **GET** /api/v1/network/providers | List Identity Providers |
| [**recommendProviders()**](NetworkApi.md#recommendProviders) | **POST** /api/v1/network/recommend | Recommend Providers |


## `identityLookup()`

```php
identityLookup($phone_number): \Trinsic\Api\Model\IdentityLookupResponse
```

Lookup Identity

Query the availability of an identity in the Trinsic Network by phone number

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
$phone_number = 'phone_number_example'; // string

try {
    $result = $apiInstance->identityLookup($phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->identityLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **string**|  | |

### Return type

[**\Trinsic\Api\Model\IdentityLookupResponse**](../Model/IdentityLookupResponse.md)

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

List Identity Providers

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

Generate provider recommendations based on the given signals (phone number, countries, states)

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
