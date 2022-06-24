<?php
/**
 * ListWalletTransactionsRI
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
 * ListWalletTransactionsRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListWalletTransactionsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListWalletTransactionsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'direction' => 'string',
        'fee' => '\CryptoAPIs\Model\ListWalletTransactionsRIFee',
        'fungible_tokens' => '\CryptoAPIs\Model\ListWalletTransactionsRIFungibleTokensInner[]',
        'internal_transactions' => '\CryptoAPIs\Model\ListWalletTransactionsRIInternalTransactionsInner[]',
        'non_fungible_tokens' => '\CryptoAPIs\Model\ListWalletTransactionsRINonFungibleTokensInner[]',
        'recipients' => '\CryptoAPIs\Model\ListWalletTransactionsRIRecipientsInner[]',
        'senders' => '\CryptoAPIs\Model\ListWalletTransactionsRISendersInner[]',
        'status' => 'string',
        'timestamp' => 'int',
        'transaction_id' => 'string',
        'value' => '\CryptoAPIs\Model\ListWalletTransactionsRIValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'direction' => null,
        'fee' => null,
        'fungible_tokens' => null,
        'internal_transactions' => null,
        'non_fungible_tokens' => null,
        'recipients' => null,
        'senders' => null,
        'status' => null,
        'timestamp' => null,
        'transaction_id' => null,
        'value' => null
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
        'direction' => 'direction',
        'fee' => 'fee',
        'fungible_tokens' => 'fungibleTokens',
        'internal_transactions' => 'internalTransactions',
        'non_fungible_tokens' => 'nonFungibleTokens',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'status' => 'status',
        'timestamp' => 'timestamp',
        'transaction_id' => 'transactionId',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'fee' => 'setFee',
        'fungible_tokens' => 'setFungibleTokens',
        'internal_transactions' => 'setInternalTransactions',
        'non_fungible_tokens' => 'setNonFungibleTokens',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'status' => 'setStatus',
        'timestamp' => 'setTimestamp',
        'transaction_id' => 'setTransactionId',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'fee' => 'getFee',
        'fungible_tokens' => 'getFungibleTokens',
        'internal_transactions' => 'getInternalTransactions',
        'non_fungible_tokens' => 'getNonFungibleTokens',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'status' => 'getStatus',
        'timestamp' => 'getTimestamp',
        'transaction_id' => 'getTransactionId',
        'value' => 'getValue'
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
        $this->container['direction'] = $data['direction'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['fungible_tokens'] = $data['fungible_tokens'] ?? null;
        $this->container['internal_transactions'] = $data['internal_transactions'] ?? null;
        $this->container['non_fungible_tokens'] = $data['non_fungible_tokens'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['senders'] = $data['senders'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['senders'] === null) {
            $invalidProperties[] = "'senders' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Defines the direction of the transaction, e.g. incoming.
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fungible_tokens
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRIFungibleTokensInner[]|null
     */
    public function getFungibleTokens()
    {
        return $this->container['fungible_tokens'];
    }

    /**
     * Sets fungible_tokens
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRIFungibleTokensInner[]|null $fungible_tokens Represents fungible tokens'es detailed information
     *
     * @return self
     */
    public function setFungibleTokens($fungible_tokens)
    {
        $this->container['fungible_tokens'] = $fungible_tokens;

        return $this;
    }

    /**
     * Gets internal_transactions
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRIInternalTransactionsInner[]|null
     */
    public function getInternalTransactions()
    {
        return $this->container['internal_transactions'];
    }

    /**
     * Sets internal_transactions
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRIInternalTransactionsInner[]|null $internal_transactions internal_transactions
     *
     * @return self
     */
    public function setInternalTransactions($internal_transactions)
    {
        $this->container['internal_transactions'] = $internal_transactions;

        return $this;
    }

    /**
     * Gets non_fungible_tokens
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRINonFungibleTokensInner[]|null
     */
    public function getNonFungibleTokens()
    {
        return $this->container['non_fungible_tokens'];
    }

    /**
     * Sets non_fungible_tokens
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRINonFungibleTokensInner[]|null $non_fungible_tokens Represents non-fungible tokens'es detailed information.
     *
     * @return self
     */
    public function setNonFungibleTokens($non_fungible_tokens)
    {
        $this->container['non_fungible_tokens'] = $non_fungible_tokens;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRIRecipientsInner[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRIRecipientsInner[] $recipients Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets senders
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRISendersInner[]
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRISendersInner[] $senders Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setSenders($senders)
    {
        $this->container['senders'] = $senders;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Defines the status of the transaction, if it is confirmed or unconfirmed.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Represents the unique TD of the transaction.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \CryptoAPIs\Model\ListWalletTransactionsRIValue
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \CryptoAPIs\Model\ListWalletTransactionsRIValue $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


