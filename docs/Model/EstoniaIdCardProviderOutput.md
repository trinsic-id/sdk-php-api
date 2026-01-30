# # EstoniaIdCardProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name of the verified individual |
**last_name** | **string** | The last name of the verified individual |
**date_of_birth** | **\DateTime** | The date of birth of the verified individual |
**personal_identification_code** | **string** | The 11-digit Estonian personal identification code (\&quot;isikukood\&quot;) of the verified individual.              This is in the format GYYMMDDSSSC, where: - G combines the century and sex of birth - YYMMDD is the date of birth within the given century - SSS is a serial number distinguishing people born on the same date - C is a checksum digit              If G is odd, the individual is male. If G is even, the individual is female.              If G is 1 or 2, the individual was born in the 19th century (1800-1899). If G is 3 or 4, the individual was born in the 20th century (1900-1999). If G is 5 or 6, the individual was born in the 21st century (2000-2099). If G is 7 or 8, the individual was born in the 22nd century (2100-2199). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
