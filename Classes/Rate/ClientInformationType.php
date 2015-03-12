<?php

namespace UpsWsdl\Classes\Rate;

class ClientInformationType
{

    /**
     * @var Property[] $Property
     */
    protected $Property = null;

    /**
     * @param Property[] $Property
     */
    public function __construct(array $Property = null)
    {
      $this->Property = $Property;
    }

    /**
     * @return Property[]
     */
    public function getProperty()
    {
      return $this->Property;
    }

    /**
     * @param Property[] $Property
     * @return \UpsWsdl\Classes\Rate\ClientInformationType
     */
    public function setProperty(array $Property)
    {
      $this->Property = $Property;
      return $this;
    }

}
