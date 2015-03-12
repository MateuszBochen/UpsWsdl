<?php

namespace UpsWsdl\Classes\Rate;

class PackageType
{

    /**
     * @var CodeDescriptionType $PackagingType
     */
    protected $PackagingType = null;

    /**
     * @var DimensionsType $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var PackageWeightType $PackageWeight
     */
    protected $PackageWeight = null;

    /**
     * @var CommodityType $Commodity
     */
    protected $Commodity = null;

    /**
     * @var string $LargePackageIndicator
     */
    protected $LargePackageIndicator = null;

    /**
     * @var PackageServiceOptionsType $PackageServiceOptions
     */
    protected $PackageServiceOptions = null;

    /**
     * @var string $AdditionalHandlingIndicator
     */
    protected $AdditionalHandlingIndicator = null;

    /**
     * @param CodeDescriptionType $PackagingType
     * @param DimensionsType $Dimensions
     * @param PackageWeightType $PackageWeight
     * @param CommodityType $Commodity
     * @param string $LargePackageIndicator
     * @param PackageServiceOptionsType $PackageServiceOptions
     * @param string $AdditionalHandlingIndicator
     */
    public function __construct($PackagingType = null, $Dimensions = null, $PackageWeight = null, $Commodity = null, $LargePackageIndicator = null, $PackageServiceOptions = null, $AdditionalHandlingIndicator = null)
    {
      $this->PackagingType = $PackagingType;
      $this->Dimensions = $Dimensions;
      $this->PackageWeight = $PackageWeight;
      $this->Commodity = $Commodity;
      $this->LargePackageIndicator = $LargePackageIndicator;
      $this->PackageServiceOptions = $PackageServiceOptions;
      $this->AdditionalHandlingIndicator = $AdditionalHandlingIndicator;
    }

    /**
     * @return CodeDescriptionType
     */
    public function getPackagingType()
    {
      return $this->PackagingType;
    }

    /**
     * @param CodeDescriptionType $PackagingType
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setPackagingType($PackagingType)
    {
      $this->PackagingType = $PackagingType;
      return $this;
    }

    /**
     * @return DimensionsType
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param DimensionsType $Dimensions
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return PackageWeightType
     */
    public function getPackageWeight()
    {
      return $this->PackageWeight;
    }

    /**
     * @param PackageWeightType $PackageWeight
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setPackageWeight($PackageWeight)
    {
      $this->PackageWeight = $PackageWeight;
      return $this;
    }

    /**
     * @return CommodityType
     */
    public function getCommodity()
    {
      return $this->Commodity;
    }

    /**
     * @param CommodityType $Commodity
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setCommodity($Commodity)
    {
      $this->Commodity = $Commodity;
      return $this;
    }

    /**
     * @return string
     */
    public function getLargePackageIndicator()
    {
      return $this->LargePackageIndicator;
    }

    /**
     * @param string $LargePackageIndicator
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setLargePackageIndicator($LargePackageIndicator)
    {
      $this->LargePackageIndicator = $LargePackageIndicator;
      return $this;
    }

    /**
     * @return PackageServiceOptionsType
     */
    public function getPackageServiceOptions()
    {
      return $this->PackageServiceOptions;
    }

    /**
     * @param PackageServiceOptionsType $PackageServiceOptions
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setPackageServiceOptions($PackageServiceOptions)
    {
      $this->PackageServiceOptions = $PackageServiceOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalHandlingIndicator()
    {
      return $this->AdditionalHandlingIndicator;
    }

    /**
     * @param string $AdditionalHandlingIndicator
     * @return \UpsWsdl\Classes\Rate\PackageType
     */
    public function setAdditionalHandlingIndicator($AdditionalHandlingIndicator)
    {
      $this->AdditionalHandlingIndicator = $AdditionalHandlingIndicator;
      return $this;
    }

}
