<?php

namespace UpsWsdl\Classes\Ship;

class EEILicenseType
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $LicenseLineValue
     */
    protected $LicenseLineValue = null;

    /**
     * @var string $ECCNNumber
     */
    protected $ECCNNumber = null;

    /**
     * @param string $Number
     * @param string $Code
     * @param string $LicenseLineValue
     * @param string $ECCNNumber
     */
    public function __construct($Number = null, $Code = null, $LicenseLineValue = null, $ECCNNumber = null)
    {
      $this->Number = $Number;
      $this->Code = $Code;
      $this->LicenseLineValue = $LicenseLineValue;
      $this->ECCNNumber = $ECCNNumber;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \UpsWsdl\Classes\Ship\EEILicenseType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
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
     * @return \UpsWsdl\Classes\Ship\EEILicenseType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseLineValue()
    {
      return $this->LicenseLineValue;
    }

    /**
     * @param string $LicenseLineValue
     * @return \UpsWsdl\Classes\Ship\EEILicenseType
     */
    public function setLicenseLineValue($LicenseLineValue)
    {
      $this->LicenseLineValue = $LicenseLineValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getECCNNumber()
    {
      return $this->ECCNNumber;
    }

    /**
     * @param string $ECCNNumber
     * @return \UpsWsdl\Classes\Ship\EEILicenseType
     */
    public function setECCNNumber($ECCNNumber)
    {
      $this->ECCNNumber = $ECCNNumber;
      return $this;
    }

}
