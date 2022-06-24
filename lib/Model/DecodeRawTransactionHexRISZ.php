<?php
/**
 * DecodeRawTransactionHexRISZ
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
 * DecodeRawTransactionHexRISZ Class Doc Comment
 *
 * @category Class
 * @description Zcash
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DecodeRawTransactionHexRISZ implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DecodeRawTransactionHexRISZ';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expiry_height' => 'int',
        'locktime' => 'int',
        'overwintered' => 'bool',
        'saplinged' => 'bool',
        'transaction_hash' => 'string',
        'value_balance' => 'string',
        'version' => 'int',
        'version_group_id' => 'string',
        'vin' => '\CryptoAPIs\Model\DecodeRawTransactionHexRISZVinInner[]',
        'vout' => '\CryptoAPIs\Model\DecodeRawTransactionHexRISZVoutInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expiry_height' => null,
        'locktime' => null,
        'overwintered' => null,
        'saplinged' => null,
        'transaction_hash' => null,
        'value_balance' => null,
        'version' => null,
        'version_group_id' => null,
        'vin' => null,
        'vout' => null
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
        'expiry_height' => 'expiryHeight',
        'locktime' => 'locktime',
        'overwintered' => 'overwintered',
        'saplinged' => 'saplinged',
        'transaction_hash' => 'transactionHash',
        'value_balance' => 'valueBalance',
        'version' => 'version',
        'version_group_id' => 'versionGroupId',
        'vin' => 'vin',
        'vout' => 'vout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiry_height' => 'setExpiryHeight',
        'locktime' => 'setLocktime',
        'overwintered' => 'setOverwintered',
        'saplinged' => 'setSaplinged',
        'transaction_hash' => 'setTransactionHash',
        'value_balance' => 'setValueBalance',
        'version' => 'setVersion',
        'version_group_id' => 'setVersionGroupId',
        'vin' => 'setVin',
        'vout' => 'setVout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiry_height' => 'getExpiryHeight',
        'locktime' => 'getLocktime',
        'overwintered' => 'getOverwintered',
        'saplinged' => 'getSaplinged',
        'transaction_hash' => 'getTransactionHash',
        'value_balance' => 'getValueBalance',
        'version' => 'getVersion',
        'version_group_id' => 'getVersionGroupId',
        'vin' => 'getVin',
        'vout' => 'getVout'
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
        $this->container['expiry_height'] = $data['expiry_height'] ?? null;
        $this->container['locktime'] = $data['locktime'] ?? null;
        $this->container['overwintered'] = $data['overwintered'] ?? null;
        $this->container['saplinged'] = $data['saplinged'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['value_balance'] = $data['value_balance'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['version_group_id'] = $data['version_group_id'] ?? null;
        $this->container['vin'] = $data['vin'] ?? null;
        $this->container['vout'] = $data['vout'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['expiry_height'] === null) {
            $invalidProperties[] = "'expiry_height' can't be null";
        }
        if ($this->container['locktime'] === null) {
            $invalidProperties[] = "'locktime' can't be null";
        }
        if ($this->container['overwintered'] === null) {
            $invalidProperties[] = "'overwintered' can't be null";
        }
        if ($this->container['saplinged'] === null) {
            $invalidProperties[] = "'saplinged' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['value_balance'] === null) {
            $invalidProperties[] = "'value_balance' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['version_group_id'] === null) {
            $invalidProperties[] = "'version_group_id' can't be null";
        }
        if ($this->container['vin'] === null) {
            $invalidProperties[] = "'vin' can't be null";
        }
        if ($this->container['vout'] === null) {
            $invalidProperties[] = "'vout' can't be null";
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
     * Gets expiry_height
     *
     * @return int
     */
    public function getExpiryHeight()
    {
        return $this->container['expiry_height'];
    }

    /**
     * Sets expiry_height
     *
     * @param int $expiry_height Represents a block height after which the transaction will expire.
     *
     * @return self
     */
    public function setExpiryHeight($expiry_height)
    {
        $this->container['expiry_height'] = $expiry_height;

        return $this;
    }

    /**
     * Gets locktime
     *
     * @return int
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param int $locktime Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid.
     *
     * @return self
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

        return $this;
    }

    /**
     * Gets overwintered
     *
     * @return bool
     */
    public function getOverwintered()
    {
        return $this->container['overwintered'];
    }

    /**
     * Sets overwintered
     *
     * @param bool $overwintered \"Overwinter\" is the network upgrade for the Zcash blockchain.
     *
     * @return self
     */
    public function setOverwintered($overwintered)
    {
        $this->container['overwintered'] = $overwintered;

        return $this;
    }

    /**
     * Gets saplinged
     *
     * @return bool
     */
    public function getSaplinged()
    {
        return $this->container['saplinged'];
    }

    /**
     * Sets saplinged
     *
     * @param bool $saplinged Defines if the transaction includes sapling or not.
     *
     * @return self
     */
    public function setSaplinged($saplinged)
    {
        $this->container['saplinged'] = $saplinged;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string $transaction_hash Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets value_balance
     *
     * @return string
     */
    public function getValueBalance()
    {
        return $this->container['value_balance'];
    }

    /**
     * Sets value_balance
     *
     * @param string $value_balance Defines the transaction value balance.
     *
     * @return self
     */
    public function setValueBalance($value_balance)
    {
        $this->container['value_balance'] = $value_balance;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Represents the transaction version number.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets version_group_id
     *
     * @return string
     */
    public function getVersionGroupId()
    {
        return $this->container['version_group_id'];
    }

    /**
     * Sets version_group_id
     *
     * @param string $version_group_id Represents the transaction version group ID
     *
     * @return self
     */
    public function setVersionGroupId($version_group_id)
    {
        $this->container['version_group_id'] = $version_group_id;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return \CryptoAPIs\Model\DecodeRawTransactionHexRISZVinInner[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \CryptoAPIs\Model\DecodeRawTransactionHexRISZVinInner[] $vin Represents the Inputs of the transaction
     *
     * @return self
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \CryptoAPIs\Model\DecodeRawTransactionHexRISZVoutInner[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \CryptoAPIs\Model\DecodeRawTransactionHexRISZVoutInner[] $vout Represents the Inputs of the transaction
     *
     * @return self
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

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


