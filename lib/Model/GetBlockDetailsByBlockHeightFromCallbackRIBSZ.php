<?php
/**
 * GetBlockDetailsByBlockHeightFromCallbackRIBSZ
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetBlockDetailsByBlockHeightFromCallbackRIBSZ Class Doc Comment
 *
 * @category Class
 * @description Zilliqa
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetBlockDetailsByBlockHeightFromCallbackRIBSZ implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBlockDetailsByBlockHeightFromCallbackRIBSZ';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'difficulty' => 'string',
        'ds_block' => 'int',
        'ds_difficulty' => 'string',
        'ds_leader' => 'string',
        'gas_limit' => 'int',
        'gas_used' => 'int',
        'micro_blocks' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'difficulty' => null,
        'ds_block' => null,
        'ds_difficulty' => null,
        'ds_leader' => null,
        'gas_limit' => null,
        'gas_used' => null,
        'micro_blocks' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'difficulty' => 'difficulty',
        'ds_block' => 'dsBlock',
        'ds_difficulty' => 'dsDifficulty',
        'ds_leader' => 'dsLeader',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'micro_blocks' => 'microBlocks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'difficulty' => 'setDifficulty',
        'ds_block' => 'setDsBlock',
        'ds_difficulty' => 'setDsDifficulty',
        'ds_leader' => 'setDsLeader',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'micro_blocks' => 'setMicroBlocks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'difficulty' => 'getDifficulty',
        'ds_block' => 'getDsBlock',
        'ds_difficulty' => 'getDsDifficulty',
        'ds_leader' => 'getDsLeader',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'micro_blocks' => 'getMicroBlocks'
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
        return self::$openAPIModelName;
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
        $this->container['difficulty'] = $data['difficulty'] ?? null;
        $this->container['ds_block'] = $data['ds_block'] ?? null;
        $this->container['ds_difficulty'] = $data['ds_difficulty'] ?? null;
        $this->container['ds_leader'] = $data['ds_leader'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['micro_blocks'] = $data['micro_blocks'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['difficulty'] === null) {
            $invalidProperties[] = "'difficulty' can't be null";
        }
        if ($this->container['ds_block'] === null) {
            $invalidProperties[] = "'ds_block' can't be null";
        }
        if ($this->container['ds_difficulty'] === null) {
            $invalidProperties[] = "'ds_difficulty' can't be null";
        }
        if ($this->container['ds_leader'] === null) {
            $invalidProperties[] = "'ds_leader' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['micro_blocks'] === null) {
            $invalidProperties[] = "'micro_blocks' can't be null";
        }
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param string $difficulty Defines how difficult it is for a specific miner to mine the block.
     *
     * @return self
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets ds_block
     *
     * @return int
     */
    public function getDsBlock()
    {
        return $this->container['ds_block'];
    }

    /**
     * Sets ds_block
     *
     * @param int $ds_block Represents the Directory Service block which contains metadata about the miners who participate in the consensus protocol.
     *
     * @return self
     */
    public function setDsBlock($ds_block)
    {
        $this->container['ds_block'] = $ds_block;

        return $this;
    }

    /**
     * Gets ds_difficulty
     *
     * @return string
     */
    public function getDsDifficulty()
    {
        return $this->container['ds_difficulty'];
    }

    /**
     * Sets ds_difficulty
     *
     * @param string $ds_difficulty Defines how difficult it is to mine the dsBlocks.
     *
     * @return self
     */
    public function setDsDifficulty($ds_difficulty)
    {
        $this->container['ds_difficulty'] = $ds_difficulty;

        return $this;
    }

    /**
     * Gets ds_leader
     *
     * @return string
     */
    public function getDsLeader()
    {
        return $this->container['ds_leader'];
    }

    /**
     * Sets ds_leader
     *
     * @param string $ds_leader Represents a part of the DS Committee which leads the consensus protocol for the epoch.
     *
     * @return self
     */
    public function setDsLeader($ds_leader)
    {
        $this->container['ds_leader'] = $ds_leader;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return int
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param int $gas_limit Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return int
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param int $gas_used Defines how much of the gas for the block has been used.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets micro_blocks
     *
     * @return string[]
     */
    public function getMicroBlocks()
    {
        return $this->container['micro_blocks'];
    }

    /**
     * Sets micro_blocks
     *
     * @param string[] $micro_blocks micro_blocks
     *
     * @return self
     */
    public function setMicroBlocks($micro_blocks)
    {
        $this->container['micro_blocks'] = $micro_blocks;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


