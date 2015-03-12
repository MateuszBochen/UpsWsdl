<?php

namespace UpsWsdl\Classes\Rate;

class ScheduleType
{

    /**
     * @var string $PickupDay
     */
    protected $PickupDay = null;

    /**
     * @var string $Method
     */
    protected $Method = null;

    /**
     * @param string $PickupDay
     * @param string $Method
     */
    public function __construct($PickupDay = null, $Method = null)
    {
      $this->PickupDay = $PickupDay;
      $this->Method = $Method;
    }

    /**
     * @return string
     */
    public function getPickupDay()
    {
      return $this->PickupDay;
    }

    /**
     * @param string $PickupDay
     * @return \UpsWsdl\Classes\Rate\ScheduleType
     */
    public function setPickupDay($PickupDay)
    {
      $this->PickupDay = $PickupDay;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->Method;
    }

    /**
     * @param string $Method
     * @return \UpsWsdl\Classes\Rate\ScheduleType
     */
    public function setMethod($Method)
    {
      $this->Method = $Method;
      return $this;
    }

}
