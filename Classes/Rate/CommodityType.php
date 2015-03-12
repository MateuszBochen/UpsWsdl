<?php

namespace UpsWsdl\Classes\Rate;

class CommodityType
{

    /**
     * @var string $FreightClass
     */
    protected $FreightClass = null;

    /**
     * @var NMFCCommodityType $NMFC
     */
    protected $NMFC = null;

    /**
     * @param string $FreightClass
     * @param NMFCCommodityType $NMFC
     */
    public function __construct($FreightClass = null, $NMFC = null)
    {
      $this->FreightClass = $FreightClass;
      $this->NMFC = $NMFC;
    }

    /**
     * @return string
     */
    public function getFreightClass()
    {
      return $this->FreightClass;
    }

    /**
     * @param string $FreightClass
     * @return \UpsWsdl\Classes\Rate\CommodityType
     */
    public function setFreightClass($FreightClass)
    {
      $this->FreightClass = $FreightClass;
      return $this;
    }

    /**
     * @return NMFCCommodityType
     */
    public function getNMFC()
    {
      return $this->NMFC;
    }

    /**
     * @param NMFCCommodityType $NMFC
     * @return \UpsWsdl\Classes\Rate\CommodityType
     */
    public function setNMFC($NMFC)
    {
      $this->NMFC = $NMFC;
      return $this;
    }

}
