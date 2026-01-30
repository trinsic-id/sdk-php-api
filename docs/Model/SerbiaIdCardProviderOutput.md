# # SerbiaIdCardProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name of the verified individual |
**last_name** | **string** | The last name of the verified individual |
**date_of_birth** | **\DateTime** | The date of birth of the verified individual |
**unique_master_citizen_number** | **string** | The 13-digit Serbian Unique Master Citizen Number (\&quot;JMBG\&quot; / \&quot;Jedinstveni Matični Broj Građana\&quot;) of the verified individual.              This is in the format DDMMYYYRRSSSC, where: - DDMM is the day and month of birth - YYY is the last three digits of the year of birth - RR is the political region code of the region of birth (if born after 1976) or of first registration (if born before 1976) - SSS is a unique sex-specific serial number for individuals born on the same date in the same region - C is a checksum digit              If YYY is between 000 and 099, the millennium digit of the year is \&quot;2\&quot;; the individual was born after the year 2000. If YYY is between 800 and 999, the millennium digit of the year is \&quot;1\&quot;; the individual was born before the year 2000.              If SSS is between 000 and 499, the individual is male. If SSS is between 500 and 999, the individual is female. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
