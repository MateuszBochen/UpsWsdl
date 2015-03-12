<?php

namespace UpsWsdl\Classes\Ship;

class BillShipperType
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var CreditCardType $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var string $AlternatePaymentMethod
     */
    protected $AlternatePaymentMethod = null;

    /**
     * @param string $AccountNumber
     * @param CreditCardType $CreditCard
     * @param string $AlternatePaymentMethod
     */
    public function __construct($AccountNumber = null, $CreditCard = null, $AlternatePaymentMethod = null)
    {
      $this->AccountNumber = $AccountNumber;
      $this->CreditCard = $CreditCard;
      $this->AlternatePaymentMethod = $AlternatePaymentMethod;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \UpsWsdl\Classes\Ship\BillShipperType
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return CreditCardType
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCardType $CreditCard
     * @return \UpsWsdl\Classes\Ship\BillShipperType
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternatePaymentMethod()
    {
      return $this->AlternatePaymentMethod;
    }

    /**
     * @param string $AlternatePaymentMethod
     * @return \UpsWsdl\Classes\Ship\BillShipperType
     */
    public function setAlternatePaymentMethod($AlternatePaymentMethod)
    {
      $this->AlternatePaymentMethod = $AlternatePaymentMethod;
      return $this;
    }

}
