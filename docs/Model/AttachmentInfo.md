# # AttachmentInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the Attachment.              Pass this to the &#x60;GetAttachment&#x60; endpoint, along with the Session ID and the &#x60;resultsAccessKey&#x60; for said Session. |
**type** | **string** | The type of the Attachment.              Possible values: - \&quot;selfie\&quot; - \&quot;document_front\&quot; - \&quot;document_back\&quot; - \&quot;document_portrait\&quot; - \&quot;document_signature\&quot; - \&quot;document_scan_report\&quot;              Additional attachment types may be defined for specific Providers. |
**content_type** | **string** | The MIME type of the attachment&#39;s contents; eg, \&quot;image/jpeg\&quot; or \&quot;application/pdf\&quot;. |
**size_bytes** | **int** | The size in bytes of the attachment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
