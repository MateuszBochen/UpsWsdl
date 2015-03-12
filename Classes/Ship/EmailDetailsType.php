<?php

namespace UpsWsdl\Classes\Ship;

class EmailDetailsType
{

    /**
     * @var string[] $EMailAddress
     */
    protected $EMailAddress = null;

    /**
     * @var string $UndeliverableEMailAddress
     */
    protected $UndeliverableEMailAddress = null;

    /**
     * @var string $FromEMailAddress
     */
    protected $FromEMailAddress = null;

    /**
     * @var string $FromName
     */
    protected $FromName = null;

    /**
     * @var string $Memo
     */
    protected $Memo = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var string $SubjectCode
     */
    protected $SubjectCode = null;

    /**
     * @param string[] $EMailAddress
     * @param string $UndeliverableEMailAddress
     * @param string $FromEMailAddress
     * @param string $FromName
     * @param string $Memo
     * @param string $Subject
     * @param string $SubjectCode
     */
    public function __construct(array $EMailAddress = null, $UndeliverableEMailAddress = null, $FromEMailAddress = null, $FromName = null, $Memo = null, $Subject = null, $SubjectCode = null)
    {
      $this->EMailAddress = $EMailAddress;
      $this->UndeliverableEMailAddress = $UndeliverableEMailAddress;
      $this->FromEMailAddress = $FromEMailAddress;
      $this->FromName = $FromName;
      $this->Memo = $Memo;
      $this->Subject = $Subject;
      $this->SubjectCode = $SubjectCode;
    }

    /**
     * @return string[]
     */
    public function getEMailAddress()
    {
      return $this->EMailAddress;
    }

    /**
     * @param string[] $EMailAddress
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setEMailAddress(array $EMailAddress)
    {
      $this->EMailAddress = $EMailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getUndeliverableEMailAddress()
    {
      return $this->UndeliverableEMailAddress;
    }

    /**
     * @param string $UndeliverableEMailAddress
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setUndeliverableEMailAddress($UndeliverableEMailAddress)
    {
      $this->UndeliverableEMailAddress = $UndeliverableEMailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromEMailAddress()
    {
      return $this->FromEMailAddress;
    }

    /**
     * @param string $FromEMailAddress
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setFromEMailAddress($FromEMailAddress)
    {
      $this->FromEMailAddress = $FromEMailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
      return $this->FromName;
    }

    /**
     * @param string $FromName
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setFromName($FromName)
    {
      $this->FromName = $FromName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->Memo;
    }

    /**
     * @param string $Memo
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setMemo($Memo)
    {
      $this->Memo = $Memo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
      return $this->SubjectCode;
    }

    /**
     * @param string $SubjectCode
     * @return \UpsWsdl\Classes\Ship\EmailDetailsType
     */
    public function setSubjectCode($SubjectCode)
    {
      $this->SubjectCode = $SubjectCode;
      return $this;
    }

}
