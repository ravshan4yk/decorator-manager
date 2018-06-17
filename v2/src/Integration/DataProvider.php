<?php

namespace src\Integration;

use src\Contracts\DataInterface;

class DataProvider implements DataInterface
{
    private $host;
    private $user;
    private $password;

    /**
     * @param $host
     * @param $user
     * @param $password
     */
    public function __construct($host, $user, $password)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @param array $request
     *
     * @return mixed
     */
    public function get(array $request)
    {
        // returns a response from external service
    }
}
