<?php

namespace src\Contracts;

interface DataInterface
{
    /**
     * Returns a response from external service
     *
     * @param array $request
     *
     * @return mixed
     */
    public function get(array $request);
}