<?php

namespace UpsWsdl\Classes\Ship;

class InternationalFormType
{

    /**
     * @var string $FormType
     */
    protected $FormType = null;

    /**
     * @var UserCreatedFormType $UserCreatedForm
     */
    protected $UserCreatedForm = null;

    /**
     * @var CN22FormType $CN22Form
     */
    protected $CN22Form = null;

    /**
     * @var UPSPremiumCareFormType $UPSPremiumCareForm
     */
    protected $UPSPremiumCareForm = null;

    /**
     * @var string $AdditionalDocumentIndicator
     */
    protected $AdditionalDocumentIndicator = null;

    /**
     * @var string $FormGroupIdName
     */
    protected $FormGroupIdName = null;

    /**
     * @var string $SEDFilingOption
     */
    protected $SEDFilingOption = null;

    /**
     * @var EEIFilingOptionType $EEIFilingOption
     */
    protected $EEIFilingOption = null;

    /**
     * @var ContactType $Contacts
     */
    protected $Contacts = null;

    /**
     * @var ProductType $Product
     */
    protected $Product = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

    /**
     * @var string $TermsOfShipment
     */
    protected $TermsOfShipment = null;

    /**
     * @var string $ReasonForExport
     */
    protected $ReasonForExport = null;

    /**
     * @var string $Comments
     */
    protected $Comments = null;

    /**
     * @var string $DeclarationStatement
     */
    protected $DeclarationStatement = null;

    /**
     * @var IFChargesType $Discount
     */
    protected $Discount = null;

    /**
     * @var IFChargesType $FreightCharges
     */
    protected $FreightCharges = null;

    /**
     * @var IFChargesType $InsuranceCharges
     */
    protected $InsuranceCharges = null;

    /**
     * @var OtherChargesType $OtherCharges
     */
    protected $OtherCharges = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var BlanketPeriodType $BlanketPeriod
     */
    protected $BlanketPeriod = null;

    /**
     * @var string $ExportDate
     */
    protected $ExportDate = null;

    /**
     * @var string $ExportingCarrier
     */
    protected $ExportingCarrier = null;

    /**
     * @var string $CarrierID
     */
    protected $CarrierID = null;

    /**
     * @var string $InBondCode
     */
    protected $InBondCode = null;

    /**
     * @var string $EntryNumber
     */
    protected $EntryNumber = null;

    /**
     * @var string $PointOfOrigin
     */
    protected $PointOfOrigin = null;

    /**
     * @var string $PointOfOriginType
     */
    protected $PointOfOriginType = null;

    /**
     * @var string $ModeOfTransport
     */
    protected $ModeOfTransport = null;

    /**
     * @var string $PortOfExport
     */
    protected $PortOfExport = null;

    /**
     * @var string $PortOfUnloading
     */
    protected $PortOfUnloading = null;

    /**
     * @var string $LoadingPier
     */
    protected $LoadingPier = null;

    /**
     * @var string $PartiesToTransaction
     */
    protected $PartiesToTransaction = null;

    /**
     * @var string $RoutedExportTransactionIndicator
     */
    protected $RoutedExportTransactionIndicator = null;

    /**
     * @var string $ContainerizedIndicator
     */
    protected $ContainerizedIndicator = null;

    /**
     * @var LicenseType $License
     */
    protected $License = null;

    /**
     * @var string $ECCNNumber
     */
    protected $ECCNNumber = null;

    /**
     * @var string $OverridePaperlessIndicator
     */
    protected $OverridePaperlessIndicator = null;

    /**
     * @var string $ShipperMemo
     */
    protected $ShipperMemo = null;

    /**
     * @var string $MultiCurrencyInvoiceLineTotal
     */
    protected $MultiCurrencyInvoiceLineTotal = null;

