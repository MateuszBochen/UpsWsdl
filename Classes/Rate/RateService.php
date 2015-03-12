<?php

namespace UpsWsdl\Classes\Rate;

class RateService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'UPSSecurity' => 'UpsWsdl\\Classes\\Rate\\UPSSecurity',
      'UsernameToken' => 'UpsWsdl\\Classes\\Rate\\UsernameToken',
      'ServiceAccessToken' => 'UpsWsdl\\Classes\\Rate\\ServiceAccessToken',
      'Errors' => 'UpsWsdl\\Classes\\Rate\\Errors',
      'ErrorDetailType' => 'UpsWsdl\\Classes\\Rate\\ErrorDetailType',
      'CodeType' => 'UpsWsdl\\Classes\\Rate\\CodeType',
      'AdditionalInfoType' => 'UpsWsdl\\Classes\\Rate\\AdditionalInfoType',
      'AdditionalCodeDescType' => 'UpsWsdl\\Classes\\Rate\\AdditionalCodeDescType',
      'LocationType' => 'UpsWsdl\\Classes\\Rate\\LocationType',
      'ClientInformationType' => 'UpsWsdl\\Classes\\Rate\\ClientInformationType',
      'Property' => 'UpsWsdl\\Classes\\Rate\\Property',
      'RequestType' => 'UpsWsdl\\Classes\\Rate\\RequestType',
      'TransactionReferenceType' => 'UpsWsdl\\Classes\\Rate\\TransactionReferenceType',
      'ResponseType' => 'UpsWsdl\\Classes\\Rate\\ResponseType',
      'CodeDescriptionType' => 'UpsWsdl\\Classes\\Rate\\CodeDescriptionType',
      'RateRequest' => 'UpsWsdl\\Classes\\Rate\\RateRequest',
      'RateResponse' => 'UpsWsdl\\Classes\\Rate\\RateResponse',
      'BillingWeightType' => 'UpsWsdl\\Classes\\Rate\\BillingWeightType',
      'RatedPackageType' => 'UpsWsdl\\Classes\\Rate\\RatedPackageType',
      'AccessorialType' => 'UpsWsdl\\Classes\\Rate\\AccessorialType',
      'RatedShipmentType' => 'UpsWsdl\\Classes\\Rate\\RatedShipmentType',
      'DisclaimerType' => 'UpsWsdl\\Classes\\Rate\\DisclaimerType',
      'TaxChargeType' => 'UpsWsdl\\Classes\\Rate\\TaxChargeType',
      'TotalChargeType' => 'UpsWsdl\\Classes\\Rate\\TotalChargeType',
      'RatedShipmentInfoType' => 'UpsWsdl\\Classes\\Rate\\RatedShipmentInfoType',
      'ChargesType' => 'UpsWsdl\\Classes\\Rate\\ChargesType',
      'TransportationChargesType' => 'UpsWsdl\\Classes\\Rate\\TransportationChargesType',
      'FRSShipmentType' => 'UpsWsdl\\Classes\\Rate\\FRSShipmentType',
      'AddressType' => 'UpsWsdl\\Classes\\Rate\\AddressType',
      'ShipToAddressType' => 'UpsWsdl\\Classes\\Rate\\ShipToAddressType',
      'CODType' => 'UpsWsdl\\Classes\\Rate\\CODType',
      'CODAmountType' => 'UpsWsdl\\Classes\\Rate\\CODAmountType',
      'DeliveryConfirmationType' => 'UpsWsdl\\Classes\\Rate\\DeliveryConfirmationType',
      'DimensionsType' => 'UpsWsdl\\Classes\\Rate\\DimensionsType',
      'InsuredValueType' => 'UpsWsdl\\Classes\\Rate\\InsuredValueType',
      'OnCallPickupType' => 'UpsWsdl\\Classes\\Rate\\OnCallPickupType',
      'PackageType' => 'UpsWsdl\\Classes\\Rate\\PackageType',
      'CommodityType' => 'UpsWsdl\\Classes\\Rate\\CommodityType',
      'NMFCCommodityType' => 'UpsWsdl\\Classes\\Rate\\NMFCCommodityType',
      'PackageServiceOptionsType' => 'UpsWsdl\\Classes\\Rate\\PackageServiceOptionsType',
      'PackageServiceOptionsAccessPointCODType' => 'UpsWsdl\\Classes\\Rate\\PackageServiceOptionsAccessPointCODType',
      'DryIceType' => 'UpsWsdl\\Classes\\Rate\\DryIceType',
      'DryIceWeightType' => 'UpsWsdl\\Classes\\Rate\\DryIceWeightType',
      'ShipperDeclaredValueType' => 'UpsWsdl\\Classes\\Rate\\ShipperDeclaredValueType',
      'InsuranceType' => 'UpsWsdl\\Classes\\Rate\\InsuranceType',
      'InsuranceValueType' => 'UpsWsdl\\Classes\\Rate\\InsuranceValueType',
      'PackageWeightType' => 'UpsWsdl\\Classes\\Rate\\PackageWeightType',
      'UOMCodeDescriptionType' => 'UpsWsdl\\Classes\\Rate\\UOMCodeDescriptionType',
      'ShipmentRatingOptionsType' => 'UpsWsdl\\Classes\\Rate\\ShipmentRatingOptionsType',
      'ScheduleType' => 'UpsWsdl\\Classes\\Rate\\ScheduleType',
      'ShipFromType' => 'UpsWsdl\\Classes\\Rate\\ShipFromType',
      'ShipToType' => 'UpsWsdl\\Classes\\Rate\\ShipToType',
      'ShipmentType' => 'UpsWsdl\\Classes\\Rate\\ShipmentType',
      'AlternateDeliveryAddressType' => 'UpsWsdl\\Classes\\Rate\\AlternateDeliveryAddressType',
      'ADRType' => 'UpsWsdl\\Classes\\Rate\\ADRType',
      'IndicationType' => 'UpsWsdl\\Classes\\Rate\\IndicationType',
      'ShipmentChargesType' => 'UpsWsdl\\Classes\\Rate\\ShipmentChargesType',
      'ShipmentServiceOptionsType' => 'UpsWsdl\\Classes\\Rate\\ShipmentServiceOptionsType',
      'ShipmentServiceOptionsAccessPointCODType' => 'UpsWsdl\\Classes\\Rate\\ShipmentServiceOptionsAccessPointCODType',
      'ReturnServiceType' => 'UpsWsdl\\Classes\\Rate\\ReturnServiceType',
      'ImportControlType' => 'UpsWsdl\\Classes\\Rate\\ImportControlType',
      'RestrictedArticlesType' => 'UpsWsdl\\Classes\\Rate\\RestrictedArticlesType',
      'PickupOptionsType' => 'UpsWsdl\\Classes\\Rate\\PickupOptionsType',
      'DeliveryOptionsType' => 'UpsWsdl\\Classes\\Rate\\DeliveryOptionsType',
      'ShipperType' => 'UpsWsdl\\Classes\\Rate\\ShipperType',
      'GuaranteedDeliveryType' => 'UpsWsdl\\Classes\\Rate\\GuaranteedDeliveryType',
      'FRSPaymentInfoType' => 'UpsWsdl\\Classes\\Rate\\FRSPaymentInfoType',
      'PayerAddressType' => 'UpsWsdl\\Classes\\Rate\\PayerAddressType',
      'InvoiceLineTotalType' => 'UpsWsdl\\Classes\\Rate\\InvoiceLineTotalType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'RateWS.wsdl')
    {

      $wsdl = dirname(__FILE__).'/../../Wsdls/'.$wsdl;

      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param RateRequest $Body
     * @return RateResponse
     */
    public function ProcessRate(RateRequest $Body)
    {
      return $this->__soapCall('ProcessRate', array($Body));
    }

}
