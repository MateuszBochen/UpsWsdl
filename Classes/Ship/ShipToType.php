<?php

namespace UpsWsdl\Classes\Ship;

class ShipToType extends CompanyInfoType
{

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @var ShipToAddressType $Address
     */
    protected $Address = null;

    /**
     * @var string $LocationID
     */
    protected $LocationID = null;

    /**
     * @param string $Name
     * @param string $AttentionName
     * @param string $CompanyDisplayableName
     * @param string $TaxIdentificationNumber
     * @param TaxIDCodeDescType $TaxIDType
     * @param ShipPhoneType $Phone
     * @param string $FaxNumber
     * @param string $EMailAddress
     * @param ShipToAddressType $Address
     * @param string $LocationID
     */
    public function __construct($Name = null, $AttentionName = null, $CompanyDisplayableName = null, $TaxIdentificationNumber = null, $TaxIDType = null, $Phone = null, $FaxNumber = null, $EMailAddress = null, $Address = null, $LocationID = null)
    {
      parent::__construct($Name, $AttentionName, $CompanyDisplayableName, $TaxIdentificationNumber, $TaxIDType, $Phone);
      $this->FaxNumber = $FaxNumber;
      $this->EMailAddress = $EMailAddress;
      $this->Address = $Address;
      $this->LocationID = $LocationID;
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
     * @return \UpsWsdl\Classes\Ship\ShipToType
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
     * @return \UpsWsdl\Classes\Ship\ShipToType
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

    /**
     * @return ShipToAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ShipToAddressType $Address
     * @return \UpsWsdl\Classes\Ship\ShipToType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param string $LocationID
     * @return \UpsWsdl\Classes\Ship\ShipToType
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

}
