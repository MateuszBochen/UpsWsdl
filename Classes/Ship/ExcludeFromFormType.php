<?php

namespace UpsWsdl\Classes\Ship;

class ExcludeFromFormType
{

    /**
     * @var string[] $FormType
     */
    protected $FormType = null;

    /**
     * @param string[] $FormType
     */
    public function __construct(array $FormType = null)
    {
      $this->FormType = $FormType;
    }

    /**
     * @return string[]
     */
    public function getFormType()
    {
      return $this->FormType;
    }

    /**
     * @param string[] $FormType
     * @return \UpsWsdl\Classes\Ship\ExcludeFromFormType
     */
    public function setFormType(array $FormType)
    {
      $this->FormType = $FormType;
      return $this;
    }

}
