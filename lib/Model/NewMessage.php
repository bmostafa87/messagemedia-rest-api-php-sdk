<?php
/**
 * NewMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  MessageMedia\RESTAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MessageMedia REST API
 *
 * Australia’s Leading Messaging Solutions for Business and Enterprise.
 *
 * OpenAPI spec version: 1.0.0
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

namespace MessageMedia\RESTAPI\Model;

use \ArrayAccess;

/**
 * NewMessage Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NewMessage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NewMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'content' => 'string',
        'callback_url' => 'string',
        'delivery_report' => 'bool',
        'destination_number' => 'string',
        'format' => 'string',
        'metadata' => '\MessageMedia\RESTAPI\Model\MessageMetadata',
        'message_expiry_timestamp' => '\DateTime',
        'scheduled' => '\DateTime',
        'source_address' => 'string',
        'source_address_type' => 'string'
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
        'content' => 'content',
        'callback_url' => 'callback_url',
        'delivery_report' => 'delivery_report',
        'destination_number' => 'destination_number',
        'format' => 'format',
        'metadata' => 'metadata',
        'message_expiry_timestamp' => 'message_expiry_timestamp',
        'scheduled' => 'scheduled',
        'source_address' => 'source_address',
        'source_address_type' => 'source_address_type'
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
        'content' => 'setContent',
        'callback_url' => 'setCallbackUrl',
        'delivery_report' => 'setDeliveryReport',
        'destination_number' => 'setDestinationNumber',
        'format' => 'setFormat',
        'metadata' => 'setMetadata',
        'message_expiry_timestamp' => 'setMessageExpiryTimestamp',
        'scheduled' => 'setScheduled',
        'source_address' => 'setSourceAddress',
        'source_address_type' => 'setSourceAddressType'
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
        'content' => 'getContent',
        'callback_url' => 'getCallbackUrl',
        'delivery_report' => 'getDeliveryReport',
        'destination_number' => 'getDestinationNumber',
        'format' => 'getFormat',
        'metadata' => 'getMetadata',
        'message_expiry_timestamp' => 'getMessageExpiryTimestamp',
        'scheduled' => 'getScheduled',
        'source_address' => 'getSourceAddress',
        'source_address_type' => 'getSourceAddressType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const FORMAT_SMS = 'SMS';
    const FORMAT_VOICE = 'VOICE';
    const SOURCE_ADDRESS_TYPE_INTERNATIONAL = 'INTERNATIONAL';
    const SOURCE_ADDRESS_TYPE_ALPHANUMERIC = 'ALPHANUMERIC';
    const SOURCE_ADDRESS_TYPE_SHORTCODE = 'SHORTCODE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_SMS,
            self::FORMAT_VOICE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSourceAddressTypeAllowableValues()
    {
        return [
            self::SOURCE_ADDRESS_TYPE_INTERNATIONAL,
            self::SOURCE_ADDRESS_TYPE_ALPHANUMERIC,
            self::SOURCE_ADDRESS_TYPE_SHORTCODE,
        ];
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['delivery_report'] = isset($data['delivery_report']) ? $data['delivery_report'] : false;
        $this->container['destination_number'] = isset($data['destination_number']) ? $data['destination_number'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : 'SMS';
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['message_expiry_timestamp'] = isset($data['message_expiry_timestamp']) ? $data['message_expiry_timestamp'] : null;
        $this->container['scheduled'] = isset($data['scheduled']) ? $data['scheduled'] : null;
        $this->container['source_address'] = isset($data['source_address']) ? $data['source_address'] : null;
        $this->container['source_address_type'] = isset($data['source_address_type']) ? $data['source_address_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ((strlen($this->container['content']) > 5000)) {
            $invalid_properties[] = "invalid value for 'content', the character length must be smaller than or equal to 5000.";
        }
        if ((strlen($this->container['content']) < 1)) {
            $invalid_properties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['destination_number'] === null) {
            $invalid_properties[] = "'destination_number' can't be null";
        }
        if ((strlen($this->container['destination_number']) > 15)) {
            $invalid_properties[] = "invalid value for 'destination_number', the character length must be smaller than or equal to 15.";
        }
        if ((strlen($this->container['destination_number']) < 1)) {
            $invalid_properties[] = "invalid value for 'destination_number', the character length must be bigger than or equal to 1.";
        }
        $allowed_values = array("SMS", "VOICE");
        if (!in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'format', must be one of #{allowed_values}.";
        }
        if (!is_null($this->container['source_address']) && (strlen($this->container['source_address']) > 14)) {
            $invalid_properties[] = "invalid value for 'source_address', the character length must be smaller than or equal to 14.";
        }
        if (!is_null($this->container['source_address']) && (strlen($this->container['source_address']) < 1)) {
            $invalid_properties[] = "invalid value for 'source_address', the character length must be bigger than or equal to 1.";
        }
        $allowed_values = array("INTERNATIONAL", "ALPHANUMERIC", "SHORTCODE");
        if (!in_array($this->container['source_address_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'source_address_type', must be one of #{allowed_values}.";
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
        if ($this->container['content'] === null) {
            return false;
        }
        if (strlen($this->container['content']) > 5000) {
            return false;
        }
        if (strlen($this->container['content']) < 1) {
            return false;
        }
        if ($this->container['destination_number'] === null) {
            return false;
        }
        if (strlen($this->container['destination_number']) > 15) {
            return false;
        }
        if (strlen($this->container['destination_number']) < 1) {
            return false;
        }
        $allowed_values = array("SMS", "VOICE");
        if (!in_array($this->container['format'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['source_address']) > 14) {
            return false;
        }
        if (strlen($this->container['source_address']) < 1) {
            return false;
        }
        $allowed_values = array("INTERNATIONAL", "ALPHANUMERIC", "SHORTCODE");
        if (!in_array($this->container['source_address_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content Content of message.
     * @return $this
     */
    public function setContent($content)
    {
        if (strlen($content) > 5000) {
            throw new \InvalidArgumentException('invalid length for $content when calling NewMessage., must be smaller than or equal to 5000.');
        }
        if (strlen($content) < 1) {
            throw new \InvalidArgumentException('invalid length for $content when calling NewMessage., must be bigger than or equal to 1.');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets callback_url
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     * @param string $callback_url URL replies and delivery reports to this message will be pushed to.
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets delivery_report
     * @return bool
     */
    public function getDeliveryReport()
    {
        return $this->container['delivery_report'];
    }

    /**
     * Sets delivery_report
     * @param bool $delivery_report
     * @return $this
     */
    public function setDeliveryReport($delivery_report)
    {
        $this->container['delivery_report'] = $delivery_report;

        return $this;
    }

    /**
     * Gets destination_number
     * @return string
     */
    public function getDestinationNumber()
    {
        return $this->container['destination_number'];
    }

    /**
     * Sets destination_number
     * @param string $destination_number Destination number of the message.
     * @return $this
     */
    public function setDestinationNumber($destination_number)
    {
        if (strlen($destination_number) > 15) {
            throw new \InvalidArgumentException('invalid length for $destination_number when calling NewMessage., must be smaller than or equal to 15.');
        }
        if (strlen($destination_number) < 1) {
            throw new \InvalidArgumentException('invalid length for $destination_number when calling NewMessage., must be bigger than or equal to 1.');
        }
        $this->container['destination_number'] = $destination_number;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format Format of message.
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = array('SMS', 'VOICE');
        if (!in_array($format, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'format', must be one of 'SMS', 'VOICE'");
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets metadata
     * @return \MessageMedia\RESTAPI\Model\MessageMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \MessageMedia\RESTAPI\Model\MessageMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets message_expiry_timestamp
     * @return \DateTime
     */
    public function getMessageExpiryTimestamp()
    {
        return $this->container['message_expiry_timestamp'];
    }

    /**
     * Sets message_expiry_timestamp
     * @param \DateTime $message_expiry_timestamp Date time after which the message is considered expired in ISO8601 format.
     * @return $this
     */
    public function setMessageExpiryTimestamp($message_expiry_timestamp)
    {
        $this->container['message_expiry_timestamp'] = $message_expiry_timestamp;

        return $this;
    }

    /**
     * Gets scheduled
     * @return \DateTime
     */
    public function getScheduled()
    {
        return $this->container['scheduled'];
    }

    /**
     * Sets scheduled
     * @param \DateTime $scheduled Date time at which the message is scheduled for in ISO8601 format.
     * @return $this
     */
    public function setScheduled($scheduled)
    {
        $this->container['scheduled'] = $scheduled;

        return $this;
    }

    /**
     * Gets source_address
     * @return string
     */
    public function getSourceAddress()
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address
     * @param string $source_address
     * @return $this
     */
    public function setSourceAddress($source_address)
    {
        if (strlen($source_address) > 14) {
            throw new \InvalidArgumentException('invalid length for $source_address when calling NewMessage., must be smaller than or equal to 14.');
        }
        if (strlen($source_address) < 1) {
            throw new \InvalidArgumentException('invalid length for $source_address when calling NewMessage., must be bigger than or equal to 1.');
        }
        $this->container['source_address'] = $source_address;

        return $this;
    }

    /**
     * Gets source_address_type
     * @return string
     */
    public function getSourceAddressType()
    {
        return $this->container['source_address_type'];
    }

    /**
     * Sets source_address_type
     * @param string $source_address_type Type of source address specified.
     * @return $this
     */
    public function setSourceAddressType($source_address_type)
    {
        $allowed_values = array('INTERNATIONAL', 'ALPHANUMERIC', 'SHORTCODE');
        if (!in_array($source_address_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'source_address_type', must be one of 'INTERNATIONAL', 'ALPHANUMERIC', 'SHORTCODE'");
        }
        $this->container['source_address_type'] = $source_address_type;

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
            return json_encode(\MessageMedia\RESTAPI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MessageMedia\RESTAPI\ObjectSerializer::sanitizeForSerialization($this));
    }
}


