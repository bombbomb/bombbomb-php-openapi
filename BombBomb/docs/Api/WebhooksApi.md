# Swagger\Client\WebhooksApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWebHook**](WebhooksApi.md#addWebHook) | **POST** /webhook | Add Webhook
[**deleteWebHook**](WebhooksApi.md#deleteWebHook) | **DELETE** /webhook/{hookId} | Deletes Webhook
[**getWebHooks**](WebhooksApi.md#getWebHooks) | **GET** /webhook/ | Lists Webhooks
[**sendWebhookExample**](WebhooksApi.md#sendWebhookExample) | **POST** /webhook/test | Sends test Webhook


# **addWebHook**
> \BombBomb\BBWebHook addWebHook($hookUrl)

Add Webhook

Idempotently adds a Webhook url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$hookUrl = "hookUrl_example"; // string | The Url of your listener

try {
    $result = $api_instance->addWebHook($hookUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->addWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hookUrl** | **string**| The Url of your listener |

### Return type

[**\BombBomb\BBWebHook**](../Model/BBWebHook.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebHook**
> string deleteWebHook($hookId)

Deletes Webhook

Deletes a Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$hookId = "hookId_example"; // string | The id of the webhook to delete

try {
    $result = $api_instance->deleteWebHook($hookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hookId** | **string**| The id of the webhook to delete |

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebHooks**
> \BombBomb\BBWebHook[] getWebHooks()

Lists Webhooks

Lists all registered Webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebhooksApi();

try {
    $result = $api_instance->getWebHooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BombBomb\BBWebHook[]**](../Model/BBWebHook.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendWebhookExample**
> sendWebhookExample()

Sends test Webhook

Triggers a test webhook to be sent to your endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebhooksApi();

try {
    $api_instance->sendWebhookExample();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->sendWebhookExample: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

