<?php

namespace UpsWsdl\Classes\Ship;

class ShipmentChargesType
{

    /**
     * @var string $RateChart
     */
    protected $RateChart = null;

    /**
     * @var ShipChargeType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @var ShipChargeType[] $AccessorialCharges
     */
    protected $AccessorialCharges = null;

    /**
     * @var ShipChargeType[] $SurCharges
     */
    protected $SurCharges = null;

    /**
     * @var ShipChargeType $ServiceOptionsCharges
     */
    protected $ServiceOptionsCharges = null;

    /**
     * @var TaxChargeType[] $TaxCharges
     */
    protected $TaxCharges = null;

    /**
     * @var ShipChargeType $TotalCharges
     */
    protected $TotalCharges = null;

    /**
     * @var ShipChargeType $TotalChargesWithTaxes
     */
    protected $TotalChargesWithTaxes = null;

    /**
     * @param string $RateChart
     * @param ShipChargeType $TransportationCharges
     * @param ShipChargeType[] $AccessorialCharges
     * @param ShipChargeType[] $SurCharges
     * @param ShipChargeType $ServiceOptionsCharges
     * @param TaxChargeType[] $TaxCharges
     * @param ShipChargeType $TotalCharges
     * @param ShipChargeType $TotalChargesWithTaxes
     */
    public function __construct($RateChart = null, $TransportationCharges = null, array $AccessorialCharges = null, array $SurCharges = null, $ServiceOptionsCharges = null, array $TaxCharges = null, $TotalCharges = null, $TotalChargesWithTaxes = null)
    {
      $this->RateChart = $RateChart;
      $this->TransportationCharges = $TransportationCharges;
      $this->AccessorialCharges = $AccessorialCharges;
      $this->SurCharges = $SurCharges;
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
      $this->TaxCharges = $TaxCharges;
      $this->TotalCharges = $TotalCharges;
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
    }

    /**
     * @return string
     */
    public function getRateChart()
    {
      return $this->RateChart;
    }

    /**
     * @param string $RateChart
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setRateChart($RateChart)
    {
      $this->RateChart = $RateChart;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setTransportationCharges($TransportationCharges)
    {
      $this->TransportationCharges = $TransportationCharges;
      return $this;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
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
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setSurCharges(array $SurCharges)
    {
      $this->SurCharges = $SurCharges;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setServiceOptionsCharges($ServiceOptionsCharges)
    {
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setTaxCharges(array $TaxCharges)
    {
      $this->TaxCharges = $TaxCharges;
      return $this;
    }

    /**
     * @return ShipChargeType
     */
    public function getTotalCharges()
    {
      return $this->TotalCharges;
    }

    /**
     * @param ShipChargeType $TotalCharges
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setTotalCharges($TotalCharges)
    {
      $this->TotalCharges = $TotalCharges;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentChargesType
     */
    public function setTotalChargesWithTaxes($TotalChargesWithTaxes)
    {
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
      return $this;
    }

}
