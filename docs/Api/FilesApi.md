# Swagger\Client\FilesApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**docHostDelete**](FilesApi.md#docHostDelete) | **DELETE** /files/{docId} | Delete file
[**docHostGet**](FilesApi.md#docHostGet) | **GET** /files/{docId} | Get file
[**docHostList**](FilesApi.md#docHostList) | **GET** /files | List all files
[**docHostUploadV2**](FilesApi.md#docHostUploadV2) | **POST** /files | Upload a file
[**getHostedImagesPaged**](FilesApi.md#getHostedImagesPaged) | **GET** /files/images/paged | Get paged hosted images


# **docHostDelete**
> docHostDelete($docId)

Delete file

Deletes a users file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilesApi();
$docId = "docId_example"; // string | Id of document

try {
    $api_instance->docHostDelete($docId);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->docHostDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **string**| Id of document |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **docHostGet**
> \Swagger\Client\Model\HostedDoc docHostGet($docId)

Get file

Get a single file by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilesApi();
$docId = "docId_example"; // string | Id of document

try {
    $result = $api_instance->docHostGet($docId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->docHostGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docId** | **string**| Id of document |

### Return type

[**\Swagger\Client\Model\HostedDoc**](../Model/HostedDoc.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **docHostList**
> \Swagger\Client\Model\HostedDoc[] docHostList()

List all files

List all uploaded user files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilesApi();

try {
    $result = $api_instance->docHostList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->docHostList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\HostedDoc[]**](../Model/HostedDoc.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **docHostUploadV2**
> \Swagger\Client\Model\HostedDoc[] docHostUploadV2($file)

Upload a file

Upload a new file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilesApi();
$file = "file_example"; // string | The file being uploaded

try {
    $result = $api_instance->docHostUploadV2($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->docHostUploadV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| The file being uploaded |

### Return type

[**\Swagger\Client\Model\HostedDoc[]**](../Model/HostedDoc.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostedImagesPaged**
> getHostedImagesPaged($pageSize, $page, $search)

Get paged hosted images

Get a specific page of uploaded images available to the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilesApi();
$pageSize = "pageSize_example"; // string | The number of items to retrieve in a single db query.
$page = "page_example"; // string | Zero-based index of the page of data to retrieve from the db.
$search = "search_example"; // string | Filter results with names that match the search term.

try {
    $api_instance->getHostedImagesPaged($pageSize, $page, $search);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getHostedImagesPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **string**| The number of items to retrieve in a single db query. |
 **page** | **string**| Zero-based index of the page of data to retrieve from the db. |
 **search** | **string**| Filter results with names that match the search term. | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

