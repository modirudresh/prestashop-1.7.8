<?php

/**
 * Copyright (c) since 2010 Stripe, Inc. (https://stripe.com)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    Stripe <https://support.stripe.com/contact/email>
 * @copyright Since 2010 Stripe, Inc.
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
class StripePayment extends ObjectModel
{
    /** @var string */
    public $id_stripe;
    /** @var string */
    public $id_payment_intent;
    /** @var string */
    public $name;
    /** @var int */
    public $id_cart;
    /** @var int */
    public $last4;
    /** @var string */
    public $type;
    /** @var float */
    public $amount;
    /** @var float */
    public $refund;
    /** @var string */
    public $currency;
    /** @var int */
    public $result;
    /** @var int */
    public $state;
    /** @var string */
    public $voucher_url;
    /** @var date */
    public $voucher_expire;
    /** @var date */
    public $voucher_validate;
    /** @var date */
    public $date_add;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => 'stripe_payment',
        'primary' => 'id_payment',
        'fields' => [
            'id_stripe' => [
                'type' => ObjectModel::TYPE_STRING,
                'validate' => 'isString',
                'size' => 255,
            ],
            'id_payment_intent' => [
                'type' => ObjectModel::TYPE_STRING,
                'validate' => 'isString',
                'size' => 255,
            ],
            'name' => [
                'type' => ObjectModel::TYPE_STRING,
                'validate' => 'isString',
                'size' => 255,
            ],
            'id_cart' => [
                'type' => ObjectModel::TYPE_INT,
                'validate' => 'isInt',
                'size' => 10,
            ],
            'last4' => [
                'type' => ObjectModel::TYPE_INT,
                'validate' => 'isInt',
                'size' => 10,
            ],
            'type' => [
                'type' => ObjectModel::TYPE_STRING,
                'validate' => 'isString',
                'size' => 20,
            ],
            'amount' => [
                'type' => ObjectModel::TYPE_FLOAT,
                'validate' => 'isFloat',
                'size' => 10,
                'scale' => 2,
            ],
            'refund' => [
                'type' => ObjectModel::TYPE_FLOAT,
                'validate' => 'isFloat',
                'size' => 10,
                'scale' => 2,
            ],
            'currency' => [
                'type' => ObjectModel::TYPE_STRING,
                'validate' => 'isString',
                'size' => 3,
            ],
            'result' => [
                'type' => ObjectModel::TYPE_INT,
                'validate' => 'isInt',
                'size' => 1,
            ],
            'state' => [
                'type' => ObjectModel::TYPE_INT,
                'validate' => 'isInt',
                'size' => 1,
            ],
            'voucher_url' => [
                'type' => ObjectModel::TYPE_STRING,
                'validate' => 'isString',
                'size' => 255,
            ],
            'voucher_expire' => [
                'type' => ObjectModel::TYPE_DATE,
                'validate' => 'isDate',
            ],
            'voucher_validate' => [
                'type' => ObjectModel::TYPE_DATE,
                'validate' => 'isDate',
            ],
            'date_add' => [
                'type' => ObjectModel::TYPE_DATE,
                'validate' => 'isDate',
            ],
        ],
    ];

    public function setIdStripe($id_stripe)
    {
        $this->id_stripe = $id_stripe;
    }

    public function getIdStripe()
    {
        return $this->id_stripe;
    }

    public function setIdPaymentIntent($id_payment_intent)
    {
        $this->id_payment_intent = $id_payment_intent;
    }

    public function getIdPaymentIntent()
    {
        return $this->id_payment_intent;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setIdCart($id_cart)
    {
        $this->id_cart = $id_cart;
    }

    public function getIdCart()
    {
        return $this->id_cart;
    }

    public function setLast4($last4)
    {
        $this->last4 = $last4;
    }

    public function getLast4()
    {
        return $this->last4;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setRefund($refund)
    {
        $this->refund = $refund;
    }

    public function getRefund()
    {
        return $this->refund;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setVoucherUrl($voucher_url)
    {
        $this->voucher_url = $voucher_url;
    }

    public function getVoucherUrl()
    {
        return $this->voucher_url;
    }

    public function setVoucherExpire($voucher_expire)
    {
        $this->voucher_expire = $voucher_expire;
    }

    public function getVoucherExpire()
    {
        return $this->voucher_expire;
    }

    public function setVoucherValidate($voucher_validate)
    {
        $this->voucher_validate = $voucher_validate;
    }

    public function getVoucherValidate()
    {
        return $this->voucher_validate;
    }

    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;
    }

    public function getDateAdd()
    {
        return $this->date_add;
    }

    public function getStripePaymentByCart($id_cart)
    {
        $query = new DbQuery();
        $query->select('*');
        $query->from(static::$definition['table']);
        $query->where('id_cart = ' . (int) $id_cart);

        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($query->build());
        if (false == $result) {
            return $this;
        }

        $this->hydrate($result);

        return $this;
    }

    public function getDashboardUrl()
    {
        $url_type = '';
        if (1 == $this->state) {
            $url_type = 'test/';
        }

        switch ($this->result) {
            case 0:
                $this->result = 'n';
                break;
            case 1:
                $this->result = '';
                break;
            case 2:
                $this->result = 2;
                break;
            case 4:
                $this->result = 4;
                break;

            default:
                $this->result = 3;
                break;
        }

        $url_dashboard = [
            'charge' => 'https://dashboard.stripe.com/' . $url_type . 'payments/' . $this->id_stripe,
            'paymentIntent' => 'https://dashboard.stripe.com/' . $url_type . 'payments/' . $this->id_payment_intent,
        ];

        return $url_dashboard;
    }

    public function updateIdStripe($chargeId, $cartId)
    {
        $sql = 'UPDATE `' . _DB_PREFIX_ . 'stripe_payment`
        SET `id_stripe` = "' . $chargeId . '"
        WHERE  `id_cart` = "' . $cartId . '"';
        Db::getInstance()->execute($sql);
    }
}
