<?php

namespace UpsWsdl\Classes\Ship;

class TransportationChargeType
{

    /**
     * @var ShipChargeType $GrossCharge
     */
    protected $GrossCharge = null;

    /**
     * @var ShipChargeType $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var string $DiscountPercentage
     */
    protected $DiscountPercentage = null;

    /**
     * @var ShipChargeType $NetCharge
     */
    protected $NetCharge = null;

    /**
     * @param ShipChargeType $GrossCharge
     * @param ShipChargeType $DiscountAmount
     * @param string $DiscountPercentage
     * @param ShipChargeType $NetCharge
     */
    public function __construct($GrossCharge = null, $DiscountAmount = null, $DiscountPercentage = null, $NetCharge = null)
    {
      $this->GrossCharge = $GrossCharge;
      $this->DiscountAmount = $DiscountAmount;
      $this->DiscountPercentage = $DiscountPercentage;
      $this->NetCharge = $NetCharge;
    }

    /**
     * @return ShipChargeType
     */
    public function getGrossCharge()
    {
      return $this->GrossCharge;
    }

    /**
     * @param ShipChargeType $GrossCharge
     * @return \UpsWsdl\Classes\Ship\TransportationChargeType
     */
    public function setGrossCharge($GrossCharge)
    {
      $this->GrossCharge = $GrossCharge;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param ShipChargeType $DiscountAmount
     * @return \UpsWsdl\Classes\Ship\TransportationChargeType
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountPercentage()
    {
      return $this->DiscountPercentage;
    }

    /**
     * @param string $DiscountPercentage
     * @return \UpsWsdl\Classes\Ship\TransportationChargeType
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getNetCharge()
    {
      return $this->NetCharge;
    }

    /**
     * @param ShipChargeType $NetCharge
     * @return \UpsWsdl\Classes\Ship\TransportationChargeType
     */
    public function setNetCharge($NetCharge)
    {
      $this->NetCharge = $NetCharge;
      return $this;
    }

}
