<?php

namespace UpsWsdl\Classes\Ship;

class CN22FormType
{

    /**
     * @var string $LabelSize
     */
    protected $LabelSize = null;

    /**
     * @var string $PrintsPerPage
     */
    protected $PrintsPerPage = null;

    /**
     * @var string $LabelPrintType
     */
    protected $LabelPrintType = null;

    /**
     * @var string $CN22Type
     */
    protected $CN22Type = null;

    /**
     * @var string $CN22OtherDescription
     */
    protected $CN22OtherDescription = null;

    /**
     * @var string $FoldHereText
     */
    protected $FoldHereText = null;

    /**
     * @var CN22ContentType $CN22Content
     */
    protected $CN22Content = null;

    /**
     * @param string $LabelSize
     * @param string $PrintsPerPage
     * @param string $LabelPrintType
     * @param string $CN22Type
     * @param string $CN22OtherDescription
     * @param string $FoldHereText
     * @param CN22ContentType $CN22Content
     */
    public function __construct($LabelSize = null, $PrintsPerPage = null, $LabelPrintType = null, $CN22Type = null, $CN22OtherDescription = null, $FoldHereText = null, $CN22Content = null)
    {
      $this->LabelSize = $LabelSize;
      $this->PrintsPerPage = $PrintsPerPage;
      $this->LabelPrintType = $LabelPrintType;
      $this->CN22Type = $CN22Type;
      $this->CN22OtherDescription = $CN22OtherDescription;
      $this->FoldHereText = $FoldHereText;
      $this->CN22Content = $CN22Content;
    }

    /**
     * @return string
     */
    public function getLabelSize()
    {
      return $this->LabelSize;
    }

    /**
     * @param string $LabelSize
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setLabelSize($LabelSize)
    {
      $this->LabelSize = $LabelSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintsPerPage()
    {
      return $this->PrintsPerPage;
    }

    /**
     * @param string $PrintsPerPage
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setPrintsPerPage($PrintsPerPage)
    {
      $this->PrintsPerPage = $PrintsPerPage;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelPrintType()
    {
      return $this->LabelPrintType;
    }

    /**
     * @param string $LabelPrintType
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setLabelPrintType($LabelPrintType)
    {
      $this->LabelPrintType = $LabelPrintType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22Type()
    {
      return $this->CN22Type;
    }

    /**
     * @param string $CN22Type
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setCN22Type($CN22Type)
    {
      $this->CN22Type = $CN22Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCN22OtherDescription()
    {
      return $this->CN22OtherDescription;
    }

    /**
     * @param string $CN22OtherDescription
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setCN22OtherDescription($CN22OtherDescription)
    {
      $this->CN22OtherDescription = $CN22OtherDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getFoldHereText()
    {
      return $this->FoldHereText;
    }

    /**
     * @param string $FoldHereText
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setFoldHereText($FoldHereText)
    {
      $this->FoldHereText = $FoldHereText;
      return $this;
    }

    /**
     * @return CN22ContentType
     */
    public function getCN22Content()
    {
      return $this->CN22Content;
    }

    /**
     * @param CN22ContentType $CN22Content
     * @return \UpsWsdl\Classes\Ship\CN22FormType
     */
    public function setCN22Content($CN22Content)
    {
      $this->CN22Content = $CN22Content;
      return $this;
    }

}
