<?php
/**
 * GetConfigResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Chainpoint\Client
 * @author   Chainpoint Codegen team
 * @link     https://github.com/Chainpoint-api/Chainpoint-codegen
 */

/**
 * Chainpoint Node
 *
 * Documentation for the Chainpoint Node API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: team@chainpoint.org
 * Generated by: https://github.com/Chainpoint-api/Chainpoint-codegen.git
 * Chainpoint Codegen version: 1.0.14
 */

/**
 * NOTE: This class is auto generated by the Chainpoint code generator program.
 * https://github.com/Chainpoint-api/Chainpoint-codegen
 * Do not edit the class manually.
 */

namespace Chainpoint\Client\Model;

use \ArrayAccess;
use \Chainpoint\Client\ObjectSerializer;

/**
 * GetConfigResponse Class Doc Comment
 *
 * @category Class
 * @package     Chainpoint\Client
 * @author      Chainpoint Codegen team
 * @link        https://github.com/Chainpoint-api/Chainpoint-codegen
 */
class GetConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $ChainpointModelName = 'GetConfigResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $ChainpointTypes = [
        'version' => 'string',
        'proof_expire_minutes' => 'int',
        'get_proofs_max_rest' => 'int',
        'post_hashes_max' => 'int',
        'post_verify_proofs_max' => 'int',
        'time' => '\DateTime',
        'calendar' => '\Chainpoint\Client\Model\GetConfigResponseCalendar'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $ChainpointFormats = [
        'version' => null,
        'proof_expire_minutes' => null,
        'get_proofs_max_rest' => null,
        'post_hashes_max' => null,
        'post_verify_proofs_max' => null,
        'time' => 'date-time',
        'calendar' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function ChainpointTypes()
    {
        return self::$ChainpointTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function ChainpointFormats()
    {
        return self::$ChainpointFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'version' => 'version',
        'proof_expire_minutes' => 'proof_expire_minutes',
        'get_proofs_max_rest' => 'get_proofs_max_rest',
        'post_hashes_max' => 'post_hashes_max',
        'post_verify_proofs_max' => 'post_verify_proofs_max',
        'time' => 'time',
        'calendar' => 'calendar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'proof_expire_minutes' => 'setProofExpireMinutes',
        'get_proofs_max_rest' => 'setGetProofsMaxRest',
        'post_hashes_max' => 'setPostHashesMax',
        'post_verify_proofs_max' => 'setPostVerifyProofsMax',
        'time' => 'setTime',
        'calendar' => 'setCalendar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'proof_expire_minutes' => 'getProofExpireMinutes',
        'get_proofs_max_rest' => 'getGetProofsMaxRest',
        'post_hashes_max' => 'getPostHashesMax',
        'post_verify_proofs_max' => 'getPostVerifyProofsMax',
        'time' => 'getTime',
        'calendar' => 'getCalendar'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$ChainpointModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['proof_expire_minutes'] = isset($data['proof_expire_minutes']) ? $data['proof_expire_minutes'] : null;
        $this->container['get_proofs_max_rest'] = isset($data['get_proofs_max_rest']) ? $data['get_proofs_max_rest'] : null;
        $this->container['post_hashes_max'] = isset($data['post_hashes_max']) ? $data['post_hashes_max'] : null;
        $this->container['post_verify_proofs_max'] = isset($data['post_verify_proofs_max']) ? $data['post_verify_proofs_max'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['calendar'] = isset($data['calendar']) ? $data['calendar'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets proof_expire_minutes
     *
     * @return int
     */
    public function getProofExpireMinutes()
    {
        return $this->container['proof_expire_minutes'];
    }

    /**
     * Sets proof_expire_minutes
     *
     * @param int $proof_expire_minutes proof_expire_minutes
     *
     * @return $this
     */
    public function setProofExpireMinutes($proof_expire_minutes)
    {
        $this->container['proof_expire_minutes'] = $proof_expire_minutes;

        return $this;
    }

    /**
     * Gets get_proofs_max_rest
     *
     * @return int
     */
    public function getGetProofsMaxRest()
    {
        return $this->container['get_proofs_max_rest'];
    }

    /**
     * Sets get_proofs_max_rest
     *
     * @param int $get_proofs_max_rest get_proofs_max_rest
     *
     * @return $this
     */
    public function setGetProofsMaxRest($get_proofs_max_rest)
    {
        $this->container['get_proofs_max_rest'] = $get_proofs_max_rest;

        return $this;
    }

    /**
     * Gets post_hashes_max
     *
     * @return int
     */
    public function getPostHashesMax()
    {
        return $this->container['post_hashes_max'];
    }

    /**
     * Sets post_hashes_max
     *
     * @param int $post_hashes_max post_hashes_max
     *
     * @return $this
     */
    public function setPostHashesMax($post_hashes_max)
    {
        $this->container['post_hashes_max'] = $post_hashes_max;

        return $this;
    }

    /**
     * Gets post_verify_proofs_max
     *
     * @return int
     */
    public function getPostVerifyProofsMax()
    {
        return $this->container['post_verify_proofs_max'];
    }

    /**
     * Sets post_verify_proofs_max
     *
     * @param int $post_verify_proofs_max post_verify_proofs_max
     *
     * @return $this
     */
    public function setPostVerifyProofsMax($post_verify_proofs_max)
    {
        $this->container['post_verify_proofs_max'] = $post_verify_proofs_max;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets calendar
     *
     * @return \Chainpoint\Client\Model\GetConfigResponseCalendar
     */
    public function getCalendar()
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     *
     * @param \Chainpoint\Client\Model\GetConfigResponseCalendar $calendar calendar
     *
     * @return $this
     */
    public function setCalendar($calendar)
    {
        $this->container['calendar'] = $calendar;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
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
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
