<?php

namespace UpsWsdl\Classes\Rate;

class RatedShipmentType
{

    /**
     * @var DisclaimerType[] $Disclaimer
     */
    protected $Disclaimer = null;

    /**
     * @var CodeDescriptionType $Service
     */
    protected $Service = null;

    /**
     * @var string $RateChart
     */
    protected $RateChart = null;

    /**
     * @var RatedShipmentInfoType[] $RatedShipmentAlert
     */
    protected $RatedShipmentAlert = null;

    /**
     * @var string $BillableWeightCalculationMethod
     */
    protected $BillableWeightCalculationMethod = null;

    /**
     * @var string $RatingMethod
     */
    protected $RatingMethod = null;

    /**
     * @var BillingWeightType $BillingWeight
     */
    protected $BillingWeight = null;

    /**
     * @var ChargesType $TransportationCharges
     */
    protected $TransportationCharges = null;

    /**
     * @var ChargesType[] $AccessorialCharges
     */
    protected $AccessorialCharges = null;

    /**
     * @var ChargesType[] $SurCharges
     */
    protected $SurCharges = null;

    /**
     * @var FRSShipmentType $FRSShipmentData
     */
    protected $FRSShipmentData = null;

    /**
     * @var ChargesType $ServiceOptionsCharges
     */
    protected $ServiceOptionsCharges = null;

    /**
     * @var TaxChargeType[] $TaxCharges
     */
    protected $TaxCharges = null;

    /**
     * @var ChargesType $TotalCharges
     */
    protected $TotalCharges = null;

    /**
     * @var ChargesType $TotalChargesWithTaxes
     */
    protected $TotalChargesWithTaxes = null;

    /**
     * @var TotalChargeType $NegotiatedRateCharges
     */
    protected $NegotiatedRateCharges = null;

    /**
     * @var GuaranteedDeliveryType $GuaranteedDelivery
     */
    protected $GuaranteedDelivery = null;

    /**
     * @var RatedPackageType[] $RatedPackage
     */
    protected $RatedPackage = null;

    /**
     * @param DisclaimerType[] $Disclaimer
     * @param CodeDescriptionType $Service
     * @param string $RateChart
     * @param RatedShipmentInfoType[] $RatedShipmentAlert
     * @param string $BillableWeightCalculationMethod
     * @param string $RatingMethod
     * @param BillingWeightType $BillingWeight
     * @param ChargesType $TransportationCharges
     * @param ChargesType[] $AccessorialCharges
     * @param ChargesType[] $SurCharges
     * @param FRSShipmentType $FRSShipmentData
     * @param ChargesType $ServiceOptionsCharges
     * @param TaxChargeType[] $TaxCharges
     * @param ChargesType $TotalCharges
     * @param ChargesType $TotalChargesWithTaxes
     * @param TotalChargeType $NegotiatedRateCharges
     * @param GuaranteedDeliveryType $GuaranteedDelivery
     * @param RatedPackageType[] $RatedPackage
     */
    public function __construct(array $Disclaimer = null, $Service = null, $RateChart = null, array $RatedShipmentAlert = null, $BillableWeightCalculationMethod = null, $RatingMethod = null, $BillingWeight = null, $TransportationCharges = null, array $AccessorialCharges = null, array $SurCharges = null, $FRSShipmentData = null, $ServiceOptionsCharges = null, array $TaxCharges = null, $TotalCharges = null, $TotalChargesWithTaxes = null, $NegotiatedRateCharges = null, $GuaranteedDelivery = null, array $RatedPackage = null)
    {
      $this->Disclaimer = $Disclaimer;
      $this->Service = $Service;
      $this->RateChart = $RateChart;
      $this->RatedShipmentAlert = $RatedShipmentAlert;
      $this->BillableWeightCalculationMethod = $BillableWeightCalculationMethod;
      $this->RatingMethod = $RatingMethod;
      $this->BillingWeight = $BillingWeight;
      $this->TransportationCharges = $TransportationCharges;
      $this->AccessorialCharges = $AccessorialCharges;
      $this->SurCharges = $SurCharges;
      $this->FRSShipmentData = $FRSShipmentData;
      $this->ServiceOptionsCharges = $ServiceOptionsCharges;
      $this->TaxCharges = $TaxCharges;
      $this->TotalCharges = $TotalCharges;
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
      $this->NegotiatedRateCharges = $NegotiatedRateCharges;
      $this->GuaranteedDelivery = $GuaranteedDelivery;
      $this->RatedPackage = $RatedPackage;
    }

