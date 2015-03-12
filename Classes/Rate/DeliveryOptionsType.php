<?php

namespace UpsWsdl\Classes\Rate;

class DeliveryOptionsType
{

    /**
     * @var string $LiftGateAtDeliveryIndicator
     */
    protected $LiftGateAtDeliveryIndicator = null;

    /**
     * @var string $DropOffAtUPSFacilityIndicator
     */
    protected $DropOffAtUPSFacilityIndicator = null;

    /**
     * @param string $LiftGateAtDeliveryIndicator
     * @param string $DropOffAtUPSFacilityIndicator
     */
    public function __construct($LiftGateAtDeliveryIndicator = null, $DropOffAtUPSFacilityIndicator = null)
    {
      $this->LiftGateAtDeliveryIndicator = $LiftGateAtDeliveryIndicator;
      $this->DropOffAtUPSFacilityIndicator = $DropOffAtUPSFacilityIndicator;
    }

    /**
     * @return string
     */
    public function getLiftGateAtDeliveryIndicator()
    {
      return $this->LiftGateAtDeliveryIndicator;
    }

    /**
     * @param string $LiftGateAtDeliveryIndicator
     * @return \UpsWsdl\Classes\Rate\DeliveryOptionsType
     */
    public function setLiftGateAtDeliveryIndicator($LiftGateAtDeliveryIndicator)
    {
      $this->LiftGateAtDeliveryIndicator = $LiftGateAtDeliveryIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropOffAtUPSFacilityIndicator()
    {
      return $this->DropOffAtUPSFacilityIndicator;
    }

    /**
     * @param string $DropOffAtUPSFacilityIndicator
     * @return \UpsWsdl\Classes\Rate\DeliveryOptionsType
     */
    public function setDropOffAtUPSFacilityIndicator($DropOffAtUPSFacilityIndicator)
    {
      $this->DropOffAtUPSFacilityIndicator = $DropOffAtUPSFacilityIndicator;
      return $this;
    }

}
