# # SpidProviderOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_information** | [**\Trinsic\Api\Model\SpidBillingInformation**](SpidBillingInformation.md) | Information about the billable status of this SPID Verification.              Present only if your account has period-based billing enabled for SPID. Contact Trinsic to enable this. | [optional]
**identity_provider_entity_id** | **string** | The SPID Entity ID of the Identity Provider which issued the SPID identity.              This is an HTTPS URI which uniquely identifies the IdP within the SPID federation.              A normalized / simplified representation of this value is present in the &#x60;originatingSubProviderId&#x60; field in Trinsic&#39;s normalized data model. |
**spid_code** | **string** | The identifier of the SPID credential, uniquely identifying it within the SPID federation.              The format of this string is specific to each individual Identity Provider. |
**spid_credential_expiration_date** | **\DateTime** | Expiration date of the SPID credential.              This is not the same as the expiration date of the underlying identity document (such as a passport) which was used to create the SPID identity. | [optional]
**raw_id_card** | **string** | The raw, space-separated string value for the \&quot;IdCard\&quot; field from the SPID credential.              Trinsic additionally parses this field and uses it to populate the &#x60;Document&#x60; object in the normalized data model. | [optional]
**given_name** | **string** | The individual&#39;s first / given name(s) | [optional]
**family_name** | **string** | The individual&#39;s last / family name(s) | [optional]
**date_of_birth** | **\DateTime** | The date of birth of the individual | [optional]
**gender** | **string** | The gender of the individual.              Possible values: \&quot;M\&quot; | \&quot;F\&quot; | [optional]
**place_of_birth** | **string** | The individual&#39;s place of birth.              This is a 4-digit Belfiore Code identifying either the municipality of birth (for births in Italy) or a foreign country (for births outside Italy). | [optional]
**county_of_birth** | **string** | The individual&#39;s county (province) of birth, abbreviated.              For foreign births, this is \&quot;EE\&quot;. | [optional]
**domicile_street_address** | **string** | The street address of the individual&#39;s residence.              This includes street name, street type, and house number, in the standard format for the given state. | [optional]
**domicile_postal_code** | **string** | The postal code of the individual&#39;s residence | [optional]
**domicile_municipality** | **string** | The municipality of the individual&#39;s residence | [optional]
**domicile_province** | **string** | The province of the individual&#39;s residence | [optional]
**domicile_nation** | **string** | The 2-digit country code of the individual&#39;s residence | [optional]
**email** | **string** | The email address of the individual | [optional]
**mobile_phone** | **string** | The mobile phone number of the individual, in Italian format. | [optional]
**digital_address** | **string** | The PEC (Italian Certified Email) address of the individual or organization. | [optional]
**fiscal_number** | **string** | Fiscal tax number for the individual. | [optional]
**iva_code** | **string** | The VAT number of the organization which was verified, or of the organization which the verified individual is associated with. | [optional]
**company_name** | **string** | The name of the organization which was verified, or of the organization which the verified individual is associated with. | [optional]
**company_fiscal_number** | **string** | The fiscal tax number of the organization which was verified, or of the organization which the verified individual is associated with. | [optional]
**registered_office** | **string** | The registered office address of the organization which was verified, or of the organization which the verified individual is associated with. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
