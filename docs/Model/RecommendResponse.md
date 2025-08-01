# # RecommendResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recognized** | [**\Trinsic\Api\Model\ProviderInformation[]**](ProviderInformation.md) | The providers which the user is known to have a credential with. |
**relevant** | [**\Trinsic\Api\Model\ProviderInformation[]**](ProviderInformation.md) | The providers which the user is deemed sufficiently likely to have a credential with. |
**remainder** | [**\Trinsic\Api\Model\ProviderInformation[]**](ProviderInformation.md) | The providers which the user is unlikely to have a credential with.              This includes all providers available to your app which were not included in the Recognized or Relevant lists. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
