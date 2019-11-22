<?php 
//Edit Sven 2019-11-14
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<pre><?php 
$id= 1;
$output = '';
$data = file('ikr.csv');
// print_r($data);
$parsed = array();
foreach ($data as $item) {
    
    $tmp = explode(';', trim($item));
    if(strlen($tmp[1])==4) {
        echo "'{$tmp[1]}' => '{$tmp[2]}',\n";
        
    }
}
// print_r($parsed);
echo $output;
