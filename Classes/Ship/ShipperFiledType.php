<?php

namespace UpsWsdl\Classes\Ship;

class ShipperFiledType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $PreDepartureITNNumber
     */
    protected $PreDepartureITNNumber = null;

    /**
     * @var string $ExemptionLegend
     */
    protected $ExemptionLegend = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param string $PreDepartureITNNumber
     * @param string $ExemptionLegend
     */
    public function __construct($Code = null, $Description = null, $PreDepartureITNNumber = null, $ExemptionLegend = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
      $this->PreDepartureITNNumber = $PreDepartureITNNumber;
      $this->ExemptionLegend = $ExemptionLegend;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \UpsWsdl\Classes\Ship\ShipperFiledType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \UpsWsdl\Classes\Ship\ShipperFiledType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreDepartureITNNumber()
    {
      return $this->PreDepartureITNNumber;
    }

    /**
     * @param string $PreDepartureITNNumber
     * @return \UpsWsdl\Classes\Ship\ShipperFiledType
     */
    public function setPreDepartureITNNumber($PreDepartureITNNumber)
    {
      $this->PreDepartureITNNumber = $PreDepartureITNNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getExemptionLegend()
    {
      return $this->ExemptionLegend;
    }

    /**
     * @param string $ExemptionLegend
     * @return \UpsWsdl\Classes\Ship\ShipperFiledType
     */
    public function setExemptionLegend($ExemptionLegend)
    {
      $this->ExemptionLegend = $ExemptionLegend;
      return $this;
    }

}
