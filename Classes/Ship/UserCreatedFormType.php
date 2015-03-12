<?php

namespace UpsWsdl\Classes\Ship;

class UserCreatedFormType
{

    /**
     * @var string[] $DocumentID
     */
    protected $DocumentID = null;

    /**
     * @param string[] $DocumentID
     */
    public function __construct(array $DocumentID = null)
    {
      $this->DocumentID = $DocumentID;
    }

    /**
     * @return string[]
     */
    public function getDocumentID()
    {
      return $this->DocumentID;
    }

    /**
     * @param string[] $DocumentID
     * @return \UpsWsdl\Classes\Ship\UserCreatedFormType
     */
    public function setDocumentID(array $DocumentID)
    {
      $this->DocumentID = $DocumentID;
      return $this;
    }

}
