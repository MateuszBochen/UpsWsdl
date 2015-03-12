<?php

namespace UpsWsdl\Classes\Ship;

class DryIceType
{

    /**
     * @var string $RegulationSet
     */
    protected $RegulationSet = null;

    /**
     * @var DryIceWeightType $DryIceWeight
     */
    protected $DryIceWeight = null;

    /**
     * @var string $MedicalUseIndicator
     */
    protected $MedicalUseIndicator = null;

    /**
     * @param string $RegulationSet
     * @param DryIceWeightType $DryIceWeight
     * @param string $MedicalUseIndicator
     */
    public function __construct($RegulationSet = null, $DryIceWeight = null, $MedicalUseIndicator = null)
    {
      $this->RegulationSet = $RegulationSet;
      $this->DryIceWeight = $DryIceWeight;
      $this->MedicalUseIndicator = $MedicalUseIndicator;
    }

    /**
     * @return string
     */
    public function getRegulationSet()
    {
      return $this->RegulationSet;
    }

    /**
     * @param string $RegulationSet
     * @return \UpsWsdl\Classes\Ship\DryIceType
     */
    public function setRegulationSet($RegulationSet)
    {
      $this->RegulationSet = $RegulationSet;
      return $this;
    }

    /**
     * @return DryIceWeightType
     */
    public function getDryIceWeight()
    {
      return $this->DryIceWeight;
    }

    /**
     * @param DryIceWeightType $DryIceWeight
     * @return \UpsWsdl\Classes\Ship\DryIceType
     */
    public function setDryIceWeight($DryIceWeight)
    {
      $this->DryIceWeight = $DryIceWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getMedicalUseIndicator()
    {
      return $this->MedicalUseIndicator;
    }

    /**
     * @param string $MedicalUseIndicator
     * @return \UpsWsdl\Classes\Ship\DryIceType
     */
    public function setMedicalUseIndicator($MedicalUseIndicator)
    {
      $this->MedicalUseIndicator = $MedicalUseIndicator;
      return $this;
    }

}
