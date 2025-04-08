# # RecommendationInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | The phone number of the user you wish to generate a recommendation for.              Will be used to look up the user&#39;s identity in the network, as well as to determine the user&#39;s geographic location. | [optional]
**countries** | **string[]** | A list of countries, in alpha-2 ISO 3166 format, which the user is related to.              This can include the user&#39;s country of residence, nationality, etc. | [optional]
**subdivisions** | **string[]** | If one of the countries has subdivisions (for example: US states), specify those related to the user here (e.g., CA, UT, NY) | [optional]
**ip_addresses** | **string[]** | Any IP addresses related to the user.              Will be used to determine the user&#39;s geographic location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
