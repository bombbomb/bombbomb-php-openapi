# Swagger\Client\AccountsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountDetails**](AccountsApi.md#accountDetails) | **GET** /accounts | Get account details.
[**createAccount**](AccountsApi.md#createAccount) | **POST** /accounts | Create Account
[**subscriptionPurchaseAllowed**](AccountsApi.md#subscriptionPurchaseAllowed) | **GET** /accounts/purchaseable | Check if subscription purchase allowed.


# **accountDetails**
> accountDetails($email, $pw, $apiKey)

Get account details.

Get the details of the user's account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$email = "email_example"; // string | Your login email address
$pw = "pw_example"; // string | Your password
$apiKey = "apiKey_example"; // string | Your Api Key

try {
    $api_instance->accountDetails($email, $pw, $apiKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Your login email address | [optional]
 **pw** | **string**| Your password | [optional]
 **apiKey** | **string**| Your Api Key | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAccount**
> string createAccount($teamId, $firstName, $lastName, $emailAddress, $companyName, $phone, $country, $industry, $address, $city, $postalCode)

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

try {
    $result = $api_instance->createAccount($teamId, $firstName, $lastName, $emailAddress, $companyName, $phone, $country, $industry, $address, $city, $postalCode);
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

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPurchaseAllowed**
> subscriptionPurchaseAllowed($email, $pw, $apiKey)

Check if subscription purchase allowed.

Check whether the user can purchase a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccountsApi();
$email = "email_example"; // string | Your login email address
$pw = "pw_example"; // string | Your password
$apiKey = "apiKey_example"; // string | Your Api Key

try {
    $api_instance->subscriptionPurchaseAllowed($email, $pw, $apiKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->subscriptionPurchaseAllowed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Your login email address | [optional]
 **pw** | **string**| Your password | [optional]
 **apiKey** | **string**| Your Api Key | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

