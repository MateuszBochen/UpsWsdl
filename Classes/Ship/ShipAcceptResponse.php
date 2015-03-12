<?php

namespace UpsWsdl\Classes\Ship;

class ShipAcceptResponse
{

    /**
     * @var ResponseType $Response
     */
    protected $Response = null;

    /**
     * @var ShipmentResultsType $ShipmentResults
     */
    protected $ShipmentResults = null;

    /**
     * @param ResponseType $Response
     * @param ShipmentResultsType $ShipmentResults
     */
    public function __construct($Response = null, $ShipmentResults = null)
    {
      $this->Response = $Response;
      $this->ShipmentResults = $ShipmentResults;
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
     * @return \UpsWsdl\Classes\Ship\ShipAcceptResponse
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
      return $this;
    }

    /**
     * @return ShipmentResultsType
     */
    public function getShipmentResults()
    {
      return $this->ShipmentResults;
    }

    /**
     * @param ShipmentResultsType $ShipmentResults
     * @return \UpsWsdl\Classes\Ship\ShipAcceptResponse
     */
    public function setShipmentResults($ShipmentResults)
    {
      $this->ShipmentResults = $ShipmentResults;
      return $this;
    }

}
