# # CreateWidgetSessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redirect_url** | **string** | The URL to redirect the user to after the widget session is complete.              *Note*: this should NOT be set if you intend to use Trinsic&#39;s Web UI SDK to launch the Widget as an embedded iFrame or popup; in that case, session resolution is handled by our SDK, not via redirect. | [optional]
**providers** | **string[]** | The list of allowed identity providers. If not specified, all available providers will be allowed. | [optional]
**recommendation_info** | [**\Trinsic\Api\Model\RecommendationInfo**](RecommendationInfo.md) | Data that you already know about the user being verified.   This data is used to improve the user experience during provider selection, by surfacing the most relevant providers first. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
