<?php

namespace UpsWsdl\Classes\Ship;

class ScheduleBType
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Quantity
     */
    protected $Quantity = null;

    /**
     * @var UnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @param string $Number
     * @param string $Quantity
     * @param UnitOfMeasurementType $UnitOfMeasurement
     */
    public function __construct($Number = null, $Quantity = null, $UnitOfMeasurement = null)
    {
      $this->Number = $Number;
      $this->Quantity = $Quantity;
      $this->UnitOfMeasurement = $UnitOfMeasurement;
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
     * @return \UpsWsdl\Classes\Ship\ScheduleBType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \UpsWsdl\Classes\Ship\ScheduleBType
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
     * @return \UpsWsdl\Classes\Ship\ScheduleBType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

}
