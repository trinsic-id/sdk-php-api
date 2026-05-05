# DigilockerAadhaarProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type** | **string** | The document type from which the identity data was retrieved. | [optional]
**timestamp** | **\DateTime** | The timestamp when the signed document was generated and verified. | [optional]
**time_to_live** | **\DateTime** | The validity expiration timestamp for the verification document. | [optional]
**aadhaar_number_last_four** | **string** | The Aadhaar number (UID) value for the individual.              This is only the last four digits of the Aadhaar number. | [optional]
**claims** | [**\Trinsic\Api\Model\AadhaarClaims**](AadhaarClaims.md) | The claims extracted from the Aadhaar document. | [optional]
**localized_claims** | [**\Trinsic\Api\Model\AadhaarLocalizedClaims**](AadhaarLocalizedClaims.md) | The localized claims extracted from the Aadhaar document. | [optional]
**document_signature_validated** | **bool** | Whether our own validation of the Aadhaar document signature and certificate chain succeeded.              When the signed document (e.g. Digilocker XML) is available, we validate it using the standard CCA/SafeScrypt chain. When the document is not returned, the signature cannot be validated and this is false. Some providers (e.g. Signzy) also supply a separate DSC validation indicator in the webhook payload; that is independent of this flag, which reflects only our validation. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
