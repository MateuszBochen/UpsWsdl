<?php

namespace UpsWsdl\Classes\Ship;

class FormType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var FormImageType $Image
     */
    protected $Image = null;

    /**
     * @var string $FormGroupId
     */
    protected $FormGroupId = null;

    /**
     * @var string $FormGroupIdName
     */
    protected $FormGroupIdName = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param FormImageType $Image
     * @param string $FormGroupId
     * @param string $FormGroupIdName
     */
    public function __construct($Code = null, $Description = null, $Image = null, $FormGroupId = null, $FormGroupIdName = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
      $this->Image = $Image;
      $this->FormGroupId = $FormGroupId;
      $this->FormGroupIdName = $FormGroupIdName;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \UpsWsdl\Classes\Ship\FormType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \UpsWsdl\Classes\Ship\FormType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return FormImageType
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param FormImageType $Image
     * @return \UpsWsdl\Classes\Ship\FormType
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormGroupId()
    {
      return $this->FormGroupId;
    }

    /**
     * @param string $FormGroupId
     * @return \UpsWsdl\Classes\Ship\FormType
     */
    public function setFormGroupId($FormGroupId)
    {
      $this->FormGroupId = $FormGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormGroupIdName()
    {
      return $this->FormGroupIdName;
    }

    /**
     * @param string $FormGroupIdName
     * @return \UpsWsdl\Classes\Ship\FormType
     */
    public function setFormGroupIdName($FormGroupIdName)
    {
      $this->FormGroupIdName = $FormGroupIdName;
      return $this;
    }

}
