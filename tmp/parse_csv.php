<?php declare(strict_types=1); 
//Edit Sven 2019-11-14
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<pre><?php declare(strict_types=1); 
$id= 1;
$output = '';
$data = file('ikr.csv');
// print_r($data);
$parsed = array();
foreach ($data as $item) {
    
    $tmp = explode(';', trim($item));
    if(strlen($tmp[1])==4) {
        $foo = ucfirst($tmp[2]);
        echo "'{$tmp[1]}' => '{$foo}',\n";
        
    }
}
// print_r($parsed);
echo $output;
