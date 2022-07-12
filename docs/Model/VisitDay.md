# VisitDay

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**visit_date** | [**\DateTime**](\DateTime.md) | Date of the day | [optional] 
**start_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**end_index** | [**\Swagger\Client\Model\Index**](Index.md) |  | [optional] 
**travel_time** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**service_time** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**travel_time_after_last_visit** | [**\Swagger\Client\Model\Duration**](Duration.md) |  | [optional] 
**overnight_stay** | **bool** | True if an overnight stay occured on this day. The overnight location always matches the location of the last visit of the day. | [optional] 
**hotel_id** | **string** | Set only when overnightStayOptions and workLoadOptions are active. If hotels are given, it is one of the hotel-ids. If hotels are not given, it is one of the ids of orders. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

