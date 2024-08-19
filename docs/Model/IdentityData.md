# # IdentityData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originating_provider_id** | **string** | The ID of the integration from which this data originated (eg \&quot;yoti\&quot;, \&quot;clear\&quot;) | [optional]
**person** | [**\Trinsic\Connect\Model\PersonData**](PersonData.md) | Identity data of the individual who was verified | [optional]
**document** | [**\Trinsic\Connect\Model\DocumentData**](DocumentData.md) | Identity data of the document involved in verification, if relevant | [optional]
**attachments** | [**\Trinsic\Connect\Model\Attachments**](Attachments.md) | Access keys for attachments (eg document/selfie images) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
