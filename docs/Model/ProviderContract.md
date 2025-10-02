# # ProviderContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the Provider for this contract. |
**name** | **string** | The Provider&#39;s Name as it appears in Trinsic&#39;s Dashboard and Widget |
**subtext** | **string** | The Provider&#39;s subtext recommended to be shown next to the name.              This is flavor text, not a full, human-readable description of the provider. |
**description** | **string** | The Provider&#39;s description as it appears in Trinsic&#39;s Widget.              This is flavor text, not a full, human-readable description of the provider. |
**logo_url** | **string** | A URL pointing to the Provider&#39;s logo on Trinsic&#39;s CDN.              May be a PNG, JPG, or SVG image. |
**available** | **bool** | Whether the Provider is available for use in your App.              If &#x60;false&#x60;, you will need to contact Trinsic to enable this Provider for your App. |
**geography** | **string[]** | The geographies within the Regions the Provider is available. |
**regions** | **string[]** | The regions within which the Provider is available. |
**launch_method** | [**\Trinsic\Api\Model\IntegrationLaunchMethod**](IntegrationLaunchMethod.md) | Relevant only to Direct Provider Sessions.              The &#x60;LaunchMethod&#x60; which must be supported to launch the Provider Session in Direct Provider Sessions. |
**collection_method** | [**\Trinsic\Api\Model\ResultCollectionMethod**](ResultCollectionMethod.md) | Relevant only to Direct Provider Sessions.              The &#x60;CollectionMethod&#x60; which must be supported to launch the Provider Session in Direct Provider Sessions. |
**results_may_be_delayed_after_redirect** | **bool** | If &#x60;true&#x60;, then the results for this Provider may not be available immediately after the user is redirected back to your application. In this case, the &#x60;GetSessionResults&#x60; API must be called until results are available.              This is an uncommon scenario, and only applies to Providers which cannot guarantee the availability of results immediately after the user is redirected back to your application. |
**has_refreshable_content** | **bool** | Relevant only to Direct Provider Sessions.              Whether the Provider requires the &#x60;RefreshStepContent&#x60; capability.              For example, Samsung Wallet&#39;s deep links expire every 30 seconds, and must be refreshed periodically for a resilient user flow. |
**requires_input** | **bool** | Relevant to Hosted Provider Sessions and Direct Provider Sessions.              If &#x60;true&#x60;, this Provider requires provider-specific input on Session creation. If this input is not provided, Trinsic&#39;s Hosted UI will be invoked to collect the input from the user. |
**has_trinsic_interface** | **bool** | Whether there exists a Trinsic-hosted UI for this Provider.              This is &#x60;true&#x60; for any Provider which is not a simple, OIDC-like redirect flow. |
**supports_advanced_provider_sessions** | **bool** | Whether this Provider can be fully whitelabeled/OEMed through the Direct Provider Sessions API.              If &#x60;false&#x60;, the Provider may still be launched through Direct Provider Sessions; however, it will necessarily require a Trinsic-hosted UI to function. |
**supports_direct_provider_sessions** | **bool** | Whether this Provider can be fully whitelabeled/OEMed through the Direct Provider Sessions API.              If &#x60;false&#x60;, the Provider may still be launched through Direct Provider Sessions; however, it will necessarily require a Trinsic-hosted UI to function. |
**available_fields** | [**\Trinsic\Api\Model\ContractField[]**](ContractField.md) | Information about the fields that this Provider will return in verification results. | [optional]
**sub_providers** | [**\Trinsic\Api\Model\SubProviderMetadata[]**](SubProviderMetadata.md) | Metadata about the sub-providers which are available for this Provider.              For example, Italy&#39;s SPID is a Provider which aggregates access to multiple sub-providers. | [optional]
**health** | [**\Trinsic\Api\Model\ProviderHealth**](ProviderHealth.md) | The health for an integration to be able to successfully perform a verification session. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
