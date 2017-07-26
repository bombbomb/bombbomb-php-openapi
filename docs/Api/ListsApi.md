# Swagger\Client\ListsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearList**](ListsApi.md#clearList) | **PUT** /lists/{listId}/clear | Clear Contacts from List
[**copyListContacts**](ListsApi.md#copyListContacts) | **POST** /lists/{listId}/copy | Copy All Contacts from a List
[**suppressAllInList**](ListsApi.md#suppressAllInList) | **PUT** /lists/{listId}/suppress | Suppress All Contacts from List


# **clearList**
> clearList($listId)

Clear Contacts from List

Clears all contacts from a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ListsApi();
$listId = "listId_example"; // string | The list to be cleared.

try {
    $api_instance->clearList($listId);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->clearList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listId** | **string**| The list to be cleared. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyListContacts**
> copyListContacts($fromListId, $listId)

Copy All Contacts from a List

Copy all contacts from a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ListsApi();
$fromListId = "fromListId_example"; // string | The list to be cleared.
$listId = "listId_example"; // string | The list to be cleared.

try {
    $api_instance->copyListContacts($fromListId, $listId);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->copyListContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromListId** | **string**| The list to be cleared. |
 **listId** | **string**| The list to be cleared. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppressAllInList**
> suppressAllInList($listId)

Suppress All Contacts from List

Suppresses all contacts in a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ListsApi();
$listId = "listId_example"; // string | The list to be cleared.

try {
    $api_instance->suppressAllInList($listId);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->suppressAllInList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listId** | **string**| The list to be cleared. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
