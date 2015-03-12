<?php

namespace UpsWsdl\Classes\Ship;

class ContactInfoType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ShipPhoneType $Phone
     */
    protected $Phone = null;

    /**
     * @param string $Name
     * @param ShipPhoneType $Phone
     */
    public function __construct($Name = null, $Phone = null)
    {
      $this->Name = $Name;
      $this->Phone = $Phone;
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
     * @return \UpsWsdl\Classes\Ship\ContactInfoType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ShipPhoneType
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param ShipPhoneType $Phone
     * @return \UpsWsdl\Classes\Ship\ContactInfoType
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

}
