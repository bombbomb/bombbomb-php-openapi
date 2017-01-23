# Swagger\Client\AutomationsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDripDropStats**](AutomationsApi.md#getDripDropStats) | **GET** /automation/{dripId}/dripdrop/{dripDropId}/stats | Get Automation Email Stats
[**getDripStats**](AutomationsApi.md#getDripStats) | **GET** /automation/{id}/stats | Get Automation Stats


# **getDripDropStats**
> getDripDropStats($dripId, $dripDropId)

Get Automation Email Stats

Get Automation Email Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AutomationsApi();
$dripId = "dripId_example"; // string | The id of the drip
$dripDropId = "dripDropId_example"; // string | The id of the drip drop

try {
    $api_instance->getDripDropStats($dripId, $dripDropId);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getDripDropStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dripId** | **string**| The id of the drip |
 **dripDropId** | **string**| The id of the drip drop |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDripStats**
> getDripStats($id)

Get Automation Stats

Get Automation Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AutomationsApi();
$id = "id_example"; // string | The id of the automation

try {
    $api_instance->getDripStats($id);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getDripStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the automation |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

