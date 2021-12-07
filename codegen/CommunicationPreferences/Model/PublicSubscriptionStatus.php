<?php
/**
 * PublicSubscriptionStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\CommunicationPreferences
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Subscriptions
 *
 * Subscriptions allow contacts to control what forms of communications they receive. Contacts can decide whether they want to receive communication pertaining to a specific topic, brand, or an entire HubSpot account.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\CommunicationPreferences\Model;

use \ArrayAccess;
use \HubSpot\Client\CommunicationPreferences\ObjectSerializer;

/**
 * PublicSubscriptionStatus Class Doc Comment
 *
 * @category Class
 * @description The status of a subscription for a contact.
 * @package  HubSpot\Client\CommunicationPreferences
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PublicSubscriptionStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicSubscriptionStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'status' => 'string',
        'source_of_status' => 'string',
        'brand_id' => 'int',
        'preference_group_name' => 'string',
        'legal_basis' => 'string',
        'legal_basis_explanation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'source_of_status' => null,
        'brand_id' => 'int64',
        'preference_group_name' => null,
        'legal_basis' => null,
        'legal_basis_explanation' => null
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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'status' => 'status',
        'source_of_status' => 'sourceOfStatus',
        'brand_id' => 'brandId',
        'preference_group_name' => 'preferenceGroupName',
        'legal_basis' => 'legalBasis',
        'legal_basis_explanation' => 'legalBasisExplanation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'source_of_status' => 'setSourceOfStatus',
        'brand_id' => 'setBrandId',
        'preference_group_name' => 'setPreferenceGroupName',
        'legal_basis' => 'setLegalBasis',
        'legal_basis_explanation' => 'setLegalBasisExplanation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'source_of_status' => 'getSourceOfStatus',
        'brand_id' => 'getBrandId',
        'preference_group_name' => 'getPreferenceGroupName',
        'legal_basis' => 'getLegalBasis',
        'legal_basis_explanation' => 'getLegalBasisExplanation'
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

    const STATUS_SUBSCRIBED = 'SUBSCRIBED';
    const STATUS_NOT_SUBSCRIBED = 'NOT_SUBSCRIBED';
    const SOURCE_OF_STATUS_PORTAL_WIDE_STATUS = 'PORTAL_WIDE_STATUS';
    const SOURCE_OF_STATUS_BRAND_WIDE_STATUS = 'BRAND_WIDE_STATUS';
    const SOURCE_OF_STATUS_SUBSCRIPTION_STATUS = 'SUBSCRIPTION_STATUS';
    const LEGAL_BASIS_LEGITIMATE_INTEREST_PQL = 'LEGITIMATE_INTEREST_PQL';
    const LEGAL_BASIS_LEGITIMATE_INTEREST_CLIENT = 'LEGITIMATE_INTEREST_CLIENT';
    const LEGAL_BASIS_PERFORMANCE_OF_CONTRACT = 'PERFORMANCE_OF_CONTRACT';
    const LEGAL_BASIS_CONSENT_WITH_NOTICE = 'CONSENT_WITH_NOTICE';
    const LEGAL_BASIS_NON_GDPR = 'NON_GDPR';
    const LEGAL_BASIS_PROCESS_AND_STORE = 'PROCESS_AND_STORE';
    const LEGAL_BASIS_LEGITIMATE_INTEREST_OTHER = 'LEGITIMATE_INTEREST_OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBSCRIBED,
            self::STATUS_NOT_SUBSCRIBED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceOfStatusAllowableValues()
    {
        return [
            self::SOURCE_OF_STATUS_PORTAL_WIDE_STATUS,
            self::SOURCE_OF_STATUS_BRAND_WIDE_STATUS,
            self::SOURCE_OF_STATUS_SUBSCRIPTION_STATUS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLegalBasisAllowableValues()
    {
        return [
            self::LEGAL_BASIS_LEGITIMATE_INTEREST_PQL,
            self::LEGAL_BASIS_LEGITIMATE_INTEREST_CLIENT,
            self::LEGAL_BASIS_PERFORMANCE_OF_CONTRACT,
            self::LEGAL_BASIS_CONSENT_WITH_NOTICE,
            self::LEGAL_BASIS_NON_GDPR,
            self::LEGAL_BASIS_PROCESS_AND_STORE,
            self::LEGAL_BASIS_LEGITIMATE_INTEREST_OTHER,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['source_of_status'] = $data['source_of_status'] ?? null;
        $this->container['brand_id'] = $data['brand_id'] ?? null;
        $this->container['preference_group_name'] = $data['preference_group_name'] ?? null;
        $this->container['legal_basis'] = $data['legal_basis'] ?? null;
        $this->container['legal_basis_explanation'] = $data['legal_basis_explanation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['source_of_status'] === null) {
            $invalidProperties[] = "'source_of_status' can't be null";
        }
        $allowedValues = $this->getSourceOfStatusAllowableValues();
        if (!is_null($this->container['source_of_status']) && !in_array($this->container['source_of_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source_of_status', must be one of '%s'",
                $this->container['source_of_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLegalBasisAllowableValues();
        if (!is_null($this->container['legal_basis']) && !in_array($this->container['legal_basis'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'legal_basis', must be one of '%s'",
                $this->container['legal_basis'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID for the subscription.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the subscription.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of the subscription.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $status Whether the contact is subscribed.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets source_of_status
     *
     * @return string
     */
    public function getSourceOfStatus()
    {
        return $this->container['source_of_status'];
    }

    /**
     * Sets source_of_status
     *
     * @param string $source_of_status Where the status is determined from e.g. PORTAL_WIDE_STATUS if the contact opted out from the portal.
     *
     * @return self
     */
    public function setSourceOfStatus($source_of_status)
    {
        $allowedValues = $this->getSourceOfStatusAllowableValues();
        if (!in_array($source_of_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source_of_status', must be one of '%s'",
                    $source_of_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source_of_status'] = $source_of_status;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param int|null $brand_id The ID of the brand that the subscription is associated with, if there is one.
     *
     * @return self
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
    }

    /**
     * Gets preference_group_name
     *
     * @return string|null
     */
    public function getPreferenceGroupName()
    {
        return $this->container['preference_group_name'];
    }

    /**
     * Sets preference_group_name
     *
     * @param string|null $preference_group_name The name of the preferences group that the subscription is associated with.
     *
     * @return self
     */
    public function setPreferenceGroupName($preference_group_name)
    {
        $this->container['preference_group_name'] = $preference_group_name;

        return $this;
    }

    /**
     * Gets legal_basis
     *
     * @return string|null
     */
    public function getLegalBasis()
    {
        return $this->container['legal_basis'];
    }

    /**
     * Sets legal_basis
     *
     * @param string|null $legal_basis The legal reason for the current status of the subscription.
     *
     * @return self
     */
    public function setLegalBasis($legal_basis)
    {
        $allowedValues = $this->getLegalBasisAllowableValues();
        if (!is_null($legal_basis) && !in_array($legal_basis, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'legal_basis', must be one of '%s'",
                    $legal_basis,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['legal_basis'] = $legal_basis;

        return $this;
    }

    /**
     * Gets legal_basis_explanation
     *
     * @return string|null
     */
    public function getLegalBasisExplanation()
    {
        return $this->container['legal_basis_explanation'];
    }

    /**
     * Sets legal_basis_explanation
     *
     * @param string|null $legal_basis_explanation A more detailed explanation to go with the legal basis.
     *
     * @return self
     */
    public function setLegalBasisExplanation($legal_basis_explanation)
    {
        $this->container['legal_basis_explanation'] = $legal_basis_explanation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
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


