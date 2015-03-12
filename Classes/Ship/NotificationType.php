<?php

namespace UpsWsdl\Classes\Ship;

class NotificationType
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
     * @var ShipmentServiceOptionsNotificationVoiceMessageType $VoiceMessage
     */
    protected $VoiceMessage = null;

    /**
     * @var ShipmentServiceOptionsNotificationTextMessageType $TextMessage
     */
    protected $TextMessage = null;

    /**
     * @var LocaleType $Locale
     */
    protected $Locale = null;

    /**
     * @param string $NotificationCode
     * @param EmailDetailsType $EMail
     * @param ShipmentServiceOptionsNotificationVoiceMessageType $VoiceMessage
     * @param ShipmentServiceOptionsNotificationTextMessageType $TextMessage
     * @param LocaleType $Locale
     */
    public function __construct($NotificationCode = null, $EMail = null, $VoiceMessage = null, $TextMessage = null, $Locale = null)
    {
      $this->NotificationCode = $NotificationCode;
      $this->EMail = $EMail;
      $this->VoiceMessage = $VoiceMessage;
      $this->TextMessage = $TextMessage;
      $this->Locale = $Locale;
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
     * @return \UpsWsdl\Classes\Ship\NotificationType
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
     * @return \UpsWsdl\Classes\Ship\NotificationType
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

    /**
     * @return ShipmentServiceOptionsNotificationVoiceMessageType
     */
    public function getVoiceMessage()
    {
      return $this->VoiceMessage;
    }

    /**
     * @param ShipmentServiceOptionsNotificationVoiceMessageType $VoiceMessage
     * @return \UpsWsdl\Classes\Ship\NotificationType
     */
    public function setVoiceMessage($VoiceMessage)
    {
      $this->VoiceMessage = $VoiceMessage;
      return $this;
    }

    /**
     * @return ShipmentServiceOptionsNotificationTextMessageType
     */
    public function getTextMessage()
    {
      return $this->TextMessage;
    }

    /**
     * @param ShipmentServiceOptionsNotificationTextMessageType $TextMessage
     * @return \UpsWsdl\Classes\Ship\NotificationType
     */
    public function setTextMessage($TextMessage)
    {
      $this->TextMessage = $TextMessage;
      return $this;
    }

    /**
     * @return LocaleType
     */
    public function getLocale()
    {
      return $this->Locale;
    }

    /**
     * @param LocaleType $Locale
     * @return \UpsWsdl\Classes\Ship\NotificationType
     */
    public function setLocale($Locale)
    {
      $this->Locale = $Locale;
      return $this;
    }

}
