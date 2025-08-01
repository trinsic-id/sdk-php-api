# # ProviderInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the provider |
**name** | **string** | The friendly, human-readable name of the provider |
**logo_url** | **string** | A URL pointing to the provider&#39;s logo |
**subtext** | **string** | The Provider&#39;s subtext recommended to be shown next to the name.              This is flavor text, not a full, human-readable description of the provider. |
**description** | **string** | The Provider&#39;s description recommended to be shown next to the name.              This is flavor text, not a full, human-readable description of the provider. |
**health** | **string** | The current health status of the provider |
**sub_providers** | [**\Trinsic\Api\Model\SubProviderMetadata[]**](SubProviderMetadata.md) | Metadata about the sub-providers which are available for this Provider.              For example, Italy&#39;s SPID is a Provider which aggregates access to multiple sub-providers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