    /**
     * @param string $FormType
     * @param UserCreatedFormType $UserCreatedForm
     * @param CN22FormType $CN22Form
     * @param UPSPremiumCareFormType $UPSPremiumCareForm
     * @param string $AdditionalDocumentIndicator
     * @param string $FormGroupIdName
     * @param string $SEDFilingOption
     * @param EEIFilingOptionType $EEIFilingOption
     * @param ContactType $Contacts
     * @param ProductType $Product
     * @param string $InvoiceNumber
     * @param string $InvoiceDate
     * @param string $PurchaseOrderNumber
     * @param string $TermsOfShipment
     * @param string $ReasonForExport
     * @param string $Comments
     * @param string $DeclarationStatement
     * @param IFChargesType $Discount
     * @param IFChargesType $FreightCharges
     * @param IFChargesType $InsuranceCharges
     * @param OtherChargesType $OtherCharges
     * @param string $CurrencyCode
     * @param BlanketPeriodType $BlanketPeriod
     * @param string $ExportDate
     * @param string $ExportingCarrier
     * @param string $CarrierID
     * @param string $InBondCode
     * @param string $EntryNumber
     * @param string $PointOfOrigin
     * @param string $PointOfOriginType
     * @param string $ModeOfTransport
     * @param string $PortOfExport
     * @param string $PortOfUnloading
     * @param string $LoadingPier
     * @param string $PartiesToTransaction
     * @param string $RoutedExportTransactionIndicator
     * @param string $ContainerizedIndicator
     * @param LicenseType $License
     * @param string $ECCNNumber
     * @param string $OverridePaperlessIndicator
     * @param string $ShipperMemo
     * @param string $MultiCurrencyInvoiceLineTotal
     */
    public function __construct($FormType = null, $UserCreatedForm = null, $CN22Form = null, $UPSPremiumCareForm = null, $AdditionalDocumentIndicator = null, $FormGroupIdName = null, $SEDFilingOption = null, $EEIFilingOption = null, $Contacts = null, $Product = null, $InvoiceNumber = null, $InvoiceDate = null, $PurchaseOrderNumber = null, $TermsOfShipment = null, $ReasonForExport = null, $Comments = null, $DeclarationStatement = null, $Discount = null, $FreightCharges = null, $InsuranceCharges = null, $OtherCharges = null, $CurrencyCode = null, $BlanketPeriod = null, $ExportDate = null, $ExportingCarrier = null, $CarrierID = null, $InBondCode = null, $EntryNumber = null, $PointOfOrigin = null, $PointOfOriginType = null, $ModeOfTransport = null, $PortOfExport = null, $PortOfUnloading = null, $LoadingPier = null, $PartiesToTransaction = null, $RoutedExportTransactionIndicator = null, $ContainerizedIndicator = null, $License = null, $ECCNNumber = null, $OverridePaperlessIndicator = null, $ShipperMemo = null, $MultiCurrencyInvoiceLineTotal = null)
    {
      $this->FormType = $FormType;
      $this->UserCreatedForm = $UserCreatedForm;
      $this->CN22Form = $CN22Form;
      $this->UPSPremiumCareForm = $UPSPremiumCareForm;
      $this->AdditionalDocumentIndicator = $AdditionalDocumentIndicator;
      $this->FormGroupIdName = $FormGroupIdName;
      $this->SEDFilingOption = $SEDFilingOption;
      $this->EEIFilingOption = $EEIFilingOption;
      $this->Contacts = $Contacts;
      $this->Product = $Product;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->InvoiceDate = $InvoiceDate;
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      $this->TermsOfShipment = $TermsOfShipment;
      $this->ReasonForExport = $ReasonForExport;
      $this->Comments = $Comments;
      $this->DeclarationStatement = $DeclarationStatement;
      $this->Discount = $Discount;
      $this->FreightCharges = $FreightCharges;
      $this->InsuranceCharges = $InsuranceCharges;
      $this->OtherCharges = $OtherCharges;
      $this->CurrencyCode = $CurrencyCode;
      $this->BlanketPeriod = $BlanketPeriod;
      $this->ExportDate = $ExportDate;
      $this->ExportingCarrier = $ExportingCarrier;
      $this->CarrierID = $CarrierID;
      $this->InBondCode = $InBondCode;
      $this->EntryNumber = $EntryNumber;
      $this->PointOfOrigin = $PointOfOrigin;
      $this->PointOfOriginType = $PointOfOriginType;
      $this->ModeOfTransport = $ModeOfTransport;
      $this->PortOfExport = $PortOfExport;
      $this->PortOfUnloading = $PortOfUnloading;
      $this->LoadingPier = $LoadingPier;
      $this->PartiesToTransaction = $PartiesToTransaction;
      $this->RoutedExportTransactionIndicator = $RoutedExportTransactionIndicator;
      $this->ContainerizedIndicator = $ContainerizedIndicator;
      $this->License = $License;
      $this->ECCNNumber = $ECCNNumber;
      $this->OverridePaperlessIndicator = $OverridePaperlessIndicator;
      $this->ShipperMemo = $ShipperMemo;
      $this->MultiCurrencyInvoiceLineTotal = $MultiCurrencyInvoiceLineTotal;
    }

    /**
     * @return string
     */
    public function getFormType()
    {
      return $this->FormType;
    }

    /**
     * @param string $FormType
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setFormType($FormType)
    {
      $this->FormType = $FormType;
      return $this;
    }

    /**
     * @return UserCreatedFormType
     */
    public function getUserCreatedForm()
    {
      return $this->UserCreatedForm;
    }

