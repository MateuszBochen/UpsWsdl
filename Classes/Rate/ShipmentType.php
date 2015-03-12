<?php

namespace UpsWsdl\Classes\Rate;

class ShipmentType
{

    /**
     * @var ShipperType $Shipper
     */
    protected $Shipper = null;

    /**
     * @var ShipToType $ShipTo
     */
    protected $ShipTo = null;

    /**
     * @var ShipFromType $ShipFrom
     */
    protected $ShipFrom = null;

    /**
     * @var AlternateDeliveryAddressType $AlternateDeliveryAddress
     */
    protected $AlternateDeliveryAddress = null;

    /**
     * @var IndicationType[] $ShipmentIndicationType
     */
    protected $ShipmentIndicationType = null;

    /**
     * @var FRSPaymentInfoType $FRSPaymentInformation
     */
    protected $FRSPaymentInformation = null;

    /**
     * @var CodeDescriptionType $Service
     */
    protected $Service = null;

    /**
     * @var string $DocumentsOnlyIndicator
     */
    protected $DocumentsOnlyIndicator = null;

    /**
     * @var string $NumOfPieces
     */
    protected $NumOfPieces = null;

    /**
     * @var PackageType[] $Package
     */
    protected $Package = null;

    /**
     * @var ShipmentServiceOptionsType $ShipmentServiceOptions
     */
    protected $ShipmentServiceOptions = null;

    /**
     * @var ShipmentRatingOptionsType $ShipmentRatingOptions
     */
    protected $ShipmentRatingOptions = null;

    /**
     * @var InvoiceLineTotalType $InvoiceLineTotal
     */
    protected $InvoiceLineTotal = null;

    /**
     * @var string $ItemizedChargesRequestedIndicator
     */
    protected $ItemizedChargesRequestedIndicator = null;

    /**
     * @var string $RatingMethodRequestedIndicator
     */
    protected $RatingMethodRequestedIndicator = null;

    /**
     * @var string $TaxInformationIndicator
     */
    protected $TaxInformationIndicator = null;

    /**
     * @param ShipperType $Shipper
     * @param ShipToType $ShipTo
     * @param ShipFromType $ShipFrom
     * @param AlternateDeliveryAddressType $AlternateDeliveryAddress
     * @param IndicationType[] $ShipmentIndicationType
     * @param FRSPaymentInfoType $FRSPaymentInformation
     * @param CodeDescriptionType $Service
     * @param string $DocumentsOnlyIndicator
     * @param string $NumOfPieces
     * @param PackageType[] $Package
     * @param ShipmentServiceOptionsType $ShipmentServiceOptions
     * @param ShipmentRatingOptionsType $ShipmentRatingOptions
     * @param InvoiceLineTotalType $InvoiceLineTotal
     * @param string $ItemizedChargesRequestedIndicator
     * @param string $RatingMethodRequestedIndicator
     * @param string $TaxInformationIndicator
     */
    public function __construct($Shipper = null, $ShipTo = null, $ShipFrom = null, $AlternateDeliveryAddress = null, array $ShipmentIndicationType = null, $FRSPaymentInformation = null, $Service = null, $DocumentsOnlyIndicator = null, $NumOfPieces = null, array $Package = null, $ShipmentServiceOptions = null, $ShipmentRatingOptions = null, $InvoiceLineTotal = null, $ItemizedChargesRequestedIndicator = null, $RatingMethodRequestedIndicator = null, $TaxInformationIndicator = null)
    {
      $this->Shipper = $Shipper;
      $this->ShipTo = $ShipTo;
      $this->ShipFrom = $ShipFrom;
      $this->AlternateDeliveryAddress = $AlternateDeliveryAddress;
      $this->ShipmentIndicationType = $ShipmentIndicationType;
      $this->FRSPaymentInformation = $FRSPaymentInformation;
      $this->Service = $Service;
      $this->DocumentsOnlyIndicator = $DocumentsOnlyIndicator;
      $this->NumOfPieces = $NumOfPieces;
      $this->Package = $Package;
      $this->ShipmentServiceOptions = $ShipmentServiceOptions;
      $this->ShipmentRatingOptions = $ShipmentRatingOptions;
      $this->InvoiceLineTotal = $InvoiceLineTotal;
      $this->ItemizedChargesRequestedIndicator = $ItemizedChargesRequestedIndicator;
      $this->RatingMethodRequestedIndicator = $RatingMethodRequestedIndicator;
      $this->TaxInformationIndicator = $TaxInformationIndicator;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setShipTo($ShipTo)
    {
      $this->ShipTo = $ShipTo;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setShipFrom($ShipFrom)
    {
      $this->ShipFrom = $ShipFrom;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setAlternateDeliveryAddress($AlternateDeliveryAddress)
    {
      $this->AlternateDeliveryAddress = $AlternateDeliveryAddress;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setShipmentIndicationType(array $ShipmentIndicationType)
    {
      $this->ShipmentIndicationType = $ShipmentIndicationType;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setFRSPaymentInformation($FRSPaymentInformation)
    {
      $this->FRSPaymentInformation = $FRSPaymentInformation;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setService($Service)
    {
      $this->Service = $Service;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setDocumentsOnlyIndicator($DocumentsOnlyIndicator)
    {
      $this->DocumentsOnlyIndicator = $DocumentsOnlyIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumOfPieces()
    {
      return $this->NumOfPieces;
    }

    /**
     * @param string $NumOfPieces
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setNumOfPieces($NumOfPieces)
    {
      $this->NumOfPieces = $NumOfPieces;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setPackage(array $Package)
    {
      $this->Package = $Package;
      return $this;
    }

    /**
     * @return ShipmentServiceOptionsType
     */
    public function getShipmentServiceOptions()
    {
      return $this->ShipmentServiceOptions;
    }

    /**
     * @param ShipmentServiceOptionsType $ShipmentServiceOptions
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setShipmentServiceOptions($ShipmentServiceOptions)
    {
      $this->ShipmentServiceOptions = $ShipmentServiceOptions;
      return $this;
    }

    /**
     * @return ShipmentRatingOptionsType
     */
    public function getShipmentRatingOptions()
    {
      return $this->ShipmentRatingOptions;
    }

    /**
     * @param ShipmentRatingOptionsType $ShipmentRatingOptions
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setShipmentRatingOptions($ShipmentRatingOptions)
    {
      $this->ShipmentRatingOptions = $ShipmentRatingOptions;
      return $this;
    }

    /**
     * @return InvoiceLineTotalType
     */
    public function getInvoiceLineTotal()
    {
      return $this->InvoiceLineTotal;
    }

    /**
     * @param InvoiceLineTotalType $InvoiceLineTotal
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setInvoiceLineTotal($InvoiceLineTotal)
    {
      $this->InvoiceLineTotal = $InvoiceLineTotal;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setItemizedChargesRequestedIndicator($ItemizedChargesRequestedIndicator)
    {
      $this->ItemizedChargesRequestedIndicator = $ItemizedChargesRequestedIndicator;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
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
     * @return \UpsWsdl\Classes\Rate\ShipmentType
     */
    public function setTaxInformationIndicator($TaxInformationIndicator)
    {
      $this->TaxInformationIndicator = $TaxInformationIndicator;
      return $this;
    }

}
