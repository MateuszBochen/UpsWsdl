<?php

namespace UpsWsdl\Classes\Ship;

class OtherChargesType
{

    /**
     * @var string $MonetaryValue
     */
    protected $MonetaryValue = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param string $MonetaryValue
     * @param string $Description
     */
    public function __construct($MonetaryValue = null, $Description = null)
    {
      $this->MonetaryValue = $MonetaryValue;
      $this->Description = $Description;
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
     * @return \UpsWsdl\Classes\Ship\OtherChargesType
     */
    public function setMonetaryValue($MonetaryValue)
    {
      $this->MonetaryValue = $MonetaryValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \UpsWsdl\Classes\Ship\OtherChargesType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
