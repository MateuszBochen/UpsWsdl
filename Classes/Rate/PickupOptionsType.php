<?php

namespace UpsWsdl\Classes\Rate;

class PickupOptionsType
{

    /**
     * @var string $LiftGateAtPickupIndicator
     */
    protected $LiftGateAtPickupIndicator = null;

    /**
     * @var string $HoldForPickupIndicator
     */
    protected $HoldForPickupIndicator = null;

    /**
     * @param string $LiftGateAtPickupIndicator
     * @param string $HoldForPickupIndicator
     */
    public function __construct($LiftGateAtPickupIndicator = null, $HoldForPickupIndicator = null)
    {
      $this->LiftGateAtPickupIndicator = $LiftGateAtPickupIndicator;
      $this->HoldForPickupIndicator = $HoldForPickupIndicator;
    }

    /**
     * @return string
     */
    public function getLiftGateAtPickupIndicator()
    {
      return $this->LiftGateAtPickupIndicator;
    }

    /**
     * @param string $LiftGateAtPickupIndicator
     * @return \UpsWsdl\Classes\Rate\PickupOptionsType
     */
    public function setLiftGateAtPickupIndicator($LiftGateAtPickupIndicator)
    {
      $this->LiftGateAtPickupIndicator = $LiftGateAtPickupIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getHoldForPickupIndicator()
    {
      return $this->HoldForPickupIndicator;
    }

    /**
     * @param string $HoldForPickupIndicator
     * @return \UpsWsdl\Classes\Rate\PickupOptionsType
     */
    public function setHoldForPickupIndicator($HoldForPickupIndicator)
    {
      $this->HoldForPickupIndicator = $HoldForPickupIndicator;
      return $this;
    }

}
