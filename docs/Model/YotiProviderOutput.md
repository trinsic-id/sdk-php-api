# # YotiProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remember_me_id** | **string** | The unique id for your service of the individual. This is not shared between different services so if the user logs into a different service, the user will have a new id for the other service. | [optional]
**email** | **string** | The email address of the individual | [optional]
**given_name** | **string** | The given name of the individual. This can correspond to first and middle names in English. | [optional]
**family_name** | **string** | The family name of the individual | [optional]
**full_name** | **string** | Full name of the individual which is composed of the given and family name. Unverified full name may be safe to use. For example, Aadhaar card provides full name, but due to certain limitations of verifying Aadhaar, Yoti is unable to verify this property so it is listed as \&quot;unverified\&quot;. | [optional]
**date_of_birth** | **\DateTime** | The date of birth of the individual. Unverified date of birth may be safe to use. For example, Aadhaar card provides date of birth, but due to certain limitations of verifying Aadhaar, Yoti is unable to verify this property so it is listed as \&quot;unverified\&quot;. | [optional]
**gender** | **string** | The gender of the individual. Depending on the source or country, gender may not be verified. This is a setting that can be configured while setting up scopes.              Unverified gender may be safe to use. For example, Aadhaar card provides gender, but due to certain limitations of verifying Aadhaar, Yoti is unable to verify this property so it is listed as \&quot;unverified\&quot;. In some countries Possible values: - \&quot;MALE\&quot; - \&quot;FEMALE\&quot; - \&quot;TRANSGENDER\&quot; - \&quot;OTHER\&quot; | [optional]
**nationality** | **string** | The nationality of the individual as a ISO alpha-3 code | [optional]
**mobile_number** | **string** | The mobile phone number of the individual. This number was verified with a one time password (OTP) during the user&#39;s registration with Yoti. In some cases, Yoti may do additional checks against its sources to confirm the user&#39;s identity. | [optional]
**structured_postal_address** | [**\Trinsic\Api\Model\YotiStructuredPostalAddress**](YotiStructuredPostalAddress.md) | A structured postal address for the individual that comes from the underlying document or can be manually added. In the case of being manually added, the address is considered \&quot;unverified\&quot;. Unverified addresses may be safe to use. For example, Aadhaar card provides an address, but due to certain limitations of verifying Aadhaar, Yoti is unable to verify this property so it is listed as \&quot;unverified\&quot;. | [optional]
**postal_address** | **string** | The whole address for the individual that comes from the underlying document or can be manually added. In the case of being manually added, the address is considered \&quot;unverified\&quot;. The format of this will be different for each country. Refer to &#x60;StructuredPostalAddress&#x60; for a detailed version of the address. | [optional]
**document_details** | [**\Trinsic\Api\Model\YotiDocumentDetails**](YotiDocumentDetails.md) | The details of the underlying document used to help create the Yoti credential | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
