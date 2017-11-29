# Swagger\Client\IntegrationsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**syncUsersIntegratedLists**](IntegrationsApi.md#syncUsersIntegratedLists) | **GET** /integrations/sync | Synchronize your integration list or lists.


# **syncUsersIntegratedLists**
> string syncUsersIntegratedLists($integrationId)

Synchronize your integration list or lists.

Synchronize your integration contact list with the service you are integrated with. If no integration code is provided, all integrations will be synchronized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\IntegrationsApi();
$integrationId = "integrationId_example"; // string | The integration to sync lists for. All integrations will sync if nothing is provided.

try {
    $result = $api_instance->syncUsersIntegratedLists($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->syncUsersIntegratedLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| The integration to sync lists for. All integrations will sync if nothing is provided. | [optional]

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

