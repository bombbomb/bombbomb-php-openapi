<?php
/**
 * Curriculum
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
 * Curriculum Class Doc Comment
 *
 * @category    Class */
 // @description The Curriculum class
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Curriculum implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Curriculum';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'htmlIntro' => 'string',
        'imgUrl' => 'string',
        'itemCount' => 'int',
        'renderAs' => 'string',
        'visibleToAllUsers' => 'bool',
        'progress' => '\Swagger\Client\Model\CurriculumUserProgress[]'
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
        'name' => 'name',
        'htmlIntro' => 'htmlIntro',
        'imgUrl' => 'imgUrl',
        'itemCount' => 'itemCount',
        'renderAs' => 'renderAs',
        'visibleToAllUsers' => 'visibleToAllUsers',
        'progress' => 'progress'
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
        'name' => 'setName',
        'htmlIntro' => 'setHtmlIntro',
        'imgUrl' => 'setImgUrl',
        'itemCount' => 'setItemCount',
        'renderAs' => 'setRenderAs',
        'visibleToAllUsers' => 'setVisibleToAllUsers',
        'progress' => 'setProgress'
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
        'name' => 'getName',
        'htmlIntro' => 'getHtmlIntro',
        'imgUrl' => 'getImgUrl',
        'itemCount' => 'getItemCount',
        'renderAs' => 'getRenderAs',
        'visibleToAllUsers' => 'getVisibleToAllUsers',
        'progress' => 'getProgress'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['htmlIntro'] = isset($data['htmlIntro']) ? $data['htmlIntro'] : null;
        $this->container['imgUrl'] = isset($data['imgUrl']) ? $data['imgUrl'] : null;
        $this->container['itemCount'] = isset($data['itemCount']) ? $data['itemCount'] : null;
        $this->container['renderAs'] = isset($data['renderAs']) ? $data['renderAs'] : null;
        $this->container['visibleToAllUsers'] = isset($data['visibleToAllUsers']) ? $data['visibleToAllUsers'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
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
     * @param string $id Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets htmlIntro
     * @return string
     */
    public function getHtmlIntro()
    {
        return $this->container['htmlIntro'];
    }

    /**
     * Sets htmlIntro
     * @param string $htmlIntro HTML formatted intro
     * @return $this
     */
    public function setHtmlIntro($htmlIntro)
    {
        $this->container['htmlIntro'] = $htmlIntro;

        return $this;
    }

    /**
     * Gets imgUrl
     * @return string
     */
    public function getImgUrl()
    {
        return $this->container['imgUrl'];
    }

    /**
     * Sets imgUrl
     * @param string $imgUrl URI of header image
     * @return $this
     */
    public function setImgUrl($imgUrl)
    {
        $this->container['imgUrl'] = $imgUrl;

        return $this;
    }

    /**
     * Gets itemCount
     * @return int
     */
    public function getItemCount()
    {
        return $this->container['itemCount'];
    }

    /**
     * Sets itemCount
     * @param int $itemCount Number of curriculum items
     * @return $this
     */
    public function setItemCount($itemCount)
    {
        $this->container['itemCount'] = $itemCount;

        return $this;
    }

    /**
     * Gets renderAs
     * @return string
     */
    public function getRenderAs()
    {
        return $this->container['renderAs'];
    }

    /**
     * Sets renderAs
     * @param string $renderAs Render method for curriculum
     * @return $this
     */
    public function setRenderAs($renderAs)
    {
        $this->container['renderAs'] = $renderAs;

        return $this;
    }

    /**
     * Gets visibleToAllUsers
     * @return bool
     */
    public function getVisibleToAllUsers()
    {
        return $this->container['visibleToAllUsers'];
    }

    /**
     * Sets visibleToAllUsers
     * @param bool $visibleToAllUsers Globally visible
     * @return $this
     */
    public function setVisibleToAllUsers($visibleToAllUsers)
    {
        $this->container['visibleToAllUsers'] = $visibleToAllUsers;

        return $this;
    }

    /**
     * Gets progress
     * @return \Swagger\Client\Model\CurriculumUserProgress[]
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param \Swagger\Client\Model\CurriculumUserProgress[] $progress Collection of User Progress for Curriculum
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

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

