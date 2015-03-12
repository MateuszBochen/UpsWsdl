<?php

namespace UpsWsdl\Classes\Rate;

class DeliveryConfirmationType
{

    /**
     * @var string $DCISType
     */
    protected $DCISType = null;

    /**
     * @param string $DCISType
     */
    public function __construct($DCISType = null)
    {
      $this->DCISType = $DCISType;
    }

    /**
     * @return string
     */
    public function getDCISType()
    {
      return $this->DCISType;
    }

    /**
     * @param string $DCISType
     * @return \UpsWsdl\Classes\Rate\DeliveryConfirmationType
     */
    public function setDCISType($DCISType)
    {
      $this->DCISType = $DCISType;
      return $this;
    }

}
