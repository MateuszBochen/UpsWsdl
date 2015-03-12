<?php

namespace UpsWsdl\Classes\Ship;

class UnitType
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var UnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Number
     * @param UnitOfMeasurementType $UnitOfMeasurement
     * @param string $Value
     */
    public function __construct($Number = null, $UnitOfMeasurement = null, $Value = null)
    {
      $this->Number = $Number;
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \UpsWsdl\Classes\Ship\UnitType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \UpsWsdl\Classes\Ship\UnitType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \UpsWsdl\Classes\Ship\UnitType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
