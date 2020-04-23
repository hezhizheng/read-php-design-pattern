<?php

namespace Composite;

interface CompositeApi
{
    public function add(CompositeApi $compositeApi);
    public function delete(CompositeApi $compositeApi);
    public function printComposite();
    public function operation();
}