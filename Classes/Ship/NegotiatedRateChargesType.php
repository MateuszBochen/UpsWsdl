<?php

namespace UpsWsdl\Classes\Ship;

class NegotiatedRateChargesType
{

    /**
     * @var ShipChargeType[] $AccessorialCharges
     */
    protected $AccessorialCharges = null;

    /**
     * @var ShipChargeType[] $SurCharges
     */
    protected $SurCharges = null;

    /**
     * @var ShipChargeType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @var TaxChargeType[] $TaxCharges
     */
    protected $TaxCharges = null;

    /**
     * @var ShipChargeType $TotalCharge
     */
    protected $TotalCharge = null;

    /**
     * @var ShipChargeType $TotalChargesWithTaxes
     */
    protected $TotalChargesWithTaxes = null;

    /**
     * @param ShipChargeType[] $AccessorialCharges
     * @param ShipChargeType[] $SurCharges
     * @param ShipChargeType $TransportationCharges
     * @param TaxChargeType[] $TaxCharges
     * @param ShipChargeType $TotalCharge
     * @param ShipChargeType $TotalChargesWithTaxes
     */
    public function __construct(array $AccessorialCharges = null, array $SurCharges = null, $TransportationCharges = null, array $TaxCharges = null, $TotalCharge = null, $TotalChargesWithTaxes = null)
    {
      $this->AccessorialCharges = $AccessorialCharges;
      $this->SurCharges = $SurCharges;
      $this->TransportationCharges = $TransportationCharges;
      $this->TaxCharges = $TaxCharges;
      $this->TotalCharge = $TotalCharge;
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
    }

    /**
     * @return ShipChargeType[]
     */
    public function getAccessorialCharges()
    {
      return $this->AccessorialCharges;
    }

    /**
     * @param ShipChargeType[] $AccessorialCharges
     * @return \UpsWsdl\Classes\Ship\NegotiatedRateChargesType
     */
    public function setAccessorialCharges(array $AccessorialCharges)
    {
      $this->AccessorialCharges = $AccessorialCharges;
      return $this;
    }

    /**
     * @return ShipChargeType[]
     */
    public function getSurCharges()
    {
      return $this->SurCharges;
    }

    /**
     * @param ShipChargeType[] $SurCharges
     * @return \UpsWsdl\Classes\Ship\NegotiatedRateChargesType
     */
    public function setSurCharges(array $SurCharges)
    {
      $this->SurCharges = $SurCharges;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getTransportationCharges()
    {
      return $this->TransportationCharges;
    }

    /**
     * @param ShipChargeType $TransportationCharges
     * @return \UpsWsdl\Classes\Ship\NegotiatedRateChargesType
     */
    public function setTransportationCharges($TransportationCharges)
    {
      $this->TransportationCharges = $TransportationCharges;
      return $this;
    }

    /**
     * @return TaxChargeType[]
     */
    public function getTaxCharges()
    {
      return $this->TaxCharges;
    }

    /**
     * @param TaxChargeType[] $TaxCharges
     * @return \UpsWsdl\Classes\Ship\NegotiatedRateChargesType
     */
    public function setTaxCharges(array $TaxCharges)
    {
      $this->TaxCharges = $TaxCharges;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getTotalCharge()
    {
      return $this->TotalCharge;
    }

    /**
     * @param ShipChargeType $TotalCharge
     * @return \UpsWsdl\Classes\Ship\NegotiatedRateChargesType
     */
    public function setTotalCharge($TotalCharge)
    {
      $this->TotalCharge = $TotalCharge;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getTotalChargesWithTaxes()
    {
      return $this->TotalChargesWithTaxes;
    }

    /**
     * @param ShipChargeType $TotalChargesWithTaxes
     * @return \UpsWsdl\Classes\Ship\NegotiatedRateChargesType
     */
    public function setTotalChargesWithTaxes($TotalChargesWithTaxes)
    {
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
      return $this;
    }

}
