# Swagger\Client\CurriculumApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurricula**](CurriculumApi.md#getCurricula) | **GET** /curricula/ | Get Curricula
[**getUserCurriculumWithProgress**](CurriculumApi.md#getUserCurriculumWithProgress) | **GET** /curriculum/getForUserWithProgress | Get Detailed For User


# **getCurricula**
> \Swagger\Client\Model\Curriculum[] getCurricula($includeProgress)

Get Curricula

Get Curricula, optionally with progress included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurriculumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeProgress = true; // bool | Whether to return progress with the curriculum.

try {
    $result = $apiInstance->getCurricula($includeProgress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumApi->getCurricula: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeProgress** | **bool**| Whether to return progress with the curriculum. | [optional]

### Return type

[**\Swagger\Client\Model\Curriculum[]**](../Model/Curriculum.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCurriculumWithProgress**
> \Swagger\Client\Model\CurriculumWithProgress[] getUserCurriculumWithProgress()

Get Detailed For User

Get all curricula for user including progress for each curriculum.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurriculumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserCurriculumWithProgress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculumApi->getUserCurriculumWithProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CurriculumWithProgress[]**](../Model/CurriculumWithProgress.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

