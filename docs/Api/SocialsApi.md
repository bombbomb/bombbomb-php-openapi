# Swagger\Client\SocialsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFacebookPages**](SocialsApi.md#getFacebookPages) | **GET** /socials/facebook/pages | Gets facebook pages
[**getSocialArticleProperties**](SocialsApi.md#getSocialArticleProperties) | **GET** /socials/properties | Gets the social email properties
[**getSocialAuthorizations**](SocialsApi.md#getSocialAuthorizations) | **GET** /socials/authorizations | Get authorizations for all social integration
[**getSocialProfileProperties**](SocialsApi.md#getSocialProfileProperties) | **GET** /socials/profile | Gets the profile properties
[**getSocialStats**](SocialsApi.md#getSocialStats) | **GET** /socials/{promptId}/stats | Get social stats for a prompt
[**postSocialContent**](SocialsApi.md#postSocialContent) | **POST** /socials/content | Creates social content
[**retrySocialSend**](SocialsApi.md#retrySocialSend) | **POST** /socials/send/retry | Sends social content
[**sendSocial**](SocialsApi.md#sendSocial) | **POST** /socials/send | Sends social content
[**updateClientGroupSendMechanism**](SocialsApi.md#updateClientGroupSendMechanism) | **PUT** /socials/client/sendMechanism | Gets the auto shares from the client group assoc id
[**updateClientGroupsSendMechanism**](SocialsApi.md#updateClientGroupsSendMechanism) | **PUT** /socials/client/sendMechanisms | Toggles the prompt campaigns in a users account
[**updateFacebookPages**](SocialsApi.md#updateFacebookPages) | **PUT** /socials/facebook/pages | Updates facebook page Ids
[**updateSocialContent**](SocialsApi.md#updateSocialContent) | **PUT** /socials/content | Updates social content


# **getFacebookPages**
> getFacebookPages()

Gets facebook pages

Gets facebook pages by client id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getFacebookPages();
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getFacebookPages: ', $e->getMessage(), PHP_EOL;
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

# **getSocialArticleProperties**
> getSocialArticleProperties($emailId, $socialContentId)

Gets the social email properties

Gets the social email properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailId = "emailId_example"; // string | This is the email Id for the email url
$socialContentId = "socialContentId_example"; // string | This is the social content Id

try {
    $apiInstance->getSocialArticleProperties($emailId, $socialContentId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialArticleProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailId** | **string**| This is the email Id for the email url |
 **socialContentId** | **string**| This is the social content Id |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSocialAuthorizations**
> getSocialAuthorizations($clientGroupId)

Get authorizations for all social integration

Get authorizations and autoshares for all social integration and has redirect for user to login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientGroupId = "clientGroupId_example"; // string | ID of the client group association

try {
    $apiInstance->getSocialAuthorizations($clientGroupId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientGroupId** | **string**| ID of the client group association | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSocialProfileProperties**
> getSocialProfileProperties($socialType)

Gets the profile properties

Gets the social profile properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$socialType = "socialType_example"; // string | The social type

try {
    $apiInstance->getSocialProfileProperties($socialType);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialProfileProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **socialType** | **string**| The social type |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSocialStats**
> getSocialStats($promptId)

Get social stats for a prompt

Get social stats for a prompt by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | ID of the prompt

try {
    $apiInstance->getSocialStats($promptId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| ID of the prompt |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSocialContent**
> postSocialContent($emailId)

Creates social content

Creates social content for an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailId = "emailId_example"; // string | The email's id

try {
    $apiInstance->postSocialContent($emailId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->postSocialContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailId** | **string**| The email&#39;s id |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrySocialSend**
> retrySocialSend($promptId)

Sends social content

Sends social content that failed for a user via their associated prompt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | The prompt id

try {
    $apiInstance->retrySocialSend($promptId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->retrySocialSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| The prompt id |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSocial**
> sendSocial($promptId, $socialType)

Sends social content

Sends social content for a user via their associated prompt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | The prompt id
$socialType = "socialType_example"; // string | The destination for social content

try {
    $apiInstance->sendSocial($promptId, $socialType);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->sendSocial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| The prompt id |
 **socialType** | **string**| The destination for social content |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientGroupSendMechanism**
> updateClientGroupSendMechanism($sendMechanism, $clientGroupId, $enabled)

Gets the auto shares from the client group assoc id

Gets the auto shares from the client group assoc id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendMechanism = "sendMechanism_example"; // string | The send mechanism for the prompt
$clientGroupId = "clientGroupId_example"; // string | ID of the client group association
$enabled = "enabled_example"; // string | Is the send mechanism enabled?

try {
    $apiInstance->updateClientGroupSendMechanism($sendMechanism, $clientGroupId, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateClientGroupSendMechanism: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendMechanism** | **string**| The send mechanism for the prompt |
 **clientGroupId** | **string**| ID of the client group association |
 **enabled** | **string**| Is the send mechanism enabled? | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientGroupsSendMechanism**
> updateClientGroupsSendMechanism($sendMechanism, $enabled)

Toggles the prompt campaigns in a users account

Toggles the prompt campaigns in a users account for a social integrations on or off

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendMechanism = "sendMechanism_example"; // string | The send mechanism for the prompt
$enabled = "enabled_example"; // string | Is the send mechanism enabled?

try {
    $apiInstance->updateClientGroupsSendMechanism($sendMechanism, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateClientGroupsSendMechanism: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendMechanism** | **string**| The send mechanism for the prompt |
 **enabled** | **string**| Is the send mechanism enabled? |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFacebookPages**
> updateFacebookPages($pageIds)

Updates facebook page Ids

Updates facebook page Ids to be sent to for prompts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageIds = "pageIds_example"; // string | Page Ids for the prompt

try {
    $apiInstance->updateFacebookPages($pageIds);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateFacebookPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageIds** | **string**| Page Ids for the prompt |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSocialContent**
> updateSocialContent($socialId, $title, $description, $pictureUrl, $suggestedMessage)

Updates social content

Updates social content for an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SocialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$socialId = "socialId_example"; // string | The social id
$title = "title_example"; // string | The title for the article
$description = "description_example"; // string | The article description
$pictureUrl = "pictureUrl_example"; // string | The article picture url
$suggestedMessage = "suggestedMessage_example"; // string | The suggested message to use

try {
    $apiInstance->updateSocialContent($socialId, $title, $description, $pictureUrl, $suggestedMessage);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateSocialContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **socialId** | **string**| The social id |
 **title** | **string**| The title for the article | [optional]
 **description** | **string**| The article description | [optional]
 **pictureUrl** | **string**| The article picture url | [optional]
 **suggestedMessage** | **string**| The suggested message to use | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

