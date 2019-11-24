<?php
// Edit Sven 2019-11-14
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<pre><?php
$id = 1;
$output = '';
$data = file('hgb266.txt');
// print_r($data);
$parsed = array();
foreach ($data as $item) {

    $t = trim($item);
    $t = str_replace('  ', ' ', $t);
    $t = str_replace("\r", '', $t);
    if(substr($t, 0, 1) == ' ') {
        $t = substr($t, 1);
    }
    echo quoteMe(deencode($t)) . ',' . PHP_EOL;
}

// print_r($parsed);
function deencode(string $str): string
{
    $fi = [
        "\t",
        ',',
        'ä',
        'ö',
        'ü',
        'Ä',
        'Ö',
        'Ü',
        'ß',
        ' ',
        '-',
        '#',
        '(',
        ')',
        '-',
        ';',
        '§',
        '.',
        ':',
        '__'
    ];
    $re = [
        '',
        '_',
        'ae',
        'oe',
        'ue',
        'Ae',
        'Oe',
        'Ue',
        'ss',
        '_',
        '_',
        '_',
        '_',
        '_',
        '_',
        '_',
        '_',
        '_',
        '_',
        '_'
    ];
    $t = str_replace($fi, $re, trim($str));
    if(substr($t, 0, 1) == '_') {
        $t = substr($t, 1);
    }
//     if(substr($t, strlen($t-2), 1) == '_') {
//         $t = substr($t, 0, strlen($t-1));
//     }
    return $t;
}
function quoteMe(string $str, string $qs="'") : string 
{
    return $qs . $str .$qs;
}