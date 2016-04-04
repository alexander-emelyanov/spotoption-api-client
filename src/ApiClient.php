<?php

namespace SpotOption;

class ApiClient
{
    protected $url;

    protected $username;

    protected $password;

    public function __construct($url, $username, $password)
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
    }
}
