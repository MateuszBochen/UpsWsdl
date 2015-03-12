<?php

namespace UpsWsdl\Classes\Rate;

class DimensionsType
{

    /**
     * @var CodeDescriptionType $UnitOfMeasurement
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
     * @param CodeDescriptionType $UnitOfMeasurement
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
     * @return CodeDescriptionType
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param CodeDescriptionType $UnitOfMeasurement
     * @return \UpsWsdl\Classes\Rate\DimensionsType
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
     * @return \UpsWsdl\Classes\Rate\DimensionsType
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
     * @return \UpsWsdl\Classes\Rate\DimensionsType
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
     * @return \UpsWsdl\Classes\Rate\DimensionsType
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

}
