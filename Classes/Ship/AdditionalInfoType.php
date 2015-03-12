<?php

namespace UpsWsdl\Classes\Ship;

class AdditionalInfoType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var AdditionalCodeDescType[] $Value
     */
    protected $Value = null;

    /**
     * @param string $Type
     * @param AdditionalCodeDescType[] $Value
     */
    public function __construct($Type = null, array $Value = null)
    {
      $this->Type = $Type;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \UpsWsdl\Classes\Ship\AdditionalInfoType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return AdditionalCodeDescType[]
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param AdditionalCodeDescType[] $Value
     * @return \UpsWsdl\Classes\Ship\AdditionalInfoType
     */
    public function setValue(array $Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
