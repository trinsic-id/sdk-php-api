# # ResultCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | [**\Trinsic\Api\Model\ResultCollectionMethod**](ResultCollectionMethod.md) | The method by which the results of the Acceptance Session should be collected. |
**results_access_key** | **string** | The &#x60;resultsAccessKey&#x60; for the Acceptance Session.              This is an encrypted payload which contains the decryption key necessary to access the Session&#39;s Data Vault.              Save this securely in your systems; it must be passed back with any API call which requires access to the Session&#39;s Data Vault.              Trinsic cannot access a Session&#39;s Data Vault without this key. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
