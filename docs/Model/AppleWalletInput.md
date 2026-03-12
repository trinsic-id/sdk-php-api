# # AppleWalletInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exchange_mechanism** | [**\Trinsic\Api\Model\MdlExchangeMechanism**](MdlExchangeMechanism.md) | The exchange mechanism to use for this Apple Wallet verification.              Use &#x60;DigitalCredentialsApi&#x60; for Digital Credentials API on web, or &#x60;NativeApp&#x60; for a native iOS app. | [optional]
**preview_raw18013_request** | [**\Trinsic\Api\Model\Raw18013RequestInput**](Raw18013RequestInput.md) | **Preview feature: not suitable for production use cases**              The raw 18013-7 exchange request to use for this verification.              If set, this overrides any default configuration on your Verification Profile.              NOTE: For Apple Wallet, this cannot (yet) be used with the &#x60;NativeApp&#x60; (in-app) exchange mechanism. Only the &#x60;DigitalCredentialsApi&#x60; (web) exchange mechanism supports this input. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
