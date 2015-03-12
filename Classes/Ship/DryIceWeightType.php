<?php

namespace UpsWsdl\Classes\Ship;

class DryIceWeightType
{

    /**
     * @var ShipUnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @param ShipUnitOfMeasurementType $UnitOfMeasurement
     * @param string $Weight
     */
    public function __construct($UnitOfMeasurement = null, $Weight = null)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->Weight = $Weight;
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
     * @return \UpsWsdl\Classes\Ship\DryIceWeightType
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
     * @return \UpsWsdl\Classes\Ship\DryIceWeightType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}
