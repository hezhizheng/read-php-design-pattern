<?php

namespace Mediator;
abstract class Colleague
{
    private $mediator;

    public function __construct($mediator)
    {
        $this->mediator = $mediator;
    }

    protected function getMediator()
    {
        return $this->mediator;
    }
}
