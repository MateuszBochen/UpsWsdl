<?php

namespace UpsWsdl\Classes\Rate;

class RestrictedArticlesType
{

    /**
     * @var string $AlcoholicBeveragesIndicator
     */
    protected $AlcoholicBeveragesIndicator = null;

    /**
     * @var string $DiagnosticSpecimensIndicator
     */
    protected $DiagnosticSpecimensIndicator = null;

    /**
     * @var string $PerishablesIndicator
     */
    protected $PerishablesIndicator = null;

    /**
     * @var string $PlantsIndicator
     */
    protected $PlantsIndicator = null;

    /**
     * @var string $SeedsIndicator
     */
    protected $SeedsIndicator = null;

    /**
     * @var string $SpecialExceptionsIndicator
     */
    protected $SpecialExceptionsIndicator = null;

    /**
     * @var string $TobaccoIndicator
     */
    protected $TobaccoIndicator = null;

    /**
     * @param string $AlcoholicBeveragesIndicator
     * @param string $DiagnosticSpecimensIndicator
     * @param string $PerishablesIndicator
     * @param string $PlantsIndicator
     * @param string $SeedsIndicator
     * @param string $SpecialExceptionsIndicator
     * @param string $TobaccoIndicator
     */
    public function __construct($AlcoholicBeveragesIndicator = null, $DiagnosticSpecimensIndicator = null, $PerishablesIndicator = null, $PlantsIndicator = null, $SeedsIndicator = null, $SpecialExceptionsIndicator = null, $TobaccoIndicator = null)
    {
      $this->AlcoholicBeveragesIndicator = $AlcoholicBeveragesIndicator;
      $this->DiagnosticSpecimensIndicator = $DiagnosticSpecimensIndicator;
      $this->PerishablesIndicator = $PerishablesIndicator;
      $this->PlantsIndicator = $PlantsIndicator;
      $this->SeedsIndicator = $SeedsIndicator;
      $this->SpecialExceptionsIndicator = $SpecialExceptionsIndicator;
      $this->TobaccoIndicator = $TobaccoIndicator;
    }

    /**
     * @return string
     */
    public function getAlcoholicBeveragesIndicator()
    {
      return $this->AlcoholicBeveragesIndicator;
    }

    /**
     * @param string $AlcoholicBeveragesIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setAlcoholicBeveragesIndicator($AlcoholicBeveragesIndicator)
    {
      $this->AlcoholicBeveragesIndicator = $AlcoholicBeveragesIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiagnosticSpecimensIndicator()
    {
      return $this->DiagnosticSpecimensIndicator;
    }

    /**
     * @param string $DiagnosticSpecimensIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setDiagnosticSpecimensIndicator($DiagnosticSpecimensIndicator)
    {
      $this->DiagnosticSpecimensIndicator = $DiagnosticSpecimensIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getPerishablesIndicator()
    {
      return $this->PerishablesIndicator;
    }

    /**
     * @param string $PerishablesIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setPerishablesIndicator($PerishablesIndicator)
    {
      $this->PerishablesIndicator = $PerishablesIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlantsIndicator()
    {
      return $this->PlantsIndicator;
    }

    /**
     * @param string $PlantsIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setPlantsIndicator($PlantsIndicator)
    {
      $this->PlantsIndicator = $PlantsIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeedsIndicator()
    {
      return $this->SeedsIndicator;
    }

    /**
     * @param string $SeedsIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setSeedsIndicator($SeedsIndicator)
    {
      $this->SeedsIndicator = $SeedsIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialExceptionsIndicator()
    {
      return $this->SpecialExceptionsIndicator;
    }

    /**
     * @param string $SpecialExceptionsIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setSpecialExceptionsIndicator($SpecialExceptionsIndicator)
    {
      $this->SpecialExceptionsIndicator = $SpecialExceptionsIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getTobaccoIndicator()
    {
      return $this->TobaccoIndicator;
    }

    /**
     * @param string $TobaccoIndicator
     * @return \UpsWsdl\Classes\Rate\RestrictedArticlesType
     */
    public function setTobaccoIndicator($TobaccoIndicator)
    {
      $this->TobaccoIndicator = $TobaccoIndicator;
      return $this;
    }

}
