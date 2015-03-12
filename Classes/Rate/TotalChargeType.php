<?php

namespace UpsWsdl\Classes\Rate;

class TotalChargeType
{

    /**
     * @var ChargesType[] $AccessorialCharges
     */
    protected $AccessorialCharges = null;

    /**
     * @var ChargesType[] $SurCharges
     */
    protected $SurCharges = null;

    /**
     * @var ChargesType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @var TaxChargeType[] $TaxCharges
     */
    protected $TaxCharges = null;

    /**
     * @var ChargesType $TotalCharge
     */
    protected $TotalCharge = null;

    /**
     * @var ChargesType $TotalChargesWithTaxes
     */
    protected $TotalChargesWithTaxes = null;

    /**
     * @param ChargesType[] $AccessorialCharges
     * @param ChargesType[] $SurCharges
     * @param ChargesType $TransportationCharges
     * @param TaxChargeType[] $TaxCharges
     * @param ChargesType $TotalCharge
     * @param ChargesType $TotalChargesWithTaxes
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
     * @return ChargesType[]
     */
    public function getAccessorialCharges()
    {
      return $this->AccessorialCharges;
    }

    /**
     * @param ChargesType[] $AccessorialCharges
     * @return \UpsWsdl\Classes\Rate\TotalChargeType
     */
    public function setAccessorialCharges(array $AccessorialCharges)
    {
      $this->AccessorialCharges = $AccessorialCharges;
      return $this;
    }

    /**
     * @return ChargesType[]
     */
    public function getSurCharges()
    {
      return $this->SurCharges;
    }

    /**
     * @param ChargesType[] $SurCharges
     * @return \UpsWsdl\Classes\Rate\TotalChargeType
     */
    public function setSurCharges(array $SurCharges)
    {
      $this->SurCharges = $SurCharges;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getTransportationCharges()
    {
      return $this->TransportationCharges;
    }

    /**
     * @param ChargesType $TransportationCharges
     * @return \UpsWsdl\Classes\Rate\TotalChargeType
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
     * @return \UpsWsdl\Classes\Rate\TotalChargeType
     */
    public function setTaxCharges(array $TaxCharges)
    {
      $this->TaxCharges = $TaxCharges;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getTotalCharge()
    {
      return $this->TotalCharge;
    }

    /**
     * @param ChargesType $TotalCharge
     * @return \UpsWsdl\Classes\Rate\TotalChargeType
     */
    public function setTotalCharge($TotalCharge)
    {
      $this->TotalCharge = $TotalCharge;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getTotalChargesWithTaxes()
    {
      return $this->TotalChargesWithTaxes;
    }

    /**
     * @param ChargesType $TotalChargesWithTaxes
     * @return \UpsWsdl\Classes\Rate\TotalChargeType
     */
    public function setTotalChargesWithTaxes($TotalChargesWithTaxes)
    {
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
      return $this;
    }

}
