<?php

namespace UpsWsdl\Classes\Ship;

class ResponseType
{

    /**
     * @var CodeDescriptionType $ResponseStatus
     */
    protected $ResponseStatus = null;

    /**
     * @var CodeDescriptionType[] $Alert
     */
    protected $Alert = null;

    /**
     * @var TransactionReferenceType $TransactionReference
     */
    protected $TransactionReference = null;

    /**
     * @param CodeDescriptionType $ResponseStatus
     * @param CodeDescriptionType[] $Alert
     * @param TransactionReferenceType $TransactionReference
     */
    public function __construct($ResponseStatus = null, array $Alert = null, $TransactionReference = null)
    {
      $this->ResponseStatus = $ResponseStatus;
      $this->Alert = $Alert;
      $this->TransactionReference = $TransactionReference;
    }

    /**
     * @return CodeDescriptionType
     */
    public function getResponseStatus()
    {
      return $this->ResponseStatus;
    }

    /**
     * @param CodeDescriptionType $ResponseStatus
     * @return \UpsWsdl\Classes\Ship\ResponseType
     */
    public function setResponseStatus($ResponseStatus)
    {
      $this->ResponseStatus = $ResponseStatus;
      return $this;
    }

    /**
     * @return CodeDescriptionType[]
     */
    public function getAlert()
    {
      return $this->Alert;
    }

    /**
     * @param CodeDescriptionType[] $Alert
     * @return \UpsWsdl\Classes\Ship\ResponseType
     */
    public function setAlert(array $Alert)
    {
      $this->Alert = $Alert;
      return $this;
    }

    /**
     * @return TransactionReferenceType
     */
    public function getTransactionReference()
    {
      return $this->TransactionReference;
    }

    /**
     * @param TransactionReferenceType $TransactionReference
     * @return \UpsWsdl\Classes\Ship\ResponseType
     */
    public function setTransactionReference($TransactionReference)
    {
      $this->TransactionReference = $TransactionReference;
      return $this;
    }

}
