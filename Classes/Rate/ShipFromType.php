<?php

namespace UpsWsdl\Classes\Rate;

class ShipFromType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $Name
     * @param AddressType $Address
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
     * @return \UpsWsdl\Classes\Rate\ShipFromType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return \UpsWsdl\Classes\Rate\ShipFromType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
