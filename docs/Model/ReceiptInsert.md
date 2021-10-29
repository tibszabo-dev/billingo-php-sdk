# ReceiptInsert

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_id** | **string** |  | [optional] 
**partner_id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**emails** | **string[]** |  | [optional] 
**block_id** | **int** |  | 
**type** | [**\Swagger\Client\Model\DocumentType**](DocumentType.md) |  | 
**payment_method** | [**\Swagger\Client\Model\PaymentMethod**](PaymentMethod.md) |  | 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | 
**conversion_rate** | **float** |  | [optional] 
**electronic** | **bool** |  | [optional] [default to false]
**items** | [**\Swagger\Client\Model\OneOfReceiptInsertItemsItems[]**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

