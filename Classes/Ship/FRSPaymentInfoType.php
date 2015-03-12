<?php

namespace UpsWsdl\Classes\Ship;

class FRSPaymentInfoType
{

    /**
     * @var PaymentType $Type
     */
    protected $Type = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var AccountAddressType $Address
     */
    protected $Address = null;

    /**
     * @param PaymentType $Type
     * @param string $AccountNumber
     * @param AccountAddressType $Address
     */
    public function __construct($Type = null, $AccountNumber = null, $Address = null)
    {
      $this->Type = $Type;
      $this->AccountNumber = $AccountNumber;
      $this->Address = $Address;
    }

    /**
     * @return PaymentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PaymentType $Type
     * @return \UpsWsdl\Classes\Ship\FRSPaymentInfoType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
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
     * @return \UpsWsdl\Classes\Ship\FRSPaymentInfoType
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return AccountAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AccountAddressType $Address
     * @return \UpsWsdl\Classes\Ship\FRSPaymentInfoType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
