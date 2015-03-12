<?php

namespace UpsWsdl\Classes\Ship;

class VerbalConfirmationType
{

    /**
     * @var ContactInfoType $ContactInfo
     */
    protected $ContactInfo = null;

    /**
     * @param ContactInfoType $ContactInfo
     */
    public function __construct($ContactInfo = null)
    {
      $this->ContactInfo = $ContactInfo;
    }

    /**
     * @return ContactInfoType
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param ContactInfoType $ContactInfo
     * @return \UpsWsdl\Classes\Ship\VerbalConfirmationType
     */
    public function setContactInfo($ContactInfo)
    {
      $this->ContactInfo = $ContactInfo;
      return $this;
    }

}
