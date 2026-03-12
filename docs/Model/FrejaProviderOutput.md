# # FrejaProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The individual&#39;s full name. | [optional]
**given_name** | **string** | The individual&#39;s first name. | [optional]
**family_name** | **string** | The individual&#39;s last name. | [optional]
**date_of_birth** | **\DateTime** | The date of birth of the individual.              Formatted as an ISO 8601 Date. | [optional]
**email** | **string** | The individual&#39;s primary email address within Freja. | [optional]
**email_verified** | **bool** | A boolean which indicates whether the individual&#39;s primary email address has been verified by Freja. | [optional]
**all_email_addresses** | **string[]** | An array of all associated email addresses of the individual. | [optional]
**primary_physical_address** | [**\Trinsic\Api\Model\OutputFrejaAddress**](OutputFrejaAddress.md) | The individual&#39;s primary address on file. | [optional]
**all_physical_addresses** | [**\Trinsic\Api\Model\OutputFrejaAddress[]**](OutputFrejaAddress.md) | A list of all associated addresses of the individual. | [optional]
**age** | **int** | The individual&#39;s age in years. | [optional]
**phone_number** | **string** | The individual&#39;s phone number in the E.164 format. | [optional]
**phone_number_verified** | **bool** | Whether the individual&#39;s phone number has been verified by Freja. | [optional]
**personal_identity_number** | **string** | The individual&#39;s personal identity number. The actual value of this field depends on the country of origin used to create the Freja credential. It is typically a Social Security Number, National Identification Number, or equivalent personal identifier. | [optional]
**country** | **string** | The ISO 3166-1 alpha-2 country code associated with the individual&#39;s country of origin. | [optional]
**document** | [**\Trinsic\Api\Model\OutputFrejaDocument**](OutputFrejaDocument.md) | The underlying document, such as a passport, used to create the Freja credential. | [optional]
**registration_level** | **string** | The Freja registration level associated with this individual. This can be BASIC, EXTENDED, or PLUS. * BASIC: Individual has a registered account with Freja. * EXTENDED: Individual has an official identity document verified by Freja. * PLUS: Individual has undergone in-person verification with Freja. | [optional]
**relying_party_user_id** | **string** | The relying party user identifier for this individual. This is an identifier specific to the individual and the relying party (your service). | [optional]
**transaction_reference** | **string** | The Freja transaction reference for this verification. This is an identifier specific to the verification transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
