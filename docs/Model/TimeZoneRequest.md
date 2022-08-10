# TimeZoneRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**coordinate** | [**\ithings\ptvxserver\model\Coordinate**](Coordinate.md) |  | 
**reference_date** | [**\DateTime**](\DateTime.md) | The date to determine the daylight saving time for the given location. If not specified the time zone valid now will be returned. If daylight saving time changes at this date, the status at 12 noon will be assumed. Consequently, if daylight saving time changes from winter to summer at this date, summer will be returned. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

