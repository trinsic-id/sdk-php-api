# # IdentityData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originating_provider_id** | **string** | The ID of the provider from which this data originated (eg \&quot;yoti\&quot;, \&quot;clear\&quot;) | [optional]
**originating_sub_provider_id** | **string** | The sub-provider ID of the provider from which this data originated (eg \&quot;rabo\&quot;, \&quot;poste-italiane\&quot;)              This is applicable only to federated Identity Providers such as SPID and IDIN. | [optional]
**person** | [**\Trinsic\Api\Model\PersonData**](PersonData.md) | Identity data of the individual who was verified | [optional]
**document** | [**\Trinsic\Api\Model\DocumentData**](DocumentData.md) | Identity data of the document involved in verification, if relevant | [optional]
**match** | [**\Trinsic\Api\Model\MatchData**](MatchData.md) | Match results for the data being matched against.              This applies to Providers which operate based on matching data / biometrics against a government database, returning match scores or results as opposed to the data itself. | [optional]
**attachments** | [**\Trinsic\Api\Model\AttachmentInfo[]**](AttachmentInfo.md) | Information for each attachment included with this set of identity data.              Use the Attachments API to fetch an attachment by its ID for a given Session. |
**provider_output** | [**\Trinsic\Api\Model\ProviderOutput**](ProviderOutput.md) | Provider-specific output data that doesn&#39;t fit the standard identity data schema.              The structure of this object varies by provider. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
