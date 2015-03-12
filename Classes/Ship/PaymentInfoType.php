<?php

namespace UpsWsdl\Classes\Ship;

class PaymentInfoType
{

    /**
     * @var ShipmentChargeType $ShipmentCharge
     */
    protected $ShipmentCharge = null;

    /**
     * @var string $SplitDutyVATIndicator
     */
    protected $SplitDutyVATIndicator = null;

    /**
     * @param ShipmentChargeType $ShipmentCharge
     * @param string $SplitDutyVATIndicator
     */
    public function __construct($ShipmentCharge = null, $SplitDutyVATIndicator = null)
    {
      $this->ShipmentCharge = $ShipmentCharge;
      $this->SplitDutyVATIndicator = $SplitDutyVATIndicator;
    }

    /**
     * @return ShipmentChargeType
     */
    public function getShipmentCharge()
    {
      return $this->ShipmentCharge;
    }

    /**
     * @param ShipmentChargeType $ShipmentCharge
     * @return \UpsWsdl\Classes\Ship\PaymentInfoType
     */
    public function setShipmentCharge($ShipmentCharge)
    {
      $this->ShipmentCharge = $ShipmentCharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getSplitDutyVATIndicator()
    {
      return $this->SplitDutyVATIndicator;
    }

    /**
     * @param string $SplitDutyVATIndicator
     * @return \UpsWsdl\Classes\Ship\PaymentInfoType
     */
    public function setSplitDutyVATIndicator($SplitDutyVATIndicator)
    {
      $this->SplitDutyVATIndicator = $SplitDutyVATIndicator;
      return $this;
    }

}
