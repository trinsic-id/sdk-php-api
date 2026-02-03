# # KenyaNidLookup2Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**district** | **string** | The district where the person resides.              This is the highest level of the pre-2010 administrative hierarchy stored in IPRS. Districts were the primary administrative units under Kenya&#39;s provincial system before the change to counties in 2010. Districts roughly correspond to sub-counties in the current administrative structure. | [optional]
**division** | **string** | The division within the district.              This is the second level of the pre-2010 administrative hierarchy. Divisions were administrative units between districts and locations. | [optional]
**location** | **string** | The location within the division.              This is the third level of the pre-2010 administrative hierarchy. Locations were the smallest administrative units. | [optional]
**additional_lines** | **string[]** | Additional address lines that appear before the structured administrative parts.              May include P.O. Box (format: \&quot;P O BOX [number] [location]\&quot;), village names, estate names, or other informal locality information. | [optional]
**raw** | **string** | The raw, unparsed address string as returned from IPRS (Integrated Population Registration System).              This preserves the original newline-separated format containing both informal address components (village, P.O. Box) and labeled administrative divisions (LOCATION, DIVISION, DISTRICT). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
