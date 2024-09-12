# # IdentityData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originating_provider_id** | **string** | The ID of the integration from which this data originated (eg \&quot;yoti\&quot;, \&quot;clear\&quot;) | [optional]
**person** | [**\Trinsic\Api\Model\PersonData**](PersonData.md) | Identity data of the individual who was verified | [optional]
**document** | [**\Trinsic\Api\Model\DocumentData**](DocumentData.md) | Identity data of the document involved in verification, if relevant | [optional]
**attachment_access_keys** | [**\Trinsic\Api\Model\AttachmentAccessKeys**](AttachmentAccessKeys.md) | Attachment Access Keys for attachments (eg document / selfie images) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
