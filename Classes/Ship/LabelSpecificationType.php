<?php

namespace UpsWsdl\Classes\Ship;

class LabelSpecificationType
{

    /**
     * @var LabelImageFormatType $LabelImageFormat
     */
    protected $LabelImageFormat = null;

    /**
     * @var string $HTTPUserAgent
     */
    protected $HTTPUserAgent = null;

    /**
     * @var LabelStockSizeType $LabelStockSize
     */
    protected $LabelStockSize = null;

    /**
     * @var InstructionCodeDescriptionType[] $Instruction
     */
    protected $Instruction = null;

    /**
     * @param LabelImageFormatType $LabelImageFormat
     * @param string $HTTPUserAgent
     * @param LabelStockSizeType $LabelStockSize
     * @param InstructionCodeDescriptionType[] $Instruction
     */
    public function __construct($LabelImageFormat = null, $HTTPUserAgent = null, $LabelStockSize = null, array $Instruction = null)
    {
      $this->LabelImageFormat = $LabelImageFormat;
      $this->HTTPUserAgent = $HTTPUserAgent;
      $this->LabelStockSize = $LabelStockSize;
      $this->Instruction = $Instruction;
    }

    /**
     * @return LabelImageFormatType
     */
    public function getLabelImageFormat()
    {
      return $this->LabelImageFormat;
    }

    /**
     * @param LabelImageFormatType $LabelImageFormat
     * @return \UpsWsdl\Classes\Ship\LabelSpecificationType
     */
    public function setLabelImageFormat($LabelImageFormat)
    {
      $this->LabelImageFormat = $LabelImageFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getHTTPUserAgent()
    {
      return $this->HTTPUserAgent;
    }

    /**
     * @param string $HTTPUserAgent
     * @return \UpsWsdl\Classes\Ship\LabelSpecificationType
     */
    public function setHTTPUserAgent($HTTPUserAgent)
    {
      $this->HTTPUserAgent = $HTTPUserAgent;
      return $this;
    }

    /**
     * @return LabelStockSizeType
     */
    public function getLabelStockSize()
    {
      return $this->LabelStockSize;
    }

    /**
     * @param LabelStockSizeType $LabelStockSize
     * @return \UpsWsdl\Classes\Ship\LabelSpecificationType
     */
    public function setLabelStockSize($LabelStockSize)
    {
      $this->LabelStockSize = $LabelStockSize;
      return $this;
    }

    /**
     * @return InstructionCodeDescriptionType[]
     */
    public function getInstruction()
    {
      return $this->Instruction;
    }

    /**
     * @param InstructionCodeDescriptionType[] $Instruction
     * @return \UpsWsdl\Classes\Ship\LabelSpecificationType
     */
    public function setInstruction(array $Instruction)
    {
      $this->Instruction = $Instruction;
      return $this;
    }

}
