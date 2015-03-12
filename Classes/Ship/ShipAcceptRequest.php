<?php

namespace UpsWsdl\Classes\Ship;

class ShipAcceptRequest
{

    /**
     * @var RequestType $Request
     */
    protected $Request = null;

    /**
     * @var string $ShipmentDigest
     */
    protected $ShipmentDigest = null;

    /**
     * @param RequestType $Request
     * @param string $ShipmentDigest
     */
    public function __construct($Request = null, $ShipmentDigest = null)
    {
      $this->Request = $Request;
      $this->ShipmentDigest = $ShipmentDigest;
    }

    /**
     * @return RequestType
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param RequestType $Request
     * @return \UpsWsdl\Classes\Ship\ShipAcceptRequest
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDigest()
    {
      return $this->ShipmentDigest;
    }

    /**
     * @param string $ShipmentDigest
     * @return \UpsWsdl\Classes\Ship\ShipAcceptRequest
     */
    public function setShipmentDigest($ShipmentDigest)
    {
      $this->ShipmentDigest = $ShipmentDigest;
      return $this;
    }

}
