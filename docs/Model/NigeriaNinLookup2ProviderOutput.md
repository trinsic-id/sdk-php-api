# # NigeriaNinLookup2ProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name (given name) of the ID holder. |
**middle_name** | **string** | The middle name of the ID holder. | [optional]
**surname** | **string** | The surname (family name) of the ID holder. |
**sex** | **string** | The sex of the ID holder.              Possible values: - Male - Female | [optional]
**date_of_birth** | **\DateTime** | The date of birth of the ID holder. | [optional]
**birth_country** | **string** | Country of birth as an ISO 3166-1 alpha-2 code. | [optional]
**national_identity_number** | **string** | National Identification Number (NIN).              This is a unique, permanent identifier assigned by the National Identity Management Commission upon enrollment.              Format: 11 numeric digits (regex: /^[0-9]{11}$/). The digits are validated using the Verhoeff algorithm, meaning the last digit serves as a check digit. |
**phone_number** | **string** | Phone number registered with the National Identity Management Commission. | [optional]
**email** | **string** | Email address registered with the National Identity Management Commission. | [optional]
**address** | **string** | Full residential address as a single string, normalized to lowercase without delimiters. | [optional]
**local_government_area** | **string** | Local Government Area of residence.              Nigeria is divided into 774 Local Government Areas (LGAs), which are the third-tier administrative divisions below states and the Federal Capital Territory. LGAs are roughly equivalent to counties or municipalities in other countries. | [optional]
**state** | **string** | State of residence. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
