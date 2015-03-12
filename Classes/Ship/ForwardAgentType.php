<?php

namespace UpsWsdl\Classes\Ship;

class ForwardAgentType
{

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
     * @param string $CompanyName
     * @param string $TaxIdentificationNumber
     * @param AddressType $Address
     */
    public function __construct($CompanyName = null, $TaxIdentificationNumber = null, $Address = null)
    {
      $this->CompanyName = $CompanyName;
      $this->TaxIdentificationNumber = $TaxIdentificationNumber;
      $this->Address = $Address;
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
     * @return \UpsWsdl\Classes\Ship\ForwardAgentType
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
     * @return \UpsWsdl\Classes\Ship\ForwardAgentType
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
     * @return \UpsWsdl\Classes\Ship\ForwardAgentType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
