# DrivingTimeRegulationOptionsUSFMCSA3952020

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thirty_four_hour_restart_rule** | **bool** | Tells if the 34-hour restart can be applied after the weekly on duty hours limit has been reached. Basically, if 34 or more consecutive hours off duty are taken, it restarts the weekly on duty hours counting to zero. | [optional] 
**weekly_on_duty_hours_limit** | [**\ithings\ptvxserver\model\WeeklyOnDutyHoursLimitUSFMCSA3952020**](WeeklyOnDutyHoursLimitUSFMCSA3952020.md) |  | [optional] 
**twenty_four_hour_period_starts_at** | [**\ithings\ptvxserver\model\TimeOfDay**](TimeOfDay.md) |  | [optional] 
**thirty_minute_break_rule** | **bool** | Tells if the 30-minute break provision is enforced after 8 cumulative hours of driving time (e.g. it is not required to be enforced for short haul operations). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

