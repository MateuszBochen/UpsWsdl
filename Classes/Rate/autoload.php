<?php


 function autoload_73f6dc8eba008f22f10ebb011e39254d($class)
{
    $classes = array(
        'UpsWsdl\Classes\Rate\RateService' => __DIR__ .'/RateService.php',
        'UpsWsdl\Classes\Rate\UPSSecurity' => __DIR__ .'/UPSSecurity.php',
        'UpsWsdl\Classes\Rate\UsernameToken' => __DIR__ .'/UsernameToken.php',
        'UpsWsdl\Classes\Rate\ServiceAccessToken' => __DIR__ .'/ServiceAccessToken.php',
        'UpsWsdl\Classes\Rate\Errors' => __DIR__ .'/Errors.php',
        'UpsWsdl\Classes\Rate\ErrorDetailType' => __DIR__ .'/ErrorDetailType.php',
        'UpsWsdl\Classes\Rate\CodeType' => __DIR__ .'/CodeType.php',
        'UpsWsdl\Classes\Rate\AdditionalInfoType' => __DIR__ .'/AdditionalInfoType.php',
        'UpsWsdl\Classes\Rate\AdditionalCodeDescType' => __DIR__ .'/AdditionalCodeDescType.php',
        'UpsWsdl\Classes\Rate\LocationType' => __DIR__ .'/LocationType.php',
        'UpsWsdl\Classes\Rate\ClientInformationType' => __DIR__ .'/ClientInformationType.php',
        'UpsWsdl\Classes\Rate\Property' => __DIR__ .'/Property.php',
        'UpsWsdl\Classes\Rate\RequestType' => __DIR__ .'/RequestType.php',
        'UpsWsdl\Classes\Rate\TransactionReferenceType' => __DIR__ .'/TransactionReferenceType.php',
        'UpsWsdl\Classes\Rate\ResponseType' => __DIR__ .'/ResponseType.php',
        'UpsWsdl\Classes\Rate\CodeDescriptionType' => __DIR__ .'/CodeDescriptionType.php',
        'UpsWsdl\Classes\Rate\RateRequest' => __DIR__ .'/RateRequest.php',
        'UpsWsdl\Classes\Rate\RateResponse' => __DIR__ .'/RateResponse.php',
        'UpsWsdl\Classes\Rate\BillingWeightType' => __DIR__ .'/BillingWeightType.php',
        'UpsWsdl\Classes\Rate\RatedPackageType' => __DIR__ .'/RatedPackageType.php',
        'UpsWsdl\Classes\Rate\AccessorialType' => __DIR__ .'/AccessorialType.php',
        'UpsWsdl\Classes\Rate\RatedShipmentType' => __DIR__ .'/RatedShipmentType.php',
        'UpsWsdl\Classes\Rate\DisclaimerType' => __DIR__ .'/DisclaimerType.php',
        'UpsWsdl\Classes\Rate\TaxChargeType' => __DIR__ .'/TaxChargeType.php',
        'UpsWsdl\Classes\Rate\TotalChargeType' => __DIR__ .'/TotalChargeType.php',
        'UpsWsdl\Classes\Rate\RatedShipmentInfoType' => __DIR__ .'/RatedShipmentInfoType.php',
        'UpsWsdl\Classes\Rate\ChargesType' => __DIR__ .'/ChargesType.php',
        'UpsWsdl\Classes\Rate\TransportationChargesType' => __DIR__ .'/TransportationChargesType.php',
        'UpsWsdl\Classes\Rate\FRSShipmentType' => __DIR__ .'/FRSShipmentType.php',
        'UpsWsdl\Classes\Rate\AddressType' => __DIR__ .'/AddressType.php',
        'UpsWsdl\Classes\Rate\ShipToAddressType' => __DIR__ .'/ShipToAddressType.php',
        'UpsWsdl\Classes\Rate\CODType' => __DIR__ .'/CODType.php',
        'UpsWsdl\Classes\Rate\CODAmountType' => __DIR__ .'/CODAmountType.php',
        'UpsWsdl\Classes\Rate\DeliveryConfirmationType' => __DIR__ .'/DeliveryConfirmationType.php',
        'UpsWsdl\Classes\Rate\DimensionsType' => __DIR__ .'/DimensionsType.php',
        'UpsWsdl\Classes\Rate\InsuredValueType' => __DIR__ .'/InsuredValueType.php',
        'UpsWsdl\Classes\Rate\OnCallPickupType' => __DIR__ .'/OnCallPickupType.php',
        'UpsWsdl\Classes\Rate\PackageType' => __DIR__ .'/PackageType.php',
        'UpsWsdl\Classes\Rate\CommodityType' => __DIR__ .'/CommodityType.php',
        'UpsWsdl\Classes\Rate\NMFCCommodityType' => __DIR__ .'/NMFCCommodityType.php',
        'UpsWsdl\Classes\Rate\PackageServiceOptionsType' => __DIR__ .'/PackageServiceOptionsType.php',
        'UpsWsdl\Classes\Rate\PackageServiceOptionsAccessPointCODType' => __DIR__ .'/PackageServiceOptionsAccessPointCODType.php',
        'UpsWsdl\Classes\Rate\DryIceType' => __DIR__ .'/DryIceType.php',
        'UpsWsdl\Classes\Rate\DryIceWeightType' => __DIR__ .'/DryIceWeightType.php',
        'UpsWsdl\Classes\Rate\ShipperDeclaredValueType' => __DIR__ .'/ShipperDeclaredValueType.php',
        'UpsWsdl\Classes\Rate\InsuranceType' => __DIR__ .'/InsuranceType.php',
        'UpsWsdl\Classes\Rate\InsuranceValueType' => __DIR__ .'/InsuranceValueType.php',
        'UpsWsdl\Classes\Rate\PackageWeightType' => __DIR__ .'/PackageWeightType.php',
        'UpsWsdl\Classes\Rate\UOMCodeDescriptionType' => __DIR__ .'/UOMCodeDescriptionType.php',
        'UpsWsdl\Classes\Rate\ShipmentRatingOptionsType' => __DIR__ .'/ShipmentRatingOptionsType.php',
        'UpsWsdl\Classes\Rate\ScheduleType' => __DIR__ .'/ScheduleType.php',
        'UpsWsdl\Classes\Rate\ShipFromType' => __DIR__ .'/ShipFromType.php',
        'UpsWsdl\Classes\Rate\ShipToType' => __DIR__ .'/ShipToType.php',
        'UpsWsdl\Classes\Rate\ShipmentType' => __DIR__ .'/ShipmentType.php',
        'UpsWsdl\Classes\Rate\AlternateDeliveryAddressType' => __DIR__ .'/AlternateDeliveryAddressType.php',
        'UpsWsdl\Classes\Rate\ADRType' => __DIR__ .'/ADRType.php',
        'UpsWsdl\Classes\Rate\IndicationType' => __DIR__ .'/IndicationType.php',
        'UpsWsdl\Classes\Rate\ShipmentChargesType' => __DIR__ .'/ShipmentChargesType.php',
        'UpsWsdl\Classes\Rate\ShipmentServiceOptionsType' => __DIR__ .'/ShipmentServiceOptionsType.php',
        'UpsWsdl\Classes\Rate\ShipmentServiceOptionsAccessPointCODType' => __DIR__ .'/ShipmentServiceOptionsAccessPointCODType.php',
        'UpsWsdl\Classes\Rate\ReturnServiceType' => __DIR__ .'/ReturnServiceType.php',
        'UpsWsdl\Classes\Rate\ImportControlType' => __DIR__ .'/ImportControlType.php',
        'UpsWsdl\Classes\Rate\RestrictedArticlesType' => __DIR__ .'/RestrictedArticlesType.php',
        'UpsWsdl\Classes\Rate\PickupOptionsType' => __DIR__ .'/PickupOptionsType.php',
        'UpsWsdl\Classes\Rate\DeliveryOptionsType' => __DIR__ .'/DeliveryOptionsType.php',
        'UpsWsdl\Classes\Rate\ShipperType' => __DIR__ .'/ShipperType.php',
        'UpsWsdl\Classes\Rate\GuaranteedDeliveryType' => __DIR__ .'/GuaranteedDeliveryType.php',
        'UpsWsdl\Classes\Rate\FRSPaymentInfoType' => __DIR__ .'/FRSPaymentInfoType.php',
        'UpsWsdl\Classes\Rate\PayerAddressType' => __DIR__ .'/PayerAddressType.php',
        'UpsWsdl\Classes\Rate\InvoiceLineTotalType' => __DIR__ .'/InvoiceLineTotalType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_73f6dc8eba008f22f10ebb011e39254d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
