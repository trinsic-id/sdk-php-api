# PolandMobywatelMatchProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**given_name** | **string** | Given name as provided by the individual. | [optional]
**family_name** | **string** | Current legal family name (nazwisko) as provided by the individual.              In Poland the current legal family name (nazwisko) is a separate concept from your birth family name (nazwisko rodowe). They often match, but they can differ after marriage, adoption, or a court-ordered change. | [optional]
**nationality** | **string** | Nationality as provided by the individual. | [optional]
**date_of_birth** | **\DateTime** | Date of birth as provided by the individual. | [optional]
**personal_number** | **string** | Personal number (PESEL) as provided by the individual. | [optional]
**expiration_date** | **\DateTime** | Expiration date as provided by the individual. | [optional]
**is_match_for_given_names** | **bool** | True when the provided given name matches mObywatel wallet data. | [optional]
**is_match_for_family_name** | **bool** | True when the provided family name matches mObywatel wallet data. | [optional]
**is_match_for_expiration_date** | **bool** | True when the provided document expiration date matches mObywatel wallet data. | [optional]
**is_match_for_personal_number** | **bool** | True when the provided personal number (PESEL) matches mObywatel wallet data. | [optional]
**is_match_for_nationality** | **bool** | True when the provided nationality matches mObywatel wallet data. | [optional]
**is_match_for_birth_date** | **bool** | True when the provided birth date matches mObywatel wallet data. | [optional]
**is_match_for_selfie** | **bool** | True when the face in the provided selfie matches the face in the document photo in mObywatel wallet. | [optional]
**is_not_too_similar_to_document_portrait** | **bool** | True when the uploaded face and wallet portrait are not suspiciously identical. Often fails when using a document photo as a selfie. | [optional]
**is_not_different_face** | **bool** | True when no other person&#39;s face has been used to verify this document (good). False when another person&#39;s face has been used to verify this document (possible fraud). | [optional]
**is_single_face** | **bool** | True when exactly one face was detected on the selfie image (good). False when multiple faces were detected on the selfie image (ambiguous result). | [optional]
**is_over_age** | **bool** | True when the individual&#39;s age in digital wallet is over 18. | [optional]
**is_age_estimation_match_for_selfie** | **bool** | True when the individual&#39;s age estimated from the selfie matches the individual&#39;s age in digital wallet. | [optional]
**age_estimation_threshold** | **int** | Number of years allowed between the individual&#39;s age in digital wallet and the individual&#39;s age estimated from the selfie. | [optional]
**estimated_age_from_selfie** | **int** | Estimated age from the selfie, if provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
