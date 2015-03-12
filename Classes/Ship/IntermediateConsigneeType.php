<?php

namespace UpsWsdl\Classes\Ship;

class IntermediateConsigneeType
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
     * @param string $CompanyName
     * @param AddressType $Address
     */
    public function __construct($CompanyName = null, $Address = null)
    {
      $this->CompanyName = $CompanyName;
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
     * @return \UpsWsdl\Classes\Ship\IntermediateConsigneeType
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
     * @return \UpsWsdl\Classes\Ship\IntermediateConsigneeType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
