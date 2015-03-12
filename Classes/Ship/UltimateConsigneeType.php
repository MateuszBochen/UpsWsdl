<?php

namespace UpsWsdl\Classes\Ship;

class UltimateConsigneeType
{

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @var UltimateConsigneeTypeType $UltimateConsigneeType
     */
    protected $UltimateConsigneeType = null;

    /**
     * @param string $CompanyName
     * @param AddressType $Address
     * @param UltimateConsigneeTypeType $UltimateConsigneeType
     */
    public function __construct($CompanyName = null, $Address = null, $UltimateConsigneeType = null)
    {
      $this->CompanyName = $CompanyName;
      $this->Address = $Address;
      $this->UltimateConsigneeType = $UltimateConsigneeType;
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
     * @return \UpsWsdl\Classes\Ship\UltimateConsigneeType
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
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
     * @return \UpsWsdl\Classes\Ship\UltimateConsigneeType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return UltimateConsigneeTypeType
     */
    public function getUltimateConsigneeType()
    {
      return $this->UltimateConsigneeType;
    }

    /**
     * @param UltimateConsigneeTypeType $UltimateConsigneeType
     * @return \UpsWsdl\Classes\Ship\UltimateConsigneeType
     */
    public function setUltimateConsigneeType($UltimateConsigneeType)
    {
      $this->UltimateConsigneeType = $UltimateConsigneeType;
      return $this;
    }

}
