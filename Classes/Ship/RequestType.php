<?php

namespace UpsWsdl\Classes\Ship;

class RequestType
{

    /**
     * @var string[] $RequestOption
     */
    protected $RequestOption = null;

    /**
     * @var string $SubVersion
     */
    protected $SubVersion = null;

    /**
     * @var TransactionReferenceType $TransactionReference
     */
    protected $TransactionReference = null;

    /**
     * @param string[] $RequestOption
     * @param string $SubVersion
     * @param TransactionReferenceType $TransactionReference
     */
    public function __construct(array $RequestOption = null, $SubVersion = null, $TransactionReference = null)
    {
      $this->RequestOption = $RequestOption;
      $this->SubVersion = $SubVersion;
      $this->TransactionReference = $TransactionReference;
    }

    /**
     * @return string[]
     */
    public function getRequestOption()
    {
      return $this->RequestOption;
    }

    /**
     * @param string[] $RequestOption
     * @return \UpsWsdl\Classes\Ship\RequestType
     */
    public function setRequestOption(array $RequestOption)
    {
      $this->RequestOption = $RequestOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubVersion()
    {
      return $this->SubVersion;
    }

    /**
     * @param string $SubVersion
     * @return \UpsWsdl\Classes\Ship\RequestType
     */
    public function setSubVersion($SubVersion)
    {
      $this->SubVersion = $SubVersion;
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
     * @return \UpsWsdl\Classes\Ship\RequestType
     */
    public function setTransactionReference($TransactionReference)
    {
      $this->TransactionReference = $TransactionReference;
      return $this;
    }

}
