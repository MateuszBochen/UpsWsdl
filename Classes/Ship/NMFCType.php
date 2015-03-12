<?php

namespace UpsWsdl\Classes\Ship;

class NMFCType
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
     * @return \UpsWsdl\Classes\Ship\NMFCType
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
     * @return \UpsWsdl\Classes\Ship\NMFCType
     */
    public function setSubCode($SubCode)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

}
