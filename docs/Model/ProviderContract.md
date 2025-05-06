# # ProviderContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the Provider for this contract. |
**name** | **string** | The Provider&#39;s Name as it appears in Trinsic&#39;s Dashboard and Widget |
**description** | **string** | The Provider&#39;s description as it appears in Trinsic&#39;s Widget.              This is flavor text, not a full, human-readable description of the provider. |
**logo_url** | **string** | A URL pointing to the Provider&#39;s logo on Trinsic&#39;s CDN.              May be a PNG, JPG, or SVG image. |
**available** | **bool** | Whether the Provider is available for use in your App.              If &#x60;false&#x60;, you will need to contact Trinsic to enable this Provider for your App. |
**geography** | **string[]** | The geographies within the Regions the Provider is available. |
**regions** | **string[]** | The regions within which the Provider is available. |
**launch_method** | [**\Trinsic\Api\Model\IntegrationLaunchMethod**](IntegrationLaunchMethod.md) | Relevant only to Advanced Provider Sessions.              The &#x60;LaunchMethod&#x60; which must be supported to launch the Provider Session in Advanced Provider Sessions. |
**collection_method** | [**\Trinsic\Api\Model\ResultCollectionMethod**](ResultCollectionMethod.md) | Relevant only to Advanced Provider Sessions.              The &#x60;CollectionMethod&#x60; which must be supported to launch the Provider Session in Advanced Provider Sessions. |
**results_may_be_delayed_after_redirect** | **bool** | If &#x60;true&#x60;, then the results for this Provider may not be available immediately after the user is redirected back to your application. In this case, the &#x60;GetSessionResults&#x60; API must be called until results are available.              This is an uncommon scenario, and typically only applies to Providers which use a biometric check or traditional document scan. |
**has_refreshable_content** | **bool** | Relevant only to Advanced Provider Sessions.              Whether the Provider requires the &#x60;RefreshStepContent&#x60; capability.              For example, Samsung Wallet&#39;s deep links expire every 30 seconds, and must be refreshed periodically for a resilient user flow. |
**requires_input** | **bool** | Relevant to Hosted Provider Sessions and Advanced Provider Sessions.              If &#x60;true&#x60;, this Provider requires provider-specific input on Session creation. If this input is not provided, Trinsic&#39;s Hosted UI will be invoked to collect the input from the user. |
**has_trinsic_interface** | **bool** | Whether there exists a Trinsic-hosted UI for this Provider.              This is &#x60;true&#x60; for any Provider which is not a simple, OIDC-like redirect flow. |
**supports_advanced_provider_sessions** | **bool** | Whether this Provider can be fully whitelabeled/OEMed through the Advanced Provider Sessions API.              If &#x60;false&#x60;, the Provider may still be launched through Advanced Provider Sessions; however, it will necessarily require a Trinsic-hosted UI to function. |
**sub_providers** | [**\Trinsic\Api\Model\SubProviderMetadata[]**](SubProviderMetadata.md) | Metadata about the sub-providers which are available for this Provider.              For example, Italy&#39;s SPID is a Provider which aggregates access to multiple sub-providers. | [optional]
**status** | [**\Trinsic\Api\Model\ProviderHealth**](ProviderHealth.md) | The current status of the provider and if it is available to launch. If the status is disabled, there is an issue that prevents a provider being able to launch a session. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
