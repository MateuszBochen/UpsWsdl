<?php

namespace UpsWsdl\Classes\Ship;

class ShipmentResultsType
{

    /**
     * @var DisclaimerType[] $Disclaimer
     */
    protected $Disclaimer = null;

    /**
     * @var ShipmentChargesType $ShipmentCharges
     */
    protected $ShipmentCharges = null;

    /**
     * @var NegotiatedRateChargesType $NegotiatedRateCharges
     */
    protected $NegotiatedRateCharges = null;

    /**
     * @var FRSShipmentDataType $FRSShipmentData
     */
    protected $FRSShipmentData = null;

    /**
     * @var string $RatingMethod
     */
    protected $RatingMethod = null;

    /**
     * @var string $BillableWeightCalculationMethod
     */
    protected $BillableWeightCalculationMethod = null;

    /**
     * @var BillingWeightType $BillingWeight
     */
    protected $BillingWeight = null;

    /**
     * @var string $ShipmentIdentificationNumber
     */
    protected $ShipmentIdentificationNumber = null;

    /**
     * @var string $ShipmentDigest
     */
    protected $ShipmentDigest = null;

    /**
     * @var PackageResultsType[] $PackageResults
     */
    protected $PackageResults = null;

    /**
     * @var ImageType[] $ControlLogReceipt
     */
    protected $ControlLogReceipt = null;

    /**
     * @var FormType $Form
     */
    protected $Form = null;

    /**
     * @var SCReportType $CODTurnInPage
     */
    protected $CODTurnInPage = null;

    /**
     * @var HighValueReportType $HighValueReport
     */
    protected $HighValueReport = null;

    /**
     * @var string $LabelURL
     */
    protected $LabelURL = null;

    /**
     * @var string $LocalLanguageLabelURL
     */
    protected $LocalLanguageLabelURL = null;

    /**
     * @var string $ReceiptURL
     */
    protected $ReceiptURL = null;

    /**
     * @var string $LocalLanguageReceiptURL
     */
    protected $LocalLanguageReceiptURL = null;

