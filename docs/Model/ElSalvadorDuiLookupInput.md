# ElSalvadorDuiLookupInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_number** | **string** | The DUI (Documento Único de Identidad) number for the holder.              Nine numeric digits after sanitization. Commonly printed as ########-# (hyphen before the final digit). The input will automatically be sanitized of dots, hyphens, spaces, or other non-alphanumeric characters before lookup.              The ninth digit is a check digit. This is not publicly documented by the Salvadoran government, but the algorithm is available in the public domain for those who seek it. | [optional]
**date_of_birth** | **\DateTime** | The DUI holder&#39;s date of birth. Required to match the correct person in official records. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
