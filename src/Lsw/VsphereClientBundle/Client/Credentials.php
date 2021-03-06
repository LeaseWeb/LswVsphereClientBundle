<?php

namespace Lsw\VsphereClientBundle\Client;

/**
 * Class Credentials
 * @package Lsw\VsphereClientBundle\Client
 */
class Credentials
{
    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /**
     * Credentials constructor.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
