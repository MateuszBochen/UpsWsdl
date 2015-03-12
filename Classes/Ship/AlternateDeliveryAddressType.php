<?php

namespace UpsWsdl\Classes\Ship;

class AlternateDeliveryAddressType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $AttentionName
     */
    protected $AttentionName = null;

    /**
     * @var string $UPSAccessPointID
     */
    protected $UPSAccessPointID = null;

    /**
     * @var ADLAddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $Name
     * @param string $AttentionName
     * @param string $UPSAccessPointID
     * @param ADLAddressType $Address
     */
    public function __construct($Name = null, $AttentionName = null, $UPSAccessPointID = null, $Address = null)
    {
      $this->Name = $Name;
      $this->AttentionName = $AttentionName;
      $this->UPSAccessPointID = $UPSAccessPointID;
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
     * @return \UpsWsdl\Classes\Ship\AlternateDeliveryAddressType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttentionName()
    {
      return $this->AttentionName;
    }

    /**
     * @param string $AttentionName
     * @return \UpsWsdl\Classes\Ship\AlternateDeliveryAddressType
     */
    public function setAttentionName($AttentionName)
    {
      $this->AttentionName = $AttentionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPSAccessPointID()
    {
      return $this->UPSAccessPointID;
    }

    /**
     * @param string $UPSAccessPointID
     * @return \UpsWsdl\Classes\Ship\AlternateDeliveryAddressType
     */
    public function setUPSAccessPointID($UPSAccessPointID)
    {
      $this->UPSAccessPointID = $UPSAccessPointID;
      return $this;
    }

    /**
     * @return ADLAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param ADLAddressType $Address
     * @return \UpsWsdl\Classes\Ship\AlternateDeliveryAddressType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
