<?php

namespace UpsWsdl\Classes\Ship;

class ShipmentChargeType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var BillShipperType $BillShipper
     */
    protected $BillShipper = null;

    /**
     * @var BillReceiverType $BillReceiver
     */
    protected $BillReceiver = null;

    /**
     * @var BillThirdPartyChargeType $BillThirdParty
     */
    protected $BillThirdParty = null;

    /**
     * @var string $ConsigneeBilledIndicator
     */
    protected $ConsigneeBilledIndicator = null;

    /**
     * @param string $Type
     * @param BillShipperType $BillShipper
     * @param BillReceiverType $BillReceiver
     * @param BillThirdPartyChargeType $BillThirdParty
     * @param string $ConsigneeBilledIndicator
     */
    public function __construct($Type = null, $BillShipper = null, $BillReceiver = null, $BillThirdParty = null, $ConsigneeBilledIndicator = null)
    {
      $this->Type = $Type;
      $this->BillShipper = $BillShipper;
      $this->BillReceiver = $BillReceiver;
      $this->BillThirdParty = $BillThirdParty;
      $this->ConsigneeBilledIndicator = $ConsigneeBilledIndicator;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \UpsWsdl\Classes\Ship\ShipmentChargeType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return BillShipperType
     */
    public function getBillShipper()
    {
      return $this->BillShipper;
    }

    /**
     * @param BillShipperType $BillShipper
     * @return \UpsWsdl\Classes\Ship\ShipmentChargeType
     */
    public function setBillShipper($BillShipper)
    {
      $this->BillShipper = $BillShipper;
      return $this;
    }

    /**
     * @return BillReceiverType
     */
    public function getBillReceiver()
    {
      return $this->BillReceiver;
    }

    /**
     * @param BillReceiverType $BillReceiver
     * @return \UpsWsdl\Classes\Ship\ShipmentChargeType
     */
    public function setBillReceiver($BillReceiver)
    {
      $this->BillReceiver = $BillReceiver;
      return $this;
    }

    /**
     * @return BillThirdPartyChargeType
     */
    public function getBillThirdParty()
    {
      return $this->BillThirdParty;
    }

    /**
     * @param BillThirdPartyChargeType $BillThirdParty
     * @return \UpsWsdl\Classes\Ship\ShipmentChargeType
     */
    public function setBillThirdParty($BillThirdParty)
    {
      $this->BillThirdParty = $BillThirdParty;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeBilledIndicator()
    {
      return $this->ConsigneeBilledIndicator;
    }

    /**
     * @param string $ConsigneeBilledIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentChargeType
     */
    public function setConsigneeBilledIndicator($ConsigneeBilledIndicator)
    {
      $this->ConsigneeBilledIndicator = $ConsigneeBilledIndicator;
      return $this;
    }

}
