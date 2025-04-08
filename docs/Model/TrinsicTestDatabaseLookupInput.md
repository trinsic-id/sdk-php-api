# # TrinsicTestDatabaseLookupInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**given_name** | **string** | The given name to use for the output of the test Session.              This is required; if not provided, Trinsic&#39;s Fallback UI will be invoked to collect it from the user.              Can be any non-empty value. | [optional]
**family_name** | **string** | The family name to use for the output of the test Session.              This is required; if not provided, Trinsic&#39;s Fallback UI will be invoked to collect it from the user.              Can be any non-empty value. | [optional]
**identity_code** | **string** | A 6-digit code; must be \&quot;123456\&quot; for the Session to succeed.              This is required; if not provided, Trinsic&#39;s Fallback UI will be invoked to collect it from the user.              Any other value will cause the Session to fail. | [optional]
**selfie_base64** | **string** | An optional selfie image, base64-encoded.              Will replace the existing test selfie attachment output if provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
