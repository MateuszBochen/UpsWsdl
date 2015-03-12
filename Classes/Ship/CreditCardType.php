<?php

namespace UpsWsdl\Classes\Ship;

class CreditCardType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var string $SecurityCode
     */
    protected $SecurityCode = null;

    /**
     * @var CreditCardAddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $Type
     * @param string $Number
     * @param string $ExpirationDate
     * @param string $SecurityCode
     * @param CreditCardAddressType $Address
     */
    public function __construct($Type = null, $Number = null, $ExpirationDate = null, $SecurityCode = null, $Address = null)
    {
      $this->Type = $Type;
      $this->Number = $Number;
      $this->ExpirationDate = $ExpirationDate;
      $this->SecurityCode = $SecurityCode;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \UpsWsdl\Classes\Ship\CreditCardType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \UpsWsdl\Classes\Ship\CreditCardType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     * @return \UpsWsdl\Classes\Ship\CreditCardType
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecurityCode()
    {
      return $this->SecurityCode;
    }

    /**
     * @param string $SecurityCode
     * @return \UpsWsdl\Classes\Ship\CreditCardType
     */
    public function setSecurityCode($SecurityCode)
    {
      $this->SecurityCode = $SecurityCode;
      return $this;
    }

    /**
     * @return CreditCardAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param CreditCardAddressType $Address
     * @return \UpsWsdl\Classes\Ship\CreditCardType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
