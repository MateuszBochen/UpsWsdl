<?php

namespace UpsWsdl\Classes\Ship;

class ContactType
{

    /**
     * @var ForwardAgentType $ForwardAgent
     */
    protected $ForwardAgent = null;

    /**
     * @var UltimateConsigneeType $UltimateConsignee
     */
    protected $UltimateConsignee = null;

    /**
     * @var IntermediateConsigneeType $IntermediateConsignee
     */
    protected $IntermediateConsignee = null;

    /**
     * @var ProducerType $Producer
     */
    protected $Producer = null;

    /**
     * @var SoldToType $SoldTo
     */
    protected $SoldTo = null;

    /**
     * @param ForwardAgentType $ForwardAgent
     * @param UltimateConsigneeType $UltimateConsignee
     * @param IntermediateConsigneeType $IntermediateConsignee
     * @param ProducerType $Producer
     * @param SoldToType $SoldTo
     */
    public function __construct($ForwardAgent = null, $UltimateConsignee = null, $IntermediateConsignee = null, $Producer = null, $SoldTo = null)
    {
      $this->ForwardAgent = $ForwardAgent;
      $this->UltimateConsignee = $UltimateConsignee;
      $this->IntermediateConsignee = $IntermediateConsignee;
      $this->Producer = $Producer;
      $this->SoldTo = $SoldTo;
    }

    /**
     * @return ForwardAgentType
     */
    public function getForwardAgent()
    {
      return $this->ForwardAgent;
    }

    /**
     * @param ForwardAgentType $ForwardAgent
     * @return \UpsWsdl\Classes\Ship\ContactType
     */
    public function setForwardAgent($ForwardAgent)
    {
      $this->ForwardAgent = $ForwardAgent;
      return $this;
    }

    /**
     * @return UltimateConsigneeType
     */
    public function getUltimateConsignee()
    {
      return $this->UltimateConsignee;
    }

    /**
     * @param UltimateConsigneeType $UltimateConsignee
     * @return \UpsWsdl\Classes\Ship\ContactType
     */
    public function setUltimateConsignee($UltimateConsignee)
    {
      $this->UltimateConsignee = $UltimateConsignee;
      return $this;
    }

    /**
     * @return IntermediateConsigneeType
     */
    public function getIntermediateConsignee()
    {
      return $this->IntermediateConsignee;
    }

    /**
     * @param IntermediateConsigneeType $IntermediateConsignee
     * @return \UpsWsdl\Classes\Ship\ContactType
     */
    public function setIntermediateConsignee($IntermediateConsignee)
    {
      $this->IntermediateConsignee = $IntermediateConsignee;
      return $this;
    }

    /**
     * @return ProducerType
     */
    public function getProducer()
    {
      return $this->Producer;
    }

    /**
     * @param ProducerType $Producer
     * @return \UpsWsdl\Classes\Ship\ContactType
     */
    public function setProducer($Producer)
    {
      $this->Producer = $Producer;
      return $this;
    }

    /**
     * @return SoldToType
     */
    public function getSoldTo()
    {
      return $this->SoldTo;
    }

    /**
     * @param SoldToType $SoldTo
     * @return \UpsWsdl\Classes\Ship\ContactType
     */
    public function setSoldTo($SoldTo)
    {
      $this->SoldTo = $SoldTo;
      return $this;
    }

}
