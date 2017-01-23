<?php
/**
 * JerichoPerformance
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
 * JerichoPerformance Class Doc Comment
 *
 * @category    Class */
 // @description Reports on the aggregate performance of a Jericho send
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JerichoPerformance implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'JerichoPerformance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'sent' => 'int',
        'uniqueViews' => 'int',
        'uniqueLandingPageViews' => 'int',
        'landingPageViews' => 'int',
        'delivered' => 'int',
        'bounce' => 'int',
        'open' => 'int',
        'click' => 'int',
        'videoPlay' => 'int',
        'abuseComplaints' => 'int',
        'contacts' => 'int'
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
        'sent' => 'sent',
        'uniqueViews' => 'uniqueViews',
        'uniqueLandingPageViews' => 'uniqueLandingPageViews',
        'landingPageViews' => 'landingPageViews',
        'delivered' => 'delivered',
        'bounce' => 'bounce',
        'open' => 'open',
        'click' => 'click',
        'videoPlay' => 'videoPlay',
        'abuseComplaints' => 'abuseComplaints',
        'contacts' => 'contacts'
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
        'sent' => 'setSent',
        'uniqueViews' => 'setUniqueViews',
        'uniqueLandingPageViews' => 'setUniqueLandingPageViews',
        'landingPageViews' => 'setLandingPageViews',
        'delivered' => 'setDelivered',
        'bounce' => 'setBounce',
        'open' => 'setOpen',
        'click' => 'setClick',
        'videoPlay' => 'setVideoPlay',
        'abuseComplaints' => 'setAbuseComplaints',
        'contacts' => 'setContacts'
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
        'sent' => 'getSent',
        'uniqueViews' => 'getUniqueViews',
        'uniqueLandingPageViews' => 'getUniqueLandingPageViews',
        'landingPageViews' => 'getLandingPageViews',
        'delivered' => 'getDelivered',
        'bounce' => 'getBounce',
        'open' => 'getOpen',
        'click' => 'getClick',
        'videoPlay' => 'getVideoPlay',
        'abuseComplaints' => 'getAbuseComplaints',
        'contacts' => 'getContacts'
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
        $this->container['sent'] = isset($data['sent']) ? $data['sent'] : null;
        $this->container['uniqueViews'] = isset($data['uniqueViews']) ? $data['uniqueViews'] : null;
        $this->container['uniqueLandingPageViews'] = isset($data['uniqueLandingPageViews']) ? $data['uniqueLandingPageViews'] : null;
        $this->container['landingPageViews'] = isset($data['landingPageViews']) ? $data['landingPageViews'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['bounce'] = isset($data['bounce']) ? $data['bounce'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['click'] = isset($data['click']) ? $data['click'] : null;
        $this->container['videoPlay'] = isset($data['videoPlay']) ? $data['videoPlay'] : null;
        $this->container['abuseComplaints'] = isset($data['abuseComplaints']) ? $data['abuseComplaints'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
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
     * Gets sent
     * @return int
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     * @param int $sent The number of emails sent
     * @return $this
     */
    public function setSent($sent)
    {
        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets uniqueViews
     * @return int
     */
    public function getUniqueViews()
    {
        return $this->container['uniqueViews'];
    }

    /**
     * Sets uniqueViews
     * @param int $uniqueViews The unique number of people that viewed the email
     * @return $this
     */
    public function setUniqueViews($uniqueViews)
    {
        $this->container['uniqueViews'] = $uniqueViews;

        return $this;
    }

    /**
     * Gets uniqueLandingPageViews
     * @return int
     */
    public function getUniqueLandingPageViews()
    {
        return $this->container['uniqueLandingPageViews'];
    }

    /**
     * Sets uniqueLandingPageViews
     * @param int $uniqueLandingPageViews The unique number of people that visited the landing page
     * @return $this
     */
    public function setUniqueLandingPageViews($uniqueLandingPageViews)
    {
        $this->container['uniqueLandingPageViews'] = $uniqueLandingPageViews;

        return $this;
    }

    /**
     * Gets landingPageViews
     * @return int
     */
    public function getLandingPageViews()
    {
        return $this->container['landingPageViews'];
    }

    /**
     * Sets landingPageViews
     * @param int $landingPageViews The total number of people that visisted the landing page
     * @return $this
     */
    public function setLandingPageViews($landingPageViews)
    {
        $this->container['landingPageViews'] = $landingPageViews;

        return $this;
    }

    /**
     * Gets delivered
     * @return int
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     * @param int $delivered The number of emails delivered, likely less than sent due to bounces, and other common delivery issues
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets bounce
     * @return int
     */
    public function getBounce()
    {
        return $this->container['bounce'];
    }

    /**
     * Sets bounce
     * @param int $bounce The number of emails that bounced as undeliverable
     * @return $this
     */
    public function setBounce($bounce)
    {
        $this->container['bounce'] = $bounce;

        return $this;
    }

    /**
     * Gets open
     * @return int
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     * @param int $open The total number of times the emails were viewed
     * @return $this
     */
    public function setOpen($open)
    {
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets click
     * @return int
     */
    public function getClick()
    {
        return $this->container['click'];
    }

    /**
     * Sets click
     * @param int $click The total number of times links in the emails were clicked
     * @return $this
     */
    public function setClick($click)
    {
        $this->container['click'] = $click;

        return $this;
    }

    /**
     * Gets videoPlay
     * @return int
     */
    public function getVideoPlay()
    {
        return $this->container['videoPlay'];
    }

    /**
     * Sets videoPlay
     * @param int $videoPlay The total number of times videos in the emails were played
     * @return $this
     */
    public function setVideoPlay($videoPlay)
    {
        $this->container['videoPlay'] = $videoPlay;

        return $this;
    }

    /**
     * Gets abuseComplaints
     * @return int
     */
    public function getAbuseComplaints()
    {
        return $this->container['abuseComplaints'];
    }

    /**
     * Sets abuseComplaints
     * @param int $abuseComplaints The number of recipients that marked the message as abusive
     * @return $this
     */
    public function setAbuseComplaints($abuseComplaints)
    {
        $this->container['abuseComplaints'] = $abuseComplaints;

        return $this;
    }

    /**
     * Gets contacts
     * @return int
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     * @param int $contacts The total number of contacts submitted to be sent, may be more than was sent to
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

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


