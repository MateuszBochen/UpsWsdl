<?php

namespace UpsWsdl\Classes\Ship;

class ShipConfirmRequest
{

    /**
     * @var RequestType $Request
     */
    protected $Request = null;

    /**
     * @var ShipmentType $Shipment
     */
    protected $Shipment = null;

    /**
     * @var LabelSpecificationType $LabelSpecification
     */
    protected $LabelSpecification = null;

    /**
     * @var ReceiptSpecificationType $ReceiptSpecification
     */
    protected $ReceiptSpecification = null;

    /**
     * @param RequestType $Request
     * @param ShipmentType $Shipment
     * @param LabelSpecificationType $LabelSpecification
     * @param ReceiptSpecificationType $ReceiptSpecification
     */
    public function __construct($Request = null, $Shipment = null, $LabelSpecification = null, $ReceiptSpecification = null)
    {
      $this->Request = $Request;
      $this->Shipment = $Shipment;
      $this->LabelSpecification = $LabelSpecification;
      $this->ReceiptSpecification = $ReceiptSpecification;
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
     * @return \UpsWsdl\Classes\Ship\ShipConfirmRequest
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
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
     * @return \UpsWsdl\Classes\Ship\ShipConfirmRequest
     */
    public function setShipment($Shipment)
    {
      $this->Shipment = $Shipment;
      return $this;
    }

    /**
     * @return LabelSpecificationType
     */
    public function getLabelSpecification()
    {
      return $this->LabelSpecification;
    }

    /**
     * @param LabelSpecificationType $LabelSpecification
     * @return \UpsWsdl\Classes\Ship\ShipConfirmRequest
     */
    public function setLabelSpecification($LabelSpecification)
    {
      $this->LabelSpecification = $LabelSpecification;
      return $this;
    }

    /**
     * @return ReceiptSpecificationType
     */
    public function getReceiptSpecification()
    {
      return $this->ReceiptSpecification;
    }

    /**
     * @param ReceiptSpecificationType $ReceiptSpecification
     * @return \UpsWsdl\Classes\Ship\ShipConfirmRequest
     */
    public function setReceiptSpecification($ReceiptSpecification)
    {
      $this->ReceiptSpecification = $ReceiptSpecification;
      return $this;
    }

}
