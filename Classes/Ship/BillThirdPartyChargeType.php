<?php

namespace UpsWsdl\Classes\Ship;

class BillThirdPartyChargeType
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var AccountAddressType $Address
     */
    protected $Address = null;

    /**
     * @param string $AccountNumber
     * @param AccountAddressType $Address
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
     * @return \UpsWsdl\Classes\Ship\BillThirdPartyChargeType
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return AccountAddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AccountAddressType $Address
     * @return \UpsWsdl\Classes\Ship\BillThirdPartyChargeType
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
