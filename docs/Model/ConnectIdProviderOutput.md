# # ConnectIdProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**birthdate** | **\DateTime** | The date of birth of an individual in YYYY-MM-DD format. | [optional]
**given_name** | **string** | The given name of an individual. | [optional]
**middle_name** | **string** | The middle name of an individual. | [optional]
**family_name** | **string** | The family/last name of an individual. | [optional]
**phone_number** | **string** | The phone number of an individual. | [optional]
**email** | **string** | The email of an individual. | [optional]
**sub** | **string** | The OpenID Connect (OIDC) subject identifier (sub). | [optional]
**age_verification** | [**\Trinsic\Api\Model\ConnectIdAgeVerification**](ConnectIdAgeVerification.md) | The age verification claim and whether the individual meets the age requirement. | [optional]
**transaction** | **string** | The verification session&#39;s transaction number.              This is a unique identifier assigned to a single ConnectID transaction flow. It can be used for audit purposes or to flag fraudulent activity. | [optional]
**beneficiary_account** | [**\Trinsic\Api\Model\ConnectIdBeneficiaryAccount**](ConnectIdBeneficiaryAccount.md) | The beneficiary account that has been designated by the individual. | [optional]
**address** | [**\Trinsic\Api\Model\ConnectIdAddress**](ConnectIdAddress.md) | The address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
