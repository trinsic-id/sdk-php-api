# # DigilockerAadhaarProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type** | **string** | The document type from which the identity data was retrieved from.              Possible values: - ADHAR - PANCR | [optional]
**document_signature_validated** | **bool** | Whether the downloaded Aadhaar document signature and certificate chain validation succeeded.              In some cases, the document may not be returned, but the data is. When the document is received, a certificate validation is performed. When it is not, the signature can not be validated. |
**timestamp** | **\DateTime** | The timestamp when the signed document was generated and verified.              This is parsed as a date-time value. Aadhaar may omit timezone information. | [optional]
**time_to_live** | **\DateTime** | The validity expiration timestamp for the verification document.              This is parsed as a date-time value. Aadhaar may omit timezone information. | [optional]
**aadhaar_number_last_four** | **string** | The Aadhaar number (UID) value for the individual.              This is only the last four digits of the Aadhaar number. | [optional]
**claims** | [**\Trinsic\Api\Model\AadhaarClaims**](AadhaarClaims.md) | The claims extracted from the signed Aadhaar document. | [optional]
**localized_claims** | [**\Trinsic\Api\Model\AadhaarLocalizedClaims**](AadhaarLocalizedClaims.md) | The localized claims extracted from the signed Aadhaar document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
