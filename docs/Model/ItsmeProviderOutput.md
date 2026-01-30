# # ItsmeProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name of the verified individual |
**last_name** | **string** | The last name of the verified individual |
**date_of_birth** | **\DateTime** | The date of birth of the verified individual |
**hashed_national_register_number** | **string** | The hashed version of the Belgian National Register Number of the verified individual.              By default, itsme does not return the raw National Register Number of the individual; instead, only a hashed version is returned.              Your account must be approved by itsme to receive the raw, unhashed National Register Number. | [optional]
**national_register_number** | **string** | The raw (not hashed) Belgian National Register Number (\&quot;Rijksregisternummer\&quot;) of the verified individual.              Only returned if your account has been explicitly authorized to receive it by itsme; by law, this data is considered sensitive personal data.              This is an 11-digit number in the format YYMMDDXXXCC, where: - YYMMDD represents the individual&#39;s date of birth (year, month, day). - XXX is a sequential birth number, odd for females and even for males. - CC is a checksum, calculated with the equation: 97 - (YYMMDDXXX mod 97)              For births in the year 2000 or later, the digit &#39;2&#39; is prepended to the first 9 digits during checksum calculation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
