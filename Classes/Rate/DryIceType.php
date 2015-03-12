<?php

namespace UpsWsdl\Classes\Rate;

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
     * @var string $AuditRequired
     */
    protected $AuditRequired = null;

    /**
     * @param string $RegulationSet
     * @param DryIceWeightType $DryIceWeight
     * @param string $MedicalUseIndicator
     * @param string $AuditRequired
     */
    public function __construct($RegulationSet = null, $DryIceWeight = null, $MedicalUseIndicator = null, $AuditRequired = null)
    {
      $this->RegulationSet = $RegulationSet;
      $this->DryIceWeight = $DryIceWeight;
      $this->MedicalUseIndicator = $MedicalUseIndicator;
      $this->AuditRequired = $AuditRequired;
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
     * @return \UpsWsdl\Classes\Rate\DryIceType
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
     * @return \UpsWsdl\Classes\Rate\DryIceType
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
     * @return \UpsWsdl\Classes\Rate\DryIceType
     */
    public function setMedicalUseIndicator($MedicalUseIndicator)
    {
      $this->MedicalUseIndicator = $MedicalUseIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuditRequired()
    {
      return $this->AuditRequired;
    }

    /**
     * @param string $AuditRequired
     * @return \UpsWsdl\Classes\Rate\DryIceType
     */
    public function setAuditRequired($AuditRequired)
    {
      $this->AuditRequired = $AuditRequired;
      return $this;
    }

}
