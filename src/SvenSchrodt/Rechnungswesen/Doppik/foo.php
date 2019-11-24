<?php

use SvenSchrodt\Rechnungswesen\Doppik\Bilanz;

header("Content-type: application/json; charset=utf-8"); 
require_once 'Bilanz.php';
$foo = new Bilanz();
echo $foo->getBilanzGliederung(true);