    /**
     * @return DisclaimerType[]
     */
    public function getDisclaimer()
    {
      return $this->Disclaimer;
    }

    /**
     * @param DisclaimerType[] $Disclaimer
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setDisclaimer(array $Disclaimer)
    {
      $this->Disclaimer = $Disclaimer;
      return $this;
    }

    /**
     * @return CodeDescriptionType
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param CodeDescriptionType $Service
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setRateChart($RateChart)
    {
      $this->RateChart = $RateChart;
      return $this;
    }

    /**
     * @return RatedShipmentInfoType[]
     */
    public function getRatedShipmentAlert()
    {
      return $this->RatedShipmentAlert;
    }

    /**
     * @param RatedShipmentInfoType[] $RatedShipmentAlert
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setRatedShipmentAlert(array $RatedShipmentAlert)
    {
      $this->RatedShipmentAlert = $RatedShipmentAlert;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillableWeightCalculationMethod()
    {
      return $this->BillableWeightCalculationMethod;
    }

    /**
     * @param string $BillableWeightCalculationMethod
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setBillableWeightCalculationMethod($BillableWeightCalculationMethod)
    {
      $this->BillableWeightCalculationMethod = $BillableWeightCalculationMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatingMethod()
    {
      return $this->RatingMethod;
    }

    /**
     * @param string $RatingMethod
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setRatingMethod($RatingMethod)
    {
      $this->RatingMethod = $RatingMethod;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setBillingWeight($BillingWeight)
    {
      $this->BillingWeight = $BillingWeight;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setTransportationCharges($TransportationCharges)
    {
      $this->TransportationCharges = $TransportationCharges;
      return $this;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setSurCharges(array $SurCharges)
    {
      $this->SurCharges = $SurCharges;
      return $this;
    }

    /**
     * @return FRSShipmentType
     */
    public function getFRSShipmentData()
    {
      return $this->FRSShipmentData;
    }

    /**
     * @param FRSShipmentType $FRSShipmentData
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setFRSShipmentData($FRSShipmentData)
    {
      $this->FRSShipmentData = $FRSShipmentData;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setTaxCharges(array $TaxCharges)
    {
      $this->TaxCharges = $TaxCharges;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setTotalCharges($TotalCharges)
    {
      $this->TotalCharges = $TotalCharges;
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
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setTotalChargesWithTaxes($TotalChargesWithTaxes)
    {
      $this->TotalChargesWithTaxes = $TotalChargesWithTaxes;
      return $this;
    }

    /**
     * @return TotalChargeType
     */
    public function getNegotiatedRateCharges()
    {
      return $this->NegotiatedRateCharges;
    }

    /**
     * @param TotalChargeType $NegotiatedRateCharges
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setNegotiatedRateCharges($NegotiatedRateCharges)
    {
      $this->NegotiatedRateCharges = $NegotiatedRateCharges;
      return $this;
    }

    /**
     * @return GuaranteedDeliveryType
     */
    public function getGuaranteedDelivery()
    {
      return $this->GuaranteedDelivery;
    }

    /**
     * @param GuaranteedDeliveryType $GuaranteedDelivery
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setGuaranteedDelivery($GuaranteedDelivery)
    {
      $this->GuaranteedDelivery = $GuaranteedDelivery;
      return $this;
    }

    /**
     * @return RatedPackageType[]
     */
    public function getRatedPackage()
    {
      return $this->RatedPackage;
    }

    /**
     * @param RatedPackageType[] $RatedPackage
     * @return \UpsWsdl\Classes\Rate\RatedShipmentType
     */
    public function setRatedPackage(array $RatedPackage)
    {
      $this->RatedPackage = $RatedPackage;
      return $this;
    }

}
