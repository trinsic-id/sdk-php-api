# # CzechMojeIdProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject_identifier** | **string** | The subject identifier (sub) of the verified individual&#39;s MojeID account.              This is a unique identifier that represents the user within the MojeID system. | [optional]
**name** | **string** | The individual&#39;s full name. | [optional]
**given_name** | **string** | The individual&#39;s given (first) name. | [optional]
**family_name** | **string** | The individual&#39;s family (last) name. | [optional]
**nickname** | **string** | The individual&#39;s nickname. | [optional]
**email** | **string** | The individual&#39;s email address. | [optional]
**email_verified** | **bool** | Whether the individual&#39;s email address has been verified by MojeID. (Verification email and link clicked) | [optional]
**phone_number** | **string** | The individual&#39;s phone number. | [optional]
**phone_number_verified** | **bool** | An individual&#39;s phone number has been verified by MojeID. (SMS verification) | [optional]
**date_of_birth** | **\DateTime** | The individual&#39;s date of birth.              Formatted as an ISO 8601 Date. | [optional]
**gender** | **string** | The individual&#39;s gender as reported by MojeID. | [optional]
**id_card_number** | **string** | The individual&#39;s Czech ID card number. | [optional]
**passport_number** | **string** | The individual&#39;s Czech passport number. | [optional]
**social_security_number** | **string** | The individual&#39;s Ministry of Labour and Social Affairs identifier (Czech social security equivalent). | [optional]
**is_adult** | **bool** | The individual is an adult (18 years or older). | [optional]
**account_validated** | **bool** | The MojeID account has been validated.              A validated account indicates the individual&#39;s identity has been verified to a higher level of assurance within the MojeID system. | [optional]
**company_registration_number** | **string** | The individual&#39;s or organization&#39;s Czech Registration ID (ICO), the Czech company registration number. | [optional]
**tax_identification_number** | **string** | The individual&#39;s or organization&#39;s Danove Identifikacni Cislo (DIC), the Czech tax identification number. | [optional]
**nia_verified** | **bool** | The individual&#39;s identity has been verified through the Czech National Identity Authority (NIA).              NIA verification indicates a higher level of identity assurance, typically involving government-issued credentials verified through the Czech eGovernment infrastructure. | [optional]
**transaction_id** | **string** | Unique login transaction identifier | [optional]
**home_address** | [**\Trinsic\Api\Model\CzechMojeIdAddressOutput**](CzechMojeIdAddressOutput.md) | The individual&#39;s home (default) address, from the &#x60;mojeid_address_def&#x60; claim. | [optional]
**billing_address** | [**\Trinsic\Api\Model\CzechMojeIdAddressOutput**](CzechMojeIdAddressOutput.md) | The individual&#39;s billing address, from the &#x60;mojeid_address_bill&#x60; claim. | [optional]
**shipping_address** | [**\Trinsic\Api\Model\CzechMojeIdAddressOutput**](CzechMojeIdAddressOutput.md) | The individual&#39;s shipping address, from the &#x60;mojeid_address_ship&#x60; claim. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
