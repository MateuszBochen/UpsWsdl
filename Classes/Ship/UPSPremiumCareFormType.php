<?php

namespace UpsWsdl\Classes\Ship;

class UPSPremiumCareFormType
{

    /**
     * @var string $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var string $PageSize
     */
    protected $PageSize = null;

    /**
     * @var string $PrintType
     */
    protected $PrintType = null;

    /**
     * @var string $NumOfCopies
     */
    protected $NumOfCopies = null;

    /**
     * @var LanguageForUPSPremiumCareType $LanguageForUPSPremiumCare
     */
    protected $LanguageForUPSPremiumCare = null;

    /**
     * @param string $ShipmentDate
     * @param string $PageSize
     * @param string $PrintType
     * @param string $NumOfCopies
     * @param LanguageForUPSPremiumCareType $LanguageForUPSPremiumCare
     */
    public function __construct($ShipmentDate = null, $PageSize = null, $PrintType = null, $NumOfCopies = null, $LanguageForUPSPremiumCare = null)
    {
      $this->ShipmentDate = $ShipmentDate;
      $this->PageSize = $PageSize;
      $this->PrintType = $PrintType;
      $this->NumOfCopies = $NumOfCopies;
      $this->LanguageForUPSPremiumCare = $LanguageForUPSPremiumCare;
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
      return $this->ShipmentDate;
    }

    /**
     * @param string $ShipmentDate
     * @return \UpsWsdl\Classes\Ship\UPSPremiumCareFormType
     */
    public function setShipmentDate($ShipmentDate)
    {
      $this->ShipmentDate = $ShipmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageSize()
    {
      return $this->PageSize;
    }

    /**
     * @param string $PageSize
     * @return \UpsWsdl\Classes\Ship\UPSPremiumCareFormType
     */
    public function setPageSize($PageSize)
    {
      $this->PageSize = $PageSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintType()
    {
      return $this->PrintType;
    }

    /**
     * @param string $PrintType
     * @return \UpsWsdl\Classes\Ship\UPSPremiumCareFormType
     */
    public function setPrintType($PrintType)
    {
      $this->PrintType = $PrintType;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumOfCopies()
    {
      return $this->NumOfCopies;
    }

    /**
     * @param string $NumOfCopies
     * @return \UpsWsdl\Classes\Ship\UPSPremiumCareFormType
     */
    public function setNumOfCopies($NumOfCopies)
    {
      $this->NumOfCopies = $NumOfCopies;
      return $this;
    }

    /**
     * @return LanguageForUPSPremiumCareType
     */
    public function getLanguageForUPSPremiumCare()
    {
      return $this->LanguageForUPSPremiumCare;
    }

    /**
     * @param LanguageForUPSPremiumCareType $LanguageForUPSPremiumCare
     * @return \UpsWsdl\Classes\Ship\UPSPremiumCareFormType
     */
    public function setLanguageForUPSPremiumCare($LanguageForUPSPremiumCare)
    {
      $this->LanguageForUPSPremiumCare = $LanguageForUPSPremiumCare;
      return $this;
    }

}
