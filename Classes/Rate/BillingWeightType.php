<?php

namespace UpsWsdl\Classes\Rate;

class BillingWeightType
{

    /**
     * @var CodeDescriptionType $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @param CodeDescriptionType $UnitOfMeasurement
     * @param string $Weight
     */
    public function __construct($UnitOfMeasurement = null, $Weight = null)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      $this->Weight = $Weight;
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
     * @return \UpsWsdl\Classes\Rate\BillingWeightType
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
     * @return \UpsWsdl\Classes\Rate\BillingWeightType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}
