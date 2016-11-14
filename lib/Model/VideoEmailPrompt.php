<?php
/**
 * VideoEmailPrompt
 *
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
 * OpenAPI spec version: 2.0.21432
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * VideoEmailPrompt Class Doc Comment
 *
 * @category    Class */
 // @description Configures a single prompt which asks a user to record a video into an outgoing email.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VideoEmailPrompt implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VideoEmailPrompt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'userId' => 'string',
        'templateId' => 'string',
        'emailSubjectLine' => 'string',
        'emailContent' => 'string',
        'toEmailAddresses' => 'string[]',
        'toLists' => 'string[]',
        'jerichoId' => 'string',
        'promptSubject' => 'string',
        'promptHtml' => 'string',
        'sendWithoutVideo' => 'bool',
        'videoDueDate' => '\DateTime',
        'scheduledSendDate' => '\DateTime',
        'videoId' => 'string',
        'emailId' => 'string',
        'jobId' => 'string',
        'status' => 'int',
        'doNotApplyTemplate' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'userId' => 'userId',
        'templateId' => 'templateId',
        'emailSubjectLine' => 'emailSubjectLine',
        'emailContent' => 'emailContent',
        'toEmailAddresses' => 'toEmailAddresses',
        'toLists' => 'toLists',
        'jerichoId' => 'jerichoId',
        'promptSubject' => 'promptSubject',
        'promptHtml' => 'promptHtml',
        'sendWithoutVideo' => 'sendWithoutVideo',
        'videoDueDate' => 'videoDueDate',
        'scheduledSendDate' => 'scheduledSendDate',
        'videoId' => 'videoId',
        'emailId' => 'emailId',
        'jobId' => 'jobId',
        'status' => 'status',
        'doNotApplyTemplate' => 'doNotApplyTemplate'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'userId' => 'setUserId',
        'templateId' => 'setTemplateId',
        'emailSubjectLine' => 'setEmailSubjectLine',
        'emailContent' => 'setEmailContent',
        'toEmailAddresses' => 'setToEmailAddresses',
        'toLists' => 'setToLists',
        'jerichoId' => 'setJerichoId',
        'promptSubject' => 'setPromptSubject',
        'promptHtml' => 'setPromptHtml',
        'sendWithoutVideo' => 'setSendWithoutVideo',
        'videoDueDate' => 'setVideoDueDate',
        'scheduledSendDate' => 'setScheduledSendDate',
        'videoId' => 'setVideoId',
        'emailId' => 'setEmailId',
        'jobId' => 'setJobId',
        'status' => 'setStatus',
        'doNotApplyTemplate' => 'setDoNotApplyTemplate'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'userId' => 'getUserId',
        'templateId' => 'getTemplateId',
        'emailSubjectLine' => 'getEmailSubjectLine',
        'emailContent' => 'getEmailContent',
        'toEmailAddresses' => 'getToEmailAddresses',
        'toLists' => 'getToLists',
        'jerichoId' => 'getJerichoId',
        'promptSubject' => 'getPromptSubject',
        'promptHtml' => 'getPromptHtml',
        'sendWithoutVideo' => 'getSendWithoutVideo',
        'videoDueDate' => 'getVideoDueDate',
        'scheduledSendDate' => 'getScheduledSendDate',
        'videoId' => 'getVideoId',
        'emailId' => 'getEmailId',
        'jobId' => 'getJobId',
        'status' => 'getStatus',
        'doNotApplyTemplate' => 'getDoNotApplyTemplate'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['emailSubjectLine'] = isset($data['emailSubjectLine']) ? $data['emailSubjectLine'] : null;
        $this->container['emailContent'] = isset($data['emailContent']) ? $data['emailContent'] : null;
        $this->container['toEmailAddresses'] = isset($data['toEmailAddresses']) ? $data['toEmailAddresses'] : null;
        $this->container['toLists'] = isset($data['toLists']) ? $data['toLists'] : null;
        $this->container['jerichoId'] = isset($data['jerichoId']) ? $data['jerichoId'] : null;
        $this->container['promptSubject'] = isset($data['promptSubject']) ? $data['promptSubject'] : null;
        $this->container['promptHtml'] = isset($data['promptHtml']) ? $data['promptHtml'] : null;
        $this->container['sendWithoutVideo'] = isset($data['sendWithoutVideo']) ? $data['sendWithoutVideo'] : null;
        $this->container['videoDueDate'] = isset($data['videoDueDate']) ? $data['videoDueDate'] : null;
        $this->container['scheduledSendDate'] = isset($data['scheduledSendDate']) ? $data['scheduledSendDate'] : null;
        $this->container['videoId'] = isset($data['videoId']) ? $data['videoId'] : null;
        $this->container['emailId'] = isset($data['emailId']) ? $data['emailId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['doNotApplyTemplate'] = isset($data['doNotApplyTemplate']) ? $data['doNotApplyTemplate'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['emailSubjectLine'] === null) {
            $invalid_properties[] = "'emailSubjectLine' can't be null";
        }
        if ($this->container['emailContent'] === null) {
            $invalid_properties[] = "'emailContent' can't be null";
        }
        if ($this->container['promptSubject'] === null) {
            $invalid_properties[] = "'promptSubject' can't be null";
        }
        if ($this->container['promptHtml'] === null) {
            $invalid_properties[] = "'promptHtml' can't be null";
        }
        if ($this->container['scheduledSendDate'] === null) {
            $invalid_properties[] = "'scheduledSendDate' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['emailSubjectLine'] === null) {
            return false;
        }
        if ($this->container['emailContent'] === null) {
            return false;
        }
        if ($this->container['promptSubject'] === null) {
            return false;
        }
        if ($this->container['promptHtml'] === null) {
            return false;
        }
        if ($this->container['scheduledSendDate'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The identifier of the prompt. Read Only.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets userId
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param string $userId The prompt's owner. Read Only.
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     * @param string $templateId Optional. The email template to be used in the sent email, if none supplied, the users' default will be applied.
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets emailSubjectLine
     * @return string
     */
    public function getEmailSubjectLine()
    {
        return $this->container['emailSubjectLine'];
    }

    /**
     * Sets emailSubjectLine
     * @param string $emailSubjectLine The subject line of the final email
     * @return $this
     */
    public function setEmailSubjectLine($emailSubjectLine)
    {
        $this->container['emailSubjectLine'] = $emailSubjectLine;

        return $this;
    }

    /**
     * Gets emailContent
     * @return string
     */
    public function getEmailContent()
    {
        return $this->container['emailContent'];
    }

    /**
     * Sets emailContent
     * @param string $emailContent The HTML content of the final email
     * @return $this
     */
    public function setEmailContent($emailContent)
    {
        $this->container['emailContent'] = $emailContent;

        return $this;
    }

    /**
     * Gets toEmailAddresses
     * @return string[]
     */
    public function getToEmailAddresses()
    {
        return $this->container['toEmailAddresses'];
    }

    /**
     * Sets toEmailAddresses
     * @param string[] $toEmailAddresses Email addresses to send the final email to, can be mixed with listIds.
     * @return $this
     */
    public function setToEmailAddresses($toEmailAddresses)
    {
        $this->container['toEmailAddresses'] = $toEmailAddresses;

        return $this;
    }

    /**
     * Gets toLists
     * @return string[]
     */
    public function getToLists()
    {
        return $this->container['toLists'];
    }

    /**
     * Sets toLists
     * @param string[] $toLists List Ids to send the final email to
     * @return $this
     */
    public function setToLists($toLists)
    {
        $this->container['toLists'] = $toLists;

        return $this;
    }

    /**
     * Gets jerichoId
     * @return string
     */
    public function getJerichoId()
    {
        return $this->container['jerichoId'];
    }

    /**
     * Sets jerichoId
     * @param string $jerichoId If sent in a jericho context, this will have the jericho id
     * @return $this
     */
    public function setJerichoId($jerichoId)
    {
        $this->container['jerichoId'] = $jerichoId;

        return $this;
    }

    /**
     * Gets promptSubject
     * @return string
     */
    public function getPromptSubject()
    {
        return $this->container['promptSubject'];
    }

    /**
     * Sets promptSubject
     * @param string $promptSubject The prompt's subject line
     * @return $this
     */
    public function setPromptSubject($promptSubject)
    {
        $this->container['promptSubject'] = $promptSubject;

        return $this;
    }

    /**
     * Gets promptHtml
     * @return string
     */
    public function getPromptHtml()
    {
        return $this->container['promptHtml'];
    }

    /**
     * Sets promptHtml
     * @param string $promptHtml The HTML body of the prompt
     * @return $this
     */
    public function setPromptHtml($promptHtml)
    {
        $this->container['promptHtml'] = $promptHtml;

        return $this;
    }

    /**
     * Gets sendWithoutVideo
     * @return bool
     */
    public function getSendWithoutVideo()
    {
        return $this->container['sendWithoutVideo'];
    }

    /**
     * Sets sendWithoutVideo
     * @param bool $sendWithoutVideo Whether to send the email if no video is recorded. If set to require a video, and none is added before the videoDueDate, the prompt is cancelled.
     * @return $this
     */
    public function setSendWithoutVideo($sendWithoutVideo)
    {
        $this->container['sendWithoutVideo'] = $sendWithoutVideo;

        return $this;
    }

    /**
     * Gets videoDueDate
     * @return \DateTime
     */
    public function getVideoDueDate()
    {
        return $this->container['videoDueDate'];
    }

    /**
     * Sets videoDueDate
     * @param \DateTime $videoDueDate When the video must be recorded by
     * @return $this
     */
    public function setVideoDueDate($videoDueDate)
    {
        $this->container['videoDueDate'] = $videoDueDate;

        return $this;
    }

    /**
     * Gets scheduledSendDate
     * @return \DateTime
     */
    public function getScheduledSendDate()
    {
        return $this->container['scheduledSendDate'];
    }

    /**
     * Sets scheduledSendDate
     * @param \DateTime $scheduledSendDate When the final email is scheduled to be sent
     * @return $this
     */
    public function setScheduledSendDate($scheduledSendDate)
    {
        $this->container['scheduledSendDate'] = $scheduledSendDate;

        return $this;
    }

    /**
     * Gets videoId
     * @return string
     */
    public function getVideoId()
    {
        return $this->container['videoId'];
    }

    /**
     * Sets videoId
     * @param string $videoId The video that was added to the prompt. Read Only.
     * @return $this
     */
    public function setVideoId($videoId)
    {
        $this->container['videoId'] = $videoId;

        return $this;
    }

    /**
     * Gets emailId
     * @return string
     */
    public function getEmailId()
    {
        return $this->container['emailId'];
    }

    /**
     * Sets emailId
     * @param string $emailId The email that was created by the prompt Read Only.
     * @return $this
     */
    public function setEmailId($emailId)
    {
        $this->container['emailId'] = $emailId;

        return $this;
    }

    /**
     * Gets jobId
     * @return string
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     * @param string $jobId The job sent by the prompt Read Only.
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status The status of the prompt: created = 0, sent = 10, recorded = 20, job_created = 30, timed_out = 40, declined = 50 Read Only
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets doNotApplyTemplate
     * @return bool
     */
    public function getDoNotApplyTemplate()
    {
        return $this->container['doNotApplyTemplate'];
    }

    /**
     * Sets doNotApplyTemplate
     * @param bool $doNotApplyTemplate Controls whether a user template is applied to the message as it is sent
     * @return $this
     */
    public function setDoNotApplyTemplate($doNotApplyTemplate)
    {
        $this->container['doNotApplyTemplate'] = $doNotApplyTemplate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


