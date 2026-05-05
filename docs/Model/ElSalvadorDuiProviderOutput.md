# ElSalvadorDuiProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | Full name as it appears on the DUI (Documento Único de Identidad), as returned by Verifik from official records administered by the Registro Nacional de las Personas Naturales (RNPN). |
**document_number** | **string** | The DUI (Documento Único de Identidad) document number as returned by Verifik for the matched record.              Nine numeric digits after sanitization. Commonly printed as ########-# (hyphen before the final digit). The output will be stripped of the hyphen and will preserve leading zeros.              The ninth digit is a check digit. This is not publicly documented by the Salvadoran government, but the algorithm is available in the public domain for those who seek it. |
**date_of_birth** | **\DateTime** | The date of birth that was supplied for the lookup and confirmed as matching the DUI record. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
