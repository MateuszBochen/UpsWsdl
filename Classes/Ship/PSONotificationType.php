<?php

namespace UpsWsdl\Classes\Ship;

class PSONotificationType
{

    /**
     * @var string $NotificationCode
     */
    protected $NotificationCode = null;

    /**
     * @var EmailDetailsType $EMail
     */
    protected $EMail = null;

    /**
     * @param string $NotificationCode
     * @param EmailDetailsType $EMail
     */
    public function __construct($NotificationCode = null, $EMail = null)
    {
      $this->NotificationCode = $NotificationCode;
      $this->EMail = $EMail;
    }

    /**
     * @return string
     */
    public function getNotificationCode()
    {
      return $this->NotificationCode;
    }

    /**
     * @param string $NotificationCode
     * @return \UpsWsdl\Classes\Ship\PSONotificationType
     */
    public function setNotificationCode($NotificationCode)
    {
      $this->NotificationCode = $NotificationCode;
      return $this;
    }

    /**
     * @return EmailDetailsType
     */
    public function getEMail()
    {
      return $this->EMail;
    }

    /**
     * @param EmailDetailsType $EMail
     * @return \UpsWsdl\Classes\Ship\PSONotificationType
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

}
