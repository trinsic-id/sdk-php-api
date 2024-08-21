# Trinsic\Api\SessionsApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSession()**](SessionsApi.md#cancelSession) | **POST** /api/v1/sessions/{sessionId}/cancel | Cancel a Session by its ID |
| [**createSession()**](SessionsApi.md#createSession) | **POST** /api/v1/sessions | Create a Session to verify a user&#39;s identity |
| [**exchangeResultsKey()**](SessionsApi.md#exchangeResultsKey) | **POST** /api/v1/sessions/{sessionId}/results/exchange | Exchange a Results Access Key for Identity Data |
| [**getSession()**](SessionsApi.md#getSession) | **GET** /api/v1/sessions/{sessionId} | Get a Session by its ID |
| [**listSessions()**](SessionsApi.md#listSessions) | **GET** /api/v1/sessions | List Sessions created by your account |
| [**redactSession()**](SessionsApi.md#redactSession) | **POST** /api/v1/sessions/{sessionId}/redact | Redact a Session, removing all identity data from Trinsic&#39;s servers.                Identity data that a user has chosen to save in their passkey-protected wallet will not be deleted. |


## `cancelSession()`

```php
cancelSession($session_id): \Trinsic\Api\Model\CancelSessionResponse
```

Cancel a Session by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->cancelSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->cancelSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\Trinsic\Api\Model\CancelSessionResponse**](../Model/CancelSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSession()`

```php
createSession($create_session_request): \Trinsic\Api\Model\CreateSessionResponse
```

Create a Session to verify a user's identity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_session_request = new \Trinsic\Api\Model\CreateSessionRequest(); // \Trinsic\Api\Model\CreateSessionRequest

try {
    $result = $apiInstance->createSession($create_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_session_request** | [**\Trinsic\Api\Model\CreateSessionRequest**](../Model/CreateSessionRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\CreateSessionResponse**](../Model/CreateSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeResultsKey()`

```php
exchangeResultsKey($session_id, $exchange_results_key_request): \Trinsic\Api\Model\ExchangeResultsKeyResponse
```

Exchange a Results Access Key for Identity Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$exchange_results_key_request = new \Trinsic\Api\Model\ExchangeResultsKeyRequest(); // \Trinsic\Api\Model\ExchangeResultsKeyRequest

try {
    $result = $apiInstance->exchangeResultsKey($session_id, $exchange_results_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->exchangeResultsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **exchange_results_key_request** | [**\Trinsic\Api\Model\ExchangeResultsKeyRequest**](../Model/ExchangeResultsKeyRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\ExchangeResultsKeyResponse**](../Model/ExchangeResultsKeyResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSession()`

```php
getSession($session_id): \Trinsic\Api\Model\GetSessionResponse
```

Get a Session by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | 

try {
    $result = $apiInstance->getSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\Trinsic\Api\Model\GetSessionResponse**](../Model/GetSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSessions()`

```php
listSessions($order_by, $order_direction, $page_size, $page): \Trinsic\Api\Model\ListSessionsResponse
```

List Sessions created by your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_by = Created; // \Trinsic\Api\Model\SessionOrdering | The field by which sessions should be ordered
$order_direction = Descending; // \Trinsic\Api\Model\OrderDirection
$page_size = 50; // int | The number of items to return per page -- must be between `1` and `50`
$page = 1; // int | The page number to return -- starts at `1`

try {
    $result = $apiInstance->listSessions($order_by, $order_direction, $page_size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->listSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_by** | [**\Trinsic\Api\Model\SessionOrdering**](../Model/.md)| The field by which sessions should be ordered | [optional] |
| **order_direction** | [**\Trinsic\Api\Model\OrderDirection**](../Model/.md)|  | [optional] |
| **page_size** | **int**| The number of items to return per page -- must be between &#x60;1&#x60; and &#x60;50&#x60; | [optional] |
| **page** | **int**| The page number to return -- starts at &#x60;1&#x60; | [optional] |

### Return type

[**\Trinsic\Api\Model\ListSessionsResponse**](../Model/ListSessionsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redactSession()`

```php
redactSession($session_id)
```

Redact a Session, removing all identity data from Trinsic's servers.                Identity data that a user has chosen to save in their passkey-protected wallet will not be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string

try {
    $apiInstance->redactSession($session_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->redactSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
