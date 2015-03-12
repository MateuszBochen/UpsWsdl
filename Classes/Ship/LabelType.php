<?php

namespace UpsWsdl\Classes\Ship;

class LabelType extends ImageType
{

    /**
     * @var string $InternationalSignatureGraphicImage
     */
    protected $InternationalSignatureGraphicImage = null;

    /**
     * @var string $HTMLImage
     */
    protected $HTMLImage = null;

    /**
     * @var string $PDF417
     */
    protected $PDF417 = null;

    /**
     * @param ImageFormatType $ImageFormat
     * @param string $GraphicImage
     * @param string $InternationalSignatureGraphicImage
     * @param string $HTMLImage
     * @param string $PDF417
     */
    public function __construct($ImageFormat = null, $GraphicImage = null, $InternationalSignatureGraphicImage = null, $HTMLImage = null, $PDF417 = null)
    {
      parent::__construct($ImageFormat, $GraphicImage);
      $this->InternationalSignatureGraphicImage = $InternationalSignatureGraphicImage;
      $this->HTMLImage = $HTMLImage;
      $this->PDF417 = $PDF417;
    }

    /**
     * @return string
     */
    public function getInternationalSignatureGraphicImage()
    {
      return $this->InternationalSignatureGraphicImage;
    }

    /**
     * @param string $InternationalSignatureGraphicImage
     * @return \UpsWsdl\Classes\Ship\LabelType
     */
    public function setInternationalSignatureGraphicImage($InternationalSignatureGraphicImage)
    {
      $this->InternationalSignatureGraphicImage = $InternationalSignatureGraphicImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getHTMLImage()
    {
      return $this->HTMLImage;
    }

    /**
     * @param string $HTMLImage
     * @return \UpsWsdl\Classes\Ship\LabelType
     */
    public function setHTMLImage($HTMLImage)
    {
      $this->HTMLImage = $HTMLImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getPDF417()
    {
      return $this->PDF417;
    }

    /**
     * @param string $PDF417
     * @return \UpsWsdl\Classes\Ship\LabelType
     */
    public function setPDF417($PDF417)
    {
      $this->PDF417 = $PDF417;
      return $this;
    }

}
