<?php
/**
 * ListConfirmedTokensTransfersByAddressRI
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
 * ListConfirmedTokensTransfersByAddressRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListConfirmedTokensTransfersByAddressRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListConfirmedTokensTransfersByAddressRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract_address' => 'string',
        'mined_in_block_height' => 'int',
        'recipient_address' => 'string',
        'sender_address' => 'string',
        'token_decimals' => 'int',
        'token_id' => 'string',
        'token_name' => 'string',
        'token_symbol' => 'string',
        'token_type' => 'string',
        'tokens_amount' => 'string',
        'transaction_hash' => 'string',
        'transaction_timestamp' => 'int',
        'transaction_fee' => '\CryptoAPIs\Model\ListTokensTransfersByTransactionHashRITransactionFee'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contract_address' => null,
        'mined_in_block_height' => null,
        'recipient_address' => null,
        'sender_address' => null,
        'token_decimals' => null,
        'token_id' => null,
        'token_name' => null,
        'token_symbol' => null,
        'token_type' => null,
        'tokens_amount' => null,
        'transaction_hash' => null,
        'transaction_timestamp' => null,
        'transaction_fee' => null
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
        'contract_address' => 'contractAddress',
        'mined_in_block_height' => 'minedInBlockHeight',
        'recipient_address' => 'recipientAddress',
        'sender_address' => 'senderAddress',
        'token_decimals' => 'tokenDecimals',
        'token_id' => 'tokenId',
        'token_name' => 'tokenName',
        'token_symbol' => 'tokenSymbol',
        'token_type' => 'tokenType',
        'tokens_amount' => 'tokensAmount',
        'transaction_hash' => 'transactionHash',
        'transaction_timestamp' => 'transactionTimestamp',
        'transaction_fee' => 'transactionFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_address' => 'setContractAddress',
        'mined_in_block_height' => 'setMinedInBlockHeight',
        'recipient_address' => 'setRecipientAddress',
        'sender_address' => 'setSenderAddress',
        'token_decimals' => 'setTokenDecimals',
        'token_id' => 'setTokenId',
        'token_name' => 'setTokenName',
        'token_symbol' => 'setTokenSymbol',
        'token_type' => 'setTokenType',
        'tokens_amount' => 'setTokensAmount',
        'transaction_hash' => 'setTransactionHash',
        'transaction_timestamp' => 'setTransactionTimestamp',
        'transaction_fee' => 'setTransactionFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_address' => 'getContractAddress',
        'mined_in_block_height' => 'getMinedInBlockHeight',
        'recipient_address' => 'getRecipientAddress',
        'sender_address' => 'getSenderAddress',
        'token_decimals' => 'getTokenDecimals',
        'token_id' => 'getTokenId',
        'token_name' => 'getTokenName',
        'token_symbol' => 'getTokenSymbol',
        'token_type' => 'getTokenType',
        'tokens_amount' => 'getTokensAmount',
        'transaction_hash' => 'getTransactionHash',
        'transaction_timestamp' => 'getTransactionTimestamp',
        'transaction_fee' => 'getTransactionFee'
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
        $this->container['contract_address'] = $data['contract_address'] ?? null;
        $this->container['mined_in_block_height'] = $data['mined_in_block_height'] ?? null;
        $this->container['recipient_address'] = $data['recipient_address'] ?? null;
        $this->container['sender_address'] = $data['sender_address'] ?? null;
        $this->container['token_decimals'] = $data['token_decimals'] ?? null;
        $this->container['token_id'] = $data['token_id'] ?? null;
        $this->container['token_name'] = $data['token_name'] ?? null;
        $this->container['token_symbol'] = $data['token_symbol'] ?? null;
        $this->container['token_type'] = $data['token_type'] ?? null;
        $this->container['tokens_amount'] = $data['tokens_amount'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['transaction_timestamp'] = $data['transaction_timestamp'] ?? null;
        $this->container['transaction_fee'] = $data['transaction_fee'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contract_address'] === null) {
            $invalidProperties[] = "'contract_address' can't be null";
        }
        if ($this->container['mined_in_block_height'] === null) {
            $invalidProperties[] = "'mined_in_block_height' can't be null";
        }
        if ($this->container['recipient_address'] === null) {
            $invalidProperties[] = "'recipient_address' can't be null";
        }
        if ($this->container['sender_address'] === null) {
            $invalidProperties[] = "'sender_address' can't be null";
        }
        if ($this->container['token_decimals'] === null) {
            $invalidProperties[] = "'token_decimals' can't be null";
        }
        if ($this->container['token_name'] === null) {
            $invalidProperties[] = "'token_name' can't be null";
        }
        if ($this->container['token_symbol'] === null) {
            $invalidProperties[] = "'token_symbol' can't be null";
        }
        if ($this->container['token_type'] === null) {
            $invalidProperties[] = "'token_type' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['transaction_timestamp'] === null) {
            $invalidProperties[] = "'transaction_timestamp' can't be null";
        }
        if ($this->container['transaction_fee'] === null) {
            $invalidProperties[] = "'transaction_fee' can't be null";
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
     * Gets contract_address
     *
     * @return string
     */
    public function getContractAddress()
    {
        return $this->container['contract_address'];
    }

    /**
     * Sets contract_address
     *
     * @param string $contract_address Represents the contract address of the token, which controls its logic. It is not the address that holds the tokens.
     *
     * @return self
     */
    public function setContractAddress($contract_address)
    {
        $this->container['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Gets mined_in_block_height
     *
     * @return int
     */
    public function getMinedInBlockHeight()
    {
        return $this->container['mined_in_block_height'];
    }

    /**
     * Sets mined_in_block_height
     *
     * @param int $mined_in_block_height Defines the block height in which this transaction was confirmed/mined.
     *
     * @return self
     */
    public function setMinedInBlockHeight($mined_in_block_height)
    {
        $this->container['mined_in_block_height'] = $mined_in_block_height;

        return $this;
    }

    /**
     * Gets recipient_address
     *
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->container['recipient_address'];
    }

    /**
     * Sets recipient_address
     *
     * @param string $recipient_address Defines the address to which the recipient receives the transferred tokens.
     *
     * @return self
     */
    public function setRecipientAddress($recipient_address)
    {
        $this->container['recipient_address'] = $recipient_address;

        return $this;
    }

    /**
     * Gets sender_address
     *
     * @return string
     */
    public function getSenderAddress()
    {
        return $this->container['sender_address'];
    }

    /**
     * Sets sender_address
     *
     * @param string $sender_address Defines the address from which the sender transfers tokens.
     *
     * @return self
     */
    public function setSenderAddress($sender_address)
    {
        $this->container['sender_address'] = $sender_address;

        return $this;
    }

    /**
     * Gets token_decimals
     *
     * @return int
     */
    public function getTokenDecimals()
    {
        return $this->container['token_decimals'];
    }

    /**
     * Sets token_decimals
     *
     * @param int $token_decimals Defines the decimals of the token, i.e. the number of digits that come after the decimal coma of the token.
     *
     * @return self
     */
    public function setTokenDecimals($token_decimals)
    {
        $this->container['token_decimals'] = $token_decimals;

        return $this;
    }

    /**
     * Gets token_id
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string|null $token_id Represents the unique token identifier.
     *
     * @return self
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets token_name
     *
     * @return string
     */
    public function getTokenName()
    {
        return $this->container['token_name'];
    }

    /**
     * Sets token_name
     *
     * @param string $token_name Defines the token's name as a string.
     *
     * @return self
     */
    public function setTokenName($token_name)
    {
        $this->container['token_name'] = $token_name;

        return $this;
    }

    /**
     * Gets token_symbol
     *
     * @return string
     */
    public function getTokenSymbol()
    {
        return $this->container['token_symbol'];
    }

    /**
     * Sets token_symbol
     *
     * @param string $token_symbol Defines the token symbol by which the token contract is known. It is usually 3-4 characters in length.
     *
     * @return self
     */
    public function setTokenSymbol($token_symbol)
    {
        $this->container['token_symbol'] = $token_symbol;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type Defines the specific token type.
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets tokens_amount
     *
     * @return string|null
     */
    public function getTokensAmount()
    {
        return $this->container['tokens_amount'];
    }

    /**
     * Sets tokens_amount
     *
     * @param string|null $tokens_amount Defines the token amount of the transfer.
     *
     * @return self
     */
    public function setTokensAmount($tokens_amount)
    {
        $this->container['tokens_amount'] = $tokens_amount;

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
     * @param string $transaction_hash Represents the hash of the transaction, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets transaction_timestamp
     *
     * @return int
     */
    public function getTransactionTimestamp()
    {
        return $this->container['transaction_timestamp'];
    }

    /**
     * Sets transaction_timestamp
     *
     * @param int $transaction_timestamp Defines the specific time/date when the transaction was created in Unix Timestamp.
     *
     * @return self
     */
    public function setTransactionTimestamp($transaction_timestamp)
    {
        $this->container['transaction_timestamp'] = $transaction_timestamp;

        return $this;
    }

    /**
     * Gets transaction_fee
     *
     * @return \CryptoAPIs\Model\ListTokensTransfersByTransactionHashRITransactionFee
     */
    public function getTransactionFee()
    {
        return $this->container['transaction_fee'];
    }

    /**
     * Sets transaction_fee
     *
     * @param \CryptoAPIs\Model\ListTokensTransfersByTransactionHashRITransactionFee $transaction_fee transaction_fee
     *
     * @return self
     */
    public function setTransactionFee($transaction_fee)
    {
        $this->container['transaction_fee'] = $transaction_fee;

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


