# Clustering

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compactness_level** | [**\Swagger\Client\Model\CompactnessLevel**](CompactnessLevel.md) |  | [optional] 
**approximation_tolerance** | [**\Swagger\Client\Model\ApproximationTolerance**](ApproximationTolerance.md) |  | [optional] 
**perform_preprocessing_step** | **bool** | Perform preprocessing to reduce the complexity of the optimization problem. For example by excluding forbidden or redundant combinations. For large problems the preprocessing itself can be very time-consuming. | [optional] 
**boost_activity_importance** | **bool** | Setting this parameter will privilege important locations with high activity when determining territory centers. | [optional] 
**maximum_number_of_iterations** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**minimum_relative_improvement** | [**\Swagger\Client\Model\MinimumRelativeImprovement**](MinimumRelativeImprovement.md) |  | [optional] 
**maximum_number_of_starts** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**maximum_number_of_samplings** | [**\Swagger\Client\Model\PositiveInteger**](PositiveInteger.md) |  | [optional] 
**number_of_nearest_neighbors** | [**\Swagger\Client\Model\NumberOfNearestNeighbors**](NumberOfNearestNeighbors.md) |  | [optional] 
**reassignment_method** | [**\Swagger\Client\Model\ReassignmentMethod**](ReassignmentMethod.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

