<?php


 function autoload_394830bf9408226a90efb3927106197c($class)
{
    $classes = array(
        'UpsWsdl\Classes\Ship\ShipService' => __DIR__ .'/ShipService.php',
        'UpsWsdl\Classes\Ship\UPSSecurity' => __DIR__ .'/UPSSecurity.php',
        'UpsWsdl\Classes\Ship\UsernameToken' => __DIR__ .'/UsernameToken.php',
        'UpsWsdl\Classes\Ship\ServiceAccessToken' => __DIR__ .'/ServiceAccessToken.php',
        'UpsWsdl\Classes\Ship\Errors' => __DIR__ .'/Errors.php',
        'UpsWsdl\Classes\Ship\ErrorDetailType' => __DIR__ .'/ErrorDetailType.php',
        'UpsWsdl\Classes\Ship\CodeType' => __DIR__ .'/CodeType.php',
        'UpsWsdl\Classes\Ship\AdditionalInfoType' => __DIR__ .'/AdditionalInfoType.php',
        'UpsWsdl\Classes\Ship\AdditionalCodeDescType' => __DIR__ .'/AdditionalCodeDescType.php',
        'UpsWsdl\Classes\Ship\LocationType' => __DIR__ .'/LocationType.php',
        'UpsWsdl\Classes\Ship\ClientInformationType' => __DIR__ .'/ClientInformationType.php',
        'UpsWsdl\Classes\Ship\Property' => __DIR__ .'/Property.php',
        'UpsWsdl\Classes\Ship\RequestType' => __DIR__ .'/RequestType.php',
        'UpsWsdl\Classes\Ship\TransactionReferenceType' => __DIR__ .'/TransactionReferenceType.php',
        'UpsWsdl\Classes\Ship\ResponseType' => __DIR__ .'/ResponseType.php',
        'UpsWsdl\Classes\Ship\CodeDescriptionType' => __DIR__ .'/CodeDescriptionType.php',
        'UpsWsdl\Classes\Ship\InternationalFormType' => __DIR__ .'/InternationalFormType.php',
        'UpsWsdl\Classes\Ship\UPSPremiumCareFormType' => __DIR__ .'/UPSPremiumCareFormType.php',
        'UpsWsdl\Classes\Ship\LanguageForUPSPremiumCareType' => __DIR__ .'/LanguageForUPSPremiumCareType.php',
        'UpsWsdl\Classes\Ship\UserCreatedFormType' => __DIR__ .'/UserCreatedFormType.php',
        'UpsWsdl\Classes\Ship\CN22FormType' => __DIR__ .'/CN22FormType.php',
        'UpsWsdl\Classes\Ship\CN22ContentType' => __DIR__ .'/CN22ContentType.php',
        'UpsWsdl\Classes\Ship\ContactType' => __DIR__ .'/ContactType.php',
        'UpsWsdl\Classes\Ship\ForwardAgentType' => __DIR__ .'/ForwardAgentType.php',
        'UpsWsdl\Classes\Ship\AddressType' => __DIR__ .'/AddressType.php',
        'UpsWsdl\Classes\Ship\UltimateConsigneeType' => __DIR__ .'/UltimateConsigneeType.php',
        'UpsWsdl\Classes\Ship\IntermediateConsigneeType' => __DIR__ .'/IntermediateConsigneeType.php',
        'UpsWsdl\Classes\Ship\ProducerType' => __DIR__ .'/ProducerType.php',
        'UpsWsdl\Classes\Ship\ProductType' => __DIR__ .'/ProductType.php',
        'UpsWsdl\Classes\Ship\ExcludeFromFormType' => __DIR__ .'/ExcludeFromFormType.php',
        'UpsWsdl\Classes\Ship\UnitType' => __DIR__ .'/UnitType.php',
        'UpsWsdl\Classes\Ship\PackingListInfoType' => __DIR__ .'/PackingListInfoType.php',
        'UpsWsdl\Classes\Ship\PackageAssociatedType' => __DIR__ .'/PackageAssociatedType.php',
        'UpsWsdl\Classes\Ship\UnitOfMeasurementType' => __DIR__ .'/UnitOfMeasurementType.php',
        'UpsWsdl\Classes\Ship\NetCostDateType' => __DIR__ .'/NetCostDateType.php',
        'UpsWsdl\Classes\Ship\ProductWeightType' => __DIR__ .'/ProductWeightType.php',
        'UpsWsdl\Classes\Ship\ScheduleBType' => __DIR__ .'/ScheduleBType.php',
        'UpsWsdl\Classes\Ship\IFChargesType' => __DIR__ .'/IFChargesType.php',
        'UpsWsdl\Classes\Ship\OtherChargesType' => __DIR__ .'/OtherChargesType.php',
        'UpsWsdl\Classes\Ship\BlanketPeriodType' => __DIR__ .'/BlanketPeriodType.php',
        'UpsWsdl\Classes\Ship\LicenseType' => __DIR__ .'/LicenseType.php',
        'UpsWsdl\Classes\Ship\SoldToType' => __DIR__ .'/SoldToType.php',
        'UpsWsdl\Classes\Ship\PhoneType' => __DIR__ .'/PhoneType.php',
        'UpsWsdl\Classes\Ship\DDTCInformationType' => __DIR__ .'/DDTCInformationType.php',
        'UpsWsdl\Classes\Ship\EEILicenseType' => __DIR__ .'/EEILicenseType.php',
        'UpsWsdl\Classes\Ship\EEIFilingOptionType' => __DIR__ .'/EEIFilingOptionType.php',
        'UpsWsdl\Classes\Ship\UPSFiledType' => __DIR__ .'/UPSFiledType.php',
        'UpsWsdl\Classes\Ship\ShipperFiledType' => __DIR__ .'/ShipperFiledType.php',
        'UpsWsdl\Classes\Ship\EEIInformationType' => __DIR__ .'/EEIInformationType.php',
        'UpsWsdl\Classes\Ship\POAType' => __DIR__ .'/POAType.php',
        'UpsWsdl\Classes\Ship\UltimateConsigneeTypeType' => __DIR__ .'/UltimateConsigneeTypeType.php',
        'UpsWsdl\Classes\Ship\ShipmentRequest' => __DIR__ .'/ShipmentRequest.php',
        'UpsWsdl\Classes\Ship\ShipConfirmRequest' => __DIR__ .'/ShipConfirmRequest.php',
        'UpsWsdl\Classes\Ship\ShipAcceptRequest' => __DIR__ .'/ShipAcceptRequest.php',
        'UpsWsdl\Classes\Ship\ShipmentResponse' => __DIR__ .'/ShipmentResponse.php',
        'UpsWsdl\Classes\Ship\ShipConfirmResponse' => __DIR__ .'/ShipConfirmResponse.php',
        'UpsWsdl\Classes\Ship\ShipAcceptResponse' => __DIR__ .'/ShipAcceptResponse.php',
        'UpsWsdl\Classes\Ship\ShipmentType' => __DIR__ .'/ShipmentType.php',
        'UpsWsdl\Classes\Ship\ShipmentServiceOptions' => __DIR__ .'/ShipmentServiceOptions.php',
        'UpsWsdl\Classes\Ship\ReturnServiceType' => __DIR__ .'/ReturnServiceType.php',
        'UpsWsdl\Classes\Ship\ShipperType' => __DIR__ .'/ShipperType.php',
        'UpsWsdl\Classes\Ship\CompanyInfoType' => __DIR__ .'/CompanyInfoType.php',
        'UpsWsdl\Classes\Ship\ShipPhoneType' => __DIR__ .'/ShipPhoneType.php',
        'UpsWsdl\Classes\Ship\ShipAddressType' => __DIR__ .'/ShipAddressType.php',
        'UpsWsdl\Classes\Ship\ShipToType' => __DIR__ .'/ShipToType.php',
        'UpsWsdl\Classes\Ship\ShipToAddressType' => __DIR__ .'/ShipToAddressType.php',
        'UpsWsdl\Classes\Ship\ShipFromType' => __DIR__ .'/ShipFromType.php',
        'UpsWsdl\Classes\Ship\PrepaidType' => __DIR__ .'/PrepaidType.php',
        'UpsWsdl\Classes\Ship\BillShipperType' => __DIR__ .'/BillShipperType.php',
        'UpsWsdl\Classes\Ship\CreditCardType' => __DIR__ .'/CreditCardType.php',
        'UpsWsdl\Classes\Ship\CreditCardAddressType' => __DIR__ .'/CreditCardAddressType.php',
        'UpsWsdl\Classes\Ship\BillThirdPartyChargeType' => __DIR__ .'/BillThirdPartyChargeType.php',
        'UpsWsdl\Classes\Ship\AccountAddressType' => __DIR__ .'/AccountAddressType.php',
        'UpsWsdl\Classes\Ship\FreightCollectType' => __DIR__ .'/FreightCollectType.php',
        'UpsWsdl\Classes\Ship\BillReceiverType' => __DIR__ .'/BillReceiverType.php',
        'UpsWsdl\Classes\Ship\BillReceiverAddressType' => __DIR__ .'/BillReceiverAddressType.php',
        'UpsWsdl\Classes\Ship\PaymentInfoType' => __DIR__ .'/PaymentInfoType.php',
        'UpsWsdl\Classes\Ship\ShipmentChargeType' => __DIR__ .'/ShipmentChargeType.php',
        'UpsWsdl\Classes\Ship\FRSPaymentInfoType' => __DIR__ .'/FRSPaymentInfoType.php',
        'UpsWsdl\Classes\Ship\PaymentType' => __DIR__ .'/PaymentType.php',
        'UpsWsdl\Classes\Ship\RateInfoType' => __DIR__ .'/RateInfoType.php',
        'UpsWsdl\Classes\Ship\ReferenceNumberType' => __DIR__ .'/ReferenceNumberType.php',
        'UpsWsdl\Classes\Ship\ServiceType' => __DIR__ .'/ServiceType.php',
        'UpsWsdl\Classes\Ship\CurrencyMonetaryType' => __DIR__ .'/CurrencyMonetaryType.php',
        'UpsWsdl\Classes\Ship\ShipmentServiceOptionsType' => __DIR__ .'/ShipmentServiceOptionsType.php',
        'UpsWsdl\Classes\Ship\PreAlertNotificationType' => __DIR__ .'/PreAlertNotificationType.php',
        'UpsWsdl\Classes\Ship\PreAlertEMailMessageType' => __DIR__ .'/PreAlertEMailMessageType.php',
        'UpsWsdl\Classes\Ship\LocaleType' => __DIR__ .'/LocaleType.php',
        'UpsWsdl\Classes\Ship\PreAlertVoiceMessageType' => __DIR__ .'/PreAlertVoiceMessageType.php',
        'UpsWsdl\Classes\Ship\PreAlertTextMessageType' => __DIR__ .'/PreAlertTextMessageType.php',
        'UpsWsdl\Classes\Ship\ContactInfoType' => __DIR__ .'/ContactInfoType.php',
        'UpsWsdl\Classes\Ship\CODType' => __DIR__ .'/CODType.php',
        'UpsWsdl\Classes\Ship\ShipmentServiceOptionsAccessPointCODType' => __DIR__ .'/ShipmentServiceOptionsAccessPointCODType.php',
        'UpsWsdl\Classes\Ship\NotificationType' => __DIR__ .'/NotificationType.php',
        'UpsWsdl\Classes\Ship\LabelDeliveryType' => __DIR__ .'/LabelDeliveryType.php',
        'UpsWsdl\Classes\Ship\EmailDetailsType' => __DIR__ .'/EmailDetailsType.php',
        'UpsWsdl\Classes\Ship\PackageType' => __DIR__ .'/PackageType.php',
        'UpsWsdl\Classes\Ship\PackagingType' => __DIR__ .'/PackagingType.php',
        'UpsWsdl\Classes\Ship\DimensionsType' => __DIR__ .'/DimensionsType.php',
        'UpsWsdl\Classes\Ship\ShipUnitOfMeasurementType' => __DIR__ .'/ShipUnitOfMeasurementType.php',
        'UpsWsdl\Classes\Ship\PackageWeightType' => __DIR__ .'/PackageWeightType.php',
        'UpsWsdl\Classes\Ship\PackageServiceOptionsType' => __DIR__ .'/PackageServiceOptionsType.php',
        'UpsWsdl\Classes\Ship\PackageDeclaredValueType' => __DIR__ .'/PackageDeclaredValueType.php',
        'UpsWsdl\Classes\Ship\DeclaredValueType' => __DIR__ .'/DeclaredValueType.php',
        'UpsWsdl\Classes\Ship\DeliveryConfirmationType' => __DIR__ .'/DeliveryConfirmationType.php',
        'UpsWsdl\Classes\Ship\LabelMethodType' => __DIR__ .'/LabelMethodType.php',
        'UpsWsdl\Classes\Ship\VerbalConfirmationType' => __DIR__ .'/VerbalConfirmationType.php',
        'UpsWsdl\Classes\Ship\PSOCODType' => __DIR__ .'/PSOCODType.php',
        'UpsWsdl\Classes\Ship\PackageServiceOptionsAccessPointCODType' => __DIR__ .'/PackageServiceOptionsAccessPointCODType.php',
        'UpsWsdl\Classes\Ship\PSONotificationType' => __DIR__ .'/PSONotificationType.php',
        'UpsWsdl\Classes\Ship\LabelSpecificationType' => __DIR__ .'/LabelSpecificationType.php',
        'UpsWsdl\Classes\Ship\InstructionCodeDescriptionType' => __DIR__ .'/InstructionCodeDescriptionType.php',
        'UpsWsdl\Classes\Ship\LabelImageFormatType' => __DIR__ .'/LabelImageFormatType.php',
        'UpsWsdl\Classes\Ship\LabelStockSizeType' => __DIR__ .'/LabelStockSizeType.php',
        'UpsWsdl\Classes\Ship\CommodityType' => __DIR__ .'/CommodityType.php',
        'UpsWsdl\Classes\Ship\NMFCType' => __DIR__ .'/NMFCType.php',
        'UpsWsdl\Classes\Ship\ShipmentResultsType' => __DIR__ .'/ShipmentResultsType.php',
        'UpsWsdl\Classes\Ship\DisclaimerType' => __DIR__ .'/DisclaimerType.php',
        'UpsWsdl\Classes\Ship\ShipmentChargesType' => __DIR__ .'/ShipmentChargesType.php',
        'UpsWsdl\Classes\Ship\NegotiatedRateChargesType' => __DIR__ .'/NegotiatedRateChargesType.php',
        'UpsWsdl\Classes\Ship\ShipChargeType' => __DIR__ .'/ShipChargeType.php',
        'UpsWsdl\Classes\Ship\TaxChargeType' => __DIR__ .'/TaxChargeType.php',
        'UpsWsdl\Classes\Ship\FRSShipmentDataType' => __DIR__ .'/FRSShipmentDataType.php',
        'UpsWsdl\Classes\Ship\TransportationChargeType' => __DIR__ .'/TransportationChargeType.php',
        'UpsWsdl\Classes\Ship\BillingWeightType' => __DIR__ .'/BillingWeightType.php',
        'UpsWsdl\Classes\Ship\BillingUnitOfMeasurementType' => __DIR__ .'/BillingUnitOfMeasurementType.php',
        'UpsWsdl\Classes\Ship\PackageResultsType' => __DIR__ .'/PackageResultsType.php',
        'UpsWsdl\Classes\Ship\AccessorialType' => __DIR__ .'/AccessorialType.php',
        'UpsWsdl\Classes\Ship\LabelType' => __DIR__ .'/LabelType.php',
        'UpsWsdl\Classes\Ship\ReceiptType' => __DIR__ .'/ReceiptType.php',
        'UpsWsdl\Classes\Ship\ImageType' => __DIR__ .'/ImageType.php',
        'UpsWsdl\Classes\Ship\FormType' => __DIR__ .'/FormType.php',
        'UpsWsdl\Classes\Ship\FormImageType' => __DIR__ .'/FormImageType.php',
        'UpsWsdl\Classes\Ship\ImageFormatType' => __DIR__ .'/ImageFormatType.php',
        'UpsWsdl\Classes\Ship\SCReportType' => __DIR__ .'/SCReportType.php',
        'UpsWsdl\Classes\Ship\HighValueReportType' => __DIR__ .'/HighValueReportType.php',
        'UpsWsdl\Classes\Ship\DryIceType' => __DIR__ .'/DryIceType.php',
        'UpsWsdl\Classes\Ship\DryIceWeightType' => __DIR__ .'/DryIceWeightType.php',
        'UpsWsdl\Classes\Ship\ReceiptSpecificationType' => __DIR__ .'/ReceiptSpecificationType.php',
        'UpsWsdl\Classes\Ship\ReceiptImageFormatType' => __DIR__ .'/ReceiptImageFormatType.php',
        'UpsWsdl\Classes\Ship\TaxIDCodeDescType' => __DIR__ .'/TaxIDCodeDescType.php',
        'UpsWsdl\Classes\Ship\IndicationType' => __DIR__ .'/IndicationType.php',
        'UpsWsdl\Classes\Ship\AlternateDeliveryAddressType' => __DIR__ .'/AlternateDeliveryAddressType.php',
        'UpsWsdl\Classes\Ship\ShipmentServiceOptionsNotificationVoiceMessageType' => __DIR__ .'/ShipmentServiceOptionsNotificationVoiceMessageType.php',
        'UpsWsdl\Classes\Ship\ShipmentServiceOptionsNotificationTextMessageType' => __DIR__ .'/ShipmentServiceOptionsNotificationTextMessageType.php',
        'UpsWsdl\Classes\Ship\ADLAddressType' => __DIR__ .'/ADLAddressType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_394830bf9408226a90efb3927106197c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
