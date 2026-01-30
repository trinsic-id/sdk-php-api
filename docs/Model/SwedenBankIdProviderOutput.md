# # SwedenBankIdProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | The full name of the individual. | [optional]
**date_of_birth** | **\DateTime** | The date of birth of the individual. | [optional]
**personal_identity_number** | **string** | The Swedish personal number (personnummer) associated with the verified individual. The value is typically a 12-digit number. This is in the format YYYYMMDDXXXX, where: - YYYYMMDD is the date of birth. - XXXX is an individual number, indicating gender.              If XXXX is even, the individual is female. If XXXX is odd, the individual is male. | [optional]
**given_name** | **string** | The given name of the individual | [optional]
**family_name** | **string** | The family name of the individual | [optional]
**country** | **string** | The end user&#39;s country on the verified certificate. This is ISO 2-character code of the country. | [optional]
**certificate_policy** | **string** | The object identifier policy of the individual&#39;s verified certificate | [optional]
**common_name** | **string** | The common name of the end user&#39;s verified certificate | [optional]
**distinguished_name** | **string** | The distinguished name of the end user&#39;s verified certificate | [optional]
**personal_identity_number_issuing_country** | **string** | The country that issued the Swedish personal number. This is an ISO 2-character code of the country and is extracted from the certificate. This will always be &#x60;SE&#x60;. | [optional]
**authentication_device_ip** | **string** | The IP address of the device used for authentication | [optional]
**not_before** | **\DateTime** | The certificate validity start date (not before) in UTC | [optional]
**not_after** | **\DateTime** | The certificate validity end date (not after) in UTC | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
