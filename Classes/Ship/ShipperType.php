<?php

namespace UpsWsdl\Classes\Ship;

class ShipperType extends CompanyInfoType
{

    /**
     * @var string $ShipperNumber
     */
    protected $ShipperNumber = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

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
     * @param string $ShipperNumber
     * @param string $FaxNumber
     * @param string $EMailAddress
     * @param ShipAddressType $Address
     */
    public function __construct($Name = null, $AttentionName = null, $CompanyDisplayableName = null, $TaxIdentificationNumber = null, $TaxIDType = null, $Phone = null, $ShipperNumber = null, $FaxNumber = null, $EMailAddress = null, $Address = null)
    {
      parent::__construct($Name, $AttentionName, $CompanyDisplayableName, $TaxIdentificationNumber, $TaxIDType, $Phone);
      $this->ShipperNumber = $ShipperNumber;
      $this->FaxNumber = $FaxNumber;
      $this->EMailAddress = $EMailAddress;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getShipperNumber()
    {
      return $this->ShipperNumber;
    }

    /**
     * @param string $ShipperNumber
     * @return \UpsWsdl\Classes\Ship\ShipperType
     */
    public function setShipperNumber($ShipperNumber)
    {
      $this->ShipperNumber = $ShipperNumber;
      return $this;
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
     * @return \UpsWsdl\Classes\Ship\ShipperType
     */
    public function setFaxNumber($FaxNumber)
    {
      $this->FaxNumber = $FaxNumber;
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
     * @return \UpsWsdl\Classes\Ship\ShipperType
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
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
     * @return \UpsWsdl\Classes\Ship\ShipperType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
