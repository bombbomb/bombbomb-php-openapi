# Swagger\Client\VideosApi

All URIs are relative to *https://api.bombbomb.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVideoEncodingStatus**](VideosApi.md#getVideoEncodingStatus) | **GET** /videos/{videoId}/status | Video Encoding Status
[**getVideoRecorder**](VideosApi.md#getVideoRecorder) | **GET** /videos/live/getRecorder | Get Live Video Recorder HTML
[**markLiveRecordingComplete**](VideosApi.md#markLiveRecordingComplete) | **POST** /videos/live/markComplete | Completes a live recording
[**signUpload**](VideosApi.md#signUpload) | **POST** /video/signedUpload | Generate Signed Url
[**updateVideoThumbnailV2**](VideosApi.md#updateVideoThumbnailV2) | **PUT** /videos/thumbnail | Upload thumbnail


# **getVideoEncodingStatus**
> \Swagger\Client\Model\VideoEncodingStatusResponse getVideoEncodingStatus($videoId)

Video Encoding Status

Get information about the current state of encoding for a given video id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\VideosApi();
$videoId = "videoId_example"; // string | The video's id.

try {
    $result = $api_instance->getVideoEncodingStatus($videoId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoEncodingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **videoId** | **string**| The video&#39;s id. |

### Return type

[**\Swagger\Client\Model\VideoEncodingStatusResponse**](../Model/VideoEncodingStatusResponse.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVideoRecorder**
> \Swagger\Client\Model\VideoRecorderMethodResponse getVideoRecorder($width, $videoId)

Get Live Video Recorder HTML

Returns an object with a number of properties to help you put a video recorder on your site.         This is to be used in conjunction with the VideoRecordedLive call one the user has confirmed in your UI that         the video is how they want it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\VideosApi();
$width = 56; // int | The width of the recorder to present.
$videoId = "videoId_example"; // string | The id of the video to record

try {
    $result = $api_instance->getVideoRecorder($width, $videoId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoRecorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **width** | **int**| The width of the recorder to present. | [optional]
 **videoId** | **string**| The id of the video to record | [optional]

### Return type

[**\Swagger\Client\Model\VideoRecorderMethodResponse**](../Model/VideoRecorderMethodResponse.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markLiveRecordingComplete**
> \Swagger\Client\Model\VideoPublicRepresentation markLiveRecordingComplete($videoId, $filename, $title)

Completes a live recording

Used in conjunction with the live recorder method to mark a video recording as complete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\VideosApi();
$videoId = "videoId_example"; // string | The id of the video to mark as done.
$filename = "filename_example"; // string | The filename that was chosen as the final video.
$title = "title_example"; // string | The title to give the video

try {
    $result = $api_instance->markLiveRecordingComplete($videoId, $filename, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->markLiveRecordingComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **videoId** | **string**| The id of the video to mark as done. |
 **filename** | **string**| The filename that was chosen as the final video. |
 **title** | **string**| The title to give the video |

### Return type

[**\Swagger\Client\Model\VideoPublicRepresentation**](../Model/VideoPublicRepresentation.md)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signUpload**
> string signUpload($policy, $v4)

Generate Signed Url

Generates a signed url to be used for video uploads.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VideosApi();
$policy = new \Swagger\Client\Model\SignUploadRequest(); // \Swagger\Client\Model\SignUploadRequest | The policy to sign
$v4 = true; // bool | Whether to do v4 signing

try {
    $result = $api_instance->signUpload($policy, $v4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->signUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy** | [**\Swagger\Client\Model\SignUploadRequest**](../Model/\Swagger\Client\Model\SignUploadRequest.md)| The policy to sign |
 **v4** | **bool**| Whether to do v4 signing | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVideoThumbnailV2**
> updateVideoThumbnailV2($videoId, $thumbnail, $custom)

Upload thumbnail

Upload a new video thumbnail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: BBOAuth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\VideosApi();
$videoId = "videoId_example"; // string | The id of the video
$thumbnail = "thumbnail_example"; // string | The thumbnail being uploaded
$custom = true; // bool | The default email to use.

try {
    $api_instance->updateVideoThumbnailV2($videoId, $thumbnail, $custom);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->updateVideoThumbnailV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **videoId** | **string**| The id of the video |
 **thumbnail** | **string**| The thumbnail being uploaded |
 **custom** | **bool**| The default email to use. | [optional]

### Return type

void (empty response body)

### Authorization

[BBOAuth2](../../README.md#BBOAuth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

