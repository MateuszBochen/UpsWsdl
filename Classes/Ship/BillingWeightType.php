<?php

namespace UpsWsdl\Classes\Ship;

class BillingWeightType
{

    /**
     * @var BillingUnitOfMeasurementType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @param BillingUnitOfMeasurementType $UnitOfMeasurement
     * @param string $Weight
     */
    public function __construct($UnitOfMeasurement = null, $Weight = null)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->Weight = $Weight;
    }

    /**
     * @return BillingUnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param BillingUnitOfMeasurementType $UnitOfMeasurement
     * @return \UpsWsdl\Classes\Ship\BillingWeightType
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
     * @return \UpsWsdl\Classes\Ship\BillingWeightType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}
