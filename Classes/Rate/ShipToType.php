<?php

namespace UpsWsdl\Classes\Rate;

class ShipToType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ShipToAddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $Name
     * @param ShipToAddressType $Address
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
     * @return \UpsWsdl\Classes\Rate\ShipToType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ShipToAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ShipToAddressType $Address
     * @return \UpsWsdl\Classes\Rate\ShipToType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
