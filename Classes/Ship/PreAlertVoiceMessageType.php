<?php

namespace UpsWsdl\Classes\Ship;

class PreAlertVoiceMessageType
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
     * @return \UpsWsdl\Classes\Ship\PreAlertVoiceMessageType
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
