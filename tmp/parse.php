<?php declare(strict_types=1); 
//Edit Sven 2019-11-14
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<pre><?php declare(strict_types=1); 
$id= 1;
$output = 'id;number;label' . PHP_EOL;
$data = file('ikr_flat.txt');
// print_r($data);
$parsed = array();
foreach ($data as $item) {
    
    $tmp = explode(' ', trim($item));
    $no = array_shift($tmp);
    $label = implode(' ', $tmp);
    $label = ($label ==='Frei') ? 'n/a' : $label;
    $parsed[$no] = $label;
    $output .= implode(';', array($id,$no, $label))  . PHP_EOL;
    $id++;
}
// print_r($parsed);
echo $output;
