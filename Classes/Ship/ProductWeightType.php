<?php

namespace UpsWsdl\Classes\Ship;

class ProductWeightType
{

    /**
     * @var UnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @param UnitOfMeasurementType $UnitOfMeasurement
     * @param string $Weight
     */
    public function __construct($UnitOfMeasurement = null, $Weight = null)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->Weight = $Weight;
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
     * @return \UpsWsdl\Classes\Ship\ProductWeightType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \UpsWsdl\Classes\Ship\ProductWeightType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}
