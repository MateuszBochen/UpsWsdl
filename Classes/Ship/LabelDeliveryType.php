<?php

namespace UpsWsdl\Classes\Ship;

class LabelDeliveryType
{

    /**
     * @var EmailDetailsType $EMail
     */
    protected $EMail = null;

    /**
     * @var string $LabelLinksIndicator
     */
    protected $LabelLinksIndicator = null;

    /**
     * @param EmailDetailsType $EMail
     * @param string $LabelLinksIndicator
     */
    public function __construct($EMail = null, $LabelLinksIndicator = null)
    {
      $this->EMail = $EMail;
      $this->LabelLinksIndicator = $LabelLinksIndicator;
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
     * @return \UpsWsdl\Classes\Ship\LabelDeliveryType
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelLinksIndicator()
    {
      return $this->LabelLinksIndicator;
    }

    /**
     * @param string $LabelLinksIndicator
     * @return \UpsWsdl\Classes\Ship\LabelDeliveryType
     */
    public function setLabelLinksIndicator($LabelLinksIndicator)
    {
      $this->LabelLinksIndicator = $LabelLinksIndicator;
      return $this;
    }

}
