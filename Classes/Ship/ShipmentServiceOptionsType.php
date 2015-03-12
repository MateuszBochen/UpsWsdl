<?php

namespace UpsWsdl\Classes\Ship;

class ShipmentServiceOptionsType
{

    /**
     * @var string $SaturdayDeliveryIndicator
     */
    protected $SaturdayDeliveryIndicator = null;

    /**
     * @var CODType $COD
     */
    protected $COD = null;

    /**
     * @var ShipmentServiceOptionsAccessPointCODType $AccessPointCOD
     */
    protected $AccessPointCOD = null;

    /**
     * @var string $DeliverToAddresseeOnlyIndicator
     */
    protected $DeliverToAddresseeOnlyIndicator = null;

    /**
     * @var NotificationType[] $Notification
     */
    protected $Notification = null;

    /**
     * @var LabelDeliveryType $LabelDelivery
     */
    protected $LabelDelivery = null;

    /**
     * @var InternationalFormType $InternationalForms
     */
    protected $InternationalForms = null;

    /**
     * @var DeliveryConfirmationType $DeliveryConfirmation
     */
    protected $DeliveryConfirmation = null;

    /**
     * @var string $ReturnOfDocumentIndicator
     */
    protected $ReturnOfDocumentIndicator = null;

    /**
     * @var string $ImportControlIndicator
     */
    protected $ImportControlIndicator = null;

    /**
     * @var LabelMethodType $LabelMethod
     */
    protected $LabelMethod = null;

    /**
     * @var string $CommercialInvoiceRemovalIndicator
     */
    protected $CommercialInvoiceRemovalIndicator = null;

    /**
     * @var string $UPScarbonneutralIndicator
     */
    protected $UPScarbonneutralIndicator = null;

    /**
     * @var PreAlertNotificationType[] $PreAlertNotification
     */
    protected $PreAlertNotification = null;

    /**
     * @var string $ExchangeForwardIndicator
     */
    protected $ExchangeForwardIndicator = null;

    /**
     * @var string $HoldForPickupIndicator
     */
    protected $HoldForPickupIndicator = null;

    /**
     * @var string $DropoffAtUPSFacilityIndicator
     */
    protected $DropoffAtUPSFacilityIndicator = null;

    /**
     * @var string $LiftGateForPickUpIndicator
     */
    protected $LiftGateForPickUpIndicator = null;

    /**
     * @var string $LiftGateForDeliveryIndicator
     */
    protected $LiftGateForDeliveryIndicator = null;

