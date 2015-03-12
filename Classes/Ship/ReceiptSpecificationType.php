<?php

namespace UpsWsdl\Classes\Ship;

class ReceiptSpecificationType
{

    /**
     * @var ReceiptImageFormatType $ImageFormat
     */
    protected $ImageFormat = null;

    /**
     * @param ReceiptImageFormatType $ImageFormat
     */
    public function __construct($ImageFormat = null)
    {
      $this->ImageFormat = $ImageFormat;
    }

    /**
     * @return ReceiptImageFormatType
     */
    public function getImageFormat()
    {
      return $this->ImageFormat;
    }

    /**
     * @param ReceiptImageFormatType $ImageFormat
     * @return \UpsWsdl\Classes\Ship\ReceiptSpecificationType
     */
    public function setImageFormat($ImageFormat)
    {
      $this->ImageFormat = $ImageFormat;
      return $this;
    }

}
