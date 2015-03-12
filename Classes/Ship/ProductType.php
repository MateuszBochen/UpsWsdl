<?php

namespace UpsWsdl\Classes\Ship;

class ProductType
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var UnitType $Unit
     */
    protected $Unit = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $PartNumber
     */
    protected $PartNumber = null;

    /**
     * @var string $OriginCountryCode
     */
    protected $OriginCountryCode = null;

    /**
     * @var string $JointProductionIndicator
     */
    protected $JointProductionIndicator = null;

    /**
     * @var string $NetCostCode
     */
    protected $NetCostCode = null;

    /**
     * @var NetCostDateType $NetCostDateRange
     */
    protected $NetCostDateRange = null;

    /**
     * @var string $PreferenceCriteria
     */
    protected $PreferenceCriteria = null;

    /**
     * @var string $ProducerInfo
     */
    protected $ProducerInfo = null;

    /**
     * @var string $MarksAndNumbers
     */
    protected $MarksAndNumbers = null;

    /**
     * @var string $NumberOfPackagesPerCommodity
     */
    protected $NumberOfPackagesPerCommodity = null;

    /**
     * @var ProductWeightType $ProductWeight
     */
    protected $ProductWeight = null;

    /**
     * @var string $VehicleID
     */
    protected $VehicleID = null;

    /**
     * @var ScheduleBType $ScheduleB
     */
    protected $ScheduleB = null;

    /**
     * @var string $ExportType
     */
    protected $ExportType = null;

    /**
     * @var string $SEDTotalValue
     */
    protected $SEDTotalValue = null;

    /**
     * @var ExcludeFromFormType $ExcludeFromForm
     */
    protected $ExcludeFromForm = null;

    /**
     * @var string $ProductCurrencyCode
     */
    protected $ProductCurrencyCode = null;

    /**
     * @var PackingListInfoType $PackingListInfo
     */
    protected $PackingListInfo = null;

    /**
     * @var EEIInformationType $EEIInformation
     */
    protected $EEIInformation = null;

    /**
     * @param string $Description
     * @param UnitType $Unit
     * @param string $CommodityCode
     * @param string $PartNumber
     * @param string $OriginCountryCode
     * @param string $JointProductionIndicator
     * @param string $NetCostCode
     * @param NetCostDateType $NetCostDateRange
     * @param string $PreferenceCriteria
     * @param string $ProducerInfo
     * @param string $MarksAndNumbers
     * @param string $NumberOfPackagesPerCommodity
     * @param ProductWeightType $ProductWeight
     * @param string $VehicleID
     * @param ScheduleBType $ScheduleB
     * @param string $ExportType
     * @param string $SEDTotalValue
     * @param ExcludeFromFormType $ExcludeFromForm
     * @param string $ProductCurrencyCode
     * @param PackingListInfoType $PackingListInfo
     * @param EEIInformationType $EEIInformation
     */
    public function __construct($Description = null, $Unit = null, $CommodityCode = null, $PartNumber = null, $OriginCountryCode = null, $JointProductionIndicator = null, $NetCostCode = null, $NetCostDateRange = null, $PreferenceCriteria = null, $ProducerInfo = null, $MarksAndNumbers = null, $NumberOfPackagesPerCommodity = null, $ProductWeight = null, $VehicleID = null, $ScheduleB = null, $ExportType = null, $SEDTotalValue = null, $ExcludeFromForm = null, $ProductCurrencyCode = null, $PackingListInfo = null, $EEIInformation = null)
    {
      $this->Description = $Description;
      $this->Unit = $Unit;
      $this->CommodityCode = $CommodityCode;
      $this->PartNumber = $PartNumber;
      $this->OriginCountryCode = $OriginCountryCode;
      $this->JointProductionIndicator = $JointProductionIndicator;
      $this->NetCostCode = $NetCostCode;
      $this->NetCostDateRange = $NetCostDateRange;
      $this->PreferenceCriteria = $PreferenceCriteria;
      $this->ProducerInfo = $ProducerInfo;
      $this->MarksAndNumbers = $MarksAndNumbers;
      $this->NumberOfPackagesPerCommodity = $NumberOfPackagesPerCommodity;
      $this->ProductWeight = $ProductWeight;
      $this->VehicleID = $VehicleID;
      $this->ScheduleB = $ScheduleB;
      $this->ExportType = $ExportType;
      $this->SEDTotalValue = $SEDTotalValue;
      $this->ExcludeFromForm = $ExcludeFromForm;
      $this->ProductCurrencyCode = $ProductCurrencyCode;
      $this->PackingListInfo = $PackingListInfo;
      $this->EEIInformation = $EEIInformation;
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
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return UnitType
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param UnitType $Unit
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
      return $this->CommodityCode;
    }

    /**
     * @param string $CommodityCode
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setCommodityCode($CommodityCode)
    {
      $this->CommodityCode = $CommodityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartNumber()
    {
      return $this->PartNumber;
    }

    /**
     * @param string $PartNumber
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setPartNumber($PartNumber)
    {
      $this->PartNumber = $PartNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginCountryCode()
    {
      return $this->OriginCountryCode;
    }

    /**
     * @param string $OriginCountryCode
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setOriginCountryCode($OriginCountryCode)
    {
      $this->OriginCountryCode = $OriginCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getJointProductionIndicator()
    {
      return $this->JointProductionIndicator;
    }

    /**
     * @param string $JointProductionIndicator
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setJointProductionIndicator($JointProductionIndicator)
    {
      $this->JointProductionIndicator = $JointProductionIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetCostCode()
    {
      return $this->NetCostCode;
    }

    /**
     * @param string $NetCostCode
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setNetCostCode($NetCostCode)
    {
      $this->NetCostCode = $NetCostCode;
      return $this;
    }

    /**
     * @return NetCostDateType
     */
    public function getNetCostDateRange()
    {
      return $this->NetCostDateRange;
    }

    /**
     * @param NetCostDateType $NetCostDateRange
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setNetCostDateRange($NetCostDateRange)
    {
      $this->NetCostDateRange = $NetCostDateRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferenceCriteria()
    {
      return $this->PreferenceCriteria;
    }

    /**
     * @param string $PreferenceCriteria
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setPreferenceCriteria($PreferenceCriteria)
    {
      $this->PreferenceCriteria = $PreferenceCriteria;
      return $this;
    }

    /**
     * @return string
     */
    public function getProducerInfo()
    {
      return $this->ProducerInfo;
    }

    /**
     * @param string $ProducerInfo
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setProducerInfo($ProducerInfo)
    {
      $this->ProducerInfo = $ProducerInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarksAndNumbers()
    {
      return $this->MarksAndNumbers;
    }

    /**
     * @param string $MarksAndNumbers
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setMarksAndNumbers($MarksAndNumbers)
    {
      $this->MarksAndNumbers = $MarksAndNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfPackagesPerCommodity()
    {
      return $this->NumberOfPackagesPerCommodity;
    }

    /**
     * @param string $NumberOfPackagesPerCommodity
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setNumberOfPackagesPerCommodity($NumberOfPackagesPerCommodity)
    {
      $this->NumberOfPackagesPerCommodity = $NumberOfPackagesPerCommodity;
      return $this;
    }

    /**
     * @return ProductWeightType
     */
    public function getProductWeight()
    {
      return $this->ProductWeight;
    }

    /**
     * @param ProductWeightType $ProductWeight
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setProductWeight($ProductWeight)
    {
      $this->ProductWeight = $ProductWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleID()
    {
      return $this->VehicleID;
    }

    /**
     * @param string $VehicleID
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setVehicleID($VehicleID)
    {
      $this->VehicleID = $VehicleID;
      return $this;
    }

    /**
     * @return ScheduleBType
     */
    public function getScheduleB()
    {
      return $this->ScheduleB;
    }

    /**
     * @param ScheduleBType $ScheduleB
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setScheduleB($ScheduleB)
    {
      $this->ScheduleB = $ScheduleB;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportType()
    {
      return $this->ExportType;
    }

    /**
     * @param string $ExportType
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setExportType($ExportType)
    {
      $this->ExportType = $ExportType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEDTotalValue()
    {
      return $this->SEDTotalValue;
    }

    /**
     * @param string $SEDTotalValue
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setSEDTotalValue($SEDTotalValue)
    {
      $this->SEDTotalValue = $SEDTotalValue;
      return $this;
    }

    /**
     * @return ExcludeFromFormType
     */
    public function getExcludeFromForm()
    {
      return $this->ExcludeFromForm;
    }

    /**
     * @param ExcludeFromFormType $ExcludeFromForm
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setExcludeFromForm($ExcludeFromForm)
    {
      $this->ExcludeFromForm = $ExcludeFromForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCurrencyCode()
    {
      return $this->ProductCurrencyCode;
    }

    /**
     * @param string $ProductCurrencyCode
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setProductCurrencyCode($ProductCurrencyCode)
    {
      $this->ProductCurrencyCode = $ProductCurrencyCode;
      return $this;
    }

    /**
     * @return PackingListInfoType
     */
    public function getPackingListInfo()
    {
      return $this->PackingListInfo;
    }

    /**
     * @param PackingListInfoType $PackingListInfo
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setPackingListInfo($PackingListInfo)
    {
      $this->PackingListInfo = $PackingListInfo;
      return $this;
    }

    /**
     * @return EEIInformationType
     */
    public function getEEIInformation()
    {
      return $this->EEIInformation;
    }

    /**
     * @param EEIInformationType $EEIInformation
     * @return \UpsWsdl\Classes\Ship\ProductType
     */
    public function setEEIInformation($EEIInformation)
    {
      $this->EEIInformation = $EEIInformation;
      return $this;
    }

}
