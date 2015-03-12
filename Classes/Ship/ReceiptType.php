<?php

namespace UpsWsdl\Classes\Ship;

class ReceiptType extends ImageType
{

    /**
     * @param ImageFormatType $ImageFormat
     * @param string $GraphicImage
     */
    public function __construct($ImageFormat = null, $GraphicImage = null)
    {
      parent::__construct($ImageFormat, $GraphicImage);
    }

}
