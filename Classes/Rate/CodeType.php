<?php

namespace UpsWsdl\Classes\Rate;

class CodeType
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
     * @var string $Digest
     */
    protected $Digest = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param string $Digest
     */
    public function __construct($Code = null, $Description = null, $Digest = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
      $this->Digest = $Digest;
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
     * @return \UpsWsdl\Classes\Rate\CodeType
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
     * @return \UpsWsdl\Classes\Rate\CodeType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDigest()
    {
      return $this->Digest;
    }

    /**
     * @param string $Digest
     * @return \UpsWsdl\Classes\Rate\CodeType
     */
    public function setDigest($Digest)
    {
      $this->Digest = $Digest;
      return $this;
    }

}
