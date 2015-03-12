<?php

namespace UpsWsdl\Classes\Ship;

class BillReceiverAddressType
{

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @param string $PostalCode
     */
    public function __construct($PostalCode = null)
    {
      $this->PostalCode = $PostalCode;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \UpsWsdl\Classes\Ship\BillReceiverAddressType
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

}
