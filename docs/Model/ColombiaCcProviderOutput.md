# ColombiaCcProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | Full name as it appears on the CC. |
**given_name** | **string** | Given name(s) of the holder as they appear on the CC. |
**family_name** | **string** | Family name(s) of the holder as they appear on the CC. Space-separated when both paternal and maternal family names are present. |
**date_of_birth** | **\DateTime** | Date of birth as recorded in the civil registry (Registraduría Nacional). |
**sex** | **string** | Sex of the holder as recorded in the civil registry (Registraduría Nacional).              Possible values: - Male - Female - Unknown (when the sex is not recorded or cannot be confidently determined) |
**is_alive** | **bool** | Whether the person is reported as alive in Colombia&#39;s official civil registry (Registraduría Nacional).              Used to detect identity fraud when the holder is deceased. |
**document_number** | **string** | The Cédula de Ciudadanía (CC) document number.              This is the unique identifier assigned by the Registraduría Nacional when the person is first issued a CC. It does not change when the person renews or receives a new physical card; it remains the same for the individual for life.              Cédulas issued after 2004 use the NUIP (Número Único de Identificación Personal), which is 10 digits. Older documents may have fewer than 10 digits and are still valid. |
**expedition_date** | **\DateTime** | Date the CC was issued (fecha de expedición).              Format: - yyyy-MM-dd |
**expedition_place** | [**\Trinsic\Api\Model\ColombiaExpeditionPlace**](ColombiaExpeditionPlace.md) | Place where the CC was issued (lugar de expedición): municipality and department as recorded by the Registraduría Nacional. |
**array_name** | **string[]** | All names as they appear on the CC, as an array of strings.              Format: - Order follows the civil registry: typically family name(s) first, then given name(s). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
