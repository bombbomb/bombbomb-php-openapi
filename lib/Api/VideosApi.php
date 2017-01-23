<?php
/**
 * VideosApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BombBomb
 *
 * We make it easy to build relationships using simple videos.
 *
 * OpenAPI spec version: 2.0.22196
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * VideosApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideosApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.bombbomb.com/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return VideosApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getVideoRecorder
     *
     * Get Live Video Recorder HTML
     *
     * @param int $width The width of the recorder to present. (optional)
     * @param string $videoId The id of the video to record (optional)
     * @return \Swagger\Client\Model\VideoRecorderMethodResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getVideoRecorder($width = null, $videoId = null)
    {
        list($response) = $this->getVideoRecorderWithHttpInfo($width, $videoId);
        return $response;
    }

    /**
     * Operation getVideoRecorderWithHttpInfo
     *
     * Get Live Video Recorder HTML
     *
     * @param int $width The width of the recorder to present. (optional)
     * @param string $videoId The id of the video to record (optional)
     * @return Array of \Swagger\Client\Model\VideoRecorderMethodResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getVideoRecorderWithHttpInfo($width = null, $videoId = null)
    {
        // parse inputs
        $resourcePath = "/videos/live/getRecorder";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // query params
        if ($width !== null) {
            $queryParams['width'] = $this->apiClient->getSerializer()->toQueryValue($width);
        }
        // query params
        if ($videoId !== null) {
            $queryParams['videoId'] = $this->apiClient->getSerializer()->toQueryValue($videoId);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\VideoRecorderMethodResponse',
                '/videos/live/getRecorder'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\VideoRecorderMethodResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\VideoRecorderMethodResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation markLiveRecordingComplete
     *
     * Completes a live recording
     *
     * @param string $videoId The id of the video to mark as done. (required)
     * @param string $filename The filename that was chosen as the final video. (required)
     * @param string $title The title to give the video (required)
     * @return \Swagger\Client\Model\VideoPublicRepresentation
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function markLiveRecordingComplete($videoId, $filename, $title)
    {
        list($response) = $this->markLiveRecordingCompleteWithHttpInfo($videoId, $filename, $title);
        return $response;
    }

    /**
     * Operation markLiveRecordingCompleteWithHttpInfo
     *
     * Completes a live recording
     *
     * @param string $videoId The id of the video to mark as done. (required)
     * @param string $filename The filename that was chosen as the final video. (required)
     * @param string $title The title to give the video (required)
     * @return Array of \Swagger\Client\Model\VideoPublicRepresentation, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function markLiveRecordingCompleteWithHttpInfo($videoId, $filename, $title)
    {
        // verify the required parameter 'videoId' is set
        if ($videoId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $videoId when calling markLiveRecordingComplete');
        }
        // verify the required parameter 'filename' is set
        if ($filename === null) {
            throw new \InvalidArgumentException('Missing the required parameter $filename when calling markLiveRecordingComplete');
        }
        // verify the required parameter 'title' is set
        if ($title === null) {
            throw new \InvalidArgumentException('Missing the required parameter $title when calling markLiveRecordingComplete');
        }
        // parse inputs
        $resourcePath = "/videos/live/markComplete";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($videoId !== null) {
            $formParams['videoId'] = $this->apiClient->getSerializer()->toFormValue($videoId);
        }
        // form params
        if ($filename !== null) {
            $formParams['filename'] = $this->apiClient->getSerializer()->toFormValue($filename);
        }
        // form params
        if ($title !== null) {
            $formParams['title'] = $this->apiClient->getSerializer()->toFormValue($title);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\VideoPublicRepresentation',
                '/videos/live/markComplete'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\VideoPublicRepresentation', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\VideoPublicRepresentation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation signUpload
     *
     * Generate Signed Url
     *
     * @param \Swagger\Client\Model\SignUploadRequest $policy The policy to sign (required)
     * @param bool $v4 Whether to do v4 signing (optional)
     * @return string
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function signUpload($policy, $v4 = null)
    {
        list($response) = $this->signUploadWithHttpInfo($policy, $v4);
        return $response;
    }

    /**
     * Operation signUploadWithHttpInfo
     *
     * Generate Signed Url
     *
     * @param \Swagger\Client\Model\SignUploadRequest $policy The policy to sign (required)
     * @param bool $v4 Whether to do v4 signing (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function signUploadWithHttpInfo($policy, $v4 = null)
    {
        // verify the required parameter 'policy' is set
        if ($policy === null) {
            throw new \InvalidArgumentException('Missing the required parameter $policy when calling signUpload');
        }
        // parse inputs
        $resourcePath = "/video/signedUpload";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($v4 !== null) {
            $formParams['v4'] = $this->apiClient->getSerializer()->toFormValue($v4);
        }
        // body params
        $_tempBody = null;
        if (isset($policy)) {
            $_tempBody = $policy;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/video/signedUpload'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
