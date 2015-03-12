<?php

namespace UpsWsdl\Classes\Rate;

class ServiceAccessToken
{

    /**
     * @var string $AccessLicenseNumber
     */
    protected $AccessLicenseNumber = null;

    /**
     * @param string $AccessLicenseNumber
     */
    public function __construct($AccessLicenseNumber = null)
    {
      $this->AccessLicenseNumber = $AccessLicenseNumber;
    }

    /**
     * @return string
     */
    public function getAccessLicenseNumber()
    {
      return $this->AccessLicenseNumber;
    }

    /**
     * @param string $AccessLicenseNumber
     * @return \UpsWsdl\Classes\Rate\ServiceAccessToken
     */
    public function setAccessLicenseNumber($AccessLicenseNumber)
    {
      $this->AccessLicenseNumber = $AccessLicenseNumber;
      return $this;
    }

}
