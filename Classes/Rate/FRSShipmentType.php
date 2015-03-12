<?php

namespace UpsWsdl\Classes\Rate;

class FRSShipmentType
{

    /**
     * @var TransportationChargesType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @param TransportationChargesType $TransportationCharges
     */
    public function __construct($TransportationCharges = null)
    {
      $this->TransportationCharges = $TransportationCharges;
    }

    /**
     * @return TransportationChargesType
     */
    public function getTransportationCharges()
    {
      return $this->TransportationCharges;
    }

    /**
     * @param TransportationChargesType $TransportationCharges
     * @return \UpsWsdl\Classes\Rate\FRSShipmentType
     */
    public function setTransportationCharges($TransportationCharges)
    {
      $this->TransportationCharges = $TransportationCharges;
      return $this;
    }

}
