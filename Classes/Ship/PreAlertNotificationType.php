<?php

namespace UpsWsdl\Classes\Ship;

class PreAlertNotificationType
{

    /**
     * @var PreAlertEMailMessageType $EMailMessage
     */
    protected $EMailMessage = null;

    /**
     * @var PreAlertVoiceMessageType $VoiceMessage
     */
    protected $VoiceMessage = null;

    /**
     * @var PreAlertTextMessageType $TextMessage
     */
    protected $TextMessage = null;

    /**
     * @var LocaleType $Locale
     */
    protected $Locale = null;

    /**
     * @param PreAlertEMailMessageType $EMailMessage
     * @param PreAlertVoiceMessageType $VoiceMessage
     * @param PreAlertTextMessageType $TextMessage
     * @param LocaleType $Locale
     */
    public function __construct($EMailMessage = null, $VoiceMessage = null, $TextMessage = null, $Locale = null)
    {
      $this->EMailMessage = $EMailMessage;
      $this->VoiceMessage = $VoiceMessage;
      $this->TextMessage = $TextMessage;
      $this->Locale = $Locale;
    }

    /**
     * @return PreAlertEMailMessageType
     */
    public function getEMailMessage()
    {
      return $this->EMailMessage;
    }

    /**
     * @param PreAlertEMailMessageType $EMailMessage
     * @return \UpsWsdl\Classes\Ship\PreAlertNotificationType
     */
    public function setEMailMessage($EMailMessage)
    {
      $this->EMailMessage = $EMailMessage;
      return $this;
    }

    /**
     * @return PreAlertVoiceMessageType
     */
    public function getVoiceMessage()
    {
      return $this->VoiceMessage;
    }

    /**
     * @param PreAlertVoiceMessageType $VoiceMessage
     * @return \UpsWsdl\Classes\Ship\PreAlertNotificationType
     */
    public function setVoiceMessage($VoiceMessage)
    {
      $this->VoiceMessage = $VoiceMessage;
      return $this;
    }

    /**
     * @return PreAlertTextMessageType
     */
    public function getTextMessage()
    {
      return $this->TextMessage;
    }

    /**
     * @param PreAlertTextMessageType $TextMessage
     * @return \UpsWsdl\Classes\Ship\PreAlertNotificationType
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
     * @return \UpsWsdl\Classes\Ship\PreAlertNotificationType
     */
    public function setLocale($Locale)
    {
      $this->Locale = $Locale;
      return $this;
    }

}
