<?php

namespace UpsWsdl\Classes\Rate;

class PayerAddressType
{

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param string $PostalCode
     * @param string $CountryCode
     */
    public function __construct($PostalCode = null, $CountryCode = null)
    {
      $this->PostalCode = $PostalCode;
      $this->CountryCode = $CountryCode;
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
     * @return \UpsWsdl\Classes\Rate\PayerAddressType
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
     * @return \UpsWsdl\Classes\Rate\PayerAddressType
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
