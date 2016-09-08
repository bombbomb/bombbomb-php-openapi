# Swagger\Client\TeamsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJerichoSend**](TeamsApi.md#cancelJerichoSend) | **DELETE** /team/{teamId}/jericho/{jerichoId} | Cancel a Jericho Send
[**getClientGroupAssets**](TeamsApi.md#getClientGroupAssets) | **GET** /team/assets/ | Lists team assets
[**getJerichoSends**](TeamsApi.md#getJerichoSends) | **GET** /team/{teamId}/jericho | List Jericho Sends
[**getJerichoStats**](TeamsApi.md#getJerichoStats) | **GET** /team/{teamId}/jericho/{jerichoId}/performance | Gets Jericho performance statistics
[**queueJerichoSend**](TeamsApi.md#queueJerichoSend) | **POST** /team/{teamId}/jericho | Creates a Jericho send.


# **cancelJerichoSend**
> cancelJerichoSend($jerichoId)

Cancel a Jericho Send

Cancels a scheduled Jericho send from being sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$jerichoId = "jerichoId_example"; // string | ID of the Jericho Job to cancel

try {
    $api_instance->cancelJerichoSend($jerichoId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->cancelJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jerichoId** | **string**| ID of the Jericho Job to cancel |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientGroupAssets**
> \BombBomb\InlineResponse200 getClientGroupAssets($assetType, $teamId, $autoTagName, $pageSize, $page, $search)

Lists team assets

Returns a collection of assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$assetType = "assetType_example"; // string | The type of assets.
$teamId = "teamId_example"; // string | The team containing the assets.
$autoTagName = "autoTagName_example"; // string | The auto tag name containing the assets.
$pageSize = "pageSize_example"; // string | The number of items to retrieve in a single db query.
$page = "page_example"; // string | Zero-based index of the page of data to retrieve from the db.
$search = "search_example"; // string | Search words.

try {
    $result = $api_instance->getClientGroupAssets($assetType, $teamId, $autoTagName, $pageSize, $page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getClientGroupAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetType** | **string**| The type of assets. |
 **teamId** | **string**| The team containing the assets. | [optional]
 **autoTagName** | **string**| The auto tag name containing the assets. | [optional]
 **pageSize** | **string**| The number of items to retrieve in a single db query. | [optional]
 **page** | **string**| Zero-based index of the page of data to retrieve from the db. | [optional]
 **search** | **string**| Search words. | [optional]

### Return type

[**\BombBomb\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJerichoSends**
> \BombBomb\JerichoConfiguration[] getJerichoSends($teamId)

List Jericho Sends

Lists Jericho sends, both pending and sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team whose Jericho sends you wish to see.

try {
    $result = $api_instance->getJerichoSends($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getJerichoSends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team whose Jericho sends you wish to see. |

### Return type

[**\BombBomb\JerichoConfiguration[]**](../Model/JerichoConfiguration.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJerichoStats**
> \BombBomb\JerichoPerformance getJerichoStats($jerichoId, $teamId)

Gets Jericho performance statistics

Returns an aggregate view of the performance of a Jericho send

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$jerichoId = "jerichoId_example"; // string | ID of the Jericho job
$teamId = "teamId_example"; // string | ID of team through which Jericho was sent

try {
    $result = $api_instance->getJerichoStats($jerichoId, $teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getJerichoStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jerichoId** | **string**| ID of the Jericho job |
 **teamId** | **string**| ID of team through which Jericho was sent |

### Return type

[**\BombBomb\JerichoPerformance**](../Model/JerichoPerformance.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueJerichoSend**
> \BombBomb\JerichoConfiguration queueJerichoSend($config, $teamId)

Creates a Jericho send.

Sends email content on behalf of members of a client group. There are two forms this send can take:         Static Email, and Video Prompt. Static emails require only an emailId.         Video Prompts build emails dynamically and require most of the other fields.         You must be an administrator of a Team Account to use this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$config = new \BombBomb\JerichoConfiguration(); // \BombBomb\JerichoConfiguration | JSON representing a Jericho configuration
$teamId = "teamId_example"; // string | The ID of the team.

try {
    $result = $api_instance->queueJerichoSend($config, $teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->queueJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\BombBomb\JerichoConfiguration**](../Model/\BombBomb\JerichoConfiguration.md)| JSON representing a Jericho configuration |
 **teamId** | **string**| The ID of the team. |

### Return type

[**\BombBomb\JerichoConfiguration**](../Model/JerichoConfiguration.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
