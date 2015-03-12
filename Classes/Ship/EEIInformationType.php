<?php

namespace UpsWsdl\Classes\Ship;

class EEIInformationType
{

    /**
     * @var string $ExportInformation
     */
    protected $ExportInformation = null;

    /**
     * @var EEILicenseType $License
     */
    protected $License = null;

    /**
     * @var DDTCInformationType $DDTCInformation
     */
    protected $DDTCInformation = null;

    /**
     * @param string $ExportInformation
     * @param EEILicenseType $License
     * @param DDTCInformationType $DDTCInformation
     */
    public function __construct($ExportInformation = null, $License = null, $DDTCInformation = null)
    {
      $this->ExportInformation = $ExportInformation;
      $this->License = $License;
      $this->DDTCInformation = $DDTCInformation;
    }

    /**
     * @return string
     */
    public function getExportInformation()
    {
      return $this->ExportInformation;
    }

    /**
     * @param string $ExportInformation
     * @return \UpsWsdl\Classes\Ship\EEIInformationType
     */
    public function setExportInformation($ExportInformation)
    {
      $this->ExportInformation = $ExportInformation;
      return $this;
    }

    /**
     * @return EEILicenseType
     */
    public function getLicense()
    {
      return $this->License;
    }

    /**
     * @param EEILicenseType $License
     * @return \UpsWsdl\Classes\Ship\EEIInformationType
     */
    public function setLicense($License)
    {
      $this->License = $License;
      return $this;
    }

    /**
     * @return DDTCInformationType
     */
    public function getDDTCInformation()
    {
      return $this->DDTCInformation;
    }

    /**
     * @param DDTCInformationType $DDTCInformation
     * @return \UpsWsdl\Classes\Ship\EEIInformationType
     */
    public function setDDTCInformation($DDTCInformation)
    {
      $this->DDTCInformation = $DDTCInformation;
      return $this;
    }

}
