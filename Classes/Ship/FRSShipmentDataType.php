<?php

namespace UpsWsdl\Classes\Ship;

class FRSShipmentDataType
{

    /**
     * @var TransportationChargeType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @param TransportationChargeType $TransportationCharges
     */
    public function __construct($TransportationCharges = null)
    {
      $this->TransportationCharges = $TransportationCharges;
    }

    /**
     * @return TransportationChargeType
     */
    public function getTransportationCharges()
    {
      return $this->TransportationCharges;
    }

    /**
     * @param TransportationChargeType $TransportationCharges
     * @return \UpsWsdl\Classes\Ship\FRSShipmentDataType
     */
    public function setTransportationCharges($TransportationCharges)
    {
      $this->TransportationCharges = $TransportationCharges;
      return $this;
    }

}
