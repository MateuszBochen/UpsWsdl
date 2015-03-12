<?php

namespace UpsWsdl\Classes\Ship;

class DDTCInformationType
{

    /**
     * @var string $ITARExemptionNumber
     */
    protected $ITARExemptionNumber = null;

    /**
     * @var string $USMLCategoryCode
     */
    protected $USMLCategoryCode = null;

    /**
     * @var string $EligiblePartyIndicator
     */
    protected $EligiblePartyIndicator = null;

    /**
     * @var string $RegistrationNumber
     */
    protected $RegistrationNumber = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var UnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $SignificantMilitaryEquipmentIndicator
     */
    protected $SignificantMilitaryEquipmentIndicator = null;

    /**
     * @var string $ACMNumber
     */
    protected $ACMNumber = null;

    /**
     * @param string $ITARExemptionNumber
     * @param string $USMLCategoryCode
     * @param string $EligiblePartyIndicator
     * @param string $RegistrationNumber
     * @param string $Quantity
     * @param UnitOfMeasurementType $UnitOfMeasurement
     * @param string $SignificantMilitaryEquipmentIndicator
     * @param string $ACMNumber
     */
    public function __construct($ITARExemptionNumber = null, $USMLCategoryCode = null, $EligiblePartyIndicator = null, $RegistrationNumber = null, $Quantity = null, $UnitOfMeasurement = null, $SignificantMilitaryEquipmentIndicator = null, $ACMNumber = null)
    {
      $this->ITARExemptionNumber = $ITARExemptionNumber;
      $this->USMLCategoryCode = $USMLCategoryCode;
      $this->EligiblePartyIndicator = $EligiblePartyIndicator;
      $this->RegistrationNumber = $RegistrationNumber;
      $this->Quantity = $Quantity;
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->SignificantMilitaryEquipmentIndicator = $SignificantMilitaryEquipmentIndicator;
      $this->ACMNumber = $ACMNumber;
    }

    /**
     * @return string
     */
    public function getITARExemptionNumber()
    {
      return $this->ITARExemptionNumber;
    }

    /**
     * @param string $ITARExemptionNumber
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setITARExemptionNumber($ITARExemptionNumber)
    {
      $this->ITARExemptionNumber = $ITARExemptionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getUSMLCategoryCode()
    {
      return $this->USMLCategoryCode;
    }

    /**
     * @param string $USMLCategoryCode
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setUSMLCategoryCode($USMLCategoryCode)
    {
      $this->USMLCategoryCode = $USMLCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEligiblePartyIndicator()
    {
      return $this->EligiblePartyIndicator;
    }

    /**
     * @param string $EligiblePartyIndicator
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setEligiblePartyIndicator($EligiblePartyIndicator)
    {
      $this->EligiblePartyIndicator = $EligiblePartyIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
      return $this->RegistrationNumber;
    }

    /**
     * @param string $RegistrationNumber
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setRegistrationNumber($RegistrationNumber)
    {
      $this->RegistrationNumber = $RegistrationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return UnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param UnitOfMeasurementType $UnitOfMeasurement
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignificantMilitaryEquipmentIndicator()
    {
      return $this->SignificantMilitaryEquipmentIndicator;
    }

    /**
     * @param string $SignificantMilitaryEquipmentIndicator
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setSignificantMilitaryEquipmentIndicator($SignificantMilitaryEquipmentIndicator)
    {
      $this->SignificantMilitaryEquipmentIndicator = $SignificantMilitaryEquipmentIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getACMNumber()
    {
      return $this->ACMNumber;
    }

    /**
     * @param string $ACMNumber
     * @return \UpsWsdl\Classes\Ship\DDTCInformationType
     */
    public function setACMNumber($ACMNumber)
    {
      $this->ACMNumber = $ACMNumber;
      return $this;
    }

}
