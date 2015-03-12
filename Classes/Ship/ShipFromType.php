<?php

namespace UpsWsdl\Classes\Ship;

class ShipFromType extends CompanyInfoType
{

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var ShipAddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $Name
     * @param string $AttentionName
     * @param string $CompanyDisplayableName
     * @param string $TaxIdentificationNumber
     * @param TaxIDCodeDescType $TaxIDType
     * @param ShipPhoneType $Phone
     * @param string $FaxNumber
     * @param ShipAddressType $Address
     */
    public function __construct($Name = null, $AttentionName = null, $CompanyDisplayableName = null, $TaxIdentificationNumber = null, $TaxIDType = null, $Phone = null, $FaxNumber = null, $Address = null)
    {
      parent::__construct($Name, $AttentionName, $CompanyDisplayableName, $TaxIdentificationNumber, $TaxIDType, $Phone);
      $this->FaxNumber = $FaxNumber;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return \UpsWsdl\Classes\Ship\ShipFromType
     */
    public function setFaxNumber($FaxNumber)
    {
      $this->FaxNumber = $FaxNumber;
      return $this;
    }

    /**
     * @return ShipAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ShipAddressType $Address
     * @return \UpsWsdl\Classes\Ship\ShipFromType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
