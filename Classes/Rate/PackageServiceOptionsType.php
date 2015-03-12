<?php

namespace UpsWsdl\Classes\Rate;

class PackageServiceOptionsType
{

    /**
     * @var DeliveryConfirmationType $DeliveryConfirmation
     */
    protected $DeliveryConfirmation = null;

    /**
     * @var PackageServiceOptionsAccessPointCODType $AccessPointCOD
     */
    protected $AccessPointCOD = null;

    /**
     * @var CODType $COD
     */
    protected $COD = null;

    /**
     * @var InsuredValueType $DeclaredValue
     */
    protected $DeclaredValue = null;

    /**
     * @var ShipperDeclaredValueType $ShipperDeclaredValue
     */
    protected $ShipperDeclaredValue = null;

    /**
     * @var string $ProactiveIndicator
     */
    protected $ProactiveIndicator = null;

    /**
     * @var InsuranceType $Insurance
     */
    protected $Insurance = null;

    /**
     * @var string $VerbalConfirmationIndicator
     */
    protected $VerbalConfirmationIndicator = null;

    /**
     * @var string $UPSPremiumCareIndicator
     */
    protected $UPSPremiumCareIndicator = null;

    /**
     * @var DryIceType $DryIce
     */
    protected $DryIce = null;

    /**
     * @param DeliveryConfirmationType $DeliveryConfirmation
     * @param PackageServiceOptionsAccessPointCODType $AccessPointCOD
     * @param CODType $COD
     * @param InsuredValueType $DeclaredValue
     * @param ShipperDeclaredValueType $ShipperDeclaredValue
     * @param string $ProactiveIndicator
     * @param InsuranceType $Insurance
     * @param string $VerbalConfirmationIndicator
     * @param string $UPSPremiumCareIndicator
     * @param DryIceType $DryIce
     */
    public function __construct($DeliveryConfirmation = null, $AccessPointCOD = null, $COD = null, $DeclaredValue = null, $ShipperDeclaredValue = null, $ProactiveIndicator = null, $Insurance = null, $VerbalConfirmationIndicator = null, $UPSPremiumCareIndicator = null, $DryIce = null)
    {
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      $this->AccessPointCOD = $AccessPointCOD;
      $this->COD = $COD;
      $this->DeclaredValue = $DeclaredValue;
      $this->ShipperDeclaredValue = $ShipperDeclaredValue;
      $this->ProactiveIndicator = $ProactiveIndicator;
      $this->Insurance = $Insurance;
      $this->VerbalConfirmationIndicator = $VerbalConfirmationIndicator;
      $this->UPSPremiumCareIndicator = $UPSPremiumCareIndicator;
      $this->DryIce = $DryIce;
    }

    /**
     * @return DeliveryConfirmationType
     */
    public function getDeliveryConfirmation()
    {
      return $this->DeliveryConfirmation;
    }

    /**
     * @param DeliveryConfirmationType $DeliveryConfirmation
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setDeliveryConfirmation($DeliveryConfirmation)
    {
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      return $this;
    }

    /**
     * @return PackageServiceOptionsAccessPointCODType
     */
    public function getAccessPointCOD()
    {
      return $this->AccessPointCOD;
    }

    /**
     * @param PackageServiceOptionsAccessPointCODType $AccessPointCOD
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setAccessPointCOD($AccessPointCOD)
    {
      $this->AccessPointCOD = $AccessPointCOD;
      return $this;
    }

    /**
     * @return CODType
     */
    public function getCOD()
    {
      return $this->COD;
    }

    /**
     * @param CODType $COD
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
      return $this;
    }

    /**
     * @return InsuredValueType
     */
    public function getDeclaredValue()
    {
      return $this->DeclaredValue;
    }

    /**
     * @param InsuredValueType $DeclaredValue
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setDeclaredValue($DeclaredValue)
    {
      $this->DeclaredValue = $DeclaredValue;
      return $this;
    }

    /**
     * @return ShipperDeclaredValueType
     */
    public function getShipperDeclaredValue()
    {
      return $this->ShipperDeclaredValue;
    }

    /**
     * @param ShipperDeclaredValueType $ShipperDeclaredValue
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setShipperDeclaredValue($ShipperDeclaredValue)
    {
      $this->ShipperDeclaredValue = $ShipperDeclaredValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getProactiveIndicator()
    {
      return $this->ProactiveIndicator;
    }

    /**
     * @param string $ProactiveIndicator
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setProactiveIndicator($ProactiveIndicator)
    {
      $this->ProactiveIndicator = $ProactiveIndicator;
      return $this;
    }

    /**
     * @return InsuranceType
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param InsuranceType $Insurance
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setInsurance($Insurance)
    {
      $this->Insurance = $Insurance;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerbalConfirmationIndicator()
    {
      return $this->VerbalConfirmationIndicator;
    }

    /**
     * @param string $VerbalConfirmationIndicator
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setVerbalConfirmationIndicator($VerbalConfirmationIndicator)
    {
      $this->VerbalConfirmationIndicator = $VerbalConfirmationIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPSPremiumCareIndicator()
    {
      return $this->UPSPremiumCareIndicator;
    }

    /**
     * @param string $UPSPremiumCareIndicator
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setUPSPremiumCareIndicator($UPSPremiumCareIndicator)
    {
      $this->UPSPremiumCareIndicator = $UPSPremiumCareIndicator;
      return $this;
    }

    /**
     * @return DryIceType
     */
    public function getDryIce()
    {
      return $this->DryIce;
    }

    /**
     * @param DryIceType $DryIce
     * @return \UpsWsdl\Classes\Rate\PackageServiceOptionsType
     */
    public function setDryIce($DryIce)
    {
      $this->DryIce = $DryIce;
      return $this;
    }

}
