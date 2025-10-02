# # FinalizeMdlExchangeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exchange_id** | **string** | The Exchange ID of the mDL exchange which was just finalized. |
**created_session** | [**\Trinsic\Api\Model\Session**](Session.md) | The AcceptanceSession which was created as a result of finalizing this mDL exchange. |
**mdl_data** | [**\Trinsic\Api\Model\MdlIdentityData**](MdlIdentityData.md) | The identity data from the mDL exchange, in a semi-normalized format.              Supports all possible fields and namespaces, but does not map them to Trinsic&#39;s common data model. | [optional]
**normalized_identity_data** | [**\Trinsic\Api\Model\IdentityData**](IdentityData.md) | The identity data from the mDL exchange, normalized into Trinsic&#39;s common data model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
