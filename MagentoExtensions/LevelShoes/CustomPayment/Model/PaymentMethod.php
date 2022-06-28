<?php

namespace LevelShoes\CustomPayment\Model;

/**
 * MD Custom Payment Method Model
 */
class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod {

    /**
     * Payment Method code
     *
     * @var string
     */
    protected $_code = 'LEVEL_COD';
}
