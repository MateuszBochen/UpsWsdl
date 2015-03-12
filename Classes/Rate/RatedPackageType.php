<?php

namespace UpsWsdl\Classes\Rate;

class RatedPackageType
{

    /**
     * @var ChargesType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @var ChargesType $ServiceOptionsCharges
     */
    protected $ServiceOptionsCharges = null;

    /**
     * @var ChargesType $TotalCharges
     */
    protected $TotalCharges = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var BillingWeightType $BillingWeight
     */
    protected $BillingWeight = null;

    /**
     * @var AccessorialType[] $Accessorial
     */
    protected $Accessorial = null;

    /**
     * @param ChargesType $TransportationCharges
     * @param ChargesType $ServiceOptionsCharges
     * @param ChargesType $TotalCharges
     * @param string $Weight
     * @param BillingWeightType $BillingWeight
     * @param AccessorialType[] $Accessorial
     */
    public function __construct($TransportationCharges = null, $ServiceOptionsCharges = null, $TotalCharges = null, $Weight = null, $BillingWeight = null, array $Accessorial = null)
    {
      $this->TransportationCharges = $TransportationCharges;
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
      $this->TotalCharges = $TotalCharges;
      $this->Weight = $Weight;
      $this->BillingWeight = $BillingWeight;
      $this->Accessorial = $Accessorial;
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
     * @return \UpsWsdl\Classes\Rate\RatedPackageType
     */
    public function setTransportationCharges($TransportationCharges)
    {
      $this->TransportationCharges = $TransportationCharges;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getServiceOptionsCharges()
    {
      return $this->ServiceOptionsCharges;
    }

    /**
     * @param ChargesType $ServiceOptionsCharges
     * @return \UpsWsdl\Classes\Rate\RatedPackageType
     */
    public function setServiceOptionsCharges($ServiceOptionsCharges)
    {
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
      return $this;
    }

    /**
     * @return ChargesType
     */
    public function getTotalCharges()
    {
      return $this->TotalCharges;
    }

    /**
     * @param ChargesType $TotalCharges
     * @return \UpsWsdl\Classes\Rate\RatedPackageType
     */
    public function setTotalCharges($TotalCharges)
    {
      $this->TotalCharges = $TotalCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \UpsWsdl\Classes\Rate\RatedPackageType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return BillingWeightType
     */
    public function getBillingWeight()
    {
      return $this->BillingWeight;
    }

    /**
     * @param BillingWeightType $BillingWeight
     * @return \UpsWsdl\Classes\Rate\RatedPackageType
     */
    public function setBillingWeight($BillingWeight)
    {
      $this->BillingWeight = $BillingWeight;
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
     * @return \UpsWsdl\Classes\Rate\RatedPackageType
     */
    public function setAccessorial(array $Accessorial)
    {
      $this->Accessorial = $Accessorial;
      return $this;
    }

}
