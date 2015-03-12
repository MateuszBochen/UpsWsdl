<?php

namespace UpsWsdl\Classes\Rate;

class NMFCCommodityType
{

    /**
     * @var string $PrimeCode
     */
    protected $PrimeCode = null;

    /**
     * @var string $SubCode
     */
    protected $SubCode = null;

    /**
     * @param string $PrimeCode
     * @param string $SubCode
     */
    public function __construct($PrimeCode = null, $SubCode = null)
    {
      $this->PrimeCode = $PrimeCode;
      $this->SubCode = $SubCode;
    }

    /**
     * @return string
     */
    public function getPrimeCode()
    {
      return $this->PrimeCode;
    }

    /**
     * @param string $PrimeCode
     * @return \UpsWsdl\Classes\Rate\NMFCCommodityType
     */
    public function setPrimeCode($PrimeCode)
    {
      $this->PrimeCode = $PrimeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubCode()
    {
      return $this->SubCode;
    }

    /**
     * @param string $SubCode
     * @return \UpsWsdl\Classes\Rate\NMFCCommodityType
     */
    public function setSubCode($SubCode)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

}
