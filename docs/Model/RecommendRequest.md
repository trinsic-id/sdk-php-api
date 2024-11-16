# # RecommendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | The phone number of the user you whish to generate a recommendation for. Will be used to lookup the user&#39;s identity in the network |
**countries** | **string[]** | A list of countries, in alpha-2 ISO 3166 format, you wish to specify for the recommendation, this can include the user&#39;s country of residence, nationality, etc. | [optional]
**states** | **string[]** | If one of the countries is US, you can specify a list of US states to further refine the recommendation (e.g., CA, UT, NY) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
