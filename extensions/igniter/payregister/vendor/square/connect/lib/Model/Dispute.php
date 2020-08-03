<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Dispute Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class Dispute implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'dispute_id' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'reason' => 'string',
        'state' => 'string',
        'due_at' => 'string',
        'disputed_payment' => '\SquareConnect\Model\DisputedPayment',
        'evidence_ids' => 'string[]',
        'card_brand' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'brand_dispute_id' => 'string',
        'reported_date' => 'string',
        'version' => 'int',
        'location_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'dispute_id' => 'dispute_id',
        'amount_money' => 'amount_money',
        'reason' => 'reason',
        'state' => 'state',
        'due_at' => 'due_at',
        'disputed_payment' => 'disputed_payment',
        'evidence_ids' => 'evidence_ids',
        'card_brand' => 'card_brand',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'brand_dispute_id' => 'brand_dispute_id',
        'reported_date' => 'reported_date',
        'version' => 'version',
        'location_id' => 'location_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'dispute_id' => 'setDisputeId',
        'amount_money' => 'setAmountMoney',
        'reason' => 'setReason',
        'state' => 'setState',
        'due_at' => 'setDueAt',
        'disputed_payment' => 'setDisputedPayment',
        'evidence_ids' => 'setEvidenceIds',
        'card_brand' => 'setCardBrand',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'brand_dispute_id' => 'setBrandDisputeId',
        'reported_date' => 'setReportedDate',
        'version' => 'setVersion',
        'location_id' => 'setLocationId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'dispute_id' => 'getDisputeId',
        'amount_money' => 'getAmountMoney',
        'reason' => 'getReason',
        'state' => 'getState',
        'due_at' => 'getDueAt',
        'disputed_payment' => 'getDisputedPayment',
        'evidence_ids' => 'getEvidenceIds',
        'card_brand' => 'getCardBrand',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'brand_dispute_id' => 'getBrandDisputeId',
        'reported_date' => 'getReportedDate',
        'version' => 'getVersion',
        'location_id' => 'getLocationId'
    );
  
    /**
      * $dispute_id Unique ID for this `Dispute`, generated by Square.
      * @var string
      */
    protected $dispute_id;
    /**
      * $amount_money The disputed amount. The amount can be less than the entire transaction amount. For example, a cardholder purchased multiple items, however initiated dispute only for some of the items.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $reason The dispute reason why cardholder initiated dispute with their bank. See [DisputeReason](#type-disputereason) for possible values
      * @var string
      */
    protected $reason;
    /**
      * $state The current state of this dispute. See [DisputeState](#type-disputestate) for possible values
      * @var string
      */
    protected $state;
    /**
      * $due_at The time when the next action is due, in RFC 3339 format.
      * @var string
      */
    protected $due_at;
    /**
      * $disputed_payment The payment challenged in this dispute.
      * @var \SquareConnect\Model\DisputedPayment
      */
    protected $disputed_payment;
    /**
      * $evidence_ids The IDs of the evidence associated with the dispute.
      * @var string[]
      */
    protected $evidence_ids;
    /**
      * $card_brand The card brand used in the disputed payment. See [CardBrand](#type-cardbrand) for possible values
      * @var string
      */
    protected $card_brand;
    /**
      * $created_at Timestamp when the dispute was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at Timestamp when dispute was last updated, in RFC 3339 format.
      * @var string
      */
    protected $updated_at;
    /**
      * $brand_dispute_id ID of the dispute in the card brand system, generated by the card brand.
      * @var string
      */
    protected $brand_dispute_id;
    /**
      * $reported_date Timestamp when the dispute was reported, in RFC 3339 format.
      * @var string
      */
    protected $reported_date;
    /**
      * $version The current version of the `Dispute`.
      * @var int
      */
    protected $version;
    /**
      * $location_id The ID of location where dispute originated.
      * @var string
      */
    protected $location_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["dispute_id"])) {
              $this->dispute_id = $data["dispute_id"];
            } else {
              $this->dispute_id = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["reason"])) {
              $this->reason = $data["reason"];
            } else {
              $this->reason = null;
            }
            if (isset($data["state"])) {
              $this->state = $data["state"];
            } else {
              $this->state = null;
            }
            if (isset($data["due_at"])) {
              $this->due_at = $data["due_at"];
            } else {
              $this->due_at = null;
            }
            if (isset($data["disputed_payment"])) {
              $this->disputed_payment = $data["disputed_payment"];
            } else {
              $this->disputed_payment = null;
            }
            if (isset($data["evidence_ids"])) {
              $this->evidence_ids = $data["evidence_ids"];
            } else {
              $this->evidence_ids = null;
            }
            if (isset($data["card_brand"])) {
              $this->card_brand = $data["card_brand"];
            } else {
              $this->card_brand = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
            if (isset($data["brand_dispute_id"])) {
              $this->brand_dispute_id = $data["brand_dispute_id"];
            } else {
              $this->brand_dispute_id = null;
            }
            if (isset($data["reported_date"])) {
              $this->reported_date = $data["reported_date"];
            } else {
              $this->reported_date = null;
            }
            if (isset($data["version"])) {
              $this->version = $data["version"];
            } else {
              $this->version = null;
            }
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
        }
    }
    /**
     * Gets dispute_id
     * @return string
     */
    public function getDisputeId()
    {
        return $this->dispute_id;
    }
  
    /**
     * Sets dispute_id
     * @param string $dispute_id Unique ID for this `Dispute`, generated by Square.
     * @return $this
     */
    public function setDisputeId($dispute_id)
    {
        $this->dispute_id = $dispute_id;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The disputed amount. The amount can be less than the entire transaction amount. For example, a cardholder purchased multiple items, however initiated dispute only for some of the items.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason The dispute reason why cardholder initiated dispute with their bank. See [DisputeReason](#type-disputereason) for possible values
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state The current state of this dispute. See [DisputeState](#type-disputestate) for possible values
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Gets due_at
     * @return string
     */
    public function getDueAt()
    {
        return $this->due_at;
    }
  
    /**
     * Sets due_at
     * @param string $due_at The time when the next action is due, in RFC 3339 format.
     * @return $this
     */
    public function setDueAt($due_at)
    {
        $this->due_at = $due_at;
        return $this;
    }
    /**
     * Gets disputed_payment
     * @return \SquareConnect\Model\DisputedPayment
     */
    public function getDisputedPayment()
    {
        return $this->disputed_payment;
    }
  
    /**
     * Sets disputed_payment
     * @param \SquareConnect\Model\DisputedPayment $disputed_payment The payment challenged in this dispute.
     * @return $this
     */
    public function setDisputedPayment($disputed_payment)
    {
        $this->disputed_payment = $disputed_payment;
        return $this;
    }
    /**
     * Gets evidence_ids
     * @return string[]
     */
    public function getEvidenceIds()
    {
        return $this->evidence_ids;
    }
  
    /**
     * Sets evidence_ids
     * @param string[] $evidence_ids The IDs of the evidence associated with the dispute.
     * @return $this
     */
    public function setEvidenceIds($evidence_ids)
    {
        $this->evidence_ids = $evidence_ids;
        return $this;
    }
    /**
     * Gets card_brand
     * @return string
     */
    public function getCardBrand()
    {
        return $this->card_brand;
    }
  
    /**
     * Sets card_brand
     * @param string $card_brand The card brand used in the disputed payment. See [CardBrand](#type-cardbrand) for possible values
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->card_brand = $card_brand;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at Timestamp when the dispute was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at Timestamp when dispute was last updated, in RFC 3339 format.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets brand_dispute_id
     * @return string
     */
    public function getBrandDisputeId()
    {
        return $this->brand_dispute_id;
    }
  
    /**
     * Sets brand_dispute_id
     * @param string $brand_dispute_id ID of the dispute in the card brand system, generated by the card brand.
     * @return $this
     */
    public function setBrandDisputeId($brand_dispute_id)
    {
        $this->brand_dispute_id = $brand_dispute_id;
        return $this;
    }
    /**
     * Gets reported_date
     * @return string
     */
    public function getReportedDate()
    {
        return $this->reported_date;
    }
  
    /**
     * Sets reported_date
     * @param string $reported_date Timestamp when the dispute was reported, in RFC 3339 format.
     * @return $this
     */
    public function setReportedDate($reported_date)
    {
        $this->reported_date = $reported_date;
        return $this;
    }
    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
  
    /**
     * Sets version
     * @param int $version The current version of the `Dispute`.
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id The ID of location where dispute originated.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
