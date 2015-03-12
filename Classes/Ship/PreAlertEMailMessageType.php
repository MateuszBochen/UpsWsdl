<?php

namespace UpsWsdl\Classes\Ship;

class PreAlertEMailMessageType
{

    /**
     * @var string $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @var string $UndeliverableEMailAddress
     */
    protected $UndeliverableEMailAddress = null;

    /**
     * @param string $EMailAddress
     * @param string $UndeliverableEMailAddress
     */
    public function __construct($EMailAddress = null, $UndeliverableEMailAddress = null)
    {
      $this->EMailAddress = $EMailAddress;
      $this->UndeliverableEMailAddress = $UndeliverableEMailAddress;
    }

    /**
     * @return string
     */
    public function getEMailAddress()
    {
      return $this->EMailAddress;
    }

    /**
     * @param string $EMailAddress
     * @return \UpsWsdl\Classes\Ship\PreAlertEMailMessageType
     */
    public function setEMailAddress($EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getUndeliverableEMailAddress()
    {
      return $this->UndeliverableEMailAddress;
    }

    /**
     * @param string $UndeliverableEMailAddress
     * @return \UpsWsdl\Classes\Ship\PreAlertEMailMessageType
     */
    public function setUndeliverableEMailAddress($UndeliverableEMailAddress)
    {
      $this->UndeliverableEMailAddress = $UndeliverableEMailAddress;
      return $this;
    }

}
