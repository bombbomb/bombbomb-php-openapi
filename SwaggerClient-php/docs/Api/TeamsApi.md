# Swagger\Client\TeamsApi

All URIs are relative to *https://dev.api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJerichoSend**](TeamsApi.md#cancelJerichoSend) | **DELETE** /team/{teamId}/jericho/{jerichoId} | Cancel a Jericho Send
[**getClientGroupAssets**](TeamsApi.md#getClientGroupAssets) | **GET** /team/assets/ | Lists team assets
[**getJerichoSends**](TeamsApi.md#getJerichoSends) | **GET** /team/{teamId}/jericho | List Jericho Sends
[**queueJerichoSend**](TeamsApi.md#queueJerichoSend) | **POST** /team/{teamId}/jericho | Creates a Jericho send.


# **cancelJerichoSend**
> cancelJerichoSend($jericho_id)

Cancel a Jericho Send

Cancels a scheduled Jericho send from being sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$jericho_id = "jericho_id_example"; // string | ID of the Jericho Job to cancel

try {
    $api_instance->cancelJerichoSend($jericho_id);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->cancelJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jericho_id** | **string**| ID of the Jericho Job to cancel |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientGroupAssets**
> \Swagger\Client\Model\InlineResponse200 getClientGroupAssets($asset_type, $team_id, $auto_tag_name, $page_size, $page, $search)

Lists team assets

Returns a collection of assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$asset_type = "asset_type_example"; // string | The type of assets.
$team_id = "team_id_example"; // string | The team containing the assets.
$auto_tag_name = "auto_tag_name_example"; // string | The auto tag name containing the assets.
$page_size = "page_size_example"; // string | The number of items to retrieve in a single db query.
$page = "page_example"; // string | Zero-based index of the page of data to retrieve from the db.
$search = "search_example"; // string | Search words.

try {
    $result = $api_instance->getClientGroupAssets($asset_type, $team_id, $auto_tag_name, $page_size, $page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getClientGroupAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_type** | **string**| The type of assets. |
 **team_id** | **string**| The team containing the assets. | [optional]
 **auto_tag_name** | **string**| The auto tag name containing the assets. | [optional]
 **page_size** | **string**| The number of items to retrieve in a single db query. | [optional]
 **page** | **string**| Zero-based index of the page of data to retrieve from the db. | [optional]
 **search** | **string**| Search words. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJerichoSends**
> \Swagger\Client\Model\JerichoConfiguration[] getJerichoSends($team_id)

List Jericho Sends

Lists Jericho sends, both pending and sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$team_id = "team_id_example"; // string | The team whose Jericho sends you wish to see.

try {
    $result = $api_instance->getJerichoSends($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getJerichoSends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **string**| The team whose Jericho sends you wish to see. |

### Return type

[**\Swagger\Client\Model\JerichoConfiguration[]**](../Model/JerichoConfiguration.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueJerichoSend**
> \Swagger\Client\Model\JerichoConfiguration queueJerichoSend($config, $team_id)

Creates a Jericho send.

Sends email content on behalf of members of a client group. There are two forms this send can take:         Static Email, and Video Prompt. Static emails require only an emailId.         Video Prompts build emails dynamically and require most of the other fields.         You must be an administrator of a Team Account to use this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$config = new \Swagger\Client\Model\JerichoConfiguration(); // \Swagger\Client\Model\JerichoConfiguration | JSON representing a Jericho configuration
$team_id = "team_id_example"; // string | The ID of the team.

try {
    $result = $api_instance->queueJerichoSend($config, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->queueJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\Swagger\Client\Model\JerichoConfiguration**](../Model/\Swagger\Client\Model\JerichoConfiguration.md)| JSON representing a Jericho configuration |
 **team_id** | **string**| The ID of the team. |

### Return type

[**\Swagger\Client\Model\JerichoConfiguration**](../Model/JerichoConfiguration.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

