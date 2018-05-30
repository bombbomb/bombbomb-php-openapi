# Swagger\Client\AccountsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountDetails**](AccountsApi.md#accountDetails) | **GET** /accounts | Get account details.
[**createAccount**](AccountsApi.md#createAccount) | **POST** /accounts | Create Account
[**getClientStatistics**](AccountsApi.md#getClientStatistics) | **GET** /accounts/stats | Get Client Statistics
[**getUserCountry**](AccountsApi.md#getUserCountry) | **GET** /accounts/{clientId}/country | Gets user country
[**resetApiKey**](AccountsApi.md#resetApiKey) | **PUT** /accounts/apikey | Reset API key
[**subscriptionPurchaseAllowed**](AccountsApi.md#subscriptionPurchaseAllowed) | **GET** /accounts/purchaseable | Check if subscription purchase allowed.
[**updateProfileData**](AccountsApi.md#updateProfileData) | **POST** /account/profile/ | Add profile information.


# **accountDetails**
> accountDetails()

Get account details.

Get the details of the user's account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();

try {
    $api_instance->accountDetails();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountDetails: ', $e->getMessage(), PHP_EOL;
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

# **createAccount**
> string createAccount($teamId, $firstName, $lastName, $emailAddress, $companyName, $phone, $country, $industry, $address, $city, $postalCode, $preventWelcomeEmail)

Create Account

Creates a new BombBomb account. This method is currently only available to paid seat admins.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();
$teamId = "teamId_example"; // string | The team id
$firstName = "firstName_example"; // string | First name of the user.
$lastName = "lastName_example"; // string | Last name of the user.
$emailAddress = "emailAddress_example"; // string | Email address of the user.
$companyName = "companyName_example"; // string | Company of the user.
$phone = "phone_example"; // string | Phone number of the user.
$country = "country_example"; // string | Country of the user.
$industry = "industry_example"; // string | Industry of the user.
$address = "address_example"; // string | Street Address of the user.
$city = "city_example"; // string | City of the user.
$postalCode = "postalCode_example"; // string | Postal/Zip code of the user.
$preventWelcomeEmail = true; // bool | prevent an email with login credentials from being sent to the new account. must be set to 'true'

try {
    $result = $api_instance->createAccount($teamId, $firstName, $lastName, $emailAddress, $companyName, $phone, $country, $industry, $address, $city, $postalCode, $preventWelcomeEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **firstName** | **string**| First name of the user. |
 **lastName** | **string**| Last name of the user. |
 **emailAddress** | **string**| Email address of the user. |
 **companyName** | **string**| Company of the user. |
 **phone** | **string**| Phone number of the user. |
 **country** | **string**| Country of the user. | [optional]
 **industry** | **string**| Industry of the user. | [optional]
 **address** | **string**| Street Address of the user. | [optional]
 **city** | **string**| City of the user. | [optional]
 **postalCode** | **string**| Postal/Zip code of the user. | [optional]
 **preventWelcomeEmail** | **bool**| prevent an email with login credentials from being sent to the new account. must be set to &#39;true&#39; | [optional]

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientStatistics**
> getClientStatistics($clientId, $refresh, $statisticValues)

Get Client Statistics

Gets general statics for a Client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();
$clientId = "clientId_example"; // string | Client ID of the account to retrieve. Defaults to yourself.
$refresh = true; // bool | Boolean for whether data returned should be from cache or not.
$statisticValues = "statisticValues_example"; // string | Array of data that should be returned, used exclusively for cacheless data

try {
    $api_instance->getClientStatistics($clientId, $refresh, $statisticValues);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getClientStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**| Client ID of the account to retrieve. Defaults to yourself. | [optional]
 **refresh** | **bool**| Boolean for whether data returned should be from cache or not. | [optional]
 **statisticValues** | **string**| Array of data that should be returned, used exclusively for cacheless data | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCountry**
> getUserCountry()

Gets user country

Gets the users country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();

try {
    $api_instance->getUserCountry();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getUserCountry: ', $e->getMessage(), PHP_EOL;
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

# **resetApiKey**
> resetApiKey()

Reset API key

Resets the current user's API key and returns the new key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();

try {
    $api_instance->resetApiKey();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->resetApiKey: ', $e->getMessage(), PHP_EOL;
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

# **subscriptionPurchaseAllowed**
> subscriptionPurchaseAllowed()

Check if subscription purchase allowed.

Check whether the user can purchase a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();

try {
    $api_instance->subscriptionPurchaseAllowed();
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->subscriptionPurchaseAllowed: ', $e->getMessage(), PHP_EOL;
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

# **updateProfileData**
> updateProfileData($profileData)

Add profile information.

Add profile information to this users account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AccountsApi();
$profileData = "profileData_example"; // string | Profile field information for the account

try {
    $api_instance->updateProfileData($profileData);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateProfileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profileData** | **string**| Profile field information for the account | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

