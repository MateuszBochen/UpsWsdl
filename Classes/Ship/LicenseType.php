<?php

namespace UpsWsdl\Classes\Ship;

class LicenseType
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var string $ExceptionCode
     */
    protected $ExceptionCode = null;

    /**
     * @param string $Number
     * @param string $Date
     * @param string $ExceptionCode
     */
    public function __construct($Number = null, $Date = null, $ExceptionCode = null)
    {
      $this->Number = $Number;
      $this->Date = $Date;
      $this->ExceptionCode = $ExceptionCode;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \UpsWsdl\Classes\Ship\LicenseType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param string $Date
     * @return \UpsWsdl\Classes\Ship\LicenseType
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionCode()
    {
      return $this->ExceptionCode;
    }

    /**
     * @param string $ExceptionCode
     * @return \UpsWsdl\Classes\Ship\LicenseType
     */
    public function setExceptionCode($ExceptionCode)
    {
      $this->ExceptionCode = $ExceptionCode;
      return $this;
    }

}
