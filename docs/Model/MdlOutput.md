# # MdlOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iaca_root_certificate** | [**\Trinsic\Api\Model\MdlOutputCertificateData**](MdlOutputCertificateData.md) | Information about the IACA Root Certificate which signed (directly or indirectly) the Document Signer Certificate for this mDL. |
**document_signer_certificate** | [**\Trinsic\Api\Model\MdlOutputCertificateData**](MdlOutputCertificateData.md) | Information about the Document Signer Certificate which signed the mDL presented by the user. |
**document_type** | **string** | The document type of the mDL presented by the user.              Common values: - \&quot;org.iso.18013.5.1.mDL\&quot; for ISO 18013-5 mDLs - \&quot;com.google.wallet.idcard.1\&quot; for Google Wallet ID Cards |
**name_spaces** | **array<string,array<string,\Trinsic\Api\Model\MdlOutputFieldData>>** | The namespaces, and fields within those namespaces, which were present in the processed mDL. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
