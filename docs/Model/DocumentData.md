# # DocumentData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Trinsic\Api\Model\DocumentType**](DocumentType.md) | The type of the document. | [optional]
**number** | **string** | The primary identifying number of the document. | [optional]
**issue_date** | **\DateTime** | The date the document was issued. | [optional]
**expiration_date** | **\DateTime** | The date the document expires. | [optional]
**issuing_country** | **string** | The ISO 3166-1 alpha-2 country code of the country that issued the document. | [optional]
**issuing_subdivision** | **string** | The ISO 3166-2 subdivision code of the issuing authority which issued the document.              This is always in the form {CountryCode}-{SubdivisionCode}, where CountryCode is 2 letters and SubdivisionCode is 1-3 alphanumeric characters. | [optional]
**issuing_authority** | **string** | The name of the authority which issued the document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
