<?php

namespace UpsWsdl\Classes\Ship;

class AddressType
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
     * @var string $Town
     */
    protected $Town = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param string $AddressLine
     * @param string $City
     * @param string $StateProvinceCode
     * @param string $Town
     * @param string $PostalCode
     * @param string $CountryCode
     */
    public function __construct($AddressLine = null, $City = null, $StateProvinceCode = null, $Town = null, $PostalCode = null, $CountryCode = null)
    {
      $this->AddressLine = $AddressLine;
      $this->City = $City;
      $this->StateProvinceCode = $StateProvinceCode;
      $this->Town = $Town;
      $this->PostalCode = $PostalCode;
      $this->CountryCode = $CountryCode;
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
     * @return \UpsWsdl\Classes\Ship\AddressType
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
     * @return \UpsWsdl\Classes\Ship\AddressType
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
     * @return \UpsWsdl\Classes\Ship\AddressType
     */
    public function setStateProvinceCode($StateProvinceCode)
    {
      $this->StateProvinceCode = $StateProvinceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTown()
    {
      return $this->Town;
    }

    /**
     * @param string $Town
     * @return \UpsWsdl\Classes\Ship\AddressType
     */
    public function setTown($Town)
    {
      $this->Town = $Town;
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
     * @return \UpsWsdl\Classes\Ship\AddressType
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
     * @return \UpsWsdl\Classes\Ship\AddressType
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
