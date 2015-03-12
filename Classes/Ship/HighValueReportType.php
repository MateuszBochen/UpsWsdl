<?php

namespace UpsWsdl\Classes\Ship;

class HighValueReportType
{

    /**
     * @var ImageType $Image
     */
    protected $Image = null;

    /**
     * @param ImageType $Image
     */
    public function __construct($Image = null)
    {
      $this->Image = $Image;
    }

    /**
     * @return ImageType
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param ImageType $Image
     * @return \UpsWsdl\Classes\Ship\HighValueReportType
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

}
