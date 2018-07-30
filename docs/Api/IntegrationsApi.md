# Swagger\Client\IntegrationsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**connectIntegration**](IntegrationsApi.md#connectIntegration) | **POST** /integrations | Activate an integration for a user.
[**deleteIntegration**](IntegrationsApi.md#deleteIntegration) | **DELETE** /integrations | Remove an integration for a user.
[**getIntegrationHealth**](IntegrationsApi.md#getIntegrationHealth) | **GET** /integrations/health/{code} | Get health for a given integration
[**getIntegrationPageComponents**](IntegrationsApi.md#getIntegrationPageComponents) | **GET** /integrations/pageComponents | Get page components for a given integration
[**syncUsersIntegratedLists**](IntegrationsApi.md#syncUsersIntegratedLists) | **GET** /integrations/sync | Synchronize your integration list or lists.


# **connectIntegration**
> connectIntegration($code, $key, $secret, $token, $data, $overwrite)

Activate an integration for a user.

Provide the correct parameters to enable an integration. Required Parameters vary based on the desired          integration. Integrations requiring OAuth will provide the OAuth link that the user must be presented.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The identifier of the integration.
$key = "key_example"; // string | The key value.
$secret = "secret_example"; // string | The secret value.
$token = "token_example"; // string | The token value.
$data = "data_example"; // string | The data value as JSON.
$overwrite = "overwrite_example"; // string | Boolean value to know whether or not to delete the integration if it already exists

try {
    $apiInstance->connectIntegration($code, $key, $secret, $token, $data, $overwrite);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->connectIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The identifier of the integration. |
 **key** | **string**| The key value. | [optional]
 **secret** | **string**| The secret value. | [optional]
 **token** | **string**| The token value. | [optional]
 **data** | **string**| The data value as JSON. | [optional]
 **overwrite** | **string**| Boolean value to know whether or not to delete the integration if it already exists | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIntegration**
> deleteIntegration($id, $code)

Remove an integration for a user.

Remove an integration by providing the integration id or integration code. Only provide one of the             parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Integration ID
$code = "code_example"; // string | Integration Code

try {
    $apiInstance->deleteIntegration($id, $code);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Integration ID | [optional]
 **code** | **string**| Integration Code | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationHealth**
> getIntegrationHealth($code)

Get health for a given integration

Get health for an integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The integration code for which to retrieve the information from

try {
    $apiInstance->getIntegrationHealth($code);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The integration code for which to retrieve the information from |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationPageComponents**
> getIntegrationPageComponents($integrationName)

Get page components for a given integration

Get all page components for an integration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationName = "integrationName_example"; // string | The integration for which to retrieve HTML page components.

try {
    $apiInstance->getIntegrationPageComponents($integrationName);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationPageComponents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationName** | **string**| The integration for which to retrieve HTML page components. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncUsersIntegratedLists**
> string syncUsersIntegratedLists($integrationId)

Synchronize your integration list or lists.

Synchronize your integration contact list with the service you are integrated with. If no integration code is provided, all integrations will be synchronized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | The integration to sync lists for. All integrations will sync if nothing is provided.

try {
    $result = $apiInstance->syncUsersIntegratedLists($integrationId);
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

