<?php

namespace UpsWsdl\Classes\Rate;

class Property
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @param string $_
     * @param string $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \UpsWsdl\Classes\Rate\Property
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \UpsWsdl\Classes\Rate\Property
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
