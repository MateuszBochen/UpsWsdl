<?php

namespace UpsWsdl\Classes\Rate;

class LocationType
{

    /**
     * @var string $LocationElementName
     */
    protected $LocationElementName = null;

    /**
     * @var string $XPathOfElement
     */
    protected $XPathOfElement = null;

    /**
     * @var string $OriginalValue
     */
    protected $OriginalValue = null;

    /**
     * @param string $LocationElementName
     * @param string $XPathOfElement
     * @param string $OriginalValue
     */
    public function __construct($LocationElementName = null, $XPathOfElement = null, $OriginalValue = null)
    {
      $this->LocationElementName = $LocationElementName;
      $this->XPathOfElement = $XPathOfElement;
      $this->OriginalValue = $OriginalValue;
    }

    /**
     * @return string
     */
    public function getLocationElementName()
    {
      return $this->LocationElementName;
    }

    /**
     * @param string $LocationElementName
     * @return \UpsWsdl\Classes\Rate\LocationType
     */
    public function setLocationElementName($LocationElementName)
    {
      $this->LocationElementName = $LocationElementName;
      return $this;
    }

    /**
     * @return string
     */
    public function getXPathOfElement()
    {
      return $this->XPathOfElement;
    }

    /**
     * @param string $XPathOfElement
     * @return \UpsWsdl\Classes\Rate\LocationType
     */
    public function setXPathOfElement($XPathOfElement)
    {
      $this->XPathOfElement = $XPathOfElement;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalValue()
    {
      return $this->OriginalValue;
    }

    /**
     * @param string $OriginalValue
     * @return \UpsWsdl\Classes\Rate\LocationType
     */
    public function setOriginalValue($OriginalValue)
    {
      $this->OriginalValue = $OriginalValue;
      return $this;
    }

}
