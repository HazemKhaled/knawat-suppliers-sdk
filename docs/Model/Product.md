# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Unique sku of product | 
**barcode** | **string** | Unique barcode of product | 
**supplier_id** | **string** |  | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date the supplier was created | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The last date the supplier was updated. | [optional] 
**url** | **string** | Product URL | 
**qualified** | **float** | Product qualified status&#x3D; 1: Qualified, 2: Needs to review, 4: Disqualified, 5 : Draft | [optional] 
**name** | [**\Swagger\Client\Model\ProductName**](ProductName.md) |  | 
**description** | [**\Swagger\Client\Model\ProductDescription**](ProductDescription.md) |  | [optional] 
**description_short** | [**\Swagger\Client\Model\ProductDescriptionShort**](ProductDescriptionShort.md) |  | [optional] 
**brand** | [**\Swagger\Client\Model\ProductBrand**](ProductBrand.md) |  | [optional] 
**images** | **string[]** |  | 
**categories** | [**\Swagger\Client\Model\ProductCategories[]**](ProductCategories.md) |  | [optional] 
**attributes** | [**\Swagger\Client\Model\ProductAttributes[]**](ProductAttributes.md) |  | [optional] 
**variations** | [**\Swagger\Client\Model\ProductVariations[]**](ProductVariations.md) | One or more variants of product | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

