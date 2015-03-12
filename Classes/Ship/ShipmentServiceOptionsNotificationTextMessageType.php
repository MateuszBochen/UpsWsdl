<?php

namespace UpsWsdl\Classes\Ship;

class ShipmentServiceOptionsNotificationTextMessageType
{

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @param string $PhoneNumber
     */
    public function __construct($PhoneNumber = null)
    {
      $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \UpsWsdl\Classes\Ship\ShipmentServiceOptionsNotificationTextMessageType
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
