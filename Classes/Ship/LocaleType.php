<?php

namespace UpsWsdl\Classes\Ship;

class LocaleType
{

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $Dialect
     */
    protected $Dialect = null;

    /**
     * @param string $Language
     * @param string $Dialect
     */
    public function __construct($Language = null, $Dialect = null)
    {
      $this->Language = $Language;
      $this->Dialect = $Dialect;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \UpsWsdl\Classes\Ship\LocaleType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getDialect()
    {
      return $this->Dialect;
    }

    /**
     * @param string $Dialect
     * @return \UpsWsdl\Classes\Ship\LocaleType
     */
    public function setDialect($Dialect)
    {
      $this->Dialect = $Dialect;
      return $this;
    }

}
