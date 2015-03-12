<?php

namespace UpsWsdl\Classes\Ship;

class EEIFilingOptionType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var UPSFiledType $UPSFiled
     */
    protected $UPSFiled = null;

    /**
     * @var ShipperFiledType $ShipperFiled
     */
    protected $ShipperFiled = null;

    /**
     * @param string $Code
     * @param string $EMailAddress
     * @param string $Description
     * @param UPSFiledType $UPSFiled
     * @param ShipperFiledType $ShipperFiled
     */
    public function __construct($Code = null, $EMailAddress = null, $Description = null, $UPSFiled = null, $ShipperFiled = null)
    {
      $this->Code = $Code;
      $this->EMailAddress = $EMailAddress;
      $this->Description = $Description;
      $this->UPSFiled = $UPSFiled;
      $this->ShipperFiled = $ShipperFiled;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \UpsWsdl\Classes\Ship\EEIFilingOptionType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \UpsWsdl\Classes\Ship\EEIFilingOptionType
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \UpsWsdl\Classes\Ship\EEIFilingOptionType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return UPSFiledType
     */
    public function getUPSFiled()
    {
      return $this->UPSFiled;
    }

    /**
     * @param UPSFiledType $UPSFiled
     * @return \UpsWsdl\Classes\Ship\EEIFilingOptionType
     */
    public function setUPSFiled($UPSFiled)
    {
      $this->UPSFiled = $UPSFiled;
      return $this;
    }

    /**
     * @return ShipperFiledType
     */
    public function getShipperFiled()
    {
      return $this->ShipperFiled;
    }

    /**
     * @param ShipperFiledType $ShipperFiled
     * @return \UpsWsdl\Classes\Ship\EEIFilingOptionType
     */
    public function setShipperFiled($ShipperFiled)
    {
      $this->ShipperFiled = $ShipperFiled;
      return $this;
    }

}
