# # Provider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the provider |
**name** | **string** | The display name of the provider |
**logo_url** | **string** | The URL of the provider&#39;s logo |
**subtext** | **string** | The Provider&#39;s subtext recommended to be shown next to the name.              This is flavor text, not a full, human-readable description of the provider. |
**description** | **string** | A description of the provider&#39;s capabilities | [readonly]
**geography** | **string[]** | Geographic regions where this provider operates |
**regions** | **string[]** | Specific regions supported by this provider |
**countries** | **string[]** | The countries where this Provider is available (as alpha-2 ISO codes). |
**subdivisions** | **string[]** | The subdivisions (states, provinces, etc.) where this Provider is available (as alpha-2 ISO codes). |
**licensed** | **bool** | Whether this provider is licensed for use by your organization |
**launch_method** | [**\Trinsic\Api\Model\IntegrationLaunchMethod**](IntegrationLaunchMethod.md) | Relevant only to Direct Provider Sessions.              The &#x60;LaunchMethod&#x60; which must be supported to launch the Provider Session in Direct Provider Sessions. |
**collection_method** | [**\Trinsic\Api\Model\ResultCollectionMethod**](ResultCollectionMethod.md) | Relevant only to Direct Provider Sessions.              The &#x60;CollectionMethod&#x60; which must be supported to launch the Provider Session in Direct Provider Sessions. |
**results_may_be_delayed_after_redirect** | **bool** | If &#x60;true&#x60;, then the results for this Provider may not be available immediately after the user is redirected back to your application. In this case, the &#x60;GetSessionResults&#x60; API must be called until results are available.              This is an uncommon scenario, and only applies to Providers which cannot guarantee the availability of results immediately after the user is redirected back to your application. |
**has_refreshable_content** | **bool** | Relevant only to Direct Provider Sessions.              Whether the Provider requires the &#x60;RefreshStepContent&#x60; capability.              For example, Samsung Wallet&#39;s deep links expire every 30 seconds, and must be refreshed periodically for a resilient user flow. |
**requires_input** | **bool** | Relevant to Hosted Provider Sessions and Direct Provider Sessions.              If &#x60;true&#x60;, this Provider requires provider-specific input on Session creation. If this input is not provided, Trinsic&#39;s Hosted UI will be invoked to collect the input from the user. |
**has_trinsic_interface** | **bool** | Whether there exists a Trinsic-hosted UI for this Provider.              This is &#x60;true&#x60; for any Provider which is not a simple, OIDC-like redirect flow. |
**supports_direct_provider_sessions** | **bool** | Whether this Provider can be fully whitelabeled/OEMed through the Direct Provider Sessions API.              If &#x60;false&#x60;, the Provider may still be launched through Direct Provider Sessions; however, it will necessarily require a Trinsic-hosted UI to function. |
**available_attributes** | [**\Trinsic\Api\Model\ContractAttribute[]**](ContractAttribute.md) | Information about the user attributes that this Provider will return in verification results. | [optional]
**available_attachments** | [**\Trinsic\Api\Model\ContractAttachment[]**](ContractAttachment.md) | Information about the attachments that this Provider will return in verification results. | [optional]
**sub_providers** | [**\Trinsic\Api\Model\SubProviderMetadata[]**](SubProviderMetadata.md) | Metadata about the sub-providers which are available for this Provider in the current Environment.              For example, Italy&#39;s SPID is a Provider which aggregates access to multiple sub-providers. | [optional]
**live_health** | [**\Trinsic\Api\Model\ProviderHealth**](ProviderHealth.md) | The health for a provider in the live environment |
**test_health** | [**\Trinsic\Api\Model\ProviderHealth**](ProviderHealth.md) | The health for a provider in the test environment |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
