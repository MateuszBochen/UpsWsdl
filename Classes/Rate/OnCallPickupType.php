<?php

namespace UpsWsdl\Classes\Rate;

class OnCallPickupType
{

    /**
     * @var ScheduleType $Schedule
     */
    protected $Schedule = null;

    /**
     * @param ScheduleType $Schedule
     */
    public function __construct($Schedule = null)
    {
      $this->Schedule = $Schedule;
    }

    /**
     * @return ScheduleType
     */
    public function getSchedule()
    {
      return $this->Schedule;
    }

    /**
     * @param ScheduleType $Schedule
     * @return \UpsWsdl\Classes\Rate\OnCallPickupType
     */
    public function setSchedule($Schedule)
    {
      $this->Schedule = $Schedule;
      return $this;
    }

}
