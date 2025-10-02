# # MdlIdentityData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iaca_root_certificate** | [**\Trinsic\Api\Model\MdlCertificateData**](MdlCertificateData.md) | Information about the IACA Root Certificate which signed the Issuer Certificate for this mDL. |
**document_signer_certificate** | [**\Trinsic\Api\Model\MdlCertificateData**](MdlCertificateData.md) | Information about the Document Signer Certificate which signed the mDL presented by the user. |
**name_spaces** | **array<string,array<string,\Trinsic\Api\Model\ExternalMdlFieldData>>** | The namespaces, and fields within those namespaces, which were present in the processed mDL. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
