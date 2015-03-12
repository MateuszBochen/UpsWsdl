<?php

namespace UpsWsdl\Classes\Ship;

class PSOCODType
{

    /**
     * @var string $CODFundsCode
     */
    protected $CODFundsCode = null;

    /**
     * @var CurrencyMonetaryType $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @param string $CODFundsCode
     * @param CurrencyMonetaryType $CODAmount
     */
    public function __construct($CODFundsCode = null, $CODAmount = null)
    {
      $this->CODFundsCode = $CODFundsCode;
      $this->CODAmount = $CODAmount;
    }

    /**
     * @return string
     */
    public function getCODFundsCode()
    {
      return $this->CODFundsCode;
    }

    /**
     * @param string $CODFundsCode
     * @return \UpsWsdl\Classes\Ship\PSOCODType
     */
    public function setCODFundsCode($CODFundsCode)
    {
      $this->CODFundsCode = $CODFundsCode;
      return $this;
    }

    /**
     * @return CurrencyMonetaryType
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param CurrencyMonetaryType $CODAmount
     * @return \UpsWsdl\Classes\Ship\PSOCODType
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

}
