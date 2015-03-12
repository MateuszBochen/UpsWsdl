<?php

namespace UpsWsdl\Classes\Ship;

class UPSFiledType
{

    /**
     * @var POAType $POA
     */
    protected $POA = null;

    /**
     * @param POAType $POA
     */
    public function __construct($POA = null)
    {
      $this->POA = $POA;
    }

    /**
     * @return POAType
     */
    public function getPOA()
    {
      return $this->POA;
    }

    /**
     * @param POAType $POA
     * @return \UpsWsdl\Classes\Ship\UPSFiledType
     */
    public function setPOA($POA)
    {
      $this->POA = $POA;
      return $this;
    }

}