    /**
     * @param UserCreatedFormType $UserCreatedForm
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setUserCreatedForm($UserCreatedForm)
    {
      $this->UserCreatedForm = $UserCreatedForm;
      return $this;
    }

    /**
     * @return CN22FormType
     */
    public function getCN22Form()
    {
      return $this->CN22Form;
    }

    /**
     * @param CN22FormType $CN22Form
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setCN22Form($CN22Form)
    {
      $this->CN22Form = $CN22Form;
      return $this;
    }

    /**
     * @return UPSPremiumCareFormType
     */
    public function getUPSPremiumCareForm()
    {
      return $this->UPSPremiumCareForm;
    }

    /**
     * @param UPSPremiumCareFormType $UPSPremiumCareForm
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setUPSPremiumCareForm($UPSPremiumCareForm)
    {
      $this->UPSPremiumCareForm = $UPSPremiumCareForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalDocumentIndicator()
    {
      return $this->AdditionalDocumentIndicator;
    }

    /**
     * @param string $AdditionalDocumentIndicator
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setAdditionalDocumentIndicator($AdditionalDocumentIndicator)
    {
      $this->AdditionalDocumentIndicator = $AdditionalDocumentIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormGroupIdName()
    {
      return $this->FormGroupIdName;
    }

    /**
     * @param string $FormGroupIdName
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setFormGroupIdName($FormGroupIdName)
    {
      $this->FormGroupIdName = $FormGroupIdName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEDFilingOption()
    {
      return $this->SEDFilingOption;
    }

    /**
     * @param string $SEDFilingOption
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setSEDFilingOption($SEDFilingOption)
    {
      $this->SEDFilingOption = $SEDFilingOption;
      return $this;
    }

    /**
     * @return EEIFilingOptionType
     */
    public function getEEIFilingOption()
    {
      return $this->EEIFilingOption;
    }

    /**
     * @param EEIFilingOptionType $EEIFilingOption
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setEEIFilingOption($EEIFilingOption)
    {
      $this->EEIFilingOption = $EEIFilingOption;
      return $this;
    }

    /**
     * @return ContactType
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ContactType $Contacts
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
      return $this;
    }

    /**
     * @return ProductType
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param ProductType $Product
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
      return $this->InvoiceDate;
    }

    /**
     * @param string $InvoiceDate
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setInvoiceDate($InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfShipment()
    {
      return $this->TermsOfShipment;
    }

    /**
     * @param string $TermsOfShipment
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setTermsOfShipment($TermsOfShipment)
    {
      $this->TermsOfShipment = $TermsOfShipment;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonForExport()
    {
      return $this->ReasonForExport;
    }

    /**
     * @param string $ReasonForExport
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setReasonForExport($ReasonForExport)
    {
      $this->ReasonForExport = $ReasonForExport;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeclarationStatement()
    {
      return $this->DeclarationStatement;
    }

    /**
     * @param string $DeclarationStatement
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setDeclarationStatement($DeclarationStatement)
    {
      $this->DeclarationStatement = $DeclarationStatement;
      return $this;
    }

    /**
     * @return IFChargesType
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param IFChargesType $Discount
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return IFChargesType
     */
    public function getFreightCharges()
    {
      return $this->FreightCharges;
    }

    /**
     * @param IFChargesType $FreightCharges
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setFreightCharges($FreightCharges)
    {
      $this->FreightCharges = $FreightCharges;
      return $this;
    }

    /**
     * @return IFChargesType
     */
    public function getInsuranceCharges()
    {
      return $this->InsuranceCharges;
    }

    /**
     * @param IFChargesType $InsuranceCharges
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setInsuranceCharges($InsuranceCharges)
    {
      $this->InsuranceCharges = $InsuranceCharges;
      return $this;
    }

    /**
     * @return OtherChargesType
     */
    public function getOtherCharges()
    {
      return $this->OtherCharges;
    }

    /**
     * @param OtherChargesType $OtherCharges
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setOtherCharges($OtherCharges)
    {
      $this->OtherCharges = $OtherCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return BlanketPeriodType
     */
    public function getBlanketPeriod()
    {
      return $this->BlanketPeriod;
    }

