<?php

namespace UpsWsdl\Classes\Rate;

class ShipmentServiceOptionsType
{

    /**
     * @var string $SaturdayPickupIndicator
     */
    protected $SaturdayPickupIndicator = null;

    /**
     * @var string $SaturdayDeliveryIndicator
     */
    protected $SaturdayDeliveryIndicator = null;

    /**
     * @var OnCallPickupType $OnCallPickup
     */
    protected $OnCallPickup = null;

    /**
     * @var ShipmentServiceOptionsAccessPointCODType $AccessPointCOD
     */
    protected $AccessPointCOD = null;

    /**
     * @var string $DeliverToAddresseeOnlyIndicator
     */
    protected $DeliverToAddresseeOnlyIndicator = null;

    /**
     * @var CODType $COD
     */
    protected $COD = null;

    /**
     * @var DeliveryConfirmationType $DeliveryConfirmation
     */
    protected $DeliveryConfirmation = null;

    /**
     * @var string $ReturnOfDocumentIndicator
     */
    protected $ReturnOfDocumentIndicator = null;

    /**
     * @var string $UPScarbonneutralIndicator
     */
    protected $UPScarbonneutralIndicator = null;

    /**
     * @var string $CertificateOfOriginIndicator
     */
    protected $CertificateOfOriginIndicator = null;

    /**
     * @var PickupOptionsType $PickupOptions
     */
    protected $PickupOptions = null;

    /**
     * @var DeliveryOptionsType $DeliveryOptions
     */
    protected $DeliveryOptions = null;

    /**
     * @var RestrictedArticlesType $RestrictedArticles
     */
    protected $RestrictedArticles = null;

    /**
     * @var string $ShipperExportDeclarationIndicator
     */
    protected $ShipperExportDeclarationIndicator = null;

    /**
     * @var string $CommercialInvoiceRemovalIndicator
     */
    protected $CommercialInvoiceRemovalIndicator = null;

    /**
     * @var ImportControlType $ImportControl
     */
    protected $ImportControl = null;

    /**
     * @var ReturnServiceType $ReturnService
     */
    protected $ReturnService = null;

    /**
     * @var string $SDLShipmentIndicator
     */
    protected $SDLShipmentIndicator = null;

    /**
     * @param string $SaturdayPickupIndicator
     * @param string $SaturdayDeliveryIndicator
     * @param OnCallPickupType $OnCallPickup
     * @param ShipmentServiceOptionsAccessPointCODType $AccessPointCOD
     * @param string $DeliverToAddresseeOnlyIndicator
     * @param CODType $COD
     * @param DeliveryConfirmationType $DeliveryConfirmation
     * @param string $ReturnOfDocumentIndicator
     * @param string $UPScarbonneutralIndicator
     * @param string $CertificateOfOriginIndicator
     * @param PickupOptionsType $PickupOptions
     * @param DeliveryOptionsType $DeliveryOptions
     * @param RestrictedArticlesType $RestrictedArticles
     * @param string $ShipperExportDeclarationIndicator
     * @param string $CommercialInvoiceRemovalIndicator
     * @param ImportControlType $ImportControl
     * @param ReturnServiceType $ReturnService
     * @param string $SDLShipmentIndicator
     */
    public function __construct($SaturdayPickupIndicator = null, $SaturdayDeliveryIndicator = null, $OnCallPickup = null, $AccessPointCOD = null, $DeliverToAddresseeOnlyIndicator = null, $COD = null, $DeliveryConfirmation = null, $ReturnOfDocumentIndicator = null, $UPScarbonneutralIndicator = null, $CertificateOfOriginIndicator = null, $PickupOptions = null, $DeliveryOptions = null, $RestrictedArticles = null, $ShipperExportDeclarationIndicator = null, $CommercialInvoiceRemovalIndicator = null, $ImportControl = null, $ReturnService = null, $SDLShipmentIndicator = null)
    {
      $this->SaturdayPickupIndicator = $SaturdayPickupIndicator;
      $this->SaturdayDeliveryIndicator = $SaturdayDeliveryIndicator;
      $this->OnCallPickup = $OnCallPickup;
      $this->AccessPointCOD = $AccessPointCOD;
      $this->DeliverToAddresseeOnlyIndicator = $DeliverToAddresseeOnlyIndicator;
      $this->COD = $COD;
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      $this->ReturnOfDocumentIndicator = $ReturnOfDocumentIndicator;
      $this->UPScarbonneutralIndicator = $UPScarbonneutralIndicator;
      $this->CertificateOfOriginIndicator = $CertificateOfOriginIndicator;
      $this->PickupOptions = $PickupOptions;
      $this->DeliveryOptions = $DeliveryOptions;
      $this->RestrictedArticles = $RestrictedArticles;
      $this->ShipperExportDeclarationIndicator = $ShipperExportDeclarationIndicator;
      $this->CommercialInvoiceRemovalIndicator = $CommercialInvoiceRemovalIndicator;
      $this->ImportControl = $ImportControl;
      $this->ReturnService = $ReturnService;
      $this->SDLShipmentIndicator = $SDLShipmentIndicator;
    }

    /**
     * @return string
     */
    public function getSaturdayPickupIndicator()
    {
      return $this->SaturdayPickupIndicator;
    }

