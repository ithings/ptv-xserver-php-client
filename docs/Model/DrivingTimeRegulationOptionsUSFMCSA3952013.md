# DrivingTimeRegulationOptionsUSFMCSA3952013

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thirty_four_hour_restart_rule** | **bool** | Tells if the 34-hour restart can be applied after the weekly on duty hours limit has been reached. Basically, if 34 or more consecutive hours off duty are taken, it restarts the weekly on duty hours counting to zero. | [optional] 
**weekly_on_duty_hours_limit** | [**\Swagger\Client\Model\WeeklyOnDutyHoursLimitUSFMCSA3952013**](WeeklyOnDutyHoursLimitUSFMCSA3952013.md) |  | [optional] 
**twenty_four_hour_period_starts_at** | [**\Swagger\Client\Model\TimeOfDay**](TimeOfDay.md) |  | [optional] 
**thirty_minute_break_rule** | **bool** | Tells if the 30-minute break provision is enforced after 8 on-duty consecutive hours (e.g. it is not required to be enforced for short haul operations). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

