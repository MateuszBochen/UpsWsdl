<?php

namespace UpsWsdl\Classes\Ship;

class LabelStockSizeType
{

    /**
     * @var string $Height
     */
    protected $Height = null;

    /**
     * @var string $Width
     */
    protected $Width = null;

    /**
     * @param string $Height
     * @param string $Width
     */
    public function __construct($Height = null, $Width = null)
    {
      $this->Height = $Height;
      $this->Width = $Width;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param string $Height
     * @return \UpsWsdl\Classes\Ship\LabelStockSizeType
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param string $Width
     * @return \UpsWsdl\Classes\Ship\LabelStockSizeType
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}