    /**
     * @param string $SaturdayPickupIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setSaturdayPickupIndicator($SaturdayPickupIndicator)
    {
      $this->SaturdayPickupIndicator = $SaturdayPickupIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getSaturdayDeliveryIndicator()
    {
      return $this->SaturdayDeliveryIndicator;
    }

    /**
     * @param string $SaturdayDeliveryIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setSaturdayDeliveryIndicator($SaturdayDeliveryIndicator)
    {
      $this->SaturdayDeliveryIndicator = $SaturdayDeliveryIndicator;
      return $this;
    }

    /**
     * @return OnCallPickupType
     */
    public function getOnCallPickup()
    {
      return $this->OnCallPickup;
    }

    /**
     * @param OnCallPickupType $OnCallPickup
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setOnCallPickup($OnCallPickup)
    {
      $this->OnCallPickup = $OnCallPickup;
      return $this;
    }

    /**
     * @return ShipmentServiceOptionsAccessPointCODType
     */
    public function getAccessPointCOD()
    {
      return $this->AccessPointCOD;
    }

    /**
     * @param ShipmentServiceOptionsAccessPointCODType $AccessPointCOD
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setAccessPointCOD($AccessPointCOD)
    {
      $this->AccessPointCOD = $AccessPointCOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliverToAddresseeOnlyIndicator()
    {
      return $this->DeliverToAddresseeOnlyIndicator;
    }

    /**
     * @param string $DeliverToAddresseeOnlyIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setDeliverToAddresseeOnlyIndicator($DeliverToAddresseeOnlyIndicator)
    {
      $this->DeliverToAddresseeOnlyIndicator = $DeliverToAddresseeOnlyIndicator;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
      return $this;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setDeliveryConfirmation($DeliveryConfirmation)
    {
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnOfDocumentIndicator()
    {
      return $this->ReturnOfDocumentIndicator;
    }

    /**
     * @param string $ReturnOfDocumentIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setReturnOfDocumentIndicator($ReturnOfDocumentIndicator)
    {
      $this->ReturnOfDocumentIndicator = $ReturnOfDocumentIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPScarbonneutralIndicator()
    {
      return $this->UPScarbonneutralIndicator;
    }

    /**
     * @param string $UPScarbonneutralIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setUPScarbonneutralIndicator($UPScarbonneutralIndicator)
    {
      $this->UPScarbonneutralIndicator = $UPScarbonneutralIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getCertificateOfOriginIndicator()
    {
      return $this->CertificateOfOriginIndicator;
    }

    /**
     * @param string $CertificateOfOriginIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setCertificateOfOriginIndicator($CertificateOfOriginIndicator)
    {
      $this->CertificateOfOriginIndicator = $CertificateOfOriginIndicator;
      return $this;
    }

    /**
     * @return PickupOptionsType
     */
    public function getPickupOptions()
    {
      return $this->PickupOptions;
    }

    /**
     * @param PickupOptionsType $PickupOptions
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setPickupOptions($PickupOptions)
    {
      $this->PickupOptions = $PickupOptions;
      return $this;
    }

    /**
     * @return DeliveryOptionsType
     */
    public function getDeliveryOptions()
    {
      return $this->DeliveryOptions;
    }

    /**
     * @param DeliveryOptionsType $DeliveryOptions
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
      $this->DeliveryOptions = $DeliveryOptions;
      return $this;
    }

    /**
     * @return RestrictedArticlesType
     */
    public function getRestrictedArticles()
    {
      return $this->RestrictedArticles;
    }

    /**
     * @param RestrictedArticlesType $RestrictedArticles
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setRestrictedArticles($RestrictedArticles)
    {
      $this->RestrictedArticles = $RestrictedArticles;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperExportDeclarationIndicator()
    {
      return $this->ShipperExportDeclarationIndicator;
    }

    /**
     * @param string $ShipperExportDeclarationIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setShipperExportDeclarationIndicator($ShipperExportDeclarationIndicator)
    {
      $this->ShipperExportDeclarationIndicator = $ShipperExportDeclarationIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommercialInvoiceRemovalIndicator()
    {
      return $this->CommercialInvoiceRemovalIndicator;
    }

    /**
     * @param string $CommercialInvoiceRemovalIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setCommercialInvoiceRemovalIndicator($CommercialInvoiceRemovalIndicator)
    {
      $this->CommercialInvoiceRemovalIndicator = $CommercialInvoiceRemovalIndicator;
      return $this;
    }

    /**
     * @return ImportControlType
     */
    public function getImportControl()
    {
      return $this->ImportControl;
    }

    /**
     * @param ImportControlType $ImportControl
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setImportControl($ImportControl)
    {
      $this->ImportControl = $ImportControl;
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
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setReturnService($ReturnService)
    {
      $this->ReturnService = $ReturnService;
      return $this;
    }

    /**
     * @return string
     */
    public function getSDLShipmentIndicator()
    {
      return $this->SDLShipmentIndicator;
    }

    /**
     * @param string $SDLShipmentIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentServiceOptionsType
     */
    public function setSDLShipmentIndicator($SDLShipmentIndicator)
    {
      $this->SDLShipmentIndicator = $SDLShipmentIndicator;
      return $this;
    }

}