    /**
     * @param DisclaimerType[] $Disclaimer
     * @param ShipmentChargesType $ShipmentCharges
     * @param NegotiatedRateChargesType $NegotiatedRateCharges
     * @param FRSShipmentDataType $FRSShipmentData
     * @param string $RatingMethod
     * @param string $BillableWeightCalculationMethod
     * @param BillingWeightType $BillingWeight
     * @param string $ShipmentIdentificationNumber
     * @param string $ShipmentDigest
     * @param PackageResultsType[] $PackageResults
     * @param ImageType[] $ControlLogReceipt
     * @param FormType $Form
     * @param SCReportType $CODTurnInPage
     * @param HighValueReportType $HighValueReport
     * @param string $LabelURL
     * @param string $LocalLanguageLabelURL
     * @param string $ReceiptURL
     * @param string $LocalLanguageReceiptURL
     */
    public function __construct(array $Disclaimer = null, $ShipmentCharges = null, $NegotiatedRateCharges = null, $FRSShipmentData = null, $RatingMethod = null, $BillableWeightCalculationMethod = null, $BillingWeight = null, $ShipmentIdentificationNumber = null, $ShipmentDigest = null, array $PackageResults = null, array $ControlLogReceipt = null, $Form = null, $CODTurnInPage = null, $HighValueReport = null, $LabelURL = null, $LocalLanguageLabelURL = null, $ReceiptURL = null, $LocalLanguageReceiptURL = null)
    {
      $this->Disclaimer = $Disclaimer;
      $this->ShipmentCharges = $ShipmentCharges;
      $this->NegotiatedRateCharges = $NegotiatedRateCharges;
      $this->FRSShipmentData = $FRSShipmentData;
      $this->RatingMethod = $RatingMethod;
      $this->BillableWeightCalculationMethod = $BillableWeightCalculationMethod;
      $this->BillingWeight = $BillingWeight;
      $this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
      $this->ShipmentDigest = $ShipmentDigest;
      $this->PackageResults = $PackageResults;
      $this->ControlLogReceipt = $ControlLogReceipt;
      $this->Form = $Form;
      $this->CODTurnInPage = $CODTurnInPage;
      $this->HighValueReport = $HighValueReport;
      $this->LabelURL = $LabelURL;
      $this->LocalLanguageLabelURL = $LocalLanguageLabelURL;
      $this->ReceiptURL = $ReceiptURL;
      $this->LocalLanguageReceiptURL = $LocalLanguageReceiptURL;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setDisclaimer(array $Disclaimer)
    {
      $this->Disclaimer = $Disclaimer;
      return $this;
    }

    /**
     * @return ShipmentChargesType
     */
    public function getShipmentCharges()
    {
      return $this->ShipmentCharges;
    }

    /**
     * @param ShipmentChargesType $ShipmentCharges
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setShipmentCharges($ShipmentCharges)
    {
      $this->ShipmentCharges = $ShipmentCharges;
      return $this;
    }

    /**
     * @return NegotiatedRateChargesType
     */
    public function getNegotiatedRateCharges()
    {
      return $this->NegotiatedRateCharges;
    }

    /**
     * @param NegotiatedRateChargesType $NegotiatedRateCharges
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setNegotiatedRateCharges($NegotiatedRateCharges)
    {
      $this->NegotiatedRateCharges = $NegotiatedRateCharges;
      return $this;
    }

    /**
     * @return FRSShipmentDataType
     */
    public function getFRSShipmentData()
    {
      return $this->FRSShipmentData;
    }

    /**
     * @param FRSShipmentDataType $FRSShipmentData
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setFRSShipmentData($FRSShipmentData)
    {
      $this->FRSShipmentData = $FRSShipmentData;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setRatingMethod($RatingMethod)
    {
      $this->RatingMethod = $RatingMethod;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setBillableWeightCalculationMethod($BillableWeightCalculationMethod)
    {
      $this->BillableWeightCalculationMethod = $BillableWeightCalculationMethod;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setBillingWeight($BillingWeight)
    {
      $this->BillingWeight = $BillingWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentIdentificationNumber()
    {
      return $this->ShipmentIdentificationNumber;
    }

    /**
     * @param string $ShipmentIdentificationNumber
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setShipmentIdentificationNumber($ShipmentIdentificationNumber)
    {
      $this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDigest()
    {
      return $this->ShipmentDigest;
    }

    /**
     * @param string $ShipmentDigest
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setShipmentDigest($ShipmentDigest)
    {
      $this->ShipmentDigest = $ShipmentDigest;
      return $this;
    }

    /**
     * @return PackageResultsType[]
     */
    public function getPackageResults()
    {
      return $this->PackageResults;
    }

    /**
     * @param PackageResultsType[] $PackageResults
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setPackageResults(array $PackageResults)
    {
      $this->PackageResults = $PackageResults;
      return $this;
    }

    /**
     * @return ImageType[]
     */
    public function getControlLogReceipt()
    {
      return $this->ControlLogReceipt;
    }

    /**
     * @param ImageType[] $ControlLogReceipt
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setControlLogReceipt(array $ControlLogReceipt)
    {
      $this->ControlLogReceipt = $ControlLogReceipt;
      return $this;
    }

    /**
     * @return FormType
     */
    public function getForm()
    {
      return $this->Form;
    }

    /**
     * @param FormType $Form
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setForm($Form)
    {
      $this->Form = $Form;
      return $this;
    }

    /**
     * @return SCReportType
     */
    public function getCODTurnInPage()
    {
      return $this->CODTurnInPage;
    }

    /**
     * @param SCReportType $CODTurnInPage
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setCODTurnInPage($CODTurnInPage)
    {
      $this->CODTurnInPage = $CODTurnInPage;
      return $this;
    }

    /**
     * @return HighValueReportType
     */
    public function getHighValueReport()
    {
      return $this->HighValueReport;
    }

    /**
     * @param HighValueReportType $HighValueReport
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setHighValueReport($HighValueReport)
    {
      $this->HighValueReport = $HighValueReport;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelURL()
    {
      return $this->LabelURL;
    }

    /**
     * @param string $LabelURL
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setLabelURL($LabelURL)
    {
      $this->LabelURL = $LabelURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalLanguageLabelURL()
    {
      return $this->LocalLanguageLabelURL;
    }

    /**
     * @param string $LocalLanguageLabelURL
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setLocalLanguageLabelURL($LocalLanguageLabelURL)
    {
      $this->LocalLanguageLabelURL = $LocalLanguageLabelURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiptURL()
    {
      return $this->ReceiptURL;
    }

    /**
     * @param string $ReceiptURL
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setReceiptURL($ReceiptURL)
    {
      $this->ReceiptURL = $ReceiptURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalLanguageReceiptURL()
    {
      return $this->LocalLanguageReceiptURL;
    }

    /**
     * @param string $LocalLanguageReceiptURL
     * @return \UpsWsdl\Classes\Ship\ShipmentResultsType
     */
    public function setLocalLanguageReceiptURL($LocalLanguageReceiptURL)
    {
      $this->LocalLanguageReceiptURL = $LocalLanguageReceiptURL;
      return $this;
    }

}
