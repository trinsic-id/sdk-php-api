# Trinsic\Api\AttachmentsApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeAttachmentAccessKey()**](AttachmentsApi.md#exchangeAttachmentAccessKey) | **POST** /api/v1/attachments/exchange | Exchange an Attachment Access Key (from &#x60;IdentityData.Attachments&#x60;) for the raw contents of the attachment.                Use this API to fetch document (front, back, portrait) or other (selfie) images from a verification, if relevant.                In some cases, attachments may not be immediately available after a verification is completed. If so, this endpoint will return an HTTP 202 code, and you should try again later. |


## `exchangeAttachmentAccessKey()`

```php
exchangeAttachmentAccessKey($exchange_attachment_access_key_request)
```

Exchange an Attachment Access Key (from `IdentityData.Attachments`) for the raw contents of the attachment.                Use this API to fetch document (front, back, portrait) or other (selfie) images from a verification, if relevant.                In some cases, attachments may not be immediately available after a verification is completed. If so, this endpoint will return an HTTP 202 code, and you should try again later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = Trinsic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Trinsic\Api\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange_attachment_access_key_request = new \Trinsic\Api\Model\ExchangeAttachmentAccessKeyRequest(); // \Trinsic\Api\Model\ExchangeAttachmentAccessKeyRequest

try {
    $apiInstance->exchangeAttachmentAccessKey($exchange_attachment_access_key_request);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->exchangeAttachmentAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_attachment_access_key_request** | [**\Trinsic\Api\Model\ExchangeAttachmentAccessKeyRequest**](../Model/ExchangeAttachmentAccessKeyRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
