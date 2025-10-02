# # CreateMdlExchangeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exchange_id** | **string** | The ID of the mDL exchange which was created. |
**request_object_base64_url** | **string** | The request object for this mDL exchange.              Pass this into a Trinsic mDL SDK (Web, iOS, Android) exactly as-is to initiate the mDL exchange. |
**exchange_context** | **string** | The encrypted exchange context for this mDL exchange.              This must be passed back to the API during finalization, alongside the response token from the wallet. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
