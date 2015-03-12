<?php

namespace UpsWsdl\Classes\Ship;

class PackageType
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var PackagingType $Packaging
     */
    protected $Packaging = null;

    /**
     * @var DimensionsType $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var PackageWeightType $PackageWeight
     */
    protected $PackageWeight = null;

    /**
     * @var string $LargePackageIndicator
     */
    protected $LargePackageIndicator = null;

    /**
     * @var ReferenceNumberType $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @var string $AdditionalHandlingIndicator
     */
    protected $AdditionalHandlingIndicator = null;

    /**
     * @var PackageServiceOptionsType $PackageServiceOptions
     */
    protected $PackageServiceOptions = null;

    /**
     * @var CommodityType $Commodity
     */
    protected $Commodity = null;

    /**
     * @param string $Description
     * @param PackagingType $Packaging
     * @param DimensionsType $Dimensions
     * @param PackageWeightType $PackageWeight
     * @param string $LargePackageIndicator
     * @param ReferenceNumberType $ReferenceNumber
     * @param string $AdditionalHandlingIndicator
     * @param PackageServiceOptionsType $PackageServiceOptions
     * @param CommodityType $Commodity
     */
    public function __construct($Description = null, $Packaging = null, $Dimensions = null, $PackageWeight = null, $LargePackageIndicator = null, $ReferenceNumber = null, $AdditionalHandlingIndicator = null, $PackageServiceOptions = null, $Commodity = null)
    {
      $this->Description = $Description;
      $this->Packaging = $Packaging;
      $this->Dimensions = $Dimensions;
      $this->PackageWeight = $PackageWeight;
      $this->LargePackageIndicator = $LargePackageIndicator;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->AdditionalHandlingIndicator = $AdditionalHandlingIndicator;
      $this->PackageServiceOptions = $PackageServiceOptions;
      $this->Commodity = $Commodity;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return PackagingType
     */
    public function getPackaging()
    {
      return $this->Packaging;
    }

    /**
     * @param PackagingType $Packaging
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setPackaging($Packaging)
    {
      $this->Packaging = $Packaging;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setPackageWeight($PackageWeight)
    {
      $this->PackageWeight = $PackageWeight;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setLargePackageIndicator($LargePackageIndicator)
    {
      $this->LargePackageIndicator = $LargePackageIndicator;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setReferenceNumber($ReferenceNumber)
    {
      $this->ReferenceNumber = $ReferenceNumber;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setAdditionalHandlingIndicator($AdditionalHandlingIndicator)
    {
      $this->AdditionalHandlingIndicator = $AdditionalHandlingIndicator;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setPackageServiceOptions($PackageServiceOptions)
    {
      $this->PackageServiceOptions = $PackageServiceOptions;
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
     * @return \UpsWsdl\Classes\Ship\PackageType
     */
    public function setCommodity($Commodity)
    {
      $this->Commodity = $Commodity;
      return $this;
    }

}
