# ColombiaCcLookupInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_number** | **string** | The CC (Cédula de Ciudadanía, Citizenship Document) document number.              Format: - Cédulas after 2004 use the NUIP (Número Único de Identificación Personal), which is 10 digits.   Older documents may have fewer than 10 digits and are still valid. - In Colombia the number is often written with dots as thousands separators (e.g. 1.234.567.890). If dots,   hyphens, spaces, or other non-alphanumeric characters are included, they will be sanitized before lookup. | [optional]
**issue_date** | **\DateTime** | Document issue date, in &#x60;YYYY-MM-DD&#x60; format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
