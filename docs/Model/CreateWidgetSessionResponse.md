# # CreateWidgetSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | The ID of the newly-created Acceptance Session |
**launch_url** | **string** | The URL that should be used to invoke the Acceptance Session on your user&#39;s device.              You can use our frontend SDKs to launch the user into the Acceptance Session, or you can redirect the user&#39;s browser to this URL.              This URL is sensitive and as such can only be obtained once. If you need to obtain it again, you will need to create a new Acceptance Session. |
**results_access_key** | **string** | The &#x60;resultsAccessKey&#x60; for the Acceptance Session.              This is an encrypted payload which contains the decryption key necessary to access the Session&#39;s Data Vault.              Save this securely in your systems; it must be passed back with any API call which requires access to the Session&#39;s Data Vault.              Trinsic cannot access a Session&#39;s Data Vault without this key. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
