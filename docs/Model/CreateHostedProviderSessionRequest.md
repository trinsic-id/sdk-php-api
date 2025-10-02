# # CreateHostedProviderSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider** | **string** | The ID of the provider to launch |
**verification_profile_id** | **string** | The ID of the Verification Profile to use for this session. |
**redirect_url** | **string** | The Redirect URL to which the user should be sent after the session is complete. |
**provider_input** | [**\Trinsic\Api\Model\ProviderInput**](ProviderInput.md) | Provider-specific input for those providers which require it.   &lt;b&gt;Deprecated:&lt;/b&gt; In the future, Hosted Provider Sessions will not accept input on creation, and will instead always redirect the user to a hosted interface to collect input. If you need to collect input from the user yourself, please use the Create Direct Session endpoint instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
