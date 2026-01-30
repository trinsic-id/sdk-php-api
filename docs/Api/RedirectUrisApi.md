# Trinsic\Api\RedirectUrisApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**add()**](RedirectUrisApi.md#add) | **POST** /api/valpha/redirect-uris | Add Redirect URI |
| [**callList()**](RedirectUrisApi.md#callList) | **GET** /api/valpha/redirect-uris | List Redirect URIs |
| [**delete()**](RedirectUrisApi.md#delete) | **DELETE** /api/valpha/redirect-uris/{id} | Delete Redirect URI |


## `add()`

```php
add($add_redirect_uri_request): \Trinsic\Api\Model\AddRedirectUriResponse
```

Add Redirect URI

Add a new redirect uri to the authenticated environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\RedirectUrisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_redirect_uri_request = new \Trinsic\Api\Model\AddRedirectUriRequest(); // \Trinsic\Api\Model\AddRedirectUriRequest | Request for uri to add to the environment. Must be absolute, not relative. Wildcard \"*\" accepted.

try {
    $result = $apiInstance->add($add_redirect_uri_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedirectUrisApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_redirect_uri_request** | [**\Trinsic\Api\Model\AddRedirectUriRequest**](../Model/AddRedirectUriRequest.md)| Request for uri to add to the environment. Must be absolute, not relative. Wildcard \&quot;*\&quot; accepted. | [optional] |

### Return type

[**\Trinsic\Api\Model\AddRedirectUriResponse**](../Model/AddRedirectUriResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `callList()`

```php
callList($page, $page_size): \Trinsic\Api\Model\ListRedirectUrisResponse
```

List Redirect URIs

List registered Redirect URIs for the authenticated environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\RedirectUrisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Number of pages of uris to return.
$page_size = 20; // int | Size of the list to be returned. Accepted range from 1 to 100

try {
    $result = $apiInstance->callList($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedirectUrisApi->callList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of pages of uris to return. | [optional] [default to 1] |
| **page_size** | **int**| Size of the list to be returned. Accepted range from 1 to 100 | [optional] [default to 20] |

### Return type

[**\Trinsic\Api\Model\ListRedirectUrisResponse**](../Model/ListRedirectUrisResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($id)
```

Delete Redirect URI

Delete a redirect uri from the environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\RedirectUrisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the redirect uri to delete.

try {
    $apiInstance->delete($id);
} catch (Exception $e) {
    echo 'Exception when calling RedirectUrisApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the redirect uri to delete. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
