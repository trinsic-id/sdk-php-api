# # BrazilDigitalCnhInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpf_number** | **string** | The user&#39;s 11-digit, numeric CPF Number |
**digital_cnh_file** | **string** | The raw bytes of the digital CNH file collected from the user.                TODO: Lucas or JP help me describe these below vvvvvvvv  This can be:  - An image containing a physical or digital QR code  - A PDF file exported from the CNH app  - Some scary third thing? | [optional]
**digital_cnh_file_content_type** | **string** | The MIME Type of the file contained in &#x60;DigitalCnhFile&#x60;.                Must be one of &#x60;application/pdf&#x60;, &#x60;image/jpeg&#x60;, or &#x60;image/png&#x60;. | [optional]
**facial_biometry_photo** | **string** | The raw bytes of the image of the user&#39;s face, collected for biometric comparison. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
