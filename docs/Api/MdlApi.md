# Trinsic\Api\MdlApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMdlExchange()**](MdlApi.md#createMdlExchange) | **POST** /api/valpha/mdl/exchanges/create | Create mDL Exchange |
| [**finalizeMdlExchange()**](MdlApi.md#finalizeMdlExchange) | **POST** /api/valpha/mdl/exchanges/finalize | Finalize mDL Exchange |


## `createMdlExchange()`

```php
createMdlExchange($create_mdl_exchange_request): \Trinsic\Api\Model\CreateMdlExchangeResponse
```

Create mDL Exchange

Creates a new mDL Exchange, returning an exchange ID, request object string, and context string.              mDL Exchanges are ephemeral until completion -- no state is stored within Trinsic until the exchange is finalized.              This API currently only supports Google Wallet on Android via Web or Native. Apple Wallet support is coming soon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\MdlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_mdl_exchange_request = new \Trinsic\Api\Model\CreateMdlExchangeRequest(); // \Trinsic\Api\Model\CreateMdlExchangeRequest

try {
    $result = $apiInstance->createMdlExchange($create_mdl_exchange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdlApi->createMdlExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_mdl_exchange_request** | [**\Trinsic\Api\Model\CreateMdlExchangeRequest**](../Model/CreateMdlExchangeRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\CreateMdlExchangeResponse**](../Model/CreateMdlExchangeResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeMdlExchange()`

```php
finalizeMdlExchange($finalize_mdl_exchange_request): \Trinsic\Api\Model\FinalizeMdlExchangeResponse
```

Finalize mDL Exchange

Finalizes an mDL Exchange, processing the results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\MdlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finalize_mdl_exchange_request = new \Trinsic\Api\Model\FinalizeMdlExchangeRequest(); // \Trinsic\Api\Model\FinalizeMdlExchangeRequest | 

try {
    $result = $apiInstance->finalizeMdlExchange($finalize_mdl_exchange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MdlApi->finalizeMdlExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **finalize_mdl_exchange_request** | [**\Trinsic\Api\Model\FinalizeMdlExchangeRequest**](../Model/FinalizeMdlExchangeRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\FinalizeMdlExchangeResponse**](../Model/FinalizeMdlExchangeResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
