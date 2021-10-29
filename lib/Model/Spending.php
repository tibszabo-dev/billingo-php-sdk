<?php
/**
 * Spending
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Spending Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Spending implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Spending';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'organization_id' => 'int',
'category' => '\Swagger\Client\Model\Category',
'paid_at' => '\DateTime',
'fulfillment_date' => '\DateTime',
'partner' => '\Swagger\Client\Model\SpendingPartner',
'invoice_number' => 'string',
'currency' => '\Swagger\Client\Model\Currency',
'conversion_rate' => 'float',
'total_gross' => 'float',
'total_gross_local' => 'float',
'total_vat_amount' => 'float',
'total_vat_amount_local' => 'float',
'invoice_date' => '\DateTime',
'due_date' => '\DateTime',
'payment_method' => '\Swagger\Client\Model\SpendingPaymentMethod',
'comment' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'organization_id' => null,
'category' => null,
'paid_at' => 'date',
'fulfillment_date' => 'date',
'partner' => null,
'invoice_number' => null,
'currency' => null,
'conversion_rate' => 'float',
'total_gross' => 'float',
'total_gross_local' => 'float',
'total_vat_amount' => 'float',
'total_vat_amount_local' => 'float',
'invoice_date' => 'date',
'due_date' => 'date',
'payment_method' => null,
'comment' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'organization_id' => 'organization_id',
'category' => 'category',
'paid_at' => 'paid_at',
'fulfillment_date' => 'fulfillment_date',
'partner' => 'partner',
'invoice_number' => 'invoice_number',
'currency' => 'currency',
'conversion_rate' => 'conversion_rate',
'total_gross' => 'total_gross',
'total_gross_local' => 'total_gross_local',
'total_vat_amount' => 'total_vat_amount',
'total_vat_amount_local' => 'total_vat_amount_local',
'invoice_date' => 'invoice_date',
'due_date' => 'due_date',
'payment_method' => 'payment_method',
'comment' => 'comment'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'organization_id' => 'setOrganizationId',
'category' => 'setCategory',
'paid_at' => 'setPaidAt',
'fulfillment_date' => 'setFulfillmentDate',
'partner' => 'setPartner',
'invoice_number' => 'setInvoiceNumber',
'currency' => 'setCurrency',
'conversion_rate' => 'setConversionRate',
'total_gross' => 'setTotalGross',
'total_gross_local' => 'setTotalGrossLocal',
'total_vat_amount' => 'setTotalVatAmount',
'total_vat_amount_local' => 'setTotalVatAmountLocal',
'invoice_date' => 'setInvoiceDate',
'due_date' => 'setDueDate',
'payment_method' => 'setPaymentMethod',
'comment' => 'setComment'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'organization_id' => 'getOrganizationId',
'category' => 'getCategory',
'paid_at' => 'getPaidAt',
'fulfillment_date' => 'getFulfillmentDate',
'partner' => 'getPartner',
'invoice_number' => 'getInvoiceNumber',
'currency' => 'getCurrency',
'conversion_rate' => 'getConversionRate',
'total_gross' => 'getTotalGross',
'total_gross_local' => 'getTotalGrossLocal',
'total_vat_amount' => 'getTotalVatAmount',
'total_vat_amount_local' => 'getTotalVatAmountLocal',
'invoice_date' => 'getInvoiceDate',
'due_date' => 'getDueDate',
'payment_method' => 'getPaymentMethod',
'comment' => 'getComment'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['fulfillment_date'] = isset($data['fulfillment_date']) ? $data['fulfillment_date'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['total_gross'] = isset($data['total_gross']) ? $data['total_gross'] : null;
        $this->container['total_gross_local'] = isset($data['total_gross_local']) ? $data['total_gross_local'] : null;
        $this->container['total_vat_amount'] = isset($data['total_vat_amount']) ? $data['total_vat_amount'] : null;
        $this->container['total_vat_amount_local'] = isset($data['total_vat_amount_local']) ? $data['total_vat_amount_local'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param int $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param \DateTime $paid_at paid_at
     *
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets fulfillment_date
     *
     * @return \DateTime
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillment_date'];
    }

    /**
     * Sets fulfillment_date
     *
     * @param \DateTime $fulfillment_date fulfillment_date
     *
     * @return $this
     */
    public function setFulfillmentDate($fulfillment_date)
    {
        $this->container['fulfillment_date'] = $fulfillment_date;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return \Swagger\Client\Model\SpendingPartner
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Swagger\Client\Model\SpendingPartner $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float $conversion_rate conversion_rate
     *
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets total_gross
     *
     * @return float
     */
    public function getTotalGross()
    {
        return $this->container['total_gross'];
    }

    /**
     * Sets total_gross
     *
     * @param float $total_gross total_gross
     *
     * @return $this
     */
    public function setTotalGross($total_gross)
    {
        $this->container['total_gross'] = $total_gross;

        return $this;
    }

    /**
     * Gets total_gross_local
     *
     * @return float
     */
    public function getTotalGrossLocal()
    {
        return $this->container['total_gross_local'];
    }

    /**
     * Sets total_gross_local
     *
     * @param float $total_gross_local total_gross_local
     *
     * @return $this
     */
    public function setTotalGrossLocal($total_gross_local)
    {
        $this->container['total_gross_local'] = $total_gross_local;

        return $this;
    }

    /**
     * Gets total_vat_amount
     *
     * @return float
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     *
     * @param float $total_vat_amount total_vat_amount
     *
     * @return $this
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        $this->container['total_vat_amount'] = $total_vat_amount;

        return $this;
    }

    /**
     * Gets total_vat_amount_local
     *
     * @return float
     */
    public function getTotalVatAmountLocal()
    {
        return $this->container['total_vat_amount_local'];
    }

    /**
     * Sets total_vat_amount_local
     *
     * @param float $total_vat_amount_local total_vat_amount_local
     *
     * @return $this
     */
    public function setTotalVatAmountLocal($total_vat_amount_local)
    {
        $this->container['total_vat_amount_local'] = $total_vat_amount_local;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Swagger\Client\Model\SpendingPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Swagger\Client\Model\SpendingPaymentMethod $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
