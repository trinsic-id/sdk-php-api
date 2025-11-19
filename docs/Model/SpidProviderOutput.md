# # SpidProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_information** | [**\Trinsic\Api\Model\SpidBillingInformation**](SpidBillingInformation.md) | Information about the billable status of this SPID Verification.              Present only if your account has period-based billing enabled for SPID. Contact Trinsic to enable this. | [optional]
**identity_provider_entity_id** | **string** | The SPID Entity ID of the Identity Provider which issued the SPID identity.              This is an HTTPS URI which uniquely identifies the IdP within the SPID federation.              A normalized / simplified representation of this value is present in the &#x60;originatingSubProviderId&#x60; field in Trinsic&#39;s normalized data model. |
**spid_code** | **string** | The identifier of the user&#39;s SPID credential.              This uniquely identifies the credential within the SPID federation. |
**spid_credential_expiration_date** | **\DateTime** | Expiration date of the user&#39;s SPID credential.              This is not the same as the expiration date of the underlying identity document (such as a passport) which was used to create the SPID identity. | [optional]
**place_of_birth** | **string** | The user&#39;s place of birth. | [optional]
**county_of_birth** | **string** | The user&#39;s county of birth. | [optional]
**raw_id_card** | **string** | The raw, space-separated string value for the \&quot;IdCard\&quot; field from the SPID identity.              Trinsic additionally parses this field and uses it to populate the &#x60;Document&#x60; object in the normalized data model. | [optional]
**email** | **string** | The email address of the user. | [optional]
**digital_address** | **string** | The digital address of the user. | [optional]
**fiscal_number** | **string** | Fiscal tax number for the subject. | [optional]
**iva_code** | **string** | VAT number for the subject. | [optional]
**company_name** | **string** | The name of the company which the user is associated with. | [optional]
**company_fiscal_number** | **string** | The fiscal tax number of the company which the user is associated with. | [optional]
**registered_office** | **string** | The registered office address of the company which the user is associated with. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
