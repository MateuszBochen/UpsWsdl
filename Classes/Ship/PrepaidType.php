<?php

namespace UpsWsdl\Classes\Ship;

class PrepaidType
{

    /**
     * @var BillShipperType $BillShipper
     */
    protected $BillShipper = null;

    /**
     * @param BillShipperType $BillShipper
     */
    public function __construct($BillShipper = null)
    {
      $this->BillShipper = $BillShipper;
    }

    /**
     * @return BillShipperType
     */
    public function getBillShipper()
    {
      return $this->BillShipper;
    }

    /**
     * @param BillShipperType $BillShipper
     * @return \UpsWsdl\Classes\Ship\PrepaidType
     */
    public function setBillShipper($BillShipper)
    {
      $this->BillShipper = $BillShipper;
      return $this;
    }

}
