<?php

namespace UpsWsdl\Classes\Rate;

class InsuranceValueType
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $MonetaryValue
     */
    protected $MonetaryValue = null;

    /**
     * @param string $CurrencyCode
     * @param string $MonetaryValue
     */
    public function __construct($CurrencyCode = null, $MonetaryValue = null)
    {
      $this->CurrencyCode = $CurrencyCode;
      $this->MonetaryValue = $MonetaryValue;
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
     * @return \UpsWsdl\Classes\Rate\InsuranceValueType
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
     * @return \UpsWsdl\Classes\Rate\InsuranceValueType
     */
    public function setMonetaryValue($MonetaryValue)
    {
      $this->MonetaryValue = $MonetaryValue;
      return $this;
    }

}
