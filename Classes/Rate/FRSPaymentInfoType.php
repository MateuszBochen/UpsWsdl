<?php

namespace UpsWsdl\Classes\Rate;

class FRSPaymentInfoType
{

    /**
     * @var CodeDescriptionType $Type
     */
    protected $Type = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var PayerAddressType $Address
     */
    protected $Address = null;

    /**
     * @param CodeDescriptionType $Type
     * @param string $AccountNumber
     * @param PayerAddressType $Address
     */
    public function __construct($Type = null, $AccountNumber = null, $Address = null)
    {
      $this->Type = $Type;
      $this->AccountNumber = $AccountNumber;
      $this->Address = $Address;
    }

    /**
     * @return CodeDescriptionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CodeDescriptionType $Type
     * @return \UpsWsdl\Classes\Rate\FRSPaymentInfoType
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
     * @return \UpsWsdl\Classes\Rate\FRSPaymentInfoType
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return PayerAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param PayerAddressType $Address
     * @return \UpsWsdl\Classes\Rate\FRSPaymentInfoType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
