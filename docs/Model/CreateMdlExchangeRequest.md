# # CreateMdlExchangeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verification_profile_id** | **string** | The ID of the VerificationProfile to use for this mDL exchange. |
**provider** | **string** | The ID of the provider to use for this mDL exchange. |
**exchange_mechanism** | [**\Trinsic\Api\Model\MdlExchangeMechanism**](MdlExchangeMechanism.md) | The mechanism by which the mDL exchange will occur (web, native SDK, etc.) |
**document_type** | **string** | The document type to request from the wallet.              Typically, this is one of the following values:              - &#x60;org.iso.18013.5.1.mDL&#x60; (Mobile Driver&#39;s License) - &#x60;com.google.wallet.idcard.1&#x60; (Google Wallet ID Pass) |
**name_spaces** | **array<string,array<string,bool>>** | The namespaces and fields to request from the mDL.              This is a nested map / dictionary. The outer dictionary&#39;s keys are namespaces (e.g. \&quot;org.iso.18013.5.1\&quot;). The inner dictionary&#39;s keys are field names within each namespace, with boolean values indicating whether the specified field will be retained post-verification. |
**digital_credentials_api_host** | **string** | If using the &#x60;DigitalCredentialsApi&#x60; exchange mechanism, this is the hostname on which the Digital Credentials API will be called.              For example, if the user is on the page &#x60;https://foo.example.com/verify-mdl&#x60;, the proper value to use is &#x60;foo.example.com&#x60;.              Present for ease of testing only. May be removed as this API is stabilized. | [optional]
**android_native_app_package_name** | **string** | If using the &#x60;NativeApp&#x60; exchange mechanism with the &#x60;google-wallet&#x60; provider, this is the package name of the Android App which will execute the mDL exchange.              This should be set to the package name of your app.              Present for ease of testing only. May be removed as this API is stabilized. | [optional]
**android_native_app_signing_certificate_fingerprint** | **string** | If using the &#x60;NativeApp&#x60; exchange mechanism with the &#x60;google-wallet&#x60; provider, this is the SHA-256 fingerprint of the signing certificate used to sign the Android App which will execute the mDL exchange.              Present for ease of testing only. May be removed as this API is stabilized. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
