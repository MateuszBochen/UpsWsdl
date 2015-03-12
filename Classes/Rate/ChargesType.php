<?php

namespace UpsWsdl\Classes\Rate;

class ChargesType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $MonetaryValue
     */
    protected $MonetaryValue = null;

    /**
     * @var string $SubType
     */
    protected $SubType = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param string $CurrencyCode
     * @param string $MonetaryValue
     * @param string $SubType
     */
    public function __construct($Code = null, $Description = null, $CurrencyCode = null, $MonetaryValue = null, $SubType = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
      $this->CurrencyCode = $CurrencyCode;
      $this->MonetaryValue = $MonetaryValue;
      $this->SubType = $SubType;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \UpsWsdl\Classes\Rate\ChargesType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \UpsWsdl\Classes\Rate\ChargesType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \UpsWsdl\Classes\Rate\ChargesType
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
     * @return \UpsWsdl\Classes\Rate\ChargesType
     */
    public function setMonetaryValue($MonetaryValue)
    {
      $this->MonetaryValue = $MonetaryValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
      return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return \UpsWsdl\Classes\Rate\ChargesType
     */
    public function setSubType($SubType)
    {
      $this->SubType = $SubType;
      return $this;
    }

}
