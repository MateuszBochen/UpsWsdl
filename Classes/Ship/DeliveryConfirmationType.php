<?php

namespace UpsWsdl\Classes\Ship;

class DeliveryConfirmationType
{

    /**
     * @var string $DCISType
     */
    protected $DCISType = null;

    /**
     * @var string $DCISNumber
     */
    protected $DCISNumber = null;

    /**
     * @param string $DCISType
     * @param string $DCISNumber
     */
    public function __construct($DCISType = null, $DCISNumber = null)
    {
      $this->DCISType = $DCISType;
      $this->DCISNumber = $DCISNumber;
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
     * @return \UpsWsdl\Classes\Ship\DeliveryConfirmationType
     */
    public function setDCISType($DCISType)
    {
      $this->DCISType = $DCISType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDCISNumber()
    {
      return $this->DCISNumber;
    }

    /**
     * @param string $DCISNumber
     * @return \UpsWsdl\Classes\Ship\DeliveryConfirmationType
     */
    public function setDCISNumber($DCISNumber)
    {
      $this->DCISNumber = $DCISNumber;
      return $this;
    }

}
