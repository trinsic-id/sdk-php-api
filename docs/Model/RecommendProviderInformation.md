# # RecommendProviderInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the provider | [readonly]
**name** | **string** | The friendly, human-readable name of the provider | [readonly]
**logo_url** | **string** | A URL pointing to the provider&#39;s logo | [readonly]
**subtext** | **string** | The Provider&#39;s subtext recommended to be shown next to the name.              This is flavor text, not a full, human-readable description of the provider. | [readonly]
**health** | **string** | The current health status of the provider | [readonly]
**sub_providers** | [**\Trinsic\Api\Model\SubProviderMetadata[]**](SubProviderMetadata.md) | Metadata about the sub-providers which are available for this Provider.              For example, Italy&#39;s SPID is a Provider which aggregates access to multiple sub-providers. | [optional]
**regions** | **string[]** | The regions a provider is available in. | [readonly]
**countries** | **string[]** | A list of countries, in alpha-2 ISO 3166-1 format, that the provider is available in. | [readonly]
**subdivisions** | **string[]** | A list of subdivisions, in ISO 3166-2 format, that the provider is available in. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
