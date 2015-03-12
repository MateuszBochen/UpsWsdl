<?php

namespace UpsWsdl\Classes\Ship;

class CN22ContentType
{

    /**
     * @var string $CN22ContentQuantity
     */
    protected $CN22ContentQuantity = null;

    /**
     * @var string $CN22ContentDescription
     */
    protected $CN22ContentDescription = null;

    /**
     * @var ProductWeightType $CN22ContentWeight
     */
    protected $CN22ContentWeight = null;

    /**
     * @var string $CN22ContentTotalValue
     */
    protected $CN22ContentTotalValue = null;

    /**
     * @var string $CN22ContentCurrencyCode
     */
    protected $CN22ContentCurrencyCode = null;

    /**
     * @var string $CN22ContentCountryOfOrigin
     */
    protected $CN22ContentCountryOfOrigin = null;

    /**
     * @var string $CN22ContentTariffNumber
     */
    protected $CN22ContentTariffNumber = null;

    /**
     * @param string $CN22ContentQuantity
     * @param string $CN22ContentDescription
     * @param ProductWeightType $CN22ContentWeight
     * @param string $CN22ContentTotalValue
     * @param string $CN22ContentCurrencyCode
     * @param string $CN22ContentCountryOfOrigin
     * @param string $CN22ContentTariffNumber
     */
    public function __construct($CN22ContentQuantity = null, $CN22ContentDescription = null, $CN22ContentWeight = null, $CN22ContentTotalValue = null, $CN22ContentCurrencyCode = null, $CN22ContentCountryOfOrigin = null, $CN22ContentTariffNumber = null)
    {
      $this->CN22ContentQuantity = $CN22ContentQuantity;
      $this->CN22ContentDescription = $CN22ContentDescription;
      $this->CN22ContentWeight = $CN22ContentWeight;
      $this->CN22ContentTotalValue = $CN22ContentTotalValue;
      $this->CN22ContentCurrencyCode = $CN22ContentCurrencyCode;
      $this->CN22ContentCountryOfOrigin = $CN22ContentCountryOfOrigin;
      $this->CN22ContentTariffNumber = $CN22ContentTariffNumber;
    }

    /**
     * @return string
     */
    public function getCN22ContentQuantity()
    {
      return $this->CN22ContentQuantity;
    }

    /**
     * @param string $CN22ContentQuantity
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentQuantity($CN22ContentQuantity)
    {
      $this->CN22ContentQuantity = $CN22ContentQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22ContentDescription()
    {
      return $this->CN22ContentDescription;
    }

    /**
     * @param string $CN22ContentDescription
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentDescription($CN22ContentDescription)
    {
      $this->CN22ContentDescription = $CN22ContentDescription;
      return $this;
    }

    /**
     * @return ProductWeightType
     */
    public function getCN22ContentWeight()
    {
      return $this->CN22ContentWeight;
    }

    /**
     * @param ProductWeightType $CN22ContentWeight
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentWeight($CN22ContentWeight)
    {
      $this->CN22ContentWeight = $CN22ContentWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22ContentTotalValue()
    {
      return $this->CN22ContentTotalValue;
    }

    /**
     * @param string $CN22ContentTotalValue
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentTotalValue($CN22ContentTotalValue)
    {
      $this->CN22ContentTotalValue = $CN22ContentTotalValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22ContentCurrencyCode()
    {
      return $this->CN22ContentCurrencyCode;
    }

    /**
     * @param string $CN22ContentCurrencyCode
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentCurrencyCode($CN22ContentCurrencyCode)
    {
      $this->CN22ContentCurrencyCode = $CN22ContentCurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22ContentCountryOfOrigin()
    {
      return $this->CN22ContentCountryOfOrigin;
    }

    /**
     * @param string $CN22ContentCountryOfOrigin
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentCountryOfOrigin($CN22ContentCountryOfOrigin)
    {
      $this->CN22ContentCountryOfOrigin = $CN22ContentCountryOfOrigin;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22ContentTariffNumber()
    {
      return $this->CN22ContentTariffNumber;
    }

    /**
     * @param string $CN22ContentTariffNumber
     * @return \UpsWsdl\Classes\Ship\CN22ContentType
     */
    public function setCN22ContentTariffNumber($CN22ContentTariffNumber)
    {
      $this->CN22ContentTariffNumber = $CN22ContentTariffNumber;
      return $this;
    }

}
