# # MdlOutputCertificateData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serial_number** | **string** | The serial number of the certificate |
**common_name** | **string** | The common name (CN) of the certificate |
**state_or_province_name** | **string** | The stateOrProvinceName field from the signing certificate.              Per the ISO 18013-5 (mDL) spec, this is an ISO 3166-2:2020 country subdivision code (e.g., \&quot;US-CA\&quot; for California, USA).              May be an empty string for certificates which are not state-specific (e.g., Google Wallet&#39;s ID Pass certificates). |
**not_before** | **\DateTime** | The date before which this certificate is not valid. |
**not_after** | **\DateTime** | The date after which this certificate is not valid. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
