<?php
/**
 * DeliveryReport
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
 * DeliveryReport Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MessageMedia\RESTAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeliveryReport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'delay' => 'int',
        'delivery_report_id' => 'string',
        'date_received' => '\DateTime',
        'message_id' => 'string',
        'source_number' => 'string',
        'status' => 'string',
        'username' => 'string'
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
        'delay' => 'delay',
        'delivery_report_id' => 'delivery_report_id',
        'date_received' => 'date_received',
        'message_id' => 'message_id',
        'source_number' => 'source_number',
        'status' => 'status',
        'username' => 'username'
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
        'delay' => 'setDelay',
        'delivery_report_id' => 'setDeliveryReportId',
        'date_received' => 'setDateReceived',
        'message_id' => 'setMessageId',
        'source_number' => 'setSourceNumber',
        'status' => 'setStatus',
        'username' => 'setUsername'
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
        'delay' => 'getDelay',
        'delivery_report_id' => 'getDeliveryReportId',
        'date_received' => 'getDateReceived',
        'message_id' => 'getMessageId',
        'source_number' => 'getSourceNumber',
        'status' => 'getStatus',
        'username' => 'getUsername'
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
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['delivery_report_id'] = isset($data['delivery_report_id']) ? $data['delivery_report_id'] : null;
        $this->container['date_received'] = isset($data['date_received']) ? $data['date_received'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['source_number'] = isset($data['source_number']) ? $data['source_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['delay'] === null) {
            $invalid_properties[] = "'delay' can't be null";
        }
        if ($this->container['delivery_report_id'] === null) {
            $invalid_properties[] = "'delivery_report_id' can't be null";
        }
        if ($this->container['date_received'] === null) {
            $invalid_properties[] = "'date_received' can't be null";
        }
        if ($this->container['message_id'] === null) {
            $invalid_properties[] = "'message_id' can't be null";
        }
        if ($this->container['source_number'] === null) {
            $invalid_properties[] = "'source_number' can't be null";
        }
        if ((strlen($this->container['source_number']) > 15)) {
            $invalid_properties[] = "invalid value for 'source_number', the character length must be smaller than or equal to 15.";
        }
        if ((strlen($this->container['source_number']) < 1)) {
            $invalid_properties[] = "invalid value for 'source_number', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
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
        if ($this->container['delay'] === null) {
            return false;
        }
        if ($this->container['delivery_report_id'] === null) {
            return false;
        }
        if ($this->container['date_received'] === null) {
            return false;
        }
        if ($this->container['message_id'] === null) {
            return false;
        }
        if ($this->container['source_number'] === null) {
            return false;
        }
        if (strlen($this->container['source_number']) > 15) {
            return false;
        }
        if (strlen($this->container['source_number']) < 1) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets delay
     * @return int
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     * @param int $delay Not used
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets delivery_report_id
     * @return string
     */
    public function getDeliveryReportId()
    {
        return $this->container['delivery_report_id'];
    }

    /**
     * Sets delivery_report_id
     * @param string $delivery_report_id Unique identifier of this delivery report.
     * @return $this
     */
    public function setDeliveryReportId($delivery_report_id)
    {
        $this->container['delivery_report_id'] = $delivery_report_id;

        return $this;
    }

    /**
     * Gets date_received
     * @return \DateTime
     */
    public function getDateReceived()
    {
        return $this->container['date_received'];
    }

    /**
     * Sets date_received
     * @param \DateTime $date_received Date time when the delivery report was received in ISO8601 format.
     * @return $this
     */
    public function setDateReceived($date_received)
    {
        $this->container['date_received'] = $date_received;

        return $this;
    }

    /**
     * Gets message_id
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     * @param string $message_id Unique identifier of the message that this delivery report was matched to.
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets source_number
     * @return string
     */
    public function getSourceNumber()
    {
        return $this->container['source_number'];
    }

    /**
     * Sets source_number
     * @param string $source_number Address from which this delivery report was received.
     * @return $this
     */
    public function setSourceNumber($source_number)
    {
        if (strlen($source_number) > 15) {
            throw new \InvalidArgumentException('invalid length for $source_number when calling DeliveryReport., must be smaller than or equal to 15.');
        }
        if (strlen($source_number) < 1) {
            throw new \InvalidArgumentException('invalid length for $source_number when calling DeliveryReport., must be bigger than or equal to 1.');
        }
        $this->container['source_number'] = $source_number;

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
     * @param string $status The status of the message as per the delivery report.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Username that received this reply.
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


