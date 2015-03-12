<?php

namespace UpsWsdl\Classes\Rate;

class AlternateDeliveryAddressType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ADRType $Address
     */
    protected $Address = null;

    /**
     * @param string $Name
     * @param ADRType $Address
     */
    public function __construct($Name = null, $Address = null)
    {
      $this->Name = $Name;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \UpsWsdl\Classes\Rate\AlternateDeliveryAddressType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ADRType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ADRType $Address
     * @return \UpsWsdl\Classes\Rate\AlternateDeliveryAddressType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
