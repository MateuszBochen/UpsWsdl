<?php

namespace UpsWsdl\Classes\Ship;

class BillReceiverType
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var BillReceiverAddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $AccountNumber
     * @param BillReceiverAddressType $Address
     */
    public function __construct($AccountNumber = null, $Address = null)
    {
      $this->AccountNumber = $AccountNumber;
      $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \UpsWsdl\Classes\Ship\BillReceiverType
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return BillReceiverAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param BillReceiverAddressType $Address
     * @return \UpsWsdl\Classes\Ship\BillReceiverType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
