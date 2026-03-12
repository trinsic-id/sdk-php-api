# # UnitedKingdomEvisaProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name of the individual as recorded on the eVisa. | [optional]
**last_name** | **string** | The last name of the individual as recorded on the eVisa. | [optional]
**date_of_birth** | **\DateTime** | The date of birth of the individual. | [optional]
**share_code** | **string** | The 9-character share code used for the verification. | [optional]
**reference_number** | **string** | The eVisa reference number issued by UK Visas and Immigration (UKVI). | [optional]
**expiration_date** | **\DateTime** | The expiration date of the eVisa. Only present for immigration_status verifications. | [optional]
**valid_from** | **\DateTime** | The start date from which the eVisa is valid. Only returned for immigration_status and right_to_rent verifications — not returned for right_to_work. | [optional]
**nationality** | **string** | The nationality of the individual as recorded on the eVisa. Only present for immigration_status verifications. | [optional]
**immigration_status** | **string** | The immigration status of the individual. Only present for immigration_status verifications. This is a personalized record for each individual, and there is no single definitive list. Some common values: - Settled - Pre-settled - Student - Graduate - Youth Mobility - Global Talent - Skilled Worker - Limited leave | [optional]
**outcome** | **string** | Overall verification outcome: \&quot;pass\&quot; or \&quot;fail\&quot;. | [optional]
**evidence_type** | **string** | Type of verification. List of possible values: - immigration_status - right_to_work - right_to_rent | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
