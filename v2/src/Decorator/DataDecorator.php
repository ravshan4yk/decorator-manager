<?php

namespace src\Decorator;

use src\Contracts\DataInterface;

abstract class DataDecorator implements DataInterface
{
    protected $data;

    public function __construct(DataInterface $data)
    {
        $this->data = $data;
    }
}