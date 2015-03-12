<?php

namespace UpsWsdl\Classes\Rate;

class UPSSecurity
{

    /**
     * @var UsernameToken $UsernameToken
     */
    protected $UsernameToken = null;

    /**
     * @var ServiceAccessToken $ServiceAccessToken
     */
    protected $ServiceAccessToken = null;

    /**
     * @param UsernameToken $UsernameToken
     * @param ServiceAccessToken $ServiceAccessToken
     */
    public function __construct($UsernameToken = null, $ServiceAccessToken = null)
    {
      $this->UsernameToken = $UsernameToken;
      $this->ServiceAccessToken = $ServiceAccessToken;
    }

    /**
     * @return UsernameToken
     */
    public function getUsernameToken()
    {
      return $this->UsernameToken;
    }

    /**
     * @param UsernameToken $UsernameToken
     * @return \UpsWsdl\Classes\Rate\UPSSecurity
     */
    public function setUsernameToken($UsernameToken)
    {
      $this->UsernameToken = $UsernameToken;
      return $this;
    }

    /**
     * @return ServiceAccessToken
     */
    public function getServiceAccessToken()
    {
      return $this->ServiceAccessToken;
    }

    /**
     * @param ServiceAccessToken $ServiceAccessToken
     * @return \UpsWsdl\Classes\Rate\UPSSecurity
     */
    public function setServiceAccessToken($ServiceAccessToken)
    {
      $this->ServiceAccessToken = $ServiceAccessToken;
      return $this;
    }

}
