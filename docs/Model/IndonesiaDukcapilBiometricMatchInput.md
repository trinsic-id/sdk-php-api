# # IndonesiaDukcapilBiometricMatchInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | The user&#39;s full name | [optional]
**date_of_birth** | **\DateTime** | The user&#39;s date of birth, in &#x60;YYYY-MM-DD&#x60; format | [optional]
**nik_id_number** | **string** | The user&#39;s Indonesia NIK ID number | [optional]
**email** | **string** | The email address of the individual.              Either email or phone number must be provided. | [optional]
**phone_number** | **string** | The phone number of the individual.              Either email or phone number must be provided. | [optional]
**selfie_image** | **string** | The raw bytes of the selfie image of the individual.              Must be JPEG format; 1MB maximum. | [optional]
**document_image** | **string** | The raw bytes of the image of the individual&#39;s KTP government ID.              Must be JPEG format; 1MB maximum.              Optional. | [optional]
**consent_given_at** | **\DateTime** | The timestamp when consent was given by the user for the verification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
