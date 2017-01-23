<?php
/**
 * PromptBotBot
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PromptBotBot Class Doc Comment
 *
 * @category    Class */
 // @description The PromptBot\\Bot class
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PromptBotBot implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PromptBot\Bot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'userId' => 'string',
        'emailId' => 'string',
        'listId' => 'string',
        'promptSubject' => 'string',
        'promptBody' => 'string',
        'status' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'botTypeId' => 'string',
        'templateId' => 'string'
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
        'emailId' => 'emailId',
        'listId' => 'listId',
        'promptSubject' => 'promptSubject',
        'promptBody' => 'promptBody',
        'status' => 'status',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'botTypeId' => 'botTypeId',
        'templateId' => 'templateId'
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
        'emailId' => 'setEmailId',
        'listId' => 'setListId',
        'promptSubject' => 'setPromptSubject',
        'promptBody' => 'setPromptBody',
        'status' => 'setStatus',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'botTypeId' => 'setBotTypeId',
        'templateId' => 'setTemplateId'
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
        'emailId' => 'getEmailId',
        'listId' => 'getListId',
        'promptSubject' => 'getPromptSubject',
        'promptBody' => 'getPromptBody',
        'status' => 'getStatus',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'botTypeId' => 'getBotTypeId',
        'templateId' => 'getTemplateId'
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
        $this->container['emailId'] = isset($data['emailId']) ? $data['emailId'] : null;
        $this->container['listId'] = isset($data['listId']) ? $data['listId'] : null;
        $this->container['promptSubject'] = isset($data['promptSubject']) ? $data['promptSubject'] : null;
        $this->container['promptBody'] = isset($data['promptBody']) ? $data['promptBody'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['botTypeId'] = isset($data['botTypeId']) ? $data['botTypeId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The identifier of the prompt bot. Read Only.
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
     * @param string $userId The prompt bot's owner. Read Only.
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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
     * @param string $emailId The default email being sent to contacts in the prompt bot list.
     * @return $this
     */
    public function setEmailId($emailId)
    {
        $this->container['emailId'] = $emailId;

        return $this;
    }

    /**
     * Gets listId
     * @return string
     */
    public function getListId()
    {
        return $this->container['listId'];
    }

    /**
     * Sets listId
     * @param string $listId The list to attach the Prompt Bot to.
     * @return $this
     */
    public function setListId($listId)
    {
        $this->container['listId'] = $listId;

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
     * @param string $promptSubject The prompt subject.
     * @return $this
     */
    public function setPromptSubject($promptSubject)
    {
        $this->container['promptSubject'] = $promptSubject;

        return $this;
    }

    /**
     * Gets promptBody
     * @return string
     */
    public function getPromptBody()
    {
        return $this->container['promptBody'];
    }

    /**
     * Sets promptBody
     * @param string $promptBody The prompt body.
     * @return $this
     */
    public function setPromptBody($promptBody)
    {
        $this->container['promptBody'] = $promptBody;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the prompt bot. Read Only.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets startDate
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     * @param \DateTime $startDate when the bot started
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     * @param \DateTime $endDate when the bot should finish
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets botTypeId
     * @return string
     */
    public function getBotTypeId()
    {
        return $this->container['botTypeId'];
    }

    /**
     * Sets botTypeId
     * @param string $botTypeId The type of bot.
     * @return $this
     */
    public function setBotTypeId($botTypeId)
    {
        $this->container['botTypeId'] = $botTypeId;

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
     * @param string $templateId The template id used to generate the default email.
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

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


