# SingpassMyInfoRegisteredAddressOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The address type.              Possible values: - SG (Structured Address) - UNFORMATTED              Structured addresses most likely will be a Singapore address. Unformatted are typically a non-Singapore address, however it might still be an unformatted Singapore address. | [optional]
**block** | **string** | The block number.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**building** | **string** | The building name.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**floor** | **string** | The floor number.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**unit** | **string** | The unit number.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**street** | **string** | The street name.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**postal** | **string** | The postal code.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**country** | **string** | The ISO-2 country code and description for the address.              This will only be present if the type is \&quot;SG\&quot; | [optional]
**line1** | **string** | The first line of the unformatted address.              This will only be present if the type is \&quot;UNFORMATTED\&quot; | [optional]
**line2** | **string** | The second line of the unformatted address.              This will only be present if the type is \&quot;UNFORMATTED\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
