<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';


use App\{Invoice,InvoiceCollection};

$args = [
    new Invoice(15),
    new Invoice(25),
    new Invoice(50),
];

$invoiceCollection = new InvoiceCollection($args);
echo '<pre>';

foreach($invoiceCollection as $invoice){
   
   echo $invoice->id .' - ' . $invoice->amount. PHP_EOL;
}

foo([1,2,3]);
foo($invoiceCollection);

function foo(iterable $iterable){

        foreach($iterable as $key => $iterate){
             var_dump($iterate);
        }
}