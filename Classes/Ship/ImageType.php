<?php

namespace UpsWsdl\Classes\Ship;

class ImageType
{

    /**
     * @var ImageFormatType $ImageFormat
     */
    protected $ImageFormat = null;

    /**
     * @var string $GraphicImage
     */
    protected $GraphicImage = null;

    /**
     * @param ImageFormatType $ImageFormat
     * @param string $GraphicImage
     */
    public function __construct($ImageFormat = null, $GraphicImage = null)
    {
      $this->ImageFormat = $ImageFormat;
      $this->GraphicImage = $GraphicImage;
    }

    /**
     * @return ImageFormatType
     */
    public function getImageFormat()
    {
      return $this->ImageFormat;
    }

    /**
     * @param ImageFormatType $ImageFormat
     * @return \UpsWsdl\Classes\Ship\ImageType
     */
    public function setImageFormat($ImageFormat)
    {
      $this->ImageFormat = $ImageFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getGraphicImage()
    {
      return $this->GraphicImage;
    }

    /**
     * @param string $GraphicImage
     * @return \UpsWsdl\Classes\Ship\ImageType
     */
    public function setGraphicImage($GraphicImage)
    {
      $this->GraphicImage = $GraphicImage;
      return $this;
    }

}
