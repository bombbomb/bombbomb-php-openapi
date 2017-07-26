# Swagger\Client\TeamsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTeamMember**](TeamsApi.md#addTeamMember) | **POST** /team/{teamId}/member | Add Member to Team
[**cancelJerichoSend**](TeamsApi.md#cancelJerichoSend) | **DELETE** /team/{teamId}/jericho/{jerichoId} | Cancel a Jericho Send
[**createSubteam**](TeamsApi.md#createSubteam) | **POST** /team/{teamId}/subteam | Add a Subteam
[**deleteSubteam**](TeamsApi.md#deleteSubteam) | **DELETE** /team/{teamId}/subteam | Delete Subteam
[**getAllClientGroupAssociations**](TeamsApi.md#getAllClientGroupAssociations) | **GET** /team/associations/ | Lists team associations
[**getClientGroupAssets**](TeamsApi.md#getClientGroupAssets) | **GET** /team/assets/ | Lists team assets
[**getJerichoSends**](TeamsApi.md#getJerichoSends) | **GET** /team/{teamId}/jericho | List Jericho Sends
[**getJerichoStats**](TeamsApi.md#getJerichoStats) | **GET** /team/{teamId}/jericho/{jerichoId}/performance | Gets Jericho performance statistics
[**getSubteams**](TeamsApi.md#getSubteams) | **GET** /team/{teamId}/subteam | List Subteams
[**queueJerichoSend**](TeamsApi.md#queueJerichoSend) | **POST** /team/{teamId}/jericho | Creates a Jericho send.
[**removeMemberFromTeam**](TeamsApi.md#removeMemberFromTeam) | **DELETE** /team/{teamId}/member/{userId} | Remove Member from Team
[**updateJerichoPromptSend**](TeamsApi.md#updateJerichoPromptSend) | **PUT** /team/{teamId}/jericho/{jerichoId} | Updates the Jericho Prompt Settings
[**updateTeam**](TeamsApi.md#updateTeam) | **POST** /team/{teamId} | Update a team
[**updateTeamMember**](TeamsApi.md#updateTeamMember) | **PUT** /team/{teamId}/member | Update Member of Team


# **addTeamMember**
> string addTeamMember($teamId, $userId, $userEmail, $admin)

Add Member to Team

Adds a member to a team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$userId = "userId_example"; // string | The user id of the member being added to the team.
$userEmail = "userEmail_example"; // string | The email of the member being added to the team.
$admin = true; // bool | Set if the user is an admin of this team.

try {
    $result = $api_instance->addTeamMember($teamId, $userId, $userEmail, $admin);
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
 **userId** | **string**| The user id of the member being added to the team. | [optional]
 **userEmail** | **string**| The email of the member being added to the team. | [optional]
 **admin** | **bool**| Set if the user is an admin of this team. | [optional]

### Return type

**string**

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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$jerichoId = "jerichoId_example"; // string | ID of the Jericho Job to cancel

try {
    $api_instance->cancelJerichoSend($jerichoId);
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$name = "name_example"; // string | The subteam's name.

try {
    $result = $api_instance->createSubteam($teamId, $name);
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$subteamId = "subteamId_example"; // string | The subteam you wish to delete.

try {
    $result = $api_instance->deleteSubteam($teamId, $subteamId);
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$clientId = "clientId_example"; // string | The clientId requesting group associations.

try {
    $api_instance->getAllClientGroupAssociations($clientId);
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$assetType = "assetType_example"; // string | The type of assets.
$teamId = "teamId_example"; // string | The team containing the assets.
$autoTagName = "autoTagName_example"; // string | The auto tag name containing the assets.
$pageSize = "pageSize_example"; // string | The number of items to retrieve in a single db query.
$page = "page_example"; // string | Zero-based index of the page of data to retrieve from the db.
$search = "search_example"; // string | Search words.

try {
    $result = $api_instance->getClientGroupAssets($assetType, $teamId, $autoTagName, $pageSize, $page, $search);
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

# **getJerichoSends**
> \Swagger\Client\Model\JerichoConfiguration[] getJerichoSends($teamId)

List Jericho Sends

Lists Jericho sends, both pending and sent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team whose Jericho sends you wish to see.

try {
    $result = $api_instance->getJerichoSends($teamId);
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$jerichoId = "jerichoId_example"; // string | ID of the Jericho job
$teamId = "teamId_example"; // string | ID of team through which Jericho was sent

try {
    $result = $api_instance->getJerichoStats($jerichoId, $teamId);
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

# **getSubteams**
> \Swagger\Client\Model\TeamPublicRepresentation[] getSubteams($teamId)

List Subteams

Returns a collection of subteams for a parent team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id

try {
    $result = $api_instance->getSubteams($teamId);
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$config = new \Swagger\Client\Model\JerichoConfiguration(); // \Swagger\Client\Model\JerichoConfiguration | JSON representing a Jericho configuration
$teamId = "teamId_example"; // string | The ID of the team.

try {
    $result = $api_instance->queueJerichoSend($config, $teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->queueJerichoSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\Swagger\Client\Model\JerichoConfiguration**](../Model/\Swagger\Client\Model\JerichoConfiguration.md)| JSON representing a Jericho configuration |
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
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$userId = "userId_example"; // string | The user id of the member being removed.

try {
    $result = $api_instance->removeMemberFromTeam($teamId, $userId);
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

# **updateJerichoPromptSend**
> updateJerichoPromptSend($teamId, $jerichoId)

Updates the Jericho Prompt Settings

Updates the prompt settings based on the original email id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$jerichoId = "jerichoId_example"; // string | ID of the Jericho job

try {
    $api_instance->updateJerichoPromptSend($teamId, $jerichoId);
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
> \Swagger\Client\Model\TeamPublicRepresentation updateTeam($teamId, $name)

Update a team

Update fields on a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$name = "name_example"; // string | The name of the team

try {
    $result = $api_instance->updateTeam($teamId, $name);
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

### Return type

[**\Swagger\Client\Model\TeamPublicRepresentation**](../Model/TeamPublicRepresentation.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeamMember**
> updateTeamMember($teamId, $userId, $admin)

Update Member of Team

Updates a member of a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TeamsApi();
$teamId = "teamId_example"; // string | The team id
$userId = "userId_example"; // string | The user id of the member being added to the team.
$admin = true; // bool | Set if the user is an admin of this team.

try {
    $api_instance->updateTeamMember($teamId, $userId, $admin);
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

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

