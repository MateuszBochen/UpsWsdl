<?php

namespace UpsWsdl\Classes\Ship;

class CompanyInfoType
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
     * @var string $CompanyDisplayableName
     */
    protected $CompanyDisplayableName = null;

    /**
     * @var string $TaxIdentificationNumber
     */
    protected $TaxIdentificationNumber = null;

    /**
     * @var TaxIDCodeDescType $TaxIDType
     */
    protected $TaxIDType = null;

    /**
     * @var ShipPhoneType $Phone
     */
    protected $Phone = null;

    /**
     * @param string $Name
     * @param string $AttentionName
     * @param string $CompanyDisplayableName
     * @param string $TaxIdentificationNumber
     * @param TaxIDCodeDescType $TaxIDType
     * @param ShipPhoneType $Phone
     */
    public function __construct($Name = null, $AttentionName = null, $CompanyDisplayableName = null, $TaxIdentificationNumber = null, $TaxIDType = null, $Phone = null)
    {
      $this->Name = $Name;
      $this->AttentionName = $AttentionName;
      $this->CompanyDisplayableName = $CompanyDisplayableName;
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      $this->TaxIDType = $TaxIDType;
      $this->Phone = $Phone;
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
     * @return \UpsWsdl\Classes\Ship\CompanyInfoType
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
     * @return \UpsWsdl\Classes\Ship\CompanyInfoType
     */
    public function setAttentionName($AttentionName)
    {
      $this->AttentionName = $AttentionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyDisplayableName()
    {
      return $this->CompanyDisplayableName;
    }

    /**
     * @param string $CompanyDisplayableName
     * @return \UpsWsdl\Classes\Ship\CompanyInfoType
     */
    public function setCompanyDisplayableName($CompanyDisplayableName)
    {
      $this->CompanyDisplayableName = $CompanyDisplayableName;
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
     * @return \UpsWsdl\Classes\Ship\CompanyInfoType
     */
    public function setTaxIdentificationNumber($TaxIdentificationNumber)
    {
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      return $this;
    }

    /**
     * @return TaxIDCodeDescType
     */
    public function getTaxIDType()
    {
      return $this->TaxIDType;
    }

    /**
     * @param TaxIDCodeDescType $TaxIDType
     * @return \UpsWsdl\Classes\Ship\CompanyInfoType
     */
    public function setTaxIDType($TaxIDType)
    {
      $this->TaxIDType = $TaxIDType;
      return $this;
    }

    /**
     * @return ShipPhoneType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param ShipPhoneType $Phone
     * @return \UpsWsdl\Classes\Ship\CompanyInfoType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

}
