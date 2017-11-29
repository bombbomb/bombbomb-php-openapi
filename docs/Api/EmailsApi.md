# Swagger\Client\EmailsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPrintingPressEmail**](EmailsApi.md#createPrintingPressEmail) | **POST** /emails/print | Create an Email with Printing Press
[**getAllTemplatesForCurrentUser**](EmailsApi.md#getAllTemplatesForCurrentUser) | **GET** /emails/templates | Get all user templates
[**getEmailTracking**](EmailsApi.md#getEmailTracking) | **GET** /emails/{emailId}/tracking | Get Email Tracking
[**getEmailTrackingInteractions**](EmailsApi.md#getEmailTrackingInteractions) | **GET** /emails/{emailId}/tracking/interactions | Get Email Tracking Interactions
[**getHourlyEmailTracking**](EmailsApi.md#getHourlyEmailTracking) | **GET** /emails/{emailId}/tracking/hourly | Get Hourly Email Tracking
[**getQuickSendTemplates**](EmailsApi.md#getQuickSendTemplates) | **GET** /emails/quicksend/templates | Get all quicksend templates
[**videoQuickSender**](EmailsApi.md#videoQuickSender) | **POST** /emails/quicksend | Send a quicksend email


# **createPrintingPressEmail**
> createPrintingPressEmail($templateId, $content, $emailId, $videoId, $subjectLine)

Create an Email with Printing Press

Prints an email using the template id and content to the users account.If a video id is included, it will replace any video placeholders with that video.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();
$templateId = "templateId_example"; // string | The template id to be printed.
$content = "content_example"; // string | The content of the email.
$emailId = "emailId_example"; // string | The email id to be printed to.
$videoId = "videoId_example"; // string | A video to replace video place holders with.
$subjectLine = "subjectLine_example"; // string | The subject line to be printed.

try {
    $api_instance->createPrintingPressEmail($templateId, $content, $emailId, $videoId, $subjectLine);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createPrintingPressEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| The template id to be printed. |
 **content** | **string**| The content of the email. |
 **emailId** | **string**| The email id to be printed to. | [optional]
 **videoId** | **string**| A video to replace video place holders with. | [optional]
 **subjectLine** | **string**| The subject line to be printed. | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTemplatesForCurrentUser**
> getAllTemplatesForCurrentUser($quickSendOnly)

Get all user templates

Get all templates accessible to the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();
$quickSendOnly = true; // bool | Whether to return only quick send templates.

try {
    $api_instance->getAllTemplatesForCurrentUser($quickSendOnly);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getAllTemplatesForCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quickSendOnly** | **bool**| Whether to return only quick send templates. | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTracking**
> getEmailTracking($emailId, $jobId)

Get Email Tracking

Get Tracking data for all sends of an Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();
$emailId = "emailId_example"; // string | ID of the email
$jobId = "jobId_example"; // string | ID of the Job (or null for all jobs)

try {
    $api_instance->getEmailTracking($emailId, $jobId);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailTracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailId** | **string**| ID of the email |
 **jobId** | **string**| ID of the Job (or null for all jobs) | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTrackingInteractions**
> getEmailTrackingInteractions($emailId, $jobId, $interactionType, $searchTerm)

Get Email Tracking Interactions

Get Contact detail interactions for an Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();
$emailId = "emailId_example"; // string | ID of the email
$jobId = "jobId_example"; // string | ID of the Job (or null for all jobs)
$interactionType = "interactionType_example"; // string | Interaction type to order and filter by
$searchTerm = "searchTerm_example"; // string | Search term to filer by

try {
    $api_instance->getEmailTrackingInteractions($emailId, $jobId, $interactionType, $searchTerm);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailTrackingInteractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailId** | **string**| ID of the email |
 **jobId** | **string**| ID of the Job (or null for all jobs) | [optional]
 **interactionType** | **string**| Interaction type to order and filter by | [optional]
 **searchTerm** | **string**| Search term to filer by | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHourlyEmailTracking**
> getHourlyEmailTracking($emailId, $jobId, $interactionType)

Get Hourly Email Tracking

Get Tracking data for an Email,             broken down by the hour and filterable by an Interaction type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();
$emailId = "emailId_example"; // string | ID of the email
$jobId = "jobId_example"; // string | ID of the Job (or null for all jobs)
$interactionType = "interactionType_example"; // string | Interaction type to filter by

try {
    $api_instance->getHourlyEmailTracking($emailId, $jobId, $interactionType);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getHourlyEmailTracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailId** | **string**| ID of the email |
 **jobId** | **string**| ID of the Job (or null for all jobs) | [optional]
 **interactionType** | **string**| Interaction type to filter by | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickSendTemplates**
> getQuickSendTemplates()

Get all quicksend templates

Get all quicksend templates accessible to the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();

try {
    $api_instance->getQuickSendTemplates();
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getQuickSendTemplates: ', $e->getMessage(), PHP_EOL;
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

# **videoQuickSender**
> videoQuickSender($videoId, $emailAddresses, $subject, $message, $listIds, $scheduledSendTimestamp, $extendedProperties, $templateId, $stripHTML)

Send a quicksend email

Send a quicksend video email to the list or users provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EmailsApi();
$videoId = "videoId_example"; // string | A guid id for the video.
$emailAddresses = "emailAddresses_example"; // string | A semi-colon separated list of email addresses to send to.
$subject = "subject_example"; // string | Subject line for the email.
$message = "message_example"; // string | Message for the body of the email.
$listIds = "listIds_example"; // string | An array of list ids
$scheduledSendTimestamp = 56; // int | When to schedule the send (seconds since epoch). null value means send immediately.
$extendedProperties = "extendedProperties_example"; // string | Bool value that when checked will send back both emailId as well as extra properties
$templateId = "templateId_example"; // string | Id of a template to use for this send. A null value means use the default for this user.
$stripHTML = "stripHTML_example"; // string | remove HTML elements

try {
    $api_instance->videoQuickSender($videoId, $emailAddresses, $subject, $message, $listIds, $scheduledSendTimestamp, $extendedProperties, $templateId, $stripHTML);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->videoQuickSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **videoId** | **string**| A guid id for the video. | [optional]
 **emailAddresses** | **string**| A semi-colon separated list of email addresses to send to. | [optional]
 **subject** | **string**| Subject line for the email. | [optional]
 **message** | **string**| Message for the body of the email. | [optional]
 **listIds** | **string**| An array of list ids | [optional]
 **scheduledSendTimestamp** | **int**| When to schedule the send (seconds since epoch). null value means send immediately. | [optional]
 **extendedProperties** | **string**| Bool value that when checked will send back both emailId as well as extra properties | [optional]
 **templateId** | **string**| Id of a template to use for this send. A null value means use the default for this user. | [optional]
 **stripHTML** | **string**| remove HTML elements | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

