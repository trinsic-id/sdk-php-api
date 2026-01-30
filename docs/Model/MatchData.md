# # MatchData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**national_id_number** | [**\Trinsic\Api\Model\Match**](Match.md) | Whether the provided National ID Number matched the information on file for the individual | [optional]
**full_name** | [**\Trinsic\Api\Model\Match**](Match.md) | The match score for the full name of the individual.              Higher values indicate a closer match. | [optional]
**given_name** | [**\Trinsic\Api\Model\Match**](Match.md) | The match score for the given (first) name of the individual.              Higher values indicate a closer match. | [optional]
**middle_name** | [**\Trinsic\Api\Model\Match**](Match.md) | The match score for the middle name(s) of the individual.              Higher values indicate a closer match. | [optional]
**family_name** | [**\Trinsic\Api\Model\Match**](Match.md) | The match score for the family (last) name of the individual.              Higher values indicate a closer match. | [optional]
**sex** | [**\Trinsic\Api\Model\Match**](Match.md) | Whether the provided sex of the individual matched the information on file for the individual | [optional]
**date_of_birth** | [**\Trinsic\Api\Model\Match**](Match.md) | Whether the provided date of birth matched the information on file for the individual | [optional]
**phone_number** | [**\Trinsic\Api\Model\Match**](Match.md) | Whether the provided phone number matched the information on file for the individual | [optional]
**face_match** | [**\Trinsic\Api\Model\Match**](Match.md) | The match score for the face match between the provided selfie image and the biometrics on file for the individual.              Higher values indicate greater match confidence. | [optional]
**liveness** | [**\Trinsic\Api\Model\Match**](Match.md) | The confidence score for the liveness check performed against the selfie image of the individual.              Higher values indicate lower suspicion. | [optional]
**image_authenticity** | [**\Trinsic\Api\Model\Match**](Match.md) | The confidence score for the image manipulation check performed against the selfie image of the individual.              Higher values indicate lower suspicion of image manipulation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
