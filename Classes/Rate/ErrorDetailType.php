<?php

namespace UpsWsdl\Classes\Rate;

class ErrorDetailType
{

    /**
     * @var string $Severity
     */
    protected $Severity = null;

    /**
     * @var CodeType $PrimaryErrorCode
     */
    protected $PrimaryErrorCode = null;

    /**
     * @var string $MinimumRetrySeconds
     */
    protected $MinimumRetrySeconds = null;

    /**
     * @var LocationType $Location
     */
    protected $Location = null;

    /**
     * @var CodeType[] $SubErrorCode
     */
    protected $SubErrorCode = null;

    /**
     * @var AdditionalInfoType[] $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    /**
     * @param string $Severity
     * @param CodeType $PrimaryErrorCode
     * @param string $MinimumRetrySeconds
     * @param LocationType $Location
     * @param CodeType[] $SubErrorCode
     * @param AdditionalInfoType[] $AdditionalInformation
     */
    public function __construct($Severity = null, $PrimaryErrorCode = null, $MinimumRetrySeconds = null, $Location = null, array $SubErrorCode = null, array $AdditionalInformation = null)
    {
      $this->Severity = $Severity;
      $this->PrimaryErrorCode = $PrimaryErrorCode;
      $this->MinimumRetrySeconds = $MinimumRetrySeconds;
      $this->Location = $Location;
      $this->SubErrorCode = $SubErrorCode;
      $this->AdditionalInformation = $AdditionalInformation;
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
      return $this->Severity;
    }

    /**
     * @param string $Severity
     * @return \UpsWsdl\Classes\Rate\ErrorDetailType
     */
    public function setSeverity($Severity)
    {
      $this->Severity = $Severity;
      return $this;
    }

    /**
     * @return CodeType
     */
    public function getPrimaryErrorCode()
    {
      return $this->PrimaryErrorCode;
    }

    /**
     * @param CodeType $PrimaryErrorCode
     * @return \UpsWsdl\Classes\Rate\ErrorDetailType
     */
    public function setPrimaryErrorCode($PrimaryErrorCode)
    {
      $this->PrimaryErrorCode = $PrimaryErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumRetrySeconds()
    {
      return $this->MinimumRetrySeconds;
    }

    /**
     * @param string $MinimumRetrySeconds
     * @return \UpsWsdl\Classes\Rate\ErrorDetailType
     */
    public function setMinimumRetrySeconds($MinimumRetrySeconds)
    {
      $this->MinimumRetrySeconds = $MinimumRetrySeconds;
      return $this;
    }

    /**
     * @return LocationType
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param LocationType $Location
     * @return \UpsWsdl\Classes\Rate\ErrorDetailType
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return CodeType[]
     */
    public function getSubErrorCode()
    {
      return $this->SubErrorCode;
    }

    /**
     * @param CodeType[] $SubErrorCode
     * @return \UpsWsdl\Classes\Rate\ErrorDetailType
     */
    public function setSubErrorCode(array $SubErrorCode)
    {
      $this->SubErrorCode = $SubErrorCode;
      return $this;
    }

    /**
     * @return AdditionalInfoType[]
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param AdditionalInfoType[] $AdditionalInformation
     * @return \UpsWsdl\Classes\Rate\ErrorDetailType
     */
    public function setAdditionalInformation(array $AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

}
