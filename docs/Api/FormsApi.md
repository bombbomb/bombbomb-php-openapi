# Swagger\Client\FormsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFormTrackingAsCsv**](FormsApi.md#getFormTrackingAsCsv) | **GET** /forms/{id}/tracking/export | Get csv


# **getFormTrackingAsCsv**
> getFormTrackingAsCsv($id)

Get csv

Get form tracking as csv

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FormsApi();
$id = "id_example"; // string | Id of the form

try {
    $api_instance->getFormTrackingAsCsv($id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormTrackingAsCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the form |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

