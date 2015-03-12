<?php

namespace UpsWsdl\Classes\Rate;

class InsuranceType
{

    /**
     * @var InsuranceValueType $BasicFlexibleParcelIndicator
     */
    protected $BasicFlexibleParcelIndicator = null;

    /**
     * @var InsuranceValueType $ExtendedFlexibleParcelIndicator
     */
    protected $ExtendedFlexibleParcelIndicator = null;

    /**
     * @var InsuranceValueType $TimeInTransitFlexibleParcelIndicator
     */
    protected $TimeInTransitFlexibleParcelIndicator = null;

    /**
     * @param InsuranceValueType $BasicFlexibleParcelIndicator
     * @param InsuranceValueType $ExtendedFlexibleParcelIndicator
     * @param InsuranceValueType $TimeInTransitFlexibleParcelIndicator
     */
    public function __construct($BasicFlexibleParcelIndicator = null, $ExtendedFlexibleParcelIndicator = null, $TimeInTransitFlexibleParcelIndicator = null)
    {
      $this->BasicFlexibleParcelIndicator = $BasicFlexibleParcelIndicator;
      $this->ExtendedFlexibleParcelIndicator = $ExtendedFlexibleParcelIndicator;
      $this->TimeInTransitFlexibleParcelIndicator = $TimeInTransitFlexibleParcelIndicator;
    }

    /**
     * @return InsuranceValueType
     */
    public function getBasicFlexibleParcelIndicator()
    {
      return $this->BasicFlexibleParcelIndicator;
    }

    /**
     * @param InsuranceValueType $BasicFlexibleParcelIndicator
     * @return \UpsWsdl\Classes\Rate\InsuranceType
     */
    public function setBasicFlexibleParcelIndicator($BasicFlexibleParcelIndicator)
    {
      $this->BasicFlexibleParcelIndicator = $BasicFlexibleParcelIndicator;
      return $this;
    }

    /**
     * @return InsuranceValueType
     */
    public function getExtendedFlexibleParcelIndicator()
    {
      return $this->ExtendedFlexibleParcelIndicator;
    }

    /**
     * @param InsuranceValueType $ExtendedFlexibleParcelIndicator
     * @return \UpsWsdl\Classes\Rate\InsuranceType
     */
    public function setExtendedFlexibleParcelIndicator($ExtendedFlexibleParcelIndicator)
    {
      $this->ExtendedFlexibleParcelIndicator = $ExtendedFlexibleParcelIndicator;
      return $this;
    }

    /**
     * @return InsuranceValueType
     */
    public function getTimeInTransitFlexibleParcelIndicator()
    {
      return $this->TimeInTransitFlexibleParcelIndicator;
    }

    /**
     * @param InsuranceValueType $TimeInTransitFlexibleParcelIndicator
     * @return \UpsWsdl\Classes\Rate\InsuranceType
     */
    public function setTimeInTransitFlexibleParcelIndicator($TimeInTransitFlexibleParcelIndicator)
    {
      $this->TimeInTransitFlexibleParcelIndicator = $TimeInTransitFlexibleParcelIndicator;
      return $this;
    }

}
