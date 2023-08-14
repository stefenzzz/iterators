<?php

namespace App;

class InvoiceCollection implements \Iterator
{
    

 
    public int $key;
    public function __construct(public array $invoices)
    {
        
    }

    public function current()
    {
        echo __METHOD__. PHP_EOL;
        
        return $this->invoices[$this->key];
    }
    
    public function next()
    {
        echo __METHOD__. PHP_EOL;
        
        ++$this->key;
    }
    
    public function key()
    {
        echo __METHOD__. PHP_EOL;
        
        return $this->key;
    }
    public function valid()
    {
        echo __METHOD__. PHP_EOL;
       return isset($this->invoices[$this->key]);
    }
    public function rewind()
    {
        echo __METHOD__. PHP_EOL;
        $this->key = 0 ;
    }

}