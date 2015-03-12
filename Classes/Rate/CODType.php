<?php

namespace UpsWsdl\Classes\Rate;

class CODType
{

    /**
     * @var string $CODFundsCode
     */
    protected $CODFundsCode = null;

    /**
     * @var CODAmountType $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @param string $CODFundsCode
     * @param CODAmountType $CODAmount
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
     * @return \UpsWsdl\Classes\Rate\CODType
     */
    public function setCODFundsCode($CODFundsCode)
    {
      $this->CODFundsCode = $CODFundsCode;
      return $this;
    }

    /**
     * @return CODAmountType
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param CODAmountType $CODAmount
     * @return \UpsWsdl\Classes\Rate\CODType
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

}
