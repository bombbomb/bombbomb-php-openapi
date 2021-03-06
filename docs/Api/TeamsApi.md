# Swagger\Client\TeamsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTeamMember**](TeamsApi.md#addTeamMember) | **POST** /team/{teamId}/member | Add Member to Team
[**addUsers**](TeamsApi.md#addUsers) | **POST** /team/{teamId}/members | Add users to group.
[**addUsersFromCsv**](TeamsApi.md#addUsersFromCsv) | **POST** /team/{teamId}/members/csv | Add members to group from CSV
[**cancelJerichoSend**](TeamsApi.md#cancelJerichoSend) | **DELETE** /team/{teamId}/jericho/{jerichoId} | Cancel a Jericho Send
[**createSubteam**](TeamsApi.md#createSubteam) | **POST** /team/{teamId}/subteam | Add a Subteam
[**deleteSubteam**](TeamsApi.md#deleteSubteam) | **DELETE** /team/{teamId}/subteam | Delete Subteam
[**getAllClientGroupAssociations**](TeamsApi.md#getAllClientGroupAssociations) | **GET** /team/associations/ | Lists team associations
[**getClientGroupAssets**](TeamsApi.md#getClientGroupAssets) | **GET** /team/assets/ | Lists team assets
[**getClientGroupStatistics**](TeamsApi.md#getClientGroupStatistics) | **GET** /team/{teamId}/stats | Get Team statistics
[**getJerichoSends**](TeamsApi.md#getJerichoSends) | **GET** /team/{teamId}/jericho | List Jericho Sends
[**getJerichoStats**](TeamsApi.md#getJerichoStats) | **GET** /team/{teamId}/jericho/{jerichoId}/performance | Gets Jericho performance statistics
[**getPagedClientGroupMembers**](TeamsApi.md#getPagedClientGroupMembers) | **GET** /team/{teamId}/members | List Team Members
[**getPromptMonthlyStats**](TeamsApi.md#getPromptMonthlyStats) | **GET** /team/{month}/{year}/monthStats | Jericho Monthly Stats
[**getPromptOverview**](TeamsApi.md#getPromptOverview) | **GET** /team/promptOverview | Get Prompt Overview
[**getSubteams**](TeamsApi.md#getSubteams) | **GET** /team/{teamId}/subteam | List Subteams
[**getTeamPromptAggregateStats**](TeamsApi.md#getTeamPromptAggregateStats) | **GET** /team/{clientGroupId}/campaign/stats | Get aggregate stats for campaigns
[**getTeamPromptCampaigns**](TeamsApi.md#getTeamPromptCampaigns) | **GET** /team/{clientGroupId}/campaign | Get campaigns for team
[**inviteToSocialPromptTeam**](TeamsApi.md#inviteToSocialPromptTeam) | **POST** /teams/prompt/invite | Invite a list to join the admin&#39;s social prompt team
[**queueJerichoSend**](TeamsApi.md#queueJerichoSend) | **POST** /team/{teamId}/jericho | Creates a Jericho send.
[**removeMemberFromTeam**](TeamsApi.md#removeMemberFromTeam) | **DELETE** /team/{teamId}/member/{userId} | Remove Member from Team
[**resendTeamMemberInvitation**](TeamsApi.md#resendTeamMemberInvitation) | **POST** /team/{teamId}/{memberUserId}/rewelcome | Resend invite
[**updateJerichoPromptSend**](TeamsApi.md#updateJerichoPromptSend) | **PUT** /team/{teamId}/jericho/{jerichoId} | Updates the Jericho Prompt Settings
[**updateTeam**](TeamsApi.md#updateTeam) | **POST** /team/{teamId} | Update a team
[**updateTeamMember**](TeamsApi.md#updateTeamMember) | **PUT** /team/{teamId}/member | Update Member of Team


# **addTeamMember**
> string addTeamMember($teamId, $admin, $subgroupIds, $userEmail, $userId)

Add Member to Team

Adds a member to a team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$admin = true; // bool | Set if the user is an admin of this team.
$subgroupIds = "subgroupIds_example"; // string | Subgroup IDs to add user to
$userEmail = "userEmail_example"; // string | The email of the member being added to the team.
$userId = "userId_example"; // string | The user id of the member being added to the team.

try {
    $result = $apiInstance->addTeamMember($teamId, $admin, $subgroupIds, $userEmail, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->addTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **admin** | **bool**| Set if the user is an admin of this team. | [optional]
 **subgroupIds** | **string**| Subgroup IDs to add user to | [optional]
 **userEmail** | **string**| The email of the member being added to the team. | [optional]
 **userId** | **string**| The user id of the member being added to the team. | [optional]

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUsers**
> addUsers($teamId, $userDetails, $sendWelcomeEmail, $subgroupIds)

Add users to group.

Add a new or existing user to group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$userDetails = "userDetails_example"; // string | Array of emails or objects containing details needed to create user
$sendWelcomeEmail = "sendWelcomeEmail_example"; // string | Whether to send welcome email to new users
$subgroupIds = "subgroupIds_example"; // string | Subgroup IDs to add user to

try {
    $apiInstance->addUsers($teamId, $userDetails, $sendWelcomeEmail, $subgroupIds);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->addUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **userDetails** | **string**| Array of emails or objects containing details needed to create user |
 **sendWelcomeEmail** | **string**| Whether to send welcome email to new users | [optional]
 **subgroupIds** | **string**| Subgroup IDs to add user to | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUsersFromCsv**
> addUsersFromCsv($teamId, $csvImportId, $map, $sendWelcomeEmail, $subgroupIds)

Add members to group from CSV

Imports members to a group from a given CSV ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$csvImportId = "csvImportId_example"; // string | ID of the CSV to import
$map = "map_example"; // string | Object to use when mapping import to AccountCreateDetails. Key is property name on details, value is CSV column number.
$sendWelcomeEmail = "sendWelcomeEmail_example"; // string | Whether to send welcome email to new users
$subgroupIds = "subgroupIds_example"; // string | Subgroup IDs to add user to

try {
    $apiInstance->addUsersFromCsv($teamId, $csvImportId, $map, $sendWelcomeEmail, $subgroupIds);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->addUsersFromCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **csvImportId** | **string**| ID of the CSV to import |
 **map** | **string**| Object to use when mapping import to AccountCreateDetails. Key is property name on details, value is CSV column number. |
 **sendWelcomeEmail** | **string**| Whether to send welcome email to new users | [optional]
 **subgroupIds** | **string**| Subgroup IDs to add user to | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelJerichoSend**
> cancelJerichoSend($jerichoId)

Cancel a Jericho Send

Cancels a scheduled Jericho send from being sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jerichoId = "jerichoId_example"; // string | ID of the Jericho Job to cancel

try {
    $apiInstance->cancelJerichoSend($jerichoId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->cancelJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jerichoId** | **string**| ID of the Jericho Job to cancel |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubteam**
> \Swagger\Client\Model\TeamPublicRepresentation createSubteam($teamId, $name)

Add a Subteam

Adds a subteam to a parent team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$name = "name_example"; // string | The subteam's name.

try {
    $result = $apiInstance->createSubteam($teamId, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->createSubteam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **name** | **string**| The subteam&#39;s name. |

### Return type

[**\Swagger\Client\Model\TeamPublicRepresentation**](../Model/TeamPublicRepresentation.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubteam**
> string deleteSubteam($teamId, $subteamId)

Delete Subteam

Deletes a subteam

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$subteamId = "subteamId_example"; // string | The subteam you wish to delete.

try {
    $result = $apiInstance->deleteSubteam($teamId, $subteamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->deleteSubteam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **subteamId** | **string**| The subteam you wish to delete. |

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClientGroupAssociations**
> getAllClientGroupAssociations($clientId)

Lists team associations

Returns a collection of team associations for a given user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientId = "clientId_example"; // string | The clientId requesting group associations.

try {
    $apiInstance->getAllClientGroupAssociations($clientId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getAllClientGroupAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**| The clientId requesting group associations. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientGroupAssets**
> \Swagger\Client\Model\InlineResponse200 getClientGroupAssets($assetType, $teamId, $autoTagName, $pageSize, $page, $search)

Lists team assets

Returns a collection of assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assetType = "assetType_example"; // string | The type of assets.
$teamId = "teamId_example"; // string | The team containing the assets.
$autoTagName = "autoTagName_example"; // string | The auto tag name containing the assets.
$pageSize = "pageSize_example"; // string | The number of items to retrieve in a single db query.
$page = "page_example"; // string | Zero-based index of the page of data to retrieve from the db.
$search = "search_example"; // string | Search words.

try {
    $result = $apiInstance->getClientGroupAssets($assetType, $teamId, $autoTagName, $pageSize, $page, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getClientGroupAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetType** | **string**| The type of assets. |
 **teamId** | **string**| The team containing the assets. | [optional]
 **autoTagName** | **string**| The auto tag name containing the assets. | [optional]
 **pageSize** | **string**| The number of items to retrieve in a single db query. | [optional]
 **page** | **string**| Zero-based index of the page of data to retrieve from the db. | [optional]
 **search** | **string**| Search words. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientGroupStatistics**
> getClientGroupStatistics($teamId, $memberStatus)

Get Team statistics

Get top level statistic data for a Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$memberStatus = "memberStatus_example"; // string | The status of members to query for

try {
    $apiInstance->getClientGroupStatistics($teamId, $memberStatus);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getClientGroupStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **memberStatus** | **string**| The status of members to query for | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJerichoSends**
> \Swagger\Client\Model\JerichoConfiguration[] getJerichoSends($teamId)

List Jericho Sends

Lists Jericho sends, both pending and sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team whose Jericho sends you wish to see.

try {
    $result = $apiInstance->getJerichoSends($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getJerichoSends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team whose Jericho sends you wish to see. |

### Return type

[**\Swagger\Client\Model\JerichoConfiguration[]**](../Model/JerichoConfiguration.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJerichoStats**
> \Swagger\Client\Model\JerichoPerformance getJerichoStats($jerichoId, $teamId)

Gets Jericho performance statistics

Returns an aggregate view of the performance of a Jericho send

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jerichoId = "jerichoId_example"; // string | ID of the Jericho job
$teamId = "teamId_example"; // string | ID of team through which Jericho was sent

try {
    $result = $apiInstance->getJerichoStats($jerichoId, $teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getJerichoStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jerichoId** | **string**| ID of the Jericho job |
 **teamId** | **string**| ID of team through which Jericho was sent |

### Return type

[**\Swagger\Client\Model\JerichoPerformance**](../Model/JerichoPerformance.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPagedClientGroupMembers**
> getPagedClientGroupMembers($teamId, $pageSize, $page, $status, $search, $orderBy, $orderDirection)

List Team Members

Get a paginated listing of Team members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$pageSize = "pageSize_example"; // string | Amount of records to return in a page.
$page = "page_example"; // string | The page to return.
$status = "status_example"; // string | The status type to filter by.
$search = "search_example"; // string | Filter results with names that match the search term.
$orderBy = "orderBy_example"; // string | Key to order results by
$orderDirection = "orderDirection_example"; // string | ASC or DESC

try {
    $apiInstance->getPagedClientGroupMembers($teamId, $pageSize, $page, $status, $search, $orderBy, $orderDirection);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getPagedClientGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **pageSize** | **string**| Amount of records to return in a page. |
 **page** | **string**| The page to return. |
 **status** | **string**| The status type to filter by. | [optional]
 **search** | **string**| Filter results with names that match the search term. | [optional]
 **orderBy** | **string**| Key to order results by | [optional]
 **orderDirection** | **string**| ASC or DESC | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromptMonthlyStats**
> string getPromptMonthlyStats($month, $year)

Jericho Monthly Stats

Jericho Monthly Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = "month_example"; // string | The month whose Jericho sends you wish to see.
$year = "year_example"; // string | The year whose Jericho sends you wish to see.

try {
    $result = $apiInstance->getPromptMonthlyStats($month, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getPromptMonthlyStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **string**| The month whose Jericho sends you wish to see. |
 **year** | **string**| The year whose Jericho sends you wish to see. |

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromptOverview**
> string getPromptOverview()

Get Prompt Overview

Get Prompt Overview

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPromptOverview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getPromptOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubteams**
> \Swagger\Client\Model\TeamPublicRepresentation[] getSubteams($teamId)

List Subteams

Returns a collection of subteams for a parent team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = "teamId_example"; // string | The team id

try {
    $result = $apiInstance->getSubteams($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getSubteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |

### Return type

[**\Swagger\Client\Model\TeamPublicRepresentation[]**](../Model/TeamPublicRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamPromptAggregateStats**
> getTeamPromptAggregateStats($clientGroupId)

Get aggregate stats for campaigns

Get all the campaigns aggregate stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientGroupId = "clientGroupId_example"; // string | ID of the client group association

try {
    $apiInstance->getTeamPromptAggregateStats($clientGroupId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeamPromptAggregateStats: ', $e->getMessage(), PHP_EOL;
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

# **getTeamPromptCampaigns**
> getTeamPromptCampaigns($clientGroupId, $searchTerm, $currentPage)

Get campaigns for team

Get campaigns for the team and their stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientGroupId = "clientGroupId_example"; // string | ID of the client group association
$searchTerm = "searchTerm_example"; // string | The value to search for in prompt subject
$currentPage = "currentPage_example"; // string | The current page

try {
    $apiInstance->getTeamPromptCampaigns($clientGroupId, $searchTerm, $currentPage);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeamPromptCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientGroupId** | **string**| ID of the client group association |
 **searchTerm** | **string**| The value to search for in prompt subject | [optional]
 **currentPage** | **string**| The current page | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteToSocialPromptTeam**
> inviteToSocialPromptTeam($teamId, $listId)

Invite a list to join the admin's social prompt team

Invite to Social Prompt Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$listId = "listId_example"; // string | List to invite to the social prompt team.

try {
    $apiInstance->inviteToSocialPromptTeam($teamId, $listId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->inviteToSocialPromptTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **listId** | **string**| List to invite to the social prompt team. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueJerichoSend**
> \Swagger\Client\Model\JerichoConfiguration queueJerichoSend($config, $teamId)

Creates a Jericho send.

Sends email content on behalf of members of a client group. There are two forms this send can take:         Static Email, and Video Prompt. Static emails require only an emailId.         Video Prompts build emails dynamically and require most of the other fields.         You must be an administrator of a Team Account to use this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config = new \Swagger\Client\Model\JerichoConfiguration(); // \Swagger\Client\Model\JerichoConfiguration | JSON representing a Jericho configuration
$teamId = "teamId_example"; // string | The ID of the team.

try {
    $result = $apiInstance->queueJerichoSend($config, $teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->queueJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\Swagger\Client\Model\JerichoConfiguration**](../Model/JerichoConfiguration.md)| JSON representing a Jericho configuration |
 **teamId** | **string**| The ID of the team. |

### Return type

[**\Swagger\Client\Model\JerichoConfiguration**](../Model/JerichoConfiguration.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMemberFromTeam**
> string removeMemberFromTeam($teamId, $userId)

Remove Member from Team

Removes a member from a team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$userId = "userId_example"; // string | The user id of the member being removed.

try {
    $result = $apiInstance->removeMemberFromTeam($teamId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->removeMemberFromTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **userId** | **string**| The user id of the member being removed. |

### Return type

**string**

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendTeamMemberInvitation**
> \Swagger\Client\Model\TeamPublicRepresentation resendTeamMemberInvitation($teamId, $memberUserId)

Resend invite

Resend invitation to a member of a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$memberUserId = "memberUserId_example"; // string | The user id of the member being resent an invitation.

try {
    $result = $apiInstance->resendTeamMemberInvitation($teamId, $memberUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->resendTeamMemberInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **memberUserId** | **string**| The user id of the member being resent an invitation. |

### Return type

[**\Swagger\Client\Model\TeamPublicRepresentation**](../Model/TeamPublicRepresentation.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJerichoPromptSend**
> updateJerichoPromptSend($teamId, $jerichoId)

Updates the Jericho Prompt Settings

Updates the prompt settings based on the original email id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$jerichoId = "jerichoId_example"; // string | ID of the Jericho job

try {
    $apiInstance->updateJerichoPromptSend($teamId, $jerichoId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->updateJerichoPromptSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **jerichoId** | **string**| ID of the Jericho job |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeam**
> \Swagger\Client\Model\TeamPublicRepresentation updateTeam($teamId, $name, $state, $subteamsCanAddMembers)

Update a team

Update fields on a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$name = "name_example"; // string | The name of the team
$state = "state_example"; // string | The status of the login permissions
$subteamsCanAddMembers = true; // bool | Updates subteam member adding setting on group

try {
    $result = $apiInstance->updateTeam($teamId, $name, $state, $subteamsCanAddMembers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->updateTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **name** | **string**| The name of the team | [optional]
 **state** | **string**| The status of the login permissions | [optional]
 **subteamsCanAddMembers** | **bool**| Updates subteam member adding setting on group | [optional]

### Return type

[**\Swagger\Client\Model\TeamPublicRepresentation**](../Model/TeamPublicRepresentation.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeamMember**
> updateTeamMember($teamId, $userId, $admin, $permissionSuiteId)

Update Member of Team

Updates a member of a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$teamId = "teamId_example"; // string | The team id
$userId = "userId_example"; // string | The user id of the member being added to the team.
$admin = true; // bool | Set if the user is an admin of this team.
$permissionSuiteId = "permissionSuiteId_example"; // string | Set if the user is an admin of this team.

try {
    $apiInstance->updateTeamMember($teamId, $userId, $admin, $permissionSuiteId);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->updateTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| The team id |
 **userId** | **string**| The user id of the member being added to the team. |
 **admin** | **bool**| Set if the user is an admin of this team. |
 **permissionSuiteId** | **string**| Set if the user is an admin of this team. | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

