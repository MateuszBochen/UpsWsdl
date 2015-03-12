<?php

namespace UpsWsdl\Classes\Ship;

class CommodityType
{

    /**
     * @var string $FreightClass
     */
    protected $FreightClass = null;

    /**
     * @var NMFCType $NMFC
     */
    protected $NMFC = null;

    /**
     * @param string $FreightClass
     * @param NMFCType $NMFC
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
     * @return \UpsWsdl\Classes\Ship\CommodityType
     */
    public function setFreightClass($FreightClass)
    {
      $this->FreightClass = $FreightClass;
      return $this;
    }

    /**
     * @return NMFCType
     */
    public function getNMFC()
    {
      return $this->NMFC;
    }

    /**
     * @param NMFCType $NMFC
     * @return \UpsWsdl\Classes\Ship\CommodityType
     */
    public function setNMFC($NMFC)
    {
      $this->NMFC = $NMFC;
      return $this;
    }

}
