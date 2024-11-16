# # RecommendResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recognized** | [**\Trinsic\Api\Model\ProviderInformation[]**](ProviderInformation.md) | The list of providers that were recognized in Trinsic&#39;s network. These are providers that already verified this user |
**relevant** | [**\Trinsic\Api\Model\ProviderInformation[]**](ProviderInformation.md) | The list of providers that although not recognized, are relevant to the user&#39;s identity. The user may have been verified by these providers |
**remainder** | [**\Trinsic\Api\Model\ProviderInformation[]**](ProviderInformation.md) | The list of providers that are not recognized and are not relevant to the user&#39;s identity |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
