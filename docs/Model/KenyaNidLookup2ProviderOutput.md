# # KenyaNidLookup2ProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name (given name) of the ID holder as recorded in IPRS. |
**surname** | **string** | The surname (family name) of the ID holder as recorded in IPRS. |
**other_name** | **string** | The other name (middle name) of the ID holder as recorded in IPRS. | [optional]
**sex** | **string** | The sex of the ID holder as recorded on the National ID.              Possible values: - Male - Female |
**date_of_birth** | **\DateTime** | The date of birth of the ID holder as recorded in IPRS. | [optional]
**citizenship** | **string** | Citizenship status as recorded in the IPRS civil registry database.              For the Kenya National ID lookup, this value will always be \&quot;Kenyan\&quot; as the National ID is only issued to Kenyan citizens. Non-citizens residing in Kenya are issued different identification documents (Alien ID cards, refugee documentation, etc.) which are not supported by this provider. |
**id_number** | **string** | The Kenya National ID Number (Nambari ya Kitambulisho).              This is the primary unique identifier for Kenyan citizens in all government systems, issued by the National Registration Bureau (NRB). The format is 1 to 9 numeric digits (regex: /^[0-9]{1,9}$/). This number is assigned upon first registration at age 18 (or upon naturalization for new citizens) and remains constant for life. |
**serial_number** | **string** | The physical card serial number printed on the Kenya National ID card.              This is distinct from the ID Number and serves as a card issuance tracking identifier maintained by IPRS. This value changes each time a new physical card is issued (loss, damage, renewal). |
**date_of_issue** | **\DateTime** | The date the National ID was issued by the National Registration Bureau (NRB). | [optional]
**place_of_birth** | [**\Trinsic\Api\Model\KenyaNidLookup2Address**](KenyaNidLookup2Address.md) | Place of birth as recorded in Kenya&#39;s civil registry (IPRS).              This is structured according to Kenya&#39;s pre-2010 administrative hierarchy (District &gt; Division &gt; Location). | [optional]
**place_of_residence** | [**\Trinsic\Api\Model\KenyaNidLookup2Address**](KenyaNidLookup2Address.md) | Current residence address as registered in IPRS.              This represents the address on file at the time of ID registration or last update, structured according to Kenya&#39;s pre-2010 administrative hierarchy (District &gt; Division &gt; Location). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
