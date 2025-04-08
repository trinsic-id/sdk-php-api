# Trinsic\Api\AttachmentsApi

All URIs are relative to https://api.trinsic.id, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttachment()**](AttachmentsApi.md#getAttachment) | **POST** /api/v1/attachments/attachment | Get Attachment |


## `getAttachment()`

```php
getAttachment($get_attachment_request): \Trinsic\Api\Model\GetAttachmentResponse
```

Get Attachment

Exchange an Attachment Access Key (from `IdentityData.Attachments`) for the raw contents of the attachment.              Use this API to fetch document (front, back, portrait) or other (selfie) images from a verification, if relevant.              In some cases, attachments may not be immediately available after a verification is completed. If so, this endpoint will return an HTTP 503 code, and you should try again later.

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
$get_attachment_request = new \Trinsic\Api\Model\GetAttachmentRequest(); // \Trinsic\Api\Model\GetAttachmentRequest

try {
    $result = $apiInstance->getAttachment($get_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_attachment_request** | [**\Trinsic\Api\Model\GetAttachmentRequest**](../Model/GetAttachmentRequest.md)|  | [optional] |

### Return type

[**\Trinsic\Api\Model\GetAttachmentResponse**](../Model/GetAttachmentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
