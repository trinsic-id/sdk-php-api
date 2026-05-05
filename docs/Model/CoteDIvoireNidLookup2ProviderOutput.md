# CoteDIvoireNidLookup2ProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | Full name as returned by ONECI (National Civil Registry and Identification Office). |
**given_name** | **string** | Given name of the ID holder as returned by ONECI (National Civil Registry and Identification Office). |
**family_name** | **string** | Family name of the ID holder as returned by ONECI (National Civil Registry and Identification Office). |
**date_of_birth** | **\DateTime** | Date of birth as returned by ONECI (National Civil Registry and Identification Office). |
**sex** | **string** | Sex of the ID holder as returned by ONECI (National Civil Registry and Identification Office). Possible values: - Male - Female |
**nationality** | **string** | Nationality as ISO 3166-1 alpha-2 country code (e.g. \&quot;CI\&quot; for Côte d&#39;Ivoire). |
**address** | **string** | Address as returned from ONECI (National Civil Registry and Identification Office). Format is LOCALITY,COMMUNE: the locality (village, neighborhood, or sous-quartier) followed by the commune. Not a full street address. | [optional]
**document_number** | **string** | The document&#39;s own identifier (printed on the card; often labeled \&quot;Immatriculation\&quot; on older cards or \&quot;Numéro CNI\&quot; in post-2020 cards). On older cards this is usually one letter followed by 10 digits. On new cards it appears as 1 or 2 leading letters plus 9 digits. | [optional]
**national_id_number** | **string** | The NNI (Numéro National d&#39;Identification): the person&#39;s 11-digit national ID, printed on the back of the new national id card and assigned by ONECI. It is always exactly 11 digits with no letters, and is semi-random, non-repetitive, and does not encode any extra data, such as date of birth, gender, or other readable attributes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
