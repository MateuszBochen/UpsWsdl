<?php

namespace UpsWsdl\Classes\Rate;

class TransportationChargesType
{

    /**
     * @var ChargesType $GrossCharge
     */
    protected $GrossCharge = null;

    /**
     * @var ChargesType $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var string $DiscountPercentage
     */
    protected $DiscountPercentage = null;

    /**
     * @var ChargesType $NetCharge
     */
    protected $NetCharge = null;

    /**
     * @param ChargesType $GrossCharge
     * @param ChargesType $DiscountAmount
     * @param string $DiscountPercentage
     * @param ChargesType $NetCharge
     */
    public function __construct($GrossCharge = null, $DiscountAmount = null, $DiscountPercentage = null, $NetCharge = null)
    {
      $this->GrossCharge = $GrossCharge;
      $this->DiscountAmount = $DiscountAmount;
      $this->DiscountPercentage = $DiscountPercentage;
      $this->NetCharge = $NetCharge;
    }

    /**
     * @return ChargesType
     */
    public function getGrossCharge()
    {
      return $this->GrossCharge;
    }

    /**
     * @param ChargesType $GrossCharge
     * @return \UpsWsdl\Classes\Rate\TransportationChargesType
     */
    public function setGrossCharge($GrossCharge)
    {
      $this->GrossCharge = $GrossCharge;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param ChargesType $DiscountAmount
     * @return \UpsWsdl\Classes\Rate\TransportationChargesType
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
     * @return \UpsWsdl\Classes\Rate\TransportationChargesType
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getNetCharge()
    {
      return $this->NetCharge;
    }

    /**
     * @param ChargesType $NetCharge
     * @return \UpsWsdl\Classes\Rate\TransportationChargesType
     */
    public function setNetCharge($NetCharge)
    {
      $this->NetCharge = $NetCharge;
      return $this;
    }

}
