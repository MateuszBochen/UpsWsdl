<?php

namespace UpsWsdl\Classes\Rate;

class ShipmentRatingOptionsType
{

    /**
     * @var string $NegotiatedRatesIndicator
     */
    protected $NegotiatedRatesIndicator = null;

    /**
     * @var string $FRSShipmentIndicator
     */
    protected $FRSShipmentIndicator = null;

    /**
     * @var string $RateChartIndicator
     */
    protected $RateChartIndicator = null;

    /**
     * @param string $NegotiatedRatesIndicator
     * @param string $FRSShipmentIndicator
     * @param string $RateChartIndicator
     */
    public function __construct($NegotiatedRatesIndicator = null, $FRSShipmentIndicator = null, $RateChartIndicator = null)
    {
      $this->NegotiatedRatesIndicator = $NegotiatedRatesIndicator;
      $this->FRSShipmentIndicator = $FRSShipmentIndicator;
      $this->RateChartIndicator = $RateChartIndicator;
    }

    /**
     * @return string
     */
    public function getNegotiatedRatesIndicator()
    {
      return $this->NegotiatedRatesIndicator;
    }

    /**
     * @param string $NegotiatedRatesIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentRatingOptionsType
     */
    public function setNegotiatedRatesIndicator($NegotiatedRatesIndicator)
    {
      $this->NegotiatedRatesIndicator = $NegotiatedRatesIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getFRSShipmentIndicator()
    {
      return $this->FRSShipmentIndicator;
    }

    /**
     * @param string $FRSShipmentIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentRatingOptionsType
     */
    public function setFRSShipmentIndicator($FRSShipmentIndicator)
    {
      $this->FRSShipmentIndicator = $FRSShipmentIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateChartIndicator()
    {
      return $this->RateChartIndicator;
    }

    /**
     * @param string $RateChartIndicator
     * @return \UpsWsdl\Classes\Rate\ShipmentRatingOptionsType
     */
    public function setRateChartIndicator($RateChartIndicator)
    {
      $this->RateChartIndicator = $RateChartIndicator;
      return $this;
    }

}
