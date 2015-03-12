<?php

namespace UpsWsdl\Classes\Rate;

class RateResponse
{

    /**
     * @var ResponseType $Response
     */
    protected $Response = null;

    /**
     * @var RatedShipmentType $RatedShipment
     */
    protected $RatedShipment = null;

    /**
     * @param ResponseType $Response
     * @param RatedShipmentType $RatedShipment
     */
    public function __construct($Response = null, $RatedShipment = null)
    {
      $this->Response = $Response;
      $this->RatedShipment = $RatedShipment;
    }

    /**
     * @return ResponseType
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param ResponseType $Response
     * @return \UpsWsdl\Classes\Rate\RateResponse
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
      return $this;
    }

    /**
     * @return RatedShipmentType
     */
    public function getRatedShipment()
    {
      return $this->RatedShipment;
    }

    /**
     * @param RatedShipmentType $RatedShipment
     * @return \UpsWsdl\Classes\Rate\RateResponse
     */
    public function setRatedShipment($RatedShipment)
    {
      $this->RatedShipment = $RatedShipment;
      return $this;
    }

}
