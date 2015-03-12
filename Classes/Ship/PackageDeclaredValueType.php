<?php

namespace UpsWsdl\Classes\Ship;

class PackageDeclaredValueType
{

    /**
     * @var DeclaredValueType $Type
     */
    protected $Type = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $MonetaryValue
     */
    protected $MonetaryValue = null;

    /**
     * @param DeclaredValueType $Type
     * @param string $CurrencyCode
     * @param string $MonetaryValue
     */
    public function __construct($Type = null, $CurrencyCode = null, $MonetaryValue = null)
    {
      $this->Type = $Type;
      $this->CurrencyCode = $CurrencyCode;
      $this->MonetaryValue = $MonetaryValue;
    }

    /**
     * @return DeclaredValueType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DeclaredValueType $Type
     * @return \UpsWsdl\Classes\Ship\PackageDeclaredValueType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \UpsWsdl\Classes\Ship\PackageDeclaredValueType
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMonetaryValue()
    {
      return $this->MonetaryValue;
    }

    /**
     * @param string $MonetaryValue
     * @return \UpsWsdl\Classes\Ship\PackageDeclaredValueType
     */
    public function setMonetaryValue($MonetaryValue)
    {
      $this->MonetaryValue = $MonetaryValue;
      return $this;
    }

}
