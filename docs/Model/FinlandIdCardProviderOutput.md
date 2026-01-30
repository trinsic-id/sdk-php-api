# # FinlandIdCardProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The first name of the verified individual |
**last_name** | **string** | The last name of the verified individual |
**date_of_birth** | **\DateTime** | The date of birth of the verified individual |
**personal_identification_code** | **string** | The 11-digit Finnish Personal Identification Code (Henkilötunnus) of the verified individual.               This is in the format DDMMYYCZZZQ, where: - DDMMYY is the date of birth - C is a symbol which determines the century of birth - ZZZ is an individual number, indicating gender - Q is a checksum character              If ZZZ is even, the individual is female. If ZZZ is odd, the individual is male.              If C is &#39;+&#39;, the individual was born in the 19th century (1800-1899). If C is &#39;-&#39;, &#39;U&#39;, &#39;V&#39;, &#39;W&#39;, &#39;X&#39;, or &#39;Y&#39;, the individual was born in the 20th century (1900-1999). If C is &#39;A&#39;, &#39;B&#39;, &#39;C&#39;, &#39;D&#39;, &#39;E&#39;, or &#39;F&#39;, the individual was born in the 21st century (2000-2099). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
