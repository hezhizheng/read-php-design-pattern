<?php

namespace Composite;

class Folder implements CompositeApi
{

    public $name = '';

    public $composites = [];

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    
    public function add(CompositeApi $compositeApi)
    {
        if(in_array($compositeApi,$this->composites,true))
        {
            return;
        }
        $this->composites[] = $compositeApi;
    }

    public function delete(CompositeApi $compositeApi)
    {
        $key = array_search($compositeApi, $this->composites, true);
        if (!$key) {
            throw new \Exception("not found", 404);
        }
        unset($this->composites[$key]);
        $this->composites = array_values($this->composites);
    }

    public function printComposite()
    {
        // TODO: Implement printComposite() method.

        foreach ($this->composites as $v) {
            if ($v instanceof Folder) {
                echo '---' . $v->name . "---\n";
                $v->printComposite();
                continue;
            }
            echo $v->name . "\n";
        }
    }

    public function operation()
    {
        // TODO: Implement operation() method.
    }
}