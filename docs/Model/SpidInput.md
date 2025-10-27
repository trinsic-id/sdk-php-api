# # SpidInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sub_provider_id** | **string** | The ID of the specific IDP to invoke within SPID.              If not specified, the user will be prompted to select an IDP. | [optional]
**billing_tracking_secret** | **string** | Only applicable if period-based billing is enabled for your Verification Profile. Contact Trinsic to enable this.              A secret UTF-8 string between 32 and 64 characters in length, used to enable privacy-preserving tracking of unique user verifications during a billing period.              WARNING: This value must NOT change during the course of a billing period for a given Verification Profile, or double-billing may occur. If multiple Verification Profiles are configured to use the same Trinsic-managed SPID Service Provider, the same Billing Tracking Secret must be provided across all such Verification Profiles. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
