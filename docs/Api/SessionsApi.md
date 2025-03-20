# Trinsic\Api\SessionsApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSession()**](SessionsApi.md#cancelSession) | **POST** /api/v1/sessions/{sessionId}/cancel | Cancel Session |
| [**createAdvancedProviderSession()**](SessionsApi.md#createAdvancedProviderSession) | **POST** /api/v1/sessions/provider/advanced | Create Advanced Provider Session |
| [**createHostedProviderSession()**](SessionsApi.md#createHostedProviderSession) | **POST** /api/v1/sessions/provider/hosted | Create Hosted Provider Session |
| [**createWidgetSession()**](SessionsApi.md#createWidgetSession) | **POST** /api/v1/sessions/widget | Create Widget Session |
| [**getSession()**](SessionsApi.md#getSession) | **GET** /api/v1/sessions/{sessionId} | Get Session |
| [**getSessionResult()**](SessionsApi.md#getSessionResult) | **POST** /api/v1/sessions/{sessionId}/results | Get Session Results |
| [**listSessions()**](SessionsApi.md#listSessions) | **GET** /api/v1/sessions/list | List Sessions |
| [**redactSession()**](SessionsApi.md#redactSession) | **POST** /api/v1/sessions/{sessionId}/redact | Redact Session |
| [**refreshStepContent()**](SessionsApi.md#refreshStepContent) | **POST** /api/v1/sessions/{acceptanceSessionId}/step/refresh | Refresh Step Content |


## `cancelSession()`

```php
cancelSession($session_id): \Trinsic\Api\Model\CancelSessionResponse
```

Cancel Session

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

## `createAdvancedProviderSession()`

```php
createAdvancedProviderSession($create_advanced_provider_session_request): \Trinsic\Api\Model\CreateAdvancedProviderSessionResponse
```

Create Advanced Provider Session

Verify a user's identity with a specific provider, handling additional user interaction in your own UI.    Signal which kinds of user interactions your UI can handle using the `Capabilities` field.    If `FallbackToHostedUi` is `true`, Trinsic's hosted UI will automatically be invoked to handle any capabilities you do not support.

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
$create_advanced_provider_session_request = new \Trinsic\Api\Model\CreateAdvancedProviderSessionRequest(); // \Trinsic\Api\Model\CreateAdvancedProviderSessionRequest

try {
    $result = $apiInstance->createAdvancedProviderSession($create_advanced_provider_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->createAdvancedProviderSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_advanced_provider_session_request** | [**\Trinsic\Api\Model\CreateAdvancedProviderSessionRequest**](../Model/CreateAdvancedProviderSessionRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\CreateAdvancedProviderSessionResponse**](../Model/CreateAdvancedProviderSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHostedProviderSession()`

```php
createHostedProviderSession($create_hosted_provider_session_request): \Trinsic\Api\Model\CreateHostedProviderSessionResponse
```

Create Hosted Provider Session

Verify a user's identity with a specific provider, using Trinsic-hosted UI for providers which require additional user interaction.

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
$create_hosted_provider_session_request = new \Trinsic\Api\Model\CreateHostedProviderSessionRequest(); // \Trinsic\Api\Model\CreateHostedProviderSessionRequest

try {
    $result = $apiInstance->createHostedProviderSession($create_hosted_provider_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->createHostedProviderSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_hosted_provider_session_request** | [**\Trinsic\Api\Model\CreateHostedProviderSessionRequest**](../Model/CreateHostedProviderSessionRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\CreateHostedProviderSessionResponse**](../Model/CreateHostedProviderSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWidgetSession()`

```php
createWidgetSession($create_widget_session_request): \Trinsic\Api\Model\CreateWidgetSessionResponse
```

Create Widget Session

Verify a user's identity using Trinsic's hosted Widget flow.

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
$create_widget_session_request = new \Trinsic\Api\Model\CreateWidgetSessionRequest(); // \Trinsic\Api\Model\CreateWidgetSessionRequest

try {
    $result = $apiInstance->createWidgetSession($create_widget_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->createWidgetSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_widget_session_request** | [**\Trinsic\Api\Model\CreateWidgetSessionRequest**](../Model/CreateWidgetSessionRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\CreateWidgetSessionResponse**](../Model/CreateWidgetSessionResponse.md)

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

Get Session

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
$session_id = 'session_id_example'; // string

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

## `getSessionResult()`

```php
getSessionResult($session_id, $get_session_result_request): \Trinsic\Api\Model\GetSessionResultResponse
```

Get Session Results

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
$get_session_result_request = new \Trinsic\Api\Model\GetSessionResultRequest(); // \Trinsic\Api\Model\GetSessionResultRequest

try {
    $result = $apiInstance->getSessionResult($session_id, $get_session_result_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getSessionResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **get_session_result_request** | [**\Trinsic\Api\Model\GetSessionResultRequest**](../Model/GetSessionResultRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\GetSessionResultResponse**](../Model/GetSessionResultResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSessions()`

```php
listSessions($order_by, $order_direction, $page_size, $page): \Trinsic\Api\Model\ListSessionsResponse
```

List Sessions

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

Redact Session

Redact a Session, removing all identity data from Trinsic's servers.  Every application has a redaction period that dictates how long we will hold on to your users' PII data. Once a session falls outside the redaction cutoff date, all PII will automatically be removed from that session.  You can utilize this endpoint to redact a session immediately.                Identity data that a user has chosen to save in their passkey-protected wallet will not be deleted.

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

## `refreshStepContent()`

```php
refreshStepContent($acceptance_session_id, $refresh_step_content_request): \Trinsic\Api\Model\RefreshStepContentResponse
```

Refresh Step Content

Refreshes the content of a Step for an Advanced Provider Session.

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
$acceptance_session_id = 'acceptance_session_id_example'; // string
$refresh_step_content_request = new \Trinsic\Api\Model\RefreshStepContentRequest(); // \Trinsic\Api\Model\RefreshStepContentRequest

try {
    $result = $apiInstance->refreshStepContent($acceptance_session_id, $refresh_step_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->refreshStepContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acceptance_session_id** | **string**|  | |
| **refresh_step_content_request** | [**\Trinsic\Api\Model\RefreshStepContentRequest**](../Model/RefreshStepContentRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\RefreshStepContentResponse**](../Model/RefreshStepContentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
