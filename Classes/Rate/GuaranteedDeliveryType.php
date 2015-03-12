<?php

namespace UpsWsdl\Classes\Rate;

class GuaranteedDeliveryType
{

    /**
     * @var string $BusinessDaysInTransit
     */
    protected $BusinessDaysInTransit = null;

    /**
     * @var string $DeliveryByTime
     */
    protected $DeliveryByTime = null;

    /**
     * @param string $BusinessDaysInTransit
     * @param string $DeliveryByTime
     */
    public function __construct($BusinessDaysInTransit = null, $DeliveryByTime = null)
    {
      $this->BusinessDaysInTransit = $BusinessDaysInTransit;
      $this->DeliveryByTime = $DeliveryByTime;
    }

    /**
     * @return string
     */
    public function getBusinessDaysInTransit()
    {
      return $this->BusinessDaysInTransit;
    }

    /**
     * @param string $BusinessDaysInTransit
     * @return \UpsWsdl\Classes\Rate\GuaranteedDeliveryType
     */
    public function setBusinessDaysInTransit($BusinessDaysInTransit)
    {
      $this->BusinessDaysInTransit = $BusinessDaysInTransit;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryByTime()
    {
      return $this->DeliveryByTime;
    }

    /**
     * @param string $DeliveryByTime
     * @return \UpsWsdl\Classes\Rate\GuaranteedDeliveryType
     */
    public function setDeliveryByTime($DeliveryByTime)
    {
      $this->DeliveryByTime = $DeliveryByTime;
      return $this;
    }

}
