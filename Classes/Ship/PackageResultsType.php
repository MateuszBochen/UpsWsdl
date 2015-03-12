<?php

namespace UpsWsdl\Classes\Ship;

class PackageResultsType
{

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var ShipChargeType $ServiceOptionsCharges
     */
    protected $ServiceOptionsCharges = null;

    /**
     * @var LabelType $ShippingLabel
     */
    protected $ShippingLabel = null;

    /**
     * @var ReceiptType $ShippingReceipt
     */
    protected $ShippingReceipt = null;

    /**
     * @var string $USPSPICNumber
     */
    protected $USPSPICNumber = null;

    /**
     * @var string $CN22Number
     */
    protected $CN22Number = null;

    /**
     * @var AccessorialType[] $Accessorial
     */
    protected $Accessorial = null;

    /**
     * @var FormType $Form
     */
    protected $Form = null;

    /**
     * @param string $TrackingNumber
     * @param ShipChargeType $ServiceOptionsCharges
     * @param LabelType $ShippingLabel
     * @param ReceiptType $ShippingReceipt
     * @param string $USPSPICNumber
     * @param string $CN22Number
     * @param AccessorialType[] $Accessorial
     * @param FormType $Form
     */
    public function __construct($TrackingNumber = null, $ServiceOptionsCharges = null, $ShippingLabel = null, $ShippingReceipt = null, $USPSPICNumber = null, $CN22Number = null, array $Accessorial = null, $Form = null)
    {
      $this->TrackingNumber = $TrackingNumber;
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
      $this->ShippingLabel = $ShippingLabel;
      $this->ShippingReceipt = $ShippingReceipt;
      $this->USPSPICNumber = $USPSPICNumber;
      $this->CN22Number = $CN22Number;
      $this->Accessorial = $Accessorial;
      $this->Form = $Form;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getServiceOptionsCharges()
    {
      return $this->ServiceOptionsCharges;
    }

    /**
     * @param ShipChargeType $ServiceOptionsCharges
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setServiceOptionsCharges($ServiceOptionsCharges)
    {
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
      return $this;
    }

    /**
     * @return LabelType
     */
    public function getShippingLabel()
    {
      return $this->ShippingLabel;
    }

    /**
     * @param LabelType $ShippingLabel
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setShippingLabel($ShippingLabel)
    {
      $this->ShippingLabel = $ShippingLabel;
      return $this;
    }

    /**
     * @return ReceiptType
     */
    public function getShippingReceipt()
    {
      return $this->ShippingReceipt;
    }

    /**
     * @param ReceiptType $ShippingReceipt
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setShippingReceipt($ShippingReceipt)
    {
      $this->ShippingReceipt = $ShippingReceipt;
      return $this;
    }

    /**
     * @return string
     */
    public function getUSPSPICNumber()
    {
      return $this->USPSPICNumber;
    }

    /**
     * @param string $USPSPICNumber
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setUSPSPICNumber($USPSPICNumber)
    {
      $this->USPSPICNumber = $USPSPICNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22Number()
    {
      return $this->CN22Number;
    }

    /**
     * @param string $CN22Number
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setCN22Number($CN22Number)
    {
      $this->CN22Number = $CN22Number;
      return $this;
    }

    /**
     * @return AccessorialType[]
     */
    public function getAccessorial()
    {
      return $this->Accessorial;
    }

    /**
     * @param AccessorialType[] $Accessorial
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setAccessorial(array $Accessorial)
    {
      $this->Accessorial = $Accessorial;
      return $this;
    }

    /**
     * @return FormType
     */
    public function getForm()
    {
      return $this->Form;
    }

    /**
     * @param FormType $Form
     * @return \UpsWsdl\Classes\Ship\PackageResultsType
     */
    public function setForm($Form)
    {
      $this->Form = $Form;
      return $this;
    }

}
