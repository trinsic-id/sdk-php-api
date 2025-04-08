# # CreateHostedProviderSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | The ID of the newly-created Acceptance Session |
**launch_url** | **string** | The URL that should be used to launch the Hosted Provider Session on your user&#39;s device.              There are two recommended ways to do so: - Redirect their browser to the &#x60;LaunchUrl&#x60; as a top-level navigation - Open a popup window and navigate it to the &#x60;LaunchUrl&#x60;              This URL is sensitive and as such can only be obtained once. If you need to obtain it again, you will need to create a new Acceptance Session. |
**results_access_key** | **string** | The &#x60;resultsAccessKey&#x60; for the Acceptance Session.              This is an encrypted payload which contains the decryption key necessary to access the Session&#39;s Data Vault.              Save this securely in your systems; it must be passed back with any API call which requires access to the Session&#39;s Data Vault.              Trinsic cannot access a Session&#39;s Data Vault without this key. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