    /**
     * @var string $SDLShipmentIndicator
     */
    protected $SDLShipmentIndicator = null;

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
     */
    public function __construct($SaturdayDeliveryIndicator = null, $COD = null, $AccessPointCOD = null, $DeliverToAddresseeOnlyIndicator = null, array $Notification = null, $LabelDelivery = null, $InternationalForms = null, $DeliveryConfirmation = null, $ReturnOfDocumentIndicator = null, $ImportControlIndicator = null, $LabelMethod = null, $CommercialInvoiceRemovalIndicator = null, $UPScarbonneutralIndicator = null, array $PreAlertNotification = null, $ExchangeForwardIndicator = null, $HoldForPickupIndicator = null, $DropoffAtUPSFacilityIndicator = null, $LiftGateForPickUpIndicator = null, $LiftGateForDeliveryIndicator = null, $SDLShipmentIndicator = null)
    {
      $this->SaturdayDeliveryIndicator = $SaturdayDeliveryIndicator;
      $this->COD = $COD;
      $this->AccessPointCOD = $AccessPointCOD;
      $this->DeliverToAddresseeOnlyIndicator = $DeliverToAddresseeOnlyIndicator;
      $this->Notification = $Notification;
      $this->LabelDelivery = $LabelDelivery;
      $this->InternationalForms = $InternationalForms;
      $this->DeliveryConfirmation = $DeliveryConfirmation;
      $this->ReturnOfDocumentIndicator = $ReturnOfDocumentIndicator;
      $this->ImportControlIndicator = $ImportControlIndicator;
      $this->LabelMethod = $LabelMethod;
      $this->CommercialInvoiceRemovalIndicator = $CommercialInvoiceRemovalIndicator;
      $this->UPScarbonneutralIndicator = $UPScarbonneutralIndicator;
      $this->PreAlertNotification = $PreAlertNotification;
      $this->ExchangeForwardIndicator = $ExchangeForwardIndicator;
      $this->HoldForPickupIndicator = $HoldForPickupIndicator;
      $this->DropoffAtUPSFacilityIndicator = $DropoffAtUPSFacilityIndicator;
      $this->LiftGateForPickUpIndicator = $LiftGateForPickUpIndicator;
      $this->LiftGateForDeliveryIndicator = $LiftGateForDeliveryIndicator;
      $this->SDLShipmentIndicator = $SDLShipmentIndicator;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setSaturdayDeliveryIndicator($SaturdayDeliveryIndicator)
    {
      $this->SaturdayDeliveryIndicator = $SaturdayDeliveryIndicator;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setDeliverToAddresseeOnlyIndicator($DeliverToAddresseeOnlyIndicator)
    {
      $this->DeliverToAddresseeOnlyIndicator = $DeliverToAddresseeOnlyIndicator;
      return $this;
    }

    /**
     * @return NotificationType[]
     */
    public function getNotification()
    {
      return $this->Notification;
    }

    /**
     * @param NotificationType[] $Notification
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setNotification(array $Notification)
    {
      $this->Notification = $Notification;
      return $this;
    }

    /**
     * @return LabelDeliveryType
     */
    public function getLabelDelivery()
    {
      return $this->LabelDelivery;
    }

    /**
     * @param LabelDeliveryType $LabelDelivery
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setLabelDelivery($LabelDelivery)
    {
      $this->LabelDelivery = $LabelDelivery;
      return $this;
    }

    /**
     * @return InternationalFormType
     */
    public function getInternationalForms()
    {
      return $this->InternationalForms;
    }

    /**
     * @param InternationalFormType $InternationalForms
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setInternationalForms($InternationalForms)
    {
      $this->InternationalForms = $InternationalForms;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setReturnOfDocumentIndicator($ReturnOfDocumentIndicator)
    {
      $this->ReturnOfDocumentIndicator = $ReturnOfDocumentIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getImportControlIndicator()
    {
      return $this->ImportControlIndicator;
    }

    /**
     * @param string $ImportControlIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setImportControlIndicator($ImportControlIndicator)
    {
      $this->ImportControlIndicator = $ImportControlIndicator;
      return $this;
    }

    /**
     * @return LabelMethodType
     */
    public function getLabelMethod()
    {
      return $this->LabelMethod;
    }

    /**
     * @param LabelMethodType $LabelMethod
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setLabelMethod($LabelMethod)
    {
      $this->LabelMethod = $LabelMethod;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setCommercialInvoiceRemovalIndicator($CommercialInvoiceRemovalIndicator)
    {
      $this->CommercialInvoiceRemovalIndicator = $CommercialInvoiceRemovalIndicator;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setUPScarbonneutralIndicator($UPScarbonneutralIndicator)
    {
      $this->UPScarbonneutralIndicator = $UPScarbonneutralIndicator;
      return $this;
    }

    /**
     * @return PreAlertNotificationType[]
     */
    public function getPreAlertNotification()
    {
      return $this->PreAlertNotification;
    }

    /**
     * @param PreAlertNotificationType[] $PreAlertNotification
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setPreAlertNotification(array $PreAlertNotification)
    {
      $this->PreAlertNotification = $PreAlertNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getExchangeForwardIndicator()
    {
      return $this->ExchangeForwardIndicator;
    }

    /**
     * @param string $ExchangeForwardIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setExchangeForwardIndicator($ExchangeForwardIndicator)
    {
      $this->ExchangeForwardIndicator = $ExchangeForwardIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getHoldForPickupIndicator()
    {
      return $this->HoldForPickupIndicator;
    }

    /**
     * @param string $HoldForPickupIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setHoldForPickupIndicator($HoldForPickupIndicator)
    {
      $this->HoldForPickupIndicator = $HoldForPickupIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropoffAtUPSFacilityIndicator()
    {
      return $this->DropoffAtUPSFacilityIndicator;
    }

    /**
     * @param string $DropoffAtUPSFacilityIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setDropoffAtUPSFacilityIndicator($DropoffAtUPSFacilityIndicator)
    {
      $this->DropoffAtUPSFacilityIndicator = $DropoffAtUPSFacilityIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiftGateForPickUpIndicator()
    {
      return $this->LiftGateForPickUpIndicator;
    }

    /**
     * @param string $LiftGateForPickUpIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setLiftGateForPickUpIndicator($LiftGateForPickUpIndicator)
    {
      $this->LiftGateForPickUpIndicator = $LiftGateForPickUpIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiftGateForDeliveryIndicator()
    {
      return $this->LiftGateForDeliveryIndicator;
    }

    /**
     * @param string $LiftGateForDeliveryIndicator
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setLiftGateForDeliveryIndicator($LiftGateForDeliveryIndicator)
    {
      $this->LiftGateForDeliveryIndicator = $LiftGateForDeliveryIndicator;
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
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsType
     */
    public function setSDLShipmentIndicator($SDLShipmentIndicator)
    {
      $this->SDLShipmentIndicator = $SDLShipmentIndicator;
      return $this;
    }

}
