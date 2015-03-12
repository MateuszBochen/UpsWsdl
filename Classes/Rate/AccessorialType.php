<?php

namespace UpsWsdl\Classes\Rate;

class AccessorialType
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
     * @param string $Code
     * @param string $Description
     */
    public function __construct($Code = null, $Description = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
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
     * @return \UpsWsdl\Classes\Rate\AccessorialType
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
     * @return \UpsWsdl\Classes\Rate\AccessorialType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
