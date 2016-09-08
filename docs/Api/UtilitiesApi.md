# Swagger\Client\UtilitiesApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOAuthClient**](UtilitiesApi.md#createOAuthClient) | **POST** /oauthclient | Create an OAuth Client
[**deleteOAuthClient**](UtilitiesApi.md#deleteOAuthClient) | **DELETE** /oauthclient/{id} | Delete an OAuth Client
[**getOAuthClients**](UtilitiesApi.md#getOAuthClients) | **GET** /oauthclient | Lists OAuth Clients
[**getSpec**](UtilitiesApi.md#getSpec) | **GET** /spec | Describes this api


# **createOAuthClient**
> \Swagger\Client\Model\OAuthClient createOAuthClient($name, $redirectUri)

Create an OAuth Client

Creates an OAuth Client managed by the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UtilitiesApi();
$name = "name_example"; // string | The name of the OAuth client. e.g. MyCrm DEV, or MyCrm PROD
$redirectUri = "redirectUri_example"; // string | The URI to direct the client to after logging in.

try {
    $result = $api_instance->createOAuthClient($name, $redirectUri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the OAuth client. e.g. MyCrm DEV, or MyCrm PROD |
 **redirectUri** | **string**| The URI to direct the client to after logging in. |

### Return type

[**\Swagger\Client\Model\OAuthClient**](../Model/OAuthClient.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClient**
> deleteOAuthClient($id)

Delete an OAuth Client

Deletes an OAuth Client managed by the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UtilitiesApi();
$id = "id_example"; // string | The id of the OAuth Client

try {
    $api_instance->deleteOAuthClient($id);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the OAuth Client |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClients**
> \Swagger\Client\Model\OAuthClient[] getOAuthClients()

Lists OAuth Clients

Enumerates OAuth Clients managed by the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $result = $api_instance->getOAuthClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->getOAuthClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OAuthClient[]**](../Model/OAuthClient.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSpec**
> getSpec()

Describes this api

Describes methods available through the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UtilitiesApi();

try {
    $api_instance->getSpec();
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->getSpec: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

