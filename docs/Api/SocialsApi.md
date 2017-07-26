# Swagger\Client\SocialsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSocialArticleProperties**](SocialsApi.md#getSocialArticleProperties) | **GET** /socials/properties | Gets the social email properties
[**getSocialAutoShares**](SocialsApi.md#getSocialAutoShares) | **GET** /socials/shares | Gets the auto shares from the client group assoc id
[**getSocialPermissions**](SocialsApi.md#getSocialPermissions) | **GET** /socials/permissions | Get permissions for social integration
[**getSocialStatus**](SocialsApi.md#getSocialStatus) | **GET** /socials/states | Gets the social state
[**updateSocialAutoShares**](SocialsApi.md#updateSocialAutoShares) | **PUT** /socials/shares | Gets the auto shares from the client group assoc id
[**updateSocialMessage**](SocialsApi.md#updateSocialMessage) | **PUT** /socials/message | Sets the users social message to what they typed in
[**updateSocialStatus**](SocialsApi.md#updateSocialStatus) | **PUT** /socials/state | Updates the social state for the object


# **getSocialArticleProperties**
> getSocialArticleProperties($jerichoId, $emailId, $originatorId)

Gets the social email properties

Gets the social email properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$jerichoId = "jerichoId_example"; // string | associated jericho Id
$emailId = "emailId_example"; // string | This is the email Id for the email url
$originatorId = "originatorId_example"; // string | This is the originator Id

try {
    $api_instance->getSocialArticleProperties($jerichoId, $emailId, $originatorId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialArticleProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jerichoId** | **string**| associated jericho Id |
 **emailId** | **string**| This is the email Id for the email url |
 **originatorId** | **string**| This is the originator Id |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSocialAutoShares**
> getSocialAutoShares($clientGroupId)

Gets the auto shares from the client group assoc id

Gets the auto shares from the client group assoc id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$clientGroupId = "clientGroupId_example"; // string | ID of the client group association

try {
    $api_instance->getSocialAutoShares($clientGroupId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialAutoShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientGroupId** | **string**| ID of the client group association |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSocialPermissions**
> getSocialPermissions($socialType)

Get permissions for social integration

Get permissions for social integration and has redirect for user to login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$socialType = "socialType_example"; // string | Type of social integration

try {
    $api_instance->getSocialPermissions($socialType);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **socialType** | **string**| Type of social integration |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSocialStatus**
> getSocialStatus($originatorId)

Gets the social state

Gets the social state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$originatorId = "originatorId_example"; // string | associated originatorId

try {
    $api_instance->getSocialStatus($originatorId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->getSocialStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **originatorId** | **string**| associated originatorId |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSocialAutoShares**
> updateSocialAutoShares($autoShare, $clientGroupId)

Gets the auto shares from the client group assoc id

Gets the auto shares from the client group assoc id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$autoShare = "autoShare_example"; // string | The social share that will auto share to
$clientGroupId = "clientGroupId_example"; // string | ID of the client group association

try {
    $api_instance->updateSocialAutoShares($autoShare, $clientGroupId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateSocialAutoShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **autoShare** | **string**| The social share that will auto share to |
 **clientGroupId** | **string**| ID of the client group association |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSocialMessage**
> updateSocialMessage($message, $originatorId)

Sets the users social message to what they typed in

Sets the users social message to what they typed in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$message = "message_example"; // string | The social message the user typed in
$originatorId = "originatorId_example"; // string | The parent id tied to the social share

try {
    $api_instance->updateSocialMessage($message, $originatorId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateSocialMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | **string**| The social message the user typed in |
 **originatorId** | **string**| The parent id tied to the social share |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSocialStatus**
> updateSocialStatus($state, $originatorId)

Updates the social state for the object

Updates the social state for the object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SocialsApi();
$state = "state_example"; // string | The state to set to
$originatorId = "originatorId_example"; // string | The parent id tied to the social share

try {
    $api_instance->updateSocialStatus($state, $originatorId);
} catch (Exception $e) {
    echo 'Exception when calling SocialsApi->updateSocialStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The state to set to |
 **originatorId** | **string**| The parent id tied to the social share |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

