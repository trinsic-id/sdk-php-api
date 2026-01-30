# # FrenchNumeriqueProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**given_name** | [**\Trinsic\Api\Model\FrenchNumeriqueGivenName**](FrenchNumeriqueGivenName.md) | Given name information including the full given name and its structured components (first name and middle name(s)). | [optional]
**family_name** | **string** | Birth name (nom de naissance) as recorded on the user&#39;s French identity document. In France, this is the family name given at birth and may differ from the usage name. | [optional]
**preferred_surname** | **string** | Usage surname (\&quot;nom d&#39;usage\&quot;) - according to French law, this is the surname used in daily life. This is typically a married name or other preferred surname, as opposed to FamilyName which is the birth surname (\&quot;nom de naissance\&quot;). | [optional]
**birthdate** | **string** | Date of birth in YYYY-MM-DD format, as recorded on the user&#39;s French identity document. | [optional]
**nationality** | [**\Trinsic\Api\Model\FrenchNumeriqueNationality**](FrenchNumeriqueNationality.md) | Nationality information with ISO 3166 alpha-3 code and French label. The label is provided in French (e.g., \&quot;Française\&quot; for French nationality). | [optional]
**sex** | **string** | Sex - \&quot;Male\&quot; or \&quot;Female\&quot;. | [optional]
**majority** | **bool** | Majority status (majorité) indicating whether the user has reached the French age of legal majority (18 years old). This value is computed by the provider from the user&#39;s birthdate. | [optional]
**phone_number** | [**\Trinsic\Api\Model\FrenchNumeriquePhone**](FrenchNumeriquePhone.md) | Phone number information including the full phone number and its structured components (country prefix and national number). | [optional]
**phone_number_verified** | **bool** | Whether the phone number has been verified by the provider. | [optional]
**email** | **string** | Email address registered in the user&#39;s digital identity account. | [optional]
**email_verified** | **bool** | Whether the email address has been verified by the provider. | [optional]
**birthplace** | **string** | National Institute of Statistics and Economic Studies (INSEE) official geographic code (COG) of the birthplace. This is a 5-digit French administrative code identifying the commune (municipality) of birth. For births in metropolitan France, the first two digits represent the department.              See: https://www.insee.fr/fr/information/2560452 | [optional]
**birthplace_label** | **string** | Name of the birthplace commune (municipality). If applicable, this includes the full name of the arrondissement (borough). | [optional]
**birth_country** | **string** | National Institute of Statistics and Economic Studies (INSEE) official geographic code (COG) for the user&#39;s country of birth.              LaPoste returns this as a 5-character numeric string. This is a country/territory COG, so it always starts with \&quot;99\&quot; (99xxx). France is coded as 99100.              See full list here: https://www.insee.fr/fr/information/2560452 | [optional]
**birth_country_iso** | **string** | Birth country as an ISO 3166 alpha-3 code. | [optional]
**birth_country_label** | **string** | Label of the birth country, in English. | [optional]
**birth_department** | **string** | Number of the department of birth (e.g., \&quot;75\&quot; for Paris, \&quot;2A\&quot; for Corse-du-Sud).              See full list here: https://en.wikipedia.org/wiki/Departments_of_France | [optional]
**digital_identity_creation_date** | **\DateTime** | Date when the user&#39;s digital identity was created. | [optional]
**digital_identity_expiration_date** | **\DateTime** | Date when the digital identity expires. It is valid for 5 years from the date of identity verification. Users are notified ~1 month before and must re-verify identity via the app or in-person at La Poste. After expiration, the identity is deactivated but can be renewed within 1 year; otherwise deleted. | [optional]
**identity_document_type** | **string** | Type of identity document used for verification. Can be \&quot;ID_CARD\&quot;, \&quot;PASSPORT\&quot;, or \&quot;RESIDENCE_PERMIT\&quot;. | [optional]
**identity_document_number** | **string** | Identity document number as it appears on the ID Card, Passport or Residence Permit. | [optional]
**identity_document_emitting_date** | **\DateTime** | Date when the identity document was issued. | [optional]
**identity_document_expiration_date** | **\DateTime** | Date when the identity document expires. | [optional]
**identity_document_emitting_country** | **string** | Country that issued the identity document (ISO 3166 alpha-3 code). | [optional]
**identity_document_mrz** | **string** | Machine Readable Zone (MRZ) data from the ID Card, Passport or Residence Permit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
