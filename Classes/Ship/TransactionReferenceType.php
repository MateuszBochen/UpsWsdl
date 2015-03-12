<?php

namespace UpsWsdl\Classes\Ship;

class TransactionReferenceType
{

    /**
     * @var string $CustomerContext
     */
    protected $CustomerContext = null;

    /**
     * @var string $TransactionIdentifier
     */
    protected $TransactionIdentifier = null;

    /**
     * @param string $CustomerContext
     * @param string $TransactionIdentifier
     */
    public function __construct($CustomerContext = null, $TransactionIdentifier = null)
    {
      $this->CustomerContext = $CustomerContext;
      $this->TransactionIdentifier = $TransactionIdentifier;
    }

    /**
     * @return string
     */
    public function getCustomerContext()
    {
      return $this->CustomerContext;
    }

    /**
     * @param string $CustomerContext
     * @return \UpsWsdl\Classes\Ship\TransactionReferenceType
     */
    public function setCustomerContext($CustomerContext)
    {
      $this->CustomerContext = $CustomerContext;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionIdentifier()
    {
      return $this->TransactionIdentifier;
    }

    /**
     * @param string $TransactionIdentifier
     * @return \UpsWsdl\Classes\Ship\TransactionReferenceType
     */
    public function setTransactionIdentifier($TransactionIdentifier)
    {
      $this->TransactionIdentifier = $TransactionIdentifier;
      return $this;
    }

}
