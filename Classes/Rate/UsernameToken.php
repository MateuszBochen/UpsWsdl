<?php

namespace UpsWsdl\Classes\Rate;

class UsernameToken
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param string $Username
     * @param string $Password
     */
    public function __construct($Username = null, $Password = null)
    {
      $this->Username = $Username;
      $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \UpsWsdl\Classes\Rate\UsernameToken
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \UpsWsdl\Classes\Rate\UsernameToken
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
