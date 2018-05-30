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
 * OpenAPI spec version: 2.0.0
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
        'templateId' => 'string',
        'emailSubjectLine' => 'string',
        'emailContent' => 'string',
        'contactId' => 'string',
        'toLists' => 'string[]',
        'promptIntro' => 'string',
        'exampleVideoId' => 'string',
        'followupVideoId' => 'string',
        'sendWithoutVideo' => 'bool',
        'videoDueDate' => '\DateTime',
        'videoId' => 'string',
        'emailId' => 'string',
        'jobId' => 'string',
        'promptBotId' => 'string',
        'applyTemplate' => 'bool',
        'facebookMessage' => 'string',
        'twitterMessage' => 'string',
        'linkedinMessage' => 'string',
        'alternateContentId' => 'string',
        'id' => 'string',
        'userId' => 'string',
        'jerichoId' => 'string',
        'promptSubject' => 'string',
        'promptHtml' => 'string',
        'scheduledSendDate' => '\DateTime',
        'clientGroupId' => 'string',
        'thumbnailUrl' => 'string',
        'status' => 'int',
        'createdDate' => '\DateTime',
        'lastNotified' => '\DateTime',
        'sendMechanism' => '\DateTime',
        'sendTypes' => 'string[]'
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
        'templateId' => 'templateId',
        'emailSubjectLine' => 'emailSubjectLine',
        'emailContent' => 'emailContent',
        'contactId' => 'contactId',
        'toLists' => 'toLists',
        'promptIntro' => 'promptIntro',
        'exampleVideoId' => 'exampleVideoId',
        'followupVideoId' => 'followupVideoId',
        'sendWithoutVideo' => 'sendWithoutVideo',
        'videoDueDate' => 'videoDueDate',
        'videoId' => 'videoId',
        'emailId' => 'emailId',
        'jobId' => 'jobId',
        'promptBotId' => 'promptBotId',
        'applyTemplate' => 'applyTemplate',
        'facebookMessage' => 'facebookMessage',
        'twitterMessage' => 'twitterMessage',
        'linkedinMessage' => 'linkedinMessage',
        'alternateContentId' => 'alternateContentId',
        'id' => 'id',
        'userId' => 'userId',
        'jerichoId' => 'jerichoId',
        'promptSubject' => 'promptSubject',
        'promptHtml' => 'promptHtml',
        'scheduledSendDate' => 'scheduledSendDate',
        'clientGroupId' => 'clientGroupId',
        'thumbnailUrl' => 'thumbnailUrl',
        'status' => 'status',
        'createdDate' => 'createdDate',
        'lastNotified' => 'lastNotified',
        'sendMechanism' => 'sendMechanism',
        'sendTypes' => 'sendTypes'
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
        'templateId' => 'setTemplateId',
        'emailSubjectLine' => 'setEmailSubjectLine',
        'emailContent' => 'setEmailContent',
        'contactId' => 'setContactId',
        'toLists' => 'setToLists',
        'promptIntro' => 'setPromptIntro',
        'exampleVideoId' => 'setExampleVideoId',
        'followupVideoId' => 'setFollowupVideoId',
        'sendWithoutVideo' => 'setSendWithoutVideo',
        'videoDueDate' => 'setVideoDueDate',
        'videoId' => 'setVideoId',
        'emailId' => 'setEmailId',
        'jobId' => 'setJobId',
        'promptBotId' => 'setPromptBotId',
        'applyTemplate' => 'setApplyTemplate',
        'facebookMessage' => 'setFacebookMessage',
        'twitterMessage' => 'setTwitterMessage',
        'linkedinMessage' => 'setLinkedinMessage',
        'alternateContentId' => 'setAlternateContentId',
        'id' => 'setId',
        'userId' => 'setUserId',
        'jerichoId' => 'setJerichoId',
        'promptSubject' => 'setPromptSubject',
        'promptHtml' => 'setPromptHtml',
        'scheduledSendDate' => 'setScheduledSendDate',
        'clientGroupId' => 'setClientGroupId',
        'thumbnailUrl' => 'setThumbnailUrl',
        'status' => 'setStatus',
        'createdDate' => 'setCreatedDate',
        'lastNotified' => 'setLastNotified',
        'sendMechanism' => 'setSendMechanism',
        'sendTypes' => 'setSendTypes'
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
        'templateId' => 'getTemplateId',
        'emailSubjectLine' => 'getEmailSubjectLine',
        'emailContent' => 'getEmailContent',
        'contactId' => 'getContactId',
        'toLists' => 'getToLists',
        'promptIntro' => 'getPromptIntro',
        'exampleVideoId' => 'getExampleVideoId',
        'followupVideoId' => 'getFollowupVideoId',
        'sendWithoutVideo' => 'getSendWithoutVideo',
        'videoDueDate' => 'getVideoDueDate',
        'videoId' => 'getVideoId',
        'emailId' => 'getEmailId',
        'jobId' => 'getJobId',
        'promptBotId' => 'getPromptBotId',
        'applyTemplate' => 'getApplyTemplate',
        'facebookMessage' => 'getFacebookMessage',
        'twitterMessage' => 'getTwitterMessage',
        'linkedinMessage' => 'getLinkedinMessage',
        'alternateContentId' => 'getAlternateContentId',
        'id' => 'getId',
        'userId' => 'getUserId',
        'jerichoId' => 'getJerichoId',
        'promptSubject' => 'getPromptSubject',
        'promptHtml' => 'getPromptHtml',
        'scheduledSendDate' => 'getScheduledSendDate',
        'clientGroupId' => 'getClientGroupId',
        'thumbnailUrl' => 'getThumbnailUrl',
        'status' => 'getStatus',
        'createdDate' => 'getCreatedDate',
        'lastNotified' => 'getLastNotified',
        'sendMechanism' => 'getSendMechanism',
        'sendTypes' => 'getSendTypes'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['emailSubjectLine'] = isset($data['emailSubjectLine']) ? $data['emailSubjectLine'] : null;
        $this->container['emailContent'] = isset($data['emailContent']) ? $data['emailContent'] : null;
        $this->container['contactId'] = isset($data['contactId']) ? $data['contactId'] : null;
        $this->container['toLists'] = isset($data['toLists']) ? $data['toLists'] : null;
        $this->container['promptIntro'] = isset($data['promptIntro']) ? $data['promptIntro'] : null;
        $this->container['exampleVideoId'] = isset($data['exampleVideoId']) ? $data['exampleVideoId'] : null;
        $this->container['followupVideoId'] = isset($data['followupVideoId']) ? $data['followupVideoId'] : null;
        $this->container['sendWithoutVideo'] = isset($data['sendWithoutVideo']) ? $data['sendWithoutVideo'] : null;
        $this->container['videoDueDate'] = isset($data['videoDueDate']) ? $data['videoDueDate'] : null;
        $this->container['videoId'] = isset($data['videoId']) ? $data['videoId'] : null;
        $this->container['emailId'] = isset($data['emailId']) ? $data['emailId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['promptBotId'] = isset($data['promptBotId']) ? $data['promptBotId'] : null;
        $this->container['applyTemplate'] = isset($data['applyTemplate']) ? $data['applyTemplate'] : null;
        $this->container['facebookMessage'] = isset($data['facebookMessage']) ? $data['facebookMessage'] : null;
        $this->container['twitterMessage'] = isset($data['twitterMessage']) ? $data['twitterMessage'] : null;
        $this->container['linkedinMessage'] = isset($data['linkedinMessage']) ? $data['linkedinMessage'] : null;
        $this->container['alternateContentId'] = isset($data['alternateContentId']) ? $data['alternateContentId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['jerichoId'] = isset($data['jerichoId']) ? $data['jerichoId'] : null;
        $this->container['promptSubject'] = isset($data['promptSubject']) ? $data['promptSubject'] : null;
        $this->container['promptHtml'] = isset($data['promptHtml']) ? $data['promptHtml'] : null;
        $this->container['scheduledSendDate'] = isset($data['scheduledSendDate']) ? $data['scheduledSendDate'] : null;
        $this->container['clientGroupId'] = isset($data['clientGroupId']) ? $data['clientGroupId'] : null;
        $this->container['thumbnailUrl'] = isset($data['thumbnailUrl']) ? $data['thumbnailUrl'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['lastNotified'] = isset($data['lastNotified']) ? $data['lastNotified'] : null;
        $this->container['sendMechanism'] = isset($data['sendMechanism']) ? $data['sendMechanism'] : null;
        $this->container['sendTypes'] = isset($data['sendTypes']) ? $data['sendTypes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
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
     * Gets contactId
     * @return string
     */
    public function getContactId()
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     * @param string $contactId Contact Id to send the final email to
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->container['contactId'] = $contactId;

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
     * Gets promptIntro
     * @return string
     */
    public function getPromptIntro()
    {
        return $this->container['promptIntro'];
    }

    /**
     * Sets promptIntro
     * @param string $promptIntro A paragraph intro statement about the purpose of the email you're recording a video for.
     * @return $this
     */
    public function setPromptIntro($promptIntro)
    {
        $this->container['promptIntro'] = $promptIntro;

        return $this;
    }

    /**
     * Gets exampleVideoId
     * @return string
     */
    public function getExampleVideoId()
    {
        return $this->container['exampleVideoId'];
    }

    /**
     * Sets exampleVideoId
     * @param string $exampleVideoId An example or explanatory video to help the user understand what to say.
     * @return $this
     */
    public function setExampleVideoId($exampleVideoId)
    {
        $this->container['exampleVideoId'] = $exampleVideoId;

        return $this;
    }

    /**
     * Gets followupVideoId
     * @return string
     */
    public function getFollowupVideoId()
    {
        return $this->container['followupVideoId'];
    }

    /**
     * Sets followupVideoId
     * @param string $followupVideoId An example or explanatory video to help the user understand what to say.
     * @return $this
     */
    public function setFollowupVideoId($followupVideoId)
    {
        $this->container['followupVideoId'] = $followupVideoId;

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
     * Gets promptBotId
     * @return string
     */
    public function getPromptBotId()
    {
        return $this->container['promptBotId'];
    }

    /**
     * Sets promptBotId
     * @param string $promptBotId The bot that created the prompt.
     * @return $this
     */
    public function setPromptBotId($promptBotId)
    {
        $this->container['promptBotId'] = $promptBotId;

        return $this;
    }

    /**
     * Gets applyTemplate
     * @return bool
     */
    public function getApplyTemplate()
    {
        return $this->container['applyTemplate'];
    }

    /**
     * Sets applyTemplate
     * @param bool $applyTemplate Controls whether a user template is applied to the message as it is sent
     * @return $this
     */
    public function setApplyTemplate($applyTemplate)
    {
        $this->container['applyTemplate'] = $applyTemplate;

        return $this;
    }

    /**
     * Gets facebookMessage
     * @return string
     */
    public function getFacebookMessage()
    {
        return $this->container['facebookMessage'];
    }

    /**
     * Sets facebookMessage
     * @param string $facebookMessage The facebook message to be passed off to social sender
     * @return $this
     */
    public function setFacebookMessage($facebookMessage)
    {
        $this->container['facebookMessage'] = $facebookMessage;

        return $this;
    }

    /**
     * Gets twitterMessage
     * @return string
     */
    public function getTwitterMessage()
    {
        return $this->container['twitterMessage'];
    }

    /**
     * Sets twitterMessage
     * @param string $twitterMessage The twitter message to be passed off to social sender
     * @return $this
     */
    public function setTwitterMessage($twitterMessage)
    {
        $this->container['twitterMessage'] = $twitterMessage;

        return $this;
    }

    /**
     * Gets linkedinMessage
     * @return string
     */
    public function getLinkedinMessage()
    {
        return $this->container['linkedinMessage'];
    }

    /**
     * Sets linkedinMessage
     * @param string $linkedinMessage The linkedin message to be passed off to social sender
     * @return $this
     */
    public function setLinkedinMessage($linkedinMessage)
    {
        $this->container['linkedinMessage'] = $linkedinMessage;

        return $this;
    }

    /**
     * Gets alternateContentId
     * @return string
     */
    public function getAlternateContentId()
    {
        return $this->container['alternateContentId'];
    }

    /**
     * Sets alternateContentId
     * @param string $alternateContentId The id for the alternate content id
     * @return $this
     */
    public function setAlternateContentId($alternateContentId)
    {
        $this->container['alternateContentId'] = $alternateContentId;

        return $this;
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
     * @param string $promptHtml The suggested script of the prompt.
     * @return $this
     */
    public function setPromptHtml($promptHtml)
    {
        $this->container['promptHtml'] = $promptHtml;

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
     * Gets clientGroupId
     * @return string
     */
    public function getClientGroupId()
    {
        return $this->container['clientGroupId'];
    }

    /**
     * Sets clientGroupId
     * @param string $clientGroupId The client group campaign that created the prompt.
     * @return $this
     */
    public function setClientGroupId($clientGroupId)
    {
        $this->container['clientGroupId'] = $clientGroupId;

        return $this;
    }

    /**
     * Gets thumbnailUrl
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnailUrl'];
    }

    /**
     * Sets thumbnailUrl
     * @param string $thumbnailUrl The URL of a thumbnail image for this prompt
     * @return $this
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->container['thumbnailUrl'] = $thumbnailUrl;

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
     * Gets createdDate
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     * @param \DateTime $createdDate When the email was first sent out
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets lastNotified
     * @return \DateTime
     */
    public function getLastNotified()
    {
        return $this->container['lastNotified'];
    }

    /**
     * Sets lastNotified
     * @param \DateTime $lastNotified When the user was last notified about a prompt email waiting for a video
     * @return $this
     */
    public function setLastNotified($lastNotified)
    {
        $this->container['lastNotified'] = $lastNotified;

        return $this;
    }

    /**
     * Gets sendMechanism
     * @return \DateTime
     */
    public function getSendMechanism()
    {
        return $this->container['sendMechanism'];
    }

    /**
     * Sets sendMechanism
     * @param \DateTime $sendMechanism The sendMechanism property
     * @return $this
     */
    public function setSendMechanism($sendMechanism)
    {
        $this->container['sendMechanism'] = $sendMechanism;

        return $this;
    }

    /**
     * Gets sendTypes
     * @return string[]
     */
    public function getSendTypes()
    {
        return $this->container['sendTypes'];
    }

    /**
     * Sets sendTypes
     * @param string[] $sendTypes The types of mechanisms this prompt can send.
     * @return $this
     */
    public function setSendTypes($sendTypes)
    {
        $this->container['sendTypes'] = $sendTypes;

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


