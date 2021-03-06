# Swagger\Client\ContactsApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactsCSV**](ContactsApi.md#addContactsCSV) | **POST** /contacts/import_csv | Add contacts from a CSV file.
[**addNewContact**](ContactsApi.md#addNewContact) | **POST** /contacts/ | Add a contact.
[**addNewCustomField**](ContactsApi.md#addNewCustomField) | **POST** /contacts/custom_fields/ | Add custom fields.
[**addPastedContacts**](ContactsApi.md#addPastedContacts) | **POST** /contacts/paste | Add pasted contacts.
[**cSVToObject**](ContactsApi.md#cSVToObject) | **POST** /csv-to-object | Format CSV.
[**deleteContacts**](ContactsApi.md#deleteContacts) | **PUT** /contacts/delete | Delete Contacts
[**getContactById**](ContactsApi.md#getContactById) | **GET** /contact/{id} | Get Contact Details
[**getCustomFields**](ContactsApi.md#getCustomFields) | **GET** /contacts/custom_fields/ | Get custom fields.


# **addContactsCSV**
> addContactsCSV($mappingData, $listData)

Add contacts from a CSV file.

Add multiple contacts through the upload importer from a CSV file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mappingData = "mappingData_example"; // string | The info sent for the contacts
$listData = "listData_example"; // string | The info sent with the import for the list

try {
    $apiInstance->addContactsCSV($mappingData, $listData);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactsCSV: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mappingData** | **string**| The info sent for the contacts |
 **listData** | **string**| The info sent with the import for the list |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNewContact**
> addNewContact($contactEmail, $contactInfo)

Add a contact.

Add a contact to the users list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactEmail = "contactEmail_example"; // string | Email of the new contact we are adding
$contactInfo = "contactInfo_example"; // string | The info sent for this contact

try {
    $apiInstance->addNewContact($contactEmail, $contactInfo);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addNewContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactEmail** | **string**| Email of the new contact we are adding |
 **contactInfo** | **string**| The info sent for this contact | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNewCustomField**
> addNewCustomField($fieldName, $fieldType)

Add custom fields.

Add a new custom field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldName = "fieldName_example"; // string | Custom field name to be added
$fieldType = "fieldType_example"; // string | Custom field type for the field to be added

try {
    $apiInstance->addNewCustomField($fieldName, $fieldType);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addNewCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldName** | **string**| Custom field name to be added |
 **fieldType** | **string**| Custom field type for the field to be added | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPastedContacts**
> addPastedContacts($contactEmails, $listInfo)

Add pasted contacts.

Add the pasted contacts to the users list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactEmails = "contactEmails_example"; // string | Emails array of the new contacts we are adding
$listInfo = "listInfo_example"; // string | Information about the lists id, recalculations on totals, consent etc

try {
    $apiInstance->addPastedContacts($contactEmails, $listInfo);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addPastedContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactEmails** | **string**| Emails array of the new contacts we are adding |
 **listInfo** | **string**| Information about the lists id, recalculations on totals, consent etc | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cSVToObject**
> cSVToObject($file)

Format CSV.

Format a CSV file to an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | The CSV file being uploaded

try {
    $apiInstance->cSVToObject($file);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->cSVToObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| The CSV file being uploaded |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContacts**
> deleteContacts($listId, $contactIds)

Delete Contacts

Delete all contacts within a list, or provide a comma separated list of contactIds to delete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listId = "listId_example"; // string | The list of contacts to be deleted.
$contactIds = "contactIds_example"; // string | comma separated list of contact ids to delete

try {
    $apiInstance->deleteContacts($listId, $contactIds);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listId** | **string**| The list of contacts to be deleted. | [optional]
 **contactIds** | **string**| comma separated list of contact ids to delete | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactById**
> getContactById($id)

Get Contact Details

Get the contact details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Guid for the contact.

try {
    $apiInstance->getContactById($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid for the contact. |

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFields**
> getCustomFields()

Get custom fields.

Get the current users custom fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getCustomFields();
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
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

