# # Session

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**state** | [**\Trinsic\Api\Model\SessionState**](SessionState.md) | The state of the session |
**fail_code** | [**\Trinsic\Api\Model\SessionFailCode**](SessionFailCode.md) | If the session is in state &#x60;IdvFailed&#x60;, this field contains the reason for failure. | [optional]
**verification** | [**\Trinsic\Api\Model\Verification**](Verification.md) | The underlying verification for this Session |
**disclosed_fields** | [**\Trinsic\Api\Model\DisclosedFields**](DisclosedFields.md) | The fields that were requested to be disclosed when the Session was created |
**created** | **int** | The unix timestamp, in seconds, when this session was created |
**updated** | **int** | The unix timestamp, in seconds, when this session&#39;s state last changed |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
