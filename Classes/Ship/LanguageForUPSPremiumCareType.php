<?php

namespace UpsWsdl\Classes\Ship;

class LanguageForUPSPremiumCareType
{

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param string $Language
     */
    public function __construct($Language = null)
    {
      $this->Language = $Language;
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
     * @return \UpsWsdl\Classes\Ship\LanguageForUPSPremiumCareType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
