# # IntegrationStep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | [**\Trinsic\Api\Model\IntegrationLaunchMethod**](IntegrationLaunchMethod.md) | The launch method to perform |
**content** | **string** | Step type-specific content related to the step: a URL for &#x60;LaunchBrowser&#x60;, a deeplink for &#x60;DeeplinkToMobile&#x60; or a string to show to the user for &#x60;ShowContent&#x60;. |
**refresh** | [**\Trinsic\Api\Model\StepRefreshInfo**](StepRefreshInfo.md) | If non-null, contains metadata about how to refresh the value of &#x60;content&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
