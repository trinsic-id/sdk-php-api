# # YotiStructuredPostalAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | The address&#39;s country. This field does not have a specified format, but is recommended to use for the country field. | [optional]
**country_iso** | **string** | The address&#39;s ISO alpha-3 country code | [optional]
**formatted_address** | **string** | The whole address in proper order and formatted with line breaks.              Examples: United Kingdom: \&quot;15a North Street\\nCARSHALTON\\nSM5 2HW\\nUK\&quot; India: \&quot;S/O: Vipen Kumar Aggarwal\\nHouse No.86-A\\nRajguru Nagar\\nLudhiana\\nPunjab\\n141012\\nIndia\&quot; United States of America: \&quot;1512 Ferry Street\\nAnniston AL 36201\\nUSA\&quot; | [optional]
**line1** | **string** | The first line of the address | [optional]
**line2** | **string** | The second line of the address | [optional]
**line3** | **string** | The third line of the address | [optional]
**line4** | **string** | The fourth line of the address | [optional]
**town_city** | **string** | The address&#39;s town or city | [optional]
**state** | **string** | The address&#39;s state. This is an optional field that may only appear for US addresses. | [optional]
**postal_code** | **string** | The address&#39;s postal code | [optional]
**building_number** | **string** | The address&#39;s building number | [optional]
**building** | **string** | The address&#39;s building name | [optional]
**sub_building** | **string** | The address&#39;s sub building or specific part of the building | [optional]
**locality** | **string** | The address&#39;ss locality can be an area, a village, a region, or a known neighborhood | [optional]
**delivery_point_reference_number** | **string** | The unique delivery point reference number. This is an 8-digit code used in the UK for identifying delivery addresses. | [optional]
**landmark** | **string** | The address&#39;s landmark. A landmark is a recognizable feature or place that helps locate the address. This optional field may appear only for Indian addresses. | [optional]
**subdistrict** | **string** | The address&#39;s subdistrict. This optional field may appear only for Indian addresses. | [optional]
**district** | **string** | The address&#39;s district. This optional field may appear only for Indian addresses. | [optional]
**post_office** | **string** | The address&#39;s post office. This optional field may appear only for Indian addresses. | [optional]
**care_of** | **string** | The address&#39;s care-of field. This indicates that mail should be delivered to an individual through another person or entity who is a known resident at the address. This optional field may appear only for Indian addresses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
