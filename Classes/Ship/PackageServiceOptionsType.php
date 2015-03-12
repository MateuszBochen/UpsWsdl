<?php

namespace UpsWsdl\Classes\Ship;

class PackageServiceOptionsType
{

    /**
     * @var DeliveryConfirmationType $DeliveryConfirmation
     */
    protected $DeliveryConfirmation = null;

    /**
     * @var PackageDeclaredValueType $DeclaredValue
     */
    protected $DeclaredValue = null;

    /**
     * @var PSOCODType $COD
     */
    protected $COD = null;

    /**
     * @var PackageServiceOptionsAccessPointCODType $AccessPointCOD
     */
    protected $AccessPointCOD = null;

    /**
     * @var VerbalConfirmationType $VerbalConfirmation
     */
    protected $VerbalConfirmation = null;

    /**
     * @var string $ShipperReleaseIndicator
     */
    protected $ShipperReleaseIndicator = null;

    /**
     * @var PSONotificationType $Notification
     */
    protected $Notification = null;

    /**
     * @var DryIceType $DryIce
     */
    protected $DryIce = null;

    /**
     * @var string $UPSPremiumCareIndicator
     */
    protected $UPSPremiumCareIndicator = null;

    /**
     * @param DeliveryConfirmationType $DeliveryConfirmation
     * @param PackageDeclaredValueType $DeclaredValue
     * @param PSOCODType $COD
     * @param PackageServiceOptionsAccessPointCODType $AccessPointCOD
     * @param VerbalConfirmationType $VerbalConfirmation
     * @param string $ShipperReleaseIndicator
     * @param PSONotificationType $Notification
     * @param DryIceType $DryIce
     * @param string $UPSPremiumCareIndicator
     */
    public function __construct($DeliveryConfirmation = null, $DeclaredValue = null, $COD = null, $AccessPointCOD = null, $VerbalConfirmation = null, $ShipperReleaseIndicator = null, $Notification = null, $DryIce = null, $UPSPremiumCareIndicator = null)
    {
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      $this->DeclaredValue = $DeclaredValue;
      $this->COD = $COD;
      $this->AccessPointCOD = $AccessPointCOD;
      $this->VerbalConfirmation = $VerbalConfirmation;
      $this->ShipperReleaseIndicator = $ShipperReleaseIndicator;
      $this->Notification = $Notification;
      $this->DryIce = $DryIce;
      $this->UPSPremiumCareIndicator = $UPSPremiumCareIndicator;
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
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setDeliveryConfirmation($DeliveryConfirmation)
    {
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      return $this;
    }

    /**
     * @return PackageDeclaredValueType
     */
    public function getDeclaredValue()
    {
      return $this->DeclaredValue;
    }

    /**
     * @param PackageDeclaredValueType $DeclaredValue
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setDeclaredValue($DeclaredValue)
    {
      $this->DeclaredValue = $DeclaredValue;
      return $this;
    }

    /**
     * @return PSOCODType
     */
    public function getCOD()
    {
      return $this->COD;
    }

    /**
     * @param PSOCODType $COD
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
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
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setAccessPointCOD($AccessPointCOD)
    {
      $this->AccessPointCOD = $AccessPointCOD;
      return $this;
    }

    /**
     * @return VerbalConfirmationType
     */
    public function getVerbalConfirmation()
    {
      return $this->VerbalConfirmation;
    }

    /**
     * @param VerbalConfirmationType $VerbalConfirmation
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setVerbalConfirmation($VerbalConfirmation)
    {
      $this->VerbalConfirmation = $VerbalConfirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperReleaseIndicator()
    {
      return $this->ShipperReleaseIndicator;
    }

    /**
     * @param string $ShipperReleaseIndicator
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setShipperReleaseIndicator($ShipperReleaseIndicator)
    {
      $this->ShipperReleaseIndicator = $ShipperReleaseIndicator;
      return $this;
    }

    /**
     * @return PSONotificationType
     */
    public function getNotification()
    {
      return $this->Notification;
    }

    /**
     * @param PSONotificationType $Notification
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setNotification($Notification)
    {
      $this->Notification = $Notification;
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
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setDryIce($DryIce)
    {
      $this->DryIce = $DryIce;
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
     * @return \UpsWsdl\Classes\Ship\PackageServiceOptionsType
     */
    public function setUPSPremiumCareIndicator($UPSPremiumCareIndicator)
    {
      $this->UPSPremiumCareIndicator = $UPSPremiumCareIndicator;
      return $this;
    }

}
