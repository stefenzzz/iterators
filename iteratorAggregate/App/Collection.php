<?php

namespace App;

class Collection implements \IteratorAggregate
{
    

    public function __construct(public array $collection)
    {

    }

    public function getIterator()
    {
        return new \ArrayIterator($this->collection);
    }

}