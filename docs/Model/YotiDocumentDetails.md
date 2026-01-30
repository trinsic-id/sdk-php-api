# # YotiDocumentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of document used to create the Yoti credential.              Possible values: - PASSPORT: A government-issued identity document - DRIVING_LICENCE: A government-issued identity card - NATIONAL_ID: A government-issued identity card - PASS_CARD: A physical or digital identity card that is accredited by the UK&#39;s national Proof of Age Standards Scheme (PASS) | [optional]
**issuing_country** | **string** | The issuing country&#39;s ISO alpha-3 code | [optional]
**document_number** | **string** | The arbitrary document number for the provided document type | [optional]
**expiration_date** | **\DateTime** | The document&#39;s expiration date in YYYY-MM-DD format | [optional]
**issuing_authority** | **string** | The document&#39;s issuing authority. This can either be a country code as a specified ISO alpha-3 or the name of the issuing authority. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
