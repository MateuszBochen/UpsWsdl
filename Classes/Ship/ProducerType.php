<?php

namespace UpsWsdl\Classes\Ship;

class ProducerType
{

    /**
     * @var string $Option
     */
    protected $Option = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $TaxIdentificationNumber
     */
    protected $TaxIdentificationNumber = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @var string $AttentionName
     */
    protected $AttentionName = null;

    /**
     * @var PhoneType $Phone
     */
    protected $Phone = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @param string $Option
     * @param string $CompanyName
     * @param string $TaxIdentificationNumber
     * @param AddressType $Address
     * @param string $AttentionName
     * @param PhoneType $Phone
     * @param string $EMailAddress
     */
    public function __construct($Option = null, $CompanyName = null, $TaxIdentificationNumber = null, $Address = null, $AttentionName = null, $Phone = null, $EMailAddress = null)
    {
      $this->Option = $Option;
      $this->CompanyName = $CompanyName;
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      $this->Address = $Address;
      $this->AttentionName = $AttentionName;
      $this->Phone = $Phone;
      $this->EMailAddress = $EMailAddress;
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
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
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
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setTaxIdentificationNumber($TaxIdentificationNumber)
    {
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
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
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setAttentionName($AttentionName)
    {
      $this->AttentionName = $AttentionName;
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
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
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
     * @return \UpsWsdl\Classes\Ship\ProducerType
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

}
