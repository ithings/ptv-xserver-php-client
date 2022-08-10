# AllowedItemOrientations

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original** | **bool** | Item are is allowed to be packed unrotated. Dimensions stay (x,y,z). | [optional] 
**x** | **bool** | Items are allowed to be packed rotated widthwise (around x-axis) by 90 degrees. Dimensions would be (x,z,y). | [optional] 
**y** | **bool** | Items are allowed to be packed rotated heightwise (around y-axis) by 90 degrees. Dimensions would be (z,y,x). | [optional] 
**z** | **bool** | Items are allowed to be packed rotated lengthwise (around z-axis) by 90 degrees. Dimensions would be (y,x,z). | [optional] 
**xz** | **bool** | Items are allowed to be packed rotated width- then heightwise (around x- then z-axis) by 90 degrees. Dimensions would be (z,x,y). | [optional] 
**yz** | **bool** | Items are allowed to be packed rotated length- then heightwise (around its y- then z-axis) by 90 degrees. Dimensions would be (y,z,x). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

