<?php

namespace UpsWsdl\Classes\Rate;

class ShipToAddressType extends AddressType
{

    /**
     * @var string $ResidentialAddressIndicator
     */
    protected $ResidentialAddressIndicator = null;

    /**
     * @param string $AddressLine
     * @param string $City
     * @param string $StateProvinceCode
     * @param string $PostalCode
     * @param string $CountryCode
     * @param string $ResidentialAddressIndicator
     */
    public function __construct($AddressLine = null, $City = null, $StateProvinceCode = null, $PostalCode = null, $CountryCode = null, $ResidentialAddressIndicator = null)
    {
      parent::__construct($AddressLine, $City, $StateProvinceCode, $PostalCode, $CountryCode);
      $this->ResidentialAddressIndicator = $ResidentialAddressIndicator;
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
     * @return \UpsWsdl\Classes\Rate\ShipToAddressType
     */
    public function setResidentialAddressIndicator($ResidentialAddressIndicator)
    {
      $this->ResidentialAddressIndicator = $ResidentialAddressIndicator;
      return $this;
    }

}
