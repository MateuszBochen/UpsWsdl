<?php

namespace UpsWsdl\Classes\Rate;

class ShipperType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ShipperNumber
     */
    protected $ShipperNumber = null;

    /**
     * @var AddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $Name
     * @param string $ShipperNumber
     * @param AddressType $Address
     */
    public function __construct($Name = null, $ShipperNumber = null, $Address = null)
    {
      $this->Name = $Name;
      $this->ShipperNumber = $ShipperNumber;
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
     * @return \UpsWsdl\Classes\Rate\ShipperType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperNumber()
    {
      return $this->ShipperNumber;
    }

    /**
     * @param string $ShipperNumber
     * @return \UpsWsdl\Classes\Rate\ShipperType
     */
    public function setShipperNumber($ShipperNumber)
    {
      $this->ShipperNumber = $ShipperNumber;
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
     * @return \UpsWsdl\Classes\Rate\ShipperType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
