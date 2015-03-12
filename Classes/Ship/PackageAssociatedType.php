<?php

namespace UpsWsdl\Classes\Ship;

class PackageAssociatedType
{

    /**
     * @var string $PackageNumber
     */
    protected $PackageNumber = null;

    /**
     * @var string $ProductAmount
     */
    protected $ProductAmount = null;

    /**
     * @param string $PackageNumber
     * @param string $ProductAmount
     */
    public function __construct($PackageNumber = null, $ProductAmount = null)
    {
      $this->PackageNumber = $PackageNumber;
      $this->ProductAmount = $ProductAmount;
    }

    /**
     * @return string
     */
    public function getPackageNumber()
    {
      return $this->PackageNumber;
    }

    /**
     * @param string $PackageNumber
     * @return \UpsWsdl\Classes\Ship\PackageAssociatedType
     */
    public function setPackageNumber($PackageNumber)
    {
      $this->PackageNumber = $PackageNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductAmount()
    {
      return $this->ProductAmount;
    }

    /**
     * @param string $ProductAmount
     * @return \UpsWsdl\Classes\Ship\PackageAssociatedType
     */
    public function setProductAmount($ProductAmount)
    {
      $this->ProductAmount = $ProductAmount;
      return $this;
    }

}
