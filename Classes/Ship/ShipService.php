<?php

namespace UpsWsdl\Classes\Ship;

class ShipService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'UPSSecurity' => 'UpsWsdl\\Classes\\Ship\\UPSSecurity',
      'UsernameToken' => 'UpsWsdl\\Classes\\Ship\\UsernameToken',
      'ServiceAccessToken' => 'UpsWsdl\\Classes\\Ship\\ServiceAccessToken',
      'Errors' => 'UpsWsdl\\Classes\\Ship\\Errors',
      'ErrorDetailType' => 'UpsWsdl\\Classes\\Ship\\ErrorDetailType',
      'CodeType' => 'UpsWsdl\\Classes\\Ship\\CodeType',
      'AdditionalInfoType' => 'UpsWsdl\\Classes\\Ship\\AdditionalInfoType',
      'AdditionalCodeDescType' => 'UpsWsdl\\Classes\\Ship\\AdditionalCodeDescType',
      'LocationType' => 'UpsWsdl\\Classes\\Ship\\LocationType',
      'ClientInformationType' => 'UpsWsdl\\Classes\\Ship\\ClientInformationType',
      'Property' => 'UpsWsdl\\Classes\\Ship\\Property',
      'RequestType' => 'UpsWsdl\\Classes\\Ship\\RequestType',
      'TransactionReferenceType' => 'UpsWsdl\\Classes\\Ship\\TransactionReferenceType',
      'ResponseType' => 'UpsWsdl\\Classes\\Ship\\ResponseType',
      'CodeDescriptionType' => 'UpsWsdl\\Classes\\Ship\\CodeDescriptionType',
      'InternationalFormType' => 'UpsWsdl\\Classes\\Ship\\InternationalFormType',
      'UPSPremiumCareFormType' => 'UpsWsdl\\Classes\\Ship\\UPSPremiumCareFormType',
      'LanguageForUPSPremiumCareType' => 'UpsWsdl\\Classes\\Ship\\LanguageForUPSPremiumCareType',
      'UserCreatedFormType' => 'UpsWsdl\\Classes\\Ship\\UserCreatedFormType',
      'CN22FormType' => 'UpsWsdl\\Classes\\Ship\\CN22FormType',
      'CN22ContentType' => 'UpsWsdl\\Classes\\Ship\\CN22ContentType',
      'ContactType' => 'UpsWsdl\\Classes\\Ship\\ContactType',
      'ForwardAgentType' => 'UpsWsdl\\Classes\\Ship\\ForwardAgentType',
      'AddressType' => 'UpsWsdl\\Classes\\Ship\\AddressType',
      'UltimateConsigneeType' => 'UpsWsdl\\Classes\\Ship\\UltimateConsigneeType',
      'IntermediateConsigneeType' => 'UpsWsdl\\Classes\\Ship\\IntermediateConsigneeType',
      'ProducerType' => 'UpsWsdl\\Classes\\Ship\\ProducerType',
      'ProductType' => 'UpsWsdl\\Classes\\Ship\\ProductType',
      'ExcludeFromFormType' => 'UpsWsdl\\Classes\\Ship\\ExcludeFromFormType',
      'UnitType' => 'UpsWsdl\\Classes\\Ship\\UnitType',
      'PackingListInfoType' => 'UpsWsdl\\Classes\\Ship\\PackingListInfoType',
      'PackageAssociatedType' => 'UpsWsdl\\Classes\\Ship\\PackageAssociatedType',
      'UnitOfMeasurementType' => 'UpsWsdl\\Classes\\Ship\\UnitOfMeasurementType',
      'NetCostDateType' => 'UpsWsdl\\Classes\\Ship\\NetCostDateType',
      'ProductWeightType' => 'UpsWsdl\\Classes\\Ship\\ProductWeightType',
      'ScheduleBType' => 'UpsWsdl\\Classes\\Ship\\ScheduleBType',
      'IFChargesType' => 'UpsWsdl\\Classes\\Ship\\IFChargesType',
      'OtherChargesType' => 'UpsWsdl\\Classes\\Ship\\OtherChargesType',
      'BlanketPeriodType' => 'UpsWsdl\\Classes\\Ship\\BlanketPeriodType',
      'LicenseType' => 'UpsWsdl\\Classes\\Ship\\LicenseType',
      'SoldToType' => 'UpsWsdl\\Classes\\Ship\\SoldToType',
      'PhoneType' => 'UpsWsdl\\Classes\\Ship\\PhoneType',
      'DDTCInformationType' => 'UpsWsdl\\Classes\\Ship\\DDTCInformationType',
      'EEILicenseType' => 'UpsWsdl\\Classes\\Ship\\EEILicenseType',
      'EEIFilingOptionType' => 'UpsWsdl\\Classes\\Ship\\EEIFilingOptionType',
      'UPSFiledType' => 'UpsWsdl\\Classes\\Ship\\UPSFiledType',
      'ShipperFiledType' => 'UpsWsdl\\Classes\\Ship\\ShipperFiledType',
      'EEIInformationType' => 'UpsWsdl\\Classes\\Ship\\EEIInformationType',
      'POAType' => 'UpsWsdl\\Classes\\Ship\\POAType',
      'UltimateConsigneeTypeType' => 'UpsWsdl\\Classes\\Ship\\UltimateConsigneeTypeType',
      'ShipmentRequest' => 'UpsWsdl\\Classes\\Ship\\ShipmentRequest',
      'ShipConfirmRequest' => 'UpsWsdl\\Classes\\Ship\\ShipConfirmRequest',
      'ShipAcceptRequest' => 'UpsWsdl\\Classes\\Ship\\ShipAcceptRequest',
      'ShipmentResponse' => 'UpsWsdl\\Classes\\Ship\\ShipmentResponse',
      'ShipConfirmResponse' => 'UpsWsdl\\Classes\\Ship\\ShipConfirmResponse',
      'ShipAcceptResponse' => 'UpsWsdl\\Classes\\Ship\\ShipAcceptResponse',
      'ShipmentType' => 'UpsWsdl\\Classes\\Ship\\ShipmentType',
      'ShipmentServiceOptions' => 'UpsWsdl\\Classes\\Ship\\ShipmentServiceOptions',
      'ReturnServiceType' => 'UpsWsdl\\Classes\\Ship\\ReturnServiceType',
      'ShipperType' => 'UpsWsdl\\Classes\\Ship\\ShipperType',
      'CompanyInfoType' => 'UpsWsdl\\Classes\\Ship\\CompanyInfoType',
      'ShipPhoneType' => 'UpsWsdl\\Classes\\Ship\\ShipPhoneType',
      'ShipAddressType' => 'UpsWsdl\\Classes\\Ship\\ShipAddressType',
      'ShipToType' => 'UpsWsdl\\Classes\\Ship\\ShipToType',
      'ShipToAddressType' => 'UpsWsdl\\Classes\\Ship\\ShipToAddressType',
      'ShipFromType' => 'UpsWsdl\\Classes\\Ship\\ShipFromType',
      'PrepaidType' => 'UpsWsdl\\Classes\\Ship\\PrepaidType',
      'BillShipperType' => 'UpsWsdl\\Classes\\Ship\\BillShipperType',
      'CreditCardType' => 'UpsWsdl\\Classes\\Ship\\CreditCardType',
      'CreditCardAddressType' => 'UpsWsdl\\Classes\\Ship\\CreditCardAddressType',
      'BillThirdPartyChargeType' => 'UpsWsdl\\Classes\\Ship\\BillThirdPartyChargeType',
      'AccountAddressType' => 'UpsWsdl\\Classes\\Ship\\AccountAddressType',
      'FreightCollectType' => 'UpsWsdl\\Classes\\Ship\\FreightCollectType',
      'BillReceiverType' => 'UpsWsdl\\Classes\\Ship\\BillReceiverType',
      'BillReceiverAddressType' => 'UpsWsdl\\Classes\\Ship\\BillReceiverAddressType',
      'PaymentInfoType' => 'UpsWsdl\\Classes\\Ship\\PaymentInfoType',
      'ShipmentChargeType' => 'UpsWsdl\\Classes\\Ship\\ShipmentChargeType',
      'FRSPaymentInfoType' => 'UpsWsdl\\Classes\\Ship\\FRSPaymentInfoType',
      'PaymentType' => 'UpsWsdl\\Classes\\Ship\\PaymentType',
      'RateInfoType' => 'UpsWsdl\\Classes\\Ship\\RateInfoType',
      'ReferenceNumberType' => 'UpsWsdl\\Classes\\Ship\\ReferenceNumberType',
      'ServiceType' => 'UpsWsdl\\Classes\\Ship\\ServiceType',
      'CurrencyMonetaryType' => 'UpsWsdl\\Classes\\Ship\\CurrencyMonetaryType',
      'ShipmentServiceOptionsType' => 'UpsWsdl\\Classes\\Ship\\ShipmentServiceOptionsType',
      'PreAlertNotificationType' => 'UpsWsdl\\Classes\\Ship\\PreAlertNotificationType',
      'PreAlertEMailMessageType' => 'UpsWsdl\\Classes\\Ship\\PreAlertEMailMessageType',
      'LocaleType' => 'UpsWsdl\\Classes\\Ship\\LocaleType',
      'PreAlertVoiceMessageType' => 'UpsWsdl\\Classes\\Ship\\PreAlertVoiceMessageType',
      'PreAlertTextMessageType' => 'UpsWsdl\\Classes\\Ship\\PreAlertTextMessageType',
      'ContactInfoType' => 'UpsWsdl\\Classes\\Ship\\ContactInfoType',
      'CODType' => 'UpsWsdl\\Classes\\Ship\\CODType',
      'ShipmentServiceOptionsAccessPointCODType' => 'UpsWsdl\\Classes\\Ship\\ShipmentServiceOptionsAccessPointCODType',
      'NotificationType' => 'UpsWsdl\\Classes\\Ship\\NotificationType',
      'LabelDeliveryType' => 'UpsWsdl\\Classes\\Ship\\LabelDeliveryType',
      'EmailDetailsType' => 'UpsWsdl\\Classes\\Ship\\EmailDetailsType',
      'PackageType' => 'UpsWsdl\\Classes\\Ship\\PackageType',
      'PackagingType' => 'UpsWsdl\\Classes\\Ship\\PackagingType',
      'DimensionsType' => 'UpsWsdl\\Classes\\Ship\\DimensionsType',
      'ShipUnitOfMeasurementType' => 'UpsWsdl\\Classes\\Ship\\ShipUnitOfMeasurementType',
      'PackageWeightType' => 'UpsWsdl\\Classes\\Ship\\PackageWeightType',
      'PackageServiceOptionsType' => 'UpsWsdl\\Classes\\Ship\\PackageServiceOptionsType',
      'PackageDeclaredValueType' => 'UpsWsdl\\Classes\\Ship\\PackageDeclaredValueType',
      'DeclaredValueType' => 'UpsWsdl\\Classes\\Ship\\DeclaredValueType',
      'DeliveryConfirmationType' => 'UpsWsdl\\Classes\\Ship\\DeliveryConfirmationType',
      'LabelMethodType' => 'UpsWsdl\\Classes\\Ship\\LabelMethodType',
      'VerbalConfirmationType' => 'UpsWsdl\\Classes\\Ship\\VerbalConfirmationType',
      'PSOCODType' => 'UpsWsdl\\Classes\\Ship\\PSOCODType',
      'PackageServiceOptionsAccessPointCODType' => 'UpsWsdl\\Classes\\Ship\\PackageServiceOptionsAccessPointCODType',
      'PSONotificationType' => 'UpsWsdl\\Classes\\Ship\\PSONotificationType',
      'LabelSpecificationType' => 'UpsWsdl\\Classes\\Ship\\LabelSpecificationType',
      'InstructionCodeDescriptionType' => 'UpsWsdl\\Classes\\Ship\\InstructionCodeDescriptionType',
      'LabelImageFormatType' => 'UpsWsdl\\Classes\\Ship\\LabelImageFormatType',
      'LabelStockSizeType' => 'UpsWsdl\\Classes\\Ship\\LabelStockSizeType',
      'CommodityType' => 'UpsWsdl\\Classes\\Ship\\CommodityType',
      'NMFCType' => 'UpsWsdl\\Classes\\Ship\\NMFCType',
      'ShipmentResultsType' => 'UpsWsdl\\Classes\\Ship\\ShipmentResultsType',
      'DisclaimerType' => 'UpsWsdl\\Classes\\Ship\\DisclaimerType',
      'ShipmentChargesType' => 'UpsWsdl\\Classes\\Ship\\ShipmentChargesType',
      'NegotiatedRateChargesType' => 'UpsWsdl\\Classes\\Ship\\NegotiatedRateChargesType',
      'ShipChargeType' => 'UpsWsdl\\Classes\\Ship\\ShipChargeType',
      'TaxChargeType' => 'UpsWsdl\\Classes\\Ship\\TaxChargeType',
      'FRSShipmentDataType' => 'UpsWsdl\\Classes\\Ship\\FRSShipmentDataType',
      'TransportationChargeType' => 'UpsWsdl\\Classes\\Ship\\TransportationChargeType',
      'BillingWeightType' => 'UpsWsdl\\Classes\\Ship\\BillingWeightType',
      'BillingUnitOfMeasurementType' => 'UpsWsdl\\Classes\\Ship\\BillingUnitOfMeasurementType',
      'PackageResultsType' => 'UpsWsdl\\Classes\\Ship\\PackageResultsType',
      'AccessorialType' => 'UpsWsdl\\Classes\\Ship\\AccessorialType',
      'LabelType' => 'UpsWsdl\\Classes\\Ship\\LabelType',
      'ReceiptType' => 'UpsWsdl\\Classes\\Ship\\ReceiptType',
      'ImageType' => 'UpsWsdl\\Classes\\Ship\\ImageType',
      'FormType' => 'UpsWsdl\\Classes\\Ship\\FormType',
      'FormImageType' => 'UpsWsdl\\Classes\\Ship\\FormImageType',
      'ImageFormatType' => 'UpsWsdl\\Classes\\Ship\\ImageFormatType',
      'SCReportType' => 'UpsWsdl\\Classes\\Ship\\SCReportType',
      'HighValueReportType' => 'UpsWsdl\\Classes\\Ship\\HighValueReportType',
      'DryIceType' => 'UpsWsdl\\Classes\\Ship\\DryIceType',
      'DryIceWeightType' => 'UpsWsdl\\Classes\\Ship\\DryIceWeightType',
      'ReceiptSpecificationType' => 'UpsWsdl\\Classes\\Ship\\ReceiptSpecificationType',
      'ReceiptImageFormatType' => 'UpsWsdl\\Classes\\Ship\\ReceiptImageFormatType',
      'TaxIDCodeDescType' => 'UpsWsdl\\Classes\\Ship\\TaxIDCodeDescType',
      'IndicationType' => 'UpsWsdl\\Classes\\Ship\\IndicationType',
      'AlternateDeliveryAddressType' => 'UpsWsdl\\Classes\\Ship\\AlternateDeliveryAddressType',
      'ShipmentServiceOptionsNotificationVoiceMessageType' => 'UpsWsdl\\Classes\\Ship\\ShipmentServiceOptionsNotificationVoiceMessageType',
      'ShipmentServiceOptionsNotificationTextMessageType' => 'UpsWsdl\\Classes\\Ship\\ShipmentServiceOptionsNotificationTextMessageType',
      'ADLAddressType' => 'UpsWsdl\\Classes\\Ship\\ADLAddressType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'Ship.wsdl')
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
     * @param ShipmentRequest $Body
     * @return ShipmentResponse
     */
    public function ProcessShipment(ShipmentRequest $Body)
    {
      return $this->__soapCall('ProcessShipment', array($Body));
    }

    /**
     * @param ShipConfirmRequest $Body
     * @return ShipConfirmResponse
     */
    public function ProcessShipConfirm(ShipConfirmRequest $Body)
    {
      return $this->__soapCall('ProcessShipConfirm', array($Body));
    }

    /**
     * @param ShipAcceptRequest $Body
     * @return ShipAcceptResponse
     */
    public function ProcessShipAccept(ShipAcceptRequest $Body)
    {
      return $this->__soapCall('ProcessShipAccept', array($Body));
    }

}
