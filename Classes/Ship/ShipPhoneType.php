<?php

namespace UpsWsdl\Classes\Ship;

class ShipPhoneType
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Extension
     */
    protected $Extension = null;

    /**
     * @param string $Number
     * @param string $Extension
     */
    public function __construct($Number = null, $Extension = null)
    {
      $this->Number = $Number;
      $this->Extension = $Extension;
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
     * @return \UpsWsdl\Classes\Ship\ShipPhoneType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return \UpsWsdl\Classes\Ship\ShipPhoneType
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
