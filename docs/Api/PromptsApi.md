# Swagger\Client\PromptsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromptBot**](PromptsApi.md#createPromptBot) | **POST** /prompts/bots | Create a running Prompt Bot for a list
[**createVideoEmailPrompt**](PromptsApi.md#createVideoEmailPrompt) | **POST** /prompt | Prompts user to send a video
[**getAlternateCampaignContent**](PromptsApi.md#getAlternateCampaignContent) | **GET** /campaign/{campaignId}/content/alternate | List alternate campaign content
[**getPendingVideoEmailPrompts**](PromptsApi.md#getPendingVideoEmailPrompts) | **GET** /prompt/pending | List pending prompts
[**getPromptBots**](PromptsApi.md#getPromptBots) | **GET** /prompts/bots | List Prompt Bots
[**getPromptCampaigns**](PromptsApi.md#getPromptCampaigns) | **GET** /prompts/{userId}/campaigns | List Prompt Campaigns
[**getVideoEmailPrompt**](PromptsApi.md#getVideoEmailPrompt) | **GET** /prompt/{id} | Gets a prompt
[**getVideoEmailPrompts**](PromptsApi.md#getVideoEmailPrompts) | **GET** /prompt/ | List prompts
[**respondToVideoEmailPrompt**](PromptsApi.md#respondToVideoEmailPrompt) | **POST** /prompt/{id}/response | Respond to a prompt
[**syncPromptSubscriptions**](PromptsApi.md#syncPromptSubscriptions) | **POST** /prompts/campaigns/sync | Syncs Campaigns and One to Ones Subscriptions for User
[**updatePrompt**](PromptsApi.md#updatePrompt) | **PUT** /prompts/{id} | Update Prompt
[**updatePromptBot**](PromptsApi.md#updatePromptBot) | **PUT** /prompts/bots/{id} | Update Prompt Bot
[**updatePromptCampaign**](PromptsApi.md#updatePromptCampaign) | **PUT** /prompts/campaigns/{id} | Update Prompt Campaign
[**updatePromptTemplate**](PromptsApi.md#updatePromptTemplate) | **PUT** /prompts/{id}/content | Update Prompt Content


# **createPromptBot**
> \Swagger\Client\Model\PromptBot createPromptBot($emailId, $name, $subject, $content, $contactFieldValueColumn, $botTypeId, $templateId, $listId, $videoId, $endDate)

Create a running Prompt Bot for a list

Creates a Prompt Bot that sends emails to contacts on a list over the span of time defined.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$emailId = "emailId_example"; // string | The default email to use.
$name = "name_example"; // string | The name of the bot.
$subject = "subject_example"; // string | The subject of the default email.
$content = "content_example"; // string | The content used in the email.
$contactFieldValueColumn = "contactFieldValueColumn_example"; // string | The custom field value column with dates for this bot.
$botTypeId = "botTypeId_example"; // string | The type of bot to create.
$templateId = "templateId_example"; // string | The template used to create the email id.
$listId = "listId_example"; // string | The list id to attach the bot to.
$videoId = "videoId_example"; // string | The video used in the email.
$endDate = "endDate_example"; // string | The time frame to complete sending to the list.

try {
    $result = $api_instance->createPromptBot($emailId, $name, $subject, $content, $contactFieldValueColumn, $botTypeId, $templateId, $listId, $videoId, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->createPromptBot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailId** | **string**| The default email to use. |
 **name** | **string**| The name of the bot. |
 **subject** | **string**| The subject of the default email. |
 **content** | **string**| The content used in the email. |
 **contactFieldValueColumn** | **string**| The custom field value column with dates for this bot. |
 **botTypeId** | **string**| The type of bot to create. |
 **templateId** | **string**| The template used to create the email id. |
 **listId** | **string**| The list id to attach the bot to. | [optional]
 **videoId** | **string**| The video used in the email. | [optional]
 **endDate** | **string**| The time frame to complete sending to the list. | [optional]

### Return type

[**\Swagger\Client\Model\PromptBot**](../Model/PromptBot.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVideoEmailPrompt**
> \Swagger\Client\Model\VideoEmailPrompt createVideoEmailPrompt($prompt)

Prompts user to send a video

Sends the account holder an email prompting them to add a video to a scheduled outgoing message. Recipients, content and timing is all preset for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$prompt = new \Swagger\Client\Model\VideoEmailPrompt(); // \Swagger\Client\Model\VideoEmailPrompt | The Video Email Prompt to be created

try {
    $result = $api_instance->createVideoEmailPrompt($prompt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->createVideoEmailPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prompt** | [**\Swagger\Client\Model\VideoEmailPrompt**](../Model/\Swagger\Client\Model\VideoEmailPrompt.md)| The Video Email Prompt to be created |

### Return type

[**\Swagger\Client\Model\VideoEmailPrompt**](../Model/VideoEmailPrompt.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlternateCampaignContent**
> getAlternateCampaignContent($clientGroupId)

List alternate campaign content

Returns a list of alternate campaign content by campaign id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$clientGroupId = "clientGroupId_example"; // string | Id for the campaign

try {
    $api_instance->getAlternateCampaignContent($clientGroupId);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->getAlternateCampaignContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientGroupId** | **string**| Id for the campaign |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPendingVideoEmailPrompts**
> \Swagger\Client\Model\VideoEmailPrompt[] getPendingVideoEmailPrompts()

List pending prompts

Returns a list of prompts that have not been sent yet, and can still be customized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();

try {
    $result = $api_instance->getPendingVideoEmailPrompts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->getPendingVideoEmailPrompts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VideoEmailPrompt[]**](../Model/VideoEmailPrompt.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromptBots**
> \Swagger\Client\Model\PromptBot[] getPromptBots()

List Prompt Bots

Returns a list of all Prompt Bots for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();

try {
    $result = $api_instance->getPromptBots();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->getPromptBots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PromptBot[]**](../Model/PromptBot.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromptCampaigns**
> getPromptCampaigns()

List Prompt Campaigns

Returns a list of all Prompt Campaigns for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();

try {
    $api_instance->getPromptCampaigns();
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->getPromptCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoEmailPrompt**
> \Swagger\Client\Model\VideoEmailPrompt getVideoEmailPrompt($id)

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
    $result = $api_instance->getVideoEmailPrompt($id);
    print_r($result);
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

[**\Swagger\Client\Model\VideoEmailPrompt**](../Model/VideoEmailPrompt.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoEmailPrompts**
> \Swagger\Client\Model\VideoEmailPrompt[] getVideoEmailPrompts()

List prompts

Returns a list of all prompts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();

try {
    $result = $api_instance->getVideoEmailPrompts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->getVideoEmailPrompts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\VideoEmailPrompt[]**](../Model/VideoEmailPrompt.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **respondToVideoEmailPrompt**
> \Swagger\Client\Model\VideoEmailPrompt respondToVideoEmailPrompt($id, $choice, $videoId, $emailId, $subject)

Respond to a prompt

Respond to a prompt by either adding a video, sending without a video or cancelling the prompt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PromptsApi();
$id = "id_example"; // string | The id of the prompt.
$choice = "choice_example"; // string | The users' selection. Can be: WithVideo, WithEmail, Cancel, Restore, Reset, Manual
$videoId = "videoId_example"; // string | The id of the video.
$emailId = "emailId_example"; // string | The id of the email.
$subject = "subject_example"; // string | The subject of the email

try {
    $result = $api_instance->respondToVideoEmailPrompt($id, $choice, $videoId, $emailId, $subject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->respondToVideoEmailPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the prompt. |
 **choice** | **string**| The users&#39; selection. Can be: WithVideo, WithEmail, Cancel, Restore, Reset, Manual |
 **videoId** | **string**| The id of the video. | [optional]
 **emailId** | **string**| The id of the email. | [optional]
 **subject** | **string**| The subject of the email | [optional]

### Return type

[**\Swagger\Client\Model\VideoEmailPrompt**](../Model/VideoEmailPrompt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncPromptSubscriptions**
> syncPromptSubscriptions($migrate)

Syncs Campaigns and One to Ones Subscriptions for User

Syncs Campaigns and One to Ones Subscriptions for User based on their profile information. The user must be a Prompt Subscriber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$migrate = true; // bool | After syncing, migrate away from old campaigns.

try {
    $api_instance->syncPromptSubscriptions($migrate);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->syncPromptSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migrate** | **bool**| After syncing, migrate away from old campaigns. | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrompt**
> updatePrompt($id, $sendMechanism, $facebookMessage, $twitterMessage, $videoId, $emailId, $subject, $resetCache, $resetEmailContent, $status)

Update Prompt

Updates a Prompt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$id = "id_example"; // string | The prompt's id
$sendMechanism = "sendMechanism_example"; // string | The mechanism for the prompt to be sent
$facebookMessage = "facebookMessage_example"; // string | The facebook message assigned to the prompt
$twitterMessage = "twitterMessage_example"; // string | The twitter message assigned to the prompt
$videoId = "videoId_example"; // string | The id of the video.
$emailId = "emailId_example"; // string | The id of the email.
$subject = "subject_example"; // string | The subject of the email
$resetCache = "resetCache_example"; // string | The subject of the email
$resetEmailContent = "resetEmailContent_example"; // string | The subject of the email
$status = "status_example"; // string | The status of the prompt

try {
    $api_instance->updatePrompt($id, $sendMechanism, $facebookMessage, $twitterMessage, $videoId, $emailId, $subject, $resetCache, $resetEmailContent, $status);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->updatePrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The prompt&#39;s id |
 **sendMechanism** | **string**| The mechanism for the prompt to be sent | [optional]
 **facebookMessage** | **string**| The facebook message assigned to the prompt | [optional]
 **twitterMessage** | **string**| The twitter message assigned to the prompt | [optional]
 **videoId** | **string**| The id of the video. | [optional]
 **emailId** | **string**| The id of the email. | [optional]
 **subject** | **string**| The subject of the email | [optional]
 **resetCache** | **string**| The subject of the email | [optional]
 **resetEmailContent** | **string**| The subject of the email | [optional]
 **status** | **string**| The status of the prompt | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromptBot**
> \Swagger\Client\Model\PromptBot updatePromptBot($id, $emailId, $name, $subject, $content, $contactFieldValueColumn, $templateId, $listId, $videoId, $endDate, $status)

Update Prompt Bot

Updates a Prompt Bot's settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$id = "id_example"; // string | The bot id.
$emailId = "emailId_example"; // string | The default email to use.
$name = "name_example"; // string | The name of the bot.
$subject = "subject_example"; // string | The subject of the default email.
$content = "content_example"; // string | The content used in the default email.
$contactFieldValueColumn = "contactFieldValueColumn_example"; // string | The custom field value column with dates for this bot.
$templateId = "templateId_example"; // string | The template used to create the email id.
$listId = "listId_example"; // string | The list id to attach the bot to.
$videoId = "videoId_example"; // string | The video used in the default email.
$endDate = "endDate_example"; // string | The time frame to complete sending to the list.
$status = "status_example"; // string | The status of the bot.

try {
    $result = $api_instance->updatePromptBot($id, $emailId, $name, $subject, $content, $contactFieldValueColumn, $templateId, $listId, $videoId, $endDate, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->updatePromptBot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The bot id. |
 **emailId** | **string**| The default email to use. |
 **name** | **string**| The name of the bot. |
 **subject** | **string**| The subject of the default email. |
 **content** | **string**| The content used in the default email. |
 **contactFieldValueColumn** | **string**| The custom field value column with dates for this bot. |
 **templateId** | **string**| The template used to create the email id. |
 **listId** | **string**| The list id to attach the bot to. | [optional]
 **videoId** | **string**| The video used in the default email. | [optional]
 **endDate** | **string**| The time frame to complete sending to the list. | [optional]
 **status** | **string**| The status of the bot. | [optional]

### Return type

[**\Swagger\Client\Model\PromptBot**](../Model/PromptBot.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromptCampaign**
> updatePromptCampaign($clientGroupId, $brandedTemplateId, $personalTemplateId, $enabled, $sendMechanism)

Update Prompt Campaign

Updates a Prompt Campaign's Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$clientGroupId = "clientGroupId_example"; // string | The client group of the campaign.
$brandedTemplateId = "brandedTemplateId_example"; // string | The template to use for branded feel emails.
$personalTemplateId = "personalTemplateId_example"; // string | The template to use for personal feel emails.
$enabled = true; // bool | Set whether the user is able to start receiving prompts.
$sendMechanism = "sendMechanism_example"; // string | The way to send the prompt

try {
    $api_instance->updatePromptCampaign($clientGroupId, $brandedTemplateId, $personalTemplateId, $enabled, $sendMechanism);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->updatePromptCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientGroupId** | **string**| The client group of the campaign. |
 **brandedTemplateId** | **string**| The template to use for branded feel emails. | [optional]
 **personalTemplateId** | **string**| The template to use for personal feel emails. | [optional]
 **enabled** | **bool**| Set whether the user is able to start receiving prompts. | [optional]
 **sendMechanism** | **string**| The way to send the prompt | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromptTemplate**
> updatePromptTemplate($id, $alternateContentId, $newEmailId, $ogEmailId, $newExampleVideoId)

Update Prompt Content

Updates a Prompt Content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PromptsApi();
$id = "id_example"; // string | The prompt's id
$alternateContentId = "alternateContentId_example"; // string | The alternate content id
$newEmailId = "newEmailId_example"; // string | The prompt's new email id
$ogEmailId = "ogEmailId_example"; // string | The prompt's original email id
$newExampleVideoId = "newExampleVideoId_example"; // string | The prompt's new tutorial video id

try {
    $api_instance->updatePromptTemplate($id, $alternateContentId, $newEmailId, $ogEmailId, $newExampleVideoId);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->updatePromptTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The prompt&#39;s id |
 **alternateContentId** | **string**| The alternate content id |
 **newEmailId** | **string**| The prompt&#39;s new email id |
 **ogEmailId** | **string**| The prompt&#39;s original email id |
 **newExampleVideoId** | **string**| The prompt&#39;s new tutorial video id |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

