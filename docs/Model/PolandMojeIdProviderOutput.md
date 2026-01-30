# # PolandMojeIdProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name of the verified individual |
**last_name** | **string** | The last name of the verified individual |
**national_identification_number** | **string** | The 11-digit Polish national identification number (PESEL) of the verified individual.              This is in the format YYMMDDZZZGQ, where: - YYMMDD is the date of birth - ZZZ is a unique identifier - G is sex (even for females, odd for males) - Q is a checksum digit              The year of birth encoded in this identifier assumes a default year of birth in the 20th century. If the year of birth is in the range [1800, 1899], the month portion is incremented by 80. If the year of birth is in the range [2000, 2099] the month portion is incremented by 20. If the year of birth is in the range [2100, 2199], the month portion is incremented by 40. If the year of birth is in the range [2200, 2299], the month portion is incremented by 60. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
