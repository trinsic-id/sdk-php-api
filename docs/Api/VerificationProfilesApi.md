# Trinsic\Api\VerificationProfilesApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVerificationProfile()**](VerificationProfilesApi.md#createVerificationProfile) | **POST** /api/valpha/verification-profiles | Create Verification Profile |
| [**getVerificationProfileById()**](VerificationProfilesApi.md#getVerificationProfileById) | **GET** /api/valpha/verification-profiles/{id} | Get Verification Profile |
| [**listVerificationProfiles()**](VerificationProfilesApi.md#listVerificationProfiles) | **GET** /api/valpha/verification-profiles | List Verification Profiles |


## `createVerificationProfile()`

```php
createVerificationProfile($alias, $brand_name, $primary_color, $providers, $logo): \Trinsic\Api\Model\CreateVerificationProfileResponse
```

Create Verification Profile

Creates a new verification profile within your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\VerificationProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias = 'alias_example'; // string | An alias of the verification profile shown to developers and administrators.
$brand_name = 'brand_name_example'; // string | The brand name of the verification profile shown to end-users.
$primary_color = 'primary_color_example'; // string | The primary color of the verification profile. Must be a 6-character hex string prefixed with a '#' character. Example: #000000
$providers = array('providers_example'); // string[] | The list of providers you'd like to select for this profile. We will not currently enable any providers.
$logo = '/path/to/file.txt'; // \SplFileObject | The logo of the verification profile.

try {
    $result = $apiInstance->createVerificationProfile($alias, $brand_name, $primary_color, $providers, $logo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationProfilesApi->createVerificationProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alias** | **string**| An alias of the verification profile shown to developers and administrators. | |
| **brand_name** | **string**| The brand name of the verification profile shown to end-users. | |
| **primary_color** | **string**| The primary color of the verification profile. Must be a 6-character hex string prefixed with a &#39;#&#39; character. Example: #000000 | [optional] |
| **providers** | [**string[]**](../Model/string.md)| The list of providers you&#39;d like to select for this profile. We will not currently enable any providers. | [optional] |
| **logo** | **\SplFileObject****\SplFileObject**| The logo of the verification profile. | [optional] |

### Return type

[**\Trinsic\Api\Model\CreateVerificationProfileResponse**](../Model/CreateVerificationProfileResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVerificationProfileById()`

```php
getVerificationProfileById($id): \Trinsic\Api\Model\VerificationProfileResponse
```

Get Verification Profile

Gets a specific verification profile by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\VerificationProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getVerificationProfileById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationProfilesApi->getVerificationProfileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Trinsic\Api\Model\VerificationProfileResponse**](../Model/VerificationProfileResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVerificationProfiles()`

```php
listVerificationProfiles($page, $page_size): \Trinsic\Api\Model\ListVerificationProfilesResponse
```

List Verification Profiles

List the verification profiles for the current organization and environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\VerificationProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | 
$page_size = 20; // int | Size of the list to be returned. Accepted range from 1 to 100

try {
    $result = $apiInstance->listVerificationProfiles($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationProfilesApi->listVerificationProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**| Size of the list to be returned. Accepted range from 1 to 100 | [optional] [default to 20] |

### Return type

[**\Trinsic\Api\Model\ListVerificationProfilesResponse**](../Model/ListVerificationProfilesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
