<?php

namespace UpsWsdl\Classes\Ship;

class ShipmentType extends ShipmentServiceOptionsType
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ReturnServiceType $ReturnService
     */
    protected $ReturnService = null;

    /**
     * @var string $DocumentsOnlyIndicator
     */
    protected $DocumentsOnlyIndicator = null;

    /**
     * @var ShipperType $Shipper
     */
    protected $Shipper = null;

    /**
     * @var ShipToType $ShipTo
     */
    protected $ShipTo = null;

    /**
     * @var AlternateDeliveryAddressType $AlternateDeliveryAddress
     */
    protected $AlternateDeliveryAddress = null;

    /**
     * @var ShipFromType $ShipFrom
     */
    protected $ShipFrom = null;

    /**
     * @var PaymentInfoType $PaymentInformation
     */
    protected $PaymentInformation = null;

    /**
     * @var FRSPaymentInfoType $FRSPaymentInformation
     */
    protected $FRSPaymentInformation = null;

    /**
     * @var string $GoodsNotInFreeCirculationIndicator
     */
    protected $GoodsNotInFreeCirculationIndicator = null;

    /**
     * @var RateInfoType $ShipmentRatingOptions
     */
    protected $ShipmentRatingOptions = null;

    /**
     * @var string $MovementReferenceNumber
     */
    protected $MovementReferenceNumber = null;

    /**
     * @var ReferenceNumberType $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var ServiceType $Service
     */
    protected $Service = null;

    /**
     * @var CurrencyMonetaryType $InvoiceLineTotal
     */
    protected $InvoiceLineTotal = null;

    /**
     * @var string $NumOfPiecesInShipment
     */
    protected $NumOfPiecesInShipment = null;

    /**
     * @var string $USPSEndorsement
     */
    protected $USPSEndorsement = null;

    /**
     * @var string $MILabelCN22Indicator
     */
    protected $MILabelCN22Indicator = null;

    /**
     * @var string $SubClassification
     */
    protected $SubClassification = null;

    /**
     * @var string $CostCenter
     */
    protected $CostCenter = null;

    /**
     * @var string $PackageID
     */
    protected $PackageID = null;

    /**
     * @var string $IrregularIndicator
     */
    protected $IrregularIndicator = null;

    /**
     * @var string $ItemizedChargesRequestedIndicator
     */
    protected $ItemizedChargesRequestedIndicator = null;

    /**
     * @var IndicationType[] $ShipmentIndicationType
     */
    protected $ShipmentIndicationType = null;

    /**
     * @var string $RatingMethodRequestedIndicator
     */
    protected $RatingMethodRequestedIndicator = null;

    /**
     * @var string $TaxInformationIndicator
     */
    protected $TaxInformationIndicator = null;

    /**
     * @var ShipmentServiceOptions $ShipmentServiceOptions
     */
    protected $ShipmentServiceOptions = null;

    /**
     * @var PackageType[] $Package
     */
    protected $Package = null;

    /**
     * @param string $SaturdayDeliveryIndicator
     * @param CODType $COD
     * @param ShipmentServiceOptionsAccessPointCODType $AccessPointCOD
     * @param string $DeliverToAddresseeOnlyIndicator
     * @param NotificationType[] $Notification
     * @param LabelDeliveryType $LabelDelivery
     * @param InternationalFormType $InternationalForms
     * @param DeliveryConfirmationType $DeliveryConfirmation
     * @param string $ReturnOfDocumentIndicator
     * @param string $ImportControlIndicator
     * @param LabelMethodType $LabelMethod
     * @param string $CommercialInvoiceRemovalIndicator
     * @param string $UPScarbonneutralIndicator
     * @param PreAlertNotificationType[] $PreAlertNotification
     * @param string $ExchangeForwardIndicator
     * @param string $HoldForPickupIndicator
     * @param string $DropoffAtUPSFacilityIndicator
     * @param string $LiftGateForPickUpIndicator
     * @param string $LiftGateForDeliveryIndicator
     * @param string $SDLShipmentIndicator
     * @param string $Description
     * @param ReturnServiceType $ReturnService
     * @param string $DocumentsOnlyIndicator
     * @param ShipperType $Shipper
     * @param ShipToType $ShipTo
     * @param AlternateDeliveryAddressType $AlternateDeliveryAddress
     * @param ShipFromType $ShipFrom
     * @param PaymentInfoType $PaymentInformation
     * @param FRSPaymentInfoType $FRSPaymentInformation
     * @param string $GoodsNotInFreeCirculationIndicator
     * @param RateInfoType $ShipmentRatingOptions
     * @param string $MovementReferenceNumber
     * @param ReferenceNumberType $ReferenceNumber
     * @param ServiceType $Service
     * @param CurrencyMonetaryType $InvoiceLineTotal
     * @param string $NumOfPiecesInShipment
     * @param string $USPSEndorsement
     * @param string $MILabelCN22Indicator
     * @param string $SubClassification
     * @param string $CostCenter
     * @param string $PackageID
     * @param string $IrregularIndicator
     * @param string $ItemizedChargesRequestedIndicator
     * @param IndicationType[] $ShipmentIndicationType
     * @param string $RatingMethodRequestedIndicator
     * @param string $TaxInformationIndicator
     * @param ShipmentServiceOptions $ShipmentServiceOptions
     * @param PackageType[] $Package
     */
    public function __construct($SaturdayDeliveryIndicator = null, $COD = null, $AccessPointCOD = null, $DeliverToAddresseeOnlyIndicator = null, array $Notification = null, $LabelDelivery = null, $InternationalForms = null, $DeliveryConfirmation = null, $ReturnOfDocumentIndicator = null, $ImportControlIndicator = null, $LabelMethod = null, $CommercialInvoiceRemovalIndicator = null, $UPScarbonneutralIndicator = null, array $PreAlertNotification = null, $ExchangeForwardIndicator = null, $HoldForPickupIndicator = null, $DropoffAtUPSFacilityIndicator = null, $LiftGateForPickUpIndicator = null, $LiftGateForDeliveryIndicator = null, $SDLShipmentIndicator = null, $Description = null, $ReturnService = null, $DocumentsOnlyIndicator = null, $Shipper = null, $ShipTo = null, $AlternateDeliveryAddress = null, $ShipFrom = null, $PaymentInformation = null, $FRSPaymentInformation = null, $GoodsNotInFreeCirculationIndicator = null, $ShipmentRatingOptions = null, $MovementReferenceNumber = null, $ReferenceNumber = null, $Service = null, $InvoiceLineTotal = null, $NumOfPiecesInShipment = null, $USPSEndorsement = null, $MILabelCN22Indicator = null, $SubClassification = null, $CostCenter = null, $PackageID = null, $IrregularIndicator = null, $ItemizedChargesRequestedIndicator = null, array $ShipmentIndicationType = null, $RatingMethodRequestedIndicator = null, $TaxInformationIndicator = null, $ShipmentServiceOptions = null, array $Package = null)
    {
      parent::__construct($SaturdayDeliveryIndicator, $COD, $AccessPointCOD, $DeliverToAddresseeOnlyIndicator, $Notification, $LabelDelivery, $InternationalForms, $DeliveryConfirmation, $ReturnOfDocumentIndicator, $ImportControlIndicator, $LabelMethod, $CommercialInvoiceRemovalIndicator, $UPScarbonneutralIndicator, $PreAlertNotification, $ExchangeForwardIndicator, $HoldForPickupIndicator, $DropoffAtUPSFacilityIndicator, $LiftGateForPickUpIndicator, $LiftGateForDeliveryIndicator, $SDLShipmentIndicator);
      $this->Description = $Description;
      $this->ReturnService = $ReturnService;
      $this->DocumentsOnlyIndicator = $DocumentsOnlyIndicator;
      $this->Shipper = $Shipper;
      $this->ShipTo = $ShipTo;
      $this->AlternateDeliveryAddress = $AlternateDeliveryAddress;
      $this->ShipFrom = $ShipFrom;
      $this->PaymentInformation = $PaymentInformation;
      $this->FRSPaymentInformation = $FRSPaymentInformation;
      $this->GoodsNotInFreeCirculationIndicator = $GoodsNotInFreeCirculationIndicator;
      $this->ShipmentRatingOptions = $ShipmentRatingOptions;
      $this->MovementReferenceNumber = $MovementReferenceNumber;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->Service = $Service;
      $this->InvoiceLineTotal = $InvoiceLineTotal;
      $this->NumOfPiecesInShipment = $NumOfPiecesInShipment;
      $this->USPSEndorsement = $USPSEndorsement;
      $this->MILabelCN22Indicator = $MILabelCN22Indicator;
      $this->SubClassification = $SubClassification;
      $this->CostCenter = $CostCenter;
      $this->PackageID = $PackageID;
      $this->IrregularIndicator = $IrregularIndicator;
      $this->ItemizedChargesRequestedIndicator = $ItemizedChargesRequestedIndicator;
      $this->ShipmentIndicationType = $ShipmentIndicationType;
      $this->RatingMethodRequestedIndicator = $RatingMethodRequestedIndicator;
      $this->TaxInformationIndicator = $TaxInformationIndicator;
      $this->ShipmentServiceOptions = $ShipmentServiceOptions;
      $this->Package = $Package;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ReturnServiceType
     */
    public function getReturnService()
    {
      return $this->ReturnService;
    }

    /**
     * @param ReturnServiceType $ReturnService
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setReturnService($ReturnService)
    {
      $this->ReturnService = $ReturnService;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentsOnlyIndicator()
    {
      return $this->DocumentsOnlyIndicator;
    }

    /**
     * @param string $DocumentsOnlyIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setDocumentsOnlyIndicator($DocumentsOnlyIndicator)
    {
      $this->DocumentsOnlyIndicator = $DocumentsOnlyIndicator;
      return $this;
    }

    /**
     * @return ShipperType
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param ShipperType $Shipper
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return ShipToType
     */
    public function getShipTo()
    {
      return $this->ShipTo;
    }

    /**
     * @param ShipToType $ShipTo
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setShipTo($ShipTo)
    {
      $this->ShipTo = $ShipTo;
      return $this;
    }

    /**
     * @return AlternateDeliveryAddressType
     */
    public function getAlternateDeliveryAddress()
    {
      return $this->AlternateDeliveryAddress;
    }

    /**
     * @param AlternateDeliveryAddressType $AlternateDeliveryAddress
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setAlternateDeliveryAddress($AlternateDeliveryAddress)
    {
      $this->AlternateDeliveryAddress = $AlternateDeliveryAddress;
      return $this;
    }

    /**
     * @return ShipFromType
     */
    public function getShipFrom()
    {
      return $this->ShipFrom;
    }

    /**
     * @param ShipFromType $ShipFrom
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setShipFrom($ShipFrom)
    {
      $this->ShipFrom = $ShipFrom;
      return $this;
    }

    /**
     * @return PaymentInfoType
     */
    public function getPaymentInformation()
    {
      return $this->PaymentInformation;
    }

    /**
     * @param PaymentInfoType $PaymentInformation
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setPaymentInformation($PaymentInformation)
    {
      $this->PaymentInformation = $PaymentInformation;
      return $this;
    }

    /**
     * @return FRSPaymentInfoType
     */
    public function getFRSPaymentInformation()
    {
      return $this->FRSPaymentInformation;
    }

    /**
     * @param FRSPaymentInfoType $FRSPaymentInformation
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setFRSPaymentInformation($FRSPaymentInformation)
    {
      $this->FRSPaymentInformation = $FRSPaymentInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsNotInFreeCirculationIndicator()
    {
      return $this->GoodsNotInFreeCirculationIndicator;
    }

    /**
     * @param string $GoodsNotInFreeCirculationIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setGoodsNotInFreeCirculationIndicator($GoodsNotInFreeCirculationIndicator)
    {
      $this->GoodsNotInFreeCirculationIndicator = $GoodsNotInFreeCirculationIndicator;
      return $this;
    }

    /**
     * @return RateInfoType
     */
    public function getShipmentRatingOptions()
    {
      return $this->ShipmentRatingOptions;
    }

    /**
     * @param RateInfoType $ShipmentRatingOptions
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setShipmentRatingOptions($ShipmentRatingOptions)
    {
      $this->ShipmentRatingOptions = $ShipmentRatingOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovementReferenceNumber()
    {
      return $this->MovementReferenceNumber;
    }

    /**
     * @param string $MovementReferenceNumber
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setMovementReferenceNumber($MovementReferenceNumber)
    {
      $this->MovementReferenceNumber = $MovementReferenceNumber;
      return $this;
    }

    /**
     * @return ReferenceNumberType
     */
    public function getReferenceNumber()
    {
      return $this->ReferenceNumber;
    }

    /**
     * @param ReferenceNumberType $ReferenceNumber
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
      return $this;
    }

    /**
     * @return ServiceType
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param ServiceType $Service
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return CurrencyMonetaryType
     */
    public function getInvoiceLineTotal()
    {
      return $this->InvoiceLineTotal;
    }

    /**
     * @param CurrencyMonetaryType $InvoiceLineTotal
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setInvoiceLineTotal($InvoiceLineTotal)
    {
      $this->InvoiceLineTotal = $InvoiceLineTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumOfPiecesInShipment()
    {
      return $this->NumOfPiecesInShipment;
    }

    /**
     * @param string $NumOfPiecesInShipment
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setNumOfPiecesInShipment($NumOfPiecesInShipment)
    {
      $this->NumOfPiecesInShipment = $NumOfPiecesInShipment;
      return $this;
    }

    /**
     * @return string
     */
    public function getUSPSEndorsement()
    {
      return $this->USPSEndorsement;
    }

    /**
     * @param string $USPSEndorsement
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setUSPSEndorsement($USPSEndorsement)
    {
      $this->USPSEndorsement = $USPSEndorsement;
      return $this;
    }

    /**
     * @return string
     */
    public function getMILabelCN22Indicator()
    {
      return $this->MILabelCN22Indicator;
    }

    /**
     * @param string $MILabelCN22Indicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setMILabelCN22Indicator($MILabelCN22Indicator)
    {
      $this->MILabelCN22Indicator = $MILabelCN22Indicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubClassification()
    {
      return $this->SubClassification;
    }

    /**
     * @param string $SubClassification
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setSubClassification($SubClassification)
    {
      $this->SubClassification = $SubClassification;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostCenter()
    {
      return $this->CostCenter;
    }

    /**
     * @param string $CostCenter
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setCostCenter($CostCenter)
    {
      $this->CostCenter = $CostCenter;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageID()
    {
      return $this->PackageID;
    }

    /**
     * @param string $PackageID
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setPackageID($PackageID)
    {
      $this->PackageID = $PackageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getIrregularIndicator()
    {
      return $this->IrregularIndicator;
    }

    /**
     * @param string $IrregularIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setIrregularIndicator($IrregularIndicator)
    {
      $this->IrregularIndicator = $IrregularIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemizedChargesRequestedIndicator()
    {
      return $this->ItemizedChargesRequestedIndicator;
    }

    /**
     * @param string $ItemizedChargesRequestedIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setItemizedChargesRequestedIndicator($ItemizedChargesRequestedIndicator)
    {
      $this->ItemizedChargesRequestedIndicator = $ItemizedChargesRequestedIndicator;
      return $this;
    }

    /**
     * @return IndicationType[]
     */
    public function getShipmentIndicationType()
    {
      return $this->ShipmentIndicationType;
    }

    /**
     * @param IndicationType[] $ShipmentIndicationType
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setShipmentIndicationType(array $ShipmentIndicationType)
    {
      $this->ShipmentIndicationType = $ShipmentIndicationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatingMethodRequestedIndicator()
    {
      return $this->RatingMethodRequestedIndicator;
    }

    /**
     * @param string $RatingMethodRequestedIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setRatingMethodRequestedIndicator($RatingMethodRequestedIndicator)
    {
      $this->RatingMethodRequestedIndicator = $RatingMethodRequestedIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxInformationIndicator()
    {
      return $this->TaxInformationIndicator;
    }

    /**
     * @param string $TaxInformationIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setTaxInformationIndicator($TaxInformationIndicator)
    {
      $this->TaxInformationIndicator = $TaxInformationIndicator;
      return $this;
    }

    /**
     * @return ShipmentServiceOptions
     */
    public function getShipmentServiceOptions()
    {
      return $this->ShipmentServiceOptions;
    }

    /**
     * @param ShipmentServiceOptions $ShipmentServiceOptions
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setShipmentServiceOptions($ShipmentServiceOptions)
    {
      $this->ShipmentServiceOptions = $ShipmentServiceOptions;
      return $this;
    }

    /**
     * @return PackageType[]
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param PackageType[] $Package
     * @return \UpsWsdl\Classes\Ship\ShipmentType
     */
    public function setPackage(array $Package)
    {
      $this->Package = $Package;
      return $this;
    }

}
