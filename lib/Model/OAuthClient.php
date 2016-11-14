<?php
/**
 * OAuthClient
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
 * OAuthClient Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OAuthClient implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OAuthClient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'identifier' => 'string',
        'name' => 'string',
        'clientSecret' => 'string',
        'grantsAllowed' => 'string',
        'owningUserId' => 'string',
        'redirectUri' => 'string'
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
        'identifier' => 'identifier',
        'name' => 'name',
        'clientSecret' => 'clientSecret',
        'grantsAllowed' => 'grantsAllowed',
        'owningUserId' => 'owningUserId',
        'redirectUri' => 'redirectUri'
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
        'identifier' => 'setIdentifier',
        'name' => 'setName',
        'clientSecret' => 'setClientSecret',
        'grantsAllowed' => 'setGrantsAllowed',
        'owningUserId' => 'setOwningUserId',
        'redirectUri' => 'setRedirectUri'
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
        'identifier' => 'getIdentifier',
        'name' => 'getName',
        'clientSecret' => 'getClientSecret',
        'grantsAllowed' => 'getGrantsAllowed',
        'owningUserId' => 'getOwningUserId',
        'redirectUri' => 'getRedirectUri'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['grantsAllowed'] = isset($data['grantsAllowed']) ? $data['grantsAllowed'] : null;
        $this->container['owningUserId'] = isset($data['owningUserId']) ? $data['owningUserId'] : null;
        $this->container['redirectUri'] = isset($data['redirectUri']) ? $data['redirectUri'] : null;
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
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier The id of the OAuth Client
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
     * @param string $name The user-facing name of the client. Eg. MyCrm
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets clientSecret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param string $clientSecret The secret supplied to the OAuth Application
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }

    /**
     * Gets grantsAllowed
     * @return string
     */
    public function getGrantsAllowed()
    {
        return $this->container['grantsAllowed'];
    }

    /**
     * Sets grantsAllowed
     * @param string $grantsAllowed The grants allowed
     * @return $this
     */
    public function setGrantsAllowed($grantsAllowed)
    {
        $this->container['grantsAllowed'] = $grantsAllowed;

        return $this;
    }

    /**
     * Gets owningUserId
     * @return string
     */
    public function getOwningUserId()
    {
        return $this->container['owningUserId'];
    }

    /**
     * Sets owningUserId
     * @param string $owningUserId The user who controls the OAuth App
     * @return $this
     */
    public function setOwningUserId($owningUserId)
    {
        $this->container['owningUserId'] = $owningUserId;

        return $this;
    }

    /**
     * Gets redirectUri
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirectUri'];
    }

    /**
     * Sets redirectUri
     * @param string $redirectUri Where OAuth authorization sessions are returned to
     * @return $this
     */
    public function setRedirectUri($redirectUri)
    {
        $this->container['redirectUri'] = $redirectUri;

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


