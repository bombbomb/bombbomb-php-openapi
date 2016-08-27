# Swagger\Client\TeamsApi

All URIs are relative to *https://dev.api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queueJerichoSend**](TeamsApi.md#queueJerichoSend) | **POST** /team/{teamId}/jericho | Creates a Jericho send.


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

