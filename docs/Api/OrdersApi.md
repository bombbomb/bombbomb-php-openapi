# Swagger\Client\OrdersApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateAssetDelete**](OrdersApi.md#templateAssetDelete) | **DELETE** /orders/templates/images | Deletes image from user s3 store


# **templateAssetDelete**
> templateAssetDelete($fileName)

Deletes image from user s3 store

Deletes image from user s3 store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrdersApi();
$fileName = "fileName_example"; // string | Filename for deletion

try {
    $api_instance->templateAssetDelete($fileName);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->templateAssetDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileName** | **string**| Filename for deletion |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

