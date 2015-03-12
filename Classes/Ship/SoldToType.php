<?php

namespace UpsWsdl\Classes\Ship;

class SoldToType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $AttentionName
     */
    protected $AttentionName = null;

    /**
     * @var string $TaxIdentificationNumber
     */
    protected $TaxIdentificationNumber = null;

    /**
     * @var PhoneType $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Option
     */
    protected $Option = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @param string $Name
     * @param string $AttentionName
     * @param string $TaxIdentificationNumber
     * @param PhoneType $Phone
     * @param string $Option
     * @param AddressType $Address
     * @param string $EMailAddress
     */
    public function __construct($Name = null, $AttentionName = null, $TaxIdentificationNumber = null, $Phone = null, $Option = null, $Address = null, $EMailAddress = null)
    {
      $this->Name = $Name;
      $this->AttentionName = $AttentionName;
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      $this->Phone = $Phone;
      $this->Option = $Option;
      $this->Address = $Address;
      $this->EMailAddress = $EMailAddress;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttentionName()
    {
      return $this->AttentionName;
    }

    /**
     * @param string $AttentionName
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setAttentionName($AttentionName)
    {
      $this->AttentionName = $AttentionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
      return $this->TaxIdentificationNumber;
    }

    /**
     * @param string $TaxIdentificationNumber
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setTaxIdentificationNumber($TaxIdentificationNumber)
    {
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      return $this;
    }

    /**
     * @return PhoneType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param PhoneType $Phone
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param string $Option
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getEMailAddress()
    {
      return $this->EMailAddress;
    }

    /**
     * @param string $EMailAddress
     * @return \UpsWsdl\Classes\Ship\SoldToType
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

}
