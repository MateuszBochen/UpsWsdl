<?php

namespace UpsWsdl\Classes\Ship;

class ADLAddressType
{

    /**
     * @var string $AddressLine
     */
    protected $AddressLine = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $StateProvinceCode
     */
    protected $StateProvinceCode = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $ResidentialAddressIndicator
     */
    protected $ResidentialAddressIndicator = null;

    /**
     * @var string $POBoxIndicator
     */
    protected $POBoxIndicator = null;

    /**
     * @param string $AddressLine
     * @param string $City
     * @param string $StateProvinceCode
     * @param string $PostalCode
     * @param string $CountryCode
     * @param string $ResidentialAddressIndicator
     * @param string $POBoxIndicator
     */
    public function __construct($AddressLine = null, $City = null, $StateProvinceCode = null, $PostalCode = null, $CountryCode = null, $ResidentialAddressIndicator = null, $POBoxIndicator = null)
    {
      $this->AddressLine = $AddressLine;
      $this->City = $City;
      $this->StateProvinceCode = $StateProvinceCode;
      $this->PostalCode = $PostalCode;
      $this->CountryCode = $CountryCode;
      $this->ResidentialAddressIndicator = $ResidentialAddressIndicator;
      $this->POBoxIndicator = $POBoxIndicator;
    }

    /**
     * @return string
     */
    public function getAddressLine()
    {
      return $this->AddressLine;
    }

    /**
     * @param string $AddressLine
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setAddressLine($AddressLine)
    {
      $this->AddressLine = $AddressLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateProvinceCode()
    {
      return $this->StateProvinceCode;
    }

    /**
     * @param string $StateProvinceCode
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setStateProvinceCode($StateProvinceCode)
    {
      $this->StateProvinceCode = $StateProvinceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResidentialAddressIndicator()
    {
      return $this->ResidentialAddressIndicator;
    }

    /**
     * @param string $ResidentialAddressIndicator
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setResidentialAddressIndicator($ResidentialAddressIndicator)
    {
      $this->ResidentialAddressIndicator = $ResidentialAddressIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOBoxIndicator()
    {
      return $this->POBoxIndicator;
    }

    /**
     * @param string $POBoxIndicator
     * @return \UpsWsdl\Classes\Ship\ADLAddressType
     */
    public function setPOBoxIndicator($POBoxIndicator)
    {
      $this->POBoxIndicator = $POBoxIndicator;
      return $this;
    }

}
