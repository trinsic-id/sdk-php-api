# IndiaPanLookupProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**permanent_account_number** | **string** | Permanent Account Number (PAN) that was looked up.              PAN is a ten-character identifier issued by the Income Tax Department of India. | [optional]
**structured_permanent_account_number** | [**\Trinsic\Api\Model\IndiaPanStructuredNumber**](IndiaPanStructuredNumber.md) | PAN split into structural parts for the canonical ten-character format.              Covers alphabetic series, assessee category, name prefix letter, serial number, and check letter. | [optional]
**full_name** | **string** | Full name of the entity subject to income tax.              NOTE: Only available when PAN status is VALID. | [optional]
**given_name** | **string** | Given name of the individual.              NOTE: Only available when PAN status is VALID and the verification is for an individual person. | [optional]
**middle_name** | **string** | Middle name of the individual.              NOTE: Only available when PAN status is VALID and the verification is for an individual person. | [optional]
**family_name** | **string** | Family name of the individual.              NOTE: Only available when PAN status is VALID and the verification is for an individual person. | [optional]
**date_of_birth** | **string** | Date of birth of the individual.              NOTE: Only available when PAN status is VALID and the verification is for an individual person. | [optional]
**pan_status** | **string** | PAN card status from Signzy for the lookup.              Possible values: - VALID - FAKE - DEACTIVATED - DELETED - INVALID - AMALGAMATION - ACQUISITION - DEATH - DISSOLUTION - LIQUIDATED - MERGER - PARTITION - SPLIT - UNDER LIQUIDATION - INOPERATIVE | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
