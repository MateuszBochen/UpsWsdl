<?php

namespace UpsWsdl\Classes\Rate;

class TaxChargeType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $MonetaryValue
     */
    protected $MonetaryValue = null;

    /**
     * @param string $Type
     * @param string $MonetaryValue
     */
    public function __construct($Type = null, $MonetaryValue = null)
    {
      $this->Type = $Type;
      $this->MonetaryValue = $MonetaryValue;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \UpsWsdl\Classes\Rate\TaxChargeType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \UpsWsdl\Classes\Rate\TaxChargeType
     */
    public function setMonetaryValue($MonetaryValue)
    {
      $this->MonetaryValue = $MonetaryValue;
      return $this;
    }

}
