<?php

namespace UpsWsdl\Classes\Ship;

class DimensionsType
{

    /**
     * @var ShipUnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $Length
     */
    protected $Length = null;

    /**
     * @var string $Width
     */
    protected $Width = null;

    /**
     * @var string $Height
     */
    protected $Height = null;

    /**
     * @param ShipUnitOfMeasurementType $UnitOfMeasurement
     * @param string $Length
     * @param string $Width
     * @param string $Height
     */
    public function __construct($UnitOfMeasurement = null, $Length = null, $Width = null, $Height = null)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
    }

    /**
     * @return ShipUnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param ShipUnitOfMeasurementType $UnitOfMeasurement
     * @return \UpsWsdl\Classes\Ship\DimensionsType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param string $Length
     * @return \UpsWsdl\Classes\Ship\DimensionsType
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param string $Width
     * @return \UpsWsdl\Classes\Ship\DimensionsType
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param string $Height
     * @return \UpsWsdl\Classes\Ship\DimensionsType
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

}
