# # CreateHostedProviderSessionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | The ID of the newly-created Acceptance Session |
**launch_url** | **string** | The URL that should be used to launch the Hosted Provider Session on your user&#39;s device.                There are two recommended ways to do so:  - Redirect their browser to the &#x60;LaunchUrl&#x60; as a top-level navigation  - Open a popup window and navigate it to the &#x60;LaunchUrl&#x60;                This URL is sensitive and as such can only be obtained once. If you need to obtain it again, you will need to create a new Acceptance Session. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