    /**
     * @param BlanketPeriodType $BlanketPeriod
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setBlanketPeriod($BlanketPeriod)
    {
      $this->BlanketPeriod = $BlanketPeriod;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportDate()
    {
      return $this->ExportDate;
    }

    /**
     * @param string $ExportDate
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setExportDate($ExportDate)
    {
      $this->ExportDate = $ExportDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportingCarrier()
    {
      return $this->ExportingCarrier;
    }

    /**
     * @param string $ExportingCarrier
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setExportingCarrier($ExportingCarrier)
    {
      $this->ExportingCarrier = $ExportingCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierID()
    {
      return $this->CarrierID;
    }

    /**
     * @param string $CarrierID
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setCarrierID($CarrierID)
    {
      $this->CarrierID = $CarrierID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInBondCode()
    {
      return $this->InBondCode;
    }

    /**
     * @param string $InBondCode
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setInBondCode($InBondCode)
    {
      $this->InBondCode = $InBondCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryNumber()
    {
      return $this->EntryNumber;
    }

    /**
     * @param string $EntryNumber
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setEntryNumber($EntryNumber)
    {
      $this->EntryNumber = $EntryNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfOrigin()
    {
      return $this->PointOfOrigin;
    }

    /**
     * @param string $PointOfOrigin
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setPointOfOrigin($PointOfOrigin)
    {
      $this->PointOfOrigin = $PointOfOrigin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfOriginType()
    {
      return $this->PointOfOriginType;
    }

    /**
     * @param string $PointOfOriginType
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setPointOfOriginType($PointOfOriginType)
    {
      $this->PointOfOriginType = $PointOfOriginType;
      return $this;
    }

    /**
     * @return string
     */
    public function getModeOfTransport()
    {
      return $this->ModeOfTransport;
    }

    /**
     * @param string $ModeOfTransport
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setModeOfTransport($ModeOfTransport)
    {
      $this->ModeOfTransport = $ModeOfTransport;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortOfExport()
    {
      return $this->PortOfExport;
    }

    /**
     * @param string $PortOfExport
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setPortOfExport($PortOfExport)
    {
      $this->PortOfExport = $PortOfExport;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortOfUnloading()
    {
      return $this->PortOfUnloading;
    }

    /**
     * @param string $PortOfUnloading
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setPortOfUnloading($PortOfUnloading)
    {
      $this->PortOfUnloading = $PortOfUnloading;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoadingPier()
    {
      return $this->LoadingPier;
    }

    /**
     * @param string $LoadingPier
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setLoadingPier($LoadingPier)
    {
      $this->LoadingPier = $LoadingPier;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartiesToTransaction()
    {
      return $this->PartiesToTransaction;
    }

    /**
     * @param string $PartiesToTransaction
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setPartiesToTransaction($PartiesToTransaction)
    {
      $this->PartiesToTransaction = $PartiesToTransaction;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutedExportTransactionIndicator()
    {
      return $this->RoutedExportTransactionIndicator;
    }

    /**
     * @param string $RoutedExportTransactionIndicator
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setRoutedExportTransactionIndicator($RoutedExportTransactionIndicator)
    {
      $this->RoutedExportTransactionIndicator = $RoutedExportTransactionIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerizedIndicator()
    {
      return $this->ContainerizedIndicator;
    }

    /**
     * @param string $ContainerizedIndicator
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setContainerizedIndicator($ContainerizedIndicator)
    {
      $this->ContainerizedIndicator = $ContainerizedIndicator;
      return $this;
    }

    /**
     * @return LicenseType
     */
    public function getLicense()
    {
      return $this->License;
    }

    /**
     * @param LicenseType $License
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setLicense($License)
    {
      $this->License = $License;
      return $this;
    }

    /**
     * @return string
     */
    public function getECCNNumber()
    {
      return $this->ECCNNumber;
    }

    /**
     * @param string $ECCNNumber
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setECCNNumber($ECCNNumber)
    {
      $this->ECCNNumber = $ECCNNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOverridePaperlessIndicator()
    {
      return $this->OverridePaperlessIndicator;
    }

    /**
     * @param string $OverridePaperlessIndicator
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setOverridePaperlessIndicator($OverridePaperlessIndicator)
    {
      $this->OverridePaperlessIndicator = $OverridePaperlessIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperMemo()
    {
      return $this->ShipperMemo;
    }

    /**
     * @param string $ShipperMemo
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setShipperMemo($ShipperMemo)
    {
      $this->ShipperMemo = $ShipperMemo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiCurrencyInvoiceLineTotal()
    {
      return $this->MultiCurrencyInvoiceLineTotal;
    }

    /**
     * @param string $MultiCurrencyInvoiceLineTotal
     * @return \UpsWsdl\Classes\Ship\InternationalFormType
     */
    public function setMultiCurrencyInvoiceLineTotal($MultiCurrencyInvoiceLineTotal)
    {
      $this->MultiCurrencyInvoiceLineTotal = $MultiCurrencyInvoiceLineTotal;
      return $this;
    }

}
