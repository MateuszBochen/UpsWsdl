<?php

namespace UpsWsdl\Classes\Ship;

class IFChargesType
{

    /**
     * @var string $MonetaryValue
     */
    protected $MonetaryValue = null;

    /**
     * @param string $MonetaryValue
     */
    public function __construct($MonetaryValue = null)
    {
      $this->MonetaryValue = $MonetaryValue;
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
     * @return \UpsWsdl\Classes\Ship\IFChargesType
     */
    public function setMonetaryValue($MonetaryValue)
    {
      $this->MonetaryValue = $MonetaryValue;
      return $this;
    }

}
