<?php

namespace UpsWsdl\Classes\Ship;

class FreightCollectType
{

    /**
     * @var BillReceiverType $BillReceiver
     */
    protected $BillReceiver = null;

    /**
     * @param BillReceiverType $BillReceiver
     */
    public function __construct($BillReceiver = null)
    {
      $this->BillReceiver = $BillReceiver;
    }

    /**
     * @return BillReceiverType
     */
    public function getBillReceiver()
    {
      return $this->BillReceiver;
    }

    /**
     * @param BillReceiverType $BillReceiver
     * @return \UpsWsdl\Classes\Ship\FreightCollectType
     */
    public function setBillReceiver($BillReceiver)
    {
      $this->BillReceiver = $BillReceiver;
      return $this;
    }

}
