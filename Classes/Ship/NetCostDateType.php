<?php

namespace UpsWsdl\Classes\Ship;

class NetCostDateType
{

    /**
     * @var string $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @param string $BeginDate
     * @param string $EndDate
     */
    public function __construct($BeginDate = null, $EndDate = null)
    {
      $this->BeginDate = $BeginDate;
      $this->EndDate = $EndDate;
    }

    /**
     * @return string
     */
    public function getBeginDate()
    {
      return $this->BeginDate;
    }

    /**
     * @param string $BeginDate
     * @return \UpsWsdl\Classes\Ship\NetCostDateType
     */
    public function setBeginDate($BeginDate)
    {
      $this->BeginDate = $BeginDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \UpsWsdl\Classes\Ship\NetCostDateType
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

}
