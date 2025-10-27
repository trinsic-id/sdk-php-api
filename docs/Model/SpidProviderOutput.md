# # SpidProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_information** | [**\Trinsic\Api\Model\SpidBillingInformation**](SpidBillingInformation.md) | Information about the billable status of this SPID Verification.              Present only if your account has period-based billing enabled for SPID. Contact Trinsic to enable this. | [optional]
**fiscal_number** | **string** | Fiscal tax number for the subject. | [optional]
**spid_code** | **string** | Unique user identifier contained within the SPID identity. | [optional]
**iva_code** | **string** | VAT number for the subject. | [optional]
**spid_credential_expiration_date** | **\DateTime** | Expiration date of the user&#39;s SPID credential.              This is not the same as the expiration date of the underlying identity document (such as a passport) which was used to create the SPID identity. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
