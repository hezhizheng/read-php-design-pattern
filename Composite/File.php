<?php

namespace Composite;

class File implements CompositeApi
{

    public $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(CompositeApi $compositeApi)
    {
        // TODO: Implement add() method.
    }

    public function delete(CompositeApi $compositeApi)
    {
        // TODO: Implement delete() method.
    }

    public function printComposite()
    {
        // TODO: Implement printComposite() method.
    }

    public function operation()
    {
        // TODO: Implement operation() method.
    }
}