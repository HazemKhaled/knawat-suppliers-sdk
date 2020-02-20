# Supplier

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identification to represent a supplier | 
**name** | **string** | Supplier name | 
**project_key** | **string** | No spaces, no special characters | [optional] 
**email** | **string** | Unique email of supplier | 
**logo** | **string** | PNG alpha image, recommended 512*512px | [optional] 
**excluded_brands** | **string** | Comma separated brands to exclude. product will automatically disqualify if it has brand from this value | [optional] 
**excluded_attributes** | **string** | Comma separated attributes to exclude. product will automatically disqualify if it has attributes from this value | [optional] 
**excluded_categories** | **string** | Comma separated categories to exclude. product will automatically disqualify if it has category from this value | [optional] 
**skipping_words** | **string** | Comma separated words to remove from name and description | [optional] 
**vat** | **float** | vat to add on product if vat is not provided in product variation | [optional] 
**url** | **string** | Supplier online store URL | 
**active** | **bool** | true or false | [optional] 
**beta** | **bool** | true or false | [optional] 
**cost_price** | **float** |  | [optional] 
**sale_price** | **float** |  | [optional] 
**currency_rate** | **float** |  | [optional] 
**currency** | **string** | The default currency for products price | 
**languages** | **string[]** |  | 
**created_date** | [**\DateTime**](\DateTime.md) | The date the supplier was created | [optional] 
**updated_date** | [**\DateTime**](\DateTime.md) | The last date the supplier was updated. | [optional] 
**address** | [**\Swagger\Client\Model\SupplierAddress[]**](SupplierAddress.md) | One or more address for supplier warehouses | [optional] 
**billing** | [**\Swagger\Client\Model\SupplierBilling**](SupplierBilling.md) |  | [optional] 
**bank** | [**\Swagger\Client\Model\SupplierBank**](SupplierBank.md) |  | [optional] 
**users** | [**\Swagger\Client\Model\SupplierUsers[]**](SupplierUsers.md) | At least one owner should be there in the array | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

