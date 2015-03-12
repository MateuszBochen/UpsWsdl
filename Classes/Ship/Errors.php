<?php

namespace UpsWsdl\Classes\Ship;

class Errors
{

    /**
     * @var ErrorDetailType $ErrorDetail
     */
    protected $ErrorDetail = null;

    /**
     * @param ErrorDetailType $ErrorDetail
     */
    public function __construct($ErrorDetail = null)
    {
      $this->ErrorDetail = $ErrorDetail;
    }

    /**
     * @return ErrorDetailType
     */
    public function getErrorDetail()
    {
      return $this->ErrorDetail;
    }

    /**
     * @param ErrorDetailType $ErrorDetail
     * @return \UpsWsdl\Classes\Ship\Errors
     */
    public function setErrorDetail($ErrorDetail)
    {
      $this->ErrorDetail = $ErrorDetail;
      return $this;
    }

}
