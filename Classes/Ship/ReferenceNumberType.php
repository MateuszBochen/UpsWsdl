<?php

namespace UpsWsdl\Classes\Ship;

class ReferenceNumberType
{

    /**
     * @var string $BarCodeIndicator
     */
    protected $BarCodeIndicator = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $BarCodeIndicator
     * @param string $Code
     * @param string $Value
     */
    public function __construct($BarCodeIndicator = null, $Code = null, $Value = null)
    {
      $this->BarCodeIndicator = $BarCodeIndicator;
      $this->Code = $Code;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getBarCodeIndicator()
    {
      return $this->BarCodeIndicator;
    }

    /**
     * @param string $BarCodeIndicator
     * @return \UpsWsdl\Classes\Ship\ReferenceNumberType
     */
    public function setBarCodeIndicator($BarCodeIndicator)
    {
      $this->BarCodeIndicator = $BarCodeIndicator;
      return $this;
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
     * @return \UpsWsdl\Classes\Ship\ReferenceNumberType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \UpsWsdl\Classes\Ship\ReferenceNumberType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
