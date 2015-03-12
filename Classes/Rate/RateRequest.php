<?php

namespace UpsWsdl\Classes\Rate;

class RateRequest
{

    /**
     * @var RequestType $Request
     */
    protected $Request = null;

    /**
     * @var CodeDescriptionType $PickupType
     */
    protected $PickupType = null;

    /**
     * @var CodeDescriptionType $CustomerClassification
     */
    protected $CustomerClassification = null;

    /**
     * @var ShipmentType $Shipment
     */
    protected $Shipment = null;

    /**
     * @param RequestType $Request
     * @param CodeDescriptionType $PickupType
     * @param CodeDescriptionType $CustomerClassification
     * @param ShipmentType $Shipment
     */
    public function __construct($Request = null, $PickupType = null, $CustomerClassification = null, $Shipment = null)
    {
      $this->Request = $Request;
      $this->PickupType = $PickupType;
      $this->CustomerClassification = $CustomerClassification;
      $this->Shipment = $Shipment;
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
     * @return \UpsWsdl\Classes\Rate\RateRequest
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

    /**
     * @return CodeDescriptionType
     */
    public function getPickupType()
    {
      return $this->PickupType;
    }

    /**
     * @param CodeDescriptionType $PickupType
     * @return \UpsWsdl\Classes\Rate\RateRequest
     */
    public function setPickupType($PickupType)
    {
      $this->PickupType = $PickupType;
      return $this;
    }

    /**
     * @return CodeDescriptionType
     */
    public function getCustomerClassification()
    {
      return $this->CustomerClassification;
    }

    /**
     * @param CodeDescriptionType $CustomerClassification
     * @return \UpsWsdl\Classes\Rate\RateRequest
     */
    public function setCustomerClassification($CustomerClassification)
    {
      $this->CustomerClassification = $CustomerClassification;
      return $this;
    }

    /**
     * @return ShipmentType
     */
    public function getShipment()
    {
      return $this->Shipment;
    }

    /**
     * @param ShipmentType $Shipment
     * @return \UpsWsdl\Classes\Rate\RateRequest
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

}
