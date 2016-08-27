# Swagger\Client\PromptsApi

All URIs are relative to *https://dev.api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVideoEmailPrompt**](PromptsApi.md#createVideoEmailPrompt) | **POST** /prompt | Prompts user to send a video
[**getVideoEmailPrompt**](PromptsApi.md#getVideoEmailPrompt) | **GET** /prompt/{id} | Gets a prompt
[**respondToVideoEmailPrompt**](PromptsApi.md#respondToVideoEmailPrompt) | **POST** /prompt/{id}/response | Respond to a prompt


# **createVideoEmailPrompt**
> createVideoEmailPrompt($prompt)

Prompts user to send a video

Sends the account holder an email prompting them to add a video to a scheduled outgoing message. Recipients, content and timing is all preset for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PromptsApi();
$prompt = new \Swagger\Client\Model\JerichoConfiguration(); // \Swagger\Client\Model\JerichoConfiguration | The Video Email Prompt to be created

try {
    $api_instance->createVideoEmailPrompt($prompt);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->createVideoEmailPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prompt** | [**\Swagger\Client\Model\JerichoConfiguration**](../Model/\Swagger\Client\Model\JerichoConfiguration.md)| The Video Email Prompt to be created |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoEmailPrompt**
> getVideoEmailPrompt($id)

Gets a prompt

Gets a prompt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$id = "id_example"; // string | The Id of the prompt

try {
    $api_instance->getVideoEmailPrompt($id);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->getVideoEmailPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The Id of the prompt |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **respondToVideoEmailPrompt**
> respondToVideoEmailPrompt($id, $choice, $video_id)

Respond to a prompt

Respond to a prompt by either adding a video, sending without a video or cancelling the prompt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PromptsApi();
$id = "id_example"; // string | The id of the prompt.
$choice = "choice_example"; // string | The users' selection. Can be: WithVideo, WithoutVideo, Cancel
$video_id = "video_id_example"; // string | The id of the video.

try {
    $api_instance->respondToVideoEmailPrompt($id, $choice, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->respondToVideoEmailPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the prompt. |
 **choice** | **string**| The users&#39; selection. Can be: WithVideo, WithoutVideo, Cancel |
 **video_id** | **string**| The id of the video. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

